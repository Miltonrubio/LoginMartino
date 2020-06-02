<?php
require 'Conexion.php';

$user= $_POST['user'];
$pass= $_POST['password'];

//$nombre=filter_input(INPUT_POST, "user");
//$pass=filter_input(INPUT_POST, "password");

// Verificar las credenciales
$stmt = $conn->prepare("SELECT * FROM user WHERE usuario='".$user."' and contraseña='".$pass."'");
$stmt->execute();
$result= $stmt->rowCount();

// Condición para verificar si el usuario existe
if($result>0){
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $res = $stmt->fetchAll();
    header("Location:index.html");
    
}


/*
$query=mysqli_query($conn,"SELECT * FROM user WHERE usuario='".$nombre."' and contraseña='".$pass."'");
$nr=mysqli_num_rows($query);

if($nr==1){
header("Location:index.html");
echo "Bienvenido:".$nombre;
}
else if($nr==0)
{
echo "No conexion";
}
*/