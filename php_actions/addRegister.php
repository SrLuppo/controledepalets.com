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


$origem = clear($_POST['origem']) ; 
$destino = clear($_POST['destino']) ; 
$pbr = clear($_POST['pbr']) ; 
$simples = clear($_POST['simples']) ; 
$veiculo = clear($_POST['placa']) ; 
$nota = clear($_POST['nf']) ; 
$data = date('Y-m-d H:i:s');


    $sql = "INSERT INTO registro (origem, destino, pbr, simples, veiculo, notafiscal, data)
            VALUES
            ('$origem','$destino','$pbr','$simples','$veiculo','$nota','$data' )";

    if (mysqli_query($connect,$sql )):
        $_SESSION['menssagem'] = 'Adicionado com sucesso';
        header("Location: ../impressao.php?origem=$origem&destino=$destino&pbr=$pbr&simples=$simples&veiculo=$veiculo&nota=$nota&data=$data");
    else:
        $_SESSION['menssagem'] = 'Erro ao adicionar';
        header('Location: ../index.php');
        ECHO mysqlI_error($connect);
    endif; 



?>
 