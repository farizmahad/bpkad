 <?php
Class Front_pelayanan_model extends CI_Model
{

   function select_standar($jenis){
	  $this->db->select('*');
	  $this->db->from('pelayanan');
      $this->db->where('jenis',$jenis);
	  return $this->db->get()->result();
	}

    function select_produk_hukum($id){
        $this->db->select('*');
        $this->db->from('detail_produk_hukum');
        $this->db->where('id_produk_hukum',$id);
        return $this->db->get()->result();
    }

    function select_pelayanan_detail($id){
        $this->db->select('*');
        $this->db->from('sub_pelayanan');
        $this->db->where('id_pelayanan',$id);
        return $this->db->get()->result();
    }

    function pelayanan($id){
        $this->db->select('*');
        $this->db->from('pelayanan');
        $this->db->where('id_pelayanan',$id);
        return $this->db->get()->result();
    }






}