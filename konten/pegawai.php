<h1>
  Data Pegawai
  <a href="?menu=tambah-pegawai">Tambah</a>
</h1>

<table class="table">
  <thead>
    <tr>
      <th>NO.</th>
      <th>NIP</th>
      <th>NAMA</th>
      <th>ALAMAT</th>
      <th>AKSI</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $q = mysqli_query($konek, 
    "select * from pegawai"
  );
  $no = 0;
  while($row = mysqli_fetch_array($q)) {
    $no++; ?>
    <tr>
      <td><?php print $no?></td>
      <td><?php print $row['nip']?></td>
      <td><?php print $row['nama_pegawai']?></td>
      <td><?php print $row['alamat']?></td>
      <td>
        <a href="#!">ubah</a>
        <a href="#!">hapus</a>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>