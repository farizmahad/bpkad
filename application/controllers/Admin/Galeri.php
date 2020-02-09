<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('ImageManipulator.php');


class Galeri extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	    $this->load->model('Galeri_model');		
		
	}
  
public function index($offset=0){
	
	    
        $config['base_url'] = base_url().'admin/Galeri/index'; 
        $config['total_rows'] = $this->Galeri_model->total_select_galeri();
        $config['per_page'] =50; 
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
        $data['galeri'] = $this->Galeri_model->select_galeri($config['per_page'], $offset,$form);
       
       $data['link']= $this->pagination->create_links();
      $this->load->view('admin/layouts/header');
		  $this->load->view('admin/galeri',$data);
		  $this->load->view('admin/layouts/footer');

    	
    	
    	
    }

public function do_upload(){
		
		$str = date('Y-m');
		$date = explode("-",$str);
		$ds = "/";
 		$storeFolder = './assets/img_gallery';

 		if(!empty($_FILES)) {
    			$tempFile = $_FILES['file']['tmp_name'];
    			$targetPath = $storeFolder . $ds . $date[0] . $ds .$date[1] . $ds;
    			$fileName = $_FILES['file']['name'];
    			$vowels = array(" ", "(", ")", "/", "@", "#", "&", "+");
    			$filename_new=str_replace($vowels, '-', $fileName);
    			$targetFile = $storeFolder .'/'. $_FILES['file']['name'];

    			$imgexplod=explode('.', $filename_new);


            $url = 'http://localhost/assets/img_gallery/'.$filename_new;
    			$this->Galeri_model->insert_image($fileName,$url);

        	move_uploaded_file($tempFile, $targetFile);
        	echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Slider berhasil ditambah</div>');
		}
	}
    


    public function tambah_galeri($offset=0){
    
        
        $config['base_url'] = base_url().'admin/Galeri/tambah_galeri'; 
        $config['total_rows'] = $this->Galeri_model->total_select_galeri();
        $config['per_page'] =18; 
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
        $data['galeri'] = $this->Galeri_model->select_galeri($config['per_page'], $offset,$form);
       
       $data['link']= $this->pagination->create_links();
      $this->load->view('admin/layouts/header');
          $this->load->view('admin/tambah_galeri',$data);
          $this->load->view('admin/layouts/footer');

        
        
        
    }

    function delete_gambar()
    {
        $id = $this->input->get('id');
        $gambar = $this->input->get('gambar');
        $query = $this->Galeri_model->delete_galeri($id);
        $target="http://localhost/bpkd_cimahi2/assets/img_gallery/".$gambar;
        echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Gambar galeri berhasil dihapus</div>');
        redirect('admin/Galeri/tambah_galeri');
    }

    function update_status_galeri()
  {
    $id = $this->input->get('id');
    $status = $this->input->get('status');
    $this->Galeri_model->update_status_galeri($id,$status);
    if($status==1){
        echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Galeri berhasil diaktifkan</div>');
    }else{
        echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Galeri berhasil dinonaktifkan</div>');
    }
    redirect('admin/Galeri/tambah_galeri');
  }



  public function update_galeri()
  {
    $this->load->library('upload');
    $nmfile = "file_".time(); 
    $path   = './assets/img_gallery/'; 
    $config['upload_path'] = $path; 
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
    $config['file_name'] = $nmfile; 
    $this->upload->initialize($config);
    $id     = $this->input->post('id'); 
    $filelama   = $this->input->post('filelama');
    $url   = $this->input->post('url');
    $deskripsi   = $this->input->post('deskripsi');
    $tgl_upload  = $this->input->post('tgl_upload');
    $judul_gambar  = $this->input->post('judul_gambar');

    if($_FILES['filefoto']['name'])
       {
           if ($this->upload->do_upload('filefoto'))
           {
               $gbr = $this->upload->data();
               $data = array(
                 'gambar' =>$gbr['file_name'],
                 'url' =>$url,
                 'deskripsi_gambar' =>$deskripsi,
                 'judul_gambar' =>$judul_gambar,
                 'tgl_upload' =>$tgl_upload,

               );
               @unlink($path.$filelama);
               $where =array('id_galeri'=>$id); 
               $this->Galeri_model->get_update($data,$where); 

 
               echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button>Edit dan unggah gambar galeri berhasil</div>');
               redirect('admin/Galeri/tambah_galeri');
 
           }else{  
               $er_upload=$this->upload->display_errors(); 
               $this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal edit dan Unggah gambar !! ".$er_upload."</div></div>");
               redirect('admin/Galeri/tambah_galeri'); 
          }
       }else{ 
          $data = array(
                 'url' =>$url,
                 'deskripsi_gambar' =>$deskripsi,
                 'judul_gambar' =>$judul_gambar,
                 'tgl_upload' =>$tgl_upload,
           );
           $where =array('id_galeri'=>$id); 
    $this->Galeri_model->get_update($data,$where); 
    echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button>Edit data galeri berhasil</div>');  
     redirect('admin/Galeri/tambah_galeri'); 
       }


   }



}
