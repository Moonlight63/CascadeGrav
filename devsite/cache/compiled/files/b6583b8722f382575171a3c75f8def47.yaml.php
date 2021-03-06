<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/moonlight63/public_html/devsite/user/plugins/widget/blueprints/widget_areas.yaml',
    'modified' => 1505596361,
    'data' => [
        'form' => [
            'fields' => [
                '.location' => [
                    'name' => 'loc',
                    'type' => 'select',
                    'label' => 'Location',
                    'classes' => 'fancy',
                    '@data-options' => '\\Grav\\Plugin\\WidgetPlugin::definedWidgetAreas',
                    '@data-help' => '\\Grav\\Plugin\\WidgetPlugin::locationHelp',
                    'options' => [
                        'default' => 'Default'
                    ]
                ],
                '.widgets' => [
                    'name' => 'widget',
                    'type' => 'list',
                    'label' => 'Widgets',
                    'style' => 'vertical',
                    'btnLabel' => 'Add Widget',
                    'fields' => [
                        '.load' => [
                            'type' => 'select',
                            'size' => 'large',
                            'classes' => 'fancy',
                            'label' => 'Widget',
                            'show_all' => false,
                            'show_modular' => true,
                            'show_root' => false,
                            'show_slug' => true,
                            'help' => 'Widget',
                            '@data-options' => '\\Grav\\Plugin\\WidgetPlugin::widgetTypes',
                            'options' => [
                                '' => '--- Select ---'
                            ]
                        ],
                        '.enabled' => [
                            'type' => 'toggle',
                            'label' => 'Status',
                            'highlight' => 1,
                            'default' => 1,
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
        ]
    ]
];
