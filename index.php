<?php
session_start();
require_once 'db_connect.php' ;

include_once "includes/header.php";

date_default_timezone_set('America/Recife');
$sql = "SELECT * FROM registro ORDER BY id DESC LIMIT 6";


$result = mysqli_query($connect,$sql);

?>
<div class="row">

    <!-- ENVIO DE PALLETS -->
    <div class="col s12 m4 l4 teal lighten-5 index-box">
        <div class="row">

            <!-- Titulo -->
            <div class="col s12 center">
                <h5>Registrar Envio de Pallets</h5>
                <hr>
            </div>

            <div class="col s12 center">

                <!-- formulario para envio do cadastro -->
                <form action="php_actions/addRegister.php" method="post">

                    <div class="input-field col s5">
                        <i class="material-icons prefix">home</i>
                        <input readonly type="text" value="CWB" id="origem" name="origem" maxlength="3" class="autocomplete">
                        <label for="origem">Origem</label>
                    </div>

                    <div class="input-field col s5">
                        <i class="material-icons prefix">moving</i>
                        <input type="text" id="destino" name="destino" maxlength="3" required class="autocomplete">
                        <label for="destino">Destino</label>
                    </div>

                    <!-- Pallets -->
                    <div class="input-field col s12">
                        <h5>Pallets</h5>
                    </div>

                    <div class="input-field col s5">
                        <i class="material-icons prefix">calendar_view_month</i>
                        <input type="number" id="pbr" name="pbr" class="autocomplete">
                        <label for="pbr">PBR</label>
                    </div>

                    <div class="input-field col s5">
                        <i class="material-icons prefix">calendar_view_month</i>
                        <input type="number" id="simples" name="simples" class="autocomplete">
                        <label for="simples">Simples</label>
                    </div>

                    <!-- Nota Fiscal e Placa do veículo -->
                    <div class="input-field col s12">
                        <h5>Nota Fiscal e Veículo</h5>
                    </div>
                    <div class="input-field col s5">
                        <i class="material-icons prefix">local_shipping</i>
                        <input type="text" id="placa" name="placa" maxlength="7" required class="autocomplete">
                        <label for="placa">Veículo</label>
                    </div>

                    <div class="input-field col s5">
                        <i class="material-icons prefix">receipt</i>
                        <input type="text" id="nf" name="nf" class="autocomplete">
                        <label for="nf">Nota Fiscal</label>
                    </div>


                    <div class="col s12">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Imprimir e Registrar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Débito de filiais -->
    <div class="col s12 m4 l4 teal lighten-5 index-box">
        <div class="row">
            <div class="col s12 center">
                <h5>Débitos</h5>
            </div>

        </div>
    <table class="centered">
        <thead>
          <tr>                                    
              <th>Filial</th>                       
              <th>PBR</th>                       
              <th>Simples</th>                       
              <th>Reg.Devolução</th>                       
          </tr>          
        </thead>

        <tbody>
         <?php

         $sqlDebito = "SELECT * FROM debitos WHERE (enviado_pbr - devolveu_pbr) > 0 or (enviado_simples - devolveu_simples) > 0";

         $debitoQuerry = mysqli_query($connect,$sqlDebito);
         

         while($debitoDados = mysqli_fetch_array($debitoQuerry)) {

             $debitoPbr = $debitoDados['enviado_pbr'] - $debitoDados['devolveu_pbr'] ;
             $debitoSimples = $debitoDados['enviado_simples'] - $debitoDados['devolveu_simples'] ;
            ?>
           <tr>
               <td><a href="relatorio.php?filial=<?php echo $debitoDados['filial'];?>"><?php echo $debitoDados['filial'];?></a></td>
               <td><?php echo $debitoPbr; ?></td>
               <td><?php echo $debitoSimples; ?></td>
               <td><a class="btn-floating modal-trigger" href="#modal<?php echo $debitoDados['id']; ?>"><i class="material-icons">undo</i></a></td>
           </tr>

            <!-- Modal Structure -->
            <div id="modal<?php echo $debitoDados['id']; ?>" class="modal">
                <div class="modal-content center">
                    <h4>Registrar Devolução de <?php echo $debitoDados['filial']; ?> </h4>

                    <form action="php_actions/regDevolucao.php" method="POST">
                        <div class="row">
                            <div class="input-field col s2 push-s4">
                                <i class="material-icons prefix">calendar_view_month</i>
                                <input type="number" placeholder="PBR" id="pbrDevolucao" name="pbrDevolucao" class="autocomplete">
                            </div>  

                            <input type="hidden" name="id" value="<?php echo $debitoDados['id']; ?>">

                            <div class="input-field col s2 push-s4">
                                <i class="material-icons prefix">calendar_view_month</i>
                                <input type="number" placeholder="Simples" id="simplesDevolucao" name="simplesDevolucao" class="autocomplete">
                            </div>

                            <div class="col s12 center">
                                <a href="#!" class="modal-close waves-effect red btn text-white ">Cancelar</a>
                                <button class="btn green waves-effect waves-light" type="submit" name="action">Registrar
                                    <i class="material-icons right">send</i>
                                </button>

                            </div>
                        </div>
                    </form>
                </div>

            </div>

            <?php
         }
         
          
            
         ?>
        </tbody>
      </table>
    </div>

    <!-- Débito de filiais -->
    <div class="col s12 m4 l4 teal lighten-5 index-box">
    <div class="row">
            <div class="col s12 center">
                <h5>Últimos Registros</h5>
            </div>

        </div>
    <table>
        <thead>
          <tr>
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
                $dataToSend = $listaRegistro['data'];
                $destino = $listaRegistro['destino'];
                $pbr = $listaRegistro['pbr'];
                $simples = $listaRegistro['simples'];
                $veiculo = $listaRegistro['veiculo'];
                $origem = $listaRegistro['origem'];
                $nota = $listaRegistro['notafiscal'];
                $id = $listaRegistro['id'];


                echo "<tr>";
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
