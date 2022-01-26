<?php
session_start();
require_once 'db_connect.php' ;

include_once "includes/header.php";

$sql = "SELECT * FROM registro ORDER BY id DESC LIMIT 10";

$result = $connect->query($sql);

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
    
    </div>

    <!-- Débito de filiais -->
    <div class="col s12 m4 l4 teal lighten-5 index-box">
    <table>
        <thead>
          <tr>
              <th>Destino</th>
              <th>Pallets PBR</th>
              <th>Pallets Simples</th>
          </tr>
        </thead>

        <tbody>
         <?php
         
            while($user_data = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>".$user_data['destino']."</td>";
                echo "<td>".$user_data['pbr']."</td>";
                echo "<td>".$user_data['simples']."</td>";
            }
         ?>
        </tbody>
      </table>
    </div>

</div>
<?php
include_once "includes/footer.php";
?>
