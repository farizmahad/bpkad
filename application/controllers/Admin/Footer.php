<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Umum extends CI_Controller {

	function __construct()
	{
		parent::__construct();

			
		
	}
 

    public function index(){

      $this->load->view('admin/layouts/header');
       $this->load->view('admin/footer');
       $this->load->view('admin/layouts/footer');
     

       
    }

    

}
