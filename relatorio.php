<?php
session_start();
require_once 'db_connect.php' ;

include_once "includes/header.php";

date_default_timezone_set('America/Recife');

$filial = $_GET['filial'];

$sql = "SELECT * FROM registro where destino = '$filial' ";

$result = mysqli_query($connect,$sql);

?>
<div class="row">

    <!-- Débito de filiais -->
    <div class="col s12 m12 l12 teal lighten-5 index-box">
    <div class="row">
            <div class="col s12 center">
                <h5> Registros de <?php echo $filial; ?> </h5>
            </div>

        </div>
    <table>
        <thead>
          <tr>
              <th>Numero da CI</th>
              <th>Numero da NF</th>
              <th>Destino</th>
              <th>PBR</th>
              <th>Simples</th>
              <th>Data</th>
          </tr>
        </thead>

        <tbody>
         <?php
         
            while($listaRegistro = mysqli_fetch_assoc($result))
            {
                $data = date('H:i d/m/Y', strtotime($listaRegistro['data']));
                $numeroDaCi =  $listaRegistro['id'];
                $notafiscal =  $listaRegistro['notafiscal'];
                $dataToSend = $listaRegistro['data'];
                $destino = $listaRegistro['destino'];
                $pbr = $listaRegistro['pbr'];
                $simples = $listaRegistro['simples'];
                $veiculo = $listaRegistro['veiculo'];
                $origem = $listaRegistro['origem'];
                $nota = $listaRegistro['notafiscal'];
                $id = $listaRegistro['id'];


                echo "<tr>";
                echo "<td>".$numeroDaCi."</td>";
                echo "<td>".$notafiscal."</td>";
                echo "<td>".$destino."</td>";
                echo "<td>".$pbr."</td>";
                echo "<td>".$simples."</td>";
                echo "<td>".$data."</td>";
                echo "<td> <a class='btn-float' href='impressao.php?origem=$origem&destino=$destino&pbr=$pbr&simples=$simples&veiculo=$veiculo&nota=$nota&data=$dataToSend&id=$id'> <i class='material-icons teal-text text-lighten-1' >print</i></a> </td>";
                echo "</tr>";
            }
            
         ?>
        </tbody>
      </table>
    </div>

</div>
<script>

</script>
<?php
include_once "includes/footer.php";
?>
