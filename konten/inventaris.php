<h1>
  Data Inventaris
  <a href="?menu=tambah-inventaris">Tambah</a>
</h1>

<table class="table">
  <thead>
    <tr>
      <th>NO.</th>
      <th>NAMA</th>
      <th>KONDISI</th>
      <th>KETERANGAN</th>
      <th>JUMLAH</th>
      <th>JENIS</th>
      <th>TGL</th>
      <th>RUANG</th>
      <th>AKSI</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $q = mysqli_query($konek, 
    "select a.*, b.*, c.* from inventaris a
    inner join jenis b on a.id_jenis=b.id_jenis
    inner join ruang c on a.id_ruang=c.id_ruang"
  );
  $no = 0;
  while($row = mysqli_fetch_array($q)) {
    $no++; ?>
    <tr>
      <td><?php print $no?></td>
      <td><?php print $row['nama']?></td>
      <td><?php print $row['kondisi']?></td>
      <td><?php print $row['keterangan']?></td>
      <td><?php print $row['jumlah']?></td>
      <td><?php print $row['nama_jenis']?></td>
      <td><?php print $row['tanggal_register']?></td>
      <td><?php print $row['nama_ruang']?></td>
      <td>
        <a href="#!">ubah</a>
        <a href="#!">hapus</a>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>