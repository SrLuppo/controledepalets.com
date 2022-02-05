<?php
session_start();
require_once 'db_connect.php';


date_default_timezone_set('America/Sao_Paulo');

$origem =  $_GET['origem'] ?? '';
$destino =  $_GET['destino'] ?? '';
$pbr =  $_GET['pbr'] ?? 0 ;
$simples =  $_GET['simples'] ?? 0 ;
$veiculo =  $_GET['veiculo'] ?? '';
$nota = $_GET['nota'] ?? '';
$data =  $_GET['data'] ?? '';


if (!isset($_GET['id'])):

    $sql = "SELECT * FROM registro ORDER BY id DESC LIMIT 1";

    $result = mysqli_query($connect,$sql);
    $id = mysqli_fetch_array($result)['id'];

else:
    $id = $_GET['id'];

endif;





?>

<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Impressao de CI de Pallets</title>
    <style>
        @media print {

            .no-print,
            .no-print * {
                display: none !important;
            }
        }

        @page {
            size: auto;
            margin: 22px;
        }

        .box {
            border: #709AD2;
            border-style: solid;
            border-width: 2px;
        }
    </style>
</head>

<body onload="imprimir()">
    <div class="row box">

        <div class="row">
            <div class="col s12">
                <img class="responsive-img" src="img/printTop.jpeg" alt="">
            </div>
        </div>
        <div class="row center" style="margin-bottom: -20px;">
            <div class="col s10 push-s1">
                <b> COMUNICAÇÂO INTERNA</b>
            </div>
            <div class="col s2 red-text">
                <b>Nº: <?php echo $id ?></b>
            </div>
        </div>
        <div class="col s12 push-s1">
            DE: <?php echo $origem; ?>
        </div>
        <div class="col s12 push-s1">
            PARA: <?php echo $destino; ?>
            <hr>
        </div>
        <div class="col s12 " style="margin-top: 20px;">
            Segue no carro <?php echo $veiculo; ?> os paletes da nota <?php echo $nota; ?> , descriminados abaixo para posterior devolução:
        </div>

        <div class="row">
            <div class="col s3 push-s4">
                <table class="no-autoinit">
                    <thead>
                        <tr>
                            <th colspan="2" class="center">PALETES ENVIADOS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="center">SIMPLES</td>
                            <td class="center">P.B.R</td>
                        </tr>
                        <tr>
                            <td class="center"><?php echo $simples; ?></td>
                            <td class="center"><?php echo $pbr; ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="center">Total:<?php echo intval($simples) + intval($pbr) ; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col s2 center push-s5"><br><br><br><br><br><br><br>
                ______________________________
                <br>
                <div class="s12 center ">Assinatura</div>
            </div>
        </div>
        <hr>
        <div class="row container">
            <span class="right">Data:<?php echo ' ' .date('d/m/Y', strtotime($data)); ?></span>
            <span class="left">Resposta: _________________________________________ Ass:_____________________________</span>
        </div>
    </div>
    <!------------------------------------------------------>
    <div class="row box">
        <div class="row">
            <div class="col s12">
                <img class="responsive-img" src="img/printTop.jpeg" alt="">
            </div>
        </div>
        <div class="row center" style="margin-bottom: -20px;">
            <div class="col s10 push-s1">
                <b> COMUNICAÇÂO INTERNA</b>
            </div>
            <div class="col s2 red-text">
                <b>Nº: <?php echo $id ?></b>
            </div>
        </div>
        <div class="col s12 push-s1">
            DE: <?php echo $origem; ?>
        </div>
        <div class="col s12 push-s1">
            PARA: <?php echo $destino; ?>
            <hr>
        </div>
        <div class="col s12 " style="margin-top: 20px;">
            Segue no carro <?php echo $veiculo; ?> os paletes da nota <?php echo $nota; ?> , descriminados abaixo para posterior devolução:
        </div>

        <div class="row">
            <div class="col s3 push-s4">
                <table class="no-autoinit">
                    <thead>
                        <tr>
                            <th colspan="2" class="center">PALETES ENVIADOS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="center">SIMPLES</td>
                            <td class="center">P.B.R</td>
                        </tr>
                        <tr>
                            <td class="center"><?php echo $simples; ?></td>
                            <td class="center"><?php echo $pbr; ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="center">Total:<?php echo intval($simples) + intval($pbr); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col s2 center push-s5"><br><br><br><br><br><br><br>
                ______________________________
                <br>
                <div class="s12 center ">Assinatura</div>
            </div>
        </div>
        <hr>
        <div class="row container">
            <span class="right">Data:<?php echo ' ' .date('d/m/Y', strtotime($data)); ?></span>
            <span class="left">Resposta: _________________________________________ Ass:_____________________________</span>
        </div>
    </div>
    <script>
        function imprimir() {
            window.print();
            
        }
        window.addEventListener('afterprint', (event) => {
            document.location.href = 'index.php';
        });
    </script>
</body>

</html>