<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/wamp64/www/project_i/user/themes/clean-blog/blueprints/blog.yaml',
    'modified' => 1712043147,
    'size' => 509,
    'data' => [
        'title' => 'blog',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'header.subheading' => [
                                    'type' => 'text',
                                    'label' => 'THEME_CLEAN_BLOG.ADMIN.SUBHEADING.LABEL',
                                    'help' => 'THEME_CLEAN_BLOG.ADMIN.SUBHEADING.HELP'
                                ],
                                'header.header_image' => [
                                    'type' => 'text',
                                    'label' => 'THEME_CLEAN_BLOG.ADMIN.HEADER_IMAGE.LABEL',
                                    'help' => 'THEME_CLEAN_BLOG.ADMIN.HEADER_IMAGE.HELP'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
