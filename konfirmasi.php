<?php
$yoyo=date('Y-m-d H:i:s');
$nama=$_POST['nama'];
$komentar=$_POST['komentar'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,undangan); //To select the database
session_start(); //To start the session
$query=mysqli_query($con,"insert into data values('null','$yoyo','$nama','$komentar')"); 
//made query after establishing connection with database.
if ($query) {
header('Location: http://panji.gay/');
}
?>