<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/moonlight63/public_html/devsite/user/config/plugins/blogroll.yaml',
    'modified' => 1505543472,
    'data' => [
        'enabled' => false,
        'built_in_css' => true,
        'default_tags' => [
            
        ],
        'default_orderby' => 'asis',
        'default_combinator' => 'or',
        'default_asc' => true,
        'links' => [
            0 => [
                'name' => 'Link 1',
                'description' => 'First link',
                'link' => 'http://example.com/1',
                'tags' => [
                    0 => 'tag1'
                ],
                'sortkey' => 'ccc'
            ],
            1 => [
                'name' => 'Link 2',
                'description' => 'Second Link',
                'link' => 'http://example.com/2',
                'tags' => [
                    0 => 'tag1',
                    1 => 'tag2'
                ],
                'sortkey' => 'bbb'
            ],
            2 => [
                'name' => 'Link 3',
                'description' => 'Third link',
                'link' => 'http://example.com/3',
                'tags' => [
                    0 => 'tag1',
                    1 => 'tag2'
                ],
                'sortkey' => 'aaa'
            ]
        ]
    ]
];
