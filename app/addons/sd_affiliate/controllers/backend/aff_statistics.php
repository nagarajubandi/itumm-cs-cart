<?php

use Tygh\Registry;
use Tygh\Navigation\LastView;
use Tygh\Enum\UserTypes;
use Tygh\Enum\CommissionStatuses;
use Tygh\Enum\AffiliateStatuses;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $suffix = '';

    if ($mode == 'm_approve') {
        if (!empty($_REQUEST['action_ids'])) {
            fn_approve_commissions($_REQUEST['action_ids']);
        }

        $suffix = '.approve';
    }

    if ($mode == 'm_disapprove') {
        if (!empty($_REQUEST['action_ids'])) {
            fn_approve_commissions($_REQUEST['action_ids'], 'N');
        }

        $suffix = '.approve';
    }

    if ($mode == 'm_delete') {
        if (!empty($_REQUEST['action_ids'])) {
            fn_delete_affiliate_actions($_REQUEST['action_ids']);
        }

        $suffix = '.approve';
    }

    return array(CONTROLLER_STATUS_OK, "aff_statistics{$suffix}");
}

if ($mode == 'view') {
    list($action_data, $search) = fn_get_affiliate_actions($_REQUEST);

    if (empty($action_data)) {
        return array(CONTROLLER_STATUS_NO_PAGE);
    }

    $action_data = reset($action_data);
    if (!empty($action_data['parent_action_id'])) {
        list($p_action) = fn_get_affiliate_actions(array('action_id' => $action_data['parent_action_id']));
        if (!empty($p_action)) {
            $p_action = reset($p_action);
            if (!empty($p_action)) {
                $action_data = $p_action;
            }
        }
    }

    if (!empty($action_data)) {
        list($action_data['related_actions']) = fn_get_affiliate_actions(array('object_type' => AFFILIATE_DATA_TYPE_AFFILIATE, 'object_data' => $action_data['action_id']));
        $total_commission = $action_data['amount'];
        if (!empty($action_data['related_actions'])) {
            foreach ($action_data['related_actions'] as $ra) {
                $total_commission += $ra['amount'];
            }
        }

        $action_data['extended_data'] = array();
        if (!empty($action_data['customer_id'])) {
            $action_data['extended_data']['customer'] = fn_get_user_info($action_data['customer_id']);
        }

        $keys_extended_data = array_keys($action_data['data']);
        if (in_array(AFFILIATE_DATA_TYPE_ORDER, $keys_extended_data)) {
            $action_data['extended_data']['order'] = fn_get_order_info($action_data['data'][AFFILIATE_DATA_TYPE_ORDER]);
        }

        if (in_array(AFFILIATE_DATA_TYPE_PRODUCT, $keys_extended_data)) {
            $action_data['extended_data']['product'] = fn_get_product_data($action_data['data'][AFFILIATE_DATA_TYPE_PRODUCT], $auth);
            if (!empty($action_data['extended_data']['order']['items'])) {
                foreach ($action_data['extended_data']['order']['items'] as $item) {
                    if ($item['product_id'] == $action_data['data'][AFFILIATE_DATA_TYPE_PRODUCT] && !empty($item['subtotal'])) {
                        $action_data['extended_data']['product']['price'] = $item['subtotal'];
                    }
                    if ($item['product_id'] == $action_data['data'][AFFILIATE_DATA_TYPE_PRODUCT] && !empty($item['amount'])) {
                        $action_data['extended_data']['product']['amount'] = $item['amount'];
                    }
                }
            }
        }

        if (in_array(AFFILIATE_DATA_TYPE_PRODUCT, $keys_extended_data)) {
            $action_data['extended_data']['discount'] = fn_get_discounts('', $action_data['data'][AFFILIATE_DATA_TYPE_PRODUCT]);
        }
        Registry::get('view')->assign(array(
            'action_data' => $action_data,
            'total_commission' => $total_commission,
            'order_status_descr' => fn_get_simple_statuses(STATUSES_ORDER, true, true)
        ));
    }
} elseif ($mode == 'approve') {
    $payout_options = array();
    foreach (Registry::get('payout_types') as $payout_id => $payout_data) {
        $payout_options[$payout_id] = __($payout_data['title']);
    }

    $status_options = array(
        CommissionStatuses::APPROVED => __('approved'),
        CommissionStatuses::NOAPPROVED => __('awaiting_approval'),
        CommissionStatuses::PAIDUP => __('paidup'),
    );

    $list_plans = fn_get_affiliate_plans_list();

    list($partners) = fn_get_users(array('user_type' => UserTypes::PARTNER, 'status' => AffiliateStatuses::ACTIVE), $auth);
    $partner_list = array();
    foreach ($partners as $partner) {
        if (!empty($partner['firstname']) || !empty($partner['lastname'])) {
            $partner_list[$partner['user_id']] = $partner['firstname'] . ' ' . $partner['lastname'] . ' (' . __("user_id") . ': ' . $partner['user_id'] . ') ';
        }else {
            $partner_list[$partner['user_id']] = __("affiliate") . '_' . $partner['user_id'];
        }
    }

    // Get affiliates list to approve
    list($affiliate_commissions, $general_stats, $additional_stats, $search) = fn_get_affiliates_for_approve($_REQUEST, $auth, Registry::get('settings.Appearance.admin_elements_per_page'));
    Registry::get('view')->assign(array(
        'affiliate_commissions' => $affiliate_commissions,
        'general_stats' => $general_stats,
        'additional_stats' => $additional_stats,
        'search' => $search,
        'list_plans' => $list_plans,
        'status_options' => $status_options,
        'payout_options' => $payout_options,
        'payout_types' => Registry::get('payout_types'),
        'partner_list' => $partner_list,
        'order_status_descr' => fn_get_simple_statuses(STATUSES_ORDER, true, true)
    ));

} elseif ($mode == 'delete') {
    if (!empty($_REQUEST['action_id'])) {
        fn_delete_affiliate_actions((array) $_REQUEST['action_id']);
    }

    return array(CONTROLLER_STATUS_REDIRECT, 'aff_statistics.approve');
} elseif ($mode == 'each_approve') {
    if (!empty($_REQUEST['action_id'])) {
        fn_approve_commissions((array) $_REQUEST['action_id']);
    }

    return array(CONTROLLER_STATUS_REDIRECT, 'aff_statistics.approve');
}

