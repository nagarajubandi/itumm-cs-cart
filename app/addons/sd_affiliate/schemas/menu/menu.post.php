<?php

$schema['central']['customers']['items']['affiliates'] = array(
    'attrs' => array(
        'class'=>'is-addon'
    ),
    'href' => 'partners.manage',
    'alt' => 'profiles.update?user_type=P',
    'position' => 350
);

$schema['central']['marketing']['items']['affiliates_partnership'] = array(
    'attrs' => array(
        'class'=>'is-addon'
    ),
    'href' => 'partners.manage',
    'subitems' => array(
        'product_groups' => array(
            'href' => 'product_groups.manage',
            'position' => 100
        ),
        'affilate_banners_manager' => array(
            'href' => 'banners_manager.manage',
            'position' => 200,
            'subitems' => array(
                'text_banners' => array(
                    'href' => 'banners_manager.manage?banner_type=T',
                    'position' => 100,
                ),
                'graphic_banners' => array(
                    'href' => 'banners_manager.manage?banner_type=G',
                    'position' => 200,
                ),
                'product_banners' => array(
                    'href' => 'banners_manager.manage?banner_type=P',
                    'position' => 300,
                )
            )
        ),
        'plans' => array(
            'href' => 'affiliate_plans.manage',
            'position' => 300
        ),
        'affiliate_partners' => array(
            'href' => 'partners.manage',
            'alt' => 'profiles.update?user_type=P',
            'position' => 400
        ),
        'approve_commissions' => array(
            'href' => 'aff_statistics.approve',
            'position' => 500
        ),
        'pay_affiliates' => array(
            'href' => 'payouts.pay',
            'position' => 600
        ),
        'payouts' => array(
            'href' => 'payouts.manage',
            'position' => 700
        ),
        'accounting_history' => array(
            'href' => 'payouts.previous',
            'position' => 800
        ),
        'affiliate_tiers_tree' => array(
            'href' => 'partners.tree',
            'position' => 900
        ),
    ),
);

return $schema;
