<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class  Produk_Hukum extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		
			$this->load->model('Berita_model');
		
	}
  /*
public function index(){

      $val = $this->input->get('val');     
 
          $data['kategori'] = $this->Kategori_berita_model->select_kategori_berita_all(); 
        $data['kategori_berita'] = $this->Kategori_berita_model->select_kategori_berita($val);
    
	$this->load->view('admin/layouts/header');
        $this->load->view('admin/kategori_berita',$data);
        $this->load->view('admin/layouts/footer');
    }

*/


    public function index(){
        $val = $this->input->get('val');
        $data['master_produk_hukum']=$this->Berita_model->select_master_produk_hukum();
        $data['produk_hukum']=$this->Berita_model->select_detail_produk_hukum($val);
        $data['produkhukum']=$this->Berita_model->select_detail_produk_hukum_val();
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/produk_hukum',$data);
        $this->load->view('admin/layouts/footer');
    }


    public function save_detail(){





        $id = $this->input->post('id');
        $id_produk_hukum=$this->input->post('id_produk_hukum');
        $nama_produk_hukum=$this->input->post('produk_hukum');



        if($id){
            $this->Kategori_berita_model->update_laporan($id,$nama_laporan,$url);
            echo $this->session->set_flashdata('message', '<div class="alert alert-info"><b>Kategori berhasil diubah</b></div>');

        }else{
            $id_produk_hukum=$this->input->post('id_produk_hukum');
            $nama_produk_hukum=$this->input->post('produk_hukum');
            $this->load->library('upload');
            $this->load->helper('url');

            $url    = $this->input->post('url');


            $foto = $_FILES['foto']['name'];



            $tmp = $_FILES['foto']['tmp_name'];



            $path = "./files/produk_hukum/".$foto;


            if(move_uploaded_file($tmp, $path)) { // Cek a


                $this->Berita_model->insert_produk_hukum($id_produk_hukum, $nama_produk_hukum,$foto);
                echo $this->session->set_flashdata('message', '<div class="alert alert-info"><B>Produk Hukum berhasil ditambah</b></div>');
            }
        }


        redirect('admin/Produk_hukum');
    }


    function delete_detail_produk($id)
    {
        $query = $this->Berita_model->delete_detail_produk($id);
        echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Detail Produk Hukum berhasil dihapus</div>');
        redirect('admin/Produk_hukum');
    }


}
