<?php

	include ('conexao.php');

	$validaEmail = $_POST['Email'];
	$validaSenha = $_POST['Senha'];

	session_start();
	
	$consulta = $cn->query("select * from Aluno where Email = '$validaEmail' and Senha = '$validaSenha'");

	if($consulta->rowCount() == 1){
		$exibealuno = $consulta->fetch(PDO::FETCH_ASSOC);

		if ($exibeAluno['Adm'] == 0) {
			$_SESSION['ID'] = $exibeAluno['idAluno'];
			$_SESSION['status'] = 0;
			header('location:pageAluno.php');
		}
		else{
			$_SESSION['ID'] = $exibealuno['idAluno'];
			$_SESSION['status'] = 1;
			header('location:pagADM.php');
		}
	}
	else{
	}
		echo "<script>alert('Email e/ou senha invalidos!');window.location='pagLogin.php'</script>";

?>