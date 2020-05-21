<?php

use Devmonsta\Libs\Posts;

class Post extends Posts {

    public function register_controls() {

        $this->add_box( [
            'id'        => 'post_box_1',
            'post_type' => 'post',
            'title'     => 'First metabox for post',
        ] );

        $this->add_box( [
            'id'        => 'post_box_2',
            'post_type' => 'post',
            'title'     => 'Second metabox for post',
        ] );

        /**
         * control for text input
         */
        $this->add_control( [
            'box_id' => 'post_box_1',
            'type'   => 'text',
            'name'   => 'f_name',
            'desc'   => 'use this area to input text',
            'label'  => __( 'First name', '{domain}' ),
        ] );

        /**
         * control for url input
         */
        $this->add_control( [
            'box_id' => 'post_box_1',
            'name'   => 'user_url',
            'type'   => 'url',
            'value'  => 'http://www.reza-khan.com',
            'label'  => __( 'Enter valid URL', '{domain}' ),
            'desc'   => __( 'Url Description', '{domain}' ),
        ] );

        $this->add_control( [
            'box_id'   => 'post_box_1',
            'type'     => 'repeater',
            'label'    => 'My Repeater',
            'controls' => [
                [
                    'name'  => 'user_url_1',
                    'type'  => 'url',
                    'value' => 'http://www.reza-khan.com',
                    'label' => __( 'Enter valid URL', '{domain}' ),
                    'desc'  => __( 'Url Description', '{domain}' ),
                ],
                [
                    'type'    => 'radio',
                    'name'    => 'gender_1',
                    'desc'    => 'use this area to input radio',
                    'label'   => __( 'Gender', '{domain}' ),
                    'value'   => 'choice-3',
                    'choices' => [
                        // Note: Avoid bool or int keys http://bit.ly/1cQgVzk
                        'choice-1' => __( 'Male', '{domain}' ),
                        'choice-2' => __( 'Female', '{domain}' ),
                        'choice-3' => __( 'Others', '{domain}' ),
                    ],
                    // Display choices inline instead of list
                    'inline'  => true,
                ],
                [
                    'name'     => 'color',
                    'type'     => 'color-picker',
                    'label'    => __( 'Wp Color Picker Example', '{domain}' ),
                    'desc'     => __( 'description of color-picker goes here', '{domain}' ),
                    'value'    => '#FF0000',
                    'palettes' => ['#ba4e4e', '#0ce9ed', '#941940'],
                ],
            ],
        ] );

        /**
         * control for radio input
         */
        $this->add_control( [
            'box_id'  => 'post_box_2',
            'type'    => 'radio',
            'name'    => 'gender',
            'desc'    => 'use this area to input radio',
            'label'   => __( 'Gender', '{domain}' ),
            'value'   => 'choice-3',
            'choices' => [
                // Note: Avoid bool or int keys http://bit.ly/1cQgVzk
                'choice-1' => __( 'Male', '{domain}' ),
                'choice-2' => __( 'Female', '{domain}' ),
                'choice-3' => __( 'Others', '{domain}' ),
            ],
            // Display choices inline instead of list
            'inline'  => false,
        ] );

        /**
         * control for textarea
         */
        $this->add_control( [
            'box_id' => 'post_box_2',
            'type'   => 'textarea',
            'name'   => 'txt_area',
            'label'  => __( 'Text Area', '{domain}' ),
            'desc'   => 'use this area to input large text',
            'value'  => '',
            'attr'   => ['class' => 'custom-class', 'data-foo' => 'bar'],
        ] );

        /**
         * control for checkbox input
         */
        $this->add_control( [
            'box_id' => 'post_box_2',
            'type'   => 'checkbox',
            'name'   => 'graduate',
            'value'  => false, // checked/unchecked
            'label'  => __( 'Graduated', '{domain}' ),
            'desc'   => __( "check if you're graduated", '{domain}' ),
            'text'   => __( 'Yes', '{domain}' ),
        ] );

        /**
         * control for color-picker input
         */
        $this->add_control( [
            'box_id'   => 'post_box_2',
            'name'     => 'color',
            'type'     => 'color-picker',
            'label'    => __( 'Wp Color Picker Example', '{domain}' ),
            'desc'     => __( 'description of color-picker goes here', '{domain}' ),
            'value'    => '#FF0000',
            'palettes' => ['#ba4e4e', '#0ce9ed', '#941940'],
        ] );

        /**
         * control for multiple-checkbox input
         */
        $this->add_control( [
            'box_id'  => 'post_box_2',
            'name'    => 'multiple_checkboxes',
            'type'    => 'checkboxes',
            'value'   => [
                'choice-1' => false,
                'choice-2' => true,
            ],
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
         * control for hidden input
         */
        $this->add_control( [
            'box_id' => 'post_box_2',
            'type'   => 'hidden',
            'value'  => 'defaultvalue',
            'name'   => 'hidden_field',
            'attr'   => ['class' => 'custom-class', 'data-foo' => 'bar'],
        ] );

        /**
         * control for dropdown select
         */
        $this->add_control( [
            'box_id'  => 'post_box_2',
            'name'    => 'select',
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
         * control for multiple select
         */
        $this->add_control( [
            'box_id'  => 'post_box_2',
            'name'    => 'select_multiple',
            'type'    => 'multiselect',
            'label'   => __( 'Select Multiple', '{domain}' ),
            'desc'    => __( 'multiple select description goes here', '{domain}' ),
            'value'   => [
                'choice-1',
                'choice-2',
            ],
            'choices' => [
                'choice-1' => __( 'Choice One', '{domain}' ),
                'choice-2' => __( 'Choice Two', '{domain}' ),
                'choice-3' => __( 'Choice Three', '{domain}' ),
            ],
        ] );

        /**
         * control for upload input
         */
        $this->add_control( [
            'box_id'           => 'post_box_2',
            'name'             => 'upload_image',
            'type'             => 'upload',
            'multiple'         => true,
            'label'            => __( 'Upload Image', '{domain}' ),
            'desc'             => __( 'Description', '{domain}' ),
            'images_only'      => true,
            'files_ext'        => ['jpg', 'png', 'jpeg', 'JPEG', 'JPG', 'PNG'],
            'extra_mime_types' => ['audio/x-aiff, aif aiff'],
        ] );

        /**
         * control for gradient input
         */
        $this->add_control( [
            'box_id'     => 'post_box_2',
            'name'       => 'slider_widget',
            'label'      => __( 'Wp Slider Example', '{domain}' ),
            'desc'       => __( 'description of slider goes here', '{domain}' ),
            'type'       => 'slider',
            'value'      => 33,
            'properties' => [
                'min'  => 0,
                'max'  => 100,
                'step' => 1,
            ],
        ] );

        /**
         * control for gradient input
         */
        $this->add_control( [
            'box_id'     => 'post_box_2',
            'name'       => 'range_slider_widget',
            'type'       => 'range-slider',
            'label'      => __( 'Wp Range Slider Example', '{domain}' ),
            'desc'       => __( 'description of range slider goes here', '{domain}' ),
            'value'      => [
                'from' => 10,
                'to'   => 33,
            ],
            'properties' => [
                'min'  => 0,
                'max'  => 100,
                'step' => 1,
            ],
        ] );

        /**
         * Control for Html input
         */
        $this->add_control( [
            'box_id' => 'post_box_2',
            'label'  => __( 'Html Input', '{domain}' ),
            'desc'   => __( 'html description goes here', '{domain}' ),
            'type'   => 'html',
            'name'   => 'html',
            'value'  => 'Default hidden value',
            'html'   => 'My <b>custom</b> <em>HTML</em> <i>Italic<i> <p>Paragraph</p>',
        ] );

        /**
         * control for date-picker input
         */
        $this->add_control( [
            'box_id'       => 'post_box_2',
            'type'         => 'date-picker',
            'name'         => 'start_date',
            'value'        => '',
            'label'        => __( 'Date Picker', '{domain}' ),
            'desc'         => __( 'date picker description goes here', '{domain}' ),
            'monday-first' => true,         // The week will begin with Monday; for Sunday, set to false
            'min-date'     => "10-05-2020", // By default minimum date will be current day. Set a date in format Y-m-d as a start date
            'max-date'     => null,         // By default there is not maximum date. Set a date in format Y-m-d as a start date
        ] );

        /**
         * control for rgba-color-picker input
         */
        $this->add_control( [
            'box_id'   => 'post_box_2',
            'name'     => 'rgba_color',
            'type'     => 'rgba-color-picker',
            'label'    => __( 'Wp RGBA Color Picker Example', '{domain}' ),
            'desc'     => __( 'description of rgba-color-picker goes here', '{domain}' ),
            'value'    => 'rgba(255,25,0,0.95)',
            'palettes' => ['#ba4e4e', '#5f9419', '#381994'],
        ] );

        /**
         * control for datetime-picker input
         */
        $this->add_control( [
            'box_id'          => 'post_box_2',
            'type'            => 'datetime-picker',
            'name'            => 'date_time_picker',
            'label'           => __( 'Date Time Picker', '{domain}' ),
            'desc'            => __( 'date time picker description', '{domain}' ),
            'datetime-picker' => [
                'date-format'      => 'Y-m-d',  // Format datetime.
                'time-format'      => 'H:i',  // Format datetime.
                'min-date'    => "10-05-2020 12:00", // By default minimum date will be current day. Set a date in format Y-m-d as a start date
                'max-date'    => null,         // By default there is not maximum date. Set a date in format Y-m-d as a start date
                'timepicker'  => true,         // Show timepicker.
                'defaultTime' => '12:00',      // If the input value is empty, timepicker will set time use defaultTime.
            ],
        ] );

        /**
         * control for datetime-picker input
         */
        $this->add_control( [
            'box_id'           => 'post_box_2',
            'type'             => 'datetime-range',
            'value'            => [
                'from' => '2020/05/10 12:00 am',
                'to'   => '2020/05/18 07:55 pm',
            ],
            'name'             => 'date_time_range_picker',
            'label'            => __( 'Date Time Range Picker', '{domain}' ),
            'desc'             => __( 'date time range picker description', '{domain}' ),
            'datetime-pickers' => [
                'minDate'     => '1970/01/01',         // By default minimum date will be current day, set a date in the datetime format.
                'maxDate'     => '2038/01/19',         // By default there is not maximum date , set a date in the datetime format.
                'format'      => 'YYYY-MM-DD hh:mm a', // Format datetime.
                'time24hours' => true,
                'timepicker'  => true, // Show timepicker.
                'datepicker'  => true, // Show datepicker.
            ],
        ] );

        /**
         * control for gradient input
         */
        $this->add_control( [
            'box_id' => 'post_box_2',
            'name'   => 'gradient',
            'type'   => 'gradient',
            'label'  => __( 'Wp Gradient Picker Example', '{domain}' ),
            'desc'   => __( 'description of gradient-picker goes here', '{domain}' ),
            'value'  => [
                'primary'   => '#FF0000',
                'secondary' => '#0000FF',
            ],
        ] );

        /**
         * control for oembed input
         */
        $this->add_control( [
            'box_id'  => 'post_box_1',
            'name'    => 'oembed_field',
            'type'    => 'oembed',
            'label'   => __( 'Oembed Input', '{domain}' ),
            'desc'    => __( 'Oembed text description', '{domain}' ),
            'attr'    => ['class' => 'custom-class', 'data-foo' => 'bar'],
            'value'   => 'https://vimeo.com/1130783377',
            'preview' => [
                'width'      => 400, // optional, if you want to set the fixed width to iframe
                'height'     => 400, // optional, if you want to set the fixed height to iframe
                'keep_ratio' => false,
            ],
        ] );

        /**
         * control for wp-editor input
         */
        $this->add_control( [
            'box_id'        => 'post_box_2',
            'name'          => 'wp_editor',
            'type'          => 'wp-editor',
            'value'         => 'default value',
            'label'         => __( 'Wp Editor Example', '{domain}' ),
            'desc'          => __( 'description of wp-editor goes here', '{domain}' ),
            'size'          => 'small',
            'editor_height' => 400,
            'wpautop'       => true,
            'editor_type'   => true, // tinymce, false: HTML
        ] );

        /**
         * control for dimension input
         */
        $this->add_control( [
            'box_id' => 'post_box_2',
            'name'   => 'padding_dimension',
            'type'   => 'dimensions',
            'label'  => __( 'Dimension Input', '{domain}' ),
            'desc'   => __( 'Dimension text description', '{domain}' ),
            'attr'   => ['class' => 'custom-class', 'data-foo' => 'bar'],
            'value'  => [
                'top'      => '0',
                'right'    => '0',
                'bottom'   => '0',
                'left'     => '0',
                'isLinked' => true,
            ],

        ] );

        /**
         * Control for Thumbnail Image picker Input
         */
        $this->add_control( [
            'name'    => 'i_p',
            'box_id'  => 'post_box_2',
            'type'    => 'image-picker',
            'value'   => 'value-2',
            'attr'    => [
                'class'    => 'custom-class',
                'data-foo' => 'bar',
            ],
            'label'   => __( 'Thumbnail Image Picker', '{domain}' ),
            'desc'    => __( 'Description', '{domain}' ),
            'help'    => __( 'Help tip', '{domain}' ),
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
         * Control for switcher input
         */
        $this->add_control( [
            'box_id'       => 'post_box_2',
            'type'         => 'switcher',
            'name'         => 'switcher',
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
         * Control for Typography Input
         */
        $this->add_control( [
            'name'       => 'typo',
            'box_id'     => 'post_box_2',
            'type'       => 'typography',
            'value'      => [
                'family'         => 'Amarante',
                'style'          => 'italic',
                'weight'         => 700,
                'subset'         => 'latin-ext',
                'variation'      => 'regular',
                'size'           => 14,
                'line_height'    => 13,
                'letter_spacing' => -2,
                'color'          => '#0000ff',
            ],
            'components' => [
                'family'         => true,
                'size'           => true,
                'line-height'    => true,
                'letter-spacing' => true,
                'color'          => true,
            ],
            'label'      => __( 'Typhography', '{domain}' ),
            'desc'       => __( 'Description', '{domain}' ),
        ] );

        /**
         * control for icon-picker input
         */
        $this->add_control( [
            'box_id' => 'post_box_1',
            'name'   => 'icon_picker',
            'type'   => 'icon',
            'label'  => __( 'Select Icon', '{domain}' ),
            'desc'   => __( 'Select icon description', '{domain}' ),
            'attr'   => ['class' => 'custom-class', 'data-foo' => 'bar'],
        ] );

        // dm_print(dm_p()->option('8', 'color'));

    }

}
