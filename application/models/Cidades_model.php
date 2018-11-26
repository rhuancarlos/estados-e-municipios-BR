<?php


class Cidades_model extends CI_model {


    public function __construct(){
        parent::__construct();
    }



public function getCidadesByIdEstado($IDESTADO){

    return $this->db
        ->where("IDESTADO", $IDESTADO)
        ->order_by("MUNICIPIO")
        ->get("ccloud_config_cidade");
}




}