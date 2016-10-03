<?php

Class Geral_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        
    }

    public function set_user($data){
    	$tenant = $this->load->database('tenant', TRUE);
        $tenant->insert('user', $data);
         $id = $tenant->insert_id();
        if ($id) {
            return $id;
        } else {
            return "NOK";
        }
    }