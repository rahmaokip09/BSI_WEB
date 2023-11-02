<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class web extends CI_Controller{

    function __construct(){
       parent::__construct();
       $this->load->model('m_data');
       $this->load->helper('url'); 
       
    }
    
    public function user()
    {
        //$data['user']= $this->m_data->ambil_data()->result();
        $data=array (
            'user'=> $this->m_data->ambil_data()->result(),
            'judul'=> "Daftar User"
        );
        $this->load->view('v_header',$data);
        $this->load->view('v_user', $data);
        $this->load->view('v_footer',$data);
    }

    public function index(){
        $data['judul']="Halaman Depan";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);  
    }
    public function blog(){
        $data['judul']="Halaman Blog";
        $this->load->view('v_header',$data);
        $this->load->view('v_blog',$data);
        $this->load->view('v_footer',$data);  
    }
    public function about(){
        $data['judul']="Halaman About";
        $this->load->view('v_header',$data);
        $this->load->view('v_about',$data);
        $this->load->view('v_footer',$data);  
    }
   
}