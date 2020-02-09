<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('ImageManipulator.php');


class APBD extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Berita_model');
        $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
	}
  
    public function index($offset=0){

        $tahun=$this->input->get('tahun');
        $keterangan=$this->input->get('keterangan');


        $this->load->helper('url');
        $this->load->library('pagination');
        $config['base_url'] = base_url().'admin/APBD/index';
        $config['total_rows'] = $this->Berita_model->count_perubahan_apbd();
        $config['per_page'] =50;
        $config['use_page_numbers'] = false;
        $config['page_query_string'] = false;
        $config['enable_query_strings'] = true;
        $config['num_links'] =5;
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

        $data['tahun']=$this->Berita_model->select_distinc_tahun();
        $data['select_apbd']=$this->Berita_model->select_perubahan_apbd_select();

        if(!$tahun and !$keterangan) {
            $data['apbd'] = $this->Berita_model->select_perubahan_apbd($config['per_page'], $offset, $form);
            $data['link'] = $this->pagination->create_links();
        }else{
            $data['apbd'] = $this->Berita_model->select_perubahan_apbd_tahun($tahun,$keterangan);
        }
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/apbd',$data);
        $this->load->view('admin/layouts/footer');
	}

    public function upload()
    {
        //var_dump("test");die;
        $fileName = time().$_FILES['file']['name'];

        //$config['upload_path'] = './file_excel/'; //buat folder dengan nama assets di root folder
        $config['upload_path'] = FCPATH.'file_excel/';
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['overwrite'] = true;
        $config['max_size'] = 0;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if(!$this->upload->do_upload('file') )
            $this->upload->display_errors();

        $media = $this->upload->data('file');
        $inputFileName = $this->upload->data('full_path');

        try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch(Exception $e) {
            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
        }

        $sheet = $objPHPExcel->getSheet(0);
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();

        for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array
            $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
            //$tglUpdate = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($rowData[0][1]));


            /*
            $jamMasuk = PHPExcel_Style_NumberFormat::toFormattedString($rowData[0][3], 'hh:mm');
            //$jamKeluar = PHPExcel_Style_NumberFormat::toFormattedString($rowData[0][5], 'hh:mm:ss');
            $pecahJamMasuk = explode(":",$jamMasuk);
            $pecahJamKeluar = explode(":",$jamKeluar);
            */



            //Sesuaikan sama nama kolom tabel di database
            $data = array(
                "nomor_urut"=> $rowData[0][0],
                "uraian"=> $rowData[0][1],
                "jumlah"=> $rowData[0][2],
                "tahun"=> $rowData[0][3],
                "status"=> $rowData[0][4]
            );

            //sesuaikan nama dengan nama tabel
            $insert = $this->db->insert("perubahan_apbd",$data);
            delete_files($media['file_path']);
            //delete_files($config['file_path'],TRUE);
        }
        redirect('admin/apbd');

    }


    public function diagram(){

        $apbd=$this->Berita_model->select_sum_pendapatan('2016');
        foreach($apbd as $ap){
            $data['apbd']=$ap->jumlah;
        }

        $belanja=$this->Berita_model->select_sum_belanja('2016');
        foreach($belanja as $be){
            $data['belanja']=$be->jumlah;
        }


        $pembiayaan=$this->Berita_model->select_sum_pembiayaan('2016');
        foreach($pembiayaan as $pem){
            $data['pembiayaan']=$pem->jumlah;
        }

        $apbd2015=$this->Berita_model->select_sum_pendapatan('2015');
        foreach($apbd2015 as $ap2015){
            $data['apbd2015']=$ap2015->jumlah;
        }

        $belanja2015=$this->Berita_model->select_sum_belanja('2015');
        foreach($belanja2015 as $be2015){
            $data['belanja2015']=$be2015->jumlah;
        }


        $pembiayaan2015=$this->Berita_model->select_sum_pembiayaan('2015');
        foreach($pembiayaan2015 as $pem2015){
            $data['pembiayaan2015']=$pem2015->jumlah;
        }


        $apbd2014=$this->Berita_model->select_sum_pendapatan('2014');
        foreach($apbd2014 as $ap2014){
            $data['apbd2014']=$ap2014->jumlah;
        }

        $belanja2014=$this->Berita_model->select_sum_belanja('2014');
        foreach($belanja2014 as $be2014){
            $data['belanja2014']=$be2014->jumlah;
        }


        $pembiayaan2014=$this->Berita_model->select_sum_pembiayaan('2014');
        foreach($pembiayaan2014 as $pem2014){
            $data['pembiayaan2014']=$pem2014->jumlah;
        }


        $this->load->view('admin/layouts/header');
        $this->load->view('admin/diagram',$data);
        $this->load->view('admin/layouts/footer');
    }

    public function sop(){

        $data['sop']=$this->Berita_model->select_sop();
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/sop',$data);
        $this->load->view('admin/layouts/footer');

    }


    public function informasi_keuangan(){

        $tahun=$this->input->get('tahun');
        $keterangan=$this->input->get('keterangan');

        $this->load->helper('url');
        $this->load->library('pagination');
        $config['base_url'] = base_url().'admin/APBD/informasi_keuangan';
        $config['total_rows'] = $this->Berita_model->count_informasi_keuangan();
        $config['per_page'] =50;
        $config['use_page_numbers'] = false;
        $config['page_query_string'] = false;
        $config['enable_query_strings'] = true;
        $config['num_links'] =5;
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
        if(!$tahun and !$keterangan) {
            $data['informasi_keuangan'] = $this->Berita_model->select_laporan_keuangan($config['per_page'], $offset, $form);
            $data['link'] = $this->pagination->create_links();
        }else{
            $data['informasi_keuangan'] = $this->Berita_model->select_laporan_keuangan_tahun($tahun,$keterangan);
        }
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/laporan_keuangan',$data);
        $this->load->view('admin/layouts/footer');



    }


    public function save_info_keuangan(){





        $id = $this->input->post('id');
        $id_produk_hukum=$this->input->post('id_produk_hukum');
        $nama_produk_hukum=$this->input->post('produk_hukum');



        if($id){
            $this->Kategori_berita_model->update_laporan($id,$nama_laporan,$url);
            echo $this->session->set_flashdata('message', '<div class="alert alert-info"><b>Kategori berhasil diubah</b></div>');

        }else{
            $tahun=$this->input->post('tahun');
            $this->load->library('upload');
            $this->load->helper('url');


            $foto = $_FILES['foto']['name'];



            $tmp = $_FILES['foto']['tmp_name'];



            $path = "./files/info_keuangan/".$foto;


            if(move_uploaded_file($tmp, $path)) { // Cek a


                $this->Berita_model->insert_informasi_keuangan($tahun,$foto);
                echo $this->session->set_flashdata('message', '<div class="alert alert-info"><B>Produk Hukum berhasil ditambah</b></div>');
            }
        }


        redirect('admin/APBD/informasi_keuangan');
    }



    function delete_info_keuangan($id)
    {
        $query = $this->Berita_model->delete_info_keuangan($id);
        echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> Laporan Keuangan berhasil dihapus</div>');
        redirect('admin/APBD/informasi_keuangan');
    }

    function delete_sop($id)
    {
        $query = $this->Berita_model->delete_sop($id);
        echo $this->session->set_flashdata('message','<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> SOP berhasil dihapus</div>');
        redirect('admin/APBD/sop');
    }






}
