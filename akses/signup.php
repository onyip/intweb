<?php
 $hostname  = "localhost";
   $username  = "root";
   $password  = "gagal";
   $dbname  = "webku";
// include 'dbconek.php';
// value
$nama = $_POST['nama'];
$pwd = md5($_POST['pwd']);
$mail = $_POST['mail'];
// ID generator
// $angka =time();
// $digit =array_rand($angka,3);
// $keluar = implode("", angka)

$conn = mysqli_connect($hostname, $username, $password, $dbname);
   if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
 header("refresh:5;login.php");
 
$sql = "INSERT INTO user (name, pwd, mail) VALUES ('$nama', '$pwd', '$mail')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
echo $nama."<br>"."<br>"."$pwd"."<br>"."$mail";


?>
