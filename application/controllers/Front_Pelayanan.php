<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front_Pelayanan extends CI_Controller {

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
	    $this->load->model('Front_pelayanan_model');		
		
	}
  
	public function index()
	{
		
		
	}


	public function standar_pelayanan()
	{
		$data['select_standar']=$this->Front_pelayanan_model->select_standar('1');
		$this->load->view('layouts/header2');
		$this->load->view('front_standar_pelayanan',$data);
		$this->load->view('layouts/footer2');
		
	}
	
	public function standar_pengaduan_masyarakat()
	{
		//$data['select_standar']=$this->Front_pelayanan_model->select_standar();
		$data['select_standar']=$this->Front_pelayanan_model->select_standar('2');
		$this->load->view('layouts/header2');
		$this->load->view('front_standar_pengaduan_masyarakat',$data);
		$this->load->view('layouts/footer2');
		
	}

    public function daftar_pelayanan()
    {

        $this->load->view('layouts/header');
        $this->load->view('front_daftar_pelayanan');
        $this->load->view('layouts/footer');

    }

    public function pemerintah_pusat()
    {
        $id=1;
        $data['produk_hukum']=$this->Front_pelayanan_model->select_produk_hukum($id);
        $this->load->view('layouts/header2');
        $this->load->view('pemerintah_pusat',$data);
        $this->load->view('layouts/footer2');

    }


	//revisi
    public function pemerintah_daerah()
    {
        $id=2;
        $data['produk_hukum']=$this->Front_pelayanan_model->select_produk_hukum($id);
        $this->load->view('layouts/header2');
        $this->load->view('pemerintah_daerah',$data);
        $this->load->view('layouts/footer2');

    }




	public function standar_detail($id)

	{
	    $pelayanan=$this->Front_pelayanan_model->pelayanan($id);

	    foreach($pelayanan as $pel){
	        $data['judul']=$pel->pelayanan;
        }
	    $data['pelayanan_detail']=$this->Front_pelayanan_model->select_pelayanan_detail($id);
        $this->load->view('layouts/header2');
        $this->load->view('open_standar_pelayanan',$data);
        $this->load->view('layouts/footer2');
		
	}



	
}
