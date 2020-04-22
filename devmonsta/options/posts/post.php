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
            'choices' => [
                'choice-1' => __( 'Choice One', '{domain}' ),
                'choice-2' => __( 'Choice Two', '{domain}' ),
                'choice-3' => __( 'Choice Three', '{domain}' ),
            ],
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
         * control for date-picker input
         */
        $this->add_control( [
            'box_id'       => 'post_box_2',
            'type'         => 'date-picker',
            'name'         => 'start_date',
            'label'        => __( 'Dat Picker', '{domain}' ),
            'desc'         => __( 'date picker description goes here', '{domain}' ),
            'monday-first' => true,          // The week will begin with Monday; for Sunday, set to false
            'min-date'     => date( 'd-m-Y' ), // By default minimum date will be current day. Set a date in format d-m-Y as a start date
            'max-date'     => null,          // By default there is not maximum date. Set a date in format d-m-Y as a start date
        ] );

        /**
         * control for datetime-picker input
         */
        $this->add_control( [
            'box_id'          => 'post_box_2',
            'type'            => 'datetime-picker',
            'value'           => '',
            'name'            => 'date_time_picker',
            'label'           => __( 'Date Time Picker', '{domain}' ),
            'desc'            => __( 'date time picker description', '{domain}' ),
            'datetime-picker' => [
                'format'      => 'Y-m-d H:i', // Format datetime.
                'maxDate'     => false,       // By default there is not maximum date , set a date in the datetime format.
                'minDate'     => false,       // By default minimum date will be current day, set a date in the datetime format.
                'timepicker'  => true,        // Show timepicker.
                'datepicker'  => true,        // Show datepicker.
                'defaultTime' => '12:00',     // If the input value is empty, timepicker will set time use defaultTime.
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
         * control for rgba-color-picker input
         */
        $this->add_control( [
            'box_id'   => 'post_box_2',
            'name'     => 'rgba_color',
            'type'     => 'rgba-color-picker',
            'label'    => __( 'Wp RGBA Color Picker Example', '{domain}' ),
            'desc'     => __( 'description of rgba-color-picker goes here', '{domain}' ),
            'value'    => 'rgba(255,25,0,0.99)',
            'palettes' => ['#ba4e4e', '#0ce9ed', '#941940'],
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

        // dm_print(dm_p()->option('8', 'color'));
    }

}
