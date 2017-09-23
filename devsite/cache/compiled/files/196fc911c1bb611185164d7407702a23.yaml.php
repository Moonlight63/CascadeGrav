<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/moonlight63/public_html/devsite/user/config/plugins/jscomments.yaml',
    'modified' => 1505543473,
    'data' => [
        'enabled' => true,
        'active' => true,
        'provider' => 'facebook',
        'providers' => [
            'disqus' => [
                'show_count' => false
            ],
            'facebook' => [
                'app_id' => '316956128723622',
                'num_posts' => 5,
                'colorscheme' => 'light',
                'order_by' => 'social',
                'width' => '100%'
            ],
            'googleplus' => [
                'show_count' => false,
                'width' => '100%'
            ],
            'muut' => [
                'channel' => 'General',
                'widget' => false,
                'show_online' => false,
                'show_title' => false,
                'upload' => false,
                'share' => true
            ]
        ]
    ]
];
