</main>

<footer class="page-footer teal darken-3">
    <div class="footer-copyright teal darken-3">
        <div class="container">
            © 2022 ADLS-Development
            <a class="grey-text text-lighten-4 right" href="#!">Links</a>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    <?php
    
        if(isset($_SESSION['menssagem'])){
        ?>
            M.toast({html: '<?php echo $_SESSION['menssagem']?>'})
        <?php };
            session_unset();
        ?>
    //abertura do modal materialize
    $(document).ready(function(){
        $('.modal').modal();
    });

    //maiusculas 
    document.getElementById('destino').addEventListener('keyup', (ev) => {
        const input = ev.target;
        input.value = input.value.toUpperCase();
    });

    document.getElementById('placa').addEventListener('keyup', (ev) => {
        const input = ev.target;
        input.value = input.value.toUpperCase();
    });

</script>
</body>

</html>