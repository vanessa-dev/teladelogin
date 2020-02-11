<?php
  //conexao
  require_once "../php_action/connect_db.php";
  session_start();
  //verificando se os campos de login e senha foram preenchidos
if(isset($_POST['btn-entrar'])){
    $mensagens = array();
    $login = mysqli_escape_string($connect,$_POST['login']);
    $senha = mysqli_escape_string($connect,$_POST['senha']);
    if(empty($login) or empty($senha)){
        $mensagens [] = "Digite seu login e senha para logar no sistema";
    }
    //verificando se o usuario ta cadastrado no banco de dados
    else{
        $sql="SELECT login FROM usuario WHERE login ='$login'";
        $resultado = mysqli_query($connect,$sql);
        if(mysqli_num_rows($resultado)>0){
            $sqls = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'";
            $resultados = mysqli_query($connect,$sqls);
        if(mysqli_num_rows($resultados) == 1){
            $dados = mysqli_fetch_array($resultados);
            $_SESSION['logado']=true;
            $_SESSION['id_usuario']= $dados['id'];
            header('Location:home.php');
           
        }else{
            $mensagens[]= "Usuario ou Senha incorreto";
        }
          
        }
        else{
            $mensagens[]="Usuario inexistente";
        }
    }

}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Etapa 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/adminlte.min.css">
  <link rel="stylesheet" href="../css/colors.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box ">
  <div class="">
    <h1 class="text-center text-dark">Login</h1>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body   bg-royal">
        <h6 class="py-2 font-weight-bold">
        <?php
            if(!empty($mensagens)){
               foreach($mensagens as $mensagem){
                    print_r($mensagem);
                    }
                }                
        ?></h6>
      <form action="" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="login" placeholder="Login">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="senha" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="btn-entrar" class="btn btn-light btn-block">Entrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>
