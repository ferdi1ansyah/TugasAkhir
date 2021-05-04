<?php 

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_datasiswa;
use App\Models\M_category;

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
        $siswa['dataSiswa']      = $model->getDataSiswa();

        return view("admin/datasiswa/V_dataSiswa" , $siswa);

    }


    function tambah() {
        $model = new M_category();
        $data['mapel_kategori'] = $model->getDataKategoriAndSubKategori();

        return view('admin/datasiswa/V_dataSiswa_tambah', $data);
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
            
            
            // print_r( $this->request->getPost() );


            // @TODO 1 : Ambil nilai 
            $password = $this->request->getPost('password');
            $nilaiProfile = array(

                'username'  => $this->request->getPost('username'),
                'password'  => password_hash( $password, PASSWORD_BCRYPT ),
                'hak_akses' => "guru",
                'status_akun' => "aktif",
                'status_2fa'  => "nonaktif",
                'code_2fa'    => null
            );

            $last_id_profile = $model->onInsertDataProfile( $nilaiProfile );

            

            

            // tabel guru
            $nilaiSiswa = array(

                'id_profile'        => $last_id_profile,
                'nama_lengkap'  => $this->request->getPost('nama'),
                'asal_sekolah'  => $this->request->getPost('asalsekolah'),
                'pendidikan_sekarang'    => $this->request->getPost('pendidikan_sekarang'),
                'email'     => $this->request->getPost('email'),
                'telp'      => $this->request->getPost('telp'),
                'foto'      => ""
            );

            $last_id_siswa = $model->onInsertDataSiswa( $nilaiSiswa );


            $mapel_kategori = $this->request->getPost('mapel_kategori');
            $pemisah_id = explode('-', $mapel_kategori);

            // echo $mapel_kategori;
            // $id_mapel_kategori = $pemisah_id[0];
            // $id_mapel_subkategori = $pemisah_id[1];
            
            // $pemisah_id = 
            $nilaiKeahlian = array(

                'id_siswa'           => $last_id_siswa,
                'id_mapel_kategori' => $pemisah_id[0],
                'id_mapel_subkategori' => $pemisah_id[1],
            );

            // insert
            return $model->onInsertDataKeahlian( $nilaiKeahlian );
        }
    
}