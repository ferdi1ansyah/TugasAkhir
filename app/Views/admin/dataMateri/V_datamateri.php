    
<?php

$this->extend('templates/template_admin');

?>

<?php $this->section('content') ?>



    <div class="main-content-container container-fluid px-4">
        
        
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
          <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Mata Pelajaran Siswa</span>
            <h3 class="page-title">Materi Siswa</h3>
          </div>
        </div>
        <!-- End Page Header -->

        <div class="row" style="margin-bottom: 32px">
            <div class="col-md-12">
                <a href="/Datamateriadmin/tambah" class="btn btn-primary btn-sm">
                    <i class="material-icons">add</i>Tambah Data Materi
                </a>
            </div>
        </div>


        <!-- Page body -->
        <!-- Small Stats Blocks -->
        <div class="row">

            <?php if ( $materi->getNumRows() != 0 ) { ?>
            
            <?php foreach ( $materi->getResultArray() AS $kolom ) : ?>
            <div class="col-xs-6 col-sm-6 col-md-3" style="margin-bottom: 20px">
                <div class="stats-small stats-small--1 card card-small">
                    <a href="">
                        <?php

                            $img = "https://pertaniansehat.com/v01/wp-content/uploads/2015/08/default-placeholder.png"; // gambar default

                            // gambar terdapat upload
                            if ( $kolom['media'] ) {

                                $img = base_url('assets/images/thumbnail-material/'. $kolom['media']);
                            }
                        
                        ?>
                        <img class="card-img-top" src="<?php echo $img ?>" alt="Card image cap" style="object-fit: cover; height: 150px">
                    </a>
                    <div class="card-body">
                        <div class="d-flex flex-column m-auto">
                            <div class="stats-small__data">

                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <div style="font-size: 10px; margin: 0px">
                                            <i class="fas fa-star" style="color: #e0e0e0"></i>
                                            <i class="fas fa-star" style="color: #e0e0e0"></i>
                                            <i class="fas fa-star" style="color: #e0e0e0"></i>
                                            <i class="fas fa-star" style="color: #e0e0e0"></i>
                                            <i class="fas fa-star" style="color: #e0e0e0"></i>
                                        </div>
                                        <label style="font-size: 10px">10 Enrollment</label>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <label style="color: #9e9e9e"><?php echo date('d M Y', strtotime( $kolom['tanggal'] )) ?></label>
                                    </div>
                                </div>


                                <span class="my-2" style="font-size: 20px !important">
                                    <?php 
                                    
                                        $panjangjudul = strlen( $kolom['judul'] );

                                        if ( $panjangjudul > 17 ) {

                                            echo substr( $kolom['judul'], 0, 17 ).' . . .';
                                        } else {

                                            echo $kolom['judul'];
                                        }
                                    
                                    ?>
                                </span>
                                <label class="text-muted" style="font-size: 13px !important">
                                <?php

                                    $panjangDeskripsi = strlen( $kolom['deskripsi'] );
                                    if( $panjangDeskripsi > 32 ) {

                                        echo substr( $kolom['deskripsi'],0, 32 ).'..';
                                    } else {

                                        echo $kolom['deskripsi'];
                                    }
                                
                                ?></label>

                                <div>
                                    <a href="/Datamateriadmin/proseshapus/<?php echo $kolom['id_materi'] ?>" onclick="return confirm('Apakah anda ingin menghapus materi ini ?')" class="btn"><i class="fas fa-times"></i></a>
                                    <a href="/datamateri/edit/<?php echo $kolom['id_materi'] ?>" class="btn"><i class="fas fa-edit"></i></a>
                                    <a href="" class="btn"><i class="fas fa-list-ul"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

            <?php } ?>
            
        </div>



    </div>



<?php $this->endSection() ?>