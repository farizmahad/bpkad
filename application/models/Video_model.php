 <?php
Class Video_model extends CI_Model
{

 function select_video($limit,$offset){

  $this->db->select('*');
  $this->db->from('video_home');
  $this->db->limit($limit,$offset);
  return $this->db->get()->result();   
  }

  function select_video_youtube(){

  $this->db->select('*');
  $this->db->from('video_home');
  return $this->db->get()->result();   
  }

 function update_video($id_video,$judul,$url,$tanggal,$deskripsi){

   $this->db->set('judul',$judul);
   $this->db->set('url',$url);
   $this->db->set('tanggal',$tanggal);
   $this->db->set('deskripsi',$deskripsi);
   $this->db->where('id_video',$id_video);
   $this->db->update('video_home');
  }

  function simpan_video($url,$judul,$deskripsi,$tanggal){
 
   $this->db->set('judul',$judul);
   $this->db->set('url',$url);
   $this->db->set('tanggal',$tanggal);
   $this->db->set('deskripsi',$deskripsi);
   $this->db->set('status',1);
   $this->db->insert('video_home');
  }


  function count_video(){
    $this->db->select('*');
    $this->db->from('video_home');
    return $this->db->get()->num_rows();
  }


  function select_video_per_id($id){

  $this->db->select('*');
  $this->db->from('video_home');
   $this->db->where('id_video',$id);
  return $this->db->get()->result();   
  }


  function delete_video($id){

      $this->db->where('id_video',$id);
      $this->db->delete('video_home');
     }


     function update_status_aktif($id,$status){
      $this->db->set('status',$status);
      $this->db->where('id_video',$id);
      $this->db->update('video_home');
  }

  function select_video_val($val=""){
$this->db->select('*');
    $this->db->from('video_home');
    if($val){
        $this->db->where('id_video', $val);
    }
    return $this->db->get()->result();
  }



        
}