    
<?php

$session = \Config\Services::session();

if ( $session->get('sess_hak_akses') == "superadmin" ) {

    $this->extend('templates/template_admin');
} else {

    $this->extend('templates/template_guru');
}

?>

<?php $this->section('content') ?>



<style>

.link-card{
    border-radius: 4px;
    background: #fff;
    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
  cursor: pointer;
}

.link-card:hover{
     transform: scale(1.01);
}

</style>




<div class="main-content-container container-fluid px-4">
        
        
    <div class="row justify-content-center" style="margin-top: 32px">
    
        <div class="col-md-10">
        
            <div class="card card-small" style="padding: 32px; border: 0.5px solid #e1bee7">

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-8">
                        
                            <label>Materi yang akan diajarkan</label>
                            <h2><?php echo ucfirst($materi['judul']) ?></h2>
                            <small><?php echo $materi['deskripsi'] ?></small>
                        </div>
                        <div class="col-md-4">

                            <small>Status Materi</small> <br>
                            <span class="badge badge-success">Archieve</span> <br>

                            <small>Dibuat pada <?php echo date('d F Y H.i A', strtotime( $materi['tanggal'] )) ?></small>
                        </div>
                    </div>

                </div>
            </div>
        
        </div>
    </div>



    <div class="row justify-content-center" style="margin-top: 32px">


        <div class="col-md-10">

            <div class="row">
            
                <div class="col-md-3">
                
                    <div class="card card-small">
                    
                        <div class="card-body">

                            <p>Kuis</p>
                            <h2><?php echo $kuis->getNumRows() ?> Siswa</h2>
                            <small>Telah mengikuti kuis ini</small>

                            <hr>
                            <a href="<?php echo base_url('quiz/preview/'. $id_materi) ?>" style="btn btn-xs btn-outline-secondary"><i class="material-icons">assignment</i> Lihat Soal</a>
                        
                        </div>
                    </div>

                </div>

                <div class="col-md-9">


                    <div class="row">

                        <div class="col-md-12" style="text-align: right;">
                            <a href="<?php echo base_url('datamateri/tambah_detail/'. $id_materi) ?>" class="btn btn-primary"><i class="material-icons">add</i> Tambah Baru</a>
                            <a href="<?php echo base_url('datamateri') ?>" class="btn btn-outline-secondary"><i class="material-icons">arrow_back</i> Kembali</a>
                        </div>
                    </div>


                    <?php
                    
                    
                    foreach ( $materi_detail->getResultArray() as $row ) :
                    
                        $icon = "";
                        $color = "";
                        if ( $row['tipe_materi'] == "visual_content" ) {

                            $icon = "movie";
                            $color = "ab47bc";
                        } else {

                            $icon = "article";
                            $color = "f06292";
                        }


                        $status_active = "";
                        if ( $row['status_materi'] == "nonaktif" ) {

                            $status_active = "f5f5f5";
                        }
                        
                    ?>
                    <!-- List item-->
                    <a href="<?php echo base_url('datamateri/view/'. $id_materi.'/'.$row['id_materi_detail']) ?>" style="text-decoration: none; color: inherit;">
                        

                        <div class="card card-small link-card" style="margin-top: 10px; background-color: #<?php echo $status_active ?>">
                        
                            <div class="card-body">

                                <!-- Menu -->
                                <div class="row">
                                
                                    <div class="col-xs-1 col-md-1 text-center">
                                        <div style="background-color: #<?php echo $color ?>; border-radius: 100px; width: 45px; height: 45px">
                                            
                                            <span style="font-size: 28px; color: #f5f5f5; margin-top: 7px" class="material-icons"><?php echo $icon ?></span>

                                        </div>
                                    </div>
                                    <div class="col-xs-9 col-md-9">
                                        <h5 style="margin: 0px"><?php echo $row['judul'] ?></h5>
                                        <small><?php echo (strlen($row['materi']) < 85) ? strip_tags($row['materi']) : strip_tags(substr( $row['materi'], 0, 85 )).'...' ?></small>
                                    </div>
                                    <div class="col-xs-2 col-md-2">
                                        <small>Dibuat pada</small>
                                        <label><?php echo date('d M Y', strtotime( $row['created_at'] )) ?></label>
                                    </div>

                                </div>
                            
                            </div>
                        </div>

                    </a>
                    <?php endforeach; ?>

                </div>
            
            </div>
        
        </div>
    </div>



</div>




<?php $this->endSection() ?>