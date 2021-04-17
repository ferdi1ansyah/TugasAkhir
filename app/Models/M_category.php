<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class M_category extends Model{



        function getDataCategory() {

            // load db
            $db      = \Config\Database::connect();
            return $db->table('mapel_kategori')->get();
        }


        // proses tambah category
        function onInsertCategory( $namamapel, $status ) {

            // load db
            $db      = \Config\Database::connect();


            // @TODO 3 : Menyiapkan kolom tabel kategori dan menambahkan nilai
            $nilaiKategori = array(

                'nama'      => $namamapel,
                'status'    => $status
            );


            // @TODO 4 : Eksekusi Query (Insert)
            $db->table('mapel_kategori')->insert( $nilaiKategori );

            // redirect
            return redirect()->to( base_url( 'category' ) );
        }
    }