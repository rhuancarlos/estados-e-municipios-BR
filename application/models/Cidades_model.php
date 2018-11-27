<?php


class Cidades_model extends CI_model {


    public function __construct(){
        parent::__construct();
    }


    public function getCidadesByIdEstado($id_estado=null){

        return $this->db
            ->where("IDESTADO", $id_estado)
            ->order_by("MUNICIPIO")
            ->get("ccloud_config_cidade");
    }



    public function selectoptionsCidades($id_estado=null){

        $cidades        =   $this->getCidadesByIdEstado($id_estado);
        $total_cidades  =   $cidades->num_rows();

        $options = "<option value=''>Selecione a cidade ({$total_cidades}) </option>";


        foreach($cidades->result() as $cidade){
            $options .= "<option value='{$cidade->IDCIDADE}'>{$cidade->MUNICIPIO}</option>" . PHP_EOL;
        }
        
        return $options;
    }

}