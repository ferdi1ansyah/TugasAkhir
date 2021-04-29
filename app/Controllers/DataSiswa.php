<?php 

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_datasiswa;

class DataSiswa extends Controller{

    protected $session;

    function __construct() { // konstruktor

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
    function index() {

        $model = new M_datasiswa();
        $data['dataSiswa']      = $model->getDataSiswa();

        return view("admin/DataSiswa/V_dataSiswa" , $data);

    }


    /**
         * 
         *  Proses : tambah guru
         * 
         */
        function prosesTambahSiswa() {

            // akses model 
            $model = new M_datasiswa();

            /**
             *  To Do List
             *  1. Ambil nilai nama dan status dari view
             *  2. Kirim nilai ke model
             *  3. Menyiapkan kolom tabel kategori dan menambahkan nilai (set value)
             *  4. Eksekusi Query (insert)
             *  5. End / kembali ke halaman sebelumnya
             *  
             */
            
        

            // @TODO 1 : Ambil nilai 
            $namalengkap     = $this->request->getPost('nama_lengkap');
            $gender          = $this->request->getPost('gender');
            $domisili          = $this->request->getPost('domsili');
            $tanggal_lahir          = $this->request->getPost('tanggal_lahir');
            $email           = $this->request->getPost('email');
            $telp            = $this->request->getPost('telp');
            $alamat                   = $this->request->getPost('alamat');
            $pendidikan_sekarang      = $this->request->getPost('pendidikan_sekarang');
            $asal_sekolah     = $this->request->getPost('asal_sekolah');
            $foto            = $this->request->getPost('foto');
            
            // @TODO 2 : Kirim nilai ke model 
            return $model->onInsertSiswa( $namalengkap, $gender, $domisili,$tanggal_lahir,$email, $telp,$alamat,
         
                                                $pendidikan_sekarang,$asal_sekolah , $foto);
        }

    // function index2() {
    //     return view("guru/datamateri/V_datamateri.php");
    // }
    
}

 
