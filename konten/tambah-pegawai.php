<?php
if (isset($_POST['simpan'])) {
  $nip = $_POST['nip'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];

  mysqli_query($konek, "insert into pegawai values (
    NULL, '$nama', '$nip', '$alamat'
  )");
  
  $pesan = "Data berhasil disimpan.";
}
?>


<h1>Tambah Data Pegawai</h1>
<?php print $pesan?>
<form action="" method="post">
  <div class="form-group">
    <input type="text" name="nip" class="form-control" required placeholder="NIP">
  </div>
  <div class="form-group">
    <input type="text" name="nama" class="form-control" required placeholder="Nama Pegawai">
  </div>
  <div class="form-group">
    <textarea name="alamat" class="form-control" cols="30" rows="5" required placeholder="Alamat..."></textarea>
  </div>
  
  <button type="submit" name="simpan" class="btn btn-info">Simpan</button>
  <a href="?menu=pegawai">Kembali</a>
</form>