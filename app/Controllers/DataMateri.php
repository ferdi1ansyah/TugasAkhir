<?php
namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\M_datamateri;
use App\Models\M_quiz;


class Datamateri extends Controller {


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

    function index () {

        $model = new M_datamateri();

        $data['materi'] = $model->tampilDataMateri();
        return view("guru/datamateri/V_datamateri", $data);
    }




    // tambah data materi
    function tambah() {
        $data['sess_id_profile']       = $this->session->get('sess_id_profile');
        $data['sess_nama_lengkap']  = $this->session->get('sess_nama_lengkap');
        return view('guru/datamateri/V_datamateri_tambah', $data);
    }


    // proses simpan
    function prosestambah(){

        helper(['form', 'url']);
        $validation =  \Config\Services::validation();

        // model 
        $model = new M_datamateri();

        // session guru
        $sess_id_profile = $this->session->get('sess_id_profile');

        $thumbnail = "";
        $config = array(

            'thumbnail' => [
                'rules' => 'uploaded[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/gif,image/png]|max_size[thumbnail,2048]',
				'errors' => [
					'uploaded' => 'Masukkan foto thumnail materi',
					'mime_in' => 'Ekstensi file setidaknya jpg, jpeg, gif, atau png',
					'max_size' => 'Ukuran foto maksimal 2 MB'
				]
            ],
        );

        

        // menyeting konfigurasi upload
        $set_upload = $this->validate( $config );

        $thumbnail = "";
        if ( $set_upload ) {

            // upload berhasil / memenuhi syarat 
            $file = $this->request->getFile('thumbnail');
            // set nilai
            $thumbnail = $file->getRandomName();

            $file->move('assets/images/thumbnail-material/', $thumbnail);            

        } else {

            $msg =  $validation->listErrors();

            $html = '<div class="alert alert-danger">'.$msg.'</div>';
            session()->setFlashdata( 'msg', $html );

            // redirect
            return redirect()->to(base_url('datamateri/tambah'));
        }


        // ambil nilai 
        $modul          = $this->request->getPost('judul_materi');
        $deskripsi      = $this->request->getPost('deskripsi');
        $status         = $this->request->getPost('status');


        $dataMateri = array(

            'id_profile'       => $sess_id_profile,
            'judul'         => $modul,
            'deskripsi'     => $deskripsi,
            'media'         => $thumbnail,
            'materi_status' => $status
        );

        return $model->simpanDataMateri( $dataMateri );
    }





    function proseshapus( $id_materi ) {

        $model = new M_datamateri();


        $dataMateriById = $model->tampilDataMateriById( $id_materi );

        // hapus file lama
        if ( $dataMateriById['media'] ) {

            $oldFile = $dataMateriById['media'];
            unlink('assets/images/thumbnail-material/'. $oldFile);
        }

        return $model->hapusDataMateri( $id_materi );
    }





