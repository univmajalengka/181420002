<?php
    defined('BASEPATH') OR exit('No direct script acces allowed');
    class login extends CI_Controller{
        
        public function index(){
            $this->load->view('signin');
        }
        public function cekLogin(){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->load->model('model_login');
            if($this->model_login->ambillogin($username,$password)==10){
                $this->db->where('username',$username);
                $this->db->where('password',$password);
                $query = $this->db->get('petugas');
                
                // $this->load->model('model_profil');
                // $x['data']=$this->model_profil->show_profil($username);
                // $this->load->view('myprofil',$x);
                // echo site_url('homepage');
                redirect('homepage/edit_petugas/'.$username);
            }else{
                redirect('login');
            }
        }
        public function logout(){
            $this->session->set_userdata('username',FALSE);   
            $this->session->unset_userdata('username');
            $this->session->sess_destroy();
            redirect('login');
        }
    }
?>