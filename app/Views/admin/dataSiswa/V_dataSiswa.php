<?php

    $this->extend('templates/template_admin');

?>

<?php $this->section('content') ?>


 <div class="main-content-container container-fluid px-12">



 <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Siswa</h4>
                  <p class="card-description">Data siswa untuk mengetahui data yang yang dimiliki siswa
                  
                  </p>
                  <button class="btn btn-primary" type="submit">Add</button>
                  <button class="btn btn-warning" type="submit" i class="material-icons">Edit</button>
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
                            Domisili
                          </th>
                          <th>
                            Tanggal Lahir
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                          No telepon
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
                          <th>
                            Foto
                          </th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        
                          <td>
                            Herman Beck
                          </td>
                          <td>
                            Laki laki
                          </td>
                          <td>
                            Malang
                          </td>
                          <td>
                            May 15, 2015
                          </td>

                           <td>
                            @hermansixpek
                          </td>
                          <td>
                            086969696696
                          </td>
                          <td>
                            Malang
                          </td>
                          <td>
                           Mahasiswa
                          </td>
                          <td>
                           Sdn Negeri Boston
                          </td>
                          <td>
                          <td class="py-1">
                            <img src="../../images/faces/face2.jpg" alt="image"/>
                          </td>
                          </td>
                        </tr>
                        <tr>
                         
                         
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            

<?php $this->endSection() ?>