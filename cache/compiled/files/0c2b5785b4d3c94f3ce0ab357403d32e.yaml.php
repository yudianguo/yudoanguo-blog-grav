<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/yudoanguo-blog-grav/user/config/plugins/aboutme.yaml',
    'modified' => 1523768198,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'description' => '开拓视野，突破万难，
看见世界，贴近彼此，
感受生活，这就是生活的目的。',
        'picture_src' => [
            'user/plugins/aboutme/assets/avatars/images.jpeg' => [
                'name' => 'images.jpeg',
                'type' => 'image/jpeg',
                'size' => 13928,
                'path' => 'user/plugins/aboutme/assets/avatars/images.jpeg'
            ]
        ],
        'gravatar' => [
            'enabled' => false,
            'email' => 'example@test.com',
            'size' => 100
        ],
        'social_pages' => [
            'enabled' => true,
            'use_font_awesome' => false,
            'pages' => [
                'facebook' => [
                    'icon' => 'facebook-official',
                    'title' => 'Facebook',
                    'position' => 1
                ],
                'twitter' => [
                    'icon' => 'twitter',
                    'title' => 'Twitter',
                    'position' => 2
                ],
                'google_plus' => [
                    'icon' => 'google-plus-square',
                    'title' => 'Google+',
                    'position' => 3
                ],
                'github' => [
                    'icon' => 'github',
                    'title' => 'GitHub',
                    'position' => 1,
                    'url' => 'https://github.com/yudianguo'
                ],
                'linkedin' => [
                    'icon' => 'linkedin-square',
                    'title' => 'LinkedIn',
                    'position' => 5
                ],
                'instagram' => [
                    'icon' => 'instagram',
                    'title' => 'Instagram',
                    'position' => 6
                ]
            ]
        ]
    ]
];
