<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/Development/GDP Accounts Traditional/grav/grav-admin/user/themes/quark-open-publishing/blueprints/partials/blog-bits.yaml',
    'modified' => 1719437947,
    'size' => 2268,
    'data' => [
        'form' => [
            'fields' => [
                'hero_title' => [
                    'type' => 'spacer',
                    'title' => 'Hero Section'
                ],
                'header.hero_classes' => [
                    'type' => 'text',
                    'label' => 'Hero Classes',
                    'markdown' => true,
                    'description' => 'There are several Hero class options that can be listed here (space separated):<br />`text-light`, `text-dark`, `title-h1h2`, `parallax`, `overlay-dark-gradient`, `overlay-light-gradient`, `overlay-dark`, `overlay-light`, `hero-fullscreen`, `hero-large`, `hero-medium`, `hero-small`, `hero-tiny`<br />Please consult the [Quark documentation](https://github.com/getgrav/grav-theme-quark#hero-options) for more details.',
                    'data-default@' => '\\Grav\\Theme\\QuarkOpenPublishing::getblogpageheroclasses'
                ],
                'header.hero_image' => [
                    'type' => 'filepicker',
                    'label' => 'Hero Image',
                    'preview_images' => true,
                    'description' => 'If not specified, this defaults to the first image found in the page\'s folder'
                ],
                'header.header_image_alt_text' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Image Alternative Text',
                    'default' => NULL
                ],
                'header.header_image_credit' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Image Caption',
                    'default' => NULL
                ],
                'header.header_image_creditlink' => [
                    'type' => 'text',
                    'size' => 'long',
                    'label' => 'Image Caption URL',
                    'default' => NULL,
                    'validate' => [
                        'type' => 'URL'
                    ]
                ],
                'toggles_title' => [
                    'type' => 'spacer',
                    'title' => 'Configuration'
                ],
                'header.blog_url' => [
                    'type' => 'text',
                    'label' => 'Blog Route',
                    'help' => 'The route to this main blog page that contains this configuration',
                    'default' => '/blog',
                    'placeholder' => '/blog',
                    'size' => 'medium'
                ],
                'header.show_sidebar' => [
                    'type' => 'toggle',
                    'label' => 'Show Sidebar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'header.show_breadcrumbs' => [
                    'type' => 'toggle',
                    'label' => 'Show Breadcrumbs',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'header.show_pagination' => [
                    'type' => 'toggle',
                    'label' => 'Show Pagination',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
