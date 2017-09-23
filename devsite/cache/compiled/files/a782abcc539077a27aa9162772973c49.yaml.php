<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/moonlight63/public_html/devsite/user/themes/cap/blueprints.yaml',
    'modified' => 1505544718,
    'data' => [
        'name' => 'Cap',
        'version' => '1.0.0',
        'description' => 'Cap is built using the popular **Bootstrap** Framework',
        'icon' => 'bold',
        'author' => [
            'name' => 'Cascade Aerial Photography',
            'email' => 'contact@cascadeap.com',
            'url' => 'http://cascadeap.com'
        ],
        'homepage' => 'https://cascadeap.com',
        'demo' => 'http://cascadeap.com',
        'dependencies' => [
            0 => 'bootstrapper'
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
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
];
