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
    $insert="INSERT INTO cliente (nome,endereco,email,numero,bairro,cidade,cep,uf,cpf,telefone) VALUES ('$nome','$endereco','$email','$numero','$bairro','$cidade','$cep','$uf','$cpf','$telefone')";
   
    if( mysqli_query($connect,$insert)){
        echo "<div class='alert-success'>Cadastrado com Sucesso!</div>";
                
    } else{
        echo "<div class='alert-danger'>Erro ao Cadastrar</div>";
    } 
?>