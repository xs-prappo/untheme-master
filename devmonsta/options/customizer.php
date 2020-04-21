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


        $this->add_control([
            'id' => 'dm_ctrl_text_1',
            'label' => __('Title', 'devmonsta'),
            'section' => 'devmonsta_text_settings_section',
            'type' => 'text',
        ]);

      

        $this->add_control([
            'id' => 'devmonsta_custom_text_color',
            'label' => __('Box Text color', 'devmonsta'),
            'section' => 'devmonsta_color_settings_section',
            'type' => 'color'

        ]);

    

        $this->add_control([
            'id' => 'dm_box_text',
            'label' => __('Box Text', 'devmonsta'),
            'section' => 'devmonsta_color_settings_section',
            'type' => 'text',
            'selector' => '.dm_h1',
            'default' => 'Devmonsta',
            'transport' => 'postMessage'
          
        ]);

    }

}
