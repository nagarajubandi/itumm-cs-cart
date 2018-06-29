<?php

use Tygh\Registry;
use Tygh\Enum\UserStatuses;
use Tygh\Enum\UserTypes;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($mode == 'update') {
        if ($_REQUEST['user_data']['user_type'] == UserTypes::PARTNER) {
            if ($_REQUEST['update_data']['approved'] == UserStatuses::NOAPPROVED || $_REQUEST['update_data']['approved'] == UserStatuses::DECLINED) {
                $_REQUEST['update_data']['plan_id'] = 0;
            }
            fn_update_partner_profile($_REQUEST['user_id'], $_REQUEST['update_data']);
        } else {
            fn_delete_partner_profile($_REQUEST['user_id']);
        }
        return;
    }
}

if ($mode == 'update') {
    if (!empty($_REQUEST['user_id']) && fn_sd_affiliate_get_user_type($_REQUEST['user_id']) == UserTypes::PARTNER) {
        $navigation = Registry::get('navigation.tabs');
        $navigation['affiliate_information'] = array(
            'title' => __('affiliate_information'),
            'js' => true,
        );
        $navigation['affiliate_tree'] = array(
            'title' => __('affiliate_tree'),
            'js' => true,
        );
        Registry::set('navigation.tabs', $navigation);
        $partner_data = fn_get_partner_data($_REQUEST['user_id']);

        if (empty($partner_data)) {
            return array(CONTROLLER_STATUS_NO_PAGE);
        }

        $partner_data['total_payouts'] = db_get_field('SELECT SUM(amount) FROM ?:affiliate_payouts WHERE partner_id = ?i', $_REQUEST['user_id']);
        $cnt_period = Registry::ifGet('addons.sd_affiliate.number_last_periods', 10);
        $start_date = fn_get_date_of_payment_period($cnt_period);
        if (!empty($start_date)) {
            $last_payouts = array();
            $max_amount = 0;
            $cur_date = getdate(TIME);
            $checkpoint_1 = 1;
            $checkpoint_2 = 16;
            $checkpoint_return = ($cur_date['mday'] < $checkpoint_2) ? false : true;
            while (!empty($cnt_period)) {
                switch (Registry::get('addons.sd_affiliate.payment_period')) {
                    case '1w':
                        $end_date = $start_date + SECONDS_IN_WEEK;
                        break;
                    case '2w':
                        if ($checkpoint_return) {
                            $_date = getdate($start_date);
                            $end_date = mktime(0, 0, 0, $_date['mon'], $checkpoint_1, $_date['year']);
                            $end_date = strtotime('+1 month', $end_date);
                        } else {
                            $end_date = $start_date + SECONDS_IN_FORTNIGHT;
                        }
                        $checkpoint_return = !$checkpoint_return;
                        break;
                    case '1m':
                        $end_date = strtotime('+1 month', $start_date);
                        break;
                }
                $last_payouts[$cnt_period]['amount'] = db_get_field('SELECT SUM(amount) FROM ?:aff_partner_actions WHERE partner_id = ?i AND approved = ?s AND date >= ?i AND date < ?i', $_REQUEST['user_id'], 'Y', $start_date, $end_date);
                if ($max_amount < $last_payouts[$cnt_period]['amount']) {
                    $max_amount = $last_payouts[$cnt_period]['amount'];
                }
                $last_payouts[$cnt_period]['range']['start'] = $start_date;
                $last_payouts[$cnt_period]['range']['end'] = $end_date - 1;
                $start_date = $end_date;
                --$cnt_period;
            }
        }

        if (empty($max_amount)) {
            $max_amount = 1;
        }

        $partners = fn_get_partners_tree($_REQUEST['user_id']);
        Registry::get('view')->assign(array(
            'total_commissions' => db_get_field('SELECT SUM(amount) FROM ?:aff_partner_actions WHERE partner_id = ?i AND approved = ?s', $_REQUEST['user_id'], 'Y'),
            'max_amount' => $max_amount,
            'last_payouts' => $last_payouts,
            'partner' => $partner_data,
            'partners' => $partners,
            'affiliate_plans' => fn_get_affiliate_plans_list(DESCR_SL)
        ));
    }
}
