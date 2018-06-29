<?php
/***************************************************************************
*                                                                          *
*                   All rights reserved! eComLabs LLC                      *
*                                                                          *
****************************************************************************/

if (!defined('BOOTSTRAP')) { die('Access denied'); }

fn_register_hooks(
    'render_blocks',
    'render_block_content_pre',
    'render_block_pre'
);
