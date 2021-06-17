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
    public function index(){
            


    }






    function preview( $id_materi = null ) {

        $model = new M_quiz();

        $data['sess_id_profile']       = $this->session->get('sess_id_profile');
        $data['id_materi']      = $id_materi;
        $data['preview']        = $model->model_getDataQuizByIdMateri( $id_materi );

        return view('guru/quiz/V_quiz_preview', $data);
    }



    function add( $id_materi = null ) {

        $data['id_materi'] = $id_materi;
        return view('guru/quiz/V_quiz_tambah', $data);
    }




    function edit( $id_materi, $id_kuis_soal ) {

        $model = new M_quiz();

        $data['id_materi'] = $id_materi;
        $data['id_kuis_soal'] = $id_kuis_soal;
        $data['kuis'] = $model->model_getDataQuizByIdSoal( $id_kuis_soal )->getRowArray();

        return view('guru/quiz/V_quiz_edit', $data);
    }
    


    // proses tambah soal
    function prosestambahsoal( $id_materi ) {

        // print_r( $this->request->getPost() );
        $model = new M_quiz();

        $data = array(

            'id_materi' => $id_materi,
            'id_profile'=> $this->session->get('sess_id_profile'),
            'isi_soal'  => $this->request->getPost('isi'),
            'soal_a'    => $this->request->getPost('jawaban_a'),
            'soal_b'    => $this->request->getPost('jawaban_b'),
            'soal_c'    => $this->request->getPost('jawaban_c'),
            'soal_d'    => $this->request->getPost('jawaban_d'),
            'soal_jawaban' => $this->request->getPost('pilihan')
        );

        return $model->model_insertDataQuiz( $data, $id_materi );
    }


    function prosesupdatesoal( $id_materi, $id_kuis_soal ) {

        $model = new M_quiz();

        $data = array(

            'isi_soal'  => $this->request->getPost('isi'),
            'soal_a'    => $this->request->getPost('jawaban_a'),
            'soal_b'    => $this->request->getPost('jawaban_b'),
            'soal_c'    => $this->request->getPost('jawaban_c'),
            'soal_d'    => $this->request->getPost('jawaban_d'),
            'soal_jawaban' => $this->request->getPost('pilihan')
        );

        return $model->model_updateDataQuiz( $data, $id_materi, $id_kuis_soal );
    }



    function prosesdeletesoal( $id_materi, $id_kuis_soal ) {

        $model = new M_quiz();
        return $model->model_deleteDataQuiz( $id_materi, $id_kuis_soal );
    }


    function quizdiikuti(  ) {

        return view('siswa/V_kuis');

    }




}
    
    /* End of file Quiz.php */
    