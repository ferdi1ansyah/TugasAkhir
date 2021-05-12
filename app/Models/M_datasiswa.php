<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class M_datasiswa extends Model{

        // database
        protected $db;
        function __construct(){
            

            $this->db = \Config\Database::connect();
        }
        


        // query data sub category
        function getDataSiswa() {

            // SELECT 
            //     profile.*, data_guru.*, guru_mapel.*, mapel_kategori.*, mapel_subkategori.*
            // FROM profile 

            // INNER JOIN data_guru ON data_guru.id_profile = profile.id_profile
            // INNER JOIN guru_mapel ON guru_mapel.id_guru = data_guru.id_guru
            // INNER JOIN mapel_kategori ON mapel_kategori.id_mapel_kategori = guru_mapel.id_mapel_kategori
            // INNER JOIN mapel_subkategori ON mapel_subkategori.id_mapel_subkategori = guru_mapel.id_mapel_subkategori
                


            // load db
            $db      = \Config\Database::connect();
            $query = $db->table('data_siswa')->get();

            return $query;
        }

    // proses tambah guru
    function onInsertSiswa( $namalengkap,$gender, $domisili,$tanggallahir, $asalsekolah, $pendidikansekarang, $email, $telp ,$foto ) {

        $db      = \Config\Database::connect();


        // @TODO 3 : Menyiapkan kolom tabel guru dan menambahkan nilai
        $dataSiswa = array(

            'nama_lengkap'      => $namalengkap,
            'gender'      => $gender,
            'domisili'      => $domisili,
            'tanggal_lahir'      => $tanggallahir,
            'asal_sekolah'      => $asalsekolah,
            'pendidikan_sekarang'        => $pendidikansekarang,
            'email'             => $email,
            'telp'              => $telp,
            'alamat'            => $alamat,
            'foto'              => $foto

        );


        // @TODO 4 : Eksekusi Query (Insert)
        $db->table('data_siswa')->insert( $dataSiswa );

        // redirect
        return redirect()->to( base_url( 'datasiswa' ) );
    }





    // fungsi insert profile 
    function onInsertDataProfile( $nilaiProfile ) {
        
        $this->db->table('profile')->insert( $nilaiProfile );
        $last_id = $this->db->insertID();

        return $last_id;
    }
    // fungsi insert guru 
    function onInsertDataSiswa( $nilaiSiswa ) {

        $this->db->table('data_siswa')->insert( $nilaiSiswa );
        $last_id = $this->db->insertID();

        return redirect()->to(base_url('datasiswa/index'));
    }
    function prosesHapusSiswa( $last_id_siswa ){

        // load db
        $db      = \Config\Database::connect();
        $session = \Config\Services::session();
        
        $db->table('data_siswa')
            ->where('id_siswa', $last_id_siswa)
            ->delete();


        $elementHTML = '<div class="alert alert-success">Pemberitahuan <br> <small>Mapel subkategori berhasil terhapus</small></div>';
        $session->setFlashdata('pesan', $elementHTML);
        
        // redirect
        $url = base_url( 'datasiswa' );
        return redirect()->to( $url );
    }




    }
