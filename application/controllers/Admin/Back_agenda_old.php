<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Back_agenda extends CI_Controller {

	function __construct()
	{
		parent::__construct();

				$this->load->model('Back_agenda_model');
			
		
	}


    public function index(){

    	$daterange = $this->input->get('daterange');
    	$filter = $this->input->get('filter');



     
      $data['select_agenda']=$this->Back_agenda_model->select_agenda_today($daterange,$filter);
  
      $this->load->view('admin/layouts/header');
        $this->load->view('admin/agenda',$data);
        $this->load->view('admin/layouts/footer');
  
        
    }


    public function save_agenda(){



$id = $this->input->post('id');



		$keterangan = $this->input->post('keterangan');
		$tanggal = $this->input->post('tanggal');
		$agenda = $this->input->post('agenda');
		$jam_mulai = $this->input->post('jam_mulai');
		$jam_selesai =$this->input->post('jam_selesai');
		

		
			//echo "add";die;

		if($id){
$this->Back_agenda_model->update_agenda($tanggal,$agenda,$jam_mulai,$jam_selesai,$keterangan,$id);

		}else{
	   $this->Back_agenda_model->insert_agenda($tanggal,$agenda,$jam_mulai,$jam_selesai,$keterangan);
	}
	   echo $this->session->set_flashdata('message', '<div class="alert alert-info"><b>Member berhasil ditambah</b></div>');
		
		redirect('admin/Back_agenda');
	}


	 function delete_agenda($id_agenda)
    {
        

        $this->Back_agenda_model->delete_agenda($id_agenda);
        echo $this->session->set_flashdata('message', '<div class="alert alert-info"><B>Kategori berhasil dihapus</b></div>');
        redirect('admin/Back_agenda');
    }


    
    


}
