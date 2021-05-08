<?php

namespace App\Models;

use CodeIgniter\Model;

class M_datamateri extends Model{

    // db 
    protected $db;
    protected $session;

    function __construct(){
        
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }




    // fungsi tampil materi
    function tampilDataMateri() {

        $sess_id_guru = $this->session->get('sess_id_guru');
        $sql = "SELECT * FROM data_materi WHERE id_guru = '$sess_id_guru'";

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

        return redirect()->to(base_url('datamateri/index'));
    }



    // fungsi hapus
    function hapusDataMateri( $id_materi ) {

        $this->db->table('data_materi')->where('id_materi', $id_materi)->delete();

        return redirect()->to(base_url('datamateri/index'));
    }



    function editDataMateri( $id_materi, $dataMateri ) {

        $this->db->table('data_materi')
                 ->where('id_materi', $id_materi)
                 ->update( $dataMateri );

        return redirect()->to(base_url('datamateri/index'));
    }
}