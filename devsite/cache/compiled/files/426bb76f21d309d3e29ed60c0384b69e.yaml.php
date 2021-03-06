<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/moonlight63/public_html/devsite/user/plugins/adsense/blueprints.yaml',
    'modified' => 1505544453,
    'data' => [
        'name' => 'AdSense',
        'version' => '1.1.1',
        'description' => 'This plugin enables to use AdSense inside a document to be rendered by Grav.',
        'icon' => 'adn',
        'author' => [
            'name' => 'muuvmuuv',
            'email' => 'marvin.heilemann@cookie-soft.de'
        ],
        'homepage' => 'https://github.com/muuvmuuv/grav-plugin-adsense',
        'keywords' => [
            0 => 'adsense',
            1 => 'grav',
            2 => 'extension',
            3 => 'plugin',
            4 => 'google'
        ],
        'docs' => 'https://github.com/muuvmuuv/grav-plugin-adsense/blob/master/README.md',
        'bugs' => 'https://github.com/muuvmuuv/grav-plugin-adsense/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'shortcode-core'
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'global' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADSENSE.GLOBAL_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADSENSE.PLUGIN_STATUS',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'sandbox' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADSENSE.SANDBOX_STATUS',
                            'highlight' => 0,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'default' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADSENSE.DEFAULT_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'options' => [
                            'type' => 'fieldset',
                            'collapsible' => false,
                            'icon' => 'gear',
                            'title' => 'PLUGIN_ADSENSE.OPTIONS_LABEL',
                            'fields' => [
                                'adsense.options.type' => [
                                    'type' => 'select',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ADSENSE.OPTIONS.TYPE',
                                    'default' => 'css',
                                    'options' => [
                                        'banner' => 'PLUGIN_ADSENSE.OPTIONS.BANNER',
                                        'fixed' => 'PLUGIN_ADSENSE.OPTIONS.FIXED'
                                    ],
                                    'validate' => [
                                        'type' => 'string'
                                    ]
                                ],
                                'adsense.options.direction' => [
                                    'type' => 'select',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ADSENSE.OPTIONS.DIRECTION',
                                    'default' => 'css',
                                    'options' => [
                                        'left' => 'PLUGIN_ADSENSE.OPTIONS.LEFT',
                                        'right' => 'PLUGIN_ADSENSE.OPTIONS.RIGHT',
                                        'top' => 'PLUGIN_ADSENSE.OPTIONS.TOP',
                                        'bottom' => 'PLUGIN_ADSENSE.OPTIONS.BOTTOM'
                                    ],
                                    'validate' => [
                                        'type' => 'string'
                                    ]
                                ],
                                'adsense.options.priority' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'PLUGIN_ADSENSE.OPTIONS.PRIORITY',
                                    'help' => 'PLUGIN_ADSENSE.OPTIONS.PRIORITY_HELP',
                                    'default' => 10,
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 0,
                                        'max' => 65536
                                    ]
                                ],
                                'adsense.options.pipeline' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADSENSE.OPTIONS.PIPELINE',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'adsense.options.load' => [
                                    'type' => 'select',
                                    'size' => 'large',
                                    'label' => 'PLUGIN_ADSENSE.OPTIONS.LOAD',
                                    'help' => 'PLUGIN_ADSENSE.OPTIONS.LOAD_HELP',
                                    'default' => 'async',
                                    'options' => [
                                        ' ' => 'PLUGIN_ADSENSE.OPTIONS.NONE',
                                        'async' => 'PLUGIN_ADSENSE.OPTIONS.ASYNC',
                                        'defer' => 'PLUGIN_ADSENSE.OPTIONS.DEFER'
                                    ]
                                ],
                                'adsense.options.resource' => [
                                    'type' => 'text',
                                    'size' => 'large',
                                    'label' => 'PLUGIN_ADSENSE.OPTIONS.RESOURCE',
                                    'validate' => [
                                        'type' => 'string'
                                    ]
                                ]
                            ]
                        ],
                        'data' => [
                            'type' => 'fieldset',
                            'title' => 'PLUGIN_ADSENSE.DATA_LABEL',
                            'help' => 'PLUGIN_ADSENSE.DATA_HELP',
                            'collapsed' => true,
                            'icon' => 'key',
                            'fields' => [
                                'adsense.data.client' => [
                                    'type' => 'text',
                                    'size' => 'large',
                                    'label' => 'PLUGIN_ADSENSE.DATA.CLIENT',
                                    'validate' => [
                                        'type' => 'string'
                                    ]
                                ],
                                'adsense.data.slot' => [
                                    'type' => 'text',
                                    'size' => 'large',
                                    'label' => 'PLUGIN_ADSENSE.DATA.SLOT',
                                    'validate' => [
                                        'type' => 'int'
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
