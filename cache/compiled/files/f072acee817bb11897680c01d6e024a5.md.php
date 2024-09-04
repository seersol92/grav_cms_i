<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'D:/wamp64/www/project_i&i/user/pages/01.home/blog.md',
    'modified' => 1712043146,
    'size' => 247,
    'data' => [
        'header' => [
            'title' => 'Clean Blog',
            'menu' => 'Home',
            'subheading' => 'A Clean Blog Theme by Start Bootstrap',
            'header_image' => 'home-bg.jpg',
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'limit' => 4,
                'pagination' => true
            ],
            'pagination' => true
        ],
        'frontmatter' => 'title: Clean Blog
menu: Home
subheading: A Clean Blog Theme by Start Bootstrap
header_image: home-bg.jpg

content:
    items: @self.children
    order:
        by: date
        dir: desc
    limit: 4
    pagination: true

pagination: true',
        'markdown' => ''
    ]
];
