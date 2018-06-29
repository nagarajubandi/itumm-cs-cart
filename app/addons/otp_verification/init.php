<?php
/******************************************************************
# OTP Verification - OTP Verification							  *
# ----------------------------------------------------------------*
# author    Webkul                                                *
# copyright Copyright (C) 2010 webkul.com. All Rights Reserved.   *
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL     *
# Websites: http://webkul.com                                     *
*******************************************************************
*/


if (!defined('BOOTSTRAP')) { die('Access denied'); }

fn_register_hooks(
    'place_order',
    'get_order_info',
    'auth_routines',
    'update_user_profile_post',
    'pre_delete_user'
);