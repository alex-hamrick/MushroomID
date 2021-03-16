<?php

 class Image extends DatabaseObject {
    
    static protected $table_name = 'image_img';

    static protected $db_columns = ['id_img', 'id_sub', 'id_mshm', 'image_name_img', 'wiki_link_mshm', 'edible_mshm', 'edible_description_mshm'];

    public $id_img;
    public $id_sub;
    public $id_mshm;
    public $image_name_img;
    public $wiki_link_mshm;
    public $edible_mshm;
    public $edible_description_mshm;

    public function __construct($args=[]) {
        $this->id_img = $args['id_img'] ?? '';
        $this->id_sub = $args['id_sub'] ?? '';
        $this->id_mshm = $args['id_mshm'] ?? '';
        $this->image_name_img = $args['image_name_img'] ?? '';

    }

}