<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/yudoanguo-blog-grav/user/themes/antimatter-open-publishing/blueprints.yaml',
    'modified' => 1523768080,
    'data' => [
        'name' => 'Antimatter Open Publishing',
        'version' => '1.1.9',
        'description' => 'A customized version of the Antimatter theme with Git Sync and \'chromeless\' mode (as shown in screenshot).',
        'icon' => 'unlock',
        'author' => [
            'name' => 'Paul Hibbitts',
            'email' => 'paul@hibbittsdesign.org',
            'url' => 'http://hibbittsdesign.org'
        ],
        'homepage' => 'https://github.com/hibbitts-design/grav-theme-antimatter-open-publishing',
        'demo' => 'http://demo.hibbittsdesign.org/grav-open-publishing/',
        'docs' => 'https://github.com/hibbitts-design/grav-theme-antimatter-open-publishing/blob/master/README.md',
        'keywords' => 'open, publishing, gitsync, chromeless',
        'bugs' => 'https://github.com/hibbitts-design/grav-theme-antimatter-open-publishing/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'admin',
            1 => 'archives',
            2 => 'breadcrumbs',
            3 => 'email',
            4 => 'external_links',
            5 => 'feed',
            6 => 'form',
            7 => 'git-sync',
            8 => 'login',
            9 => 'markdown-fontawesome',
            10 => 'markdown-notices',
            11 => 'oerschema',
            12 => 'page-inject',
            13 => 'pagination',
            14 => 'relatedpages',
            15 => 'simplesearch',
            16 => 'taxonomylist',
            17 => 'tntsearch',
            18 => 'youtube',
            19 => 'shortcode-core',
            20 => 'shortcode-ui',
            21 => 'antimatter'
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'chromelessoptions' => [
                    'type' => 'section',
                    'title' => 'Chromeless Site',
                    'underline' => true
                ],
                'chromeless.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Hide Menubar, Sidebar and Footer',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Yes',
                        0 => 'No'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'gitsyncsetup' => [
                    'type' => 'section',
                    'title' => 'Git Sync Link Setup',
                    'underline' => true
                ],
                'display_of_git_sync_repo_link' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'label' => 'Display of Git Sync Link',
                    'default' => 'menu',
                    'options' => [
                        'menu' => 'Menu',
                        'page' => 'Page (visible when \'Chromeless\')',
                        'footer' => 'Footer',
                        'none' => 'None'
                    ]
                ],
                'type_of_git_sync_repo_link' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'label' => 'Type of Git Sync Link',
                    'default' => 'view',
                    'options' => [
                        'view' => 'View Git Repository',
                        'edit' => 'View/Edit Page in Git Repository'
                    ]
                ],
                'gitsyncoptions' => [
                    'type' => 'section',
                    'title' => 'Git Sync Link Options',
                    'underline' => true
                ],
                'git_sync_edit_note_text' => [
                    'type' => 'input.text',
                    'size' => 'long',
                    'label' => 'Text before Git Sync Link on Pages',
                    'default' => 'Have a suggestion or correction?',
                    'description' => 'The text before the Git Sync link (only when displayed on a Page).'
                ],
                'custom_git_sync_repo_link_icon' => [
                    'type' => 'input.text',
                    'size' => 'small',
                    'label' => 'Custom Git Sync Font Awesome Icon',
                    'description' => 'Short name, e.g. \'code-fork\'.',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'custom_git_sync_repo_link_text' => [
                    'type' => 'input.text',
                    'size' => 'medium',
                    'label' => 'Custom Git Sync Link Text',
                    'description' => 'Git Sync link text, e.g. \'View Page in GitHub\'.',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'git_sync_repo_link' => [
                    'type' => 'input.url',
                    'label' => 'Custom Git Repository Tree URL',
                    'help' => 'Enter the URL that leads to the pages folder of your Git Repository.',
                    'description' => 'URL path to pages folder for \'View/Edit Page in Git Repository\' option, but with \'/pages\' and everything following it removed. For example, \'https://github.com/paulhibbitts/demo-grav-course-hub/tree/master\'.',
                    'validate' => [
                        'type' => 'URL'
                    ]
                ],
                'posticon' => [
                    'type' => 'section',
                    'title' => 'Post Icon',
                    'underline' => true
                ],
                'post_icon' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Default Font Awesome Icon for Blog Item',
                    'description' => 'Short name, e.g. \'newspaper-o\'.',
                    'help' => 'Default Font Awesome icon to override the default blog item title icon',
                    'default' => NULL,
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'displaypostsummary' => [
                    'type' => 'section',
                    'title' => 'Blog Post Summaries',
                    'underline' => true
                ],
                'displaypostsummary.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Hide Summaries on Blog Post Pages',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Yes',
                        0 => 'No'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'displaycclicense' => [
                    'type' => 'section',
                    'title' => 'Creative Commons License',
                    'underline' => true,
                    'fields' => [
                        'cc_license.enabled' => [
                            'type' => 'toggle',
                            'label' => 'Display CC License',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'cc_license.type' => [
                            'type' => 'select',
                            'label' => 'CC License Type',
                            'default' => 'ccby',
                            'size' => 'long',
                            'description' => 'Looking for more info about Creative Commons (CC) Licenses?<br> Visit the <a href="https://creativecommons.org/" target="_blank">creativecommons.org</a> site.',
                            'options' => [
                                'ccby' => 'CC Attribution',
                                'ccbysa' => 'CC Attribution Share Alike',
                                'ccbynd' => 'CC Attribution No Derivatives',
                                'ccbync' => 'CC Attribution Non-Commercial',
                                'ccbyncsa' => 'CC Attribution Non-Commercial Share Alike',
                                'ccbyncnd' => 'CC Attribution Non-Commercial No Derivatives'
                            ]
                        ],
                        'cc_license.icon' => [
                            'type' => 'toggle',
                            'label' => 'Display Only CC License Icon',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'cc_license.text' => [
                            'type' => 'text',
                            'size' => 'long',
                            'description' => 'For example, \'except where otherwise noted.\'',
                            'label' => 'Additional CC License Text',
                            'validate' => [
                                'type' => 'text'
                            ]
                        ]
                    ]
                ],
                'menubaroptions' => [
                    'type' => 'section',
                    'title' => 'Menubar',
                    'underline' => true
                ],
                'displaycustommenus.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Display Custom Menu Items',
                    'help' => 'Determines if any defined custom menu entries are displayed in the menubar.',
                    'default' => 0,
                    'highlight' => 1,
                    'options' => [
                        1 => 'Yes',
                        0 => 'No'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'menu' => [
                    'name' => 'menu',
                    'type' => 'list',
                    'label' => 'Custom Menubar Items',
                    'fields' => [
                        '.text' => [
                            'type' => 'text',
                            'label' => 'Text',
                            'description' => 'Text label for menu item.'
                        ],
                        '.icon' => [
                            'type' => 'text',
                            'label' => 'Icon',
                            'description' => 'Font Awesome icon for menu item.'
                        ],
                        '.url' => [
                            'type' => 'text',
                            'label' => 'URL',
                            'description' => 'URL for menu item.'
                        ],
                        '.target' => [
                            'type' => 'select',
                            'label' => 'Target',
                            'default' => '_self',
                            'size' => 'medium',
                            'options' => [
                                '_blank' => 'Open in a new window',
                                '_parent' => 'Open in the parent frame',
                                '_top' => 'Open in the full body of the window',
                                '_self' => 'Open in the same frame as clicked'
                            ]
                        ]
                    ]
                ],
                'hidehomemenulink' => [
                    'type' => 'toggle',
                    'label' => 'Include Homepage Link in Menubar',
                    'help' => 'Determines if the link to the Homepage is included in the menubar.',
                    'default' => 0,
                    'highlight' => 0,
                    'options' => [
                        0 => 'Yes',
                        1 => 'No'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
