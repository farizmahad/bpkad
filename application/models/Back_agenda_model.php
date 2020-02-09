 <?php
Class Back_agenda_model extends CI_Model
{


    function insert_agenda($keterangan,$tanggal_event,$agenda,$sampai_tanggal){

        $this->db->set('tanggal_event',$tanggal_event);
        $this->db->set('agenda',$agenda);
        $this->db->set('keterangan',$keterangan);
        $this->db->set('sampai_tanggal',$sampai_tanggal);
        $this->db->insert('timeline');
    }



   function update_agenda($keterangan,$tanggal_event,$agenda,$sampai_tanggal,$id){

       $this->db->set('tanggal_event',$tanggal_event);
       $this->db->set('agenda',$agenda);
       $this->db->set('keterangan',$keterangan);
       $this->db->set('sampai_tanggal',$sampai_tanggal);
$this->db->where('id',$id);
    $this->db->update('timeline');
  }



   function select_agenda_today($daterange="",$filter=""){
    $today=date('Y-m-d');
    $this->db->select('*');
    $this->db->from('timeline');
    if(!$daterange and !$filter){
    $this->db->where('DATE(tanggal_event)',$today);
    }elseif(!$daterange and $filter){

    	$this->db->like('agenda', $filter, 'both') ; 
    }elseif($daterange and !$filter){

			$tanggal = explode(" - ",$daterange);
			$dari = str_replace('/', '-', $tanggal[0]);
			$sampai = str_replace('/', '-', $tanggal[1]);

			 $this->db->where('DATE(tanggal_event) >=', $dari);
		    $this->db->where('DATE(tanggal_event) <=', $sampai);
    }elseif($daterange and $filter){
$tanggal = explode(" - ",$daterange);
			$dari = str_replace('/', '-', $tanggal[0]);
			$sampai = str_replace('/', '-', $tanggal[1]);

			 $this->db->where('DATE(tanggal_event) >=', $dari);
		    $this->db->where('DATE(tanggal_event) <=', $sampai);
		    $this->db->like('agenda', $filter, 'both') ; 

    }
    return $this->db->get()->result();
  }



  function delete_agenda($ID)
  {
	$this->db->where('id', $ID);
    $this->db->delete('timeline');
  }
        
}