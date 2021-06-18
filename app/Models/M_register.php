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



    function model_prosesverifikasi( $id_profile, $data ) {

        $db = \Config\Database::connect();
        $session = \Config\Services::session();

        $db->table('profile')->where('id_profile', $id_profile)->update( $data );

        // memasang session flashdata untuk menampilkan pesan 
        $elementHTML = '<div class="alert alert-success">Silahkan melakukan login</small></div>';
        $session->setFlashdata('pesan', $elementHTML);

        return redirect()->to(base_url('login/index'));
    }



    function model_prosesupdatestarter( $id_profile, $data ) {

        $db = \Config\Database::connect();
        $session = \Config\Services::session();

        $db->table('profile')->where('id_profile', $id_profile)->update( $data );
        return redirect()->to(base_url('dashboard/index2'));
    }
}        