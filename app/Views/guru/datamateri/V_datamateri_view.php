<?php

$session = \Config\Services::session();

if ( $session->get('sess_hak_akses') == "superadmin" ) {

    $this->extend('templates/template_admin');
} else {

    $this->extend('templates/template_guru');
}

?>

<?php $this->section('content') ?>

<link href="https://vjs.zencdn.net/7.6.5/video-js.css" rel="stylesheet">
<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>


<div class="main-content-container container-fluid px-4">
        
        
    <div class="row justify-content-center" style="margin-top: 32px">
    
        <div class="col-md-10">
        
            <div class="card card-small" style="padding: 32px; border: 0.5px solid #e1bee7">

                <div class="card-body">

                    <div class="row">

                        <div class="col-md-6">
                            <a href="<?php echo base_url('datamateri/detail/'. $id_materi) ?>" class="btn btn-sm btn-outline-secondary"><i class="material-icons">arrow_back</i></a>
                        </div>

                        <div class="col-md-6 text-right">
                            <a href="<?php echo base_url('datamateri/edit_detail/'. $id_materi.'/'.$id_materi_detail) ?>" class="btn btn-sm btn-warning"><i class="material-icons">mode_edit</i> Sunting</a>
                            <a href="<?php echo base_url('datamateri/delete_detail_materi/'. $id_materi.'/'.$id_materi_detail) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus materi ini ?')" class="btn btn-sm btn-outline-danger"><i class="material-icons">close</i> Hapus Materi</a>

                            <br><br>
                        
                        </div>

                        <div class="col-md-12">
                            
                            <?php if ( $materi['tipe_materi'] == "visual_content" ) { ?>

                            <!-- <video lass="mejs__player" preload="none" style="max-width: 100%; width: 100%; border: 2px solid #0e0e0e0; border-radius: 5px" controls poster="images/big_buck_bunny.jpg" playsinline webkit-playsinline controls autoplay>
                                <source src="//github.com/mediaelement/mediaelement-files/blob/master/big_buck_bunny.mp4?raw=true" type="video/mp4">
                            </video> -->
                            <?php
                                    $link = "";

                                    if ( $materi['link_video'] ) {

                                        $join = "https://drive.google.com/file/d/";
                                        $explode = explode('https://drive.google.com/file/d/', $materi['link_video']);
                                        $getLabel = $explode[1];

                                        $getID = explode('/', $getLabel);
                                        $link = 'https://drive.google.com/file/d/'. $getID[0].'/preview';
                                    }
                                ?>


                            <iframe src="<?php echo $link ?>" style="width: 100%; border-radius: 5px" height="480"></iframe>

                            <?php } ?>

                            <div class="row">
                                <div class="col-md-12">
                                    <h2><?php echo $materi['judul'] ?></h2>
                                    <?php

                                            $color = "warning";
                                            $text_badge = "Disimpan";
                                            if (  $materi['status_materi'] == "aktif" ) {

                                                $color = "success";
                                                $text_badge = "Ditampilkan";
                                            }
                                        ?>
                                        <span class="badge badge-<?php echo $color ?>"><?php echo $text_badge ?></span> 

                                        <small>Dibuat pada <?php echo date('d F Y H.i A', strtotime( $materi['created_at'] )) ?></small>
                                </div>
                                

                            </div>
                        </div>
                    
                    </div>

                    <div class="row" style="margin-top: 20px">
                        <div class="col-md-12">
                            <?php echo $materi['materi'] ?>
                        </div>
                    </div>

                </div>
            </div>
        
        </div>
    </div>

</div>






<script src='https://vjs.zencdn.net/7.6.5/video.js'></script>

<?php $this->endSection() ?>