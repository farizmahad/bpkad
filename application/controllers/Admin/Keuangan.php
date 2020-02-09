<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Keuangan extends CI_Controller {

	function __construct()
	{
		parent::__construct();

			$this->load->model('Keuangan_model');
		
	}
 
    // ESTIMASI PENDAPATAN DAERAH //


    //menampilkan jenis estimasi pendapatan daerah //

    public function index(){
       $data['epd']=$this->Keuangan_model->select_epd();
       $data['estimasi']=$this->Keuangan_model->select_estimasi();
       $data['grafik']=$this->Keuangan_model->select_grafik('2014');


       
       $data['grafik2']=$this->Keuangan_model->select_grafik('2015');
$data['grafik3']=$this->Keuangan_model->select_grafik('2016');



       $this->load->view('admin/layouts/header');
       $this->load->view('admin/epd/alokasi_epd',$data);
       $this->load->view('admin/layouts/footer');
       
    }

    // menyimpan dan mengubah jenis estimasi pendapatan daerah //

    public function save_jenis_epd(){
        $id= $this->input->post('id');

		$jenis_sumber = $this->input->post('jenis_sumber');
		if($id){
			$this->Keuangan_model->update_jenis_epd($id,$jenis_sumber);
		}else{
			$this->Keuangan_model->insert_jenis_epd($jenis_sumber);
		}
		redirect('admin/Keuangan');
	}


   // menyimpan dan mengubah  estimasi pendapatan daerah //

    public function save_epd(){
        $id           = $this->input->post('id');
		$tahun        = $this->input->post('tahun');
		$id_alokasi   = $this->input->post('id_alokasi');
        $jumlah       = $this->input->post('jumlah');

		if($id){
			$this->Keuangan_model->update_epd($tahun,$id_alokasi,$jumlah,$id);
		}else{
			$this->Keuangan_model->insert_epd($tahun,$id_alokasi,$jumlah);
		}
		redirect('admin/Keuangan');
	}

	function delete_jenis_epd($id)
	{
		$query = $this->Keuangan_model->delete_jenis_epd($id);
		echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Jenis EPD berhasil dihapus</div>');
		redirect('admin/Keuangan');
	}


	function delete_epd($id)
	{
		$query = $this->Keuangan_model->delete_epd($id);
		echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Jenis EPD berhasil dihapus</div>');
		redirect('admin/Keuangan');
	}


	// RENCANA BELANJA DAERAH //

	 public function rencana_belanja_daerah(){
       $data['epd']=$this->Keuangan_model->select_jenis_rbd();
       $data['estimasi']=$this->Keuangan_model->select_rbd();
       $this->load->view('admin/layouts/header');
       $this->load->view('admin/rbd/rbd',$data);
       $this->load->view('admin/layouts/footer');
       
    }


      public function save_jenis_rbd(){
        $id= $this->input->post('id');

		$jenis_sumber = $this->input->post('jenis_sumber');
		if($id){
			$this->Keuangan_model->update_jenis_rbd($id,$jenis_sumber);
		}else{
			$this->Keuangan_model->insert_jenis_rbd($jenis_sumber);
		}
		redirect('admin/Keuangan/rencana_belanja_daerah');
	}


	function delete_jenis_rbd($id)
	{
		$query = $this->Keuangan_model->delete_jenis_rbd($id);
		echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Jenis RBD berhasil dihapus</div>');
		redirect('admin/Keuangan/rencana_belanja_daerah');
	}



    public function save_rbd(){
        $id           = $this->input->post('id');
		$tahun        = $this->input->post('tahun');
		$id_jenis_rbd   = $this->input->post('id_jenis_rbd');
        $jumlah       = $this->input->post('jumlah');

		if($id){
			$this->Keuangan_model->update_rbd($tahun,$id_jenis_rbd,$jumlah,$id);
		}else{
			$this->Keuangan_model->insert_rbd($tahun,$id_jenis_rbd,$jumlah);
		}
		redirect('admin/Keuangan/rencana_belanja_daerah');
	}


		function delete_rbd($id)
	{
		$query = $this->Keuangan_model->delete_rbd($id);
		echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Jenis EPD berhasil dihapus</div>');
		redirect('admin/Keuangan/rencana_belanja_daerah');
	}






	 public function apbd(){
       $data['epd']=$this->Keuangan_model->select_jenis_apbd();
       $data['estimasi']=$this->Keuangan_model->select_apbd();
       $this->load->view('admin/layouts/header');
       $this->load->view('admin/apbd/apbd',$data);
       $this->load->view('admin/layouts/footer');
       
    }



     public function save_jenis_apbd(){
        $id= $this->input->post('id');

		$jenis_sumber = $this->input->post('jenis_sumber');
		if($id){
			$this->Keuangan_model->update_jenis_apbd($id,$jenis_sumber);
		}else{
			$this->Keuangan_model->insert_jenis_apbd($jenis_sumber);
		}
		redirect('admin/Keuangan/apbd');
	}


	function delete_jenis_apbd($id)
	{
		$query = $this->Keuangan_model->delete_jenis_apbd($id);
		echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Jenis EPD berhasil dihapus</div>');
		redirect('admin/Keuangan/apbd');
	}

public function save_apbd(){
        $id           = $this->input->post('id');
		$tahun        = $this->input->post('tahun');
		$id_jenis_apbd  = $this->input->post('id_jenis_apbd');
        $jumlah       = $this->input->post('jumlah');

		if($id){
			$this->Keuangan_model->update_apbd($tahun,$id_jenis_apbd,$jumlah,$id);
		}else{
			$this->Keuangan_model->insert_apbd($tahun,$id_jenis_apbd,$jumlah);
		}
		redirect('admin/Keuangan/apbd');
	}


	function delete_apbd($id)
	{
		$query = $this->Keuangan_model->delete_apbd($id);
		echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Jenis EPD berhasil dihapus</div>');
		redirect('admin/Keuangan/apbd');
	}


}
