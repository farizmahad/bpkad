<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front_Profile extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
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
	    $this->load->model('Front_profile_model');
        $this->load->model('Berita_model');
	}
  
	public function index()
	{
		$data['select_profile']=$this->Front_profile_model->select_visi();
		$this->load->view('layouts/header2');
		$this->load->view('visi',$data);
		$this->load->view('layouts/footer2');
	}


	public function tugas_fungsi()
	{
        $data['fungsi']=$this->Front_profile_model->select_tugas_fungsi();
		$this->load->view('layouts/header2');
		$this->load->view('tugas_fungsi',$data);
		$this->load->view('layouts/footer2');
	}

    public function struktur_organisasi()
    {

        $this->load->view('layouts/header2');
        $this->load->view('struktur_organisasi');
        $this->load->view('layouts/footer2');
    }



    public function informasi_keuangan()
    {
        $data['sop']=$this->Front_profile_model->select_laporan_keuangan();


        $this->load->view('layouts/header2');
        $this->load->view('informasi_keuangan1',$data);
        $this->load->view('layouts/footer2');
    }



    public function informasi_aset()
    {
        $data['sop']=$this->Front_profile_model->select_informasi_aset();

        $this->load->view('layouts/header2');
        $this->load->view('informasi_aset1',$data);
        $this->load->view('layouts/footer2');
    }

/*

    public function diagram()
    {
       

        
        
        $perubahan= $this->input->post('ids');
        if($perubahan=="") {
            $apbd = $this->Berita_model->select_sum_pendapatan('2016');
            foreach ($apbd as $ap) {
                $data['apbd'] = $ap->jumlah;
                $apbd2016=$ap->jumlah;
            }

            $belanja = $this->Berita_model->select_sum_belanja('2016');
            foreach ($belanja as $be) {
                $data['belanja'] = $be->jumlah;
                $bel2016=$be->jumlah;
            }


            $pembiayaan = $this->Berita_model->select_sum_pembiayaan('2016');
            foreach ($pembiayaan as $pem) {
                $data['pembiayaan'] = $pem->jumlah;
                $pem2016=$pem->jumlah;
            }

            $jumlah_2016=$apbd2016+$bel2016+$pem2016;
            $data['jumlah2016']=$apbd2016+$bel2016+$pem2016;

            $data['persenapbd2016']=round(($apbd2016/$jumlah_2016*100),2);
            $data['persenbel2016']=round(($bel2016/$jumlah_2016*100),2);
            $data['persenpem2016']=round(($pem2016/$jumlah_2016*100),2);
            $apbd2015 = $this->Berita_model->select_sum_pendapatan('2015');
            foreach ($apbd2015 as $ap2015) {
                $data['apbd2015'] = $ap2015->jumlah;
                $apbd_2015=$ap2015->jumlah;
            }

            $belanja2015 = $this->Berita_model->select_sum_belanja('2015');
            foreach ($belanja2015 as $be2015) {
                $data['belanja2015'] = $be2015->jumlah;
                $bel_2015=$ap2015->jumlah;
            }




            $pembiayaan2015 = $this->Berita_model->select_sum_pembiayaan('2015');
            foreach ($pembiayaan2015 as $pem2015) {
                $data['pembiayaan2015'] = $pem2015->jumlah;
                $pem_2015 = $pem2015->jumlah;
            }

            $jumlah_2015=$apbd_2015+$bel_2015+$pem_2015;
            $data['jumlah2015']=$apbd_2015+$bel_2015+$pem_2015;

            $data['persenapbd2015']=round(($apbd_2015/$jumlah_2015*100),2);
            $data['persenbel2015']=round(($bel_2015/$jumlah_2015*100),2);
            $data['persenpem2015']=round(($pem_2015/$jumlah_2015*100),2);



            $apbd2014 = $this->Berita_model->select_sum_pendapatan('2014');
            foreach ($apbd2014 as $ap2014) {
                $data['apbd2014'] = $ap2014->jumlah;
                $apbd_2014 = $ap2014->jumlah;
            }

            $belanja2014 = $this->Berita_model->select_sum_belanja('2014');
            foreach ($belanja2014 as $be2014) {
                $data['belanja2014'] = $be2014->jumlah;
                $bel_2014 = $be2014->jumlah;
            }


            $pembiayaan2014 = $this->Berita_model->select_sum_pembiayaan('2014');
            foreach ($pembiayaan2014 as $pem2014) {
                $data['pembiayaan2014'] = $pem2014->jumlah;
                $pem_2014 = $pem2014->jumlah;
            }


            $jumlah_2014=$apbd_2014+$bel_2014+$pem_2014;
           $data['jumlah2014']=$apbd_2014+$bel_2014+$pem_2014;
            $data['persenapbd2014']=round(($apbd_2014/$jumlah_2014*100),2);
            $data['persenbel2014']=round(($bel_2014/$jumlah_2014*100),2);
            $data['persenpem2014']=round(($pem_2014/$jumlah_2014*100),2);
            
            $data['perubahan'] = $perubahan;
            
            $this->load->view('layouts/header');
            $this->load->view('front_digram5',$data);
            $this->load->view('layouts/footer');



}
        
    }
*/
    

    
    public function diagram()
    {
            $tahun= $this->input->post('tahun_search');
            $data['tahun_search']=$tahun;
            $jenis= $this->input->post('jenis');
            $data['jenis']=$jenis;

            if($tahun){
            $periode=3;
            $anon=$tahun+($periode-1);
            for($j=$tahun; $j <= $anon; $j++) {
             $an[]=$j;
            }
             
             $tahun_awal=$tahun;
             $tahun_akhir=$anon;
             $data['tahun_awal']=$tahun_awal;
             $data['tahun_akhirr']=$anon;
             }

            $data['perubahan']=$this->Berita_model->select_diagram_perubahan_apbd($tahun_awal,$tahun_akhir,$jenis);
            if($jenis){
             $this->load->view('visualisasi_apbd_terbaru_jenis_ver3',$data);
            }else{
            $this->load->view('layouts/header2');
            $this->load->view('visualisasi_apbd_terbaru_ver3',$data); 
            $this->load->view('layouts/footer2');
           }
    }

   

