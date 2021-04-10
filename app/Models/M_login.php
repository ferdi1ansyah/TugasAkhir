<?php 

    namespace App\Models;
    use CodeIgniter\Model;
    
    class M_login extends Model {


        // ambil data tabel profile
        function ambilDataProfile( $username, $password ) {


            $db      = \Config\Database::connect();

            /**
             *  To Do 3 : Mencocokan data 
             *  1. Ambil data profile berdasarkan username (cek)
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
                if ( password_verify( $password, $data['password'] ) ) {

                    echo "Okee username dan password benar -> masuk dashboard";

                } else{ // wrong password

                    echo "Password salah";
                }

            
            // username tidak ditemukan maka (tidak terdaftar)
            } else {

                echo "Tidak terdaftar";
            }

        }
    }