<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('ImageManipulator.php');


class Berita extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Berita_model');	
	}
  
    public function index($offset=0){

        $daterange = $this->input->get('daterange');
        $kategori  = $this->input->get('kategori');
        $title     = $this->input->get('title');



	    $this->load->helper('url');
	    $this->load->library('pagination');
        $config['base_url'] = base_url().'admin/Berita/index'; 
        $config['total_rows'] = $this->Berita_model->count_berita();
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
	
	    $data['kategori_berita'] = $this->Berita_model->select_kategori_berita();
        if( !$daterange and !$kategori and !$title){
          $data['berita'] = $this->Berita_model->select_berita($config['per_page'], $offset,$form);
        }else{
          $data['berita'] = $this->Berita_model->select_berita_parameter($daterange,$kategori,$title);
        }
        $data['link']= $this->pagination->create_links();
        $this->load->view('admin/layouts/header');
		$this->load->view('admin/berita',$data);
		$this->load->view('admin/layouts/footer');
	}


    public function tambah_berita(){

        $id_berita = $this->input->get('id_berita');
        if($id_berita) {
            $data['status_edit']="edit";
            $data['berita_id'] = $this->Berita_model->select_berita_per_id($id_berita);
            $data['kategori_berita_id'] = $this->Berita_model->select_kategori_berita_per_id($id_berita);
            $data['kategori_berita'] = $this->Berita_model->select_kategori_berita();
            $this->load->view('admin/layouts/header');
            $this->load->view('admin/edit_berita',$data);
            $this->load->view('admin/layouts/footer');
        }else{
           $data['kategori_berita'] = $this->Berita_model->select_kategori_berita();
           $data['berita_id'] = $this->Berita_model->select_berita_per_id($id_berita);
		   $data['kategori_berita'] = $this->Berita_model->select_kategori_berita();
		   $this->load->view('admin/layouts/header');
		   $this->load->view('admin/tambah_berita',$data);
		   $this->load->view('admin/layouts/footer');
        }
	}

   


    public function save_berita(){

        $title = $this->input->post('title');
        $isi= $this->input->post('isi');
        $status_publish= 0;
        $tgl_post = $this->input->post('tgl_post');

       

        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        $path = "./assets/featured_image/".$foto;

       

        $ID =5;


        $checkbox        =$_POST['checkbox'];
        if(move_uploaded_file($tmp, $path)){ 
        $this->Berita_model->insert_berita($title,$isi,$status_publish,$tgl_post,$foto,$ID);


        }
        $last_insert_id = $this->db->insert_id();
        $result = array();
        foreach($_POST['checkbox'] AS $key => $val){
            $result[] = array(
                 "id_berita" => $last_insert_id
                ,"id_kategori_berita" => $_POST['checkbox'][$key]
            );
        }       
      $res = $this->db->insert_batch('detail_berita_category', $result);  
      redirect('admin/Berita');
    }



    public function update_berita(){

    $this->load->library('upload');
    $nmfile = "file_".time(); 
    $path   = './assets/featured_image/'; 
    $config['upload_path'] = $path; 
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
    $config['file_name'] = $nmfile; 
    $this->upload->initialize($config);
    $id_berita = $this->input->post('id_berita');
    $filelama   = $this->input->post('filelama');
    $title = $this->input->post('title');
    $isi= $this->input->post('isi');
    $status_publish= $this->input->post('status_publish');
    $tgl_post = $this->input->post('tgl_post');
    $ID = $this->ion_auth->user()->row()->id;
    $checkbox        =$_POST['checkbox'];
    if($_FILES['filefoto']['name'])
       {
           if ($this->upload->do_upload('filefoto'))
           {
               $gbr = $this->upload->data();
               $data = array(
                 'featured_image' =>$gbr['file_name'],
                 'title' =>$title,
                 'isi' =>$isi,
                 'status_publish' =>$status_publish,
                 'tanggal_post' =>$tgl_post,
               );
               @unlink($path.$filelama);
               $where =array('id_berita'=>$id_berita); 
               $this->Berita_model->get_update($data,$where); 
               $this->Berita_model->delete_detail_category($id_berita);
             foreach($_POST['checkbox'] AS $key => $val){
                $result[] = array(
                 "id_berita" => $id_berita
                ,"id_kategori_berita" => $_POST['checkbox'][$key]
                );
             }       
            $res = $this->db->insert_batch('detail_berita_category', $result);
            echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button>Edit dan unggah featured image berita berhasil</div>');
            redirect('admin/Berita');

           }else{  
               $er_upload=$this->upload->display_errors(); 
               $this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal edit dan Unggah gambar !! ".$er_upload."</div></div>");
               redirect('admin/Berita'); 
          }
        }else{ 
          $data = array(
                 'title' =>$title,
                 'isi' =>$isi,
                 'status_publish' =>$status_publish,
                 'tanggal_post' =>$tgl_post,
           );
           $where =array('id_berita'=>$id_berita); 
           $this->Berita_model->get_update($data,$where); 
           $this->Berita_model->delete_detail_category($id_berita);
           foreach($_POST['checkbox'] AS $key => $val){
                $result[] = array(
                 "id_berita" => $id_berita
                ,"id_kategori_berita" => $_POST['checkbox'][$key]
                );
            }    
                   $res = $this->db->insert_batch('detail_berita_category', $result);  
        echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button>Edit data berita berhasil</div>');  
        redirect('admin/Berita'); 
       }
   }
	 

    

function delete_berita($id)
    {
        $query = $this->Berita_model->delete_berita($id);
        echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Berita berhasil dihapus</div>');
        redirect('admin/Berita');
    }


     function get_autocomplete_private(){
        if (isset($_GET['term'])) {
            $result = $this->Berita_model->search_forum_private($_GET['term']);
           

            if (count($result) > 0) {
            foreach ($result as $row)

                $arr_result[] = $row->title;
            
                echo json_encode($arr_result);
              
            }
        }
    }



    public function update_status_publish(){
        $id = $this->input->get('id');
        $status = $this->input->get('status');
      $this->Berita_model->update_status_publish($id,$status);
      if($status==0){
      echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button>Status berita telah menjadi draft</div>');       
      }elseif($status==1){
        echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button>Status berita telah menjadi publish</div>');       
      }
redirect('admin/Berita');
      
  }

}
