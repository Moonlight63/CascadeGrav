<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/moonlight63/public_html/devsite/user/themes/cap/blueprints/default.yaml',
    'modified' => 1505967750,
    'data' => [
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'advanced' => [
                            'fields' => [
                                'overrides' => [
                                    'fields' => [
                                        'header.icon' => [
                                            'ordering@' => 'header.menu',
                                            'type' => 'text',
                                            'label' => 'Menu Icon',
                                            'toggleable' => true,
                                            'help' => 'PLUGIN_ADMIN.MENU_HELP'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
