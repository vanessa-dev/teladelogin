<?php
    
   
    require_once"connect_db.php";
    //obtendo os inputs do usuario
    $nome = mysqli_escape_string($connect,$_POST['nome']);
    $endereco = mysqli_escape_string($connect,$_POST['endereco']);
    $email = mysqli_escape_string($connect,$_POST['email']);
    $numero= mysqli_escape_string($connect,$_POST['nEndereco']);
    $bairro = mysqli_escape_string($connect,$_POST['bairro']);
    $cidade= mysqli_escape_string($connect,$_POST['cidade']);
    $cep = mysqli_escape_string($connect,$_POST['cep']);
    $uf= mysqli_escape_string($connect,$_POST['uf']);
    $cpf = mysqli_escape_string($connect,$_POST['cpf']);
    $telefone= mysqli_escape_string($connect,$_POST['telefone']);
    //Fazendo o cadastro do usuario no banco de dados
    $update="UPDATE cliente SET nome='$nome', endereco='$endereco', email='$email', numero='$numero', bairro='$bairro', cidade='$cidade', cep='$cep', uf='$uf',cpf='$cpf',telefone='$telefone' WHERE id= '$id'";
   
    if( mysqli_query($connect,$update)){
     echo "<div class='alert-success'>Cadastrado editado com Sucesso!</div>";
                
    } else{
        echo "<div class='alert-danger'>Erro ao editar Cadastro</div>";
    } 
?>