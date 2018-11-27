<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cidade extends CI_Controller{


      public function __construct(){
            parent::__construct();
		$this->load->model('Cidades_model', 'cidades');

      }


      public function getCidades(){
            sleep(1);
            $id_estado = $this->input->post('id_estado');

            echo $this->cidades->selectoptionsCidades($id_estado);
      }

}