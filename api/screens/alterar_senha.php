<html>

<!--incluindo o cabeçalho-->
<?php include_once '../components/head.php' ?>

<body style="background-color: #167a34;">

    <main class="container" style="max-width: 500px;">
        <div id="card-login" class="card text-center">
            <div class="card-header">
                <form action="" method="post">
                    <h1 class="text-center" id="titulo-login">Alterar senha</h1>
                    <br>
                    <input class="form-control" placeholder="Cpf:" type="text" readonly>
                    <br>
                    <input class="form-control" placeholder="Senha" type="text" id="senha">
                    <br>
                    <input class="form-control" placeholder="digite novamente a senha" id="senha2" type="text">
                    <br>

                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" onclick="mostrarOcultarSenha() , mostrarOcultarSenha2()">
                    <label class="form-check-label" for="defaultCheck1">
                        Exibir senha
                    </label>
                    <div class="d-grid gap-2">
                        <br>
                        <button class="btn btn-primary" type="button">Atualizar
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                                <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
                            </svg>
                        </button>
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