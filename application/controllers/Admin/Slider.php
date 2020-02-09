<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('ImageManipulator.php');


class Slider extends CI_Controller {

	function __construct()
	{
		  parent::__construct();
			$this->load->model('Slider_model');
		
	}
  
  public function index($offset=0){
	  $val = $this->input->get('val'); 

      $config['base_url'] = base_url().'admin/Slider/index'; 
      $config['total_rows'] = $this->Slider_model->count_slider();
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

		  $data['slider_all'] = $this->Slider_model->select_slider_home_all();
       if($val){
$data['slider_home'] = $this->Slider_model->select_slider_val($val);
       }else{

      $data['slider_home'] = $this->Slider_model->select_slider_home($config['per_page'], $offset,$form);
    }
      $data['link']= $this->pagination->create_links();
      $this->load->view('admin/layouts/header');
		  $this->load->view('admin/slider',$data);
		  $this->load->view('admin/layouts/footer');
	}

  public function do_upload(){
		$this->load->library('upload');
		$str = date('Y-m');
		$date = explode("-",$str);
		$ds = "/";
 		$storeFolder = './assets/img_slider';
 		if(!empty($_FILES)) {
    			$tempFile = $_FILES['file']['tmp_name'];
    			$targetPath = $storeFolder . $ds . $date[0] . $ds .$date[1] . $ds;
    			$fileName = $_FILES['file']['name'];
    			$vowels = array(" ", "(", ")", "/", "@", "#", "&", "+");
    			$filename_new=str_replace($vowels, '-', $fileName);
    			$targetFile = $storeFolder .'/'. $_FILES['file']['name'];
    			$imgexplod=explode('.', $filename_new);
    			$this->Slider_model->insert_image($fileName);

        	move_uploaded_file($tempFile, $targetFile);
        	echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Slider berhasil ditambah</div>');
		}
	}


	function delete_slider($id)
	{
		$query = $this->Slider_model->delete_slider($id);
		echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Slider berhasil dihapus</div>');
		redirect('admin/Slider');
	}


	 function update_status_aktif()
	{
		$id = $this->input->get('id');
		$status = $this->input->get('status');
		$this->Slider_model->update_status_aktif($id,$status);
		if($status==1){
		    echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Slider berhasil diaktifkan</div>');
	  }else{
	    	echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Slider berhasil dinonaktifkan</div>');
	  }
		redirect('admin/Slider');
	}


	public function edit_slider()
  {
	  $this->load->library('upload');
    $nmfile = "file_".time(); 
    $path   = './assets/img_slider/'; 
    $config['upload_path'] = $path; 
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
    $config['file_name'] = $nmfile; 
    $this->upload->initialize($config);
    $id     = $this->input->post('id'); 
    $filelama   = $this->input->post('filelama');
    $url   = $this->input->post('url');
    $deskripsi   = $this->input->post('deskripsi');

    if($_FILES['filefoto']['name'])
       {
           if ($this->upload->do_upload('filefoto'))
           {
               $gbr = $this->upload->data();
               $data = array(
                 'gambar' =>$gbr['file_name'],
                 'url' =>$url,
                 'deskripsi' =>$deskripsi,
                
               );
               @unlink($path.$filelama);
               $where =array('id'=>$id); 
               $this->Slider_model->get_update($data,$where); 

 
               echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button>Edit dan unggah gambar slider berhasil</div>');
               redirect('admin/Slider');
 
           }else{  
               $er_upload=$this->upload->display_errors(); 
               $this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal edit dan Unggah gambar !! ".$er_upload."</div></div>");
               redirect('admin/Slider'); 
          }
       }else{ 
          $data = array(
                 'url' =>$url,
                 'deskripsi' =>$deskripsi,
                
           );
           $where =array('id'=>$id); 
    $this->Slider_model->get_update($data,$where); 
    echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button>Edit data slider berhasil</div>');  
     redirect('admin/Slider'); 
       }


   }


    public function update_judul(){
      $id=$this->input->post('id');
      $url=$this->input->post('val');
      $this->Slider_model->update_judul($url,$id);
      echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button>Judul Slider berhasil diubah</div>');       
  }

}
