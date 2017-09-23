<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/moonlight63/public_html/devsite/user/plugins/widget/blueprints/config/site.yaml',
    'modified' => 1505596361,
    'data' => [
        '@extends' => '@parent',
        'form' => [
            'fields' => [
                'widget_section' => [
                    'type' => 'section',
                    'title' => 'Global Widgets',
                    'text' => 'These are widgets available to all pages',
                    'underline' => true,
                    'fields' => [
                        'widget.areas' => [
                            'label' => 'Widget Areas',
                            'type' => 'list',
                            'style' => 'vertical',
                            'btnLabel' => 'Add Location',
                            'import@' => [
                                'type' => 'widget_areas',
                                'context' => 'blueprints://'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
