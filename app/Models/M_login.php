<?php 

    namespace App\Models;
    use CodeIgniter\Model;
    
    class M_login extends Model {


        // ambil data tabel profile
        function ambilDataProfile( $username, $password ) {

            // load config
            $db      = \Config\Database::connect();
            $session = \Config\Services::session();

            /**
             *  To Do 3 : Mencocokan data 
             *  1. Ambil data tabel profile berdasarkan username (cek)
             *      jika ada -> lanjut ke step 2 
             *      jika tidak -> stop | akun tidak terdaftar / tidak ditemukan
             * 
             *  2. Pengecekan password hash dengan fungsi password_verify()
             *      jika benar -> maka login berhasil 
             *      jika salah -> maka show error password salah
             * 
             */

            // @TODO 3.1 : ambil data profile by username 
            $query = "SELECT * FROM `profile` WHERE username = '$username'";
            $getProfileByUsername = $db->query( $query );


            // @TODO 3.1 : lanjutan pengecekan apakah tersedia 
            $data = $getProfileByUsername->getRowArray();
            if ( $data ) {

                
                // @TODO 3.2 : Pengecekan password
                /**
                 * 
                 *  @param $password = merupakan variabel yang menampung nilai dari view
                 *  @param $data['password] = merupakan variabel untuk mengambil nilai dari database (profile)
                 */
                if ( password_verify( $password, $data['password'] ) ) {


                    $NilaiSession = array(

                        'sess_id_profile'   => $data['id_profile'],
                        'sess_username'     => $data['username'],
                        'sess_hak_akses'     => $data['hak_akses'],
                    );

                    $session->set( $NilaiSession );

                    switch( $data['hak_akses'] ) {

                        case "superadmin":

                            return redirect()->to( base_url('dashboard/index') );
                            break;

                        case "guru":
                            return redirect()->to( base_url('dashboard/index2') );
                            break;
                        // . . .
                    }

                    


                } 
                
                
                
                else{ // wrong password

                    // memasang session flashdata untuk menampilkan pesan 
                    $elementHTML = '<div class="alert alert-danger">Pemberitahuan <br> <small>Maaf kata sandi yang anda masukkan salah !</small></div>';
                    $session->setFlashdata('pesan', $elementHTML);
                    
                    return redirect()->to( base_url( 'login/index' ) );
                }

            
            // username tidak ditemukan maka (tidak terdaftar)
            } else {

                $session->setFlashdata('pesan', "Akun tidak terdaftar");

                return redirect()->to( base_url('login/index') );
            }

        }
    }