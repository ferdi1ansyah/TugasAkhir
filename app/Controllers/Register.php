<?php

namespace App\Controllers;

use App\Models\M_register;
use CodeIgniter\Controller;

class Register extends Controller {


    protected $session;

    function __construct() {

        $this->session = \Config\Services::session();

    }

    public function index()

    {
        return view('register/v_register');
    }

    public function opsi2()
    {
        return view('register/v_menuopsi');
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
            'asal_sekolah' => [
                
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'pendidikan' => [
                
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
            'telp' => [
                
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
        $users = new M_register();

            $data = array(
                'username' => $this->request->getPost('username'),
                'password' => password_hash($this->request->getPost('password'),
                 PASSWORD_BCRYPT),
                 'hak_akses' => 'guru'

            );

            $id_profile = $users->onRegisterProfile($data);

            $dataGuru = array(
                'id_profile' => $id_profile,
                'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                'email' => $this->request->getPost('email')
            );

            $users -> onRegisterDataGuru( $dataGuru );
       
            return redirect()->to( base_url('login/index') );
    }












}