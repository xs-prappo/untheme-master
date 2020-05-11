<?php

use Devmonsta\Libs\Taxonomies;

class Post_Tag extends Taxonomies {

    public function register_controls() {

        /**
         * control for text input
         */
        $this->add_control( [
            'type'        => 'text',
            'placeholder' => 'Tags first name',
            'label'       => 'Name',
            'name'        => 'p_f_name',
        ] );

        /**
         * control for text-area input
         */
        $this->add_control( [
            'name'        => 'p_l_name',
            'type'        => 'textarea',
            'placeholder' => 'Tags last name',
            'label'       => __( 'Details', '{domain}' ),
            'desc'        => __( 'this is small description', '{domain}' ),
        ] );

        /**
         * control for url input
         */
        $this->add_control( [
            'name'          => 'tax_url',
            'type'          => 'url',
            'label'         => __( 'URL', '{domain}' ),
            'desc'          => __( 'Url Description', '{domain}' ),
            'show_in_table' => true,
        ] );

        /**
         * control for radio input
         */
        $this->add_control( [
            'name'          => 'gender',
            'type'          => 'radio',
            'desc'          => 'use this area to input radio',
            'label'         => __( 'Gender', '{domain}' ),
            'value'         => 'choice-3',
            'choices'       => [
                'choice-1' => __( 'Male', '{domain}' ),
                'choice-2' => __( 'Female', '{domain}' ),
                'choice-3' => __( 'Others', '{domain}' ),
            ],
            'inline'        => false,
            'show_in_table' => false,
        ] );

        /**
         * control for color-picker input
         */
        $this->add_control( [
            'name'          => 'color',
            'type'          => 'color-picker',
            'label'         => __( 'Wp Color Picker Example', '{domain}' ),
            'desc'          => __( 'description of color-picker goes here', '{domain}' ),
            'value'         => '#FF0055',
            'palettes'      => ['#ba4e4e', '#0ce9ed', '#941940'],
            'show_in_table' => false,
        ] );

        /**
         * control for checkbox input
         */
        $this->add_control( [
            'type'          => 'checkbox',
            'name'          => 'graduate',
            'value'         => false,
            'label'         => __( "Graduated", '{domain}' ),
            'desc'          => __( "check if you are graduated", 'domain' ),
            'text'          => __( "Yes", 'domain' ),
            'show_in_table' => false,
        ] );

        /**
         * control for multiple-checkbox input
         */
        $this->add_control( [
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
            'type'  => 'hidden',
            'value' => 'defaultvalue',
            'name'  => 'hidden_field',
            'attr'  => ['class' => 'custom-class', 'data-foo' => 'bar'],
        ] );

        /**
         * control for dropdown select
         */
        $this->add_control( [
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
         * control for upload input
         */
        $this->add_control( [
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
            'label' => __( 'Html Input', '{domain}' ),
            'desc'  => __( 'html description goes here', '{domain}' ),
            'type'  => 'html',
            'name'  => 'html',
            'value' => 'Default hidden value',
            'html'  => 'My <b>custom</b> <em>HTML</em> <i>Italic<i> <p>Paragraph</p>',
        ] );

        /**
         * control for date-picker input
         */
        $this->add_control( [
            'type'         => 'date-picker',
            'name'         => 'start_date',
            'value'        => '',
            'label'        => __( 'Dat Picker', '{domain}' ),
            'desc'         => __( 'date picker description goes here', '{domain}' ),
            'monday-first' => true,          // The week will begin with Monday; for Sunday, set to false
            'min-date'     => date( 'd-m-Y' ), // By default minimum date will be current day. Set a date in format d-m-Y as a start date
            'max-date'     => null,          // By default there is not maximum date. Set a date in format d-m-Y as a start date
        ] );

        /**
         * control for rgba-color-picker input
         */
        $this->add_control( [
            'name'     => 'rgba_color',
            'type'     => 'rgba-color-picker',
            'label'    => __( 'Wp RGBA Color Picker Example', '{domain}' ),
            'desc'     => __( 'description of rgba-color-picker goes here', '{domain}' ),
            'value'    => 'rgba(255,25,0,0.99)',
            'palettes' => ['#ba4e4e', '#5f9419', '#381994'],
        ] );

        /**
         * control for datetime-picker input
         */
        $this->add_control( [
            'type'            => 'datetime-picker',
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
         * control for datetime-picker input
         */
        $this->add_control( [
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
            'name'  => 'gradient',
            'type'  => 'gradient',
            'label' => __( 'Wp Gradient Picker Example', '{domain}' ),
            'desc'  => __( 'description of gradient-picker goes here', '{domain}' ),
            'value' => [
                'primary'   => '#FF0000',
                'secondary' => '#0000FF',
            ],
        ] );

        /**
         * control for oembed input
         */
        $this->add_control( [
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
            'name'  => 'padding_dimension',
            'type'  => 'dimensions',
            'label' => __( 'Dimension Input', '{domain}' ),
            'desc'  => __( 'Dimension text description', '{domain}' ),
            'attr'  => ['class' => 'custom-class', 'data-foo' => 'bar'],
            'value' => [
                'top'      => '0',
                'right'    => '0',
                'bottom'   => '0',
                'left'     => '0',
                'isLinked' => true,
            ],

        ] );

        /**
         * Control for switcher input
         */
        $this->add_control( [
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
    }

}
