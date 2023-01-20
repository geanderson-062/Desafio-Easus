<html>

<!--incluindo o cabeçalho-->
<?php include_once '../components/head.php' ?>

<body>

    <!--menu lateral -->
    <?php include_once '../components/menu_lateral.php' ?>

    <!--conteudo-->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">



            <div class="row row-cols-1 row-cols-md-3 g-3">

                <a style="text-decoration: none;" href="../screens/capitacao.php">
                    <div class="col">
                        <div class="card">
                            <img src="../assets/img/background4.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Capitação Ponderada</h5>
                                <p class="card-text">Veja detalhes da sua capitação</p>
                            </div>
                        </div>
                    </div>
                </a>


                <a style="text-decoration: none;" href="../screens/producao.php">
                    <div class="col">
                        <div class="card">
                            <img src="../assets/img/background4.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Produção</h5>
                                <p class="card-text">Saiba como está sua produção</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a style="text-decoration: none;" href="../screens/desempenho.php">
                    <div class="col">
                        <div class="card">
                            <img src="../assets/img/background4.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Desempenho</h5>
                                <p class="card-text">Analise o desempenho de suas equipes</p>
                            </div>
                        </div>
                    </div>
                </a>

            </div>

        </div>
    </main>

    <!--bootstrap-->
    <?php include_once '../components/bootstrap.php' ?>

</body>

</html>