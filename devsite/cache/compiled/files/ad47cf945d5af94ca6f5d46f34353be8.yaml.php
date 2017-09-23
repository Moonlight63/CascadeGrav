<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/moonlight63/public_html/devsite/user/plugins/users-page-ownership/blueprints/user/group.yaml',
    'modified' => 1505544509,
    'data' => [
        '@extends' => [
            'type' => 'group',
            'context' => 'blueprints://user'
        ],
        'form' => [
            'fields' => [
                'pageusefake' => [
                    'ordering@' => 'access',
                    'type' => 'select',
                    'multiple' => true,
                    'size' => 'large',
                    'label' => 'PLUGIN_USERSOWNERSHIP.PAGES_ALLOWED',
                    'data-options@' => '\\Grav\\Plugin\\AdminPlugin::pagesTypes',
                    'classes' => 'fancy fakepageuse',
                    'validate' => [
                        'type' => 'array'
                    ]
                ],
                'pageuse' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'AllowedPageTypesReal',
                    'classes' => 'fancy realpageuse'
                ]
            ]
        ]
    ]
];
