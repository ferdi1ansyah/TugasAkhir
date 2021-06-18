<?php

    $this->extend('templates/template_guru');

?>

<?php $this->section('content') ?>
          
          
          
        <div class="main-content-container container-fluid px-4">
            
            
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">MATA PELAJARAN SISWA</span>
                <h3 class="page-title">Sunting Materi Baru</h3>
              </div>
            </div>
            <!-- End Page Header -->
            
            <!-- Small Stats Blocks -->
            <div class="row justify-content-center">

                <div class="col-md-8">


                    <?php echo session()->getFlashdata('msg') ?>

                    <form action="/datamateri/prosesedit/<?php echo $materi['id_materi'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                            
                                <div class="col-md-4" style="border-right: 1px solid #e0e0e0">
                                
                                    <small>Pembuatan Pada Tanggal</small>
                                    <h3><?php echo date('d F Y') ?></h3>

                                    <b>Dibuat Oleh : </b> <br>
                                    <label><?php echo $sess_nama_lengkap ?></label>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">

                                        <label for="">Modul</label>

                                        <input type="text" name="judul_materi" class="form-control" value="<?php echo $materi['judul'] ?>" placeholder="Masukkan judul seperti IPA, MATEMATIKA, GEOGRAFI . . .">
                                        <small>Berisi modul materi</small>
                                    
                                    </div>

                                    <div class="form-group">

                                        <label for="">Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control" placeholder="Berikan keterangan atau deskripsi materi . . ." id="" cols="30"><?php echo $materi['deskripsi'] ?></textarea>
                                        <small>Berisi modul materi</small>
                                    
                                    </div>


                                    <div class="row">
                                    
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="">Thumnail Materi</label>
                                                <input type="file" name="thumbnail" class="form-control" />
                                                <small>Masukkan thumnail modul</small>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="">Status Materi</label> <br>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline1" name="status" class="custom-control-input" value="publish" <?php if ( $materi['materi_status'] == "publish" ) { echo 'checked'; } ?>>
                                                    <label class="custom-control-label" for="customRadioInline1">Publikasi</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline2" name="status" class="custom-control-input" value="draft" <?php if ( $materi['materi_status'] == "draf" ) { echo 'checked'; } ?>>
                                                    <label class="custom-control-label" for="customRadioInline2">Simpan</label>
                                                </div><br>
                                                <small>Pilih status materi</small>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group text-right">
                                    <a href="<?php echo base_url('datamateri/index') ?>" class="btn btn-outline-secondary"><i class="material-icons"></i> Kembali</a>
                                        <button type="submit" class="btn btn-warning btn-sm">Perbarui</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    </form>
                
                </div>

            </div>
        </div>

<?php $this->endSection() ?>