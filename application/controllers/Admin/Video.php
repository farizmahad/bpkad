<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
  class Video extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Video_model');
	}

  /*
    public function index(){
        
        $data['video']=$this->Video_model->select_video();
	    $this->load->view('admin/layouts/header');
        $this->load->view('admin/video',$data);
        $this->load->view('admin/layouts/footer');
    }
    */


public function index($offset=0){
        $val = $this->input->get('val'); 
        $this->load->helper('url');
      $this->load->library('pagination');
        $config['base_url'] = base_url().'admin/Video/index'; 
        $config['total_rows'] = $this->Video_model->count_video();
        $config['per_page'] =8; 
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
  $data['youtube']=$this->Video_model->select_video_youtube();
  if($val){
$data['video']=$this->Video_model->select_video_val($val);
  }else{
        $data['video']=$this->Video_model->select_video($config['per_page'], $offset,$form);
        $data['link']= $this->pagination->create_links();
  }
      $this->load->view('admin/layouts/header');
      $this->load->view('admin/video_home',$data);
      $this->load->view('admin/layouts/footer');

}
    public function save_video(){
       $id_video    =$this->input->post('id_video');
       $judul       =$this->input->post('judul');
       $url         =$this->input->post('url');
       $tanggal     =$this->input->post('tanggal');
       $deskripsi   =$this->input->post('deskripsi');

      $this->Video_model->update_video($id_video,$judul,$url,$tanggal,$deskripsi);
      echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button>Judul Slider berhasil diubah</div>');       

      redirect('admin/video/detail_video?id='.$id_video);


    }
    

    public function simpan_video(){

       $url         =$this->input->post('url');
       $judul       =$this->input->post('judul');
       $deskripsi   =$this->input->post('deskripsi');
       $tanggal  =$this->input->post('tanggal');


      $this->Video_model->simpan_video($url,$judul,$deskripsi,$tanggal);
      echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button>Judul Slider berhasil diubah</div>');       
      redirect('admin/Video');


    }


     public function detail_video(){
         
$id       =$this->input->get('id');
    
       $data['video']=$this->Video_model->select_video_per_id($id); 

      $this->load->view('admin/layouts/header');
        $this->load->view('admin/video',$data);
        $this->load->view('admin/layouts/footer');
    }


    function delete_video($id)
  {
    $query = $this->Video_model->delete_video($id);
    echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Video berhasil dihapus</div>');
    redirect('admin/Video');
  }


   function update_status_aktif()
  {
    $id = $this->input->get('id');
    $status = $this->input->get('status');
    $this->Video_model->update_status_aktif($id,$status);
    if($status==1){
        echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Video berhasil diaktifkan</div>');
    }else{
        echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Video berhasil dinonaktifkan</div>');
    }
    redirect('admin/Video');
  }


}
