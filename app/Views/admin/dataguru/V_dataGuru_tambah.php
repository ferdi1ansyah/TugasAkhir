

<form action="/dataguru/prosesTambahGuru" method="POST" enctype="multipart/form-data">

    <h2>Informasi Guru</h2>
    <hr>
    <label for="">Nama Lengkap</label>
    <input type="text" name="nama" placeholder="Masukkan nama guru"><br><br>
    
    <label for="">Asal Sekolah</label>
    <input type="text" name="asalsekolah" placeholder="Masukkan asal sekolah"><br><br>
    
    <label for="">Pendidikan</label>
    <input type="text" name="pendidikan" placeholder=""><br><br>
    
    <label for="">Email</label>
    <input type="email" name="email" placeholder=""><br><br>
    
    <label for="">Telepon</label>
    <input type="text" name="telp" placeholder=""><br><br>
    
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