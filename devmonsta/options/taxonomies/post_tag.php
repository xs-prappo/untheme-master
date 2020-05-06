<?php

use Devmonsta\Libs\Taxonomies;

class Post_Tag extends Taxonomies {

    public function register_controls() {

        $this->add_control( [
            'type'        => 'text',
            'placeholder' => 'Tags first name',
            'label'       => 'Name',
            'name'        => 'p_f_name',
        ] );

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
            'label'         => __( 'Graduated', '{domain}' ),
            'desc'          => __( "check if you're graduated", '{domain}' ),
            'text'          => __( 'Yes', '{domain}' ),
            'show_in_table' => false,
        ] );

    }

}
