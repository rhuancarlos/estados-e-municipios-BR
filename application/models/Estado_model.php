<?php

class Estado_model extends CI_model{

    public function __construct(){
        parent::__construct();
    }


    public function getAllEstados(){
        return $this->db
        ->order_by('ESTADO')
        ->get('ccloud_config_estado');

    }


    public function selectoptionsEstados(){

        $options = "<option value=''>Selecione ... </option>";
        $estados = $this->getAllEstados();

        foreach($estados->result() as $estado){
            $options .= "<option value='{$estado->IDESTADO}'>{$estado->ESTADO}</option>" . PHP_EOL;
        }
        
        return $options;

    }





}