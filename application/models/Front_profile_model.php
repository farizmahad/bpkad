 <?php
Class Front_profile_model extends CI_Model
{

   function select_visi(){
	  $this->db->select('*');
	  $this->db->from('profile');
	  return $this->db->get()->result();
	}

	function select_tugas_fungsi(){
	 $this->db->select('fungsi.id_fungsi,fungsi.id_jabatan,fungsi.tugas,fungsi.fungsi,fungsi.uraian,jabatan.jabatan');
    $this->db->from('fungsi,jabatan');
    $this->db->where('fungsi.id_jabatan = jabatan.id_jabatan');
    return $this->db->get()->result();
	}

    function select_laporan_keuangan(){
        $this->db->select('*');
        $this->db->from('informasi_keuangan');
        return $this->db->get()->result();
    }

    function select_informasi_aset(){
        $this->db->select('*');
        $this->db->from('file_laporan');
        $this->db->where('id_laporan = 1');
        return $this->db->get()->result();
    }


	



        
}