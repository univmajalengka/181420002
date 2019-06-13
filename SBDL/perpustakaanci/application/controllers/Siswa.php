<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_siswa');
    }


    public function index()
    {
        $data['siswa']      = $this->Mod_siswa->getAll();
        // print_r($data['countsiswa']); die();

        if($this->uri->segment(3)=="create-success") {
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Disimpan...!</p></div>";    
            $this->template->load('layoutbackend', 'siswa/siswa_data', $data); 
        }
        else if($this->uri->segment(3)=="update-success"){
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Update...!</p></div>"; 
            $this->template->load('layoutbackend', 'siswa/siswa_data', $data);
        }
        else if($this->uri->segment(3)=="delete-success"){
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Dihapus...!</p></div>"; 
            $this->template->load('layoutbackend', 'siswa/siswa_data', $data);
        }
        else{
            $data['message'] = "";
            $this->template->load('layoutbackend', 'siswa/siswa_data', $data);
        }
        
    }

    public function create()
    {
        $this->template->load('layoutbackend', 'siswa/siswa_create');
    }

    public function insert()
    {
        if(isset($_POST['save'])) {
            
            $this->_set_rules();

            //apabila user mengkosongkan form input
            if($this->form_validation->run()==true){
                // echo "masuk"; die();
                $nis = $this->input->post('nis');
                $cek = $this->Mod_siswa->cekSiswa($nis);
                //cek nis yg sudah digunakan
                if($cek->num_rows() > 0){
                    $data['message'] = "<div class='alert alert-block alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <p><strong><i class='icon-ok'></i>NIS</strong> Sudah Digunakan...!</p></div>"; 
                    $this->template->load('layoutbackend', 'siswa/siswa_create', $data); 
                }
                else{
                    $nama = slug($this->input->post('nama'));
                    $config['upload_path']   = './assets/img/siswa/';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png'; //mencegah upload backdor
                    $config['max_size']	     = '1000';
                    $config['max_width']     = '2000';
                    $config['max_height']    = '1024';
                    $config['file_name']     = $nama; 
                            
                    $this->upload->initialize($config);

                     //apabila ada gambar yg diupload
                    if ($this->upload->do_upload('userfile')){
                        
                        $image = $this->upload->data();

                        $save  = array(
                            'nis'   => $this->input->post('nis'),
                            'nama'  => $this->input->post('nama'),
                            'jk'    => $this->input->post('jenis'),
                            'ttl'   => $this->input->post('tgl_lahir'),
                            'kelas' => $this->input->post('kelas'),
                            'image' => $image['file_name']
                        );
                        $this->Mod_siswa->insertSiswa("siswa", $save);
                        // echo "berhasil"; die();
                        redirect('siswa/index/create-success');

                    }
                    //apabila tidak ada gambar yg diupload
                    else{
                        $data['message'] = "<div class='alert alert-block alert-danger'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <p><strong><i class='icon-ok'></i>Gambar</strong> Masih Kosong...!</p></div>"; 
                        $this->template->load('layoutbackend', 'siswa/siswa_create', $data);
                    } 
                }
            }
            //jika tidak mengkosongkan
            else{
                $data['message'] = "";
                $this->template->load('layoutbackend', 'siswa/siswa_create', $data);
            }
        }
    }

    public function edit()
    {
        $id = $this->uri->segment(3);
        $data['edit']    = $this->Mod_siswa->cekSiswa($id)->row_array();
        
        $this->template->load('layoutbackend', 'siswa/siswa_edit', $data);
    }

    public function update()
    {
        if(isset($_POST['update'])) {

            //apabila ada gambar yg diupload
            if(!empty($_FILES['userfile']['name'])) {
                

                $this->_set_rules();

                //apabila user mengkosongkan form input
                if($this->form_validation->run()==true){
                    // echo "masuk"; die();
                    
                    $nis = $this->input->post('nis');
                    
                    $nama = slug($this->input->post('nama'));
                    $config['upload_path']   = './assets/img/siswa/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']	     = '1000';
                    $config['max_width']     = '2000';
                    $config['max_height']    = '1024';
                    $config['file_name']     = $nama; 
                            
                    $this->upload->initialize($config);

                        //apabila ada gambar yg diupload
                    if ($this->upload->do_upload('userfile')){
                        
                        $image = $this->upload->data();

                        $save  = array(
                            'nis'   => $this->input->post('nis'),
                            'nama'  => $this->input->post('nama'),
                            'jk'    => $this->input->post('jenis'),
                            'ttl'   => $this->input->post('tgl_lahir'),
                            'kelas' => $this->input->post('kelas'),
                            'image' => $image['file_name']
                        );

                        $g = $this->Mod_siswa->getGambar($nis)->row_array();
                        
                        //hapus gambar yg ada diserver
                        unlink('assets/img/siswa/'.$g['image']);

                        $this->Mod_siswa->updateSiswa($nis, $save);
                        // echo "berhasil"; die();
                        redirect('siswa/index/update-success');

                    }
                    //apabila tidak ada gambar yg diupload
                    else{
                        $data['message'] = "<div class='alert alert-block alert-danger'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <p><strong><i class='icon-ok'></i>Gambar</strong> Masih Kosong...!</p></div>"; 
                        $this->template->load('layoutbackend', 'siswa/siswa_create', $data);
                    } 
                        
                    
                }
                //jika tidak mengkosongkan
                else{
                    $nis = $this->input->post('nis');
                    $data['edit']    = $this->Mod_siswa->cekSiswa($nis)->row_array();
                    $data['message']="";
                    $this->template->load('layoutbackend', 'siswa/siswa_edit', $data);
                }

            }else{
                $this->_set_rules();
                
                //apabila user mengkosongkan form input
                if($this->form_validation->run()==true){
                    // echo "masuk"; die();
                    
                    $nis = $this->input->post('nis');
                    
                    

                        $save  = array(
                            'nis'   => $this->input->post('nis'),
                            'nama'  => $this->input->post('nama'),
                            'jk'    => $this->input->post('jenis'),
                            'ttl'   => $this->input->post('tgl_lahir'),
                            'kelas' => $this->input->post('kelas')
                        );
                        $this->Mod_siswa->updateSiswa($nis, $save);
                        // echo "berhasil"; die();
                        redirect('siswa/index/update-success');

                   
                        
                    
                }
                //jika tidak mengkosongkan
                else{
                    $nis = $this->input->post('nis');
                    $data['edit']    = $this->Mod_siswa->cekSiswa($nis)->row_array();
                    $data['message']="";
                    $this->template->load('layoutbackend', 'siswa/siswa_edit', $data);
                }

            }    

        } //end post update

    }//end function update

    public function delete()
    {
        // $nis  = $this->uri->segment(3);

        $nis = $this->input->post('kode');

       

        $g = $this->Mod_siswa->getGambar($nis)->row_array();
        
        //hapus gambar yg ada diserver
        unlink('assets/img/siswa/'.$g['image']);

        $this->Mod_siswa->deleteSiswa($nis, 'siswa');
        // echo "berhasil"; die();
        redirect('siswa/index/delete-success');
        
    }

    //function global buat validasi input
    public function _set_rules()
    {
        $this->form_validation->set_rules('nis','NIS','required|max_length[10]');
        $this->form_validation->set_rules('nama','Nama','required|max_length[50]');
        $this->form_validation->set_rules('jenis','Jenis Kelamin','required|max_length[2]');
        $this->form_validation->set_rules('tgl_lahir','Tanggal Lahir','required'); 
        $this->form_validation->set_rules('kelas','Kelas','required|max_length[10]');
        $this->form_validation->set_message('required', '{field} kosong, silahkan diisi');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert'>&times;</a>","</div>");
    }



}

/* End of file Siswa.php */
 