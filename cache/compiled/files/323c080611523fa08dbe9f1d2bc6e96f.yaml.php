<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/wamp64/www/project_i&i/system/config/backups.yaml',
    'modified' => 1710783385,
    'size' => 371,
    'data' => [
        'purge' => [
            'trigger' => 'space',
            'max_backups_count' => 25,
            'max_backups_space' => 5,
            'max_backups_time' => 365
        ],
        'profiles' => [
            0 => [
                'name' => 'Default Site Backup',
                'root' => '/',
                'schedule' => false,
                'schedule_at' => '0 3 * * *',
                'exclude_paths' => '/backup
/cache
/images
/logs
/tmp',
                'exclude_files' => '.DS_Store
.git
.svn
.hg
.idea
.vscode
node_modules'
            ]
        ]
    ]
];
