<?php 
  require_once "../php_action/connect_db.php";
  //sessao
  session_start();
  //se nao existir uma sessao do usuario, redirecionar para pagina de login 
  if(!isset($_SESSION['logado'])){
    header('Location: index.php');
  }
  //selecionando todos os registros de cliente no bd
  $sql="SELECT * FROM cliente";
  $resultado=mysqli_query($connect,$sql);
  //contando total de registros
  $clientes=mysqli_num_rows($resultado);
  //selecionando todos os usuarios no bd 
  $sql="SELECT * FROM usuario";
  $resultados=mysqli_query($connect,$sql);
  //contando total de registros
  $usuarios=mysqli_num_rows($resultados);
?>
<?php
  require_once "../includes/header.php";
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container d-flex justify-content-center">
    <div class="row   ">
      <div class="col">
        <div class="card text-white bg-royal mr-5 " style="max-width: 26rem;">
          <div class="card-header lead"><b>Clientes </b></div>
          <div class="card-body">
            <h4 class="card-title">Total de Clientes Cadastrados no Sistema = <?php echo" $clientes;"?></h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div> 
      </div>
      
      <div class="col ">
        <div class="card text-white bg-royal ml-5 " style="max-width: 26rem;">
       <div class="card-header lead"><b>Usuários</b></div>
          <div class="card-body">
            <h4 class="card-title">Total de Usuários Cadastrados no Sistema = <?php echo" $usuarios;"?></h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div> 
      </div>
      
      
    </div>
  </div>             
</div>
                 
</div>
<?php
    require_once"../includes/footer.php";
?>