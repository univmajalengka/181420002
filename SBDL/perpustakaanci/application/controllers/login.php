<?php
    defined('BASEPATH') OR exit('No direct script acces allowed');
    class login extends CI_Controller{
        
        public function index(){
            $this->load->view('signin');
        }
        
        function aksi_login(){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $where = array (
                'username' => $username,
                'password' => md5($password)
            );
            $this->load->model("model_login");
            $cek = $this->model_login->cek_login('petugas',$where)->num_rows();
            if($cek>0){
                $us=$this->model_login->cek_login('petugas',$where);
                foreach ($us->result() as $row){
                    $id_petugas=$row->id_petugas;
                }
                $data_session=array(
                    'id_petugas'=>$id_petugas,
                    'nama'=>$username,
                    'status'=>"login"
                    
                );
                $this->session->set_userdata($data_session);
                redirect("homeadmin");
            }else{
                $this->session->set_flashdata('info','Maaf username dan password anda salah!');
                redirect('login');
            }
        }
        public function logout(){
            // $this->session->set_userdata('username',FALSE);   
            // $this->session->unset_userdata('username');
            $this->session->sess_destroy();
            redirect('login');
        }
    }
?>