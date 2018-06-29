<?php
/***************************************************************************
*                                                                          *
*                   All rights reserved! eComLabs LLC                      *
*                                                                          *
****************************************************************************/

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (defined('AJAX_REQUEST')) {
        if ($mode == 'grid' && isset($_REQUEST['snappings']) && is_array($_REQUEST['snappings'])) {
            foreach ($_REQUEST['snappings'] as & $snapping_data) {
                if (!empty($snapping_data['action'])) {

                    if ($snapping_data['action'] == 'update' || $snapping_data['action'] == 'add') {
                        if ($snapping_data['grid_data']['is_tabbed'] == 'Y' && strpos($snapping_data['grid_data']['user_class'], 'cm-tabs-blocks') === false) {
                            $snapping_data['grid_data']['user_class'] .= ' cm-tabs-blocks';
                        } elseif ($snapping_data['grid_data']['is_tabbed'] == 'N' && strpos($snapping_data['grid_data']['user_class'], 'cm-tabs-blocks') !== false) {
                            $snapping_data['grid_data']['user_class'] = str_replace('cm-tabs-blocks', '', $snapping_data['grid_data']['user_class']);
                        }
                    }
                }
            }
        }
    }

    return;
}