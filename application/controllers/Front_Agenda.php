<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front_Agenda extends CI_Controller
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
        $this->load->model('Berita_model');

    }

    public function index()
    {
        $data['apbd_murni']=$this->Front_berita_model->select_apbd_murni();
        $this->load->view('layouts/header2');
        $this->load->view('apbd_murni',$data);
        $this->load->view('layouts/footer2');
    }


    public function perubahan_apbd()
    {
        $data['apbd_murni']=$this->Front_berita_model->select_perubahan_apbd();
        $this->load->view('layouts/header2');
        $this->load->view('apbd_murni',$data);
        $this->load->view('layouts/footer2');
    }


    public function timeline()
    {

        $data['timeline']=$this->Front_berita_model->select_timeline();
        $this->load->view('layouts/header2');
        $this->load->view('agenda',$data);
        $this->load->view('layouts/footer2');
    }

    public function galeri()
    {
        $this->load->view('layouts/header');
        $this->load->view('galeri');
        $this->load->view('layouts/footer');
    }

    public function replay()
    {
        $tahun= $this->input->post('ids');
        $type= $this->input->post('type');
$data['type']=$type;

        $data['tahun']= $tahun;
        $data['pendapatan']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,4.1);

        $pen41=$this->Front_berita_model->select_pendapatan_tahunan($tahun,4.1);
        $data['pen41']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,4.1);
        foreach($pen41 as $p41){
            $jumlah41 +=$p41->jumlah;
        }


        $pen42=$this->Front_berita_model->select_pendapatan_tahunan($tahun,4.2);
        $data['pen42']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,4.2);


        foreach($pen42 as $p42){
            $jumlah42 +=$p42->jumlah;
        }


        $pen43=$this->Front_berita_model->select_pendapatan_tahunan($tahun,4.3);

        $data['pen43']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,4.3);

        foreach($pen43 as $p43){
            $jumlah43 +=$p43->jumlah;
        }

        $jumlah_4=$jumlah41+$jumlah42+$jumlah43;
        $data['jumlah_4']=$jumlah41+$jumlah42+$jumlah43;

        $data['persen41']=round(($jumlah41/$jumlah_4*100),2);
        $data['persen42']=round(($jumlah42/$jumlah_4*100),2);
        $data['persen43']=round(($jumlah43/$jumlah_4*100),2);

        $bel51=$this->Front_berita_model->select_pendapatan_tahunan($tahun,5.1);



        $data['bel51']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,5.1);

        foreach($bel51 as $b51){
            $jumlah51 +=$b51->jumlah;
        }


        $bel52=$this->Front_berita_model->select_pendapatan_tahunan($tahun,5.2);
        $data['bel52']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,5.2);
        foreach($bel52 as $b52){
            $jumlah52 +=$b52->jumlah;
        }





        $jumlah_5=$jumlah51+$jumlah52;
        $data['jumlah_5']=$jumlah51+$jumlah52;
        $data['persen51']=round(($jumlah51/$jumlah_5*100),2);
        $data['persen52']=round(($jumlah52/$jumlah_5*100),2);


        $pem61=$this->Front_berita_model->select_pendapatan_tahunan($tahun,6.1);
        $data['pem61']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,6.1);


        foreach($pem61 as $p61){
            $jumlah61 +=$p61->jumlah;
        }


        $pem62=$this->Front_berita_model->select_pendapatan_tahunan($tahun,6.2);
        $data['pem62']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,6.2);

        foreach($pem62 as $p62){
            $jumlah62 +=$p62->jumlah;
        }
        $jumlah_6=$jumlah61+$jumlah62;
        $data['jumlah_6']=$jumlah61+$jumlah62;

        $data['persen61']=round(($jumlah61/$jumlah_6*100),2);
        $data['persen62']=round(($jumlah62/$jumlah_6*100),2);


        $data['id_pengajuan']=$id_pengajuan;
        $this->load->view('replay2',$data);


    }
