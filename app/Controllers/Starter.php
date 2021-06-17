<?php 

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_register;

class Starter extends Controller {


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

}