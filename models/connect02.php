<?php
	# Erros
	ini_set("display_errors", 1);

	# Váriaveis de controle
		$host = "ec2-44-196-223-128.compute-1.amazonaws.com";
		$database = "d3ggcm26rhrf20";
		$user = "vqcrxgjddyoair";
		$password = "91953cacf5ce8fd79a82d83cfcd880d72016a0bd69bc113b1d51052121617553";

	try {
		# Função de conexão
		$conn = pg_connect("host=$host port=5432 dbname=$database user=$user password=$password") or die("Não foi possível conectar ao servidor PostGreSQL");
	} catch (PDOException $e){
		echo $e->getMessage();
	}	
?>