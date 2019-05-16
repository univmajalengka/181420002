<?php
    class model_profil extends CI_Model{
        function show_profil($where,$table){
            $this->db->where('username',$where['username']);
            $query = $this->db->get($table);
            return $query;
            // $hasil = $this->db->query("SELECT * FROM petugas WHERE username='$username'");
            // return $hasil;
        }
    }
?>