<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/moonlight63/public_html/devsite/user/accounts/kdvincent.yaml',
    'modified' => 1505543467,
    'data' => [
        'state' => 'enabled',
        'email' => 'keith@cascadeap.com',
        'fullname' => 'Keith Vincent',
        'title' => 'Owner',
        'language' => 'en',
        'access' => [
            'admin' => [
                'login' => 'true',
                'pages' => 'true'
            ],
            'admin-addon-user-manager' => [
                
            ],
            'users' => [
                'limitPagesToOwner' => 'true',
                'showPagesWithNoOwner' => 'false',
                'canDeletePages' => 'false',
                'canPostToRoot' => 'false'
            ]
        ],
        'hashed_password' => '$2y$10$BrL7bM5WZoWZa.A6ntWHHeE6qLy817ZZNSluVOxGw6ArXBB9ndZ/G',
        'groups' => [
            0 => 'authors'
        ]
    ]
];
