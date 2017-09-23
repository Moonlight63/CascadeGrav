<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/moonlight63/public_html/devsite/user/config/plugins/widget.yaml',
    'modified' => 1505599133,
    'data' => [
        'enabled' => false,
        'parent' => 'widgets',
        'enable_twig' => true,
        'enable_modal' => true,
        'add_modals' => [
            0 => [
                'label' => 'Create Widget',
                'blueprint' => 'admin/pages/widget_new',
                'show_in' => 'bar'
            ]
        ],
        'extras' => true,
        'widgets_in_widget' => false
    ]
];
