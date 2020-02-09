 <?php
Class Keuangan_model extends CI_Model
{

    function insert_jenis_epd($jenis_sumber){

    $this->db->set('alokasi',$jenis_sumber);
    $this->db->insert('alokasi_estimasi_pendapatan_daerah');
  }

   function update_jenis_epd($id,$jenis_sumber)
  {

    $this->alokasi =  $jenis_sumber;
    $this->db->update('alokasi_estimasi_pendapatan_daerah', $this, array('id' => $id)); 
  }


  function select_epd(){

    $this->db->select('*');
    $this->db->from('alokasi_estimasi_pendapatan_daerah');
    return $this->db->get()->result();
  }

  function insert_epd($tahun,$id_alokasi,$jumlah){

    $this->db->set('tahun',$tahun);
    $this->db->set('id_alokasi',$id_alokasi);
    $this->db->set('jumlah',$jumlah);
    $this->db->insert('estimasi_pendapatan');
  }

  function update_epd($tahun,$id_alokasi,$jumlah,$id){

    $this->db->set('tahun',$tahun);
    $this->db->set('id_alokasi',$id_alokasi);
    $this->db->set('jumlah',$jumlah);
    $this->db->where('id',$id);
    $this->db->update('estimasi_pendapatan');
  }




   function select_estimasi(){

    $this->db->select('estimasi_pendapatan.id,estimasi_pendapatan.tahun,estimasi_pendapatan.jumlah,estimasi_pendapatan.jenis,alokasi_estimasi_pendapatan_daerah.alokasi,estimasi_pendapatan.id_alokasi');
    $this->db->from('estimasi_pendapatan,alokasi_estimasi_pendapatan_daerah');
    $this->db->where('estimasi_pendapatan.id_alokasi = alokasi_estimasi_pendapatan_daerah.id');
    return $this->db->get()->result();
  }


 function delete_jenis_epd($id)
  {
  $this->db->where('id', $id);
    $this->db->delete('alokasi_estimasi_pendapatan_daerah');  
  }


 function delete_epd($id)
  {
  $this->db->where('id', $id);
    $this->db->delete('estimasi_pendapatan');  
  }



   function select_jenis_rbd(){

    $this->db->select('*');
    $this->db->from('jenis_rbd');
    return $this->db->get()->result();
  }


  function select_rbd(){

    $this->db->select('rbd.id_rbd,rbd.id_jenis_rbd,rbd.tahun,rbd.jumlah,jenis_rbd.jenis');
    $this->db->from('rbd,jenis_rbd');
    $this->db->where('rbd.id_jenis_rbd = jenis_rbd.id_jenis_rbd');
    return $this->db->get()->result();
  }


    function insert_jenis_rbd($jenis_sumber){

    $this->db->set('jenis',$jenis_sumber);
    $this->db->insert('jenis_rbd');
  }



   function update_jenis_rbd($id,$jenis_sumber)
  {

    $this->jenis =  $jenis_sumber;
    $this->db->update('jenis_rbd', $this, array('id_jenis_rbd' => $id)); 
  }


  function delete_jenis_rbd($id)
  {
  $this->db->where('id_jenis_rbd', $id);
    $this->db->delete('jenis_rbd');  
  }


  function insert_rbd($tahun,$id_jenis_rbd,$jumlah){

    $this->db->set('tahun',$tahun);
    $this->db->set('id_jenis_rbd',$id_jenis_rbd);
    $this->db->set('jumlah',$jumlah);
    $this->db->insert('rbd');
  }

function update_rbd($tahun,$id_alokasi,$jumlah,$id){

    $this->db->set('tahun',$tahun);
    $this->db->set('id_jenis_rbd',$id_alokasi);
    $this->db->set('jumlah',$jumlah);
    $this->db->where('id_rbd',$id);
    $this->db->update('rbd');
  }
        

         function delete_rbd($id)
  {
  $this->db->where('id_rbd', $id);
    $this->db->delete('rbd');  
  }




   function select_jenis_apbd(){

    $this->db->select('*');
    $this->db->from('jenis_apbd');
    return $this->db->get()->result();
  }


  function select_apbd(){

    $this->db->select('apbd.id_apbd,apbd.id_jenis_apbd,apbd.tahun,apbd.jumlah,apbd.persen,jenis_apbd.jenis');
    $this->db->from('apbd,jenis_apbd');
    $this->db->where('apbd.id_jenis_apbd = jenis_apbd.id_jenis_apbd');
    return $this->db->get()->result();
  }


      function insert_jenis_apbd($jenis_sumber){

    $this->db->set('jenis',$jenis_sumber);
    $this->db->insert('jenis_apbd');
  }

function update_jenis_apbd($id,$jenis){

    $this->db->set('jenis',$jenis);
    $this->db->where('id_jenis_apbd',$id);
    $this->db->update('jenis_apbd');
  }


  function delete_jenis_apbd($id)
  {
  $this->db->where('id_jenis_apbd', $id);
    $this->db->delete('jenis_apbd');  
  }


  function insert_apbd($tahun,$id_jenis_rbd,$jumlah){

    $this->db->set('tahun',$tahun);
    $this->db->set('id_jenis_apbd',$id_jenis_rbd);
    $this->db->set('jumlah',$jumlah);
    $this->db->insert('apbd');
  }


  function update_apbd($tahun,$id_jenis_apbd,$jumlah,$id){

    $this->db->set('tahun',$tahun);
    $this->db->set('id_jenis_apbd',$id_jenis_apbd);
    $this->db->set('jumlah',$jumlah);
    $this->db->where('id_apbd',$id);
    $this->db->update('apbd');
  }


  function delete_apbd($id)
  {
  $this->db->where('id_apbd', $id);
    $this->db->delete('apbd');  
  }

  function select_grafik($tahun){
$this->db->select('*');
   
      

        $this->db->where('id_alokasi', 1);
    

    $this->db->from('estimasi_pendapatan');
     $this->db->where('tahun', $tahun);
    return $this->db->get()->result();
  }
        


}