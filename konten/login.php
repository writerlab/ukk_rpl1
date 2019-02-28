<?php
if (isset($_POST['masuk'])) {
  $user = $_POST['username'];
  $password = $_POST['password'];

  $query = mysqli_query($konek, "
  select * from petugas where username='$user' and password=md5('$password')
  ");

  $jumlah = mysqli_num_rows($query);
  if ($jumlah > 0) {
    $sesi = mysqli_fetch_assoc($query);

    $_SESSION['user'] = $sesi['username'];
    $_SESSION['nama'] = $sesi['nama_petugas'];
    $_SESSION['id_level'] = $sesi['id_level'];
    $_SESSION['id'] = $sesi['id_petugas'];

    header('Location: ?menu=home');
  } else {
    print "login gagal";
  }
}
?>


<h1>login</h1>
<form action="" method="post">
  username
  <input type="text" name="username" class="form-control">
  
  password
  <input type="password" name="password" class="form-control">

  <button type="submit" name="masuk">Login</button>
</form>