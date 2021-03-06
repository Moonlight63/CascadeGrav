<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/moonlight63/public_html/devsite/user/plugins/users-page-ownership/blueprints/pages/default.yaml',
    'modified' => 1505944039,
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
                                'columns' => [
                                    'fields' => [
                                        'column1' => [
                                            'fields' => [
                                                'route' => [
                                                    'type' => 'filteredparent',
                                                    'label' => 'PLUGIN_ADMIN.PARENT',
                                                    'classes' => 'fancy'
                                                ],
                                                'name' => [
                                                    'type' => 'select',
                                                    'classes' => 'fancy',
                                                    'label' => 'PLUGIN_ADMIN.PAGE_FILE',
                                                    'help' => 'PLUGIN_ADMIN.PAGE_FILE_HELP',
                                                    'default' => 'default',
                                                    'data-options@' => '\\Grav\\Plugin\\TwigUsersOwnership::pageTypes'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'admin_only' => [
                                    'fields' => [
                                        'header.creator' => [
                                            'type' => 'text',
                                            'style' => 'vertical',
                                            'label' => 'Created By',
                                            'readonly' => true
                                        ],
                                        'header.visibleToGroups' => [
                                            'type' => 'selectize',
                                            'size' => 'large',
                                            'toggleable' => true,
                                            'label' => 'Force Visible to Groups',
                                            'data-options@' => '\\Grav\\User\\Groups::groups',
                                            'classes' => 'fancy',
                                            'help' => 'PLUGIN_ADMIN.GROUPS_HELP',
                                            'validate' => [
                                                'type' => 'commalist'
                                            ]
                                        ],
                                        'header.editableToGroups' => [
                                            'type' => 'selectize',
                                            'size' => 'large',
                                            'toggleable' => true,
                                            'label' => 'Force Editable to Groups',
                                            'data-options@' => '\\Grav\\User\\Groups::groups',
                                            'classes' => 'fancy',
                                            'help' => 'PLUGIN_ADMIN.GROUPS_HELP',
                                            'validate' => [
                                                'type' => 'commalist'
                                            ]
                                        ],
                                        'header.hideFromParentSelection' => [
                                            'type' => 'checkboxes',
                                            'label' => 'Hide from parent selection',
                                            'toggleable' => true,
                                            'default' => [
                                                'self' => false,
                                                'children' => false
                                            ],
                                            'options' => [
                                                'self' => 'Hide Self',
                                                'children' => 'Hide Children'
                                            ],
                                            'use' => 'keys'
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
