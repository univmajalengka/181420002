<?php
    defined('BASEPATH') OR exit('No direct script acces allowed');
    class model_login extends CI_Model{

        public function ambillogin($username,$password){
            $this->db->where('username',$username);
            $this->db->where('password',$password);
            $query = $this->db->get('petugas');
            if($query->num_rows()==1){
                foreach ($query->result() as $row){
                    $sess = array (
                        'username'=>$row->username,
                        'password'=> $row->password
                    );
                }
                $this->session->get_userdata($sess);
                
                return 10;
            }else{
                $this->session->set_flashdata('info','Maaf username dan password anda salah!');
                redirect('login');
            }
        }
        function cek_login($table,$where){
            return $this->db->get_where($table,$where);
                
            
        }
        public function keamanan(){
            $username = $this->session->userdata('username');
            if(empty($username)){
                $this->session->sess_destroy();
                redirect('login');    
            }
            
        }
       
    }
?>