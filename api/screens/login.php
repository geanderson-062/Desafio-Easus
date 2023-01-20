<html>

<!--incluindo o cabeçalho-->
<?php include_once '../components/head.php' ?>

<body style="background-color: #167a34;">

    <main class="container" style="max-width: 500px;">
        <div id="card-login" class="card text-center" style="background-color: #fff;">
            <div class="card-header">
                <form action="" method="post">
                    <h1 class="text-center" id="corSecondaria" style="color: #172474;">Login</h1>
                    <br>
                    <input class="form-control" placeholder="Cpf" type="text">
                    <br>
                    <input class="form-control" placeholder="Senha" id="senha" type="text">
                    <br>

                    <input class="form-check-input" type="checkbox" value="" onclick="mostrarOcultarSenha()" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Exibir senha
                    </label>
                    <div class="d-grid gap-2">
                        <br>
                        <button class="btn btn-primary" type="button">Entrar</button>
                    </div>

                    <br>
            </div>
            </form>

        </div>
        </div>
    </main>

    <!--js -->
    <script src="../assets/js/exibir_senha.js"></script>

    <!--bootstrap-->
    <?php include_once '../components/bootstrap.php' ?>
</body>

</html>