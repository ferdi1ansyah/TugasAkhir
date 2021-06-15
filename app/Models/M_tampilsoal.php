<?php

namespace App\Models;

use App\Controllers\TampilSoal;
use CodeIgniter\Model;

class M_tampilsoal extends Model{

    // db 
    protected $db;
    protected $session;

    function __construct(){
        
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    function tampilDataSoal() {
        

        $sess_id_profile = $this->session->get('sess_id_profile');

        $sql = "SELECT
                    data_materi.*, data_kuis_soal.*

                    FROM data_kuis_soal
                    JOIN data_materi ON data_kuis_soal.id_materi = data_materi.id_materi WHERE 
                    data_kuis_soal.id_materi ='$sess_id_profile'";

        $query = $this->db->query( $sql );
        return $query;
    }




}
