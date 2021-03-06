<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/moonlight63/public_html/devsite/user/plugins/add-page-by-form/blueprints.yaml',
    'modified' => 1505544326,
    'data' => [
        'name' => 'Add Page By Form',
        'version' => '2.0.0-beta',
        'testing' => true,
        'description' => 'Adds a page by means of a form',
        'icon' => 'plus-square-o',
        'author' => [
            'name' => 'Ron Wardenier',
            'email' => 'ron@rwgc.nl'
        ],
        'homepage' => 'https://github.com/bleutzinn/grav-plugin-add-page-by-form',
        'keywords' => 'grav, plugin, page, form, frontmatter',
        'bugs' => 'https://github.com/bleutzinn/grav-plugin-add-page-by-form/issues',
        'docs' => 'https://github.com/bleutzinn/grav-plugin-add-page-by-form/blob/master/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'default_title' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'Default Page Title',
                    'help' => 'Will be used for the new page folder name when no other value is set'
                ],
                'default_content' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'Default Page Content',
                    'help' => 'Will be used as the page content for the new page when no other value is set'
                ],
                'include_username' => [
                    'type' => 'toggle',
                    'label' => 'Include username',
                    'help' => 'Include the logged in user username in the new page frontmatter',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'overwrite_mode' => [
                    'type' => 'toggle',
                    'label' => 'Overwrite mode',
                    'help' => 'Overwrite existing page',
                    'highlight' => 0,
                    'default' => 0,
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
];
