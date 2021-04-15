<?php 

    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Models\M_login;
    
    class Login extends Controller {
    
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
            return $modelLogin->ambilDataProfile( $username, $password );

        }


        function belajarEnkripsi() {

            $password = 123;
            echo password_hash( $password, PASSWORD_BCRYPT );
            echo '<hr>';

            echo md5( $password );
            echo '<hr>';

            echo $encode = base64_encode( $password );
            echo "<br> hasil decode ". base64_decode( $encode );
        }
    
    }
    
    /* End of file Controllername.php */
    