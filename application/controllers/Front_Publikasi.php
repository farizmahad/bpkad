<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front_Publikasi extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    function __construct()
    {
        parent::__construct();
        $this->load->model('Front_berita_model');

    }
    public function index()
    {
        $data['laporan']=$this->Front_berita_model->select_laporan();
        $this->load->view('layouts/header2');
        $this->load->view('publikasi',$data);
        $this->load->view('layouts/footer2');
    }


    public function berita()
    {
        $data['berita']=$this->Front_berita_model->select_berita_publish();
        $this->load->view('layouts/header2');
        $this->load->view('front_berita',$data);
        $this->load->view('layouts/footer2');
    }

    public function open_berita($id)
    {


       $data['berita_random']=$this->Front_berita_model->select_berita_random();
       $data['detail_berita']=$this->Front_berita_model->select_detail_berita($id);
       $data['id_berita']=$id;
        $this->load->view('layouts/header2');
        $this->load->view('open_berita',$data);
        $this->load->view('layouts/footer2');
    }


    public function video()
    {
        $data['video']=$this->Front_berita_model->select_video();
        $this->load->view('layouts/header2');
        $this->load->view('channel-bpkad',$data);
        $this->load->view('layouts/footer2');
    }


    public function apbd_cimahi()
    {
        $this->load->view('layouts/header2');
        $this->load->view('apbd_cimahi');
        $this->load->view('layouts/footer2');
    }

    public function detail_laporan($url)
    {

       $id_laporan=$this->Front_berita_model->cek_id_laporan($url);
       foreach($id_laporan as $idd){

            $id=$idd->id_laporan;
           $data['nama_laporan']=$idd->nama_laporan;
       }
       $data['file_laporan']=$this->Front_berita_model->file_laporan($id);
        $this->load->view('layouts/header2');
        $this->load->view('apbd_cimahi',$data);
        $this->load->view('layouts/footer2');

    }


    public function sop()
    {
        $data['sop']=$this->Front_berita_model->select_sop();
        $this->load->view('layouts/header2');
        $this->load->view('sop',$data);
        $this->load->view('layouts/footer2');
    }


    public function simpan_komentar(){

        $tanggal_komentar=date('Y-m-d');
        $id_berita= $this->input->post('id_berita');
        $nama= $this->input->post('nama');
        $email= $this->input->post('email');
        $komentar= $this->input->post('komentar');

        $this->Front_berita_model->insert_komentar($tanggal_komentar,$id_berita,$nama,$email,$komentar);
        echo $this->session->set_flashdata('message', '<div class="alert alert-info"><b>Komentar anda berhasil dikirim!</b></div>');


        redirect('detail-berita/'.$id_berita);
    }


    public function visualisasi()
    {

        $this->load->view('layouts/header');
        $this->load->view('visualisasi');
        $this->load->view('layouts/footer');
    }





}
