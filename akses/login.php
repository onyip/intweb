<!DOCTYPE html>
<html>
<head>
  <title>Halaman Login</title>
  <style>
    .kotak_login{
  width: 350px;
  background: white;
  /*meletakkan form ke tengah*/
  margin: 80px auto;
  padding: 30px 20px;
  box-shadow: 0px 0px 100px 4px #d6d6d6;
}
  </style>
</head>
<body>
  <div class="kotak_login">
<?php
   session_start();
   error_reporting('on');
   include_once '../config/dao.php';
   $dao = new Dao();

   $username = $_POST['mail'];
   $pass = md5($_POST['pwd']);
   //echo $pass." ".$username;
   $cekuser = $dao->readAkun($username,$pass);

   if($cekuser->num_rows == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='../index.php'>Back</a></div>";
   } else {
       $_SESSION['mail'] = $hasil['mail'];
       $_SESSION['mail'] = $username;
       echo "<div align='center'>Login Berhasil !!!"."<br>"."sedang mengalihkan halaman.....</div>";
       header('refresh:3;../content/pay.php');
   }

?>
</div>
</body>
</html>
