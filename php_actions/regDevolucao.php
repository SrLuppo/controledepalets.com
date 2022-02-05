<?php
session_start();

require_once '../db_connect.php' ;

function clear($input) {
    GLOBAL $connect;
    //sql
    $var = mysqli_escape_string($connect, $input);
    //XSS
    $var = htmlspecialchars($var);

    return $var;

}

echo $_POST['pbrDevolucao'] .' <br>';
echo $_POST['simplesDevolucao'] .' <br>';
echo $_POST['id'] .' <br>';

$devPbr = $_POST['pbrDevolucao'] ?   clear($_POST['pbrDevolucao']) : 0;
$devSimples = $_POST['simplesDevolucao']?  clear($_POST['simplesDevolucao']) : 0;
$id =  $_POST['id'];

date_default_timezone_set('America/Sao_Paulo');

$sqlConsultaExists = "SELECT * FROM debitos where id = '$id ' ";
$query = mysqli_query($connect,$sqlConsultaExists);
$vlrAtuais = mysqli_fetch_array( $query );


$novoValorPbrDevolvido = intval($vlrAtuais['devolveu_pbr'])  + intval($devPbr);
$novoValorSimplesDevolvido =  intval($vlrAtuais['devolveu_simples'])  + intval($devSimples);

echo $novoValorPbrDevolvido .' <br>';
echo $novoValorSimplesDevolvido .' <br>';


$sqlUpdate = "UPDATE debitos SET devolveu_pbr='$novoValorPbrDevolvido', devolveu_simples='$novoValorSimplesDevolvido' WHERE id='$id'";



if (mysqli_query($connect,$sqlUpdate)):

    $_SESSION['menssagem'] = 'Registrado com sucesso';
    header('Location: ../index.php');
else:
    $_SESSION['menssagem'] = 'Erro ao Registrar';
    header('Location: ../index.php');
    ECHO mysqlI_error($connect);
endif; 
?>