<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('Front_Home_model');
		
	}
	

	public function index()
	{
        $data['profile_singkat'] = $this->Front_Home_model->select_profile_singkat();
        $data['slider_home']     = $this->Front_Home_model->select_slider();

        $data['video_utama']      = $this->Front_Home_model->select_video_utama();
        $data['video_next']      = $this->Front_Home_model->select_video_next();
        $data['video_bel']      = $this->Front_Home_model->select_video_bel();

        $data['berita_utama']      = $this->Front_Home_model->select_berita_utama();
        $data['berita_lainya']      = $this->Front_Home_model->select_berita_lainya();
        $data['profile']      = $this->Front_Home_model->select_profile();


        $data['berita_random_atas']      = $this->Front_Home_model->select_berita_random();
        $this->load->view('layouts/header2');
        $this->load->view('beranda3',$data);
        $this->load->view('layouts/footer2');
        
       
      }


  }