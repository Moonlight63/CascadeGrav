<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/moonlight63/public_html/devsite/user/themes/cap/blueprints/modular/section.yaml',
    'modified' => 1506050735,
    'data' => [
        'title' => 'Text',
        '@extends' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'style' => [
                            'type' => 'tab',
                            'title' => 'Style',
                            'fields' => [
                                'publishing' => [
                                    'type' => 'section',
                                    'title' => 'Section',
                                    'underline' => true,
                                    'fields' => [
                                        'header.section.background' => [
                                            'type' => 'colorpicker',
                                            'label' => 'Section Background Color',
                                            'toggleable' => true
                                        ],
                                        'header.section.padding-top' => [
                                            'type' => 'text',
                                            'label' => 'Section Padding Top',
                                            'toggleable' => true
                                        ],
                                        'header.section.padding-left' => [
                                            'type' => 'text',
                                            'label' => 'Section Padding Left',
                                            'toggleable' => true
                                        ],
                                        'header.section.padding-right' => [
                                            'type' => 'text',
                                            'label' => 'Section Padding Right',
                                            'toggleable' => true
                                        ],
                                        'header.section.padding-bottom' => [
                                            'type' => 'text',
                                            'label' => 'Section Padding Bottom',
                                            'toggleable' => true
                                        ],
                                        'header.section.margin-top' => [
                                            'type' => 'text',
                                            'label' => 'Section Margin Top',
                                            'toggleable' => true
                                        ],
                                        'header.section.margin-left' => [
                                            'type' => 'text',
                                            'label' => 'Section Margin Left',
                                            'toggleable' => true
                                        ],
                                        'header.section.margin-right' => [
                                            'type' => 'text',
                                            'label' => 'Section Margin Right',
                                            'toggleable' => true
                                        ],
                                        'header.section.margin-bottom' => [
                                            'type' => 'text',
                                            'label' => 'Section Margin Bottom',
                                            'toggleable' => true
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'advanced' => [
                            'fields' => [
                                'columns' => [
                                    'fields' => [
                                        'column1' => [
                                            'fields' => [
                                                'name' => [
                                                    'default' => 'modular/text',
                                                    '@data-options' => '\\Grav\\Common\\Page\\Pages::modularTypes'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'overrides' => [
                                    'fields' => [
                                        'header.template' => [
                                            'default' => 'modular/text',
                                            '@data-options' => '\\Grav\\Common\\Page\\Pages::modularTypes'
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
