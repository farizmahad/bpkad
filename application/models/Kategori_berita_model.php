 <?php
Class Kategori_berita_model extends CI_Model
{

 
  function select_kategori_berita($val=""){
$this->db->select('*');
    $this->db->from('kategori_berita');
    if($val){
        $this->db->where('id_kategori_berita', $val);
    }
    return $this->db->get()->result();
	}


   function select_kategori_berita_limit($limit,$offset){
    $this->db->select('*');
    $this->db->from('kategori_berita');
    $this->db->limit($limit,$offset);
    return $this->db->get()->result();
  }

   function select_kategori_berita_all(){
$this->db->select('*');
    $this->db->from('kategori_berita');
   
    return $this->db->get()->result();
  }

 function insert_kategori($nama_kategori){

    $this->db->set('kategori',$nama_kategori);
    $this->db->insert('kategori_berita');
  }


  function update_kategori($id,$nama_kategori)
  {

    $this->kategori =  $nama_kategori;
    $this->db->update('kategori_berita', $this, array('id_kategori_berita' => $id)); 
  }


  function delete_kategori($ID)
  {
  $this->db->where('id_kategori_berita', $ID);
    $this->db->delete('kategori_berita');
  }
    function delete_laporan($ID)
    {
        $this->db->where('id_laporan', $ID);
        $this->db->delete('laporan');
    }



    function count_kategori_berita(){
    $this->db->select('*');
    $this->db->from('kategori_berita');
    return $this->db->get()->num_rows();
  }


    function insert_laporan($nama_laporan,$url){

        $this->db->set('nama_laporan',$nama_laporan);
        $this->db->set('url',$url);
        $this->db->insert('laporan');
    }

    function update_laporan($id,$nama_laporan,$url)
    {

        $this->nama_laporan=  $nama_laporan;
        $this->url=  $url;
        $this->db->update('laporan', $this, array('id_laporan' => $id));
    }

 
        
}