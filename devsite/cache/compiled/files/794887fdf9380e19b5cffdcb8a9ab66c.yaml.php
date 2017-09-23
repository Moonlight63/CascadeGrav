<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/moonlight63/public_html/devsite/user/plugins/lightgallery/blueprints.yaml',
    'modified' => 1505628090,
    'data' => [
        'name' => 'LightGallery',
        'version' => '1.0.0',
        'description' => 'This plugin adds twig function to create media galleries using the LightGallery js library',
        'icon' => 'th-large',
        'author' => [
            'name' => 'Dalen Catt',
            'email' => 'dalencattmlsp@gmail.com'
        ],
        'homepage' => 'https://github.com/variar/grav-plugin-unitegallery',
        'bugs' => 'https://github.com/variar/grav-plugin-unitegallery/issues',
        'license' => 'MIT',
        'keywords' => 'gallery, images, lightgallery',
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
                'assets_in_meta' => [
                    'type' => 'toggle',
                    'label' => 'Store assets in page metadata',
                    'help' => 'Allows to pass assets from twig to this plugin in case of caching. Can be enabled per-page. Cache should be rebuilt after enabling this.',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'gallery_div_id' => [
                    'type' => 'text',
                    'label' => 'Id for gallery div',
                    'help' => 'Use this to set desired div id for the main gallery div',
                    'default' => 'light-gallery',
                    'validate' => [
                        'type' => 'text',
                        'pattern' => '^\\S+$',
                        'message' => 'Valid HTML5 element Id expected (no whitespace charachers allowed)'
                    ]
                ],
                'thumb_width' => [
                    'type' => 'number',
                    'label' => 'Thumbnail width',
                    'default' => 600,
                    'validate' => [
                        'type' => 'number',
                        'min' => 100
                    ]
                ],
                'thumb_height' => [
                    'type' => 'integer',
                    'label' => 'Thumbnail height',
                    'default' => 600,
                    'validate' => [
                        'type' => 'number',
                        'min' => 100
                    ]
                ]
            ]
        ]
    ]
];
