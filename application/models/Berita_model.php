 <?php
Class Berita_model extends CI_Model
{

 
  function select_berita($limit,$offset){
		$this->db->select('berita.id_berita,berita.title,berita.isi,berita.status_publish,berita.tanggal_post,users.first_name,users.last_name');
		$this->db->from('berita , users');
    $this->db->where('users.id = berita.id_users');
		$this->db->limit($limit,$offset);
		return $this->db->get()->result();
	}


 function select_berita_per_id($id_berita){
		$this->db->select('*');
		$this->db->from('berita');
    $this->db->where('id_berita',$id_berita);
		return $this->db->get()->result();
	}

    function select_laporan(){
        $this->db->select('*');
        $this->db->from('laporan');
        return $this->db->get()->result();
    }


  function select_kategori_berita_per_id($id_berita){
    $this->db->select('id_kategori_berita');
    $this->db->from('detail_berita_category');
    $this->db->where('id_berita',$id_berita);
    return $this->db->get()->result();
  }

  function count_berita(){
		$this->db->select('berita.id_berita,berita.title,berita.isi,berita.status_publish,berita.tanggal_post,users.first_name,users.last_name');
		$this->db->from('berita , users');
    $this->db->where('users.id = berita.id_users');
		return $this->db->get()->num_rows();
	}

  function select_kategori_berita(){
    $this->db->select('*');
    $this->db->from('kategori_berita');
    return $this->db->get()->result();
  }

   function insert_berita($title,$isi,$status_publish,$tgl_post,$foto,$ID){

    $this->db->set('title',$title);
    $this->db->set('isi',$isi);
    $this->db->set('status_publish',$status_publish);
    $this->db->set('tanggal_post',$tgl_post);
    $this->db->set('featured_image',$foto);
    $this->db->set('id_users',$ID);

    $this->db->insert('berita');
  }


   function update_berita($title,$isi,$status_publish,$tgl_post,$id_berita,$ID){

    $this->db->set('title',$title);
    $this->db->set('isi',$isi);
    $this->db->set('status_publish',$status_publish);
    $this->db->set('tanggal_post',$tgl_post);
    $this->db->set('id_users',$ID);
    $this->db->where('id_berita',$id_berita);
    $this->db->update('berita');
  }


   function delete_detail_category($id_berita)
  {
  $this->db->where('id_berita', $id_berita);
    $this->db->delete('detail_berita_category');  
  }

  function get_update($data,$where){
       $this->db->where($where);
       $this->db->update('berita', $data);
       return TRUE;
    }

    function select_kategori_per_id($id_berita){
    $this->db->select('kategori_berita.kategori');
    $this->db->from('detail_berita_category,kategori_berita');
    $this->db->where('kategori_berita.id_kategori_berita = detail_berita_category.id_kategori_berita');
    $this->db->where('id_berita',$id_berita);
    return $this->db->get()->result();
  }


  function delete_berita($id){

      $this->db->where('id_berita',$id);
      $this->db->delete('berita');
     }

    function delete_komentar_berita($id){


        $this->db->where('id_komentar',$id);
        $this->db->delete('berita_komentar');
    }



    function search_forum_private($title){
        $this->db->like('title', $title , 'both');

        $this->db->order_by('title', 'ASC');
      
        
        return $this->db->get('berita')->result();
    }


     function select_berita_parameter($daterange,$kategori="",$title=""){
    $this->db->select('berita.id_berita,berita.title,berita.isi,berita.status_publish,berita.tanggal_post,users.first_name,users.last_name');
    $this->db->from('berita , users,detail_berita_category');
    $this->db->where('users.id = berita.id_users');
    $this->db->where('berita.id_berita = detail_berita_category.id_berita');


    if($daterange and $kategori=="" and $title==""){

      $tanggal = explode(" - ",$daterange);
      $dari = str_replace('/', '-', $tanggal[0]);
      $sampai = str_replace('/', '-', $tanggal[1]);
          
      $this->db->where("DATE(tanggal_post) >=", $dari);
      $this->db->where("DATE(tanggal_post)<=", $sampai);
    }elseif($kategori and $title=="" and $daterange==""){
      $this->db->where('detail_berita_category.id_kategori_berita', $kategori);
    }elseif($kategori=="" and $title and $daterange==""){
$this->db->like('berita.title', $title, 'both');
      

    }elseif($daterange and $kategori and $title==""){
      $tanggal = explode(" - ",$daterange);
      $dari = str_replace('/', '-', $tanggal[0]);
      $sampai = str_replace('/', '-', $tanggal[1]);
 $this->db->where("DATE(tanggal_post) >=", $dari);
      $this->db->where("DATE(tanggal_post)<=", $sampai);
      $this->db->where('detail_berita_category.id_kategori_berita', $kategori);
    }elseif($daterange and $title and $kategori==""){
      $tanggal = explode(" - ",$daterange);
      $dari = str_replace('/', '-', $tanggal[0]);
      $sampai = str_replace('/', '-', $tanggal[1]);
$this->db->where("DATE(tanggal_post) >=", $dari);
      $this->db->where("DATE(tanggal_post)<=", $sampai);
      $this->db->like('berita.title', $title, 'both');

    }elseif($daterange=="" and $title and $kategori){
$this->db->where('detail_berita_category.id_kategori_berita', $kategori);
       $this->db->like('berita.title', $title, 'both');
    }elseif($daterange and $title and $kategori){
      $tanggal = explode(" - ",$daterange);
      $dari = str_replace('/', '-', $tanggal[0]);
      $sampai = str_replace('/', '-', $tanggal[1]);
$this->db->where("DATE(tanggal_post) >=", $dari);
      $this->db->where("DATE(tanggal_post)<=", $sampai);
      $this->db->like('berita.title', $title, 'both');
      $this->db->where('detail_berita_category.id_kategori_berita', $kategori);
    }

    $this->db->group_by('berita.id_berita');
    return $this->db->get()->result();
  }


  function update_status_publish($id,$status){
      $this->db->set('status_publish',$status);
      $this->db->where('id_berita',$id);
      $this->db->update('berita');
  }


  function select_komentar($id_berita){
    $this->db->select('berita_komentar.id_komentar,berita_komentar.id_berita,berita_komentar.nama,berita_komentar.email,berita_komentar.komentar,berita.title,berita_komentar.id_berita,berita_komentar.status_dibalas,berita_komentar.tanggal');
    $this->db->from('berita_komentar');
    $this->db->join('berita','berita_komentar.id_berita = berita.id_berita');
    $this->db->where('berita_komentar.id_berita',$id_berita);

    return $this->db->get()->result();
  }




    function insert_komentar_admin($id_komentar,$id_berita,$balasan_komentar,$tanggal){

        $this->db->set('id_balasan',$id_komentar);
        $this->db->set('id_berita',$id_berita);
        $this->db->set('nama','admin');
        $this->db->set('tanggal',$tanggal);
        $this->db->set('status_dibalas',0);


        $this->db->insert('berita_komentar');
    }


    function update_komentar_admin($id_komentar){

        $this->db->set('status_dibalas',0);
        $this->db->where('komentar',$id_komentar);
        $this->db->update('berita_komentar');
    }


    function select_detail_produk_hukum($val){
        $this->db->select('*');
        $this->db->from('detail_produk_hukum');
        $this->db->join('produk_hukum','produk_hukum.id_produk_hukum = detail_produk_hukum.id_produk_hukum');
        if($val){
            $this->db->where('id_detail',$val);
        }
        return $this->db->get()->result();
    }

    function select_master_produk_hukum(){
        $this->db->select('*');
        $this->db->from('produk_hukum');
        return $this->db->get()->result();
    }


    function insert_produk_hukum($id_produk_hukum,$nama_produk_hukum,$file){

        $this->db->set('id_produk_hukum',$id_produk_hukum);
        $this->db->set('nama_produk_hukum',$nama_produk_hukum);

        $this->db->set('nama_file',$file);

        $this->db->insert('detail_produk_hukum');
    }


    function select_laporan_detail($id_laporan,$nama_file=""){
        $this->db->select('*');
        $this->db->from('file_laporan');
        $this->db->where('id_laporan',$id_laporan);
        if($nama_file){
            $this->db->like('nama_file',$nama_file);
        }
        return $this->db->get()->result();
    }

    function insert_laporan($id_laporan,$foto){
        $data = array(
            'id_laporan'=>$id_laporan,



            'nama_file' =>$foto,
            'judul_file' =>$foto
        );
        $this->db->insert('file_laporan', $data);
    }


    function select_perubahan_apbd($limit,$offset){
        $this->db->select('*');
        $this->db->from('perubahan_apbd');
        $this->db->limit($limit,$offset);
        return $this->db->get()->result();
    }

    function count_perubahan_apbd(){
        $this->db->select('*');
        $this->db->from('perubahan_apbd');
        return $this->db->get()->num_rows();
    }

    function select_sum_pendapatan($tahun,$status=""){
        $this->db->select_sum('jumlah');
        $this->db->from('perubahan_apbd');
        $this->db->where('SUBSTR(nomor_urut,1,1)', 4);
        $this->db->where('tahun',$tahun);
        if($status) {
            $this->db->where('status', $status);
        }
        return $this->db->get()->result();
    }

    function select_sum_belanja($tahun,$status=""){
        $this->db->select_sum('jumlah');
        $this->db->from('perubahan_apbd');
        $this->db->where('SUBSTR(nomor_urut,1,1)', 5);
        $this->db->where('tahun',$tahun);
        if($status) {
            $this->db->where('status', $status);
        }
        return $this->db->get()->result();
    }

    function select_sum_pembiayaan($tahun,$status=""){
        $this->db->select_sum('jumlah');
        $this->db->from('perubahan_apbd');
        $this->db->where('SUBSTR(nomor_urut,1,1)', 6);
        $this->db->where('tahun',$tahun);
        if($status) {
            $this->db->where('status', $status);
        }
        return $this->db->get()->result();
    }


    function select_perubahan_apbd_select(){
        $this->db->select('*');
        $this->db->from('perubahan_apbd');

        return $this->db->get()->result();
    }

    function select_distinc_tahun(){

        $this->db->distinct();

        $this->db->select('tahun');
        $this->db->from('perubahan_apbd');
        return $this->db->get()->result();


    }

    function select_sop(){
        $this->db->select('*');
        $this->db->from('sop');
        return $this->db->get()->result();
    }

    function insert_sop($foto){
        $data = array(




            'nama_file' =>$foto,
            'judul_file' =>$foto
        );
        $this->db->insert('sop', $data);
    }

    function delete_file_laporan($id){


        $this->db->where('id_file',$id);
        $this->db->delete('file_laporan');
    }


    function select_laporan_val($val=""){
        $this->db->select('*');
        $this->db->from('laporan');
        if($val) {
            $this->db->where('id_laporan', $val);
        }
        return $this->db->get()->result();
    }


    function delete_detail_produk($id){

        $this->db->where('id_detail',$id);
        $this->db->delete('detail_produk_hukum');
    }


    function select_detail_produk_hukum_val(){
        $this->db->select('*');
        $this->db->from('detail_produk_hukum');
        $this->db->join('produk_hukum','produk_hukum.id_produk_hukum = detail_produk_hukum.id_produk_hukum');
        return $this->db->get()->result();
    }


    function select_perubahan_apbd_tahun($tahun="",$keterangan=""){


        $this->db->select('*');
        $this->db->from('perubahan_apbd');
        if($tahun and !$keterangan){
            $this->db->where('tahun', $tahun);
        }elseif(!$tahun and $keterangan){


            $this->db->where('uraian', $keterangan);
        }elseif($tahun and $keterangan){
            $this->db->where('tahun', $tahun);
            $this->db->where('uraian', $keterangan);
        }
        return $this->db->get()->result();
    }

    function insert_informasi_keuangan($tahun,$foto){

        $this->db->set('tahun',$tahun);
        $this->db->set('nama_file',$foto);
        $this->db->set('judul_file',$foto);
        $this->db->insert('informasi_keuangan');
    }


    function select_laporan_keuangan($limit,$offset){
        $this->db->select('*');
        $this->db->from('informasi_keuangan');
        $this->db->limit($limit,$offset);
        return $this->db->get()->result();
    }

    function count_informasi_keuangan(){
        $this->db->select('*');
        $this->db->from('informasi_keuangan');
        $this->db->limit($limit,$offset);
        return $this->db->get()->num_rows();
    }

    function select_laporan_keuangan_tahun($tahun="",$keterangan=""){


        $this->db->select('*');
        $this->db->from('informasi_keuangan');
        if($tahun and !$keterangan){
            $this->db->where('tahun', $tahun);
        }elseif(!$tahun and $keterangan){


            $this->db->like('nama_file', $keterangan);
        }elseif($tahun and $keterangan){
            $this->db->where('tahun', $tahun);
            $this->db->like('nama_file', $keterangan);
        }
        return $this->db->get()->result();
    }

    function delete_info_keuangan($id){

        $this->db->where('id_info',$id);
        $this->db->delete('informasi_keuangan');
    }

    function delete_sop($id){

        $this->db->where('id_sop',$id);
        $this->db->delete('sop');
    }


    function select_trend_apbdd($an=""){
      /*
      if($periode){
          for($i=$tahun; $i <= $periode; $i++) {
              $this->db->select('tahun=' . $i . ',jumlah, as $jum'.$i);
          }
            $this->db->from('perubahan_apbd');
            $this->db->where('SUBSTR(nomor_urut,1,1)', 4);



        }else{
          $this->db->select('*');

              $this->db->from('perubahan_apbd');
              $this->db->where('SUBSTR(nomor_urut,1,1)', 4);

        }
*/
        $this->db->select('*');

        $this->db->from('perubahan_apbd');
        $this->db->where('SUBSTR(nomor_urut,1,1)', 4);
        if($an) {
            $this->db->where_in('tahun',$an);
        }
        return $this->db->get()->result();
    }


    function select_suara(){
        $this->db->select('*');
        $this->db->from('suara');
        return $this->db->get()->result();
    }

    function select_batang_pendapatan($an,$periode,$utama){

        $this->db->select('*');
        $this->db->from('tren');
        $this->db->group_by('tahun');
        if($utama==0) {
            $this->db->where('parent', $utama);
        }else{
            $this->db->where('SUBSTR(nomor_urut,1,1)', $utama);
            $this->db->where('nomor_urut !=', $utama);
        }
        if($periode) {
            $this->db->where_in('tahun',$an);
        }
        return $this->db->get()->result();
    }


    function select_uraian_parent($an,$periode,$utama){

        $this->db->distinct();
        $this->db->select('uraian');
        $this->db->from('tren');
        if($utama==0) {
            $this->db->where('parent', $utama);
        }else{
            $this->db->where('SUBSTR(nomor_urut,1,1)', $utama);
            $this->db->where('nomor_urut !=', $utama);
        }
        if($periode) {
            $this->db->where_in('tahun',$an);
        }
        return $this->db->get()->result();
    }

    function select_jumlah_tren($tahun,$parent){
        $jenis=array('PENDAPATAN','BELANJA','PEMBIAYAAN');
        $this->db->select('jumlah');
        $this->db->from('tren');
        $this->db->where('tahun',$tahun);
        if($parent==0) {
            $this->db->where_in('uraian', $jenis);
        }else{

        }
        return $this->db->get()->result();
    }

    function select_jumlah_tren_2($tahun,$parent){
        $jenis=array('PENDAPATAN','BELANJA','PEMBIAYAAN');
        $this->db->select('jumlah');
        $this->db->from('tren');
        $this->db->where('tahun',$tahun);
        $this->db->where('SUBSTR(nomor_urut,1,1)', $parent);
        $this->db->where('nomor_urut !=', $parent);
        return $this->db->get()->result();
    }
    //Trend APBD
    function count_tren_apbd(){

        $this->db->select('*');
        $this->db->from('tren');
        return $this->db->get()->num_rows();
    }

    function select_tren_apbd_select(){
        $this->db->select('*');
        $this->db->from('tren');
        return $this->db->get()->result();
    }

    function select_tren_apbd($limit,$offset){
        $this->db->select('*');
        $this->db->from('tren');
        $this->db->limit($limit,$offset);
        return $this->db->get()->result();
    }

    function select_tren_apbd_tahun($tahun="",$keterangan=""){


        $this->db->select('*');
        $this->db->from('tren');
        if($tahun and !$keterangan){
            $this->db->where('tahun', $tahun);
        }elseif(!$tahun and $keterangan){

            $this->db->where('uraian', $keterangan);
        }elseif($tahun and $keterangan){
            $this->db->where('tahun', $tahun);
            $this->db->where('uraian', $keterangan);
        }
        return $this->db->get()->result();
    }

    function select_distinc_tahun_tren(){

        $this->db->distinct();

        $this->db->select('tahun');
        $this->db->from('tren');
        return $this->db->get()->result();


    }

    function update_tren_apbd($id,$uraian,$jumlah,$tahun)
    {

        $this->uraian=  $uraian;
        $this->jumlah=  $jumlah;
        $this->tahun=  $tahun;
        $this->db->update('tren', $this, array('id_tren' => $id));
    }

    function update_visualisasi_apbd($id,$uraian,$jumlah,$tahun,$status)
    {

        $this->uraian=  $uraian;
        $this->jumlah=  $jumlah;
        $this->tahun=  $tahun;
        $this->status=$status;
        $this->db->update('perubahan_apbd', $this, array('id_perubahan' => $id));
    }

    function delete_tren_apbd($ID)
    {
        $this->db->where('id_tren', $ID);
        $this->db->delete('tren');
    }

    function delete_visualisasi_apbd($ID)
    {
        $this->db->where('id_perubahan', $ID);
        $this->db->delete('perubahan_apbd');
    }


// Visualisasi APBD Terbaru

     function select_diagram_perubahan_apbd($tahun_awal="",$tahun_akhir="",$jenis=""){

        $this->db->select('*');
        $this->db->from('perubahan_apbd');
        $this->db->group_by('tahun');
        $this->db->limit('3');
        if($tahun_awal){
        $this->db->where('tahun >=', $tahun_awal);
        $this->db->where('tahun <=', $tahun_akhir);
        }else{
        $this->db->order_by('tahun','DESC');
        }

        if($jenis){
            $this->db->where('status', $jenis);
        }
        return $this->db->get()->result();
    }



    function select_sum_all($tahun,$status=""){
        $this->db->select_sum('jumlah');
        $this->db->from('perubahan_apbd');
        $this->db->where('tahun',$tahun);
        if($status) {
            $this->db->where('status', $status);
        }
        return $this->db->get()->result();
    
    }


}