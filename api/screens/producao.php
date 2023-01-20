<!--incluindo o cabeçalho-->
<?php include_once '../components/head.php' ?>

<body>

    <!--menu lateral -->
    <?php include_once '../components/menu_lateral.php' ?>

    <!--conteudo-->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <h1>Produção</h1>

        <br>
        <br>
        <br>

        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Selecione a página desejada</label>
            <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Selecione a página</option>
                <option>Consolidade</option>
                <option>Procedimento</option>
                <option>Dias trbalhados</option>
                <option>Exportar BPA</option>
            </select>
            <div class="invalid-feedback">
                porfavor selecione a página desejada
            </div>
        </div>

        <br>
        <br>

        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Competência inicial</label>
            <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Competência inicial</option>
                <option>01/2023</option>
                <option>12/2022</option>
                <option>11/22</option>
                <option>10/22</option>

            </select>
            <div class="invalid-feedback">
                porfavor selecione uma competência inicial
            </div>
        </div>

        <br>
        <br>

        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Competência Final</label>
            <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Competência Final</option>
                <option>01/2023</option>
                <option>12/2022</option>
                <option>11/22</option>
                <option>10/22</option>

            </select>
            <div class="invalid-feedback">
                porfavor selecione uma competência Final
            </div>
        </div>

        <br>
        <br>

        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Selecione o filtro</label>
            <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Escolha o filtro desejado</option>
                <option>Por equipe</option>
                <option>Por CBO</option>
                <option>Por PRofissional</option>
            </select>
            <div class="invalid-feedback">
                porfavor selecione o filtro desejado
            </div>

            <br>
            <br>

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <input class="form-control form-control-dark w-100 rounded-0 border-3" type="text" placeholder="Digite o filtro desejado" aria-label="Excel">
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="26" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </div>

        </div>

        <br>
        <br>

    </main>



    <!--bootstrap-->
    <?php include_once '../components/bootstrap.php' ?>

</body>

</html>