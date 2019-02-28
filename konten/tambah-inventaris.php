<?php
if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $kondisi = $_POST['kondisi'];
  $keterangan = $_POST['keterangan'];
  $jumlah = $_POST['jumlah'];
  $id_jenis = $_POST['jenis'];
  $tgl_register = $_POST['tgl_register'];
  $id_ruang = $_POST['ruang'];
  $kode = $_POST['kode'];
  $id_petugas = $_SESSION['id'];

  mysqli_query($konek, "insert into inventaris values (
    NULL, '$nama', '$kondisi', '$keterangan',
    '$jumlah', '$id_jenis', '$tgl_register', '$id_ruang',
    '$kode', '$id_petugas'
  )");
  
  $pesan = "Data berhasil disimpan.";
}
?>


<h1>Tambah Data Inventaris</h1>
<?php print $pesan?>
<form action="" method="post">
  <div class="form-group">
    <input type="text" name="nama" class="form-control" required placeholder="Nama Barang">
  </div>
  <div class="form-group">
    <select name="kondisi" class="form-control">
      <option >Pilih Kondisi Barang</option>
      <option value="baru">Baru</option>
      <option value="rusak">Rusak</option>
    </select>
  </div>
  <div class="form-group">
    <textarea rows="5" cols="10" name="keterangan" class="form-control" required placeholder="Keterangan"></textarea>
  </div>
  <div class="form-group">
    <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" required>
  </div>
  <div class="form-group">
    <select name="jenis" class="form-control" required>
      <option value="">Pilih Jenis Barang</option>
      <?php 
      $q_jenis = mysqli_query($konek, "select * from jenis");
      while($r=mysqli_fetch_array($q_jenis)) { ?>
        <option value="<?php print $r[0]?>"><?php print $r[1] ?></option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <input type="date" name="tgl_register" class="form-control" required placeholder="Tanggal Register">
  </div>
  <div class="form-group">
    <select name="ruang" class="form-control" required>
      <option value="">Pilih Ruangan</option>
      <?php 
      $q_ruang = mysqli_query($konek, "select * from ruang");
      while($r=mysqli_fetch_array($q_ruang)) { ?>
        <option value="<?php print $r[0]?>"><?php print $r[1] ?></option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <input type="text" name="kode" class="form-control" required placeholder="Kode inventaris">
  </div>
  <button type="submit" name="simpan" class="btn btn-info">Simpan</button>
  <a href="?menu=inventaris">Kembali</a>
</form>