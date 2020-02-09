<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Kategori_berita extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		
			$this->load->model('Kategori_berita_model');
		
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


    public function index($offset=0){

      

        $val = $this->input->get('val'); 

        $this->load->helper('url');
        $this->load->library('pagination');
        $config['base_url'] = base_url().'admin/Kategori_berita/index'; 
        $config['total_rows'] = $this->Kategori_berita_model->count_kategori_berita();
        $config['per_page'] =10; 
        $config['use_page_numbers'] = false;
        $config['page_query_string'] = false;
        $config['enable_query_strings'] = true;
        $config['num_links'] =7;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] ='';
        $config['last_link'] = '';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '<i class="fa fa-chevron-left"></i>';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '<i class="fa fa-chevron-right"></i>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $form = $this->uri->segment(4);
        $this->pagination->initialize($config); 
        $data['kategori'] = $this->Kategori_berita_model->select_kategori_berita_all(); 

if($val){
$data['kategori_berita'] = $this->Kategori_berita_model->select_kategori_berita($val);
      }else{
        $data['kategori_berita'] = $this->Kategori_berita_model->select_kategori_berita_limit($config['per_page'], $offset,$form);
        $data['link']= $this->pagination->create_links();
      }  

        
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/kategori_berita',$data);
        $this->load->view('admin/layouts/footer');
    }

    public function save_kategori(){

        $id = $this->input->post('id');

$nama_kategori = $this->input->post('nama_kategori');
        if($id){
            $this->Kategori_berita_model->update_kategori($id,$nama_kategori);
            echo $this->session->set_flashdata('message', '<div class="alert alert-info"><b>Kategori berhasil diubah</b></div>');
            
        }else{
            
            $this->Kategori_berita_model->insert_kategori($nama_kategori);
            echo $this->session->set_flashdata('message', '<div class="alert alert-info"><B>Kategori berhasil ditambah</b></div>');
        }
        

        redirect('admin/Kategori_berita');
    }


    function delete_kategori($id_kategori)
    {
        

        $this->Kategori_berita_model->delete_kategori($id_kategori);
        echo $this->session->set_flashdata('message', '<div class="alert alert-info"><B>Kategori berhasil dihapus</b></div>');
        redirect('admin/Kategori_berita');
    }

    function delete_laporan($id_kategori)
    {


        $this->Kategori_berita_model->delete_laporan($id_kategori);
        echo $this->session->set_flashdata('message', '<div class="alert alert-info"><B>Laporan berhasil dihapus</b></div>');
        redirect('admin/Berita/laporan');
    }
    public function save_laporan(){

        $id = $this->input->post('id');

        $nama_laporan= $this->input->post('nama_laporan');
        $url= $this->input->post('url');

        if($id){
            $this->Kategori_berita_model->update_laporan($id,$nama_laporan,$url);
            echo $this->session->set_flashdata('message', '<div class="alert alert-info"><b>Kategori berhasil diubah</b></div>');

        }else{

            $this->Kategori_berita_model->insert_laporan($nama_laporan,$url);
            echo $this->session->set_flashdata('message', '<div class="alert alert-info"><B>Laporanberhasil ditambah</b></div>');
        }


        redirect('admin/Berita/laporan');
    }

}
