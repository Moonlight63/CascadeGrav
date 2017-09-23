<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://admin-addon-media-rename/admin-addon-media-rename.yaml',
    'modified' => 1505548091,
    'data' => [
        'enabled' => true,
        'modal' => [
            'fields' => [
                0 => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN_ADDON_MEDIA_RENAME.RENAME_MEDIA'
                ],
                1 => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ADMIN_ADDON_MEDIA_RENAME.ORIGINAL_NAME',
                    'name' => 'old_name',
                    'readonly' => true
                ],
                2 => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ADMIN_ADDON_MEDIA_RENAME.ORIGINAL_EXTENSION',
                    'name' => 'old_ext',
                    'readonly' => true
                ],
                3 => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ADMIN_ADDON_MEDIA_RENAME.NEW_NAME',
                    'name' => 'new_name'
                ],
                4 => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ADMIN_ADDON_MEDIA_RENAME.NEW_EXTENSION',
                    'name' => 'new_ext'
                ],
                5 => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN_ADDON_MEDIA_RENAME.REPLACE_EXISTING',
                    'name' => 'replace',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => true,
                        0 => false
                    ]
                ],
                6 => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN_ADDON_MEDIA_RENAME.REPLACE_EXISTING_ALL',
                    'name' => 'replace_all',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => true,
                        0 => false
                    ]
                ]
            ]
        ]
    ]
];
