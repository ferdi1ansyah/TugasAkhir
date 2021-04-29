<?php

    $this->extend('templates/template_admin');

?>

<?php $this->section('content') 


?>

<div class="main-content-container container-fluid px-12">

 <div class="col-lg-12 grid-margin stretch-card">

              <div class="card">
                <div class="card-body">

                  <h4 class="card-title">Tabel Data Siswa</h4>
                  <div class="card card-body">

                    <div class="row">
                            <button data-toggle="modal" data-target="#tambah-guru" style="margin-bottom: 20px"
                             class="btn btn-primary btn-sm">
                            <i class="material-icons">add</i> Tambah Data Siswa</button>

                  
                 

                  <div class="table-responsive">
                    <table class="table table-striped">
                    
                      <thead>
                        <tr>
                          <th>
                            Nama Lengkap
                          </th>
                          <th>
                            Gender
                          </th>
                          <th>
                            Asal Sekolah
                          </th>
                          <th>
                            Pendidikan
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Telp
                          </th>
                          <th>
                            Foto
                          </th>
                        </tr>
                      </thead>
                     
                          <div class="modal fade" id="tambah-guru" tabindex="-1" role="dialog" 
                          aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        

                                        <form action="/datasiswa/prosesTambahSiswa" method="POST">
                                        <div class="modal-body">

                                            
                                            <div class="form-group">
                                            
                                                <label class="">Nama Lengkap</label>
                                                <input type="text" class="form-control" name="nama_lengkap" placeholder="" required="">
                                                <form action="">
                                                <label class="">Jenis Kelamin</label>
                                                     <p><input type="radio" name="gender" value="Laki-laki"> Laki-Laki
                                                     <input type="radio" name="gender" value="Perempuan">  Perempuan
                                                <label class="">Domisili</label>
                                                <input type="text" class="form-control" name="asal_sekolah" placeholder="" required="">
                                                <label class="">Tanggal Lahir</label>
                                                <input type="text" class="form-control" name="pendidikan" placeholder="" required="">
                                                <label class="">Email</label>
                                                <input type="email" class="form-control" name="email" placeholder="" required="">
                                                <label class="">Telf</label>
                                                <input type="text" class="form-control" name="telf" placeholder="" required="">
                                                <label class="">Alamat</label>
                                                <input type="text" class="form-control" name="telf" placeholder="" required="">
                                                <label class="">Pendidikan Sekarang</label>
                                                <input type="text" class="form-control" name="telf" placeholder="" required="">
                                                <label class="">Asal Sekolah</label>
                                                <input type="text" class="form-control" name="telf" placeholder="" required="">
                                                <label class="">Foto</label>
                      
                                             <input type="file" name="foto" class="dropify" data-height="300">
                                        </div>
                                        
                                            </div>
                                            <div class="form-group">
                                            <div class="form-group">
                                        </div>
                                        


                                       
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <button class="btn btn-primary">Tambahkan dan Simpan</button>
                                        </div>
                                        </form>

                                        </div>
                                       
                 
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
       
                      
                </div>
             
            

<?php $this->endSection() ?>