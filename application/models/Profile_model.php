 <?php
Class Profile_model extends CI_Model
{

 
  function select_profile(){
		$this->db->select('*');
		$this->db->from('profile');
		return $this->db->get()->result();
	}


 function update_profile($profile_singkat="",$visi="",$misi="",$id_profile)
  {
    if($profile_singkat){
    $this->profile =  $profile_singkat;
    }elseif($visi){
    $this->visi =  $visi;
    }elseif($misi){
    $this->misi =  $misi;
    }
    $this->db->update('profile', $this, array('id' => $id_profile)); 
  }


  function insert_tugas($nama_kategori){

    $this->db->set('jabatan',$nama_kategori);
    $this->db->insert('jabatan');
  }

 
function select_tugas(){
    $this->db->select('*');
    $this->db->from('jabatan,fungsi');
     $this->db->where('jabatan.id_jabatan = fungsi.id_jabatan');
    return $this->db->get()->result();
  }



  function update_tugas($id_jabatan,$jabatan)
  {
       $this->jabatan =  $jabatan;
    
   
    
    $this->db->update('jabatan', $this, array('id_jabatan' => $id_jabatan)); 
  }


  function delete_tugas($ID)
  {
  $this->db->where('id_jabatan', $ID);
    $this->db->delete('jabatan');
  }


  function insert_fungsi($tugas,$uraian,$fungsi,$id_jabatan){

    $this->db->set('tugas',$tugas);
    $this->db->set('uraian',$uraian);
 $this->db->set('fungsi',$fungsi);
$this->db->set('id_jabatan',$id_jabatan);


    $this->db->insert('fungsi');
  }


  function select_fungsi_id($id){
    $this->db->select('*');
    $this->db->from('fungsi');
    $this->db->where('id_fungsi', $id);
    return $this->db->get()->result();
  }


  function select_option_tugas(){
    $this->db->select('*');
    $this->db->from('jabatan');
    return $this->db->get()->result();
  }


  function update_fungsi($tugas,$uraian,$fungsi,$id)
  {
       $this->tugas =  $tugas;
        $this->uraian =  $uraian;
        $this->fungsi =  $fungsi;
            
    
   
    
    $this->db->update('fungsi', $this, array('id_fungsi' => $id)); 
  }


  function delete_user($ID)
  {
  $this->db->where('id', $ID);
    $this->db->delete('users');
  }


        
}