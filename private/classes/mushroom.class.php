<?php

 class Mushroom extends DatabaseObject {
    
    static protected $table_name = 'mushroom_mshm';

    static protected $db_columns = ['id_mshm', 'latin_name_mshm', 'common_name_mshm', 'description_mshm', 'wiki_link_mshm', 'edible_mshm', 'edible_description_mshm'];

    public $id_mshm;
    public $latin_name_mshm;
    public $common_name_mshm;
    public $description_mshm;
    public $wiki_link_mshm;
    public $edible_mshm;
    public $edible_description_mshm;

    public function __construct($args=[]) {
        $this->id_mshm = $args['id_mshm'] ?? '';
        $this->latin_name_mshm = $args['latin_name_mshm'] ?? '';
        $this->common_name_mshm = $args['common_name_mshm'] ?? '';
        $this->description_mshm = $args['description_mshm'] ?? '';
        $this->wiki_link_mshm = $args['wiki_link_mshm'] ?? '';
        $this->edible_mshm = $args['edible_mshm'] ?? '';
        $this->edible_description_mshm = $args['edible_description_mshm'] ?? '';

    }


    protected function validate() {
        $this->errors = [];
  
        if(is_blank($this->latin_name_mshm)) {
            $this->errors[] = "Latin name cannot be blank.";
        }
        if(is_blank($this->description_mshm)) {
            $this->errors[] = "Description cannot be blank.";
        }
  
        return $this->errors;
    }


}