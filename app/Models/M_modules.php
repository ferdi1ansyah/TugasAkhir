<?php

namespace App\Models;

use CodeIgniter\Model;

class M_modules extends Model{

    // db 
    protected $db;
    protected $session;

    function __construct(){
        
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }




    // get data enrollment
    function getDataPendaftaranByIdProfile_IdMateri( $id_materi ) {

        $id_profile = $this->session->get('sess_id_profile');
        $where = array(

            'id_materi'     => $id_materi,
            'id_profile'    => $id_profile
        );

        $query = $this->db->table('pendaftaran_materi')->where( $where )->get();

        return $query;

    }




    // enroll classroom
    function daftarKelasMateri( $id_materi, $page = null) {


        $cekPendaftaran = $this->getDataPendaftaranByIdProfile_IdMateri( $id_materi );
        $id_profile = $this->session->get('sess_id_profile');

        if ( $cekPendaftaran->getNumRows() == 0 ) {

            // ambil data materi pertama by id materi 
            $dataMateriPertama = $this->db->table('data_materi_detail')->where('id_materi', $id_materi)->get()->getRowArray();
            
            
            $data = array(

                'id_materi' => $id_materi,
                'id_profile'    => $id_profile,
                'index_materi'  => $dataMateriPertama['id_materi_detail'],
            );
            $this->db->table('pendaftaran_materi')->insert( $data );
        } else {

            $data = array(

                'index_materi'  => $page,
            );

            $whereUpdate = array(


                'id_materi' => $id_materi,
                'id_profile'=> $id_profile
            );

            $this->db->table('pendaftaran_materi')->where($whereUpdate)->update( $data );

        }
    }


}