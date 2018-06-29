<?php

$schema['partners'] = array (
    'func' => 'fn_get_users',
    'auth' => true,
    'additional_data' => array('user_type' => 'P'),
    'item_id' => 'user_id'
);
$schema['payouts'] = array (
    'func' => 'fn_get_payouts',
    'item_id' => 'payout_id'
);

return $schema;
