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



    function tampilAllDataMateri() {

        $sql = "SELECT data_materi.*, profile.*, data_guru.* FROM data_materi
                JOIN profile ON profile.id_profile = data_materi.id_profile
                JOIN data_guru ON data_guru.id_profile = profile.id_profile";

        $query = $this->db->query( $sql );
        return $query;
    }



    // fungsi tampil materi
    function tampilDataMateri() {

        $sess_id_profile = $this->session->get('sess_id_profile');
        $sql = "SELECT * FROM data_materi WHERE id_profile = '$sess_id_profile'";

        $query = $this->db->query( $sql );
        return $query;
    }


    // tampil materi by id
    function tampilDataMateriById( $id_materi ) {

        $sql = "SELECT data_materi.*, profile.*, data_guru.* FROM data_materi
                JOIN profile ON profile.id_profile = data_materi.id_profile
                JOIN data_guru ON data_guru.id_profile = profile.id_profile 
                
                WHERE id_materi = '$id_materi'";

        $query = $this->db->query( $sql );
        return $query->getRowArray();
    }



    // tampil materi detail 
    function tampilDataMateriDetail( $where = null ) {

        if ( $where ) {

            $builder = $this->db->table('data_materi_detail')->where($where);
            return $builder->get();
        } else {

            return $this->db->table('data_materi_detail')->get();
        }
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




    // simpan data materi detail 
    function simpanDataMateriDetail( $id_materi, $dataMateri ) {

        $this->db->table('data_materi_detail')->insert( $dataMateri );
        return redirect()->to(base_url('datamateri/detail/'. $id_materi));
    }



    function updateDataMateriDetail( $id_materi, $id_materi_detail, $dataMateriDetail ) {

        $this->db->table('data_materi_detail')->where('id_materi_detail', $id_materi_detail)->update( $dataMateriDetail );
        return redirect()->to(base_url('datamateri/detail/'. $id_materi));
    }



    // hapus
    function proseshapusmateridetail( $id_materi, $id_materi_detail ) {

        $this->db->table('data_materi_detail')->where('id_materi_detail', $id_materi_detail)->delete();
        return redirect()->to(base_url('datamateri/detail/'. $id_materi));
    }
}