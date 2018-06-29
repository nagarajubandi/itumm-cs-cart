<?php

use Tygh\Registry;

if (!empty($_REQUEST['from_cart'])) {
    Registry::set('runtime.fake_company_id', true);
}