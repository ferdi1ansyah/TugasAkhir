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
                                                          

    // show all quiz
<<<<<<< HEAD
     
=======
    public function index(){
            
>>>>>>> b13a2da430b57fffd7975d5ec1bae8e23ee96a34
        function materi_kelas(  ) {

            return view('siswa/materi_kelas');
    
        }
    
    
    
    
    }
}


    