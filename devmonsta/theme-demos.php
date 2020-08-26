<?php

function devm_import_files_theme() {
    return [
        [
            'id'                       => '1',
            'import_title'             => 'Demo (1 - 2)',
            'import_file_url'          => 'http://demo.themewinter.com/wp/demo-content/privsa/main/privsa-main.xml',
            'import_desc'              => 'Here goes the description of this demo 1 to 2',
            'import_preview_image_url' => 'http://demo.themewinter.com/wp/demo-content/privsa/main/screenshot.png',
            'required_plugin'          => [
                [   
                    "slug"  => "elementor"
                ],
                [   
                    "slug"  => "woocommerce"
                ],
                [
                    "slug" => "elementskit-lite",
                ],
                [
                    "slug" => "metform",
                ],
                [
                    'slug'   => 'sassico-essential',
                    'source' => esc_url( "http://wp.xpeedstudio.com/demo-content/marketo/plugins/marketo-features.zip" ),
                ],
                [
                    'slug'   => 'booked',
                    'source' => esc_url( "http://content.xpeedstudio.com/demo-content/wellnesscenter/plugins/booked.zip" ),
                ],
                [
                    'slug'   => 'booked-calender-feeds',
                    'source' => esc_url( "http://content.xpeedstudio.com/demo-content/wellnesscenter/plugins/booked-calendar-feeds.zip" ),
                ],
                [
                    'slug'   => 'booked-frontend-agents',
                    'source' => esc_url( "http://content.xpeedstudio.com/demo-content/wellnesscenter/plugins/booked-frontend-agents.zip" ),
                ],
                [
                    'slug'   => 'booked-woocommerce-payments',
                    'source' => esc_url( "http://content.xpeedstudio.com/demo-content/wellnesscenter/plugins/booked-woocommerce-payments.zip" ),
                ],
            ],
        ],
        [
            'id'                       => '2',
            'import_title'             => 'One Page ',
            'import_file_url'          => 'http://demo.themewinter.com/wp/demo-content/privsa/onepage/onepage.xml',
            'import_desc'              => 'Here goes the description of this demo 1 to 2',
            'import_preview_image_url' => 'http://demo.themewinter.com/wp/demo-content/privsa/onepage/screenshot.png',
            'required_plugin'          => [
                [   "slug"  => "elementor",
                    "source" => "",
                ],
                [
                    "slug" => "elementskit-lite",
                ],
                [
                    "slug" => "metform",
                ],
                [
                    'slug'   => 'sassico-essential',
                    'source' => esc_url( "http://wp.xpeedstudio.com/demo-content/marketo/plugins/marketo-features.zip" ),
                ],
            ],
        ],
    ];
}
add_filter( 'devm_import_demo_files', 'devm_import_files_theme' );
