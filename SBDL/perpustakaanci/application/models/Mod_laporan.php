<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_laporan extends CI_Model {

    public function searchPinjaman($tanggal1, $tanggal2)
    {
        return $this->db->query("SELECT a.*,  
                                 CASE 
                                    WHEN a.status = 'N' THEN 'Masih Dipinjam'
                                 ELSE 'Sudah Dikembalikan' 
                                 END AS status_pinjam
                                 FROM transaksi a WHERE a.tanggal_pinjam  BETWEEN '$tanggal1' AND '$tanggal2' GROUP BY a.id_transaksi");
    }   
    
    public function detailPinjaman($id_transaksi)
    {
        return $this->db->query("SELECT a.*,b.kode_buku,b.judul, b.pengarang, 
                                 CASE 
                                    WHEN a.status = 'N' THEN 'Masih di pinjam'
                                 ELSE 'Sudah Dikembalikan' 
                                 END AS status_pinjam
                                 FROM transaksi a, buku b 
                                 WHERE a.id_transaksi = '$id_transaksi' 
                                 AND a.kode_buku = b.kode_buku");
    }

    public function searchPengembalian($tanggal1, $tanggal2)
    {
        return $this->db->query("SELECT a.*, b.id_petugas, b.full_name FROM pengembalian a, petugas b WHERE                             a.tgl_pengembalian BETWEEN '$tanggal1' AND '$tanggal2'
                                 AND a.id_petugas = b.id_petugas 
                                 GROUP BY a.id_transaksi");
    }

    public function detailPengembalian($id_transaksi)
    {
        return $this->db->query("SELECT a.*, b.status, c.kode_buku, c.judul, c.pengarang, 
                                CASE 
                                    WHEN b.status = 'N' THEN 'Masih di pinjam'
                                ELSE 'Sudah Dikembalikan' 
                                END AS status_pinjam
                                FROM pengembalian a, transaksi b, buku c
                                WHERE a.id_transaksi = '$id_transaksi'
                                AND a.id_transaksi = b.id_transaksi
                                AND b.kode_buku = c.kode_buku");
    }

    
}

/* End of file Mod_laporan.php */
