<?php

namespace App\Models;

use CodeIgniter\Model;

class M_profile extends Model{

    // db 
    protected $db;
    protected $session;

    function __construct(){
        
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }



    // fungsi perubahan colorblind 
    function model_perubahancolorblind( $data ) {

        $id_profile = $this->session->get('sess_id_profile');
        $this->db->table('profile')->where('id_profile', $id_profile)->update( $data );
        
    }

    // data user login
    function getProfileAkun() {

        $id_profile = $this->session->get('sess_id_profile');
        $query = $this->db->table('profile')->where('id_profile', $id_profile)->get();
        
        return $query->getRowArray();
    }


    // data siswa
    function getProfileById( $id_profile ) {

        $query = $this->db->table('data_siswa')->where('id_profile', $id_profile)->get();
        
        return $query->getRowArray();
    }


    // update
    function model_prosespengubahanakun( $data, $id_profile ) {

        $this->db->table('data_siswa')->where('id_profile', $id_profile)->update( $data );

        $html = '<div class="alert alert-success">
        
            Pemberitahuan <br>
            <small>Akun berhasil diperbarui pada '.date('d F Y H.i A').'</small>
        </div>';
        $this->session->setFlashdata('pesan', $html);

        // redirect
        return redirect()->to( base_url('dashboard/profile') );
    }

}
