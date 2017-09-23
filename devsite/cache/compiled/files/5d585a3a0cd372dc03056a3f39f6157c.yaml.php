<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/moonlight63/public_html/devsite/user/config/groups.yaml',
    'modified' => 1505543476,
    'data' => [
        'authors' => [
            'groupname' => 'authors',
            'readableName' => 'Authors',
            'access' => [
                'admin' => [
                    'pages' => 'true'
                ],
                'admin-addon-user-manager' => [
                    'users' => 'false',
                    'groups' => 'false'
                ],
                'users' => [
                    'limitPagesToOwner' => 'true',
                    'showPagesWithNoOwner' => 'false',
                    'canDeletePages' => 'false',
                    'canPostToRoot' => 'false'
                ]
            ],
            'pageuse' => 'item'
        ]
    ]
];
