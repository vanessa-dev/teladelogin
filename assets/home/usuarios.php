<?php 
    require_once"../includes/header.php";
    require_once"../php_action/connect_db.php";
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 "><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mt-1 ">
      <h3>Usuários</h3>
      <div class=" d-flex  align-items-center  justify-content-end">
    <a class="text-dark  font-weight-bold" href="cadastrarUsuario.php">Cadastrar +</a>
  </div>
  </div>
  
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nome</th>
          <th>login</th>
          
          <th></th>
          </tr>
      </thead>
      <tbody>
        <?php
          //buscando clientes no banco de dados
          $sql="SELECT * FROM usuario";
          $resultado=mysqli_query($connect,$sql);
          while($dados=mysqli_fetch_array($resultado)){          
        ?> 
        <tr>
          <!--Exibindo os dados na tela-->
          <td><?php echo $dados['id'];?></td>
          <td><?php echo $dados['nome'];?></td>
          <td><?php echo $dados['login'];?></td>
          <td class="mx-0">
            <a class=" btn btn-info text-light m-0" href="editarUsuario.php?id=<?php echo $dados['id']; ?>">Editar</a>
            <a class=" btn btn-danger text-light m-0" href="../php_action/excluirUsuario.php?id=<?php echo $dados['id']; ?>">Excluir</a>
          </td>      
        </tr>
        <?php } ?>         
      </tbody>
    </table>
 </div>        
</main> 

