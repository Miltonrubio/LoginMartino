
<?php

$servername="127.0.0.1";
$username="root";
$password="";
$dbname="php_login";
$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password); 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->exec("SET CHARACTER SET utf8");

/*
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="php_login";


$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
die("No hay conexión:".mysqli_connect_error());
}
else{echo "Conectado";}


mysqli_close($conn); */
?>
