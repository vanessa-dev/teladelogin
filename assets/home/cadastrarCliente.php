<?php
    require_once"../includes/header.php";
    
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 my-5 px-4">
    <form action="../php_action/cadastroCliente.php">
        <div class="container ">
            <div class="row">
                <div class="col-6 ">
                   <label for="id" class="control-label bmd-label-placeholder"></label>
                   <input type="text" class="form-control  " name="id" placeholder="id">
                </div>
                <div class="col-6 ">
                   <label for="nome" class="control-label bmd-label-placeholder"></label>
                   <input type="text" class="form-control" name="nome" placeholder="Nome">
                </div>
                <div class="col-6 ">
                   <label for="email" class="control-label bmd-label-placeholder"></label>
                   <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="col-6 ">
                   <label for="endereco" class="control-label bmd-label-placeholder"></label>
                   <input type="text" class="form-control" name="endereco" placeholder="Endereco">
                </div>
                <div class="col-6 ">
                   <label for="nEndereco" class="control-label bmd-label-placeholder"></label>
                   <input type="text" class="form-control" name="nEndereco" placeholder="Numero">
                </div>
                <div class="col-6 ">
                   <label for="bairro" class="control-label bmd-label-placeholder"></label>
                   <input type="text" class="form-control" name="Bairro" placeholder="Bairro">
                </div>
                <div class="col-6 ">
                   <label for="cidade" class="control-label bmd-label-placeholder"></label>
                   <input type="text" class="form-control" name="cidade" placeholder="Cidade">
                </div>
                <div class="col-6 ">
                   <label for="cep" class="control-label bmd-label-placeholder"></label>
                   <input type="text" class="form-control" name="cep" placeholder="Cep">
                </div>
                <div class="col-6 ">
                   <label for="uf" class="control-label bmd-label-placeholder"></label>
                   <input type="text" class="form-control" name="uf" placeholder="Estado">
                </div>
                <div class="col-6 ">
                    <label for="cpf" class="control-label bmd-label-placeholder"></label>
                   <input type="text" class="form-control" name="cpf" placeholder="Cpf">
                </div>
                <div class="col-6 ">
                   <label for="telefone" class="control-label bmd-label-placeholder"></label>
                   <input type="text" class="form-control" maxlength="200" name="telefone"placeholder="Telefone">
                </div>
                <div class="col-6 ">
                   <label for="site" class="control-label bmd-label-placeholder"></label>
                   <input type="url" class="form-control" placeholder="Site">
                </div>
                <div class="col-2 mt-3">
                   <button class="btn btn-info form-control" name="btn_cadastro">Cadastrar</button>
                </div>
            </div>
        </div>
    </form>
</div>
                 
</div>
<?php 
    require_once"../includes/footer.php";
?>
