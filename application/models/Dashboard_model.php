 <?php
Class Dashboard_model extends CI_Model
{

    function select_komentar_belum_baca(){

    $this->db->select('berita_komentar.id_komentar,berita_komentar.id_berita,berita_komentar.nama,berita_komentar.email,berita_komentar.komentar,berita.title,berita_komentar.id_berita,berita_komentar.status_dibalas,berita_komentar.tanggal');
$this->db->from('berita_komentar');
$this->db->join('berita','berita_komentar.id_berita = berita.id_berita');
$this->db->where('status_dibalas','1');

return $this->db->get()->result();
}

}