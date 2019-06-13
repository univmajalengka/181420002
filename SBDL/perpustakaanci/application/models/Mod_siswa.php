<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_siswa extends CI_Model {

    function getSiswa()
    {
        return $this->db->get('siswa');
    }

    function getAll()
    {
        $this->db->order_by('siswa.nis desc');
        return $this->db->get('siswa');
    }

    function insertSiswa($tabel, $data)
    {
        $insert = $this->db->insert($tabel, $data);
        return $insert;
    }

    function cekSiswa($kode)
    {
        $this->db->where("nis", $kode);
        return $this->db->get("siswa");
    }

    function updateSiswa($nis, $data)
    {
        $this->db->where('nis', $nis);
		$this->db->update('siswa', $data);
    }

    function getDataSiswa($limit, $offset)
    {
        // return $this->db->get_where('post', array('category_id' => $category_id));
        $this->db->select('*');
        $this->db->from('siswa a');
        // $this->db->where('a.nis', $nis);
        $this->db->limit($limit, $offset);
        $this->db->order_by('a.nis desc');
        return $this->db->get();
    }

    function getGambar($nis)
    {
        $this->db->select('image');
        $this->db->from('siswa');
        $this->db->where('nis', $nis);
        return $this->db->get();
    }

    function totalRows($table)
	{
		return $this->db->count_all_results($table);
    }

   

    
    function searchSiswa($cari, $limit, $offset)
    {
        $this->db->like("nis",$cari);
        $this->db->or_like("nama",$cari);
        $this->db->limit($limit, $offset);
        return $this->db->get('siswa');
    }

    function deleteSiswa($kode, $table)
    {
        $this->db->where('nis', $kode);
        $this->db->delete($table);
    }

}

/* End of file ModelName.php */
