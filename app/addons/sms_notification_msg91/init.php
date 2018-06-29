<?php
/******************************************************************
# SMS Notification By Msg91 - SMS Notification By Msg91           *
# ----------------------------------------------------------------*
# author    Webkul                                                *
# copyright Copyright (C) 2010 webkul.com. All Rights Reserved.   *
# @license - http://www.gnu.org/licenses/gpl.html GNU/GPL         *
# Websites: http://webkul.com                                     *
*******************************************************************
*/ 

if (!defined('BOOTSTRAP')) { die('Access denied'); }

fn_register_hooks(
    'update_profile',
    'create_shipment_post',
    'get_notification_rules',
    'change_company_status_before_mail',
    'update_product_amount'
);