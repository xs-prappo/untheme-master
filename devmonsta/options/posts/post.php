<?php

use Devmonsta\Libs\Posts;

class Post extends Posts
{

    public function register_controls()
    {

        $this->add_box([
            'id' => 'post_box_1',
            'post_type' => 'post',
            'title' => 'First metabox for post',
        ]);

        $this->add_box([
            'id' => 'post_box_2',
            'post_type' => 'post',
            'title' => 'Second metabox for post',
        ]);

        $this->add_control([
            'box_id' => 'post_box_1',
            'type' => 'text',
            'name' => 'f_name',
            'desc' => 'use this area to input text',
            'label' =>  __('First name', '{domain}'),
        ]);
        $this->add_control([
            'box_id' => 'post_box_1',
            'type' => 'text',
            'name' => 'l_name',
            'desc' => 'use this area to input text',
            'label' =>  __('Last name', '{domain}'),
        ]);

        $this->add_control([
            'box_id' => 'post_box_2',
            'type' => 'radio',
            'name' => 'gender',
            'desc' => 'use this area to input radio',
            'label' => __('Gender', '{domain}'),
            'value' => 'choice-3',
            'choices' => array( 
                // Note: Avoid bool or int keys http://bit.ly/1cQgVzk
                'choice-1' => __('Male', '{domain}'),
                'choice-2' => __('Female', '{domain}'),
                'choice-3' => __('Others', '{domain}'),
            ),
            // Display choices inline instead of list
            'inline' => false,
        ]);

        $this->add_control([
            'box_id' => 'post_box_2',
            'type' => 'textarea',
            'name' => 'txt_area',
            'label' => __('Text Area', '{domain}'),
            'desc' => 'use this area to input large text',
            'value' => '',
            'attr' => 'class="dm-div"'
        ]);

        $this->add_control([
            'box_id' => 'post_box_2',
            'name' => 'select',
            'type'  => 'select',
            'value' => 'choice-3',
            'label' => __('Select Single', '{domain}'),
            'desc'  => __('select description goes here', '{domain}'),
            'choices' => array(
                '' => '---',
                'choice-1' => __('Choice One', '{domain}'),
                'choice-2' => __('Choice Two', '{domain}'),
                'choice-3' => __('Choice Three', '{domain}'),
            ),
        ]);

        $this->add_control([
            'box_id' => 'post_box_2',
            'type'  => 'checkbox',
            'name' => 'graduate',
            'value' => true, // checked/unchecked
            'label' => __('Graduated', '{domain}'),
            'desc'  => __("check if you're graduated", '{domain}'),
            'text'  => __('Yes', '{domain}'),
        ]);


        $this->add_control([
            'box_id' => 'post_box_2',
            'type'  => 'date-picker',
            'name' => 'start_date',
            'label' => __('Dat Picker', '{domain}'),
            'desc'  => __('date picker description goes here', '{domain}'),
            'monday-first' => true, // The week will begin with Monday; for Sunday, set to false
            'min-date' => date('d-m-Y'), // By default minimum date will be current day. Set a date in format d-m-Y as a start date
            'max-date' => null, // By default there is not maximum date. Set a date in format d-m-Y as a start date
        ]);

        $this->add_control([
            'box_id' => 'post_box_2',
            'type'  => 'datetime-picker',
            'value' => '',
            'name' => 'date_time',
            'label' => __('Date Time Picker', '{domain}'),
            'desc'  => __('date time picker description', '{domain}'),
            'datetime-picker' => array(
                'format'        => 'Y/m/d H:i', // Format datetime.
                'maxDate'       => false,  // By default there is not maximum date , set a date in the datetime format.
                'minDate'       => false,  // By default minimum date will be current day, set a date in the datetime format.
                'timepicker'    => true,   // Show timepicker.
                'datepicker'    => true,   // Show datepicker.
                'defaultTime'   => '12:00' // If the input value is empty, timepicker will set time use defaultTime.
            )
        ]);
        

        

    }

}
