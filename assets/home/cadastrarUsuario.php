<?php
?><?php
require_once"../includes/header.php";

?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 my-5 px-4">
<form  action="../php_action/cadastroUser.php">
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
               <label for="login" class="control-label bmd-label-placeholder"></label>
               <input type="text" class="form-control" name="login"placeholder="login">
            </div>
            <div class="col-6 ">
               <label for="senha" class="control-label bmd-label-placeholder"></label>
               <input type="text" class="form-control" name="senha" placeholder="senha">
            </div>
            
           
            <div class="col-2 mt-3">
               <button class="btn btn-info form-control" name="btn_cadastro">Cadastrar</button>
            </div>
        </div>
    </div>
</form>
</div>
             
</div>