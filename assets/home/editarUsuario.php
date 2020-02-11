<?php
   require_once"../includes/header.php";
?>
<?php
    //conexao 
    require_once"../php_action/connect_db.php";
   
    //select
        $id=mysqli_escape_string($connect,$_GET['id']);
        $sql= "SELECT * FROM usuario WHERE id = '$id'";
        $resultado=mysqli_query($connect,$sql);
        $dados=mysqli_fetch_array($resultado);
     
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
        <h3>Editar Cadastro</h3>
    </div>
    <form  action="../php_action/updateUsuario.php" method="POST" >
    <div class="container ">
        <div class="row">
            <div class="col-6 ">
               <label for="id" class="control-label bmd-label-placeholder"></label>
               <input type="text" class="form-control  " value="<?php echo $dados['id'];?>" name="id" placeholder="id">
            </div>
            <div class="col-6 ">
               <label for="nome" class="control-label bmd-label-placeholder"></label>
               <input type="text" class="form-control" value="<?php echo $dados['nome'];?> "name="nome" placeholder="Nome">
            </div>
            <div class="col-6 ">
               <label for="login" class="control-label bmd-label-placeholder"></label>
               <input type="text" class="form-control" name="login" value="<?php echo $dados['login'];?>"placeholder="Login">
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