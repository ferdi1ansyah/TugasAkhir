<?php
namespace App\Controllers;

use App\Models\M_quiz;
use CodeIgniter\Controller;


class Siswa extends Controller {


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
    }M                                                                                      M                                                           

    // show all quiz
    public function index(){
            
        function quizdiikuti(  ) {

            return view('siswa/materi_kelas');
    
        }
    
    
    
    
    }

    