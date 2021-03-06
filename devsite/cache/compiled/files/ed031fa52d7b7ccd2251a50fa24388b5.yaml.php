<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/moonlight63/public_html/devsite/user/plugins/aviary/blueprints.yaml',
    'modified' => 1505596948,
    'data' => [
        'name' => 'Aviary Image Editor',
        'version' => '1.0.1',
        'description' => 'Aviary image editor integration with the Grav CMS',
        'icon' => 'pencil',
        'author' => [
            'name' => 'URBANSQUID',
            'email' => 'ric@urbansquid.london'
        ],
        'homepage' => 'https://github.com/ricardo118/grav-aviary-plugin',
        'keywords' => 'aviary, image editor, photoshop, images, adobe, adobe cloud',
        'bugs' => 'https://github.com/ricardo118/grav-aviary-plugin/issues',
        'docs' => 'https://github.com/ricardo118/grav-aviary-plugin/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'configuration' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_AVIARY.SECTION_CONFIGURATION',
                            'fields' => [
                                'enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_AVIARY.PLUGIN_STATUS',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_AVIARY.ENABLED',
                                        0 => 'PLUGIN_AVIARY.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'language' => [
                                    'type' => 'select',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_AVIARY.LANGUAGE',
                                    'help' => 'PLUGIN_AVIARY.LANGUAGE_HELP',
                                    'default' => 0,
                                    'options' => [
                                        'en' => 'English',
                                        'bg' => 'Bulgarian',
                                        'ca' => 'Catalan',
                                        'zh_HANS' => 'Chinese (simplified)',
                                        'zh_HANT' => 'Chinese (traditional)',
                                        'cs' => 'Czech',
                                        'da' => 'Danish',
                                        'nl' => 'Dutch',
                                        'fi' => 'Finnish',
                                        'fr' => 'French',
                                        'de' => 'German',
                                        'el' => 'Greek',
                                        'he' => 'Hebrew',
                                        'hu' => 'Hungarian',
                                        'id' => 'Indonesian',
                                        'it' => 'Italian',
                                        'jp' => 'Japanese',
                                        'ko' => 'Korean',
                                        'lv' => 'Latvian',
                                        'lt' => 'Lithuanian',
                                        '' => 'Norwegian',
                                        'pl' => 'Polish',
                                        'pt' => 'Portuguese',
                                        'pt_BR' => 'Portuguese (Brazilian)',
                                        'ru' => 'Russian',
                                        'es' => 'Spanish',
                                        'sk' => 'Slovak',
                                        'sv' => 'Swedish',
                                        'tr' => 'Turkish',
                                        'vi' => 'Vietnamese'
                                    ]
                                ]
                            ]
                        ],
                        'dev_options' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_AVIARY.SECTION_DEVS',
                            'fields' => [
                                'spacer_cors' => [
                                    'type' => 'spacer',
                                    'text' => 'PLUGIN_AVIARY.ENABLE_CORS_NOTE'
                                ],
                                'enable_cors' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_AVIARY.ENABLE_CORS',
                                    'help' => 'PLUGIN_AVIARY.ENABLE_CORS_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_AVIARY.ENABLED',
                                        0 => 'PLUGIN_AVIARY.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'all_tools' => [
                                    'type' => 'radio',
                                    'label' => 'PLUGIN_AVIARY.TOOLS_RADIO',
                                    'help' => 'PLUGIN_AVIARY.TOOLS_RADIO_HELP',
                                    'highlight' => 1,
                                    'default' => 'all',
                                    'options' => [
                                        'all' => 'All',
                                        'basic' => 'Basic',
                                        'custom' => 'Custom'
                                    ]
                                ],
                                'spacer_tools_fake' => [
                                    'type' => 'spacer',
                                    'text' => '&nbsp'
                                ],
                                'spacer_tools' => [
                                    'type' => 'spacer',
                                    'title' => 'PLUGIN_AVIARY.SPACER_TITLE',
                                    'text' => 'PLUGIN_AVIARY.SPACER_TEXT'
                                ],
                                'enhance' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_AVIARY.ENHANCE',
                                    'description' => 'PLUGIN_AVIARY.ENHANCE_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_AVIARY.ENABLED',
                                        0 => 'PLUGIN_AVIARY.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'effects' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_AVIARY.EFFECTS',
                                    'description' => 'PLUGIN_AVIARY.EFFECTS_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_AVIARY.ENABLED',
                                        0 => 'PLUGIN_AVIARY.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'frames' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_AVIARY.FRAMES',
                                    'description' => 'PLUGIN_AVIARY.FRAMES_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_AVIARY.ENABLED',
                                        0 => 'PLUGIN_AVIARY.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'overlays' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_AVIARY.OVERLAYS',
                                    'description' => 'PLUGIN_AVIARY.OVERLAYS_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_AVIARY.ENABLED',
                                        0 => 'PLUGIN_AVIARY.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'stickers' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_AVIARY.STICKERS',
                                    'description' => 'PLUGIN_AVIARY.STICKERS_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_AVIARY.ENABLED',
                                        0 => 'PLUGIN_AVIARY.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'orientation' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_AVIARY.ORIENTATION',
                                    'description' => 'PLUGIN_AVIARY.ORIENTATION_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_AVIARY.ENABLED',
                                        0 => 'PLUGIN_AVIARY.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'crop' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_AVIARY.CROP',
                                    'description' => 'PLUGIN_AVIARY.CROP_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_AVIARY.ENABLED',
                                        0 => 'PLUGIN_AVIARY.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'resize' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_AVIARY.RESIZE',
                                    'description' => 'PLUGIN_AVIARY.RESIZE_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_AVIARY.ENABLED',
                                        0 => 'PLUGIN_AVIARY.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'lighting' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_AVIARY.LIGHTING',
                                    'description' => 'PLUGIN_AVIARY.LIGHTING_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_AVIARY.ENABLED',
                                        0 => 'PLUGIN_AVIARY.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'color' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_AVIARY.COLOR',
                                    'description' => 'PLUGIN_AVIARY.COLOR_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_AVIARY.ENABLED',
                                        0 => 'PLUGIN_AVIARY.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'sharpness' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_AVIARY.SHARPNESS',
                                    'description' => 'PLUGIN_AVIARY.SHARPNESS_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_AVIARY.ENABLED',
                                        0 => 'PLUGIN_AVIARY.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'focus' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_AVIARY.FOCUS',
                                    'description' => 'PLUGIN_AVIARY.FOCUS_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_AVIARY.ENABLED',
                                        0 => 'PLUGIN_AVIARY.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'vignette' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_AVIARY.VIGNETTE',
                                    'description' => 'PLUGIN_AVIARY.VIGNETTE_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_AVIARY.ENABLED',
                                        0 => 'PLUGIN_AVIARY.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'blemish' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_AVIARY.BLEMISH',
                                    'description' => 'PLUGIN_AVIARY.BLEMISH_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_AVIARY.ENABLED',
                                        0 => 'PLUGIN_AVIARY.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'whiten' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_AVIARY.WHITEN',
                                    'description' => 'PLUGIN_AVIARY.WHITEN_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_AVIARY.ENABLED',
                                        0 => 'PLUGIN_AVIARY.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'redeye' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_AVIARY.REDEYE',
                                    'description' => 'PLUGIN_AVIARY.REDEYE_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_AVIARY.ENABLED',
                                        0 => 'PLUGIN_AVIARY.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'draw' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_AVIARY.DRAW',
                                    'description' => 'PLUGIN_AVIARY.DRAW_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_AVIARY.ENABLED',
                                        0 => 'PLUGIN_AVIARY.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'colorsplash' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_AVIARY.COLORSPLASH',
                                    'description' => 'PLUGIN_AVIARY.COLORSPLASH_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_AVIARY.ENABLED',
                                        0 => 'PLUGIN_AVIARY.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'text' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_AVIARY.TEXT',
                                    'description' => 'PLUGIN_AVIARY.TEXT_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_AVIARY.ENABLED',
                                        0 => 'PLUGIN_AVIARY.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'meme' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_AVIARY.MEME',
                                    'description' => 'PLUGIN_AVIARY.MEME_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_AVIARY.ENABLED',
                                        0 => 'PLUGIN_AVIARY.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'spacer_crop' => [
                                    'type' => 'spacer',
                                    'text' => '&nbsp',
                                    'underline' => true
                                ],
                                'crop_presets' => [
                                    'type' => 'array',
                                    'label' => 'PLUGIN_AVIARY.CROP_PRESETS',
                                    'help' => 'PLUGIN_AVIARY.CROP_PRESETS_HELP',
                                    'placeholder_key' => 'PLUGIN_AVIARY.CROP_KEY',
                                    'placeholder_value' => 'PLUGIN_AVIARY.CROP_VALUE'
                                ],
                                'crop_strict' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_AVIARY.CROP_STRICT',
                                    'help' => 'PLUGIN_AVIARY.CROP_STRICT_HELP',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_AVIARY._YES',
                                        0 => 'PLUGIN_AVIARY._NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'img_quality' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'PLUGIN_AVIARY.IMG_Q',
                                    'help' => 'PLUGIN_AVIARY.IMG_Q_HELP',
                                    'placeholder' => 'PLUGIN_AVIARY.IMG_Q_PLACEHOLDER',
                                    'validate' => [
                                        'type' => 'number',
                                        'min' => 1,
                                        'max' => 100
                                    ]
                                ]
                            ]
                        ],
                        'theme' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_AVIARY.SECTION_THEME',
                            'fields' => [
                                'theme_select' => [
                                    'type' => 'radio',
                                    'label' => 'PLUGIN_AVIARY.THEME',
                                    'help' => 'PLUGIN_AVIARY.THEME_HELP',
                                    'highlight' => 1,
                                    'default' => 'dark',
                                    'options' => [
                                        'light' => 'Light',
                                        'dark' => 'Dark',
                                        'minimum' => 'Minimum',
                                        'custom' => 'Custom'
                                    ]
                                ],
                                'advanced' => [
                                    'type' => 'spacer',
                                    'title' => 'PLUGIN_AVIARY.THEME_WARNING_T',
                                    'text' => 'PLUGIN_AVIARY.THEME_WARNING'
                                ],
                                'theme_custom_editor' => [
                                    'classes' => 'aviary-theme-editor',
                                    'type' => 'editor',
                                    'label' => 'PLUGIN_AVIARY.CUSTOM_CSS',
                                    'help' => 'PLUGIN_AVIARY.CUSTOM_CSS',
                                    'default' => 'PLUGIN_AVIARY.CUSTOM_CSS_CODE',
                                    'codemirror' => [
                                        'mode' => 'css',
                                        'indentUnit' => 4,
                                        'lineNumbers' => true,
                                        'styleActiveLine' => true
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
