<?php

$session = \Config\Services::session();

if ( $session->get('sess_hak_akses') == "superadmin" ) {

    $this->extend('templates/template_admin');
} else {

    $this->extend('templates/template_guru');
}

?>

<?php $this->section('content') ?>

    <div class="main-content-container container-fluid px-4">
        
        
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
          <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Hasil Kuis yang dibuat</span>
            <h3 class="page-title">Kuis</h3>
          </div>
        </div>
        <!-- End Page Header -->



        <!-- Page body -->
        <!-- Small Stats Blocks -->
        <div class="row">

            <div class="col-md-3">
            
                <div class="card card-small">
                    <div class="card-body">
                        
                        <a href="<?php echo base_url('quiz/add/'. $id_materi) ?>" class="btn btn-xs btn-outline-accent"><i class="material-icons">edit</i> Tulis Soal</a>
                        <a href="<?php echo base_url('datamateri/detail/'. $id_materi) ?>" class="btn btn-xs btn-outline-secondary"><i class="material-icons">arrow_left</i> Kembali</a> <br> 
                        <small>Klik tombol diatas untuk menambahkan</small>

                        <hr>


                        <?php $no = 1; foreach( $preview->getResultArray() AS $row ) { ?>
                        <div class="row">

                            <div class="col-md-9">
                                <a href="?soal=<?php echo $row['id_kuis_soal'] ?>">
                                    <p style="margin: 0px" for="">Soal <?php echo $no; ?></p>
                                    <small>Dibuat pada <?php echo date('d F Y', strtotime( $row['created_at'] )) ?></small>
                                </a>
                            </div>
                            <div class="col-md-3 text-center">
                                <a href="<?php echo base_url('quiz/prosesdeletesoal/'.$id_materi.'/'.$row['id_kuis_soal']) ?>" onclick="return confirm('Apakah anda ingin menghapus soal ini ?')"><i style="font-size: 24px" class="material-icons">close</i></a>
                            </div>
                            <div class="col-md-12"><hr></div>
                        </div>

                        <?php $no++; } ?>
                        
                        

                    </div>
                </div>
            
            </div>

            <div class="col-md-9">
                <div class="card card-small">
                    <div class="card-body">
                        
                        <?php 

                        if ( $preview->getNumRows() > 0 ) {

                            $request = \Config\Services::request();
                            $tampilSoalById = $request->getGet('soal');
                            
                            $id = "";
                            if ( $tampilSoalById ) {

                                $id = $tampilSoalById;
                            }
                            $nomor = 1;
                            foreach ( $preview->getResultArray() AS $row ) {
                                
                                if ( empty( $id ) ) {

                                    $id = $row['id_kuis_soal'];
                                }

                                if ( $row['id_kuis_soal'] == $id ) {

                        ?>
                        
                        <p style="margin: 0px">Soal Nomor <?php echo $nomor ?></p>
                        <a href="<?php echo base_url('quiz/edit/'. $id_materi.'/'. $row['id_kuis_soal']) ?>" style="font-weight: bold; font-size: 12px"><i class="material-icons">edit</i> Sunting Soal</a>
                        <hr>

                        <?php echo $row['isi_soal'] ?>

                        <hr>

                        <?php
                        
                            $color = "";
                        ?>
                        <div style="font-weight: 400">
                            <div class="row">
                                <div class="col-md-11" style="font-weight: <?php echo ($row['soal_jawaban'] == "a" ? 'bold; color: #558b2f' : '') ?>">A. <?php echo $row['soal_a'] ?></div>
                            </div>
                            <div class="row">
                                <div class="col-md-11" style="font-weight: <?php echo ($row['soal_jawaban'] == "b" ? 'bold; color: #558b2f' : '') ?>">B. <?php echo $row['soal_b'] ?></div>
                            </div>
                            <div class="row">
                                <div class="col-md-11" style="font-weight: <?php echo ($row['soal_jawaban'] == "c" ? 'bold; color: #558b2f' : '') ?>">C. <?php echo $row['soal_c'] ?></div>
                            </div>
                            <div class="row">
                                <div class="col-md-11" style="font-weight: <?php echo ($row['soal_jawaban'] == "d" ? 'bold; color: #558b2f' : '') ?>">D. <?php echo $row['soal_d'] ?></div>
                            </div>
                        </div>
                        
                        <?php } $nomor++; } ?>




                        <?php } else { ?>

                            
                            <div style="text-align: center">
                            <svg style="width: 320px" id="e18ebc6e-17e0-463f-bef8-5e03a9b69a2f" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 941.40412 435.42027"><title>online_test</title><path d="M213.79147,646.81347l-1.26717-.475c-.27846-.10493-27.99252-10.72312-40.975-34.79939-12.983-24.07742-6.62584-53.06672-6.56012-53.35613l.29921-1.32021,1.26659.475c.27846.10493,27.99194,10.72312,40.975,34.79939,12.983,24.07742,6.62585,53.06672,6.56012,53.35613Zm-40.16325-36.39516c10.97621,20.35661,32.87672,30.79147,38.42564,33.17362,1.055-5.94729,4.36362-29.99705-6.60278-50.33406-10.96525-20.33472-32.87441-30.78572-38.42564-33.17363C165.96985,566.035,162.6624,590.08244,173.62822,610.41831Z" transform="translate(-129.29794 -232.28986)" fill="#3f3d56"/><path d="M181.47093,603.09347c23.33121,14.03683,32.3168,41.91784,32.3168,41.91784s-28.84178,5.12282-52.173-8.914-32.3168-41.91784-32.3168-41.91784S158.13972,589.05664,181.47093,603.09347Z" transform="translate(-129.29794 -232.28986)" fill="#d0cde1"/><path d="M928.14845,237.65218H667.97885v-5.36232h-117.971v5.36232H288.76576a17.59851,17.59851,0,0,0-17.59851,17.59852V611.50288a17.59856,17.59856,0,0,0,17.59851,17.59858H928.14845A17.59856,17.59856,0,0,0,945.747,611.50288V255.2507A17.5985,17.5985,0,0,0,928.14845,237.65218Z" transform="translate(-129.29794 -232.28986)" fill="#3f3d56"/><rect x="165.46352" y="36.46377" width="627.3913" height="353.91304" fill="#6c63ff"/><circle cx="478.62294" cy="20.37681" r="6.43478" fill="#6c63ff"/><path d="M886.1358,313.7967h-29.74V284.05675h29.74Zm-28.44691-1.293h27.15387V285.34979H857.68889Z" transform="translate(-129.29794 -232.28986)" fill="#3f3d56"/><path d="M963.36275,616.23188H902.13344v-4.41154a.87468.87468,0,0,0-.87471-.8747H880.26582a.87468.87468,0,0,0-.8747.8747v4.41154H866.27055v-4.41154a.87468.87468,0,0,0-.8747-.8747H844.40294a.87468.87468,0,0,0-.87471.8747v4.41154H830.40767v-4.41154a.87468.87468,0,0,0-.87471-.8747H808.54a.87468.87468,0,0,0-.8747.8747v4.41154H794.54478v-4.41154a.87468.87468,0,0,0-.8747-.8747H772.67717a.87468.87468,0,0,0-.8747.8747v4.41154H758.6819v-4.41154a.87468.87468,0,0,0-.87471-.8747h-20.9929a.87468.87468,0,0,0-.87471.8747v4.41154H722.819v-4.41154a.87467.87467,0,0,0-.8747-.8747H700.9514a.87468.87468,0,0,0-.8747.8747v4.41154H686.95613v-4.41154a.87468.87468,0,0,0-.8747-.8747H521.637a.87468.87468,0,0,0-.8747.8747v4.41154H507.64171v-4.41154a.87468.87468,0,0,0-.8747-.8747H485.7741a.87468.87468,0,0,0-.87471.8747v4.41154H471.77883v-4.41154a.87468.87468,0,0,0-.87471-.8747H449.91121a.87468.87468,0,0,0-.8747.8747v4.41154H435.91594v-4.41154a.87468.87468,0,0,0-.8747-.8747H414.04833a.87468.87468,0,0,0-.87471.8747v4.41154H400.05306v-4.41154a.87468.87468,0,0,0-.87471-.8747H378.18544a.87468.87468,0,0,0-.8747.8747v4.41154H364.19017v-4.41154a.87468.87468,0,0,0-.8747-.8747H342.32256a.87468.87468,0,0,0-.8747.8747v4.41154H328.32729v-4.41154a.87468.87468,0,0,0-.87471-.8747h-20.9929a.87468.87468,0,0,0-.87471.8747v4.41154h-40.2364a20.99291,20.99291,0,0,0-20.99291,20.9929v9.4925a20.99291,20.99291,0,0,0,20.99291,20.99286H963.36275a20.99292,20.99292,0,0,0,20.99291-20.99286v-9.4925A20.99292,20.99292,0,0,0,963.36275,616.23188Z" transform="translate(-129.29794 -232.28986)" fill="#3f3d56"/><rect x="28.71132" y="413.88349" width="912.69281" height="2.78529" fill="#3f3d56"/><path d="M883.36954,465.96058h-202v-115h202Zm-200-2h198v-111h-198Z" transform="translate(-129.29794 -232.28986)" fill="#3f3d56"/><path d="M513.36954,488.96058h-180v-112h180Zm-178-2h176v-108h-176Z" transform="translate(-129.29794 -232.28986)" fill="#3f3d56"/><path d="M417.46378,445.96058l-.17236-2.23633c-.51563-4.64356,1.03223-9.71777,5.332-14.87695,3.87012-4.5586,6.02-7.91211,6.02-11.78223,0-4.38574-2.75195-7.30957-8.16992-7.39551a15.28045,15.28045,0,0,0-8.686,2.666l-2.064-5.418c2.83838-2.06445,7.74023-3.44043,12.29785-3.44043,9.89014,0,14.36182,6.10644,14.36182,12.6416,0,5.84863-3.26807,10.0625-7.396,14.96387-3.78369,4.47168-5.15967,8.25586-4.90186,12.6416l.08594,2.23633Zm-1.89209,12.04a5.08415,5.08415,0,0,1,5.15967-5.418c3.01025,0,5.07422,2.23535,5.07422,5.418a5.12129,5.12129,0,1,1-10.23389,0Z" transform="translate(-129.29794 -232.28986)" fill="#d0cde1"/><path d="M776.46378,420.96058l-.17236-2.23633c-.51563-4.64356,1.03223-9.71777,5.332-14.87695,3.87012-4.5586,6.02-7.91211,6.02-11.78223,0-4.38574-2.75195-7.30957-8.16992-7.39551a15.28045,15.28045,0,0,0-8.686,2.666l-2.064-5.418c2.83838-2.06445,7.74023-3.44043,12.29785-3.44043,9.89014,0,14.36182,6.10644,14.36182,12.6416,0,5.84863-3.26807,10.0625-7.396,14.96387-3.78369,4.47168-5.15967,8.25586-4.90186,12.6416l.08594,2.23633Zm-1.89209,12.04a5.08415,5.08415,0,0,1,5.15967-5.418c3.01025,0,5.07422,2.23535,5.07422,5.418a5.12129,5.12129,0,1,1-10.23389,0Z" transform="translate(-129.29794 -232.28986)" fill="#d0cde1"/><circle cx="482.69312" cy="260.84872" r="86.29225" fill="#2f2e41"/><polygon points="449.365 379.018 423.568 374.348 431.935 320.484 457.731 325.154 449.365 379.018" fill="#2f2e41"/><rect x="608.43233" y="564.07272" width="26.21537" height="46.9692" transform="translate(-14.69358 -333.60977) rotate(10.26106)" fill="#2f2e41"/><ellipse cx="626.08228" cy="611.19594" rx="8.1923" ry="21.84614" transform="translate(-226.21522 871.66478) rotate(-78.58697)" fill="#2f2e41"/><ellipse cx="572.1108" cy="611.25703" rx="8.1923" ry="21.84614" transform="translate(-238.2839 865.84819) rotate(-82.4537)" fill="#2f2e41"/><circle cx="488.73433" cy="239.74114" r="29.49229" fill="#fff"/><circle cx="500.85556" cy="229.16973" r="9.83076" fill="#3f3d56"/><path d="M543.91852,399.26184c-1.29768-31.94667,26.23575-59.00572,61.49764-60.43807s64.89929,23.30439,66.197,55.25107-23.21382,39.20523-58.47571,40.63758S545.21621,431.20852,543.91852,399.26184Z" transform="translate(-129.29794 -232.28986)" fill="#fff"/><ellipse cx="691.67001" cy="477.41757" rx="43.14613" ry="13.5449" transform="translate(-218.47935 -65.68735) rotate(-12.9101)" fill="#2f2e41"/><ellipse cx="522.28158" cy="505.58661" rx="43.14613" ry="13.5449" transform="translate(-229.05476 -102.82038) rotate(-12.9101)" fill="#2f2e41"/><path d="M588.29085,527.14527A19.66153,19.66153,0,0,0,626.985,534.15c1.9343-10.68509-6.32706-14.46612-17.01215-16.40043S590.22516,516.46018,588.29085,527.14527Z" transform="translate(-129.29794 -232.28986)" fill="#fff"/><rect x="154.5348" y="13.12227" width="141.88698" height="134.9673" fill="#d0cde1"/><rect x="170.65832" y="29.24579" width="109.63994" height="83.84231" fill="#fff"/><rect x="170.54973" y="122.97937" width="59.63671" height="3.13877" fill="#f2f2f2"/><rect x="170.54973" y="132.3957" width="59.63671" height="3.13877" fill="#f2f2f2"/><circle cx="190.16707" cy="71.18959" r="12.5551" fill="#3f3d56"/><circle cx="225.47829" cy="71.18959" r="12.5551" fill="#6c63ff"/><circle cx="260.7895" cy="71.18959" r="12.5551" fill="#e6e6e6"/><circle cx="225.47829" cy="20.9692" r="6.27755" fill="#3f3d56"/><rect x="222.02216" y="274.45884" width="141.88698" height="134.9673" fill="#d0cde1"/><rect x="238.14568" y="290.58236" width="109.63994" height="83.84231" fill="#fff"/><rect x="262.27176" y="304.36086" width="38.437" height="38.437" fill="#6c63ff"/><path d="M406.28392,546.26247V592.936h46.67356V546.26247Zm44.64908,44.649H408.30839V548.287H450.933Z" transform="translate(-129.29794 -232.28986)" fill="#3f3d56"/><rect x="238.0371" y="382.74656" width="59.63671" height="3.13877" fill="#f2f2f2"/><circle cx="292.96565" cy="282.30578" r="6.27755" fill="#3f3d56"/><rect x="591.4365" y="234.05278" width="141.88698" height="134.9673" fill="#d0cde1"/><rect x="607.56002" y="250.1763" width="109.63994" height="83.84231" fill="#fff"/><rect x="650.5867" y="315.8124" width="23.58659" height="6.98967" fill="#3f3d56"/><rect x="622.07157" y="261.39284" width="80.61684" height="2.99557" fill="#3f3d56"/><rect x="622.07157" y="270.87882" width="80.61684" height="2.99557" fill="#3f3d56"/><rect x="622.07157" y="280.36479" width="80.61684" height="2.99557" fill="#3f3d56"/><rect x="622.07157" y="289.85077" width="80.61684" height="2.99557" fill="#3f3d56"/><rect x="622.07157" y="299.33675" width="80.61684" height="2.99557" fill="#3f3d56"/><rect x="607.45144" y="342.3405" width="59.63671" height="3.13877" fill="#f2f2f2"/><rect x="607.45144" y="350.18743" width="83.17752" height="3.13877" fill="#f2f2f2"/><circle cx="662.37999" cy="241.89971" r="6.27755" fill="#3f3d56"/></svg>
                            <br><br><h5 style="margin: 0px">Belum membuat soal</h5>
                            <label for="">Anda dapat menulis soal pada menu disamping kiri</label>

                            </div>

                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>

    </div>






<?php $this->endSection() ?>