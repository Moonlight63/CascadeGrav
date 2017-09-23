<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://widget/widget.yaml',
    'modified' => 1505596361,
    'data' => [
        'enabled' => true,
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
