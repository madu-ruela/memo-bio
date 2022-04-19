<?php
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'bd_memo_bio';

	$cn = new PDO('mysql:host='.$servidor.';dbname='.$banco, $usuario, $senha);
?>