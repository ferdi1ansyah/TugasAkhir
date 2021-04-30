<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class M_dataguru extends Model{

        // database
        protected $db;
        function __construct(){
            

            $this->db = \Config\Database::connect();
        }
        


        // query data sub category
        function getDataGuru() {

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
    function onInsertGuru( $namalengkap, $gender, $asalsekolah, $pendidikan, $email, $telp ,$foto ) {

        $db      = \Config\Database::connect();


        // @TODO 3 : Menyiapkan kolom tabel guru dan menambahkan nilai
        $dataGuru = array(

            'nama_lengkap'      => $namalengkap,
            'gender'            => $gender,
            'asal_sekolah'      => $asalsekolah,
            'pendidikan'        => $pendidikan,
            'email'             => $email,
            'telp'              => $telp,
            'foto'              => $foto

        );


        // @TODO 4 : Eksekusi Query (Insert)
        $db->table('data_guru')->insert( $dataGuru );

        // redirect
        return redirect()->to( base_url( 'dataguru' ) );
    }





    // fungsi insert profile 
    function onInsertDataProfile( $nilaiProfile ) {
        
        $this->db->table('profile')->insert( $nilaiProfile );
        $last_id = $this->db->insertID();

        return $last_id;
    }
    // fungsi insert guru 
    function onInsertDataGuru( $nilaiGuru ) {

        $this->db->table('data_guru')->insert( $nilaiGuru );
        $last_id = $this->db->insertID();

        return $last_id;
    }
    // fungsi insert mapel 
    function onInsertDataKeahlian( $nilaiKeahlian ) {

        $this->db->table('guru_mapel')->insert( $nilaiKeahlian );

        return redirect()->to( base_url('dataguru/index') );
    }





    }