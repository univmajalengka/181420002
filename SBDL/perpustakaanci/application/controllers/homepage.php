<?php
    class homepage extends CI_Controller{
        public function __construct(){
            parent::__construct();
            //$this->load->library('grocery_CRUD');
            
        }
                
        function index()
        {
            if($this->session->userdata('status')!="login"){
                redirect("login");
            }else{                
                $where = array(
                    'id_petugas'=>$this->session->userdata('id_petugas')
                );
                $this->load->model('model_petugas');
                $data['petugas'] = $this->model_petugas->edit_data($where,'petugas')->result();
                // redirect('homepage');
                $this->load->view('myprofil',$data);
            }
            
        }
        function profil(){            
            $where = array(
                'id_petugas'=>$this->session->userdata('id_petugas')
            );
            $this->load->model('model_petugas');
            $data['petugas'] = $this->model_petugas->edit_data($where,'petugas')->result();
            // redirect('homepage');
            $this->load->view('myprofil',$data);
            
        }
        function edit_petugas($username){
            $where = array('username'=>$username);
            $this->load->model('model_petugas');
            $data['petugas'] = $this->model_petugas->edit_data($where,'petugas')->result();
            $this->load->view('myprofil',$data);
        }
        function update_petugas(){
            $id_petugas = $this->input->post('id_petugas');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $nama = $this->input->post('nama');
            $tgl_lahir = $this->input->post('tgl_lahir');
            if($password!=""){
                $data = array(
                    'id_petugas'=>$id_petugas,
                    'email'=>$email,
                    'username'=>$username,
                    'password'=>$password,
                    'nama'=>$nama,
                    'tgl_lahir'=>$tgl_lahir
                );
                $where = array(
                    'id_petugas'=>$id_petugas
                );
                $this->load->model('model_petugas');
                $this->model_buku->update_data($where,$data,'petugas');
                redirect('homepage/profil');
            }else{
                $this->session->set_flashdata('gagal_edit','Update gagal');
                
                redirect('homepage/profil');
            }
            
            
        }
        function transaksi(){
            $this->load->model('model_transaksi');
            $data['transaksi']= $this->model_transaksi->tampil_data()->result();
            $this->load->view('transaksi',$data);
            
        }
        function tambah_transaksi(){
            $this->load->view('transaksi_forminput');
        }
        function tambah_aksi_transaksi(){
            $id_buku = $this->input->post('id_buku');
            $judul = $this->input->post('judul');
            $id_siswa = $this->input->post('id_siswa');
            $tgl_pinjam = $this->input->post('tgl_pinjam');
            $tgl_kembali = $this->input->post('tgl_kembali');
            
            $data = array(
                'id_buku'=>$id_buku,
                'judul'=>$judul,
                'id_siswa'=>$id_siswa,
                'tgl_pinjam'=>$tgl_pinjam,
                'tgl_kembali'=>$tgl_kembali
            );
            $this->load->model('model_transaksi');
            $this->model_transaksi->input_data($data,'transaksi');
            redirect('homepage/transaksi');
        }
        function hapus_transaksi($id_transaksi){
            $where=array('id_transaksi'=>$id_transaksi);
            $this->load->model(model_transaksi);
            $this->model_transaksi->hapus_data($where,'transaksi');
            redirect('homepage/transaksi');
        }
        function edit_transaksi($id_transaksi){
            $where = array('id_transaksi'=>$id_transaksi);
            $this->load->model('model_transaksi');
            $data['transaksi']=$this->model_transaksi->edit_data($where,'transaksi')->result();
            $this->load->view('transaksi_formedit',$data);
        }
        function update_transaksi(){
            $id_transaksi = $this->input->post('id_transaksi');
            $id_buku = $this->input->post('id_buku');
            $judul = $this->input->post('judul');
            $id_siswa = $this->input->post('id_siswa');
            $tgl_pinjam = $this->input->post('tgl_pinjam');
            $tgl_kembali = $this->input->post('tgl_kembali');
            $data = array(
                'id_buku'=>$id_buku,
                'judul'=>$judul,
                'id_siswa'=>$id_siswa,
                'tgl_pinjam'=>$tgl_pinjam,
                'tgl_kembali'=>$tgl_kembali
            );
            $where = array(
                'id_transaksi'=>$id_transaksi
            );
            $this->load->model('model_transaksi');
            $this->model_transaksi->update_data($where,$data,'transaksi');
            redirect('homepage/transaksi');
            
        }
        function siswa(){
            $this->load->model('model_siswa');
            $data['siswa']= $this->model_siswa->tampil_data()->result();
            $this->load->view('siswa',$data);
        }
        function tambah_siswa(){
            $this->load->view('siswa_forminput');
        }
        function tambah_aksi_siswa(){
            $nis = $this->input->post('nis');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $tanggal = $this->input->post('tgl_lahir');
            $kelas = $this->input->post('kelas');
            
            $data = array(
                'nis'=>$nis,
                'nama'=>$nama,
                'alamat'=>$alamat,
                'tgl_lahir'=>$tanggal,
                'kelas'=>$kelas
            );
            $this->load->model('model_siswa');
            $this->model_siswa->input_data($data,'siswa');
            redirect('homepage/siswa');
        }
        function hapus_siswa($id_siswa){
            $where=array('id_siswa'=>$id_siswa);
            $this->load->model(model_siswa);
            $this->model_siswa->hapus_data($where,'siswa');
            redirect('homepage/siswa');
        }
        function edit_siswa($id_siswa){
            $where = array('id_siswa'=>$id_siswa);
            $this->load->model('model_siswa');
            $data['siswa']=$this->model_siswa->edit_data($where,'siswa')->result();
            $this->load->view('siswa_formedit',$data);
        }
        function update_siswa(){
            $id_siswa = $this->input->post('id_siswa');
            $nis = $this->input->post('nis');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $kelas = $this->input->post('kelas');
            $data = array(
                'nis'=>$nis,
                'nama'=>$nama,
                'alamat'=>$alamat,
                'tgl_lahir'=>$tanggal,
                'kelas'=>$kelas
            );
            $where = array(
                'id_siswa'=>$id_siswa
            );
            $this->load->model('model_siswa');
            $this->model_siswa->update_data($where,$data,'siswa');
            redirect('homepage/siswa');
            
        }
        function buku(){
            $this->load->model('model_buku');
            $data['buku']= $this->model_buku->tampil_data()->result();
            $this->load->view('buku',$data);
            
        }
        function tambah_buku(){
            $this->load->view('buku_forminput');
        }
        function tambah_aksi_buku(){
            $id_buku = $this->input->post('id_buku');
            $judul = $this->input->post('judul');
            $pengarang = $this->input->post('pengarang');
            $tgl = $this->input->post('tgl');
            $jml = $this->input->post('jml');
            
            
            $data = array(
                'id_buku'=>$id_buku,
                'judul'=>$judul,
                'pengarang'=>$pengarang,
                'tgl'=>$tgl,
                'jml'=>$jml,
                
            );
            $this->load->model('model_buku');
            $this->model_buku->input_data($data,'buku');
            redirect('homepage/buku');
        }
        function hapus_buku($id_buku){
            $where=array('id_buku'=>$id_buku);
            $this->load->model(model_buku);
            $this->model_buku->hapus_data($where,'buku');
            redirect('homepage/buku');
        }
        function edit_buku($id_buku){
            $where = array('id_buku'=>$id_buku);
            $this->load->model('model_buku');
            $data['buku']=$this->model_buku->edit_data($where,'buku')->result();
            $this->load->view('buku_formedit',$data);
        }
        function update_buku(){
            $id_buku = $this->input->post('id_buku');
            $judul = $this->input->post('judul');
            $pengarang = $this->input->post('pengarang');
            $tgl = $this->input->post('tgl');
            $jml = $this->input->post('jml');
            
            $data = array(
                'id_buku'=>$id_buku,
                'judul'=>$judul,
                'pengarang'=>$pengarang,
                'tgl'=>$tgl,
                'jml'=>$jml
            );
            $where = array(
                'id_buku'=>$id_buku
            );
            $this->load->model('model_buku');
            $this->model_buku->update_data($where,$data,'buku');
            redirect('homepage/buku');
            
        }
        function logout(){
            echo site_url('login/logout');
        }
    }
?>