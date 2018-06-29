<?php

use Tygh\Registry;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	return;
}

if ($mode == 'products') {
	if (!empty($_REQUEST['company_id'])) {
		Registry::set('runtime.vendor_company_id', $_REQUEST['company_id']);
	}
}