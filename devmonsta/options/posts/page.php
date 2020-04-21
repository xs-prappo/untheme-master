<?php
use Devmonsta\Libs\Posts;

class Page extends Posts{

    public function register_controls(){
        $this->add_box([
            'id' => 'page_box_1',
            'post_type' => 'page',
            'title' => 'Meta box for page'
        ]);

        $this->add_box([
            'id' => 'page_box_2',
            'post_type' => 'page',
            'title' => 'Page password'
        ]);

    
    }

}