<?php
namespace App\Controllers;

use App\Models\M_quiz;
use CodeIgniter\Controller;


class Quiz extends Controller {


    private $session;

    function __construct(){
        
        $this->session = \Config\Services::session();   

        // cek sesi aktif 
        if ( empty( $this->session->get('sess_username') ) ) {

            // flashdata
            $this->session->setFlashdata('pesan', 'Harap login terlebih dahulu');

            $url = base_url('login/index');
            header('Location: '.$url);

            exit(); 
        }
    }

    // show all quiz
    public function index1(){
            


        function materi_kelas( $id_materi, $id_kuis_soal ) {

            return view('siswa/V_kelas');
    
        }
    
    
    
    
    }
       


    }