/*
    public function replay2()
    {
        $tahun= $this->input->post('ids');
        $type= $this->input->post('type');
        $data['type']=$type;

        $data['tahun']= $tahun;
        $data['pendapatan']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,4.1,$type);

        $pen41=$this->Front_berita_model->select_pendapatan_tahunan($tahun,4.1,$type);
        $data['pen41']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,4.1,$type);
        foreach($pen41 as $p41){
            $jumlah41 +=$p41->jumlah;
        }


        $pen42=$this->Front_berita_model->select_pendapatan_tahunan($tahun,4.2,$type);
        $data['pen42']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,4.2,$type);


        foreach($pen42 as $p42){
            $jumlah42 +=$p42->jumlah;
        }


        $pen43=$this->Front_berita_model->select_pendapatan_tahunan($tahun,4.3,$type);

        $data['pen43']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,4.3,$type);

        foreach($pen43 as $p43){
            $jumlah43 +=$p43->jumlah;
        }

        $jumlah_4=$jumlah41+$jumlah42+$jumlah43;
        $data['jumlah_4']=$jumlah41+$jumlah42+$jumlah43;

        $data['persen41']=round(($jumlah41/$jumlah_4*100),2);
        $data['persen42']=round(($jumlah42/$jumlah_4*100),2);
        $data['persen43']=round(($jumlah43/$jumlah_4*100),2);

        $bel51=$this->Front_berita_model->select_pendapatan_tahunan($tahun,5.1,$type);



        $data['bel51']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,5.1,$type);

        foreach($bel51 as $b51){
            $jumlah51 +=$b51->jumlah;
        }


        $bel52=$this->Front_berita_model->select_pendapatan_tahunan($tahun,5.2,$type);
        $data['bel52']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,5.2,$type);
        foreach($bel52 as $b52){
            $jumlah52 +=$b52->jumlah;
        }





        $jumlah_5=$jumlah51+$jumlah52;
        $data['jumlah_5']=$jumlah51+$jumlah52;
        $data['persen51']=round(($jumlah51/$jumlah_5*100),2);
        $data['persen52']=round(($jumlah52/$jumlah_5*100),2);


        $pem61=$this->Front_berita_model->select_pendapatan_tahunan($tahun,6.1,$type);
        $data['pem61']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,6.1,$type);


        foreach($pem61 as $p61){
            $jumlah61 +=$p61->jumlah;
        }


        $pem62=$this->Front_berita_model->select_pendapatan_tahunan($tahun,6.2,$type);
        $data['pem62']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,6.2,$type);

        foreach($pem62 as $p62){
            $jumlah62 +=$p62->jumlah;
        }
        $jumlah_6=$jumlah61+$jumlah62;
        $data['jumlah_6']=$jumlah61+$jumlah62;

        $data['persen61']=round(($jumlah61/$jumlah_6*100),2);
        $data['persen62']=round(($jumlah62/$jumlah_6*100),2);


        $data['id_pengajuan']=$id_pengajuan;
        $this->load->view('replay',$data);


    }
*/

    public function replay2()
    {
        $tahun= $this->input->post('ids');
        $type= $this->input->post('jenis');

        $data['type']=$type;
        


        $data['tahun']= $tahun;
        $data['pendapatan']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,4.1,$type);

        $pen41=$this->Front_berita_model->select_pendapatan_tahunan($tahun,4.1,$type);
       
        
         
         


        $data['count_41']=count($pen41);


        $data['pen41']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,4.1,$type);
        foreach($pen41 as $p41){
            $jumlah41 +=$p41->jumlah;
            $data['jumlah_41']=$jumlah41;
        }



        $pen42=$this->Front_berita_model->select_pendapatan_tahunan($tahun,4.2,$type);
        $data['pen42']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,4.2,$type);
        $data['count_42']=count($pen42);

        foreach($pen42 as $p42){
            $jumlah42 +=$p42->jumlah;
            $data['jumlah_42']=$jumlah42;
        }


        $pen43=$this->Front_berita_model->select_pendapatan_tahunan($tahun,4.3,$type);

        $data['pen43']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,4.3,$type);
        $data['count_43']=count($pen43);



        foreach($pen43 as $p43){
            $jumlah43 +=$p43->jumlah;
            $data['jumlah_43'] =$jumlah43;
            $urutan =$p43->nomor_urut;
        }

        $jumlah_4=$jumlah41+$jumlah42+$jumlah43;
        $data['jumlah_4']=$jumlah41+$jumlah42+$jumlah43;

        $data['persen41']=round(($jumlah41/$jumlah_4*100),2);
        $data['persen42']=round(($jumlah42/$jumlah_4*100),2);
        $data['persen43']=round(($jumlah43/$jumlah_4*100),2);

        $bel51=$this->Front_berita_model->select_pendapatan_tahunan($tahun,5.1,$type);



        $data['bel51']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,5.1,$type);
        $data['count_51']=count($bel51);
        foreach($bel51 as $b51){
            $jumlah51 +=$b51->jumlah;
            $data['jumlah_51'] =$jumlah51;
        }


        $bel52=$this->Front_berita_model->select_pendapatan_tahunan($tahun,5.2,$type);
        $data['bel52']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,5.2,$type);
        $data['count_52']=count($bel52);
        foreach($bel52 as $b52){
            $jumlah52 +=$b52->jumlah;
            $data['jumlah_52']=$jumlah52;
        }





        $jumlah_5=$jumlah51+$jumlah52;
        $data['jumlah_5']=$jumlah51+$jumlah52;
        $data['persen51']=round(($jumlah51/$jumlah_5*100),2);
        $data['persen52']=round(($jumlah52/$jumlah_5*100),2);


        $pem61=$this->Front_berita_model->select_pendapatan_tahunan($tahun,6.1,$type);
        $data['pem61']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,6.1,$type);
        $data['count_61']=count($pem61);

        foreach($pem61 as $p61){
            $jumlah61 +=$p61->jumlah;
            $data['jumlah_61']=$jumlah61;
        }


        $pem62=$this->Front_berita_model->select_pendapatan_tahunan($tahun,6.2,$type);
        $data['pem62']=$this->Front_berita_model->select_pendapatan_tahunan($tahun,6.2,$type);
        $data['count_62']=count($pem62);
        foreach($pem62 as $p62){
            $jumlah62 +=$p62->jumlah;
            $data['jumlah_62']=$jumlah62;
        }
        $jumlah_6=$jumlah61+$jumlah62;
        $data['jumlah_6']=$jumlah61+$jumlah62;

        $data['persen61']=round(($jumlah61/$jumlah_6*100),2);
        $data['persen62']=round(($jumlah62/$jumlah_6*100),2);
        $data['id_pengajuan']=$id_pengajuan;
        $this->load->view('replay2',$data);
        


    }



    public function awal()
    {
        $perubahan= $this->input->post('ids');
        $data['type']=$perubahan;
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




        $this->load->view('front_digram2',$data);


    }



    public function murni()
    {
        $perubahan= $this->input->post('ids');


        $apbd = $this->Berita_model->select_sum_pendapatan('2016',$perubahan);


        foreach ($apbd as $ap) {
            $data['apbd'] = $ap->jumlah;
        }

        $belanja = $this->Berita_model->select_sum_belanja('2016',$perubahan);
        foreach ($belanja as $be) {
            $data['belanja'] = $be->jumlah;
        }


        $pembiayaan = $this->Berita_model->select_sum_pembiayaan('2016',$perubahan);
        foreach ($pembiayaan as $pem) {
            $data['pembiayaan'] = $pem->jumlah;
        }

        $apbd2015 = $this->Berita_model->select_sum_pendapatan('2015',$perubahan);
        foreach ($apbd2015 as $ap2015) {
            $data['apbd2015'] = $ap2015->jumlah;
        }

        $belanja2015 = $this->Berita_model->select_sum_belanja('2015',$perubahan);
        foreach ($belanja2015 as $be2015) {
            $data['belanja2015'] = $be2015->jumlah;
        }


        $pembiayaan2015 = $this->Berita_model->select_sum_pembiayaan('2015',$perubahan);
        foreach ($pembiayaan2015 as $pem2015) {
            $data['pembiayaan2015'] = $pem2015->jumlah;
        }


        $apbd2014 = $this->Berita_model->select_sum_pendapatan('2014',$perubahan);
        foreach ($apbd2014 as $ap2014) {
            $data['apbd2014'] = $ap2014->jumlah;
        }

        $belanja2014 = $this->Berita_model->select_sum_belanja('2014',$perubahan);
        foreach ($belanja2014 as $be2014) {
            $data['belanja2014'] = $be2014->jumlah;
        }

        $data['apbd2017']=205;

        $data['belanja2017']=305;
        $data['pembiayaan2017']=405;
        $pembiayaan2014 = $this->Berita_model->select_sum_pembiayaan('2014',$perubahan);
        foreach ($pembiayaan2014 as $pem2014) {
            $data['pembiayaan2014'] = $pem2014->jumlah;
        }
        $data['perubahan']=$perubahan;
        if($perubahan=="Murni") {

            $this->load->view('front_digram4',$data);
        }elseif($perubahan=="Perubahan"){
            $this->load->view('front_digram5',$data);
        }


    }

