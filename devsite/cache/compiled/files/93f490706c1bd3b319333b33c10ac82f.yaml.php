<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/moonlight63/public_html/devsite/user/config/plugins/admin-addon-user-manager.yaml',
    'modified' => 1505543475,
    'data' => [
        'enabled' => true,
        'default_list_style' => 'list',
        'pagination' => [
            'per_page' => 20
        ],
        'modal' => [
            'fields' => [
                0 => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.ADD_ACCOUNT'
                ],
                1 => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ADMIN.USERNAME',
                    'help' => 'PLUGIN_ADMIN.USERNAME_HELP',
                    'name' => 'username',
                    'validate' => [
                        'required' => true
                    ]
                ]
            ]
        ]
    ]
];
