<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/eu/user/themes/quarkextended/blueprints.yaml',
    'modified' => 1678788136,
    'size' => 1382,
    'data' => [
        'name' => 'Quarkextended',
        'slug' => 'quarkextended',
        'type' => 'theme',
        'version' => 1,
        'description' => 'Quark extended theme',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Tomasz Suchy',
            'email' => NULL
        ],
        'homepage' => NULL,
        'demo' => NULL,
        'keywords' => NULL,
        'bugs' => NULL,
        'readme' => 'https://github.com/tomasz-suchy/grav-theme-quarkextended/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'grid-size' => [
                    'type' => 'select',
                    'label' => 'THEME_QUARK.ADMIN.GRID_SIZE',
                    'help' => 'The maximum width of the theme',
                    'size' => 'small',
                    'options' => [
                        '' => 'None (full width)',
                        'grid-xl' => 'Extra Large',
                        'grid-lg' => 'Large',
                        'grid-md' => 'Medium'
                    ]
                ],
                'header-transparent' => [
                    'type' => 'toggle',
                    'label' => 'Transparent',
                    'help' => 'When enabled, a transparent style will be used',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'custom_logo' => [
                    'type' => 'file',
                    'label' => 'Custom Logo',
                    'size' => 'large',
                    'destination' => 'theme://images/logo',
                    'multiple' => false,
                    'markdown' => true,
                    'description' => 'Will be used instead of default logo `theme://images/grav-logo.svg`',
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'custom_logo_mobile' => [
                    'type' => 'file',
                    'label' => 'Mobile Custom Logo',
                    'size' => 'large',
                    'destination' => 'theme://images/logo',
                    'multiple' => false,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ]
            ]
        ]
    ]
];
