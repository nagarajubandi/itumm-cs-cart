<?php
/***************************************************************************
*                                                                          *
*                   All rights reserved! eComLabs LLC                      *
*                                                                          *
****************************************************************************/

if (!defined('BOOTSTRAP')) { die('Access denied'); }

use Tygh\Registry;

function fn_ecl_tabbed_blocks_render_blocks(& $grid, $block, $obj, & $content)
{
    $tabs = Registry::get('tab_blocks.groups.tabs_' . $grid['grid_id']);

    if (AREA != 'C' || $block['status'] == 'D') {
        return false;
    }

    $placeholder = Registry::get('tab_blocks.placeholder');

    if ($grid['is_tabbed'] == 'Y' && empty($tabs)) {
        $content .= "<div class=\"tabs ty-tabs clearfix\"><ul class=\"ty-tabs__list\"><li class=\"ty-tabs__item cm-block-index-$block[block_id]\"><a class=\"ty-tabs__a\">$block[name]</a></li>$placeholder</ul></div>";
        $tabs[] = $block['block_id'];
        
    } elseif (!empty($tabs)) {
        $content = str_replace($placeholder, "<li class=\"ty-tabs__item cm-block-index-$block[block_id]\"><a class=\"ty-tabs__a\">$block[name]</a></li>$placeholder", $content);
        $tabs[] = $block['block_id'];
    }

    if (!empty($tabs)) {
        Registry::set('tab_blocks.groups.tabs_' . $grid['grid_id'], $tabs);
    }
}

function fn_ecl_tabbed_blocks_render_block_content_pre($template_variable, $field, $block_scheme, & $block)
{
    $tabs = Registry::get('tab_blocks.groups.tabs_' . $block['grid_id']);

    if (!empty($tabs) && in_array($block['block_id'], $tabs) && false === strpos($block['user_class'], " cm-tab-block cm-block-index-$block[block_id]")) {
        $first_id = array_shift($tabs);
        $block['user_class'] .= " cm-tab-block cm-block-index-$block[block_id]";
        Registry::get('view')->assign('block', $block);
    }
}

function fn_ecl_tabbed_blocks_render_block_pre(& $block, $block_schema, $params, $block_content)
{
    $tabs = Registry::get('tab_blocks.groups.tabs_' . $block['grid_id']);

    if (!empty($tabs) && in_array($block['block_id'], $tabs)) {
        $first_id = array_shift($tabs);
        $block['user_class'] .= " cm-tab-block cm-block-index-$block[block_id]";
        Registry::get('view')->assign('block', $block);
    }
}
