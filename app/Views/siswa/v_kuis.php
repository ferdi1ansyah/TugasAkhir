<?php

    $this->extend('templates/template_siswadash');

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
              <table class="table table-striped" id="myTable">
                    
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
                      <th> Opsi </th>
                      <!-- <th>
                        Foto
                      </th> -->
                    </tr>
                    
                  </thead>

                  <tbody>
                                 

                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                        
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                       
                                                    </div>

                                                    </div>
                                                </div>
                                            </div>
                               

                                  <tr>
<!-- 
                              
                                  
                                
                                        </tr>

                                
                                                  
                                 
                </table>
          </div>

          </div>
        </div>
      </div>
    </div>


  </div>
</div>        

<?php $this->endSection() ?>
