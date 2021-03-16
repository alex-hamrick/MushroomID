<?php

 class Submission extends DatabaseObject {
    
    static protected $table_name = 'submission_sub';

    static protected $db_columns = ['id_sub', 'id_usr', 'id_mshm', 'lattitude_sub', 'longitude_sub', 'description_sub', 'date_found_sub'];

    public $id_sub;
    public $id_usr;
    public $id_mshm;
    public $lattitude_sub;
    public $longitude_sub;
    public $description_sub;
    public $date_found_sub;

    public function __construct($args=[]) {
        $this->id_sub = $args['id_sub'] ?? '';
        $this->id_usr = $args['id_usr'] ?? '';
        $this->id_mshm = $args['id_mshm'] ?? '';
        $this->lattitude_sub = $args['lattitude_sub'] ?? '';
        $this->longitude_sub = $args['longitude_sub'] ?? '';
        $this->description_sub = $args['description_sub'] ?? '';
        $this->date_found_sub = $args['date_found_sub'] ?? '';

    }


    protected function validate() {
        $this->errors = [];

        if(is_blank($this->description_sub)) {
            $this->errors[] = "Description cannot be blank.";
        }
  
        return $this->errors;
    }


}