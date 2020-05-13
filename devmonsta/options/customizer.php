<?php

class Customizer extends \Devmonsta\Libs\Customizer {

    public function register_controls() {

        /**
         * Add parent panels
         */
        $this->add_panel( [
            'id'             => 'devmonsta_panel',
            'priority'       => 0,
            'theme_supports' => '',
            'title'          => __( 'Devmonsta panel', 'devmonsta' ),
            'description'    => __( 'Devmonsta options panel', 'devmonsta' ),
        ] );

        /**
         * Sections will go inside panel
         * sections will hold controls
         */
        $this->add_section( [
            'id'       => 'devmonsta_color_settings_section',
            'title'    => __( 'Box settings', 'devmonsta' ),
            'panel'    => 'devmonsta_panel',
            'priority' => 10,
        ] );

        $this->add_section( [
            'id'       => 'devmonsta_text_settings_section',
            'title'    => __( 'Text settings', 'devmonsta' ),
            'panel'    => 'devmonsta_panel',
            'priority' => 10,
        ] );

        $this->add_section( [
            'id'       => 'dm_repeater_section',
            'title'    => 'Devmonsta repeater section',
            'panel'    => 'devmonsta_panel',
            'priority' => 10,
        ] );

        // default controls, held inside sections

        /**
         * Control for text input
         */
        $this->add_control( [
            'id'      => 'dm_ctrl_text_1',
            'label'   => __( 'Text Input', 'devmonsta' ),
            'section' => 'devmonsta_text_settings_section',
            'type'    => 'text',
        ] );

        /**
         * Control for dropdown-page input
         */
        $this->add_control( [
            'id'          => 'dm_dropdown_pages',
            'type'        => 'dropdown-pages',
            'section'     => 'devmonsta_text_settings_section', // Add a default or your own section
            'label'       => __( 'Custom Dropdown Pages' ),
            'description' => __( 'This is a custom dropdown pages option.' ),
        ] );

        /**
         * Control for color-picker input
         */
        $this->add_control( [
            'id'      => 'person_hair_color',
            'label'   => __( 'Hair Color', 'devmonsta' ),
            'type'    => 'color',
            'section' => 'devmonsta_text_settings_section',
            'default' => '#eeee22',
        ] );

        /**
         * Control for media input
         */
        $this->add_control( [
            'id'      => 'dm_media',
            'type'    => 'media',
            'section' => 'devmonsta_text_settings_section',
            'label'   => __( 'Media' ),
        ] );

        $this->add_control( [
            'type'        => 'radio',
            'id'          => 'dm_test_readio',
            'label'       => __( 'Custom Radio Selection' ),
            'description' => __( 'This is a custom radio input.' ),
            'choices'     => [
                'red'   => __( 'Red' ),
                'blue'  => __( 'Blue' ),
                'green' => __( 'Green' ),
            ],
            'section'     => 'devmonsta_text_settings_section',
        ] );

        $this->add_control( [
            'id'          => 'dm_textarea',
            'type'        => 'textarea',
            'section'     => 'devmonsta_text_settings_section',
            'label'       => __( 'Text area' ),
            'description' => __( 'This is text area desctription' ),
        ] );

        /**
         * control for datetime-picker input
         */
        $this->add_control( [
            'id'              => 'dm_date_time',
            'section'         => 'devmonsta_text_settings_section',
            'type'            => 'datetime-picker',
            'label'           => __( 'Date Time Picker', '{domain}' ),
            'desc'            => __( 'date time picker description', '{domain}' ),
            'datetime-picker' => [
                'format'      => 'Y-m-d H:i',
                'maxDate'     => false,
                'minDate'     => false,
                'timepicker'  => true,
                'datepicker'  => true,
                'defaultTime' => '12:00',
            ],
        ] );

        // $this->add_control([
        //     'id' => 'dm_ctrl_text_textarea',
        //     'label' => __('Details', 'devmonsta'),
        //     'section' => 'devmonsta_text_settings_section',
        //     'type' => 'textarea',
        //     'selector' => '.dm_h1',
        //     'selectors' => [
        //         '.elementor-widget-container, .xyz' => 'color',
        //         '.elementor-widget' => [
        //             'background-color', 'border-color',
        //         ],
        //     ],
        //     'default' => 'Devmonsta',
        //     'transport' => 'postMessage',
        // ]);

        $this->add_control( [
            'id'      => 'test_button',
            'type'    => 'test-button',
            'section' => 'devmonsta_text_settings_section',
            'text'    => 'cool btn',
        ] );

        $this->add_control( [
            'id'        => 'dm_box_text',
            'label'     => __( 'Box Text', 'devmonsta' ),
            'section'   => 'devmonsta_color_settings_section',
            'type'      => 'text',
            'selector'  => '.dm_h1',
            'selectors' => [
                '.elementor-widget-container, .xyz' => 'color',
                '.elementor-widget'                 => [
                    'background-color', 'border-color',
                ],
            ],
            'default'   => 'Devmonsta',
            'transport' => 'postMessage',

        ] );

        $this->add_control( [
            'id'              => 'devmonsta_repeater_control',
            'label'           => 'List',
            'type'            => 'repeater',
            'section'         => 'dm_repeater_section',
            'add_button_text' => __( 'Add new', 'devmonsta' ),
            'fields'          => [
                [
                    'id'    => 'person_name',
                    'label' => __( 'Name', 'devmonsta' ),
                    'type'  => 'text',
                ],
                [
                    'id'    => 'person_email',
                    'label' => __( 'Email', 'devmonsta' ),
                    'type'  => 'email',
                ],
                [
                    'id'    => 'person_birht_date',
                    'label' => __( 'Date of birth', 'devmonsta' ),
                    'type'  => 'date',
                ],

                [
                    'id'    => 'person_child',
                    'label' => __( 'Child', 'devmonsta' ),
                    'type'  => 'number',
                ],
                [
                    'id'    => 'person_color',
                    'label' => __( 'Awesome Color', 'devmonsta' ),
                    'type'  => 'color',
                ],
                [
                    'id'    => 'person_hair_color',
                    'label' => __( 'Hair Color', 'devmonsta' ),
                    'type'  => 'color',
                ],
                [
                    'id'    => 'person_image',
                    'type'  => 'media',

                    'label' => __( 'Media' ),

                ],
                [
                    'id'          => 'dm_sum_test_control_kk',
                    'type'        => 'test-control',
                    'section'     => 'devmonsta_text_settings_section', // Add a default or your own section
                    'label'       => __( 'Custom Dropdown Pages' ),
                    'description' => __( 'This is a custom dropdown pages option.' ),
                ],
                [
                    'type'        => 'radio',
                    'id'          => 'dm_test_readio_for_repeater',
                    'label'       => __( 'Custom Radio Selection' ),
                    'description' => __( 'This is a custom radio input.' ),
                    'choices'     => [
                        'red'   => __( 'Red' ),
                        'blue'  => __( 'Blue' ),
                        'green' => __( 'Green' ),
                    ],
                ],

            ],
        ] );

        $this->add_control( [
            'id'              => 'devmonsta_repeater_popup_control',
            'label'           => 'Popup',
            'type'            => 'addable-popup',
            'section'         => 'dm_repeater_section',
            'add_button_text' => __( 'Add new', 'devmonsta' ),
            'fields'          => [
                [
                    'id'    => 'person_name_popup',
                    'label' => __( 'Name', 'devmonsta' ),
                    'type'  => 'text',
                ],
                [
                    'id'    => 'person_email_popup',
                    'label' => __( 'Email', 'devmonsta' ),
                    'type'  => 'email',
                ],
                [
                    'id'    => 'person_birht_date_popup',
                    'label' => __( 'Date of birth', 'devmonsta' ),
                    'type'  => 'date',
                ],

                [
                    'id'    => 'person_child_popup',
                    'label' => __( 'Child', 'devmonsta' ),
                    'type'  => 'number',
                ],
                [
                    'id'    => 'person_color_popup',
                    'label' => __( 'Awesome Color', 'devmonsta' ),
                    'type'  => 'color',
                ],
                [
                    'id'    => 'person_hair_color_popup',
                    'label' => __( 'Hair Color', 'devmonsta' ),
                    'type'  => 'color',
                ],
                [
                    'id'    => 'person_image_popup',
                    'type'  => 'media',

                    'label' => __( 'Media' ),

                ],
                [
                    'id'          => 'dm_sum_test_control_kk_popup',
                    'type'        => 'test-control',
                    'section'     => 'devmonsta_text_settings_section', // Add a default or your own section
                    'label'       => __( 'Custom Dropdown Pages' ),
                    'description' => __( 'This is a custom dropdown pages option.' ),
                ],
                [
                    'type'        => 'radio',
                    'id'          => 'dm_test_readio_for_repeater_popup',
                    'label'       => __( 'Custom Radio Selection' ),
                    'description' => __( 'This is a custom radio input.' ),
                    'choices'     => [
                        'red'   => __( 'Red' ),
                        'blue'  => __( 'Blue' ),
                        'green' => __( 'Green' ),
                    ],
                ],

            ],
        ] );

    }

}
