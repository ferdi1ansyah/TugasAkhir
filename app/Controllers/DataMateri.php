<?php
namespace App\Controllers;

use App\Models\M_datamateri;
use CodeIgniter\Controller;


class Datamateri extends Controller {


    private $session;

    function __construct(){
        
        $this->session = \Config\Services::session();   

        // cek sesi aktif 
        if ( empty( $this->session->get('sess_username') ) ) {

            // flashdata
            $this->session->setFlashdata('pesan', 'Harap login terlebih dahulu');

            $url = base_url('login/index');
            header('Location: '.$url);

            exit(); 
        }
    }

    function index () {

        $model = new M_datamateri();

        $data['materi'] = $model->tampilDataMateri();
        return view("guru/datamateri/V_datamateri", $data);
    }






    // tambah data materi
    function tambah() {
        $data['sess_id_guru']       = $this->session->get('sess_id_guru');
        $data['sess_nama_lengkap']  = $this->session->get('sess_nama_lengkap');
        return view('guru/datamateri/V_datamateri_tambah', $data);
    }


    // proses simpan
    function prosestambah(){

        helper(['form', 'url']);

        // model 
        $model = new M_datamateri();

        // session guru
        $sess_id_guru = $this->session->get('sess_id_guru');

        $thumbnail = "";

        $config = array(

            'thumbnail' => [
                'rules' => 'uploaded[berkas]|mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
				'errors' => [
					'uploaded' => 'Harus Ada File yang diupload',
					'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
					'max_size' => 'Ukuran File Maksimal 2 MB'
				]
            ],
        );

        // menyeting konfigurasi upload
        $set_upload = $this->validate( $config );

        if ( $set_upload ) {

            // upload berhasil / memenuhi syarat 
            $file = $this->request->getFile('thumbnail');
            $file->move(WRITEPATH . 'public\assets\images\thumbnail-material');

            // set nilai
            $thumbnail = $file->getName();

        } else {

            echo "Upload error";
        }



        // ambil nilai 
        $modul          = $this->request->getPost('judul_materi');
        $deskripsi      = $this->request->getPost('deskripsi');
        $status         = $this->request->getPost('status');
        $foto    = null;


        $dataMateri = array(

            'id_guru'       => $sess_id_guru,
            'judul'         => $modul,
            'deskripsi'     => $deskripsi,
            'media'         => $thumbnail,
            'materi_status' => $status
        );

        print_r( $dataMateri );
        // return $model->simpanDataMateri( $dataMateri );


    }





    function proseshapus( $id_materi ) {

        $model = new M_datamateri();

        return $model->hapusDataMateri( $id_materi );
    }





    // view edit
    function edit( $id_materi = null ) {

        if ( $id_materi != null ) {


            $model = new M_datamateri();

            $data['sess_id_guru']       = $this->session->get('sess_id_guru');
            $data['sess_nama_lengkap']  = $this->session->get('sess_nama_lengkap');
            $data['materi'] = $model->tampilDataMateriById( $id_materi );


            return view('guru/datamateri/V_datamateri_edit', $data);
        } else {

            echo "Hayoo ngapain, nakal ya ?";
        }
        
    }




    // proses edit
    function prosesedit( $id_materi ) {

        // model 
        $model = new M_datamateri();

        // ambil nilai 
        $modul          = $this->request->getPost('judul_materi');
        $deskripsi      = $this->request->getPost('deskripsi');
        $status         = $this->request->getPost('status');
        $foto    = null;


        $dataMateri = array(

            'judul'         => $modul,
            'deskripsi'     => $deskripsi,
            'media'         => $foto,
            'materi_status' => $status
        );

        return $model->editDataMateri( $id_materi, $dataMateri );
    } 


}