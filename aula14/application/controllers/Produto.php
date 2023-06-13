<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//o nome da class (classe) tem que ser o nome do arquivo
class Produto extends CI_Controller {

	public function index()
	{
        $crud = new Grocery_CRUD();
        $crud->set_table("produto");
        $crud->set_field_upload("foto");
        $form = $crud->render();
		$this->load->view('crud', $form);
	}
    
    public function noticia()
	{
        $crud = new Grocery_CRUD();
        $crud->set_table("noticia");
        //$crud->file_field_upload("foto");
        $form = $crud->render();
		$this->load->view('crud', $form);
	}
}
