<?php

namespace App\Controllers;

use App\Models\M_registersiswa;
use CodeIgniter\Controller;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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
                 'hak_akses' => 'siswa',
                 'status_akun'=> "nonaktif",
                 'starter'   => 1

            );

            $id_profile = $users->onRegisterProfile($data);

            $dataSiswa = array(
                'id_profile' => $id_profile,
                'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                'domisili' => $this->request->getPost('domisili'),
                'email' => $this->request->getPost('email')
            );

            $this->actionVerifyGmail( $dataSiswa['email'], $dataSiswa['nama_lengkap'], $id_profile );
            $users -> onRegisterDataSiswa( $dataSiswa );
       
            return redirect()->to( base_url('login/index') );
    }





    function actionVerifyGmail( $email, $name, $id_profile ) {

        $to                 = $email;
        $subject            = "Verifikasi Akun";
        $message            = "";
 
        $mail = new PHPMailer(true);
 
        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = 'smtp.googlemail.com';   
            $mail->SMTPAuth   = true;
            $mail->Username   = 'pipel.learn34@gmail.com'; // silahkan ganti dengan alamat email Anda
            $mail->Password   = '1234'; // silahkan ganti dengan password email Anda
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;
 
            $mail->setFrom('pipel.learn34@gmail.com', 'Pipel Learning'); // silahkan ganti dengan alamat email Anda
            $mail->addAddress($to);
            $mail->addReplyTo('pipel.learn34@gmail.com', 'Pipel Learning'); // silahkan ganti dengan alamat email Anda
            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;



            $htmlContent = '
            <!doctype html>
            <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
            <head>
                <title>
                </title>
                <!--[if !mso]><!-- -->
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <!--<![endif]-->
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <style type="text/css">
                    #outlook a {
                        padding: 0;
                    }
                    .ReadMsgBody {
                        width: 100%;
                    }
                    .ExternalClass {
                        width: 100%;
                    }
                    .ExternalClass * {
                        line-height: 100%;
                    }
                    body {
                        margin: 0;
                        padding: 0;
                        font-family: Sans-Serif;
                        -webkit-text-size-adjust: 100%;
                        -ms-text-size-adjust: 100%;
                    }
                    table,
                    td {
                        border-collapse: collapse;
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                    }
                    img {
                        border: 0;
                        height: auto;
                        line-height: 100%;
                        outline: none;
                        text-decoration: none;
                        -ms-interpolation-mode: bicubic;
                    }
                    p {
                        display: block;
                        margin: 13px 0;
                    }
                </style>
                <!--[if !mso]><!-->
                <style type="text/css">
                    @media only screen and (max-width:480px) {
                        @-ms-viewport {
                            width: 320px;
                        }
                        @viewport {
                            width: 320px;
                        }
                    }
                </style>
                <!--<![endif]-->
                <!--[if mso]>
                    <xml>
                    <o:OfficeDocumentSettings>
                    <o:AllowPNG/>
                    <o:PixelsPerInch>96</o:PixelsPerInch>
                    </o:OfficeDocumentSettings>
                    </xml>
                    <![endif]-->
                <!--[if lte mso 11]>
                    <style type="text/css">
                    .outlook-group-fix { width:100% !important; }
                    </style>
                    <![endif]-->
                <style type="text/css">
                    @media only screen and (min-width:480px) {
                        .mj-column-per-100 {
                            width: 100% !important;
                        }
                    }
                </style>
                <style type="text/css">
                </style>
            </head>
            <body style="background-color:#f9f9f9;">
                <div style="background-color:#f9f9f9;">
                    <!--[if mso | IE]>
                    <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600">
                        
                        <tr>
                            <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
                    <![endif]-->
                                <div style="background:#f9f9f9;background-color:#f9f9f9;Margin:0px auto;max-width:600px;">
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#f9f9f9;background-color:#f9f9f9;width:100%;">
                                        <tbody>
                                        <tr>
                                            <td style="border-bottom:#333957 solid 5px;direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;">
                                                <!--[if mso | IE]>
                                                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                
                                                    <tr>
                                                        
                                                    </tr>
                                
                                                </table>
                                                <![endif]-->
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <!--[if mso | IE]>
                            </td>
                        </tr>
                    </table>
                    
                    <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px;" width="600">
                        <tr>
                            <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
                            <![endif]-->
                                <div style="background:#fff;background-color:#fff;Margin:0px auto;max-width:600px;">
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#fff;background-color:#fff;width:100%;">
                                        <tbody>
                                            <tr>
                                                <td style="border:#dddddd solid 1px;border-top:0px;direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;">
                                                    <!--[if mso | IE]>
                                                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                
                                                    <tr>
                                
                                                        <td style="vertical-align:bottom;width:600px;">
                                                        <![endif]-->
                                                            <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:bottom;width:100%;">
                                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:bottom;" width="100%">
                                                                    <tr>
                                                                        <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                                            <div style="font-family:Helvetica Neue,Arial,sans-serif;font-size:16px;line-height:22px;text-align:left;color:#555;">
                                                                                Hello '.$name.',
                                                                                <br>
                                                                                Terima kasih telah mendaftar ke dalam aplikasi online course kami. Silahkan klik link dibawah ini untuk 
                                                                                mengaktivasi akun anda
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                                            <div style="font-size: 12px;font-family:Helvetica Neue,Arial,sans-serif;font-size:14px;line-height:22px;text-align:left;color:#555;">
                                                                                
                                                                                <a href="'.base_url('register/verifyAccount?id='. $id_profile).'">'.base_url('register/verifyAccount?id='. $id_profile).'</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                                            <div style="font-family:Helvetica Neue,Arial,sans-serif;font-size:14px;line-height:20px;text-align:left;color:#525252;"><br>
                                                                                Salam,<br><br> Admin<br>
                                                                                
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                                            <div style="font-family:Helvetica Neue,Arial,sans-serif;font-size:10px;line-height:20px;text-align:left;color:#525252;">
                                                                                <hr>
                                                                                <label>Jika anda mengalami permasalahan dalam pengiriman email, hubungi admin segera.</label>
                                                                                
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                    
                                                                </table>
                                                            </div>
                                                            <!--[if mso | IE]>
                                                        </td>
                                                    
                                                    </tr>
        
                                                    </table>
                                                    <![endif]-->
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--[if mso | IE]>
                            </td>
                        </tr>
                    </table>
                    <![endif]-->
                </div>
            </body>
            </html>';



            $mail->Body    = $htmlContent;
 
            $mail->send();
            session()->setFlashdata('success', 'Send Email successfully');

            echo session()->getFlashdata('success');
            // return redirect()->to('/kirim_email'); 
        } catch (Exception $e) {
            session()->setFlashdata('error', "Send Email failed. Error: ".$mail->ErrorInfo);
            // return redirect()->to('/kirim_email');

            // print_r( $e );
        }
    }









}