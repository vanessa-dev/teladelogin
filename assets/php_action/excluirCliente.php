<?php
    require_once"../php_action/connect_db.php";
?>
<?php
    
	$id = mysqli_escape_string($connect, $_GET['id']);
	$sql = "DELETE FROM cliente WHERE id = '$id'";
	if(mysqli_query($connect, $sql)){
        echo "<div class='alert-success'>deletado com Sucesso!</div>";
		header('Location: cliente.php'); 
		
    }	
	else{
        echo "<div class='alert-success'>Erro ao deletar!</div>";
		header('Location: cliente.php');
    }
		

?>