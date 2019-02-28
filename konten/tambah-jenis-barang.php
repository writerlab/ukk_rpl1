<?php
if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $kode = $_POST['kode'];
  $keterangan = $_POST['keterangan'];

  mysqli_query($konek, "insert into jenis values (
    NULL, '$nama', '$kode', '$keterangan'
    )");
  
  $pesan = "Data berhasil disimpan.";
}
?>


<h1>Tambah Jenis Barang</h1>
<?php print $pesan?>
<form action="" method="post">
  <div class="form-group">
    <input type="text" name="nama" class="form-control" required placeholder="Nama Jenis">
  </div>
  <div class="form-group">
    <input type="text" name="kode" class="form-control" required placeholder="Kode Jenis">
  </div>
  <div class="form-group">
    <input type="text" name="keterangan" class="form-control" required placeholder="Keterangan">
  </div>
  <button type="submit" name="simpan" class="btn btn-info">Simpan</button>
  <a href="?menu=jenis-barang">Kembali</a>
</form>