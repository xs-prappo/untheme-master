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

    }

}
