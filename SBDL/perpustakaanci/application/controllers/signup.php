<?php
    defined('BASEPATH') OR exit('No direct script acces allowed');
    class signup extends CI_Controller{
        public function index(){
            $this->load->view('signup');
        }
        public function inputdata(){
           
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $phone = $this->input->post('phone');
            $tanggal = $this->input->post('tanggal');
            $password = md5($this->input->post('password'));
            $ulangi = $this->input->post('ulangi-password');
            // $password = 'PASSWORD("'.$this->input->post('password',TRUE).'")';

            $this->load->model('model_signup');
            $this->model_signup->inputdt($nama,$email,$username,$phone,$tanggal,$password,$ulangi);
            $this->load->view('signin');
        }
    }
?>