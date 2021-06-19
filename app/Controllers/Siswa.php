<?php
namespace App\Controllers;

use App\Models\M_quiz;
use App\Models\M_datamateri;

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
    }

                                                          
    function materi_kelas() {

        $model = new M_datamateri();
        $data['materi'] = $model->ambilDaftarMateriBySiswa();

        return view('siswa/materi_kelas', $data);

    }
}


    