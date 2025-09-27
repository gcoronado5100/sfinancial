
<?php 

function gabecode_register_required_plugins() {

    $plugins = [
        [
            'name'     => 'Regenerate Thumbnails',
            'slug'     => 'regenerate-thumbnails',
            'required' => false,
        ],
        [
            'name'     => 'Yoast SEO',
            'slug'     => 'wordpress-seo',
            'required' => true,
        ],
        [
            'name'     => 'Gravity Forms',
            'slug'     => 'gravityforms',
            'required' => true,
        ]
        // [
        //     'name'     => 'Gabecode Plus',
        //     'slug'     => 'gabecode-klems-plus',
        //     'required' => true,
        //     'source' => get_template_directory() . '/plugins/gabecode-klems-plus.zip',
        // ]
    ];

    $config = [
        'id' => 'gabecode',
        'menu' => 'tgmpa-install-plugins',
        'parent_slug' => 'themes.php',
        'capability' => 'edit_theme_options',
        'has_notices' => true,
        'dismissable' => true,
    ];

    tgmpa( $plugins, $config );
}
