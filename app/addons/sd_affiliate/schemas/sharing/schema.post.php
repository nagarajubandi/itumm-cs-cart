<?php

$schema['affiliate_plans'] = array(
    'controller' => 'affiliate_plans',
    'mode' => 'update',
    'type' => 'tpl_tabs',
    'params' => array(
        'object_id' => '@plan_id',
        'object' => 'affiliate_plans'
    ),
    'table' => array(
        'name' => 'affiliate_plans',
        'key_field' => 'plan_id',
    ),
    'request_object' => 'affiliate_plan',
    'have_owner' => true,
);

return $schema;
