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
            'value'  => 'default text value',
            'desc'   => 'use this area to input text',
            'label'  => __( 'Text Input One', '{domain}' ),
        ] );

        /**
         * control for text input
         */
        $this->add_control( [
            'box_id' => 'post_box_1',
            'type'   => 'text',
            'name'   => 'f_name_1',
            'value'  => 'default text value',
            'desc'   => 'use this area to input text',
            'label'  => __( 'Text Input Two', '{domain}' ),
        ] );

        /**
         * control for url input
         */
        $this->add_control( [
            'box_id' => 'post_box_1',
            'name'   => 'user_url_one',
            'type'   => 'url',
            'value'  => 'http://www.xs.com',
            'label'  => __( 'Enter valid URL One', '{domain}' ),
            'desc'   => __( 'Url Description', '{domain}' ),
        ] );

        /**
         * control for url input
         */
        $this->add_control( [
            'box_id' => 'post_box_1',
            'name'   => 'user_url_three',
            'type'   => 'url',
            'value'  => 'http://www.px.com',
            'label'  => __( 'Enter valid URL Three', '{domain}' ),
            'desc'   => __( 'Url Description', '{domain}' ),
        ] );

        /**
         * control for oembed input
         */
        $this->add_control( [
            'box_id'  => 'post_box_1',
            'name'    => 'oembed_field_one',
            'type'    => 'oembed',
            'label'   => __( 'Oembed Input One', '{domain}' ),
            'desc'    => __( 'Oembed text description', '{domain}' ),
            'attr'    => ['class' => 'custom-class', 'data-foo' => 'bar'],
            'value'   => 'https://www.youtube.com/watch?v=0Nh11GI4-Gc',
            'preview' => [
                'width'      => 400, // optional, if you want to set the fixed width to iframe
                'height'     => 400, // optional, if you want to set the fixed height to iframe
                'keep_ratio' => false,
            ],
        ] );

        /**
         * control for oembed input
         */
        $this->add_control( [
            'box_id'  => 'post_box_1',
            'name'    => 'oembed_field_three',
            'type'    => 'oembed',
            'label'   => __( 'Oembed Input Three', '{domain}' ),
            'desc'    => __( 'Oembed text description', '{domain}' ),
            'attr'    => ['class' => 'custom-class', 'data-foo' => 'bar'],
            'value'   => 'https://www.youtube.com/watch?v=qx_9YwIibf8',
            'preview' => [
                'width'      => 400, // optional, if you want to set the fixed width to iframe
                'height'     => 400, // optional, if you want to set the fixed height to iframe
                'keep_ratio' => false,
            ],
        ] );

        /**
         * control for icon-picker input
         */
        $this->add_control( [
            'box_id' => 'post_box_1',
            'name'   => 'icon_picker_one',
            'type'   => 'icon',
            'value'  => [
                'icon' => 'fas fa-at',
                'type' => 'dm-font-awesome',
            ],
            'label'  => __( 'Select Icon Three', '{domain}' ),
            'desc'   => __( 'Select icon description', '{domain}' ),
            'attr'   => ['class' => 'custom-class', 'data-foo' => 'bar'],
        ] );

        /**
         * control for icon-picker input
         */
        $this->add_control( [
            'box_id' => 'post_box_1',
            'name'   => 'icon_picker_three',
            'type'   => 'icon',
            'label'  => __( 'Select Icon One', '{domain}' ),
            'desc'   => __( 'Select icon description', '{domain}' ),
            'attr'   => ['class' => 'custom-class', 'data-foo' => 'bar'],
        ] );

        /**
         * control for radio input
         */
        $this->add_control( [
            'box_id'  => 'post_box_2',
            'type'    => 'radio',
            'name'    => 'gender_two',
            'desc'    => 'use this area to input radio',
            'label'   => __( 'Gender', '{domain}' ),
            'value'   => 'choice-3',
            'choices' => [
                'choice-1' => __( 'Male', '{domain}' ),
                'choice-2' => __( 'Female', '{domain}' ),
                'choice-3' => __( 'Others', '{domain}' ),
            ],
            // Display choices inline instead of list
            'inline'  => false,
        ] );

        /**
         * control for radio input
         */
        $this->add_control( [
            'box_id'  => 'post_box_2',
            'type'    => 'radio',
            'name'    => 'gender_three',
            'desc'    => 'use this area to input radio',
            'label'   => __( 'Gender', '{domain}' ),
            'value'   => 'choice-3',
            'choices' => [
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
            'name'   => 'txt_area_two',
            'label'  => __( 'Text Area Two', '{domain}' ),
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
            'name'   => 'graduate_two',
            'value'  => false, // checked/unchecked
            'label'  => __( 'Graduated Two', '{domain}' ),
            'desc'   => __( "check if you're graduated", '{domain}' ),
            'text'   => __( 'Yes', '{domain}' ),
        ] );

        /**
         * control for checkbox input
         */
        $this->add_control( [
            'box_id' => 'post_box_2',
            'type'   => 'checkbox',
            'name'   => 'graduate_three',
            'value'  => false, // checked/unchecked
            'label'  => __( 'Graduated Three', '{domain}' ),
            'desc'   => __( "check if you're graduated", '{domain}' ),
            'text'   => __( 'Yes', '{domain}' ),
        ] );

        /**
         * control for color-picker input
         */
        $this->add_control( [
            'box_id'   => 'post_box_2',
            'name'     => 'color_two',
            'type'     => 'color-picker',
            'label'    => __( 'Wp Color Picker Two', '{domain}' ),
            'desc'     => __( 'description of color-picker goes here', '{domain}' ),
            'value'    => '#FF0000',
            'palettes' => ['#ba4e4e', '#0ce9ed', '#941940'],
        ] );

        /**
         * control for color-picker input
         */
        $this->add_control( [
            'box_id'   => 'post_box_2',
            'name'     => 'color_three',
            'type'     => 'color-picker',
            'label'    => __( 'Wp Color Picker Three', '{domain}' ),
            'desc'     => __( 'description of color-picker goes here', '{domain}' ),
            'value'    => '#FF0000',
            'palettes' => ['#ba4e4e', '#0ce9ed', '#941940'],
        ] );

        /**
         * control for multiple-checkbox input
         */
        $this->add_control( [
            'box_id'  => 'post_box_2',
            'name'    => 'multiple_checkboxes_two',
            'type'    => 'checkbox-multiple',
            'value'   => [
                'choice-3' => true,
                'choice-2' => true,
            ],
            'attr'    => ['class' => 'custom-class', 'data-foo' => 'bar'],
            'label'   => __( 'Multiple Chekbox Two', '{domain}' ),
            'desc'    => __( 'Multi checkbox Description', '{domain}' ),
            'choices' => [
                'choice-1' => __( 'Choice 1', '{domain}' ),
                'choice-2' => __( 'Choice 2', '{domain}' ),
                'choice-3' => __( 'Choice 3', '{domain}' ),
            ],
            'inline'  => false,
        ] );

        /**
         * control for multiple-checkbox input
         */
        $this->add_control( [
            'box_id'  => 'post_box_2',
            'name'    => 'multiple_checkboxes_three',
            'type'    => 'checkbox-multiple',
            'value'   => [
                'choice-1' => false,
                'choice-2' => true,
            ],
            'attr'    => ['class' => 'custom-class', 'data-foo' => 'bar'],
            'label'   => __( 'Multiple Chekbox Three', '{domain}' ),
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
            'name'    => 'select_two',
            'type'    => 'select',
            'value'   => 'choice-3',
            'label'   => __( 'Select Single Two', '{domain}' ),
            'desc'    => __( 'select description goes here', '{domain}' ),
            'choices' => [
                ''         => '---',
                'choice-1' => __( 'Choice One', '{domain}' ),
                'choice-2' => __( 'Choice Two', '{domain}' ),
                'choice-3' => __( 'Choice Three', '{domain}' ),
            ],
        ] );

        /**
         * control for dropdown select
         */
        $this->add_control( [
            'box_id'  => 'post_box_2',
            'name'    => 'select_three',
            'type'    => 'select',
            'value'   => 'choice-2',
            'label'   => __( 'Select Single Three', '{domain}' ),
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
            'name'    => 'select_multiple_two',
            'type'    => 'multiselect',
            'label'   => __( 'Select Multiple Two', '{domain}' ),
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
         * control for multiple select
         */
        $this->add_control( [
            'box_id'  => 'post_box_2',
            'name'    => 'select_multiple_three',
            'type'    => 'multiselect',
            'label'   => __( 'Select Multiple Three', '{domain}' ),
            'desc'    => __( 'multiple select description goes here', '{domain}' ),
            'value'   => [
                'choice-3',
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
            'box_id'   => 'post_box_2',
            'name'     => 'upload_image_two',
            'type'     => 'upload',
            'label'    => __( 'Upload Image Two', '{domain}' ),
            'desc'     => __( 'Description', '{domain}' ),
            'multiple' => true,
        ] );

        /**
         * control for upload input
         */
        $this->add_control( [
            'box_id'   => 'post_box_2',
            'name'     => 'upload_image_three',
            'type'     => 'upload',
            'label'    => __( 'Upload Image Three', '{domain}' ),
            'desc'     => __( 'Description', '{domain}' ),
            'multiple' => true,
        ] );

        /**
         * control for slider input
         */
        $this->add_control( [
            'box_id'     => 'post_box_2',
            'name'       => 'slider_widget_two',
            'label'      => __( 'Wp Slider Two', '{domain}' ),
            'desc'       => __( 'description of slider goes here', '{domain}' ),
            'type'       => 'slider',
            'value'      => 33,
            'properties' => [
                'min'  => 0,
                'max'  => 100,
                'step' => 1,
            ],
            // 'conditions' => [
            //     [
            //         'control_name'  => 'setting_1',
            //         'operator' => '==',
            //         'value'    => true,
            //     ],
            //     [
            //         'control_name'  => 'setting_3',
            //         'operator' => '==',
            //         'value' => true,
            //     ],
            // ],
        ] );

        /**
         * control for slider input
         */
        $this->add_control( [
            'box_id'     => 'post_box_2',
            'name'       => 'slider_widget_three',
            'label'      => __( 'Wp Slider Three', '{domain}' ),
            'desc'       => __( 'description of slider goes here', '{domain}' ),
            'type'       => 'slider',
            'value'      => 33,
            'properties' => [
                'min'  => 0,
                'max'  => 100,
                'step' => 1,
            ],
            // 'conditions' => [
            //     [
            //         'control_name'  => 'setting_1',
            //         'operator' => '==',
            //         'value'    => true,
            //     ],
            //     [
            //         'control_name'  => 'setting_3',
            //         'operator' => '==',
            //         'value' => true,
            //     ],
            // ],
        ] );

        /**
         * control for range-slider input
         */
        $this->add_control( [
            'box_id'     => 'post_box_2',
            'name'       => 'range_slider_widget_two',
            'type'       => 'range-slider',
            'label'      => __( 'Wp Range Slider Two', '{domain}' ),
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
            // 'conditions' => [
            //     [

            //         'control_name'  => 'setting_1',
            //         'operator' => '==',
            //         'value' => true,

            //     ],
            //     [
            //         'control_name'  => 'setting_3',
            //         'operator' => '==',
            //         'value' => true,
            //     ],
            // ],
        ] );

        /**
         * control for range-slider input
         */
        $this->add_control( [
            'box_id'     => 'post_box_2',
            'name'       => 'range_slider_widget_three',
            'type'       => 'range-slider',
            'label'      => __( 'Wp Range Slider Three', '{domain}' ),
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
            // 'conditions' => [
            //     [

            //         'control_name'  => 'setting_1',
            //         'operator' => '==',
            //         'value' => true,

            //     ],
            //     [
            //         'control_name'  => 'setting_3',
            //         'operator' => '==',
            //         'value' => true,
            //     ],
            // ],
        ] );

        /**
         * Control for Html input
         */
        $this->add_control( [
            'box_id' => 'post_box_2',
            'label'  => __( 'Html Input One', '{domain}' ),
            'desc'   => __( 'html description goes here', '{domain}' ),
            'type'   => 'html',
            'name'   => 'html_one',
            'value'  => 'My <b>custom</b> <em>HTML</em> <i>Italic<i> <p>Paragraph</p>',
        ] );

        /**
         * control for date-picker input
         */
        $this->add_control( [
            'box_id'       => 'post_box_2',
            'type'         => 'date-picker',
            'name'         => 'start_date_one',
            'value'        => '2020/07/10 11:00 am',
            'label'        => __( 'Date Picker Two', '{domain}' ),
            'desc'         => __( 'date picker description goes here', '{domain}' ),
            'monday-first' => true,         // The week will begin with Monday; for Sunday, set to false
            'min-date'     => "10-05-2020", // By default minimum date will be current day. Set a date in format Y-m-d as a start date
            'max-date'     => null,         // By default there is not maximum date. Set a date in format Y-m-d as a start date
        ] );

        /**
         * control for date-picker input
         */
        $this->add_control( [
            'box_id'       => 'post_box_2',
            'type'         => 'date-picker',
            'name'         => 'start_date_three',
            'value'        => '2020/06/10 10:00 am',
            'label'        => __( 'Date Picker Three', '{domain}' ),
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
            'name'     => 'rgba_color_two',
            'type'     => 'rgba-color-picker',
            'label'    => __( 'Wp RGBA Color Picker Two', '{domain}' ),
            'desc'     => __( 'description of rgba-color-picker goes here', '{domain}' ),
            'value'    => 'rgba(255,25,255,0.95)',
            'palettes' => ['#ba4e4e', '#5f9419', '#381994'],
        ] );

        /**
         * control for rgba-color-picker input
         */
        $this->add_control( [
            'box_id'   => 'post_box_2',
            'name'     => 'rgba_color_three',
            'type'     => 'rgba-color-picker',
            'label'    => __( 'Wp RGBA Color Picker Three', '{domain}' ),
            'desc'     => __( 'description of rgba-color-picker goes here', '{domain}' ),
            'value'    => 'rgba(255,255,0,0.95)',
            'palettes' => ['#ba4e4e', '#5f9419', '#381994'],
        ] );

        /**
         * control for datetime-picker input
         */
        $this->add_control( [
            'box_id'          => 'post_box_2',
            'type'            => 'datetime-picker',
            'name'            => 'date_time_picker_two',
            'value'           => '2020/06/15 10:00 am',
            'label'           => __( 'Date Time Picker Two', '{domain}' ),
            'desc'            => __( 'date time picker description', '{domain}' ),
            'datetime-picker' => [
                'date-format' => 'Y-m-d',            // Format datetime.
                'time-format' => 'H:i',              // Format datetime.
                'min-date'    => "10-05-2020 12:00", // By default minimum date will be current day. Set a date in format Y-m-d as a start date
                'max-date'    => null,               // By default there is not maximum date. Set a date in format Y-m-d as a start date
                'timepicker'  => true,               // Show timepicker.
                'defaultTime' => '12:00',            // If the input value is empty, timepicker will set time use defaultTime.
            ],
        ] );

        /**
         * control for datetime-range input
         */
        $this->add_control( [
            'box_id'          => 'post_box_2',
            'type'            => 'datetime-range',
            'value'           => [
                'from' => '2020/05/10 12:00 am',
                'to'   => '2020/05/18 07:55 pm',
            ],
            'name'            => 'date_time_range_picker_two',
            'label'           => __( 'Date Time Range Two', '{domain}' ),
            'desc'            => __( 'date time range picker description', '{domain}' ),
            'datetime-picker' => [
                'date-format' => 'Y-m-d',            // Format datetime.
                'time-format' => 'H:i',              // Format datetime.
                'min-date'    => "10-05-2020 12:00", // By default minimum date will be current day. Set a date in format Y-m-d as a start date
                'max-date'    => null,               // By default there is not maximum date. Set a date in format Y-m-d as a start date
                'timepicker'  => true,               // Show timepicker.
                'defaultTime' => '12:00',            // If the input value is empty, timepicker will set time use defaultTime.
            ],
        ] );

        /**
         * control for datetime-range input
         */
        $this->add_control( [
            'box_id'          => 'post_box_2',
            'type'            => 'datetime-range',
            'value'           => [
                'from' => '2020/05/10 12:00 am',
                'to'   => '2020/05/18 07:55 pm',
            ],
            'name'            => 'date_time_range_picker_three',
            'label'           => __( 'Date Time Range Three', '{domain}' ),
            'desc'            => __( 'date time range picker description', '{domain}' ),
            'datetime-picker' => [
                'date-format' => 'Y-m-d',            // Format datetime.
                'time-format' => 'H:i',              // Format datetime.
                'min-date'    => "10-05-2020 12:00", // By default minimum date will be current day. Set a date in format Y-m-d as a start date
                'max-date'    => null,               // By default there is not maximum date. Set a date in format Y-m-d as a start date
                'timepicker'  => true,               // Show timepicker.
                'defaultTime' => '12:00',            // If the input value is empty, timepicker will set time use defaultTime.
            ],
        ] );

        /**
         * control for gradient input
         */
        $this->add_control( [
            'box_id' => 'post_box_2',
            'name'   => 'gradient_two',
            'type'   => 'gradient',
            'label'  => __( 'Wp Gradient Picker Thwo', '{domain}' ),
            'desc'   => __( 'description of gradient-picker goes here', '{domain}' ),
            'value'  => [
                'primary'   => '#FF0000',
                'secondary' => '#0000FF',
            ],
            // 'conditions' => [
            //     [
            //         'control_name'  => 'setting_1',
            //         'operator' => '==',
            //         'value' => true,
            //     ],
            //     [
            //         'control_name'  => 'setting_3',
            //         'operator' => '==',
            //         'value' => true,
            //     ],
            // ],
        ] );

        /**
         * control for gradient input
         */
        $this->add_control( [
            'box_id' => 'post_box_2',
            'name'   => 'gradient_three',
            'type'   => 'gradient',
            'label'  => __( 'Wp Gradient Picker Three', '{domain}' ),
            'desc'   => __( 'description of gradient-picker goes here', '{domain}' ),
            'value'  => [
                'primary'   => '#FF0000',
                'secondary' => '#0000FF',
            ],
            // 'conditions' => [
            //     [
            //         'control_name'  => 'setting_1',
            //         'operator' => '==',
            //         'value' => true,
            //     ],
            //     [
            //         'control_name'  => 'setting_3',
            //         'operator' => '==',
            //         'value' => true,
            //     ],
            // ],
        ] );

        /**
         * control for wp-editor input
         */
        $this->add_control( [
            'box_id'        => 'post_box_2',
            'name'          => 'wp_editor_two',
            'type'          => 'wp-editor',
            'value'         => 'default value',
            'label'         => __( 'Wp Editor Two', '{domain}' ),
            'desc'          => __( 'description of wp-editor goes here', '{domain}' ),
            'size'          => 'small',
            'editor_height' => 200,
            'wpautop'       => true,
            'editor_type'   => false, // tinymce, false: HTML
        ] );

        /**
         * control for wp-editor input
         */
        $this->add_control( [
            'box_id'        => 'post_box_2',
            'name'          => 'wp_editor_three',
            'type'          => 'wp-editor',
            'value'         => 'default value',
            'label'         => __( 'Wp Editor Three', '{domain}' ),
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
            'name'   => 'padding_dimension_two',
            'type'   => 'dimensions',
            'label'  => __( 'Dimension Input Two', '{domain}' ),
            'desc'   => __( 'Dimension text description', '{domain}' ),
            'attr'   => ['class' => 'custom-class', 'data-foo' => 'bar'],
            'value'  => [
                'top'      => '8',
                'right'    => '2',
                'bottom'   => '4',
                'left'     => '6',
                'isLinked' => true,
            ],
        ] );

        /**
         * control for dimension input
         */
        $this->add_control( [
            'box_id' => 'post_box_2',
            'name'   => 'padding_dimension_three',
            'type'   => 'dimensions',
            'label'  => __( 'Dimension Input Three', '{domain}' ),
            'desc'   => __( 'Dimension text description', '{domain}' ),
            'attr'   => ['class' => 'custom-class', 'data-foo' => 'bar'],
            'value'  => [
                'top'      => '9',
                'right'    => '10',
                'bottom'   => '5',
                'left'     => '0',
                'isLinked' => true,
            ],
        ] );

        /**
         * Control for Thumbnail Image picker Input
         */
        $this->add_control( [
            'name'    => 'i_p_1',
            'box_id'  => 'post_box_2',
            'type'    => 'image-picker',
            'value'   => 'value-4',
            'attr'    => [
                'class'    => 'custom-class',
                'data-foo' => 'bar',
            ],
            'label'   => __( 'Thumbnail Image Picker One', '{domain}' ),
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
         * Control for Thumbnail Image picker Input
         */
        $this->add_control( [
            'name'    => 'i_p_2',
            'box_id'  => 'post_box_2',
            'type'    => 'image-picker',
            'value'   => 'value-5',
            'attr'    => [
                'class'    => 'custom-class',
                'data-foo' => 'bar',
            ],
            'label'   => __( 'Thumbnail Image Picker Two', '{domain}' ),
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
            'name'         => 'switcher_two',
            'value'        => 'goodbye',
            'label'        => __( 'Switcher Two', '{domain}' ),
            'desc'         => __( 'Description', '{domain}' ),
            'left-choice'  => [
                'goodbye' => __( 'Goodbye', '{domain}' ),
            ],
            'right-choice' => [
                'hello' => __( 'Hello', '{domain}' ),
            ],
        ] );

        /**
         * Control for switcher input
         */
        $this->add_control( [
            'box_id'       => 'post_box_2',
            'type'         => 'switcher',
            'name'         => 'switcher_three',
            'value'        => 'hello',
            'label'        => __( 'Switcher Three', '{domain}' ),
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
            'name'       => 'typo_two',
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
            'label'      => __( 'Typhography Two', '{domain}' ),
            'desc'       => __( 'Description', '{domain}' ),
        ] );

        /**
         * Control for Typography Input
         */
        $this->add_control( [
            'name'       => 'typo_three',
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
            'label'      => __( 'Typhography Three', '{domain}' ),
            'desc'       => __( 'Description', '{domain}' ),
        ] );

        /**
         * control for repeater input
         */
        $this->add_control( [
            'box_id'   => 'post_box_2',
            'type'     => 'repeater',
            'name'     => 'repeater_1',
            'label'    => 'My Repeater',
            'add_new'  => 'Add new',
            'controls' => [
                [
                    'name'     => 'child_repeater_1111',
                    'lable'    => 'Child repeater 1',
                    'type'     => 'repeater',
                    'add_new'  => 'Add new',
                    'controls' => [
                        [
                            'box_id'          => 'post_box_2',
                            'type'            => 'datetime-range',
                            'value'           => [
                                'from' => '2020/05/10 12:00 am',
                                'to'   => '2020/05/18 07:55 pm',
                            ],
                            'name'            => 'date_time_range_picker_child_repeater',
                            'label'           => __( 'Date Time Range Three', '{domain}' ),
                            'desc'            => __( 'date time range picker description', '{domain}' ),
                            'datetime-picker' => [
                                'date-format' => 'Y-m-d',            // Format datetime.
                                'time-format' => 'H:i',              // Format datetime.
                                'min-date'    => "10-05-2020 12:00", // By default minimum date will be current day. Set a date in format Y-m-d as a start date
                                'max-date'    => null,               // By default there is not maximum date. Set a date in format Y-m-d as a start date
                                'timepicker'  => true,               // Show timepicker.
                                'defaultTime' => '12:00',            // If the input value is empty, timepicker will set time use defaultTime.
                            ],
                        ],
                        [
                            'box_id'          => 'post_box_2',
                            'type'            => 'datetime-range',
                            'value'           => [
                                'from' => '2020/05/10 12:00 am',
                                'to'   => '2020/05/18 07:55 pm',
                            ],
                            'name'            => 'date_time_range_picker_child_repeater',
                            'label'           => __( 'Date Time Range Two', '{domain}' ),
                            'desc'            => __( 'date time range picker description', '{domain}' ),
                            'datetime-picker' => [
                                'date-format' => 'Y-m-d',            // Format datetime.
                                'time-format' => 'H:i',              // Format datetime.
                                'min-date'    => "10-05-2020 12:00", // By default minimum date will be current day. Set a date in format Y-m-d as a start date
                                'max-date'    => null,               // By default there is not maximum date. Set a date in format Y-m-d as a start date
                                'timepicker'  => true,               // Show timepicker.
                                'defaultTime' => '12:00',            // If the input value is empty, timepicker will set time use defaultTime.
                            ],
                        ]
                    ],
                ],
                [
                    'box_id'  => 'post_box_1',
                    'name'    => 'oembed_field_repeater',
                    'type'    => 'oembed',
                    'label'   => __( 'Oembed Input Repetaer', '{domain}' ),
                    'desc'    => __( 'Oembed text description', '{domain}' ),
                    'attr'    => ['class' => 'custom-class', 'data-foo' => 'bar'],
                    'value'   => 'https://www.youtube.com/watch?v=0Nh11GI4-Gc',
                    'preview' => [
                        'width'      => 400, // optional, if you want to set the fixed width to iframe
                        'height'     => 400, // optional, if you want to set the fixed height to iframe
                        'keep_ratio' => false,
                    ],
                ],
                [
                    'box_id'       => 'post_box_2',
                    'type'         => 'switcher',
                    'name'         => 'switcher_repeater',
                    'value'        => 'goodbye',
                    'label'        => __( 'Switcher Two', '{domain}' ),
                    'desc'         => __( 'Description', '{domain}' ),
                    'left-choice'  => [
                        'goodbye' => __( 'Goodbye', '{domain}' ),
                    ],
                    'right-choice' => [
                        'hello' => __( 'Hello', '{domain}' ),
                    ],
                ],
                [
                    'box_id'          => 'post_box_2',
                    'type'            => 'datetime-picker',
                    'name'            => 'date_time_picker_repeater',
                    'value'           => '2020/06/15 10:00 am',
                    'label'           => __( 'Date Time Picker Two', '{domain}' ),
                    'desc'            => __( 'date time picker description', '{domain}' ),
                    'datetime-picker' => [
                        'date-format' => 'Y-m-d',            // Format datetime.
                        'time-format' => 'H:i',              // Format datetime.
                        'min-date'    => "10-05-2020 12:00", // By default minimum date will be current day. Set a date in format Y-m-d as a start date
                        'max-date'    => null,               // By default there is not maximum date. Set a date in format Y-m-d as a start date
                        'timepicker'  => true,               // Show timepicker.
                        'defaultTime' => '12:00',            // If the input value is empty, timepicker will set time use defaultTime.
                    ],
                ],
                [
                    'box_id' => 'post_box_2',
                    'name'   => 'padding_dimension_repeater',
                    'type'   => 'dimensions',
                    'label'  => __( 'Dimension Input Two', '{domain}' ),
                    'desc'   => __( 'Dimension text description', '{domain}' ),
                    'attr'   => ['class' => 'custom-class', 'data-foo' => 'bar'],
                    'value'  => [
                        'top'      => '8',
                        'right'    => '2',
                        'bottom'   => '4',
                        'left'     => '6',
                        'isLinked' => true,
                    ],
                ],
                [
                    'name'    => 'i_p_repeater',
                    'box_id'  => 'post_box_2',
                    'type'    => 'image-picker',
                    'value'   => 'value-4',
                    'attr'    => [
                        'class'    => 'custom-class',
                        'data-foo' => 'bar',
                    ],
                    'label'   => __( 'Thumbnail Image Picker One', '{domain}' ),
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
                ],
                [
                    'box_id'  => 'post_box_2',
                    'name'    => 'select_multiple_repeater',
                    'type'    => 'multiselect',
                    'label'   => __( 'Select Multiple Two', '{domain}' ),
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
                ],
                [
                    'box_id' => 'post_box_1',
                    'name'   => 'icon_picker_repeater',
                    'type'   => 'icon',
                    'value'  => [
                        'icon' => 'fas fa-at',
                        'type' => 'dm-font-awesome',
                    ],
                    'label'  => __( 'Select Icon Three', '{domain}' ),
                    'desc'   => __( 'Select icon description', '{domain}' ),
                    'attr'   => ['class' => 'custom-class', 'data-foo' => 'bar'],
                ],
                [
                    'box_id'     => 'post_box_2',
                    'name'       => 'slider_widget_repeater',
                    'label'      => __( 'Wp Slider Two', '{domain}' ),
                    'desc'       => __( 'description of slider goes here', '{domain}' ),
                    'type'       => 'slider',
                    'value'      => 33,
                    'properties' => [
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ],
                ],
                [
                    'box_id'     => 'post_box_2',
                    'name'       => 'range_slider_widget_repeater',
                    'type'       => 'range-slider',
                    'label'      => __( 'Wp Range Slider Two', '{domain}' ),
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
                ],
                [
                    'name'       => 'typo_repeater',
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
                    'label'      => __( 'Typhography Two', '{domain}' ),
                    'desc'       => __( 'Description', '{domain}' ),
                ],
                [
                    'box_id'   => 'post_box_2',
                    'name'     => 'upload_image_repeater',
                    'type'     => 'upload',
                    'label'    => __( 'Upload Image Two', '{domain}' ),
                    'desc'     => __( 'Description', '{domain}' ),
                    'multiple' => true,
                ],
                [
                    'box_id'        => 'post_box_2',
                    'name'          => 'wp_editor_repeater',
                    'type'          => 'wp-editor',
                    'value'         => 'default value',
                    'label'         => __( 'Wp Editor Two', '{domain}' ),
                    'desc'          => __( 'description of wp-editor goes here', '{domain}' ),
                    'size'          => 'small',
                    'editor_height' => 200,
                    'wpautop'       => true,
                    'editor_type'   => false, // tinymce, false: HTML
                ],
                [
                    'box_id' => 'post_box_2',
                    'name'   => 'gradient_two_repeater',
                    'type'   => 'gradient',
                    'label'  => __( 'Wp Gradient Picker Thwo', '{domain}' ),
                    'desc'   => __( 'description of gradient-picker goes here', '{domain}' ),
                    'value'  => [
                        'primary'   => '#FF0000',
                        'secondary' => '#0000FF',
                    ],
                    // 'conditions' => [
                    //     [
                    //         'control_name'  => 'setting_1',
                    //         'operator' => '==',
                    //         'value' => true,
                    //     ],
                    //     [
                    //         'control_name'  => 'setting_3',
                    //         'operator' => '==',
                    //         'value' => true,
                    //     ],
                    // ],
                ]
            ],
        ] );

        //  dm_print(dm_p()->option('8', 'color'));

    }

}
