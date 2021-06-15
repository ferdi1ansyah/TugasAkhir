<?php 

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_tampilsoal;

class TampilSoal extends Controller{


    function __construct(){


        $this->session = \Config\Services::session();  
        
        if ( empty( $this->session->get('sess_username') ) ) {

            // flashdata
            $this->session->setFlashdata('pesan', 'Harap login terlebih dahulu');

            $url = base_url('login/index');
            header('Location: '.$url);

            exit(); 
    }
}



    function index() {

        $model = new M_tampilsoal();


        $data['sess_id_profile']       = $this->session->get('sess_id_profile');
        $data['materi'] = $model->tampilDataSoal();

        return view('siswa/v_tampilsoal');
    }
    
}
