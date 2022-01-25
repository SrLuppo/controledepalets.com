<?php
session_start();
require_once 'db_connect.php';

//echo $_GET['origem'].'<br>';
//echo $_GET['destino'].'<br>';
//echo $_GET['pbr'].'<br>';
//echo $_GET['simples'].'<br>';
//echo $_GET['veiculo'].'<br>';
//echo $_GET['nota'].'<br>';
//echo $_GET['data'].'<br>';



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

<body>
    <div class="row box">

        <div class="row">
            <div class="col s12">
                <img class="responsive-img" src="img/printTop.jpeg" alt="">
            </div>
        </div>
        <div class="row center"style="margin-bottom: -20px;">
            <div class="col s10 push-s1" >
                <b>  COMUNICAÇÂO INTERNA</b>
            </div>
            <div class="col s2 red-text">
               <b>Nº: XXXXXXXX</b> 
            </div>
        </div>
        <div class="col s12 push-s1">
            DE: XXXX
        </div>
        <div class="col s12 push-s1">
            PARA: XXXX
            <hr>
        </div>
        <div class="col s12 push-s1" style="margin-top: 20px;">
            Segue no carro XXXXXXX os paletes descriminados abaixo para posterior devolução:
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
                            <td class="center">XXXXX S</td>
                            <td class="center">xxxxx P</td>
                        </tr>
                        <tr>
                            <td colspan="2"class="center">Total:XX</td>
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
            <span class="right">Data:___/___/_______</span>
            <span class="left">Resposta: _________________________________________      Ass:_____________________________</span>
        </div>
    </div>
    <div class="row box">

<div class="row">
    <div class="col s12">
        <img class="responsive-img" src="img/printTop.jpeg" alt="">
    </div>
</div>
<div class="row center" style="margin-bottom: -20px;">
    <div class="col s10 push-s1">
        <b>  COMUNICAÇÂO INTERNA</b>
    </div>
    <div class="col s2 red-text">
       <b>Nº: XXXXXXXX</b> 
    </div>
</div>
<div class="col s12 push-s1">
    DE: XXXX
</div>
<div class="col s12 push-s1">
    PARA: XXXX
    <hr>
</div>
<div class="col s12 push-s1" style="margin-top: 20px;">
    Segue no carro XXXXXXX os paletes descriminados abaixo para posterior devolução:
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
                    <td class="center">XXXXX S</td>
                    <td class="center">xxxxx P</td>
                </tr>
                <tr>
                    <td colspan="2"class="center">Total:XX</td>
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
    <span class="right">Data:___/___/_______</span>
    <span class="left">Resposta: _________________________________________      Ass:_____________________________</span>
</div>
</div>
</body>

</html>