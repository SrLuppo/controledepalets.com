<?php
include_once "includes/header.php"
?>
<div class="row">
    <div class="col s12 m4 l4 teal lighten-5" style="margin-left: 10px;">
        <div class="row">
            
            <!-- Titulo -->
            <div class="col s12 center">
                <h5>Registrar Envio de Pallets</h5>
                <hr>
            </div>

            <div class="col s12 center">

                <!-- formulario para envio do cadastro -->
                <form action="" method="post">

                    <div class="input-field col s5">
                        <i class="material-icons prefix">home</i>
                        <input readonly type="text" value="CWB" id="origem" name="origem" class="autocomplete">
                        <label for="origem">Origem</label>
                    </div>

                    <div class="input-field col s5">
                        <i class="material-icons prefix">moving</i>
                        <input type="text" id="destino" name="destino" class="autocomplete">
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
                        <input type="text" id="placa" name="placa" maxlength="7" class="autocomplete">
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
</div>
<?php
include_once "includes/footer.php"
?>