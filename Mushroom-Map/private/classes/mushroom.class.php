<?php

 class Mushroom extends DatabaseObject {
    
    static protected $table_name = 'mushroom_mshm';

    static protected $db_columns = ['id_mshm', 'latin_name_mshm', 'common_name_mshm', 'description_mshm', 'wiki_link_mshm', 'edible_mshm', 'edible_description_mshm'];

    public $id_mshm;
    public $latin_name_mshm;
    public $common_name_mshm;
    public $description_mshm;
    public $wiki_link_mshm;
    public $edible_mshm=1;
    public $edible_description_mshm;
//    public $conservation_id=1;

    public const EDIBLE_OPTIONS = [ 
        1 => "Unkown",
        2 => "Edible",
        3 => "Not Edible",
        4 => "Poisonous"
    ];

    public function __construct($args=[]) {
        $this->latin_name_mshm = $args['latin_name_mshm'] ?? '';
        $this->common_name_mshm = $args['common_name_mshm'] ?? '';
        $this->description_mshm = $args['description_mshm'] ?? '';
        $this->wiki_link_mshm = $args['wiki_link_mshm'] ?? '';
        $this->edible_mshm = $args['edible_mshm'] ?? '';
        $this->edible_description_mshm = $args['edible_description_mshm'] ?? '';
        

    }

    public function edibility() {
        // echo self::CONSERVATION_OPTIONS[$this->conservation_id];
        if( $this->edible_mshm > 0 ) {
            return self::EDIBLE_OPTIONS[$this->edible_mshm];
        } else {
            return "Unknown";
        }
    }

    protected function validate() {
        $this->errors = [];
  
        if(is_blank($this->latin_name_mshm)) {
            $this->errors[] = "Latin Name cannot be blank.";
        }
        if(is_blank($this->description_mshm)) {
            $this->errors[] = "Description cannot be blank.";
        }
  
        return $this->errors;
    }


}