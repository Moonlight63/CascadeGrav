<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/moonlight63/public_html/devsite/user/plugins/count-views/blueprints.yaml',
    'modified' => 1505543855,
    'data' => [
        'name' => 'Count Views',
        'version' => '2.0.0',
        'description' => 'Naive page view counter',
        'icon' => 'eye',
        'author' => [
            'name' => 'Aaron Dalton',
            'email' => 'aaron@daltons.ca'
        ],
        'homepage' => 'https://github.com/perlkonig/grav-plugin-count-views',
        'keywords' => 'grav, plugin, hits, views, counter',
        'bugs' => 'https://github.com/perlkonig/grav-plugin-count-views/issues',
        'docs' => 'https://github.com/perlkonig/grav-plugin-count-views/blob/master/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
