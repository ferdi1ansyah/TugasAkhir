<?php

    $this->extend('templates/template_admin');

?>

<?php $this->section('content') 


?>

<div class="main-content-container container-fluid px-12">
<div class="col-lg-12 grid-margin stretch-card">

  <div class="card">
    <div class="card-body">

      <h4 class="card-title">Tabel Data Guru</h4>
      <div class="card card-body">
      
      <div class="row">

              <a href="/dataguru/tambah" class="btn btn-primary btn-sm">
                <i class="material-icons">add</i>Tambah Data Guru
                </a>
              <div class="table-responsive">
                <table class="table table-striped">

                    </form>
                  <thead>
                    <tr>
                      <th>
                        Nama Lengkap
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
                      <!-- <th>
                        Foto
                      </th> -->
                    </tr>
                    
                  </thead>

                  <tbody>
                                  <?php if ( $dataGuru->getNumRows() > 0 ) { ?>

                                  <?php foreach ( $dataGuru->getResultArray() AS $guru ) :  ?>
    <div class="modal fade" id="hapus-guru-<?php echo $guru['id_guru'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">

                   <div class="modal-body">

        <div class="text-center">
                                                           
                        </div>
           <h4>Hapus Guru</h4>
             <p>Apakah anda yakin ingin mengahapus <?php echo $guru['nama_lengkap'] ?> dari Data Guru ? </p>
                                                        
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                        
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <a href="/dataguru/prosesHapusGuru/<?php echo $guru['id_guru'] ?>" class="btn btn-danger">Hapus Sekarang</a>
                                                    </div>

                                                    </div>
                                                </div>
                                            </div>
                               

                                <div class="modal fade" id="hapus-guru<?php echo $guru['id_guru'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>       
                                           
                                                <form action="/dataguru/prosesUpdateGuru/<?php echo $guru['id_guru'] ?>" method="POST">
                                                <div class="modal-body">

                                            </div>
                                        </div>

                                    </div>

                                  <tr>

                                    <td><?php echo $guru['nama_lengkap'] ?> </td>
                                    <td><?php echo $guru['asal_sekolah'] ?> </td>
                                    <td><?php echo $guru['pendidikan'] ?></td>
                                    <td><?php echo $guru['email'] ?></td>
                                    <td><?php echo $guru['telp'] ?></td>
                                  
                                               
                                    <td>  
                                        <a href=":;" class="btn btn-danger"  data-toggle="modal" data-target="#hapus-guru-<?php echo $guru['id_guru'] ?>"><i class="material-icons">delete</i></a>
                                        <a href="/dataguru/edit/<?php echo $guru['id_guru'] ?>" class="btn btn-warning"><i class="material-icons">edit</i></a>
                    </td>
                                    </td>

                                        </tr>

                                  <?php endforeach; ?>
                                                  
                                  <?php } ?>         
                </table>
              </div>

            </div>
          </div>
        </div>
      </div>

    


                        


                        

<?php $this->endSection() ?>
