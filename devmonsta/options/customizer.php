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

        $this->add_section( [
            'id'       => 'dm_new_controls',
            'title'    => 'New controls',
            'panel'    => 'devmonsta_panel',
            'priority' => 10,
        ] );

        /**
         * ===========================================
         *      Custom control start
         * ===========================================
         */

        /**
         * Control for text input
         */
        $this->add_control( [
            'id'      => 'dm_ctrl_text_1',
            'type'    => 'text',
            'label'   => __( 'Text Input', 'devmonsta' ),
            'section' => 'devmonsta_text_settings_section',
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
         * Control for media-select input
         */
        $this->add_control( [
            'id'      => 'dm_media',
            'type'    => 'media',
            'section' => 'devmonsta_text_settings_section',
            'label'   => __( 'Media' ),
        ] );

        /**
         * control for radio input
         */
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

        /**
         * control for textarea input
         */
        $this->add_control( [
            'id'          => 'dm_textarea',
            'type'        => 'textarea',
            'section'     => 'devmonsta_text_settings_section',
            'label'       => __( 'Text area' ),
            'description' => __( 'This is text area desctription' ),
            "value"       => 'default value for text area',
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
                'date-format'  => 'Y-m-d',            // Format datetime.
                'time-format'  => 'H:i',              // Format datetime.
                'min-date'     => "10-05-2020 12:00", // By default minimum date will be current day. Set a date in format Y-m-d as a start date
                'max-date'     => null,               // By default there is not maximum date. Set a date in format Y-m-d as a start date
                'timepicker'   => true,               // Show timepicker.
                'default-time' => '12:00',            // If the input value is empty, timepicker will set time use defaultTime.
            ],
        ] );

        /**
         * control for checkbox input
         */
        $this->add_control( [
            'id'      => 'dm_checkbox',
            'section' => 'devmonsta_text_settings_section',
            'type'    => 'checkbox',
            'value'   => false, // checked/unchecked
            'label'   => __( 'Checkbox example', '{domain}' ),
            'desc'    => __( "checkbox example details", '{domain}' ),
            'text'    => __( 'Yes', '{domain}' ),
        ] );

        /**
         * control for url input
         */
        $this->add_control( [
            'id'      => 'dm_url',
            'section' => 'devmonsta_text_settings_section',
            'type'    => 'url',
            'value'   => 'http://www.xs.com',
            'label'   => __( 'Enter valid URL', '{domain}' ),
            'desc'    => __( 'Url Description', '{domain}' ),
        ] );

        /**
         * control for dimension input
         */
        $this->add_control( [
            'id'      => 'padding_dimension',
            'section' => 'devmonsta_text_settings_section',
            'type'    => 'dimensions',
            'label'   => __( 'Dimension Input', '{domain}' ),
            'desc'    => __( 'Dimension text description', '{domain}' ),
            'value'   => [
                'top'      => '2',
                'right'    => '3',
                'bottom'   => '4',
                'left'     => '0',
                'isLinked' => true,
            ],
        ] );

        /**
         * Control for switcher input
         */
        $this->add_control( [
            'section'      => 'devmonsta_text_settings_section',
            'type'         => 'switcher',
            'id'           => 'dm_switcher',
            'value'        => 'hello',
            'label'        => __( 'Switcher', '{domain}' ),
            'desc'         => __( 'Description', '{domain}' ),
            'left-choice'  => [
                'goodbye' => __( 'Goodbye', '{domain}' ),
            ],
            'right-choice' => [
                'hello' => __( 'Hello', '{domain}' ),
            ],
        ] );

        /**
         * control for multiple-checkbox input
         */
        $this->add_control( [
            'section' => 'devmonsta_text_settings_section',
            'id'      => 'multiple_checkboxes',
            'type'    => 'checkbox-multiple',
            'attr'    => ['class' => 'custom-class', 'data-foo' => 'bar'],
            'label'   => __( 'Multiple Chekbox', '{domain}' ),
            'desc'    => __( 'Multi checkbox Description', '{domain}' ),
            'choices' => [
                'choice-1' => __( 'Choice 1', '{domain}' ),
                'choice-2' => __( 'Choice 2', '{domain}' ),
                'choice-3' => __( 'Choice 3', '{domain}' ),
            ],
            'inline'  => false,
        ] );

        /**
         * Control for Thumbnail Image picker Input
         */
        $this->add_control( [
            'id'      => 'i_p',
            'section' => 'devmonsta_text_settings_section',
            'type'    => 'image-picker',
            'value'   => 'value-2',
            'label'   => __( 'Thumbnail Image Picker', '{domain}' ),
            'desc'    => __( 'Description', '{domain}' ),
            'choices' => [
                'value-1' => [
                    'small' => get_template_directory_uri() . '/images/thumbnail.jpg',
                    'large' => get_template_directory_uri() . '/images/thumbnail.jpg',
                ],
                'value-2' => [
                    'small' => get_template_directory_uri() . '/images/preview.png',
                    'large' => get_template_directory_uri() . '/images/preview.png',
                ],
                'value-3' => [
                    'small' => get_template_directory_uri() . '/images/a.jpg',
                    'large' => get_template_directory_uri() . '/images/a.jpg',
                ],
                'value-4' => [
                    'small' => get_template_directory_uri() . '/images/b.jpg',
                    'large' => get_template_directory_uri() . '/images/b.jpg',
                ],
                'value-5' => [
                    'small' => get_template_directory_uri() . '/images/c.jpg',
                    'large' => get_template_directory_uri() . '/images/c.jpg',
                ],
            ],
        ] );

        /**
         * control for dropdown select
         */
        $this->add_control( [
            'id'      => 'select',
            'section' => 'devmonsta_text_settings_section',
            'type'    => 'select',
            'value'   => 'choice-3',
            'label'   => __( 'Select Single', '{domain}' ),
            'desc'    => __( 'select description goes here', '{domain}' ),
            'choices' => [
                ''         => '---',
                'choice-1' => __( 'Choice One', '{domain}' ),
                'choice-2' => __( 'Choice Two', '{domain}' ),
                'choice-3' => __( 'Choice Three', '{domain}' ),
            ],
        ] );

        /**
         * ===========================================
         *      Custom control end
         * ===========================================
         */

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

        // New controls

        $this->add_control( [
            'id'      => 'dm_toggle',
            'lable'   => __( 'Toggle', 'devmonsta' ),
            'section' => 'dm_new_controls',
            'type'    => 'toggle',
        ] );

        $this->add_control( [
            'id'          => 'dm_accordion',
            'lable'       => __( 'Accordion', 'devmonsta' ),
            'section'     => 'dm_new_controls',
            'type'        => 'accordion',
            'description' => [
                'Title' => 'Sotry fo title',
            ],
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

        $this->add_tab( [
            'id'      => 'first_tab',
            'section' => 'devmonsta_text_settings_section',
            'tabs'    => [
                [
                    'id'       => 'tab_1',
                    'label'    => 'Tab 1',
                    'controls' => [
                        'control_id_1',
                        'control_id_2',
                        'control_id_3',
                    ],
                ],
            ],
        ] );

        $control_1 = [
            'id'      => 'dm_media',
            'type'    => 'media',
            'section' => 'devmonsta_text_settings_section',
            'label'   => __( 'Media' ),
        ];

        $control_2 = [
            'id'      => 'dm_media',
            'type'    => 'media',
            'section' => 'devmonsta_text_settings_section',
            'label'   => __( 'Media' ),
        ];

        $this->add_tab( [
            'id'      => 'first_tab',
            'section' => 'devmonsta_text_settings_section',
            'tabs'    => [
                [
                    'id'       => 'tab_1',
                    'label'    => 'Tab 1',
                    'controls' => [$control_1, $control_2],
                ],
            ],
        ] );

    }

}
