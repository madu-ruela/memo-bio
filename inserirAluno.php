<?php 
	
	include ('conexao.php');

	$Nome = $_POST['Nome'];
	$Sobrenome = $_POST['Sobrenome'];
    $CPF = $_POST['CPF'];
	$RG = $_POST['RG']
	$Nascimento = $_POST['Nascimento'];
	$Telefone = $_POST['Telefone'];
	$Email = $_POST['Email'];
	$Senha = $_POST['Senha'];
	$RepetirSenha = $_POST['Repetir senha'];
	$Endereço = $_POST['Endereço'];
	$Número = $_POST['Número'];
	$Complemento = $_POST['Complemento'];
	$Bairro = $_POST['Bairro'];
	$CEP = $_POST['CEP'];
	$Cidade = $_POST['Cidade'];
	$Estado = $_POST['Estado'];

	//echo $nome."<br>";
	//echo $sobrenome."<br>";
	//echo $telefone."<br>";

	$consulta = $cn->query("select Email from Aluno where Email = '$Email'");
	$exibealuno = $consulta->fetch(PDO::FETCH_ASSOC);

	if ($consulta->rowCount() == 1) {
		//echo "Aluno já cadastrado";
		header('location: pagLogin.php');
	} else{
		//echo "Aluno NÃO cadastrado";
		if ($Email == '303@teste.com' && $Senha == '123') {
			$incluir = $cn->query("insert into Aluno(Nome, Sobrenome, CPF, RG, Nascimento, Telefone, Email, Senha, RepetirSenha, Endereço, Número, Complemento, Bairro, CEP, Cidade, Estado)
			values('$Nome', '$Sobrenome', '$CPF', '$RG', '$Nascimento', '$Telefone', '$Email', '$Senha', '$RepetirSenha', '$Endereço', '$Número', '$Complemento', '$Bairro', '$CEP', '$cidade', '$Estado', 1)");
		}
		else{
			$incluir = $cn->query("insert into Aluno(Nome, Sobrenome, Email, CPF, Telefone, Senha, Adm)
			values('$Nome', '$Sobrenome', '$CPF', '$RG', '$Nascimento', '$Telefone', '$Email', '$Senha', '$RepetirSenha', '$Endereço', '$Número', '$Complemento', '$Bairro', '$CEP', '$cidade', '$Estado', 0)");
	}

    header('location: pagLogin.php');
	}

?>