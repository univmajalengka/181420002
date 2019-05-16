<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class profil extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('model_profil');
        }
        public function index(){
            $username = $this->session->userdata('nama');
            $where=array(
                username=>$username
            );
            $x['data']=$this->model_profil->show_profil("petugas",$where);
            // redirect('homepage');
            $this->load->view('myprofil',$x);
        }
    }
?>