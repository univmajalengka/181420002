<?php
    class model_profil extends CI_Model{
        function show_profil(){
            $hasil = $this->db->query("SELECT * FROM petugas WHERE username='$username'");
            return $hasil;
        }
    }
?>