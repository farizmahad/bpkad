<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Kontak extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('Kontak_model');
			
		
	}
  
public function index($offset=0){

      

        $daterange= $this->input->get('daterange');
        $filter= $this->input->get('filter');  

        $this->load->helper('url');
        $this->load->library('pagination');
        $config['base_url'] = base_url().'admin/Kontak/index'; 
        $config['total_rows'] = $this->Kontak_model->count_kontak();
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


        if(!$daterange and !$filter){
        $data['kontak'] = $this->Kontak_model->select_kontak($config['per_page'], $offset,$form);
        $data['link']= $this->pagination->create_links();
        }else{
$data['kontak'] = $this->Kontak_model->select_kontak_filter($daterange,$filter);

        }


        
      

        
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/kontak_us',$data);
        $this->load->view('admin/layouts/footer');
    }

    function delete_kontak($id_kontak)
    {
        

        $this->Kontak_model->delete_kontak($id_kontak);
        echo $this->session->set_flashdata('message', '<div class="alert alert-info"><B>Kategori berhasil dihapus</b></div>');
        redirect('admin/Kontak');
    }



function detail_kontak(){
    
    $id_kontak = $this->input->get('id_kontak');


    $data['detail_kontak'] = $this->Kontak_model->detail_kontakk($id_kontak);

$this->load->view('admin/layouts/header');
        $this->load->view('admin/detail_kontak_us',$data);
        $this->load->view('admin/layouts/footer');
   
  }


 public function simpan_balasan(){

    $id_kontak = $this->input->post('id_kontak');
    $email = $this->input->post('email');
    $nama = $this->input->post('nama');
    $balasan = $this->input->post('balasan');
    $this->Kontak_model->insert_detail_kontak($id_kontak,$balasan);
    $this->Kontak_model->update_status_balas($id_kontak);

    $this->email_balasan($nama,$email,$id_kontak);

    redirect('admin/kontak');
  }


function email_balasan($nama,$email,$id_kontak){
         # load email library

    $data['detail_kontak'] = $this->Kontak_model->detail_kontakk($id_kontak);
      $this->load->library('email');
         $message = $this->load->view('admin/email/email_balasan',$data, TRUE);

          $this->email->from('rani.aartijaya@gmail.com', 'Bursa Sajadah');
         
         $this->email->to($email);
         $this->email->cc('rani.aartijaya@gmail.com');  
         $this->email->subject('Badan Perencanaan dan Keuangan Daerah (#'.$nama.') - ('.$email.')');
         $this->email->message($message);
         $this->email->send();


 
        



}


     
}
