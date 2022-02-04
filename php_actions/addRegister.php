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

//verificar se já existe a filial na tabela  debitos.
    $sqlConsultaExists = "SELECT * FROM debitos where filial = '$destino' ";
    $query = mysqli_query($connect,$sqlConsultaExists);
    $exist =  mysqli_num_rows( $query ) ;

    if( (bool) $exist ):

        $totais = mysqli_fetch_array( $query );

        $novoVlrEnviadoSimples = intval($totais['enviado_simples']) + intval($simples);
        $novoVlrEnviadoPbr = intval($totais['enviado_pbr']) + intval($pbr);

        $sqlUpdate = "UPDATE debitos SET enviado_pbr='$novoVlrEnviadoPbr', enviado_simples='$novoVlrEnviadoSimples' WHERE filial='$destino'";

        mysqli_query($connect,$sqlUpdate );

    else:
        $sqlInsertNewLine = "INSERT INTO debitos (filial, enviado_pbr, enviado_simples, devolveu_pbr, devolveu_simples) 
                            VALUES
                            ('$destino','$pbr','$simples' , 0 , 0 )";
                        
        mysqli_query($connect,$sqlInsertNewLine );

    endif;




// Salvamento de histórico
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
 