function fn_delete_affiliate_actions($action_ids)
{
    $action_ids = is_array($action_ids) ? $action_ids : array($action_ids);
    $tmp_amounts = db_get_array('SELECT partner_id, amount, action_id, approved FROM ?:aff_partner_actions WHERE action_id IN (?n)', $action_ids);
    foreach ($tmp_amounts as $action_data) {
        if (!empty($action_data['partner_id']) && !empty($action_data['action_id'])) {
            $_amount = floatval($action_data['amount']);
            if ($action_data['approved'] == 'Y' && !empty($_amount)) {
                if (fn_update_partner_balance($action_data['partner_id'], $action_data['amount'], '-')) {
                    db_query('DELETE FROM ?:aff_partner_actions WHERE action_id = ?i', $action_data['action_id']);
                    db_query('DELETE FROM ?:aff_action_links WHERE action_id = ?i', $action_data['action_id']);
                }
            } else {
                db_query('DELETE FROM ?:aff_partner_actions WHERE action_id = ?i', $action_data['action_id']);
                db_query('DELETE FROM ?:aff_action_links WHERE action_id = ?i', $action_data['action_id']);
            }
        }
    }
}

function fn_approve_commissions($action_ids, $value = 'Y')
{
    $action_ids = is_array($action_ids) ? $action_ids : array($action_ids);
    $tmp_amounts = db_get_array('SELECT partner_id, amount, action_id, approved FROM ?:aff_partner_actions WHERE action_id IN (?n)', $action_ids);
    if (!empty($tmp_amounts)) {
        foreach ($tmp_amounts as $action_data) {
            if (!empty($action_data['partner_id']) && !empty($action_data['amount']) && !empty($action_data['action_id']) && (empty($action_data['approved']) || $action_data['approved'] != $value) && fn_update_partner_balance($action_data['partner_id'], $action_data['amount'], $value == 'Y' ? '+' : '-')) {
                db_query('UPDATE ?:aff_partner_actions SET ?u WHERE action_id = ?i', array('approved' => $value), $action_data['action_id']);
            }
        }
    }
}

