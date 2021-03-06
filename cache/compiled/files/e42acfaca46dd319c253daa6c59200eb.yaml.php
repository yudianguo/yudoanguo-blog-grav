<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/yudoanguo-blog-grav/user/themes/antimatter-open-publishing/blueprints/default.yaml',
    'modified' => 1523768080,
    'data' => [
        'title' => 'Git Sync Options',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'options' => [
                            'type' => 'tab',
                            'fields' => [
                                'gitsyncoptions' => [
                                    'type' => 'section',
                                    'title' => 'Git Sync Link Options',
                                    'underline' => true
                                ],
                                'header.hide_git_sync_repo_link' => [
                                    'type' => 'toggle',
                                    'label' => 'Display Git Sync Link',
                                    'help' => 'Determines if the Git Repository link is displayed for this page',
                                    'default' => 0,
                                    'highlight' => 0,
                                    'options' => [
                                        0 => 'Yes',
                                        1 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.git_sync_repo_link' => [
                                    'type' => 'text',
                                    'size' => 'large',
                                    'label' => 'Custom Git Repository Page URL',
                                    'help' => 'Custom Git Repository URL for this page, to override the automatically calculated URL',
                                    'default' => NULL,
                                    'validate' => [
                                        'type' => 'URL'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
