<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Pelayanan extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('Pelayanan_model');
			
		
	}
  
public function index(){

      $val = $this->input->get('val'); 


       $data['daftarpelayanan']=$this->Pelayanan_model->select_pelayanan_all();

       $data['pelayanan']=$this->Pelayanan_model->select_pelayanan($val);

      
       $this->load->view('admin/layouts/header');
       
       $this->load->view('admin/pelayanan',$data);
       
       $this->load->view('admin/layouts/footer');
       
	
	}

  
  public function save_pelayanan(){

        $id = $this->input->post('id');

$pelayanan = $this->input->post('pelayanan');
$judul_pelayanan = $this->input->post('judul_pelayanan');
$jenis = $this->input->post('jenis');
        if($id){
            $this->Pelayanan_model->update_pelayanan($id,$pelayanan,$judul_pelayanan,$jenis);
            echo $this->session->set_flashdata('message', '<div class="alert alert-info"><b>Pelayanan berhasil diubah</b></div>');
            
        }else{
            
            $this->Pelayanan_model->insert_pelayanan($pelayanan,$judul_pelayanan,$jenis);
            echo $this->session->set_flashdata('message', '<div class="alert alert-info"><B>Pelayanan berhasil ditambah</b></div>');
        }
        

        redirect('admin/Pelayanan');
    }



function delete_pelayanan($id)
  {
    $query = $this->Pelayanan_model->delete_pelayanan($id);
    echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Pelayanan berhasil dihapus</div>');
    redirect('admin/Pelayanan');
  }



      function update_status_pelayanan()
  {
    $id = $this->input->get('id');
    $status = $this->input->get('status');
    $this->Pelayanan_model->update_status_pelayanan($id,$status);
    if($status==1){
        echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Pelayanan berhasil diaktifkan</div>');
    }else{
        echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Pelayanan berhasil dinonaktifkan</div>');
    }
    redirect('admin/Pelayanan');
  }

public function Pelayanan_val(){

      $val = $this->input->get('val'); 

       $data['pelayanan']=$this->Pelayanan_model->select_pelayanan($val);
       $this->load->view('admin/layouts/header');
       
       $this->load->view('admin/pelayanan',$data);
       
       $this->load->view('admin/layouts/footer');
       
  
  }



  public function sub_pelayanan($offset=0){


        $id_pelayanan = $this->input->get('id_pelayanan');

$val = $this->input->get('val');





       
        $data['select_judul']=$this->Pelayanan_model->select_judul($id_pelayanan);
$data['daftarpelayanan']=$this->Pelayanan_model->select_pelayanan_all();

$data['daftarsubpelayanan']=$this->Pelayanan_model->select_sub_pelayanan($id_pelayanan);
         $data['id_pelayanan']=$id_pelayanan;
       $this->load->helper('url');
      $this->load->library('pagination');
        $config['base_url'] = base_url().'admin/Berita/index'; 
        $config['total_rows'] = $this->Pelayanan_model->count_pelayanan($id_pelayanan);
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
       if($val){

 $data['subpelayanan'] = $this->Pelayanan_model->select_sub_pelayanan_val($id_pelayanan,$val);
       }else{
       $data['subpelayanan'] = $this->Pelayanan_model->select_sub_pelayanan($id_pelayanan,$config['per_page'], $offset,$form);
      }
        $data['link']= $this->pagination->create_links();

     
       $this->load->view('admin/layouts/header');
       $this->load->view('admin/sub_pelayanan',$data);
       $this->load->view('admin/layouts/footer');
       
  
  }



  public function save_sub_pelayanan(){
$id=$this->input->post('id');
        $id_pelayanan = $this->input->post('id_pelayanan');


$judul_sub_pelayanan = $this->input->post('judul_sub_pelayanan');
$desc_sub_pelayanan = $this->input->post('desc_sub_pelayanan');



        if($id){
            $this->Pelayanan_model->update_sub_pelayanan($id,$id_pelayanan,$judul_sub_pelayanan,$desc_sub_pelayanan);
            echo $this->session->set_flashdata('message', '<div class="alert alert-info"><b>Sub Pelayanan berhasil diubah</b></div>');
            
        }else{
            
            $this->Pelayanan_model->insert_sub_pelayanan($id_pelayanan,$judul_sub_pelayanan,$desc_sub_pelayanan);
            echo $this->session->set_flashdata('message', '<div class="alert alert-info"><B>Sub Pelayanan berhasil ditambah</b></div>');
        }
        

        redirect('admin/Pelayanan/sub_pelayanan?id_pelayanan='.$id_pelayanan);
    }


   function delete_sub_pelayanan()
  {

    $id=$this->input->get('id');
        $id_pelayanan = $this->input->get('id_pelayanan');



    $query = $this->Pelayanan_model->delete_sub_pelayanan($id);
    echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Sub Pelayanan berhasil dihapus</div>');
    redirect('admin/Pelayanan/sub_pelayanan?id_pelayanan='.$id_pelayanan);
  }



   function update_status_subpelayanan()
  {
    $id = $this->input->get('id');
 $status = $this->input->get('status');
     $id_pelayanan = $this->input->get('id_pelayanan');
    

   


    $this->Pelayanan_model->update_status_sub_pelayanan($id,$status);

    

    if($status==1){
        echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button>Sub Pelayanan berhasil diaktifkan</div>');
    }else{
        echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button>Sub Pelayanan berhasil dinonaktifkan</div>');
    }
    redirect('admin/Pelayanan/sub_pelayanan?id_pelayanan='.$id_pelayanan);
  }

}
