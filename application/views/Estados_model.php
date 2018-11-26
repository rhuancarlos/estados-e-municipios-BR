<?php

class Estados_model extends CI_model{


    public function __construct(){
        parent::__construct();
        $this->tabmembros = 'ccloud_config_estado';
    }



    public function getAllEstados(){

        return $this->db
        ->order_by('NOME')
        ->get($this->tabmembros);

    }





}