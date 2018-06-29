<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2017   *
* / /_\ | | _____  _| |_/ /_ __ __ _ _ __   __| |_ _ __   __ _   | |_ ___  __ _ _ __ ___   *
* |  _  | |/ _ \ \/ / ___ \ '__/ _` | '_ \ / _` | | '_ \ / _` |  | __/ _ \/ _` | '_ ` _ \  *
* | | | | |  __/>  <| |_/ / | | (_| | | | | (_| | | | | | (_| |  | ||  __/ (_| | | | | | | *
* \_| |_/_|\___/_/\_\____/|_|  \__,_|_| |_|\__,_|_|_| |_|\__, |  \___\___|\__,_|_| |_| |_| *
*                                                         __/ |                            *
*                                                        |___/                             *
* ---------------------------------------------------------------------------------------- *
* This is commercial software, only users who have purchased a valid license and  accept   *
* to the terms of the License Agreement can install and use this program.                  *
* ---------------------------------------------------------------------------------------- *
* website: https://cs-cart.alexbranding.com                                                *
*   email: info@alexbranding.com                                                           *
*******************************************************************************************/
$schema['banners']['templates']['addons/ab__advanced_banners/blocks/abab_carousel_combined.tpl'] = array (
'settings' => array (
'valign' => array (
'option_name' => 'abab.option.valign',
'tooltip' => __('ttc_abab.option.valign'),
'type' => 'selectbox',
'values' => array (
'top' => 'abab.option.valign.top',
'center' => 'abab.option.valign.center',
'bottom' => 'abab.option.valign.bottom',
),
'default_value' => 'center'
),
'align' => array (
'option_name' => 'abab.option.align',
'tooltip' => __('ttc_abab.option.align'),
'type' => 'selectbox',
'values' => array (
'left' => 'abab.option.align.left',
'center' => 'abab.option.align.center',
'right' => 'abab.option.align.right',
),
'default_value' => 'center'
),
'full_width_content' => array (
'option_name' => 'abab.option.full_width_content',
'tooltip' => __('ttc_abab.option.full_width_content'),
'type' => 'checkbox',
'default_value' => 'N'
),
'margin' => array (
'option_name' => 'abab.option.margin',
'tooltip' => __('ttc_abab.option.margin'),
'type' => 'input',
'default_value' => '0px 0px 0px 0px'
),
'padding' => array (
'option_name' => 'abab.option.padding',
'tooltip' => __('ttc_abab.option.padding'),
'type' => 'input',
'default_value' => '20px 20px 20px 20px'
),
'title_h' => array (
'option_name' => 'abab.option.title_tag',
'tooltip' => __('ttc_abab.option.title_tag'),
'type' => 'selectbox',
'values' => array (
'div' => 'abab.option.title_tag.div',
'h1' => 'abab.option.title_tag.h1',
'h2' => 'abab.option.title_tag.h2',
'h3' => 'abab.option.title_tag.h3',
),
'default_value' => 'div'
),
'title_font_size' => array (
'option_name' => 'abab.option.title_font_size',
'tooltip' => __('ttc_abab.option.title_font_size'),
'type' => 'input',
'default_value' => '38px'
),
'shadow_title' => array (
'option_name' => 'abab.option.shadow_title',
'type' => 'checkbox',
'default_value' => 'N'
),
'desc_font_size' => array (
'option_name' => 'abab.option.description_font_size',
'tooltip' => __('ttc_abab.option.description_font_size'),
'type' => 'input',
'default_value' => '14px'
),
'conent_tr_bg' => array (
'option_name' => 'abab.option.conent_tr_bg',
'tooltip' => __('ttc_abab.option.conent_tr_bg'),
'type' => 'checkbox',
'default_value' => 'N'
),
'desc_mark_color' => array (
'option_name' => 'abab.option.description_background',
'tooltip' => __('ttc_abab.option.description_background'),
'type' => 'input',
'default_value' => 'transparent'
),
'min_height' => array (
'option_name' => 'abab.option.min_height',
'tooltip' => __('ttc_abab.option.min_height'),
'type' => 'input',
'default_value' => '400px'
),
'navigation' => array (
'type' => 'selectbox',
'values' => array (
'N' => 'none',
'D' => 'dots',
'P' => 'pages',
'A' => 'arrows'
),
'default_value' => 'D'
),
'delay' => array (
'type' => 'input',
'default_value' => '3'
),
),
);
$schema['banners']['templates']['addons/ab__advanced_banners/blocks/abab_combined.tpl'] = array (
'settings' => array (
'valign' => array (
'option_name' => 'abab.option.valign',
'tooltip' => __('ttc_abab.option.valign'),
'type' => 'selectbox',
'values' => array (
'top' => 'abab.option.valign.top',
'center' => 'abab.option.valign.center',
'bottom' => 'abab.option.valign.bottom',
),
'default_value' => 'center'
),
'align' => array (
'option_name' => 'abab.option.align',
'tooltip' => __('ttc_abab.option.align'),
'type' => 'selectbox',
'values' => array (
'left' => 'abab.option.align.left',
'center' => 'abab.option.align.center',
'right' => 'abab.option.align.right',
),
'default_value' => 'center'
),
'full_width_content' => array (
'option_name' => 'abab.option.full_width_content',
'tooltip' => __('ttc_abab.option.full_width_content'),
'type' => 'checkbox',
'default_value' => 'N'
),
'margin' => array (
'option_name' => 'abab.option.margin',
'tooltip' => __('ttc_abab.option.margin'),
'type' => 'input',
'default_value' => '0px 0px 0px 0px'
),
'padding' => array (
'option_name' => 'abab.option.padding',
'tooltip' => __('ttc_abab.option.padding'),
'type' => 'input',
'default_value' => '20px 20px 20px 20px'
),
'title_h' => array (
'option_name' => 'abab.option.title_tag',
'tooltip' => __('ttc_abab.option.title_tag'),
'type' => 'selectbox',
'values' => array (
'div' => 'abab.option.title_tag.div',
'h1' => 'abab.option.title_tag.h1',
'h2' => 'abab.option.title_tag.h2',
'h3' => 'abab.option.title_tag.h3',
),
'default_value' => 'div'
),
'title_font_size' => array (
'option_name' => 'abab.option.title_font_size',
'tooltip' => __('ttc_abab.option.title_font_size'),
'type' => 'input',
'default_value' => '38px'
),
'shadow_title' => array (
'option_name' => 'abab.option.shadow_title',
'type' => 'checkbox',
'default_value' => 'N'
),
'desc_font_size' => array (
'option_name' => 'abab.option.description_font_size',
'tooltip' => __('ttc_abab.option.description_font_size'),
'type' => 'input',
'default_value' => '14px'
),
'conent_tr_bg' => array (
'option_name' => 'abab.option.conent_tr_bg',
'tooltip' => __('ttc_abab.option.conent_tr_bg'),
'type' => 'checkbox',
'default_value' => 'N'
),
'desc_mark_color' => array (
'option_name' => 'abab.option.description_background',
'tooltip' => __('ttc_abab.option.description_background'),
'type' => 'input',
'default_value' => 'transparent'
),
'min_height' => array (
'option_name' => 'abab.option.min_height',
'tooltip' => __('ttc_abab.option.min_height'),
'type' => 'input',
'default_value' => '400px'
),
),
);
return $schema;
