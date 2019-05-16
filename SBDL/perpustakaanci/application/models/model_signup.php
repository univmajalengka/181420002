<?php
    defined('BASEPATH') OR exit('No direct script acces allowed');
    class model_signup extends CI_Model{
        public function inputdt($nama,$email,$username,$phone,$tanggal,$password,$ulangi){
            
            $data=array(
                'id_petugas'=>'',                
                'email'=>$email,
                'username'=>$username,                
                'password'=>$password,
                'nama'=>$nama,
                'tgl_lahir'=>$tanggal                
            );
            $insert= $this->db->insert('petugas',$data);
            // return $insert;
        }
        public function check_username($username){
            $this->db->where('username',$username);
            $result= $this->db->get('petugas');
            if($result->num_rows()>0){
                return FALSE;
            }
        }
       
       
    }
?>