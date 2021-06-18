<?php

$session = \Config\Services::session();

if ( $session->get('sess_hak_akses') == "superadmin" ) {

    $this->extend('templates/template_admin');
} else {

    $this->extend('templates/template_guru');
}

?>

<?php $this->section('content') ?>
          
          
        <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
        

        <div class="main-content-container container-fluid px-4">
            
            
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">MATA PELAJARAN SISWA</span>
                <h3 class="page-title">Sunting Materi Detail</h3>
              </div>
            </div>
            <!-- End Page Header -->
            
            <!-- Small Stats Blocks -->
            <div class="row justify-content-center">

                

                <div class="col-md-10">


                    <?php echo session()->getFlashdata('msg') ?>

                    <form action="/datamateri/proseseditdetail/<?php echo $id_materi.'/'.$id_materi_detail ?>" method="POST" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                            
                                <div class="col-md-4" style="border-right: 1px solid #e0e0e0">
                                
                                    <small><b>Bagian Materi dari</b></small>
                                    <h3><?php  echo $materi['judul'] ?></h3>

                                    <hr>

                                    <small><b>Deskripsi : </b></small> <br>
                                    <label><?php echo $materi['deskripsi'] ?></label>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">

                                        <label for="">Judul</label>
                                        <input type="text" name="judul_materi" class="form-control" placeholder="Masukkan judul materi . . ." value="<?php echo $detail['judul'] ?>" required="" >
                                        <small>Berisi modul materi</small>
                                    
                                    </div>

                                    <div class="form-group">

                                        <label for="">Teks Konten</label>
                                        <textarea name="deskripsi" class="form-control" placeholder="Berikan keterangan atau deskripsi materi . . ." id="" cols="30" required=""><?php echo $detail['materi'] ?></textarea>
                                        <script>
                                                CKEDITOR.replace( 'deskripsi' );
                                        </script>
                                        <small>Berisi modul materi</small>
                                    
                                    </div>



                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="">Visual Konten</label> <br>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline1-1" name="tipe_materi" class="custom-control-input" value="visual_content" <?php if ( $detail['tipe_materi'] == "visual_content" ) { echo 'checked'; } ?>>
                                                    <label class="custom-control-label" for="customRadioInline1-1">Gunakan Visual Konten</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline2-1" name="tipe_materi" class="custom-control-input" value="text_content" <?php if ( $detail['tipe_materi'] == "text_content" ) { echo 'checked'; } ?>>
                                                    <label class="custom-control-label" for="customRadioInline2-1">Hanya Teks Konten</label>
                                                </div><br>
                                                <small>Pilih status materi</small>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="">Link Video</label>
                                                <input type="text" name="link" class="form-control" value="<?php echo $detail['link_video'] ?>" />
                                                <small>Masukkan link video apabila menggunakan media visual konten</small>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h4>Sumber Materi</h4>
                                                <small>Memasukkan sumber referensi materi atau video</small>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Author</label>
                                                <input type="text" name="author" class="form-control" value="<?php echo $detail['sumber_author'] ?>" />
                                                <small>Masukkan nama penulis atau kreator</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Sumber</label>
                                                <input type="text" name="reference" class="form-control" value="<?php echo $detail['sumber_link'] ?>" />
                                                <small>Masukkan link atau sumber referensi</small>
                                            </div>
                                        </div>

                                    </div>

                                    <hr>

                                    <div class="row">
                                    
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Status Materi</label> <br>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline1" name="status" class="custom-control-input" value="aktif" <?php if( $detail['status_materi'] == "aktif" ) echo 'checked'; ?>>
                                                    <label class="custom-control-label" for="customRadioInline1">Publikasi</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline2" name="status" class="custom-control-input" value="nonaktif" <?php if( $detail['status_materi'] == "nonaktif" ) echo 'checked'; ?>>
                                                    <label class="custom-control-label" for="customRadioInline2">Simpan</label>
                                                </div><br>
                                                <small>Pilih status materi</small>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group text-right">
                                        <a href="/datamateri/detail/<?php echo $id_materi ?>" class="btn btn-outline-secondary btn-sm"> Batal </a> 
                                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
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