 <?php
Class Galeri_model extends CI_Model
{

 function insert_image($fileName,$url){
    $today=date('Y-m-d');
    $this->db->set('gambar', $fileName);
    $this->db->set('tgl_upload', $today);
    $this->db->set('status', 1);
     $this->db->set('url', $url);
    $this->db->insert('galeri_home');   
  }

   function select_galeri($limit,$offset){
    $this->db->select('*');
    $this->db->from('galeri_home');
    $this->db->limit($limit,$offset);
    return $this->db->get()->result();
  }

  function total_select_galeri(){
    $this->db->select('*');
    $this->db->from('galeri_home');
    return $this->db->get()->num_rows();
  }

function delete_galeri($id){

      $this->db->where('id_galeri',$id);
      $this->db->delete('galeri_home');
     }

 function update_status_galeri($id,$status){
      $this->db->set('status',$status);
      $this->db->where('id_galeri',$id);
      $this->db->update('galeri_home');
  }

   function get_update($data,$where){

    $this->db->where($where);
    $this->db->update('galeri_home', $data);
    return TRUE;
  }

  
}