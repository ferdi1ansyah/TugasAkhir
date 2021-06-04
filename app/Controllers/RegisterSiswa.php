<?php

namespace App\Controllers;

use App\Models\M_registersiswa;
use CodeIgniter\Controller;

class RegisterSiswa extends Controller {


    protected $session;

    function __construct() {

        $this->session = \Config\Services::session();

    }

    public function index()

    {
        return view('register/v_registersiswa');
    }

    public function process()
    {
        if (!$this->validate(
            
            [

            'username' => [
                
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],

            'password' => [
                
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'nama_lengkap' => [
                
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'domisili' => [
                
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'email' => [
                
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],

            'password_conf' => [
                
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $users = new M_registersiswa();

            $data = array(
                'username' => $this->request->getPost('username'),
                'password' => password_hash($this->request->getPost('password'),
                 PASSWORD_BCRYPT),
                 'hak_akses' => 'siswa'

            );

            $id_profile = $users->onRegisterProfile($data);

            $dataSiswa = array(
                'id_profile' => $id_profile,
                'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                'domisili' => $this->request->getPost('domisili'),
                'email' => $this->request->getPost('email')
            );

            $users -> onRegisterDataSiswa( $dataSiswa );
       
            return redirect()->to( base_url('login/index') );
    }












}