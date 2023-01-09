<?php
ob_start();
date_default_timezone_set('America/Recife');
// conexão com banco de dados
$servername = "containers-us-west-33.railway.app";
$username = "root";
$password = "xj1R9omw30hU9twtsK8t";
$db_name ="controlepallets";

$connect = mysqli_connect($servername,$username,$password,$db_name);
mysqli_set_charset($connect,"utf8");

if(mysqli_connect_error()):
    echo "falha na conexão: ".mysqli_connect_error();
endif;
?>
