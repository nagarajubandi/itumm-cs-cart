<?php
/***************************************************************************
*                                                                          *
*                   All rights reserved! eCom Labs LLC                     *
*                                                                          *
****************************************************************************/

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

Registry::set('tab_blocks', array(
    'placeholder' => '<!--INSERTNEWTABHERE-->',
    'groups' => array()
));