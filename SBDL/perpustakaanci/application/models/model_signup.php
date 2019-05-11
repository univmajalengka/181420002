<?php
    defined('BASEPATH') OR exit('No direct script acces allowed');
    class model_signup extends CI_Model{
        public function inputdt($nama,$email,$username,$phone,$tanggal,$password,$ulangi){
            $new_member_insert_data=array(
                'id_petugas'=>'',
                'nama'=>$nama,
                'email'=>$email,
                'username'=>$username,                
                'password'=>md5($password),
                'tgl_lahir'=>$tanggal                
            );
            $insert= $this->db->insert('petugas',$new_member_insert_data);
            return $insert;
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