<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class M_category extends Model{


        // query data sub category
        function getDataSubKategori() {

            // load db
            $db      = \Config\Database::connect();
            $query = $db->table('mapel_subkategori')->get();

            return $query;

        }


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





        function onInsertSubCategory( $dataSubCategory ) {

            // load db
            $db      = \Config\Database::connect();
            $db->table('mapel_subkategori')->insert( $dataSubCategory );

            // redirect
            $url = base_url( 'category' );
            return redirect()->to( $url );

        }



        // delete
        function onDeleteSubCategory( $id_mapel_subkategori ){

            // load db
            $db      = \Config\Database::connect();
            $session = \Config\Services::session();
            
            $db->table('mapel_subkategori')
                ->where('id_mapel_subkategori', $id_mapel_subkategori)
                ->delete();


            $elementHTML = '<div class="alert alert-success">Pemberitahuan <br> <small>Mapel subkategori berhasil terhapus</small></div>';
            $session->setFlashdata('pesan', $elementHTML);
            
            // redirect
            $url = base_url( 'category' );
            return redirect()->to( $url );
        }


        // update
        function onUpdateSubCategory( $id_mapel_subkategori, $dataSubCategory ){

            // load db
            $db      = \Config\Database::connect();
            $session = \Config\Services::session();

            $elementHTML = '<div class="alert alert-success">Pemberitahuan <br> 
                            <small>Mapel subkategori berhasil diperbarui</small>
                            </div>';
            $session->setFlashdata('pesan', $elementHTML);


             $db->table('mapel_subkategori')
                ->where('id_mapel_subkategori', $id_mapel_subkategori)
                ->update( $dataSubCategory );
 
             // redirect
             $url = base_url( 'category' );
             return redirect()->to( $url );
        }

        function prosesHapusKategori( $id_mapel_kategori ){

            // load db
            $db      = \Config\Database::connect();
            $session = \Config\Services::session();
            
            $db->table('mapel_kategori')
                ->where('id_mapel_kategori', $id_mapel_kategori)
                ->delete();


            $elementHTML = '<div class="alert alert-success">Pemberitahuan <br> <small>Mapel subkategori berhasil terhapus</small></div>';
            $session->setFlashdata('pesan', $elementHTML);
            
            // redirect
            $url = base_url( 'category' );
            return redirect()->to( $url );
        }

        function onUpdateCategory( $id_mapel_kategori, $dataCategory ){

            // load db
            $db      = \Config\Database::connect();
            $session = \Config\Services::session();

            $elementHTML = '<div class="alert alert-success">Pemberitahuan <br> 
                            <small>Mapel subkategori berhasil diperbarui</small>
                            </div>';
            $session->setFlashdata('pesan', $elementHTML);


             $db->table('mapel_kategori')
                ->where('id_mapel_kategori', $id_mapel_kategori)
                ->update( $dataCategory );
 
             // redirect
             $url = base_url( 'category' );
             return redirect()->to( $url );
        }



    }