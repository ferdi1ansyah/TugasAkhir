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
                'hak_akses' => "siswa",
                'status_akun' => "aktif",
                'status_2fa'  => "nonaktif",
                'code_2fa'    => null
            );

            $last_id_profile = $model->onInsertDataProfile( $nilaiProfile );

            

            

            // tabel guru
            $nilaiSiswa = array(

                
                'id_profile'        => $last_id_profile,
                'nama_lengkap'  => $this->request->getPost('nama'),
                'gender'  => $this->request->getPost('gender'),
                'domisili'  => $this->request->getPost('domisili'),
                'tanggal_lahir'  => $this->request->getPost('tanggal_lahir'),
                'alamat'  => $this->request->getPost('alamat'),

                'asal_sekolah'  => $this->request->getPost('asal_sekolah'),
                'pendidikan_sekarang'    => $this->request->getPost('pendidikan_sekarang'),
                'email'     => $this->request->getPost('email'),
                'telp'      => $this->request->getPost('telp'),
                'foto'      => ""
            );

            return $model->onInsertDataSiswa( $nilaiSiswa );
        }




        function prosesHapusSiswa( $last_id_siswa ) {
            $model = new M_datasiswa();

            // ambil nilai 
           
            return $model->prosesHapusSiswa( $last_id_siswa);
        }

        function prosesUpdateSiswa( $last_id_siswa ) {


            $model = new M_datasiswa();

            // ambil nilai 
                $namalengkap  = $this->request->getPost('nama_lengkap');
                $gender = $this->request->getPost('gender');
                $domisili  = $this->request->getPost('domisili');
                $tanggal_lahir  = $this->request->getPost('tanggal_lahir');
                $alamat  = $this->request->getPost('alamat');
                $asalsekolah    = $this->request->getPost('asal_sekolah');
                $pendidikan_sekarang    = $this->request->getPost('pendidikan_sekarang');
                $email    = $this->request->getPost('email');
                $telp    = $this->request->getPost('telp');
                $foto    = $this->request->getPost('foto');


            $dataSiswa = array(

            'nama_lengkap'      => $namalengkap,
            'gender'            => $gender,
            'domisili'          => $domisili,
            'tanggal_lahir'     => $tanggal_lahir,
            'alamat'            => $alamat,
            'asal_sekolah'      => $asalsekolah,
            'pendidikan_sekarang'        => $pendidikan_sekarang,
            'email'             => $email,
            'telp'              => $telp,
            'foto'              => $foto

            );

            return $model->onUpdateCategory( $last_id_siswa,$dataSiswa);
        }


    function viewDataMateri() {

        return view('siswa/upload/V_upload');
    }






    // view edit siswa
    function edit( $id_siswa ) {

        $model = new M_category();
        $model_siswa = new M_datasiswa();

        $ambilDataSiswa = $model_siswa->getDataSiswaById( $id_siswa );
        $data['data_siswa']     = $ambilDataSiswa->getRowArray();

        return view('admin/dataSiswa/V_dataSiswa_edit', $data);
    }
    


    // ubah 
    function prosesUbahSiswa( $id_siswa, $id_profile ) {

        $model_siswa = new M_datasiswa();

        $namalengkap  = $this->request->getPost('nama');
        $gender = $this->request->getPost('gender');
        $domisili  = $this->request->getPost('domisili');
        $tanggal_lahir  = $this->request->getPost('tanggal_lahir');
        $alamat  = $this->request->getPost('alamat');
        $asalsekolah    = $this->request->getPost('asal_sekolah');
        $pendidikan_sekarang    = $this->request->getPost('pendidikan_sekarang');
        $email    = $this->request->getPost('email');
        $telp    = $this->request->getPost('telp');
        $foto    = $this->request->getPost('foto');
        
        // siswa
        $dataSiswa = array(

            'nama_lengkap'      => $namalengkap,
            'gender'            => $gender,
            'domisili'          => $domisili,
            'tanggal_lahir'     => $tanggal_lahir,
            'alamat'            => $alamat,
            'asal_sekolah'      => $asalsekolah,
            'pendidikan_sekarang'        => $pendidikan_sekarang,
            'email'             => $email,
            'telp'              => $telp,
            'foto'              => $foto

        );

        // profile  atau akunsiswa
        $dataAkun = array(

            'status_akun'   => $this->request->getPost('status_akun')
        );

        return $model_siswa->prosesUpdate( $id_profile, $id_siswa, $dataSiswa, $dataAkun );
    }
}