/*
    public function tren()
    {
        $periode = $this->input->get('periode');
        $tahun = $this->input->get('tahun');
        $anon=$tahun+($periode-1);
        for($j=$tahun; $j <= $anon; $j++) {
            $an[]=$j;
        }




        $data['tabel']=$this->Berita_model->select_trend_apbdd($an);
        $er=$this->db->last_query();
        echo $er;
        $this->load->view('layouts/header');
        $this->load->view('tren',$data);
        $this->load->view('layouts/footer');
    }
*/
    public function tren()
    {
        $periode = $this->input->get('periode');
        $tahun = $this->input->get('tahun');
        $anon=$tahun+($periode-1);
        for($j=$tahun; $j <= $anon; $j++) {
            $an[]=$j;
        }

        $data['tahun_awal']=$tahun;
        $data['tahun_akhir']=$anon;

        $utama=0;

        /*
        $data['tabel']=$this->Berita_model->select_trend_apbdd($an);
        */
        $data['uraian_parent']=$this->Berita_model->select_uraian_parent($an,$periode,$utama);
        $data['batang']=$this->Berita_model->select_batang_pendapatan($an,$periode,$utama);


        //LEVEL 2
        $level2_pendapatan=4;
        $data['uraian_parent_level2']=$this->Berita_model->select_uraian_parent($an,$periode,$level2_pendapatan);
        $data['batang_level2']=$this->Berita_model->select_batang_pendapatan($an,$periode,$level2_pendapatan);

        //LEVEL 2 BELANJA

        //LEVEL 2
        $level2_belanja=5;
        $data['uraian_parent_level_5']=$this->Berita_model->select_uraian_parent($an,$periode,$level2_belanja);
        $data['batang_level2_5']=$this->Berita_model->select_batang_pendapatan($an,$periode,$level2_belanja);

        $this->load->view('layouts/header2');
        $this->load->view('tren1',$data);
        $this->load->view('layouts/footer2');
    }


}
