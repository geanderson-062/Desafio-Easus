<!--incluindo o cabeçalho-->
<?php include_once '../components/head.php' ?>

<body>

    <!--menu lateral -->
    <?php include_once '../components/menu_lateral.php' ?>

    <!--conteudo-->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <h1>Capitação ponderada</h1>

        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Página desejada</label>
            <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="">selecione a página desejada</option>
                <option>Capitação ponderada</option>
                <option>Duplicidade</option>
                <option>Lista de cidadões</option>
                <option>Condição por equipe</option>
                <option>Condição por endeeço</option>
            </select>
            <div class="invalid-feedback">
                porfavor selecione a página desejada.
            </div>
        </div>

        <br>
        <br>
        <br>

        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">Tipologia IBGE <button type="button" class="btn btn-primary">Alterar tipologia
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg></button></th>
                        <th scope="col">Cidadãos com Critério</th>
                        <th scope="col">Meta de Cadastro por equipe <button type="button" class="btn btn-primary">Alterar Meta
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg></button></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>Rua qualquer</td>
                        <td>13345</td>
                        <td>13345</td>

                    </tr>

                </tbody>
            </table>

            <br>
            <br>
            <br>
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">INE</th>
                        <th scope="col">Equipe</th>
                        <th scope="col">Cadastro</th>
                        <th scope="col">% Cadastro</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>0000000000</td>
                        <td>ESF</td>
                        <td>00000</td>
                        <td>1234</td>
                    </tr>

                </tbody>
            </table>

            <br>
            <br>
            <br>
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">Total</th>
                        <th scope="col">12389</th>
                        <th scope="col">1234599</th>
                    </tr>
                </thead>
            </table>

    </main>



    <!--bootstrap-->
    <?php include_once '../components/bootstrap.php' ?>

</body>

</html>