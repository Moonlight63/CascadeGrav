<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/moonlight63/public_html/devsite/user/config/plugins/git-sync.yaml',
    'modified' => 1505635595,
    'data' => [
        'enabled' => false,
        'text_var' => 'Custom Text added by the **Git Sync** plugin (disable plugin to remove)',
        'folders' => [
            0 => 'pages'
        ],
        'repository' => 'https://github.com/Moonlight63/CascadeGitSync.git',
        'user' => 'Moonlight63',
        'webhook' => '/_git-sync',
        'branch' => 'master',
        'remote' => [
            'name' => 'origin',
            'branch' => 'master'
        ],
        'git' => [
            'author' => 'gituser',
            'name' => 'GitSync',
            'email' => 'git-sync@trilby.media',
            'bin' => 'git'
        ],
        'logging' => false,
        'password' => 'gitsync-def50200f385919243e5f541a9671f5018d12fde6edcfcb79b293a9e1f08370ff62047e97fd6f5d5a6ae8c37fb617b03e7aebd26f36c0db4a6fc7d6e5f6e1a82fc3a40430dcd95a51d17c4eb42e10379f3246da852890dde86439989a1668c4e1daab4a077aeb1f2'
    ]
];
