<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class M_dataguru extends Model{


        // query data sub category
        function getDataGuru() {

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






    }
