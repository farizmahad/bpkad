 <?php
Class Kontak_model extends CI_Model
{

 
   function select_kontak($limit,$offset){
		$this->db->select('*');
		$this->db->from('kontak');
		$this->db->limit($limit,$offset);
		return $this->db->get()->result();
	}

   function count_kontak(){
		$this->db->select('*');
		$this->db->from('kontak');
		return $this->db->get()->num_rows();
	}


	function select_kontak_filter($daterange="",$filter=""){
		$this->db->select('*');
		$this->db->from('kontak');
		

		if($daterange and !$filter){

			$tanggal = explode(" - ",$daterange);
			$dari = str_replace('/', '-', $tanggal[0]);
			$sampai = str_replace('/', '-', $tanggal[1]);
            $this->db->where('DATE(tanggal) >=', $dari);
		    $this->db->where('DATE(tanggal) <=', $sampai);


		}elseif($filter and !$daterange){

			$this->db->group_start();

			$this->db->like('nama', $filter);
            $this->db->or_like('email', $filter);
            $this->db->or_like('judul', $filter);
            $this->db->group_end();



		}elseif($filter and $daterange){
            $tanggal = explode(" - ",$daterange);
			$dari = str_replace('/', '-', $tanggal[0]);
			$sampai = str_replace('/', '-', $tanggal[1]);
            $this->db->where('DATE(tanggal) >=', $dari);
		    $this->db->where('DATE(tanggal) <=', $sampai);
$this->db->group_start();

			$this->db->like('nama', $filter);
            $this->db->or_like('email', $filter);
            $this->db->or_like('judul', $filter);
            $this->db->group_end();



		}
		return $this->db->get()->result();
	}



	 function delete_kontak($ID)
  {
  $this->db->where('id', $ID);
    $this->db->delete('kontak');
  }


    function detail_kontakk($id_kontak){
        $this->db->select('*');
        $this->db->from('kontak');
        $this->db->where('kontak.id', $id_kontak);
        return $this->db->get()->result();
    }


    function detail_kontak($id_kontak){
		$this->db->select('kontak.id as id_kontak,kontak.nama,kontak.email,kontak.judul,kontak.pesan as pesan_kontak,kontak.tanggal,kontak.status_dibalas,detail_kontak.id as id_detail , detail_kontak.pesan as pesan_balasan');
		$this->db->from('kontak,detail_kontak');
        $this->db->where('kontak.id', 'detail_kontak.id_kontak');
		$this->db->where('kontak.id', $id_kontak);
		return $this->db->get()->result();
	}

function insert_detail_kontak($id_kontak,$balasan){

    $this->db->set('id_kontak',$id_kontak);
    $this->db->set('pesan',$balasan);
    $this->db->insert('detail_kontak');
  }


  function update_status_balas($id_kontak)
  {

    $this->status_dibalas =  0;
    $this->db->update('kontak', $this, array('id' => $id_kontak)); 
  }


  //select kontak belum di balas //

    function select_kontak_belum_dibalas(){
        $this->db->select('*');
        $this->db->from('kontak');
        $this->db->where('status_dibalas', 1);
        return $this->db->get()->result();
    }
        
}