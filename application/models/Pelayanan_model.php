 <?php
Class Pelayanan_model extends CI_Model
{

 
 function insert_pelayanan($pelayanan,$judul_pelayanan,$jenis){

    $tgl=date('Y-m-d');
    $this->db->set('pelayanan',$judul_pelayanan);
    $this->db->set('desc_pelayanan',$pelayanan);
        $this->db->set('tgl',$tgl);
        $this->db->set('jenis',$jenis);

    $this->db->insert('pelayanan');
  }
 
function select_pelayanan($val=""){
$this->db->select('*');
    $this->db->from('pelayanan');

    if($val){
       $this->db->where('id_pelayanan', $val);
    }
   
    return $this->db->get()->result();
  }


  function select_pelayanan_all(){
$this->db->select('*');
    $this->db->from('pelayanan');

    
   
    return $this->db->get()->result();
  }


   function update_pelayanan($id,$nama_pelayanan,$judul_pelayanan,$jenis)
  {

    $this->pelayanan =  $judul_pelayanan;
    $this->desc_pelayanan =  $nama_pelayanan;
    $this->jenis =  $jenis;
    $this->db->update('pelayanan', $this, array('id_pelayanan' => $id)); 
  }


function delete_pelayanan($ID)
  {
  $this->db->where('id_pelayanan', $ID);
    $this->db->delete('pelayanan');  
  }


  function update_status_pelayanan($id,$status){
      $this->db->set('status',$status);
      $this->db->where('id_pelayanan',$id);
      $this->db->update('pelayanan');
  }


  function count_pelayanan($id_pelayanan){
    $this->db->select('*');
    $this->db->from('pelayanan');
    $this->db->where('id_pelayanan',$id_pelayanan);
    return $this->db->get()->num_rows();
  }


  function select_sub_pelayanan($id_pelayanan,$limit="",$offset=""){

    

$this->db->select('sub_pelayanan.id_pelayanan,sub_pelayanan.id_sub,sub_pelayanan.judul_sub_pelayanan,sub_pelayanan.desc_sub_pelayanan,sub_pelayanan.tgl,sub_pelayanan.status,pelayanan.pelayanan as judul_pelayanan');
    $this->db->from('sub_pelayanan,pelayanan');
$this->db->where('sub_pelayanan.id_pelayanan=pelayanan.id_pelayanan');
      $this->db->where('sub_pelayanan.id_pelayanan',$id_pelayanan);
      if($limit){
      $this->db->limit($limit,$offset);
   }
    return $this->db->get()->result();
  }



   function select_sub_pelayanan_val($id_pelayanan,$val){

    

$this->db->select('sub_pelayanan.id_pelayanan,sub_pelayanan.id_sub,sub_pelayanan.judul_sub_pelayanan,sub_pelayanan.desc_sub_pelayanan,sub_pelayanan.tgl,sub_pelayanan.status,pelayanan.pelayanan as judul_pelayanan');
    $this->db->from('sub_pelayanan,pelayanan');
$this->db->where('sub_pelayanan.id_pelayanan=pelayanan.id_pelayanan');
      $this->db->where('sub_pelayanan.id_pelayanan',$id_pelayanan);
     $this->db->where('sub_pelayanan.id_sub',$val);
    return $this->db->get()->result();
  }


  function select_judul($id_pelayanan){

    

$this->db->select('pelayanan');
    $this->db->from('pelayanan');
    $this->db->where('id_pelayanan',$id_pelayanan);
    return $this->db->get()->result();
  }


   function insert_sub_pelayanan($id_pelayanan,$judul_sub_pelayanan,$desc_sub_pelayanan){

    $tgl=date('Y-m-d');
    $this->db->set('id_pelayanan',$id_pelayanan);
  $this->db->set('judul_sub_pelayanan',$judul_sub_pelayanan);

    $this->db->set('desc_sub_pelayanan',$desc_sub_pelayanan);
        $this->db->set('tgl',$tgl);
$this->db->set('status',1);
    $this->db->insert('sub_pelayanan');
  }


   function update_sub_pelayanan($id,$id_pelayanan,$judul_sub_pelayanan,$desc_sub_pelayanan)
  {

    $this->id_pelayanan =  $id_pelayanan;
    $this->judul_sub_pelayanan =  $judul_sub_pelayanan;
    $this->desc_sub_pelayanan =  $desc_sub_pelayanan;
    $this->db->update('sub_pelayanan', $this, array('id_sub' => $id)); 
  }

  function delete_sub_pelayanan($ID)
  {
  $this->db->where('id_sub', $ID);
    $this->db->delete('sub_pelayanan');  
  }


  function update_status_sub_pelayanan($id,$status){
      $this->db->set('status',$status);
      $this->db->where('id_sub',$id);
      $this->db->update('sub_pelayanan');
  }

        
}