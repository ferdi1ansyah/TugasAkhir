<?php

namespace App\Models;

use App\Controllers\DataSiswa;
use CodeIgniter\Model;

class M_registersiswa extends model {


    protected $table = ['profile','data_siswa'];
    protected $allowedFields = ['username','password','nama_lengkap','domisili','email'];


    function onRegisterProfile ( $data ) 
                {
                 $db = \Config\Database::connect();
                 $db->table('profile')->insert( $data );

                    $last_id = $db->insertID();

                     return $last_id;
                    
                }

    function onRegisterDataSiswa ( $dataSiswa )
                {
                $db = \Config\Database::connect();
                $db->table('data_siswa')->insert( $dataSiswa );

    }
}        