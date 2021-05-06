<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class M_dataguru2 extends Model{

        // database
        protected $db;
        function __construct(){
            

            $this->db = \Config\Database::connect();

        }
        function getDataGuru2() {

            // SELECT 
            //     profile.*, data_guru.*, guru_mapel.*, mapel_kategori.*, mapel_subkategori.*
            // FROM profile 

            // INNER JOIN data_guru ON data_guru.id_profile = profile.id_profile
            // INNER JOIN guru_mapel ON guru_mapel.id_guru = data_guru.id_guru
            // INNER JOIN mapel_kategori ON mapel_kategori.id_mapel_kategori = guru_mapel.id_mapel_kategori
            // INNER JOIN mapel_subkategori ON mapel_subkategori.id_mapel_subkategori = guru_mapel.id_mapel_subkategori
                


            // load db
            $db      = \Config\Database::connect();
            $query = $db->table('data_guru')->get();

            return $query;
        }

             // proses tambah guru
    function onInsertGuru2( $namalengkap, $asalsekolah, $pendidikan, $email, $telp ,$foto ) {

        $db      = \Config\Database::connect();


        // @TODO 3 : Menyiapkan kolom tabel guru dan menambahkan nilai
        $dataGuru2 = array(

            'nama_lengkap'      => $namalengkap,
            'asal_sekolah'      => $asalsekolah,
            'pendidikan'        => $pendidikan,
            'email'             => $email,
            'telp'              => $telp,
            'foto'              => $foto

        );


        // @TODO 4 : Eksekusi Query (Insert)
        $db->table('data_guru')->insert( $dataGuru2 );

        // redirect
        return redirect()->to( base_url( 'dataguru' ) );
    }

    // fungsi insert profile 
    function onInsertDataProfile2( $nilaiProfile ) {
        
        $this->db->table('profile')->insert( $nilaiProfile );
        $last_id = $this->db->insertID();

        return $last_id;
    }
    // fungsi insert guru 
    function onInsertDataGuru2( $nilaiGuru ) {

        $this->db->table('data_guru')->insert( $nilaiGuru );
        $last_id = $this->db->insertID();

        return $last_id;
    }
    // fungsi insert mapel 
    function onInsertDataKeahlian2( $nilaiKeahlian ) {

        $this->db->table('guru_mapel')->insert( $nilaiKeahlian );

        return redirect()->to( base_url('dataguru/index') );
    }



        }