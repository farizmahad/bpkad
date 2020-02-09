<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('ImageManipulator.php');


class Profile extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('Profile_model');
			
		
	}
  
public function index(){

       $data['profile'] = $this->Profile_model->select_profile();
       
       $this->load->view('admin/layouts/header');
       
       $this->load->view('admin/profile_data',$data);
       
       $this->load->view('admin/layouts/footer');
       
	
	}

    public function update_profile(){

       $profile_singkat = $this->input->post('profile_singkat');
       

    $visi = $this->input->post('visi');
    $misi = $this->input->post('misi');
    $id_profile = $this->input->post('id_profile');

$this->Profile_model->update_profile($profile_singkat,$visi,$misi,$id_profile);

redirect('admin/Profile');
    
    }


    public function tugas(){
   $data['tugas'] = $this->Profile_model->select_tugas();
       
 
       $this->load->view('admin/layouts/header');
       
       $this->load->view('admin/tugas',$data);
       
       $this->load->view('admin/layouts/footer');
       
  
  }



   public function save_tugas(){

        $id_jabatan = $this->input->post('id_jabatan');
         $tugas = $this->input->post('tugas');
        if($id_jabatan){
            $this->Profile_model->update_tugas($id_jabatan,$tugas);
            echo $this->session->set_flashdata('message', '<div class="alert alert-info"><b>Jabatan berhasil diubah</b></div>');
            
        }else{
            
            $this->Profile_model->insert_tugas($tugas);
            echo $this->session->set_flashdata('message', '<div class="alert alert-info"><B>Tugas berhasil ditambah</b></div>');
        }
        

        redirect('admin/profile/tugas');
    }


    function delete_tugas($id)
    {
        

        $this->Profile_model->delete_tugas($id);
        echo $this->session->set_flashdata('message', '<div class="alert alert-info"><B>Tugas berhasil dihapus</b></div>');
        redirect('admin/profile/tugas');
    }



public function fungsi(){
  
       
 $data['tugas'] = $this->Profile_model->select_tugas();
       $this->load->view('admin/layouts/header');
       
       $this->load->view('admin/list_fungsi',$data);
       
       $this->load->view('admin/layouts/footer');
       
  
  }


  public function tambah_fungsi(){

       $id_fungsi = $this->input->get('id_fungsi');

       if($id_fungsi){

        $data['status']="edit";
       }


       $data['option_tugas'] = $this->Profile_model->select_option_tugas();
       $data['tugas'] = $this->Profile_model->select_tugas();
       $fungsi_id =$this->Profile_model->select_fungsi_id($id_fungsi);

       foreach($fungsi_id as $now){

        $data['id_fungsi']=$now->id_fungsi;
        $data['id_jabatan']=$now->id_jabatan;
       
          $data['fungsi']=$now->fungsi;
          $data['uraian']=$now->uraian;
          $data['tugass']=$now->tugas;

       }
       $this->load->view('admin/layouts/header');

       
       $this->load->view('admin/fungsi',$data);
       
       $this->load->view('admin/layouts/footer');
       
  
  }


public function save_fungsi(){

        $id = $this->input->post('id');
          $tugas = $this->input->post('tugas');
         $uraian = $this->input->post('uraian');
 $fungsi = $this->input->post('fungsi');
         $id_jabatan = $this->input->post('id_jabatan');

       


       



        if($id){
            $this->Profile_model->update_fungsi($tugas,$uraian,$fungsi,$id);
            

            echo $this->session->set_flashdata('message', '<div class="alert alert-info"><b>Jabatan berhasil diubah</b></div>');
            
        }else{
            
            $this->Profile_model->insert_fungsi($tugas,$uraian,$fungsi,$id_jabatan);
            echo $this->session->set_flashdata('message', '<div class="alert alert-info"><B>Fungsi Urain Tugas berhasil ditambah</b></div>');
        }
        

        redirect('admin/profile/tugas');
    }


     
}