function fn_get_affiliates_for_approve($params, $auth, $items_per_page = 0)
{
    // Init filter
    $params = LastView::instance()->update('aff_stats', $params);

    // Set default values to input params
    $params['page'] = empty($params['page']) ? 1 : $params['page'];

    $condition = '1';

    if (!empty($params['name'])) {
        // Check if first and last names are entered
        // $params['name'] =  preg_replace('|[\s]+|s', ' ', $params['name']);
        $full_name = explode(' ', $params['name']);
        if (sizeof($full_name) == 2) {
            $condition .= db_quote(' AND ((?:users.firstname LIKE ?l AND ?:users.lastname LIKE ?l) OR (?:users.firstname LIKE ?l AND ?:users.lastname LIKE ?l))', "%$full_name[0]%", "%$full_name[1]%", "%$full_name[1]%", "%$full_name[0]%");
        } else {
            $condition .= db_quote(' AND (?:users.firstname LIKE ?l OR ?:users.lastname LIKE ?l)', "%$params[name]%", "%$params[name]%");
        }
    }

    if (!empty($params['partner_id'])) {
        $condition .= db_quote(' AND actions.partner_id = ?i', $params['partner_id']);
    }

    if (!empty($params['period']) && $params['period'] != 'A') {
        list($params['time_from'], $params['time_to']) = fn_create_periods($params);

        $condition .= db_quote(' AND (actions.date >= ?i AND actions.date <= ?i)', $params['time_from'], $params['time_to']);
    }

    if (!empty($params['plan_id'])) {
        $condition .= db_quote(' AND actions.plan_id = ?i', $params['plan_id']);
    }

    if (!empty($params['action'])) {
        $_conditions = '';
        foreach ($params['action'] as $_act) {
            $_conditions .= (empty($_conditions) ? '' : 'OR') . db_quote(' action = ?s', $_act);
        }

        $condition .= " AND ($_conditions) ";
    }

    if (!empty($params['status'])) {
        $_conditions = '';
        foreach ($params['status'] as $_status) {
            $_conditions .= empty($_conditions) ? '' : 'OR';
            if ($_status == 'P') {
                $_conditions .= ' (actions.payout_id != 0) ';
            } elseif ($_status == AffiliateStatuses::ACTIVE) {
                $_conditions .= " (actions.payout_id = 0 AND actions.approved = 'Y') ";
            } else {
                $_conditions .= " (actions.approved = 'N' AND actions.payout_id = 0) ";
            }
        }
        $condition .= " AND ($_conditions) ";
    }

    if (!empty($params['zero_actions']) && $params['zero_actions'] == 'Y') {
        $condition .= ' AND actions.amount = 0';
    }

    if (isset($params['amount_from']) && fn_is_numeric($params['amount_from'])) {
        $condition .= db_quote(' AND actions.amount >= ?d', $params['amount_from']);
    }

    if (isset($params['amount_to']) && fn_is_numeric($params['amount_to'])) {
        $condition .= db_quote(' AND actions.amount <= ?d', $params['amount_to']);
    }

    $params['condition'] = $condition;

    list($affiliate_commissions, $params) = fn_get_affiliate_actions($params, $items_per_page);

    foreach ($affiliate_commissions as $commission_id => $commission) {
        $affiliate_commissions[$commission_id]['user_type'] = 'P';
        if (!empty($commission['partner_firstname']) || !empty($commission['partner_lastname'])) {
            $affiliate_commissions[$commission_id]['affiliate'] = $commission['partner_firstname'] . ' ' . $commission['partner_lastname'];
        } else {
            $affiliate_commissions[$commission_id]['affiliate'] = __("affiliate") . '_' . $commission['partner_id'];
        }
        if (!empty($commission['extra_data'])) {
            foreach ($commission['extra_data'] as $extra_data_id => $extra_data) {
                $affiliate_commissions[$commission_id]['extra_data'][$extra_data_id]['user_type'] = 'P';
                if (!empty($extra_data['partner_firstname']) || !empty($extra_data['partner_lastname'])) {
                    $affiliate_commissions[$commission_id]['extra_data'][$extra_data_id]['affiliate'] = $extra_data['partner_firstname'] . ' ' . $extra_data['partner_lastname'];
                } else {
                    $affiliate_commissions[$commission_id]['extra_data'][$extra_data_id]['affiliate'] = __("affiliate") . '_' . $extra_data['partner_id'];
                }
            }
        }
    }
    // Get general statistics
    $general_stats = db_get_hash_array('SELECT action, COUNT(action) as count, SUM(amount) as sum, AVG(amount) as avg, COUNT(distinct partner_id) as partners FROM ?:aff_partner_actions as actions WHERE ?p GROUP BY action', 'action', $condition);
    $general_stats['total'] = db_get_row("SELECT 'total' as action, COUNT(action) as count, SUM(amount) as sum, AVG(amount) as avg, COUNT(DISTINCT partner_id) as partners FROM ?:aff_partner_actions as actions WHERE ?p", $condition);

    // Get additional statistics
    $additional_stats = array();

    if (empty($general_stats['show']['count'])) {
        $additional_stats['click_vs_show'] = '---';
    } elseif (empty($general_stats['click']['count'])) {
        $additional_stats['click_vs_show'] = '0';
    } else {
        $additional_stats['click_vs_show'] = round($general_stats['click']['count'] / $general_stats['show']['count'] * 100, 1) . '% (' . intval($general_stats['click']['count']) . '/' . intval($general_stats['show']['count']) . ')';
    }

    if (empty($general_stats['click']['count'])) {
        $additional_stats['sale_vs_click'] = '---';
    } elseif (empty($general_stats['sale']['count'])) {
        $additional_stats['sale_vs_click'] = '0';
    } else {
        $additional_stats['sale_vs_click'] = round($general_stats['sale']['count'] / $general_stats['click']['count'] * 100, 1) . '% (' . intval($general_stats['sale']['count']) . '/' . intval($general_stats['click']['count']) . ')';
    }

    return array($affiliate_commissions, $general_stats, $additional_stats, $params);
}
