<?php
    defined('BASEPATH') OR exit('No direct script acces allowed');
    class model_petugas extends CI_Model{
        
       function edit_data($where,$table){
           return $this->db->get_where($table,$where);
       }
       function update_data($where,$data,$table){
           $this->db->where($where);
           $this->db->update($table,$data);
       }
    }
?>