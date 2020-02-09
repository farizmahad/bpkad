 <?php
Class Front_kontak_model extends CI_Model
{

 
   function insert_kontak($nama,$email,$judul,$pesan)  {    

   $date  = date('Y-m-d H:i:s');                                                                        
    $this->db->set('nama',$nama);
    $this->db->set('email',$email);
    $this->db->set('judul',$judul);
    $this->db->set('pesan',$pesan);
 $this->db->set('tanggal',$date);
    $this->db->insert('kontak');
  }



        
}