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







    // start assignemnt
    function assignment( $id_materi ) {


        $model = new M_quiz();

        // start time
        $this->session->set('sess_time_start', date('Y-m-d H:i:s'));

        $data['sess_id_profile']       = $this->session->get('sess_id_profile');
        $data['id_materi']      = $id_materi;
        $data['preview']        = $model->model_getDataQuizByIdMateri( $id_materi );

        $data['cart']   = cart();

        return view('guru/quiz/V_quiz_assignment', $data);
    }   







    // data quiz
    function answer( $id_materi, $id_kuis_soal ) {


        $cart = cart();
        $rowid = $this->request->getPost('rowid');

        if ( !empty( $rowid ) )  {

            $cart->remove($rowid);

            // refresh
            $cart->insert(array(

                'id'      => $id_kuis_soal,
                'qty'     => 1,
                'price'   => 0,
                'name'    => $this->request->getPost('pilihan')
            ));

        } else {


            $cart->insert(array(

                'id'      => $id_kuis_soal,
                'qty'     => 1,
                'price'   => 0,
                'name'    => $this->request->getPost('pilihan')
            ));
        }


        return redirect()->to(base_url('quiz/assignment/'. $id_materi.'?soal='. $id_kuis_soal));
    }




    // save answer
    function finishAssignment( $id_materi ) {

        $cart = cart();
        $data = array();

        $model_quiz = new M_quiz();
        $skor = $model_quiz->model_hitungskor();

        $this->session->set('skor', $skor);

        // insert data info
        $dataInfo = array(

            'id_materi' => $id_materi,
            'id_profile'=> $this->session->get('sess_id_profile'), 
            'started_at'=> $this->session->get('sess_time_start'),
            'ended_at'  => date('Y-m-d H:i:s'),
            'skor'      => $skor
        );


        $last_id = $model_quiz->model_insertrekap_infokuis( $dataInfo );



        foreach ( $cart->contents() AS $row ) {

            array_push( $data, array(

                'id_infokuis'   => $last_id,
                'id_profile'    => $this->session->get('sess_id_profile'),
                'id_kuis_soal'  => $row['id'],
                'jawaban'       => $row['name']
            ) );
        }


        return $model_quiz->model_insertrekap_detailkuis( $data, $id_materi );
    }

    // function testing() {

    //     $cart = cart();
    //     // Call the cart service using the helper function
    //     print_r( $cart->contents() );
    // }




    function destroyCart() {

        $cart = cart();
        $cart->destroy();

    }
    function quizdiikuti(  ) {

        return view('siswa/V_kuis');

    }




}
    
    /* End of file Quiz.php */
    