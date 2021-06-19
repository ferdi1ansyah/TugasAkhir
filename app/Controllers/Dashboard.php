<?php 

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_datamateri;
use App\Models\M_modules;
use App\Models\M_profile;

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

        echo $this->session->get('sess_username');
        return view('guru/dashboard/V_dashboard');
    }

    function index3() {

        $model = new M_datamateri();


        $data['materi'] = $model->tampilAllDataMateri();

        // echo $this->session->get('sess_username');
        return view('siswa/V_dashboard', $data);
    }



    // start course
    function course( $id_materi ) {


        $page = $this->request->getGet('page');

        $model_modul = new M_modules();
        $model_materi = new M_datamateri();

        $model_modul->daftarKelasMateri( $id_materi, $page );

        $dataPendaftaran = $model_modul->getDataPendaftaranByIdProfile_IdMateri( $id_materi )->getRowArray();
        $halaman_dibuka = $dataPendaftaran['index_materi'];


        // data materi detail
        $whereMateri = ['id_materi' => $id_materi];
        $whereMateriBuka = ['id_materi_detail' => $halaman_dibuka];
        
        $data['detail'] = $model_materi->tampilDataMateriDetail( $whereMateri );
        $data['terbuka']= $model_materi->tampilDataMateriDetail( $whereMateriBuka )->getRowArray();
        $data['id_materi'] = $id_materi;


        return view('templates/template_video_pembelajaran', $data);

    }


    // detail materi
    function detail( $id_materi = null ) {

        if ( $id_materi ) {

            $model = new M_datamateri();
            $model_modul = new M_modules();

            $dataMateriById = $model->tampilDataMateriById( $id_materi );

            if ( ! empty($dataMateriById) ) {

                $data['materi'] = $dataMateriById;
                $data['cek_pendaftaran'] = $model_modul->getDataPendaftaranByIdProfile_IdMateri( $id_materi );
                return view('templates/template_detail_konten', $data);
            } else {

                echo "Undefined Id !";
            }

        } else {

            echo "Opsss";
        }
    }



    function achievement() {

        return view('guru/quiz/V_quiz_achievement');
    }



    function index6() {
        return view('templates/template_landingpage_utama');
    }

    function index7() {
        return view('templates/template_landingGuru');
    }


    // dashboard utama profile
    function main() {

        // echo $this->session->get('sess_username');
        return view('templates/template_siswadash');
    }




    function profile() {

        $id_profile = $this->session->get('sess_id_profile');
        $model = new M_profile();

        $data['edit'] = $model->getProfileById( $id_profile );

        return view('siswa/v_profile', $data);
    }



    // proses update
    function prosespengubahanprofile() {

        $model = new M_profile();

        $id_profile = $this->session->get('sess_id_profile');
        $data = array(

            'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
            'domisili'      => $this->request->getPost('domisili'),
            'email'         => $this->request->getPost('email'),
            'telp'          => $this->request->getPost('telp'),
            'alamat'        => $this->request->getPost('alamat'),
            'pendidikan_sekarang' => $this->request->getPost('pendidikan_sekarang'),
            'asal_sekolah'        => $this->request->getPost('asal_sekolah'),
        );



        return $model->model_prosespengubahanakun( $data, $id_profile );


        // $model->model_prosespengubahanakun();
    }
}
