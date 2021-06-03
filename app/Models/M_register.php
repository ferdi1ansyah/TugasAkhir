<?php

namespace App\Models;

use App\Controllers\DataGuru;
use CodeIgniter\Model;

class M_register extends model {


    protected $table = ['profile','data_guru'];
    protected $allowedFields = ['username','password','nama_lengkap','email'];


    function onRegisterProfile ( $data ) 
                {
                 $db = \Config\Database::connect();
                 $db->table('profile')->insert( $data );

                    $last_id = $db->insertID();

                     return $last_id;
                    
                }

    function onRegisterDataGuru ( $dataGuru )
                {
                $db = \Config\Database::connect();
                $db->table('data_guru')->insert( $dataGuru );

    }
}        