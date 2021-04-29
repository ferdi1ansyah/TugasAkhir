<?php 

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_dataguru;

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
            
        

            // @TODO 1 : Ambil nilai 
            $namalengkap     = $this->request->getPost('nama_lengkap');
            $gender          = $this->request->getPost('gender');
            $asalsekolah     = $this->request->getPost('asal_sekolah');
            $pendidikan      = $this->request->getPost('pendidikan');
            $email           = $this->request->getPost('email');
            $telp            = $this->request->getPost('telp');
            $foto            = $this->request->getPost('foto');


            

            
            // @TODO 2 : Kirim nilai ke model 
            return $model->onInsertGuru( $namalengkap, $gender, $asalsekolah, 
                                                $pendidikan, $email, $telp, $foto);
        }
        
        // function prosesHapusKategori( $id_mapel_kategori ) {
        //     $model = new M_dataguru();

        //     // ambil nilai 
           
        //     return $model->prosesHapusKategori( $id_mapel_kategori);
        // }

        // function prosesUpdateKategori( $id_mapel_kategori ) {


        //     $model = new M_dataguru();

        //     // ambil nilai 
        //     $mapel  = $this->request->getPost('namamapel');
        //     $status    = $this->request->getPost('status');

        //     $dataCategory = array(

        //         'nama'              => $mapel,
        //         'status'            => $status
        //     );

        //     return $model->onUpdateCategory( $id_mapel_kategori, $dataCategory );
        // }



    function index2() {
        return view("guru/datamateri/V_datamateri.php");
    }
    
}