    // view edit
    function edit( $id_materi = null ) {

        if ( $id_materi != null ) {


            $model = new M_datamateri();

            $data['sess_id_profile']       = $this->session->get('sess_id_profile');
            $data['sess_nama_lengkap']  = $this->session->get('sess_nama_lengkap');
            $data['materi'] = $model->tampilDataMateriById( $id_materi );


            return view('guru/datamateri/V_datamateri_edit', $data);
        } else {

            // menampilkan halaman 404
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        
    }




    // proses edit
    function prosesedit( $id_materi ) {

        // model 
        $model = new M_datamateri();

        helper(['form', 'url']);
        $validation =  \Config\Services::validation();

        $dataMateriById = $model->tampilDataMateriById( $id_materi );

        $thumbnail = "";
        if ( $_FILES['thumbnail']['name'] ) {


            
            $config = array(

                'thumbnail' => [
                    'rules' => 'uploaded[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/gif,image/png]|max_size[thumbnail,2048]',
                    'errors' => [
                        'uploaded' => 'Masukkan foto thumnail materi',
                        'mime_in' => 'Ekstensi file setidaknya jpg, jpeg, gif, atau png',
                        'max_size' => 'Ukuran foto maksimal 2 MB'
                    ]
                ],
            );

            

            // menyeting konfigurasi upload
            $set_upload = $this->validate( $config );
            if ( $set_upload ) {


                // hapus file lama
                if ( $dataMateriById['media'] ) {

                    $oldFile = $dataMateriById['media'];
                    unlink('assets/images/thumbnail-material/'. $oldFile);
                }


                // upload berhasil / memenuhi syarat 
                $file = $this->request->getFile('thumbnail');
                
                // set nilai
                $thumbnail = $file->getRandomName();
                $file->move('assets/images/thumbnail-material/', $thumbnail);

            } else {

                $msg =  $validation->listErrors();

                $html = '<div class="alert alert-danger">'.$msg.'</div>';
                session()->setFlashdata( 'msg', $html );

                // redirect
                return redirect()->to(base_url('datamateri/edit/'. $id_materi));
            }
        } else {

            $thumbnail = $dataMateriById['media'];
        }


        // ambil nilai 
        $modul          = $this->request->getPost('judul_materi');
        $deskripsi      = $this->request->getPost('deskripsi');
        $status         = $this->request->getPost('status');


        $dataMateri = array(

            'judul'         => $modul,
            'deskripsi'     => $deskripsi,
            'media'         => $thumbnail,
            'materi_status' => $status
        );

        print_r( $dataMateri );
        return $model->editDataMateri( $id_materi, $dataMateri );
    } 






    // detail
    function detail( $id_materi = null ) {

        // cek id
        if ( $id_materi ) {

            $model = new M_datamateri();
            $model_kuis = new M_quiz();

            $data['id_materi'] = $id_materi;
            $data['materi'] = $model->tampilDataMateriById( $id_materi );
            $data['materi_detail'] = $model->tampilDataMateriDetail(['id_materi' => $id_materi]);

            // jumlah yang mengikuti kuis
            $data['kuis']   = $model_kuis->model_getDataEnrollmentKuisByIdMateri( $id_materi );

           return view('guru/datamateri/V_datamateri_detail', $data);


        } else {

            // id tidak ditemukan, yaitu dengan menampilkan halaman 404
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }






    // tambah detail 
    function tambah_detail( $id_materi ) {


        // cek id
        if ( $id_materi ) {

            $model = new M_datamateri();

            $data['id_materi'] = $id_materi;
            $data['materi'] = $model->tampilDataMateriById( $id_materi );

            return view('guru/datamateri/V_datamateri_detail_tambah', $data);


        } else {

            // id tidak ditemukan, yaitu dengan menampilkan halaman 404
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    
    
    // tambah detail 
    function edit_detail( $id_materi, $id_materi_detail = null ) {


        // cek id
        if ( $id_materi ) {

            $model = new M_datamateri();

            $data['id_materi'] = $id_materi;
            $data['id_materi_detail'] = $id_materi_detail;
            $data['materi'] = $model->tampilDataMateriById( $id_materi );
            
            // data materi detail by id
            $data['detail'] = $model->tampilDataMateriDetail( ['id_materi_detail' => $id_materi_detail] )->getRowArray();

            return view('guru/datamateri/V_datamateri_detail_edit', $data);


        } else {

            // id tidak ditemukan, yaitu dengan menampilkan halaman 404
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }






    // proses tambah detail
    function prosestambahdetail( $id_materi ) {

        // lib session
        $session = \Config\Services::session();

        // model 
        $model = new M_datamateri();

        $id_profile = $session->get('sess_id_profile');
        $dataMateriDetail = array(

            'id_materi' => $id_materi,
            'id_profile'=> $id_profile,
            'judul'     => $this->request->getPost('judul_materi'),
            'materi'    => $this->request->getPost('deskripsi'),
            'tipe_materi' => $this->request->getPost('tipe_materi'),
            'link_video'  => $this->request->getPost('link'),
            'status_materi' => $this->request->getPost('status'),
            'sumber_author' => $this->request->getPost('author'),
            'sumber_link'   => $this->request->getPost('reference')
        );

        return $model->simpanDataMateriDetail( $id_materi, $dataMateriDetail );


    }



    function proseseditdetail( $id_materi, $id_materi_detail ) {

        // model 
        $model = new M_datamateri();

        $dataMateriDetail = array(

            'judul'     => $this->request->getPost('judul_materi'),
            'materi'    => $this->request->getPost('deskripsi'),
            'tipe_materi' => $this->request->getPost('tipe_materi'),
            'link_video'  => $this->request->getPost('link'),
            'status_materi' => $this->request->getPost('status'),
            'sumber_author' => $this->request->getPost('author'),
            'sumber_link'   => $this->request->getPost('reference')
        );

        return $model->updateDataMateriDetail( $id_materi, $id_materi_detail, $dataMateriDetail );
    }




    // detail sub materi yang telah dibuat
    function view( $id_materi, $id_materi_detail = null ) {

        // cek id
        if ( $id_materi_detail ) {

            $model = new M_datamateri();

            $data['id_materi_detail'] = $id_materi_detail;
            $data['id_materi']  = $id_materi;
            $data['materi'] = $model->tampilDataMateriDetail( ['id_materi_detail' => $id_materi_detail] )->getRowArray();

            return view('guru/datamateri/V_datamateri_view', $data);


        } else {

            // id tidak ditemukan, yaitu dengan menampilkan halaman 404
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }



    // hapus materi detail
    function delete_detail_materi( $id_materi, $id_materi_detail ) {

        $model = new M_datamateri();
        return $model->proseshapusmateridetail( $id_materi, $id_materi_detail );
    }




    


}