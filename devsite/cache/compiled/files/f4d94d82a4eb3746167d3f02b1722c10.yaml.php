<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/moonlight63/public_html/devsite/user/plugins/users-page-ownership/blueprints/admin/pages/new.yaml',
    'modified' => 1505544505,
    'data' => [
        '@extends' => [
            'type' => 'admin/pages/new',
            'context' => 'blueprints://'
        ],
        'form' => [
            'fields' => [
                'route' => [
                    'type' => 'filteredparent',
                    'label' => 'PLUGIN_ADMIN.PARENT_PAGE',
                    'classes' => 'fancy',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'name' => [
                    'replace@' => true,
                    'type' => 'select',
                    'classes' => 'fancy',
                    'label' => 'PLUGIN_ADMIN.PAGE_FILE',
                    'help' => 'PLUGIN_ADMIN.PAGE_FILE_HELP',
                    'data-options@' => '\\Grav\\Plugin\\TwigUsersOwnership::pageTypes',
                    'data-default@' => '\\Grav\\Plugin\\Admin\\Admin::getLastPageName',
                    'validate' => [
                        'required' => true
                    ]
                ]
            ]
        ]
    ]
];
