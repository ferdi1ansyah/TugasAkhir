<?php 

    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Models\M_category;

class Category extends Controller{


        /**
         * 
         *  View : Halaman Kategori
         */
        function index() {

            $model = new M_category();
            $data['mapel'] = $model->getDataCategory();


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
    }