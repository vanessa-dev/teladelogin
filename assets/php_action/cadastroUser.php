<?php
    require_once"connect_db.php";
    //obtendo os inputs do usuario
    $nome = mysqli_escape_string($connect,$_POST['nome']);
    $login =  mysqli_escape_string($connect,$_POST['login']);
    $login =  mysqli_escape_string($connect,$_POST['senha']);
    //Fazendo o cadastro do usuario no banco de dados
    $insert="INSERT INTO cliente (nome,login,senha) VALUES ('$nome','$login','$senha')";
   
    if( mysqli_query($connect,$insert)){
        echo "<div class='alert-success'>Cadastrado com Sucesso!</div>";
                
    } else{
        echo "<div class='alert-danger'>Erro ao Cadastrar</div>";
    } 
?>