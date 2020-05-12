<?php

$popup = array(
    'type' => 'addable-popup',
    'value' => array(
        array(
            'option_1' => 'value 1',
            'option_2' => 'value 2',
        ),
        // ...
    ),
    'label' => __('Addable Popup', '{domain}'),
    'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
    'template' => '{{- demo_text }}',
    'popup-title' => null,
    'size' => 'small', // small, medium, large
    'limit' => 0, // limit the number of popup`s that can be added
    'add-button-text' => __('Add', '{domain}'),
    'sortable' => true,
    'popup-options' => array(
        'option_1' => array(
            'label' => __('Text', '{domain}'),
            'type' => 'text',
            'value' => 'Demo text value',
            'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
            'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
                __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
                __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '{domain}')
            ),
        ),
        'option_2' => array(
            'label' => __('Textarea', '{domain}'),
            'type' => 'textarea',
            'value' => 'Demo textarea value',
            'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
            'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
                __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
                __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '{domain}')
            ),
        ),
    ),
);

$options = array(
    'panel_1' => array(
        'title' => __('Unyson Panel', '{domain}'),
        'options' => array(

            'section_1' => array(
                'title' => __('Unyson Section #1', '{domain}'),
                'options' => array(

                    'option_x' => array(
                        'type' => 'addable-option',
                        'value' => array('Value 1', 'Value 2', 'Value 3'),
                        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                        'label' => __('Label', '{domain}'),
                        'desc' => __('Description', '{domain}'),
                        'help' => __('Help tip', '{domain}'),
                        'option' => array('type' => 'text'),
                        'add-button-text' => __('Add', '{domain}'),
                        'sortable' => true,
                    ),
                    'option_y' => $popup

                ),
            ),

            'section_2' => array(
                'title' => __('Unyson Section #2', '{domain}'),
                'options' => array(

                    'option_2' => array(
                        'type' => 'text',
                        'value' => 'Default Value',
                        'label' => __('Unyson Option #2', '{domain}'),
                        'desc' => __('Option Description', '{domain}'),
                    ),
                    'option_3' => array(
                        'type' => 'text',
                        'value' => 'Default Value',
                        'label' => __('Unyson Option #3', '{domain}'),
                        'desc' => __('Option Description', '{domain}'),
                    ),

                ),
            ),

        ),
    ),
);