/*

     public function diagram()
    {
        $perubahan= $this->input->post('ids');


        if($perubahan=="") {
            $apbd = $this->Berita_model->select_sum_pendapatan('2016');
            foreach ($apbd as $ap) {
                $data['apbd'] = $ap->jumlah;
                $apbd2016=$ap->jumlah;
            }

            $belanja = $this->Berita_model->select_sum_belanja('2016');
            foreach ($belanja as $be) {
                $data['belanja'] = $be->jumlah;
                $bel2016=$be->jumlah;
            }


            $pembiayaan = $this->Berita_model->select_sum_pembiayaan('2016');
            foreach ($pembiayaan as $pem) {
                $data['pembiayaan'] = $pem->jumlah;
                $pem2016=$pem->jumlah;
            }

            $jumlah_2016=$apbd2016+$bel2016+$pem2016;

            $data['persenapbd2016']=round(($apbd2016/$jumlah_2016*100),2);
            $data['persenbel2016']=round(($bel2016/$jumlah_2016*100),2);
            $data['persenpem2016']=round(($pem2016/$jumlah_2016*100),2);
            $apbd2015 = $this->Berita_model->select_sum_pendapatan('2015');
            foreach ($apbd2015 as $ap2015) {
                $data['apbd2015'] = $ap2015->jumlah;
                $apbd_2015=$ap2015->jumlah;
            }

            $belanja2015 = $this->Berita_model->select_sum_belanja('2015');
            foreach ($belanja2015 as $be2015) {
                $data['belanja2015'] = $be2015->jumlah;
                $bel_2015=$ap2015->jumlah;
            }




            $pembiayaan2015 = $this->Berita_model->select_sum_pembiayaan('2015');
            foreach ($pembiayaan2015 as $pem2015) {
                $data['pembiayaan2015'] = $pem2015->jumlah;
                $pem_2015 = $pem2015->jumlah;
            }

            $jumlah_2015=$apbd_2015+$bel_2015+$pem_2015;

            $data['persenapbd2015']=round(($apbd_2015/$jumlah_2015*100),2);
            $data['persenbel2015']=round(($bel_2015/$jumlah_2015*100),2);
            $data['persenpem2015']=round(($pem_2015/$jumlah_2015*100),2);



            $apbd2014 = $this->Berita_model->select_sum_pendapatan('2014');
            foreach ($apbd2014 as $ap2014) {
                $data['apbd2014'] = $ap2014->jumlah;
                $apbd_2014 = $ap2014->jumlah;
            }

            $belanja2014 = $this->Berita_model->select_sum_belanja('2014');
            foreach ($belanja2014 as $be2014) {
                $data['belanja2014'] = $be2014->jumlah;
                $bel_2014 = $be2014->jumlah;
            }


            $pembiayaan2014 = $this->Berita_model->select_sum_pembiayaan('2014');
            foreach ($pembiayaan2014 as $pem2014) {
                $data['pembiayaan2014'] = $pem2014->jumlah;
                $pem_2014 = $pem2014->jumlah;
            }


            $jumlah_2014=$apbd_2014+$bel_2014+$pem_2014;

            $data['persenapbd2014']=round(($apbd_2014/$jumlah_2014*100),2);
            $data['persenbel2014']=round(($bel_2014/$jumlah_2014*100),2);
            $data['persenpem2014']=round(($pem_2014/$jumlah_2014*100),2);
            $this->load->view('layouts/header');
            $data['perubahan'] = $perubahan;
            $this->load->view('visualisasi_ver_2', $data);

            $this->load->view('layouts/footer');


        }
    }

    */
}
