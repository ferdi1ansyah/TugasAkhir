<?php

namespace App\Models;

use CodeIgniter\Model;

class M_quiz extends Model{

    // db 
    protected $db;
    protected $session;

    function __construct(){
        
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }


    // data quiz
    function model_getDataQuizByIdSoal( $id_soal ) {

        return $this->db->table('data_kuis_soal')->where('id_kuis_soal', $id_soal)->get();
    }


    // get data
    function model_getDataQuizByIdMateri( $id_materi ) {

        return $this->db->table('data_kuis_soal')->where('id_materi', $id_materi)->get();
    }



    // hitung yang mengikuti quiz berdasarkan id materi
    function model_getDataEnrollmentKuisByIdMateri( $id_materi ) {

        $sql = "SELECT data_kuis_soal.id_materi, data_kuis_soal.* FROM data_kuis_jawaban 
        JOIN data_kuis_soal ON data_kuis_soal.id_kuis_soal = data_kuis_jawaban.id_kuis_soal 

        WHERE id_materi = '$id_materi' GROUP BY id_profile";

        return $this->db->query( $sql );
    }


    // tambah    
    function model_insertDataQuiz( $data, $id_materi ) {

        $this->db->table('data_kuis_soal')->insert( $data );
        return redirect()->to(base_url('quiz/preview/'. $id_materi));
    }


    // update
    function model_updateDataQuiz( $data, $id_materi, $id_kuis_soal ) {

        $this->db->table('data_kuis_soal')->where('id_kuis_soal', $id_kuis_soal)->update( $data );
        return redirect()->to(base_url('quiz/preview/'. $id_materi.'?soal='. $id_kuis_soal));
    }



    // delete
    function model_deleteDataQuiz( $id_materi, $id_kuis_soal ) {

        $this->db->table('data_kuis_soal')->where('id_kuis_soal', $id_kuis_soal)->delete();
        return redirect()->to(base_url('quiz/preview/'. $id_materi));
    }





    // hitung skor
    function model_hitungskor() {

        $cart = cart();


        $totalBenar = 0;
        foreach ( $cart->contents() AS $row ) {

            $id_kuis_soal = $row['id'];
            $jawaban      = $row['name'];

            $kunci = $this->db->table('data_kuis_soal')->where('id_kuis_soal', $id_kuis_soal)->get()->getRowArray();
            
            if ( $jawaban == $kunci['soal_jawaban'] ) {

                $totalBenar++;
            }
            
            // echo 'jawaban dari '. $id_kuis_soal.' |'.$kunci['soal_jawaban']. ' = '.$jawaban.'<br>';
        }

        $jumlah_soal = count( $cart->contents() );
        $skor = $totalBenar / $jumlah_soal * 100;


        return intval( $skor );
    }


    // insert assignemnt
    function model_insertrekap_infokuis( $dataInfo ){

        $this->db->table('rekap_info_kuis')->insert($dataInfo);
        $last_id = $this->db->insertID();

        return $last_id;
    }



    function model_insertrekap_detailkuis( $data, $id_materi ) {

        $cart = cart();
        $cart->destroy();

        $this->db->table('rekap_detail_kuis')->insertBatch( $data );

        return redirect()->to(base_url('dashboard/achievement'));
    }









    // nilai kuis by siswa
    function nilaiQuizBySiswa() {

        $id_profile = $this->session->get('sess_id_profile');
        $sql = "SELECT rekap_info_kuis.*, data_materi.* 

                FROM rekap_info_kuis 
                JOIN data_materi ON data_materi.id_materi = rekap_info_kuis.id_materi
                
                WHERE rekap_info_kuis.id_profile = '$id_profile'";

        return $this->db->query( $sql );
    }
        
}
    
/* End of file ModelName.php */
    