<?php 

    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Models\M_login;
    use App\Libraries\Notification;
    
    class Login extends Controller {

        // property
        protected $session;

        function __construct() {

            $this->session = \Config\Services::session();
            $this->notif = new Notification();
            
        }

        
        // tampilan login
        function index() {

            $session = \Config\Services::session();

            $data['session'] = $session;

            return view('login/V_login', $data);
        }



        // proses login
        function proseslogin() {

            /**
             * 
             *  To Do List : Proses Login
             *  1. Ambil data username dan password dari view (yang telah diketik user)
             *  2. Data yang telah diterima di kontroller, akan dikirim di model
             *  3. Model menerima username dan password (cocokan query)
             *  4. Hasil (result | akun tidak terdaftar, password)
             * 
             */


            $modelLogin = new M_login();

            // @TODO 1 : Ambil username dan password
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // @TODO 2 : Kirim ke model
            $this->notif->message('username atau password anda salah', 'danger');
            return $modelLogin->ambilDataProfile( $username, $password );

        }

        // proses logout
        function proseslogout() {

            $session = \Config\Services::session();
            $session->destroy();

            $url = base_url('login/index');
            return redirect()->to( $url );
        }

    
    }
    
    /* End of file Controllername.php */
    