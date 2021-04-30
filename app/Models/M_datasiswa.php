<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class M_datasiswa extends Model{



        // query data sub category
        function getDataSiswa() {

            // load db
            $db      = \Config\Database::connect();
            $query = $db->table('data_siswa')->get();

            return $query;

        }

     // proses tambah guru
     function onInsertSiswa( $namalengkap, $gender,$domisili,$tanggal_lahir, $asalsekolah,$pendidikan_sekarang, $email, $telp,$alamat, $foto ) {

        $db      = \Config\Database::connect();


        // @TODO 3 : Menyiapkan kolom tabel guru dan menambahkan nilai
        $dataSiswa = array(

            'nama_lengkap'      => $namalengkap,
            'gender'            => $gender,
            'domisili'          => $domisili,
            'tanggal_lahir'     => $tanggal_lahir,
            'asal_sekolah'      => $asalsekolah,
            'pendidikan_sekarang'        => $pendidikan_sekarang,
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






    }

