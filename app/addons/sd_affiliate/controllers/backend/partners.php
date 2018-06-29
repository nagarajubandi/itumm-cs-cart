<?php

use Tygh\Registry;
use Tygh\Mailer;
use Tygh\Enum\UserStatuses;
use Tygh\Enum\UserTypes;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    fn_trusted_vars('update_data');

    if ($mode == 'm_update') {
        if (!empty($_REQUEST['update_data']) && is_array($_REQUEST['update_data'])) {
            foreach ($_REQUEST['update_data'] as $partner_id => $p_data) {
                fn_update_partner_profile($partner_id, $p_data);
            }
        }
    }
    if ($mode == 'm_approve') {
        if (!empty($_REQUEST['user_ids'])) {
            foreach ($_REQUEST['user_ids'] as $partner_id) {
                $_data = fn_get_partner_data($partner_id);

                if (empty($_data['approved']) || $_data['approved'] != UserStatuses::APPROVED) {
                    $p_data = array('approved' => UserStatuses::APPROVED);
                    fn_update_partner_profile($partner_id, $p_data);
                    $user_data = fn_get_user_info($partner_id);

                    // Send notification to partners
                    Mailer::sendMail(array(
                        'to' => $user_data['email'],
                        'from' => 'default_company_users_department',
                        'data' => array(
                            'user_data' => $user_data,
                        ),
                        'tpl' => 'addons/sd_affiliate/approved.tpl',
                        'company_id' => $user_data['company_id'],
                    ), 'C');
                }
            }
        }
    }

    if ($mode == 'decline') {
        $_data = fn_get_partner_data($action);
        if (empty($_data['approved']) || $_data['approved'] != UserStatuses::DECLINED) {
            $p_data = array('approved' => UserStatuses::DECLINED);
            $update_result = fn_update_partner_profile($action, $p_data);
            if ($update_result) {
                $user_data = fn_get_user_info($action, false);

                // Send notification to partners
                Mailer::sendMail(array(
                    'to' => $user_data['email'],
                    'from' => 'company_users_department',
                    'data' => array(
                        'user_data' => $user_data,
                        'reason_declined' => $_REQUEST["action_reason_declined_$action"],
                    ),
                    'tpl' => 'addons/sd_affiliate/declined.tpl',
                    'company_id' => $user_data['company_id'],
                ), 'C');
            }
        }
    }

    if ($mode == 'm_decline') {
        if (!empty($_REQUEST['user_ids'])) {
            foreach ($_REQUEST['user_ids'] as $partner_id) {
                $_data = fn_get_partner_data($partner_id);
                if (empty($_data['approved']) || $_data['approved'] != UserStatuses::DECLINED) {
                    $p_data = array('approved' => UserStatuses::DECLINED);
                    $update_result = fn_update_partner_profile($partner_id, $p_data);
                    if ($update_result) {
                        $user_data = fn_get_user_info($partner_id, false);

                        // Send notification to partners
                        Mailer::sendMail(array(
                            'to' => $user_data['email'],
                            'from' => 'company_users_department',
                            'data' => array(
                                'user_data' => $user_data,
                                'reason_declined' => $_REQUEST['action_reason_declined'],
                            ),
                            'tpl' => 'addons/sd_affiliate/declined.tpl',
                            'company_id' => $user_data['company_id'],
                        ), 'C');
                    }
                }
            }
        }
    }

    return array(CONTROLLER_STATUS_REDIRECT, 'partners.manage');
}

if ($mode == 'tree') {
    $partners = fn_get_partners_tree();
    Registry::get('view')->assign(array(
        'partners' => $partners,
        'affiliate_plans' => fn_get_affiliate_plans_list(DESCR_SL)
    ));
} elseif ($mode == 'manage') {
    $params = $_REQUEST;
    $params['user_type'] = UserTypes::PARTNER;
    list($partners, $search) = fn_get_users($params, $auth, Registry::get('settings.Appearance.admin_elements_per_page'), 'affiliates');
    Registry::get('view')->assign(array(
        'search' => $search,
        'partners' => $partners,
        'user_type' => UserTypes::PARTNER,
        'affiliate_plans' => fn_get_affiliate_plans_list(DESCR_SL),
        'countries' => fn_get_simple_countries(true, CART_LANGUAGE),
        'states' => fn_get_all_states()
    ));
} elseif ($mode == 'approve') {
    if (!empty($_REQUEST['user_id'])) {
        $_data = fn_get_partner_data($_REQUEST['user_id']);

        if (empty($_data['approved']) || $_data['approved'] != UserStatuses::APPROVED) {
            $p_data = array('approved' => UserStatuses::APPROVED);
            fn_update_partner_profile($_REQUEST['user_id'], $p_data);
            $user_data = fn_get_user_info($_REQUEST['user_id']);

            Mailer::sendMail(array(
                'to' => $user_data['email'],
                'from' => 'default_company_users_department',
                'data' => array(
                    'user_data' => $user_data,
                ),
                'tpl' => 'addons/sd_affiliate/approved.tpl',
                'company_id' => $user_data['company_id'],
            ), 'C');
        }
    }
    return array(CONTROLLER_STATUS_REDIRECT, 'partners.manage');
}

/* /Body **/
