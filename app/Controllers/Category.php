<?php 

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_category;

class Category extends Controller{


     // property
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

        /**
         * 
         *  View : Halaman Kategori
         */
        function index() {

            $model = new M_category();
            $data['dataMapel']      = $model->getDataCategory();
            $data['submapel']   = $model->getDataSubKategori();


            return view('admin/kategori/V_kategori', $data);
        }





        /**
         * 
         *  Proses : tambah kategori
         * 
         */
        function prosesTambahKategori() {

            // akses model 
            $model = new M_category();

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
            $namamapel = $this->request->getPost('namamapel');
            $status    = $this->request->getPost('status');

            // @TODO 2 : Kirim nilai ke model 
            return $model->onInsertCategory( $namamapel, $status );
        }



        function prosesTambahSubKategori() {

            $model = new M_category();

            // ambil nilai 
            $namamapel = $this->request->getPost('namamapel');
            $submapel  = $this->request->getPost('namasubmapel');
            $status    = $this->request->getPost('status');

            $dataSubCategory = array(

                'id_mapel_kategori' => $namamapel, 
                'name'              => $submapel,
                'status'            => $status
            );

            return $model->onInsertSubCategory( $dataSubCategory );
        }




        // proses hapus
        function prosesHapusSubKategori( $id_mapel_subkategori ) {

            $model = new M_category();

            return $model->onDeleteSubCategory( $id_mapel_subkategori );
        }


        // proses update
        function prosesUpdateSubKategori( $id_mapel_subkategori ) {


            $model = new M_category();

            // ambil nilai 
            $namamapel = $this->request->getPost('namamapel');
            $submapel  = $this->request->getPost('namasubmapel');
            $status    = $this->request->getPost('status');

            $dataSubCategory = array(

                'id_mapel_kategori' => $namamapel, 
                'name'              => $submapel,
                'status'            => $status
            );

            return $model->onUpdateSubCategory( $id_mapel_subkategori, $dataSubCategory );
        }



        function prosesHapusKategori( $id_mapel_kategori ) {
            $model = new M_category();

            // ambil nilai 
           
            return $model->prosesHapusKategori( $id_mapel_kategori);
        }

        function prosesUpdateKategori( $id_mapel_kategori ) {


            $model = new M_category();

            // ambil nilai 
            $mapel  = $this->request->getPost('namamapel');
            $status    = $this->request->getPost('status');

            $dataCategory = array(

                'nama'              => $mapel,
                'status'            => $status
            );

            return $model->onUpdateCategory( $id_mapel_kategori, $dataCategory );
        }






    

        function testing() {

            $password = "password";
            echo password_hash($password, PASSWORD_BCRYPT);
        }
        
    }