<?php

use Devmonsta\Libs\Taxonomies;

class Post_Tag extends Taxonomies
{

    public function register_controls()
    {

        $this->add_control([
            'type' => 'text',
            'placeholder' => 'Tags first name',
            'label' => 'First name',
            'name' => 'p_f_name',
        ]);

        $this->add_control([
            'type' => 'text',
            'placeholder' => 'Tags last name',
            'label' => 'Last name',
            'name' => 'p_l_name',
        ]);

        $this->add_control([
            'type' => 'text',
            'placeholder' => 'Tags first name',
            'label' => 'Email',
            'name' => 'p_a_name',
            'show_in_table' => true
        ]);

        

    }

}
