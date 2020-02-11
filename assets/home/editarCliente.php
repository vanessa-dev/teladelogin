<?php
   require_once"../includes/header.php";
?>
<?php
    //conexao 
    require_once"../php_action/connect_db.php";
   
    //select
        $id=mysqli_escape_string($connect,$_GET['id']);
        $sql= "SELECT * FROM cliente WHERE id = '$id'";
        $resultado=mysqli_query($connect,$sql);
        $dados=mysqli_fetch_array($resultado);
     
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 my-5 px-4">
<form action="../php_action/updateCliente.php" method="POST" >
        <div class="container ">
            <div class="row">
                <div class="col-6 ">
                   <label for="id" class="control-label bmd-label-placeholder"></label>
                   <input type="text" class="form-control sr-only " value="<?php echo $dados['id'];?>" name="id" placeholder="id">
                </div>
                <div class="col-6 ">
                   <label for="nome" class="control-label bmd-label-placeholder"></label>
                   <input type="text" class="form-control" name="nome"value="<?php echo $dados['nome'];?>" placeholder="Nome">
                </div>
                <div class="col-6 ">
                   <label for="email" class="control-label bmd-label-placeholder"></label>
                   <input type="email" class="form-control" name="email"value="<?php echo $dados['email'];?>" placeholder="Email">
                </div>
                <div class="col-6 ">
                   <label for="endereco" class="control-label bmd-label-placeholder"></label>
                   <input type="text" class="form-control" name="endereco" value="<?php echo $dados['endereco'];?>"placeholder="Endereco">
                </div>
                <div class="col-6 ">
                   <label for="nEndereco" class="control-label bmd-label-placeholder"></label>
                   <input type="text" class="form-control" name="nEndereco" value="<?php echo $dados['numero'];?>" placeholder="Numero">
                </div>
                <div class="col-6 ">
                   <label for="bairro" class="control-label bmd-label-placeholder"></label>
                   <input type="text" class="form-control" name="bairro" value="<?php echo $dados['bairro'];?>" placeholder="Bairro">
                </div>
                <div class="col-6 ">
                   <label for="cidade" class="control-label bmd-label-placeholder"></label>
                   <input type="text" class="form-control" name="cidade" value="<?php echo $dados['cidade'];?>" placeholder="Cidade">
                </div>
                <div class="col-6 ">
                   <label for="cep" class="control-label bmd-label-placeholder"></label>
                   <input type="text" class="form-control" name="cep" value="<?php echo $dados['cep'];?>" placeholder="Cep">
                </div>
                <div class="col-6 ">
                   <label for="uf" class="control-label bmd-label-placeholder"></label>
                   <input type="text" class="form-control" value="<?php echo $dados['uf'];?>" name="uf" placeholder="Estado">
                </div>
                <div class="col-6 ">
                    <label for="cpf" class="control-label bmd-label-placeholder"></label>
                   <input type="text" class="form-control" name="cpf" value="<?php echo $dados['cpf'];?>"placeholder="Cpf">
                </div>
                <div class="col-6 ">
                   <label for="telefone" class="control-label bmd-label-placeholder"></label>
                   <input type="text" class="form-control" value="<?php echo $dados['telefone'];?>" name="telefone"placeholder="Telefone">
                </div>
                <div class="col-6 ">
                   <label for="site" class="control-label bmd-label-placeholder"></label>
                   <input type="url" class="form-control" value="<?php echo $dados['site'];?>" placeholder="Site">
                </div>
                <div class="col-2 mt-3">
                   <button class="btn btn-info form-control" name="btn_editar">Editar</button>
                </div>
            </div>
        </div>
    </form>
</main>
</body>
</html>