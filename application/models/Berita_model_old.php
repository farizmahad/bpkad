 <?php
Class Berita_model extends CI_Model
{

 
  function select_berita($limit,$offset){
		$this->db->select('berita.id_berita,berita.title,berita.isi,berita.status_publish,berita.tanggal_post,users.first_name,users.last_name');
		$this->db->from('berita , users');
    $this->db->where('users.id = berita.id_users');
		$this->db->limit($limit,$offset);
		return $this->db->get()->result();
	}


 function select_berita_per_id($id_berita){
		$this->db->select('*');
		$this->db->from('berita');
    $this->db->where('id_berita',$id_berita);
		return $this->db->get()->result();
	}


  function select_kategori_berita_per_id($id_berita){
    $this->db->select('id_kategori_berita');
    $this->db->from('detail_berita_category');
    $this->db->where('id_berita',$id_berita);
    return $this->db->get()->result();
  }

  function count_berita(){
		$this->db->select('berita.id_berita,berita.title,berita.isi,berita.status_publish,berita.tanggal_post,users.first_name,users.last_name');
		$this->db->from('berita , users');
    $this->db->where('users.id = berita.id_users');
		return $this->db->get()->num_rows();
	}

  function select_kategori_berita(){
    $this->db->select('*');
    $this->db->from('kategori_berita');
    return $this->db->get()->result();
  }

   function insert_berita($title,$isi,$status_publish,$tgl_post,$foto,$ID){

    $this->db->set('title',$title);
    $this->db->set('isi',$isi);
    $this->db->set('status_publish',$status_publish);
    $this->db->set('tanggal_post',$tgl_post);
    $this->db->set('featured_image',$foto);
    $this->db->set('id_users',$ID);

    $this->db->insert('berita');
  }


   function update_berita($title,$isi,$status_publish,$tgl_post,$id_berita,$ID){

    $this->db->set('title',$title);
    $this->db->set('isi',$isi);
    $this->db->set('status_publish',$status_publish);
    $this->db->set('tanggal_post',$tgl_post);
    $this->db->set('id_users',$ID);
    $this->db->where('id_berita',$id_berita);
    $this->db->update('berita');
  }


   function delete_detail_category($id_berita)
  {
  $this->db->where('id_berita', $id_berita);
    $this->db->delete('detail_berita_category');  
  }

  function get_update($data,$where){
       $this->db->where($where);
       $this->db->update('berita', $data);
       return TRUE;
    }

    function select_kategori_per_id($id_berita){
    $this->db->select('kategori_berita.kategori');
    $this->db->from('detail_berita_category,kategori_berita');
    $this->db->where('kategori_berita.id_kategori_berita = detail_berita_category.id_kategori_berita');
    $this->db->where('id_berita',$id_berita);
    return $this->db->get()->result();
  }


  function delete_berita($id){

      $this->db->where('id_berita',$id);
      $this->db->delete('berita');
     }


      function search_forum_private($title){
        $this->db->like('title', $title , 'both');

        $this->db->order_by('title', 'ASC');
      
        
        return $this->db->get('berita')->result();
    }


     function select_berita_parameter($daterange,$kategori="",$title=""){
    $this->db->select('berita.id_berita,berita.title,berita.isi,berita.status_publish,berita.tanggal_post,users.first_name,users.last_name');
    $this->db->from('berita , users,detail_berita_category');
    $this->db->where('users.id = berita.id_users');
    $this->db->where('berita.id_berita = detail_berita_category.id_berita');


    if($daterange and $kategori=="" and $title==""){

      $tanggal = explode(" - ",$daterange);
      $dari = str_replace('/', '-', $tanggal[0]);
      $sampai = str_replace('/', '-', $tanggal[1]);
          
      $this->db->where("DATE(tanggal_post) >=", $dari);
      $this->db->where("DATE(tanggal_post)<=", $sampai);
    }elseif($kategori and $title=="" and $daterange==""){
      $this->db->where('detail_berita_category.id_kategori_berita', $kategori);
    }elseif($kategori=="" and $title and $daterange==""){
$this->db->like('berita.title', $title, 'both');
      

    }elseif($daterange and $kategori and $title==""){
      $tanggal = explode(" - ",$daterange);
      $dari = str_replace('/', '-', $tanggal[0]);
      $sampai = str_replace('/', '-', $tanggal[1]);
 $this->db->where("DATE(tanggal_post) >=", $dari);
      $this->db->where("DATE(tanggal_post)<=", $sampai);
      $this->db->where('detail_berita_category.id_kategori_berita', $kategori);
    }elseif($daterange and $title and $kategori==""){
      $tanggal = explode(" - ",$daterange);
      $dari = str_replace('/', '-', $tanggal[0]);
      $sampai = str_replace('/', '-', $tanggal[1]);
$this->db->where("DATE(tanggal_post) >=", $dari);
      $this->db->where("DATE(tanggal_post)<=", $sampai);
      $this->db->like('berita.title', $title, 'both');

    }elseif($daterange=="" and $title and $kategori){
$this->db->where('detail_berita_category.id_kategori_berita', $kategori);
       $this->db->like('berita.title', $title, 'both');
    }elseif($daterange and $title and $kategori){
      $tanggal = explode(" - ",$daterange);
      $dari = str_replace('/', '-', $tanggal[0]);
      $sampai = str_replace('/', '-', $tanggal[1]);
$this->db->where("DATE(tanggal_post) >=", $dari);
      $this->db->where("DATE(tanggal_post)<=", $sampai);
      $this->db->like('berita.title', $title, 'both');
      $this->db->where('detail_berita_category.id_kategori_berita', $kategori);
    }

    $this->db->group_by('berita.id_berita');
    return $this->db->get()->result();
  }


  function update_status_publish($id,$status){
      $this->db->set('status_publish',$status);
      $this->db->where('id_berita',$id);
      $this->db->update('berita');
  }


  function select_komentar($id_berita){
    $this->db->select('*');
    $this->db->from('berita_komentar');
    $this->db->where('id_berita',$id_berita);
    return $this->db->get()->result();
  }



        
}