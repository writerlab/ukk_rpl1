<?php

if ($_GET['menu'] == 'home') {
  include('konten/home.php');
}
elseif ($_GET['menu'] == 'jenis-barang') {
  include('konten/jenis-barang.php');
}
elseif ($_GET['menu'] == 'tambah-jenis-barang') {
  include('konten/tambah-jenis-barang.php');
}
elseif ($_GET['menu'] == 'ruang') {
  include('konten/ruang.php');
}
elseif ($_GET['menu'] == 'tambah-ruang') {
  include('konten/tambah-ruang.php');
}
elseif ($_GET['menu'] == 'inventaris') {
  include('konten/inventaris.php');
}
elseif ($_GET['menu'] == 'tambah-inventaris') {
  include('konten/tambah-inventaris.php');
}
elseif ($_GET['menu'] == 'peminjaman') {
  include('konten/peminjaman.php');
}
elseif ($_GET['menu'] == 'pegawai') {
  include('konten/pegawai.php');
}
elseif ($_GET['menu'] == 'tambah-pegawai') {
  include('konten/tambah-pegawai.php');
}
elseif ($_GET['menu'] == 'logout') {
  include('konten/logout.php');
}