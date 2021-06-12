<?php

namespace App\Models;

use CodeIgniter\Model;

class M_datamateriadmin extends Model{

    // db 
    protected $db;
    protected $session;

    function __construct(){
        
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }




    // fungsi tampil materi
    function tampilDataMateri() {

        $sess_id_profile = $this->session->get('sess_id_profile');
        $sql = "SELECT data_materi.*, profile.*, profile.* 
        FROM data_materi 
        INNER JOIN profile ON data_materi.id_profile = profile.id_profile";
        $query = $this->db->query( $sql );
        return $query;
    }


    // tampil materi by id
    function tampilDataMateriById( $id_materi ) {

        $sql = "SELECT * FROM data_materi WHERE id_materi = '$id_materi'";

        $query = $this->db->query( $sql );
        return $query->getRowArray();
    }



    // fungsi simpan materi
    function simpanDataMateri( $dataMateri ) {

        $this->db->table('data_materi')->insert( $dataMateri );

        return redirect()->to(base_url('Datamateriadmin/index'));
    }



    // fungsi hapus
    function hapusDataMateri( $id_materi ) {

        $this->db->table('data_materi')->where('id_materi', $id_materi)->delete();

        return redirect()->to(base_url('Datamateriadmin/index'));
    }



    function editDataMateri( $id_materi, $dataMateri ) {

        $this->db->table('data_materi')
                 ->where('id_materi', $id_materi)
                 ->update( $dataMateri );

        return redirect()->to(base_url('Datamateriadmin/index'));
    }
}