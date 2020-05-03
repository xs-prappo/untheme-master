<?php

class Customizer extends \Devmonsta\Libs\Customizer
{

    public function register_controls()
    {

        $this->add_panel([
            'id' => 'devmonsta_panel',
            'priority' => 500,
            'theme_supports' => '',
            'title' => __('Devmonsta panel', 'devmonsta'),
            'description' => __('Devmonsta options panel', 'devmonsta'),
        ]);

        $this->add_section([
            'id' => 'devmonsta_color_settings_section',
            'title' => __('Box settings', 'devmonsta'),
            'panel' => 'devmonsta_panel',
            'priority' => 10,
        ]);

        $this->add_section([
            'id' => 'devmonsta_text_settings_section',
            'title' => __('Text settings', 'devmonsta'),
            'panel' => 'devmonsta_panel',
            'priority' => 10,
        ]);

        $this->add_control([
            'id' => 'devmonsta_custom_box_color',
            'label' => __('Box Color', 'devmonsta'),
            'section' => 'devmonsta_color_settings_section',
            'type' => 'color',
            'selector' => '',
        ]);

        // default controls

        $this->add_control([
            'id' => 'dm_ctrl_text_1',
            'label' => __('Title', 'devmonsta'),
            'section' => 'devmonsta_text_settings_section',
            'type' => 'text',
        ]);

        $this->add_control([
            'id' => 'dm_ctrl_text_2',
            'label' => __('Title 2', 'devmonsta'),
            'section' => 'devmonsta_text_settings_section',
            'type' => 'text',
        ]);

        $this->add_control([
            'id' => 'dm_ctrl_text_textarea',
            'label' => __('Details', 'devmonsta'),
            'section' => 'devmonsta_text_settings_section',
            'type' => 'textarea',
            'selector' => '.dm_h1',
            'selectors' => [
                '.elementor-widget-container, .xyz' => 'color',
                '.elementor-widget' => [
                    'background-color', 'border-color',
                ],
            ],
            'default' => 'Devmonsta',
            'transport' => 'postMessage',
        ]);

        $this->add_control([
            'id' => 'dm_dropdown_pages',
            'type' => 'dropdown-pages',
            'section' => 'devmonsta_text_settings_section', // Add a default or your own section
            'label' => __('Custom Dropdown Pages'),
            'description' => __('This is a custom dropdown pages option.'),
        ]);

        $this->add_control([
            'id' => 'dm_dropdown_pages',
            'type' => 'test-control',
            'section' => 'devmonsta_text_settings_section', // Add a default or your own section
            'label' => __('Custom Dropdown Pages'),
            'description' => __('This is a custom dropdown pages option.'),
        ]);

        $this->add_control([
            'id' => 'dm_box_text',
            'label' => __('Box Text', 'devmonsta'),
            'section' => 'devmonsta_color_settings_section',
            'type' => 'text',
            'selector' => '.dm_h1',
            'selectors' => [
                '.elementor-widget-container, .xyz' => 'color',
                '.elementor-widget' => [
                    'background-color', 'border-color',
                ],
            ],
            'default' => 'Devmonsta',
            'transport' => 'postMessage',

        ]);

        $this->add_control([
            'id' => 'devmonsta_custom_text_color',
            'label' => __('Box Text color', 'devmonsta'),
            'section' => 'devmonsta_color_settings_section',
            'type' => 'color',

        ]);

        $this->add_control([
            'id' => 'devmonsta_repeater_control',
            'label' => 'List',
            'type' => 'repeater',
            'section' => 'devmonsta_text_settings_section',
            'add_button_text' => __('Add new','devmonsta'),
            'fields' => [
                [
                    'id' => 'person_name',
                    'label' => __('Name', 'devmonsta'),
                    'type' => 'text',
                ],
                [
                    'id' => 'person_email',
                    'label' => __('Email', 'devmonsta'),
                    'type' => 'email',
                ],
                [
                    'id' => 'person_birht_date',
                    'label' => __('Date of birth', 'devmonsta'),
                    'type' => 'date',
                ],
                
                [
                    'id' => 'person_child',
                    'label' => __('Child', 'devmonsta'),
                    'type' => 'number',
                ],
                [
                    'id' => 'person_image',
                    'label' => __('Image', 'devmonsta'),
                    'type' => 'image',
                ],
                [
                    'id' => 'dm_sum_test_control_kk',
                    'type' => 'test-control',
                    'section' => 'devmonsta_text_settings_section', // Add a default or your own section
                    'label' => __('Custom Dropdown Pages'),
                    'description' => __('This is a custom dropdown pages option.'),
                ],

            ],
        ]);

    }

}
