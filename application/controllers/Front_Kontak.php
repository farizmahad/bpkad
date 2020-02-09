<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front_Kontak extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


function __construct()
	{
		parent::__construct();

		
			$this->load->model('Front_kontak_model');
		
	}




	public function index()
	{
		$this->load->view('layouts/header2');
		$this->load->view('front_kontak');
         $this->load->view('layouts/footer2');
         	}

  public function save_pesan(){

        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $judul = $this->input->post('judul');
        $pesan = $this->input->post('pesan');


        if($id){
            $this->Kategor_berita_model->update_kategori($id,$nama_kategori);
            echo $this->session->set_flashdata('message', '<div class="alert alert-info"><b>Kategori berhasil diubah</b></div>');
            
        }else{
            
            $this->Front_kontak_model->insert_kontak($nama,$email,$judul,$pesan);
            echo $this->session->set_flashdata('message', '<div class="alert alert-info"><B>Kategori berhasil ditambah</b></div>');
        }
        

        redirect('Front_Kontak');
    }


}
