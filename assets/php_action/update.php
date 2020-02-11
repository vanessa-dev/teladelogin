<?php
    
   
    require_once"connect_db.php";
    //obtendo os inputs do usuario
    $nome = mysqli_escape_string($connect,$_POST['nome']);
    $login = mysqli_escape_string($connect,$_POST['login']);
    
    //Fazendo o cadastro do usuario no banco de dados
    $update="UPDATE cliente SET nome='$nome', login='$login' WHERE id= '$id'";
   
    if( mysqli_query($connect,$update)){
     echo "<div class='alert-success'>Cadastrado editado com Sucesso!</div>";
                
    } else{
        echo "<div class='alert-danger'>Erro ao editar Cadastro</div>";
    } 
?>