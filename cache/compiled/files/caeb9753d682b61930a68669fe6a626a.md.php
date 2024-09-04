<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'D:/wamp64/www/project_i/user/pages/01.home/blog.md',
    'modified' => 1725380114,
    'size' => 211,
    'data' => [
        'storage_key' => '01.home',
        'header' => [
            'title' => 'I&I',
            'menu' => 'Home',
            'subheading' => 'I&I',
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
        'root' => false,
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
        'slug' => 'home',
        'name' => 'blog.md',
        'ordering' => true
    ]
];
