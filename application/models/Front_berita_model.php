 <?php
Class Front_berita_model extends CI_Model
{


    function select_laporan(){
        $this->db->select('*');
        $this->db->from('laporan');
        $this->db->where('status','1');
        return $this->db->get()->result();
    }

    function cek_id_laporan($url){
        $this->db->select('*');
        $this->db->from('laporan');
        $this->db->where('url',$url);
        return $this->db->get()->result();
    }


    function file_laporan($id_laporan){
        $this->db->select('*');
        $this->db->from('file_laporan');
        $this->db->where('id_laporan',$id_laporan);
        return $this->db->get()->result();
    }

    function select_apbd_murni(){
        $this->db->select('*');
        $this->db->from('agenda');
        $this->db->where('id_agenda','1');
        return $this->db->get()->result();
    }

    function select_berita_publish(){
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->join('users','users.id= berita.id_users');
        $this->db->where('status_publish','1');
        return $this->db->get()->result();
    }


    function select_perubahan_apbd(){
        $this->db->select('*');
        $this->db->from('agenda');
        $this->db->where('id_agenda','2');
        return $this->db->get()->result();
    }

    function select_video(){
        $this->db->select('*');
        $this->db->from('video_home');

        return $this->db->get()->result();
    }

    function select_sop(){
        $this->db->select('*');
        $this->db->from('sop');
        return $this->db->get()->result();
    }

    function select_detail_berita($id){
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->join('users','users.id= berita.id_users');
        $this->db->where('id_berita',$id);

        return $this->db->get()->result();
    }

    function select_komentar($id){
        $this->db->select('*');
        $this->db->from('berita_komentar');
        $this->db->where('id_berita',$id);

        return $this->db->get()->result();
    }


    function insert_komentar($tanggal_komentar,$id_berita,$nama,$email,$komentar){

        $this->db->set('id_berita',$id_berita);
        $this->db->set('nama',$nama);
        $this->db->set('email',$email);
        $this->db->set('komentar',$komentar);
        $this->db->set('tanggal',$tanggal_komentar);
        $this->db->insert('berita_komentar');
    }

    function select_timeline(){
        $this->db->select('id,tanggal_event, agenda as tf,sampai_tanggal,keterangan');
        $this->db->from('timeline');
        return $this->db->get()->result();
    }

    function select_berita_random(){
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->join('users','users.id= berita.id_users');
        return $this->db->get()->result();
    }

     function select_pendapatan_tahunan($tahun,$var,$type=""){

         $this->db->select('*');
         $this->db->from('perubahan_apbd');
         $this->db->where('tahun',$tahun);
         $this->db->where('SUBSTR(nomor_urut,1,3)', $var);

          if($type) {
              $this->db->where('status', $type);
          }

         return $this->db->get()->result();
     }

    function select_distinct_5($tahun){

        $this->db->distinct();
        $this->db->select('SUBSTRING(nomor_urut, 1, 3) as no_urut', FALSE);

        $this->db->from('perubahan_apbd');
        $this->db->where('tahun',$tahun);

        return $this->db->get()->result();
    }



}