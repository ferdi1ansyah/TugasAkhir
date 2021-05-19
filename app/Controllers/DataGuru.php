<?php 

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_dataguru;
use App\Models\M_category;

class DataGuru extends Controller{

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

        $model = new M_dataguru();
        $guru['dataGuru']      = $model->getDataGuru();

        return view("admin/dataguru/V_dataGuru" , $guru);

    }


    function tambah() {
        $model = new M_category();
        $data['mapel_kategori'] = $model->getDataKategoriAndSubKategori();

        return view('admin/dataguru/V_dataGuru_tambah', $data);
    }


    /**
         * 
         *  Proses : tambah guru
         * 
         */
        function prosesTambahGuru() {

            // akses model 
            $model = new M_dataguru();

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
            $nilaiGuru = array(

                'id_profile'        => $last_id_profile,
                'nama_lengkap'  => $this->request->getPost('nama'),
                'asal_sekolah'  => $this->request->getPost('asalsekolah'),
                'pendidikan'    => $this->request->getPost('pendidikan'),
                'email'     => $this->request->getPost('email'),
                'telp'      => $this->request->getPost('telp'),
                'foto'      => ""
            );

            $last_id_guru = $model->onInsertDataGuru( $nilaiGuru );


            $mapel_kategori = $this->request->getPost('mapel_kategori');
            $pemisah_id = explode('-', $mapel_kategori);

            // echo $mapel_kategori;
            // $id_mapel_kategori = $pemisah_id[0];
            // $id_mapel_subkategori = $pemisah_id[1];
            
            // $pemisah_id = 
            $nilaiKeahlian = array(

                'id_guru'           => $last_id_guru,
                'id_mapel_kategori' => $pemisah_id[0],
                'id_mapel_subkategori' => $pemisah_id[1],
            );

            // insert
            return $model->onInsertDataKeahlian( $nilaiKeahlian );
        }
    


        function prosesHapusGuru( $last_id_guru ) {
            $model = new M_dataguru();

            // ambil nilai 
           
            return $model->prosesHapusGuru( $last_id_guru);
        }

        function prosesUpdateGuru( $last_id_guru ) {


            $model = new M_dataguru();

            // ambil nilai 
                $namalengkap  = $this->request->getPost('nama_lengkap');
                $asalsekolah    = $this->request->getPost('asal_sekolah');
                $pendidikan    = $this->request->getPost('pendidikan');
                $email    = $this->request->getPost('email');
                $telp    = $this->request->getPost('telp');
                $foto    = $this->request->getPost('foto');


            $dataGuru = array(

            'nama_lengkap'      => $namalengkap,
            'asal_sekolah'      => $asalsekolah,
            'pendidikan'        => $pendidikan,
            'email'             => $email,
            'telp'              => $telp,
            'foto'              => $foto

            );

            return $model->onUpdateCategory( $last_id_guru,$dataGuru);
        }


    function viewDataMateri() {

        return view('guru/upload/V_upload');
    }


    function edit( $id_guru ) {

        $model = new M_category();
        $model_guru = new M_dataguru();

        $ambilDataGuru = $model_guru->getDataGuruById( $id_guru );
        $data['data_guru']     = $ambilDataGuru->getRowArray();

        return view('admin/dataGuru/V_dataGuru_edit', $data);

    }

    function prosesUbahGuru( $id_guru, $id_profile ) {

        $model_guru = new M_dataguru();

        $namalengkap  = $this->request->getPost('nama_lengkap');
                $asalsekolah    = $this->request->getPost('asal_sekolah');
                $pendidikan    = $this->request->getPost('pendidikan');
                $email    = $this->request->getPost('email');
                $telp    = $this->request->getPost('telp');
                $foto    = $this->request->getPost('foto');
        
        // 
        $dataGuru = array(

            'nama_lengkap'      => $namalengkap,
            'asal_sekolah'      => $asalsekolah,
            'pendidikan'        => $pendidikan,
            'email'             => $email,
            'telp'              => $telp,
            'foto'              => $foto
          

        );

        // profile  atau akunsiswa
        $dataAkunGuru = array(

            'status_akun'   => $this->request->getPost('status_akun')
        );

        return $model_guru->prosesUpdate( $id_profile, $id_guru, $dataGuru, $dataAkunGuru ); 
    }





}