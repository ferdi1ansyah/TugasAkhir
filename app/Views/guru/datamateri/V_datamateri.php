    
<?php

$this->extend('templates/template_guru');

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
                <a href="/dataguru/tambah" class="btn btn-primary btn-sm">
                    <i class="material-icons">add</i>Tambah Data Guru
                </a>
            </div>
        </div>


        <!-- Page body -->
        <!-- Small Stats Blocks -->
        <div class="row">

            
            <div class="col-xs-6 col-sm-6 col-md-3" style="margin-bottom: 20px">
                <div class="stats-small stats-small--1 card card-small">
                    <a href="">
                        <img class="card-img-top" src="<?php echo base_url('assets/images/lol.gif') ?>" alt="Card image cap">
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
                                        <label style="color: #9e9e9e"><?php echo date('d M Y') ?></label>
                                    </div>
                                </div>


                                <span class="my-2" style="font-size: 20px !important">Machine Learning</span>
                                <label class="text-muted" style="font-size: 13px !important">Materi yang membahas tentang pembuatan development game</label>

                                <div>
                                    <a href="" class="btn"><i class="fas fa-times"></i></a>
                                    <a href="" class="btn"><i class="fas fa-edit"></i></a>
                                    <a href="" class="btn"><i class="fas fa-list-ul"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>



    </div>



<?php $this->endSection() ?>