<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="test";

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
    die("no hay conexión".mysqli_connect_error());
}
$nombre=$_POST["txtusuario"];
$pass=$_POST["txtpassword"];
$query=mysqli_query($conn,"SELECT*FROM login WHERE usuario'".$nombre"' and password='".$pass"'");
$nr=mysqli_num_rows($query);
if($nr==1){
    //header("location:)
    echo "Bienvenido:".$nombre;
}else if($nr==0){
    echo "no ingreso";
}
red
?>