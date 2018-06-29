<?php

/*$schema['youtube_video'] = array(
    'templates' => array(
        'addons/cc_youtube/blocks/youtube_video.tpl' => array(),
    ),
    'wrappers' => 'blocks/wrappers',
    'cache' => false
);*/

$schema['video_gallery'] = array(
    'settings' => array(
        'play_video_block' => array(
            'type' => 'checkbox',
            'default_value' => 'Y'
        ),
        'video_limit' => array(
            'type' => 'input',
            'default_value' => '6'
        )
    ),
    'templates' => array(
        'addons/cc_youtube/blocks/video_gallery.tpl' => array(),
    ),
    'wrappers' => 'blocks/wrappers',
    'cache' => false
);

return $schema;
