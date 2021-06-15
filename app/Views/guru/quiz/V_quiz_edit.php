<?php

    $this->extend('templates/template_guru');

?>

<?php $this->section('content') ?>
          
        <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
          
        <div class="main-content-container container-fluid px-4">
            
            
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Penambahan Kuis Baru</span>
                <h3 class="page-title">Soal Kuis</h3>
              </div>
            </div>
            <!-- End Page Header -->
            
            <!-- Small Stats Blocks -->
            <div class="row justify-content-center">

                

                <div class="col-md-8">


                    <?php echo session()->getFlashdata('msg') ?>

                    <form action="/quiz/prosesupdatesoal/<?php echo $id_materi.'/'.$id_kuis_soal ?>" method="POST" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">

                            <h4>Tulis Soal</h4>

                            <div class="form-group">

                                <textarea name="isi" class="form-control" placeholder="Berikan keterangan atau deskripsi materi . . ." id="" cols="30" required=""><?php echo $kuis['isi_soal'] ?></textarea>
                                <script>
                                    CKEDITOR.replace('isi');
                                </script>

                            </div>


                            <table class="table" border="0">
                                <tr>
                                    <td width="20%">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1A" name="pilihan" class="custom-control-input" value="a" <?php if ( $kuis['soal_jawaban'] == "a" ) echo 'checked'; ?>>
                                            <label class="custom-control-label" for="customRadioInline1A">Opsi A</label>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="text" name="jawaban_a" value="<?php echo $kuis['soal_a'] ?>" class="form-control" placeholder="Masukkan jawaban dari poin" required="" >
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1B" name="pilihan" class="custom-control-input" value="b" <?php if ( $kuis['soal_jawaban'] == "b" ) echo 'checked'; ?>>
                                            <label class="custom-control-label" for="customRadioInline1B">Opsi B</label>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="text" name="jawaban_b" value="<?php echo $kuis['soal_b'] ?>" class="form-control" placeholder="Masukkan jawaban dari poin" required="" >
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1C" name="pilihan" class="custom-control-input" value="c" <?php if ( $kuis['soal_jawaban'] == "c" ) echo 'checked'; ?>>
                                            <label class="custom-control-label" for="customRadioInline1C">Opsi C</label>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="text" name="jawaban_c" value="<?php echo $kuis['soal_c'] ?>" class="form-control" placeholder="Masukkan jawaban dari poin" required="" >
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1D" name="pilihan" class="custom-control-input" value="d" <?php if ( $kuis['soal_jawaban'] == "d" ) echo 'checked'; ?>>
                                            <label class="custom-control-label" for="customRadioInline1D">Opsi D</label>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="text" name="jawaban_d" value="<?php echo $kuis['soal_d'] ?>" class="form-control" placeholder="Masukkan jawaban dari poin" required="" >
                                    </td>
                                </tr>
                            </table>


                            <div class="row">
                                <div class="col-md-12">

                                    <a href="<?php echo base_url() ?>" class="btn btn-secondary">Batalkan</a>
                                    <button class="btn btn-primary">Simpan dan Perbarui</button>
                                </div>
                            </div>


                        </div>
                    </div>
                    </form>
                
                </div>

            </div>
        </div>

<?php $this->endSection() ?>