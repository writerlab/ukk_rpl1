<?php

if ($_GET['menu'] == 'home') {
  include('konten/home.php');
}
elseif ($_GET['menu'] == 'sonia') {
  print "halo aku sonia";
}
elseif ($_GET['menu'] == 'inventaris') {
  include('konten/inventaris.php');
}
elseif ($_GET['menu'] == 'peminjaman') {
  include('konten/peminjaman.php');
}
elseif ($_GET['menu'] == 'logout') {
  include('konten/logout.php');
}