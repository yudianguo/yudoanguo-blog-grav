<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/yudoanguo-blog-grav/user/config/site.yaml',
    'modified' => 1530539826,
    'data' => [
        'title' => '于殿国的博客',
        'default_lang' => 'en',
        'author' => [
            'name' => '于殿国',
            'email' => 'yu_dianguo@163.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'web开发|php开发|基础知识'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
