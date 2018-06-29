<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/


namespace Tygh\Api\Entities;


/**
 * Class SraProducts
 *
 * @package Tygh\Api\Entities
 */
class SraProducts extends Products
{
    /** @inheritdoc */
    public function index($id = 0, $params = array())
    {
        $result = parent::index($id, $params);

        if ($id && !empty($result['data'])) {
            $result['data'] = fn_storefront_rest_api_format_product_prices($result['data']);

            fn_gather_additional_products_data($result['data'], array(
                'get_options' => true,
                'get_features' => true,
                'get_detailed' => true,
                'get_icon' => true,
                'get_additional' => true,
                'features_display_on' => 'A'
            ));
        } elseif (!empty($result['data']['products'])) {
            foreach ($result['data']['products'] as &$product) {
                $product = fn_storefront_rest_api_format_product_prices($product);
            }
            unset($product);
        }

        return $result;
    }
}