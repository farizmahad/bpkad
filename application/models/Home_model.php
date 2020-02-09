 <?php
Class Home_model extends CI_Model
{




  function select_slider(){
		$this->db->select('*');
		$this->db->from('slider_home');
		$this->db->where('status','1');
		return $this->db->get()->result();
	}



        
}