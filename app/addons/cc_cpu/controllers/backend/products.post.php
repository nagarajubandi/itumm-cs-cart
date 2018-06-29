<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($mode == 'update' && Registry::get('runtime.company_id')) {
    Registry::set('navigation.tabs', array());
}
