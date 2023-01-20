<!--incluindo o cabeçalho-->
<?php include_once '../components/head.php' ?>

<body>

    <!--menu lateral -->
    <?php include_once '../components/menu_lateral.php' ?>

    <!--conteudo-->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <h1>Desempenho</h1>

        <br>
        <br>
        <br>

        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Selecione um filtro</label>
            <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Selecione um filtro desejado</option>
                <option>Todas</option>
                <option>Pontuação ok </option>
                <option>Pendentes</option>
                <option>No quadrimestre do Mês</option>
                <option>Próximo quadrimestre</option>
                <option>Mais atenção</option>
                <option>Sem cadastro</option>
                <option>Finalizadas</option>
            </select>
            <div class="invalid-feedback">
                porfavor selecione um filtro desejado
                porfavor selecione o filtro
            </div>
        </div>

        <br>
        <br>

        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Equipes</label>
            <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="">selecione a equipe desejada</option>
                <option>ESF</option>
                <option>ESF 2</option>
                <option>ESF 3</option>
                <option>ESF 4</option>

            </select>
            <div class="invalid-feedback">
                porfavor selecione uma equipe desejada.
            </div>
        </div>

        <br>
        <br>

        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Microareas</label>
            <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="">selecione a microarea desejada</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>

            </select>
            <div class="invalid-feedback">
                porfavor selecione uma microarea desejada.
            </div>
        </div>

        <br>
        <br>

        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Gestantes fora de área</label>
            <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Quer ver as gestantes fora de área?</option>
                <option>Sim</option>
                <option>Não</option>
            </select>
            <div class="invalid-feedback">
                porfavor selecione a página desejada.
            </div>

            <br>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <input class="form-control form-control-dark w-100 rounded-0 border-3" type="text" placeholder="Pesquisar pelo nome" aria-label="Search">
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="26" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </div>

            <div class="d-grid gap-2 d-md-block">
                <button type="button" class="btn btn-primary ">Imprimir relatório
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                        <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                        <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
                    </svg>
                </button>
                <button type="button" class="btn btn-secondary ">Normas Técnicas
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-bar-graph" viewBox="0 0 16 16">
                        <path d="M4.5 12a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1zm3 0a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm3 0a.5.5 0 0 1-.5-.5v-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5h-1z" />
                        <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                    </svg>
                </button>
            </div>

            <br>
            <br>
            <br>

            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Documento</th>
                        <th scope="col">Nascimento</th>
                        <th scope="col">Idade</th>
                        <th scope="col">Dum</th>
                        <th scope="col">DPP</th>
                        <th scope="col">MA</th>
                        <th scope="col">IG </th>
                    </tr>
                </thead>
            </table>

        </div>

        <br>
        <br>


    </main>



    <!--bootstrap-->
    <?php include_once '../components/bootstrap.php' ?>

</body>

</html>