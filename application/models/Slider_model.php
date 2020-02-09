 <?php
Class Slider_model extends CI_Model
{

 function insert_image($fileName){

      $this->db->set('gambar', $fileName);
$this->db->set('status', '0');

      $this->db->insert('slider_home');


      
  }


  function select_slider_home($limit,$offset){
		$this->db->select('*');
		$this->db->from('slider_home');
		$this->db->limit($limit,$offset);
		return $this->db->get()->result();
	}

   function select_slider_val($val){
    $this->db->select('*');
    $this->db->from('slider_home');
    $this->db->where('id',$val);
    return $this->db->get()->result();
  }

function select_slider_home_all(){
    $this->db->select('*');
    $this->db->from('slider_home');
    
    return $this->db->get()->result();
  }

	function delete_slider($id){

    	$this->db->where('id',$id);
    	$this->db->delete('slider_home');
     }


      function update_status_aktif($id,$status){
      $this->db->set('status',$status);
      $this->db->where('id',$id);
      $this->db->update('slider_home');
  }


   function get_update($data,$where){

    $this->db->where($where);
    $this->db->update('slider_home', $data);
    return TRUE;
  }


  function count_slider(){
		$this->db->select('*');
		$this->db->from('slider_home');
		return $this->db->get()->num_rows();
	}



    function update_judul($url,$id){
       $this->db->set('judul',$url);
      $this->db->where('id',$id);
      $this->db->update('slider_home');
  }
        
}