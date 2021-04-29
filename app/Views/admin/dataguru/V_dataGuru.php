<?php

    $this->extend('templates/template_admin');

?>

<?php $this->section('content') 


?>

<div class="main-content-container container-fluid px-12">

  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Heading . . .</span>
      <h3 class="page-title">Tabel Data Guru</h3>
      
    </div>
  </div>
  <!-- End Page Header -->

  <div class="row">
    <div class="col-lg-10 grid-margin stretch-card">

      <div class="card">
        <div class="card-body">
          <div class="">

            <div class="row">
              <button data-toggle="modal" data-target="#tambah-guru" style="margin-bottom: 20px"
                class="btn btn-primary btn-sm">
                <i class="material-icons">add</i> Tambah Data Guru</button>
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

                  <tbody>
	<?php if ( $dataGuru->getNumRows() > 0 ) { ?>

	<?php foreach ( $dataGuru->getResultArray() AS $guru ) :  ?>
	<tr>

		<td><?php echo $guru['nama_lengkap'] ?></td>
                  
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


                          <?php $this->endSection() 
                          ?>