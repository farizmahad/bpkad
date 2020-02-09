 <?php
Class Front_Home_model extends CI_Model
{



    function select_slider(){
        $this->db->select('*');
        $this->db->from('slider_home');
        $this->db->where('status','1');
        return $this->db->get()->result();
    }

    function select_profile_singkat(){
        $this->db->select('*');
        $this->db->from('profile');
        return $this->db->get()->result();
    }


    function select_video_utama(){
        $this->db->select('*');
        $this->db->from('video_home');
        $this->db->where('status','0');
        $this->db->limit(1);
        $this->db->order_by('id_video','ASC');
        return $this->db->get()->result();
    }

    function select_video_next(){
        $this->db->select('*');
        $this->db->from('video_home');
        $this->db->where('status','0');
        $this->db->order_by('id_video','ASC');
        return $this->db->get()->result();
    }


    function select_video_bel(){
        $this->db->select('*');
        $this->db->from('video_home');
        $this->db->where('status','0');
        $this->db->order_by('id_video','DESC');
        $this->db->limit(2);
        return $this->db->get()->result();
    }


    function select_berita_utama(){
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->join('users','users.id = berita.id_users');
        $this->db->where('status_publish','1');
        $this->db->limit(3);
        $this->db->order_by('DATE(tanggal_post)','DESC');
        return $this->db->get()->result();
    }


    function select_berita_lainya(){
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->join('users','users.id = berita.id_users');
        $this->db->where('status_publish','1');
        $this->db->limit(8);
        $this->db->order_by('id_berita)','RANDOM');
        return $this->db->get()->result();
    }


    function select_berita_random(){
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->join('users','users.id = berita.id_users');
        $this->db->where('status_publish','1');
        $this->db->limit(2);
        $this->db->order_by('id_berita)','RANDOM');
        return $this->db->get()->result();
    }



    function detail_kategori($id){
        $this->db->select('*');
        $this->db->from('detail_berita_category');
        $this->db->join('kategori_berita','kategori_berita.id_kategori_berita = detail_berita_category.id_kategori_berita');
        $this->db->where('id_berita',$id);
        $this->db->limit(1);
        $this->db->group_by('detail_berita_category.id_kategori_berita');
        return $this->db->get()->result();
    }


    function select_profile(){
        $this->db->select('profile');
        $this->db->from('profile');
        return $this->db->get()->result();
    }








}