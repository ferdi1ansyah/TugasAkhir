

<div class="card card-custom example example-compact">

<div class="card-header">
												<h3 class="card-title">Section Separator</h3>
												<div class="card-toolbar">
													<div class="example-tools justify-content-center">
														<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
														<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
													</div>
												</div>
											</div>


<form action="/dataguru/prosesTambahGuru" method="POST" enctype="multipart/form-data">

<div class="card-body">
													<div class="form-group">

    <h2>Informasi Guru</h2>
    <hr>
    <label for="">Nama Lengkap</label>
    <input type="text" class="form-control" name="nama" placeholder="Masukkan nama guru" >
    <span class="form-text text-muted">please enter your name</span>
    </div>
    
    <label for="">Asal Sekolah</label>
    <input type="text" name="asalsekolah" placeholder="Masukkan asal sekolah"><br><br>
    
    <label for="">Pendidikan</label>
    <input type="text" name="pendidikan" placeholder="Masukkan pendidikan"><br><br>
    
    <label for="">Email</label>
    <input type="email" name="email" placeholder="Masukkan email"><br><br>
    
    <label for="">Telepon</label>
    <input type="text" name="telp" placeholder="Masukkan telepon"><br><br>
    
    <label for="">Foto</label>
    <input type="file" name="foto" placeholder=""><br><br>



    <h2>Bidang Keahlian</h2>
    <hr>

    
    <label for="">Keahlian</label>
    <select name="mapel_kategori" id="">
        <?php foreach( $mapel_kategori->getResultArray() AS $mapel ) :
            
            $id_mapel_kategori      = $mapel['id_mapel_kategori'];
            $id_mapel_subkategori   = $mapel['id_mapel_subkategori'];

            $value = $id_mapel_kategori.'-'.$id_mapel_subkategori;
        ?>
        <option value="<?php echo $value ?>"><?php echo $mapel['nama_mapel'].' '.$mapel['nama_submapel'] ?></option>
        <?php endforeach; ?>
    </select><br><br>


    




    <h2>Akun guru</h2>
    <hr>


    <label for="">Username</label>
    <input type="text" name="username"><br><br>

    <label for="">Kata sandi</label>
    <input type="text" name="password"><br><br>


    <label for="">Status Akun</label>
    <br>
    <label for="aktif">Aktif</label>
    <input type="radio" id="aktif" name="status_akun" value="aktif">
    
    <label for="nonaktif">Nonaktif</label>
    <input type="radio" id="nonaktif" name="status_akun" value="nonaktif">


    <button>Simpan</button>
</form>

</div>