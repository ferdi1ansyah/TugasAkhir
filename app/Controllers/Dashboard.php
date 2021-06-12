<?php 

namespace App\Controllers;
use CodeIgniter\Controller;

class Dashboard extends Controller {



    // property
    protected $session;

    function __construct() { // konstruktor

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


    /**
     * 
     *  View dashboard
     * 
     */
    function index() {

        // echo $this->session->get('sess_username');
        return view('admin/dashboard/V_dashboard');
    }

    function index2() {

        // echo $this->session->get('sess_username');
        return view('guru/dashboard/V_dashboard');
    }

    function index3() {

        // echo $this->session->get('sess_username');
        return view('siswa/V_dashboard');
    }

    function index4() {


        return view('templates/template_video_pembelajaran')
    }


    function index5() {


        return view('templates/template_detail_konten')
    }




}