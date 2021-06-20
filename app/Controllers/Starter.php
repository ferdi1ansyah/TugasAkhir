<?php 

namespace App\Controllers;

use App\Models\M_profile;
use CodeIgniter\Controller;
use App\Models\M_register;

class Starter extends Controller {


    protected $session;

    function __construct(){
        
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    function index6() {
        return view('templates/template_landingpage_utama');
    }


    // starter guru
    function index7() {
        return view('templates/template_landingGuru');
    }


    // memverifikasi status starter 0 menadi 1
    function launch() {

        $session = \Config\Services::session();
        $model = new M_register();


        $id_profile = $session->get('sess_id_profile');

        $data = array(

            'starter'   => 1
        );
        return $model->model_prosesupdatestarter( $id_profile, $data );
    }






    // konfigurasi warna (colorblind)
    function change_colorblind() {


        $model = new M_profile();

        $data = array(
            'colorblind'    => $this->request->getGet('colorblind')
        );

        $model->model_perubahancolorblind( $data );
    }


    function get_colorblind() {

        $model = new M_profile();

        $dataProfile = $model->getProfileAkun();
        // print_r( $dataProfile );
        echo json_encode( $dataProfile );
    }

}