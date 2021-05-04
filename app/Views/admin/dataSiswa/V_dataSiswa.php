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
              <button data-toggle="modal" data-target="/datasiswa/prosesTambahSiswa" style="margin-bottom: 20px"
                class="btn btn-primary btn-sm">
        <b><a href="/datasiswa/tambah"><i class="material-icons">add</i>Tambah Data Siswa</a></b>
                <form action="/datasiswa/prosesTambahSiswa" method="POST"></button>
              <div class="table-responsive">
                <table class="table table-striped">

    


          <div class="table-responsive">
            <table class="table table-striped">

              <!-- <thead>
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
              </thead> -->

              <div class="modal fade" id="tambah-siswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
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
                              <input type="radio" name="gender" value="Perempuan"> Perempuan
                              <label class="">Domisili</label>
                              <input type="text" class="form-control" name="domisili" placeholder="" required="">
                              <label class="">Tanggal_lahir</label>
                              <input type="text" class="form-control" name="tanggal_lahir" placeholder="" required="">
                             
                              <label class="">Email</label>
                              <input type="email" class="form-control" name="email" placeholder="" required="">
                              <label class="">Telp</label>
                              <input type="text" class="form-control" name="telp" placeholder="" required="">
                              <label class="">Alamat</label>
                              <input type="text" class="form-control" name="alamat" placeholder="" required="">
                              <label class="">Pendidikan Sekarang</label>
                              <input type="text" class="form-control" name="pendidikan_sekarang" placeholder="" required="">
                              <label class="">Asal Sekolah</label>
                              <input type="text" class="form-control" name="asal_sekolah" placeholder="" required="">
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

  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Heading . . .</span>
      <h3 class="page-title">Tabel Data Siswa</h3>
      
    </div>
  </div>
  <!-- End Page Header -->

  <!-- <div class="row">
    <div class="col-lg-10 grid-margin stretch-card"> -->

      <!-- <div class="card">
        <div class="card-body"> -->
       
                  <thead>
                    <tr>
                      <th>
                        Nama Lengkap
                      </th>
                      <th>
                        Gender
                      </th>
                      <th>
                        Domisili
                      </th>
                      <th>
                        Tanggal lahir
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Telp
                      </th>
                      <th>
                        Alamat
                      </th>
                      <th>
                        Pendidikan Sekarang
                      </th>
                      <th>
                        Asal Sekolah
                      </th>
                    </tr>
                  </thead>

                  <tbody>
	<?php if ( $dataSiswa->getNumRows() > 0 ) { ?>

	<?php foreach ( $dataSiswa->getResultArray() AS $siswa ) :  ?>
	<tr>

		<td><?php echo $siswa['nama_lengkap'] ?> </td>
    <td><?php echo $siswa['gender'] ?> </td>
    <td><?php echo $siswa['domisili'] ?> </td>
    <td><?php echo $siswa['tanggal_lahir'] ?> </td>
    <td><?php echo $siswa['email'] ?></td>
    <td><?php echo $siswa['telp'] ?></td>
    <td><?php echo $siswa['alamat'] ?> </td>
    <td><?php echo $siswa['pendidikan_sekarang'] ?> </td>
    <td><?php echo $siswa['asal_sekolah'] ?> </td>
    
    
   
                  
        </tr>
	<?php endforeach; ?>
                  
	<?php } ?>                  
</tbody>

                </table>
              </div>

            </div>
          </div>
        </div>
      </div>

    </diV>
  </div>
</diV>


                         

                  </div>


            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
       
                      
                </d
             
            

<?php $this->endSection() ?>
