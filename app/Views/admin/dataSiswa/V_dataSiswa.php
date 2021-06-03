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

            <a href="/datasiswa/tambah" class="btn btn-primary btn-sm">
              <i class="material-icons">add</i>Tambah Data Siswa
            </a>

            <div class="table-responsive">
              <table class="table table-striped" id="myTable">

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
                    <th>Opsi</th>
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
                    <td>
                      <a href=":;" class="btn btn-danger" data-toggle="modal"
                        data-target="#hapus-siswa-<?php echo $siswa['id_siswa'] ?>"><i
                          class="material-icons">delete</i></a>
                      <a href="/datasiswa/edit/<?php echo $siswa['id_siswa'] ?>" class="btn btn-warning"><i class="material-icons">edit</i></a>
                    </td>



                    <div class="modal fade" id="hapus-siswa-<?php echo $siswa['id_siswa'] ?>" tabindex="-1"
                      role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">

                          <div class="modal-body">

                            <div class="text-center">

                            </div>
                            <h4>Hapus Guru</h4>
                            <p>Apakah anda yakin ingin mengahapus <?php echo $siswa['nama_lengkap'] ?> dari Data Siswa ?
                            </p>


                          </div>
                          <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <a href="/datasiswa/prosesHapusSiswa/<?php echo $siswa['id_siswa'] ?>"
                              class="btn btn-danger">Hapus Sekarang</a>
                          </div>

                        </div>
                      </div>
                    </div>


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


  </div>
</div>


<?php $this->endSection() ?>