<?php
	# Incluindo os arquivos necessários
	include_once dirname(__DIR__)."/models/config.php";
	include_once $project_path."/models/connect.php";
	include_once $project_path."/models/manager.php";

	# Validando a sessão
	session_start();
	if(!isset($_SESSION[md5("user_data")])){
		header("location: $project_index?error=access_denied");
		session_destroy();
	}

	# Recuperando os dados da sessão
	$user = $_SESSION[md5("user_data")];
	
	# Testando se é realmente um ADMIN 
	if($user['profile_page'] != "admin.php"){
		header("location: $project_index?error=access_denied");
	}
	
	
	if(isset($_SESSION['carritoCompra'])){
        if(isset($_POST)){
            $data[] = $_POST;
            $data[] = $_SESSION['carritoCompra'];
            
            #var_dump($data);
            # Gravando os dados no banco
            //insert("tb_compras", $data);
			$manager = new Manager;
			$manager->insert_purchase("tb_compras", $data);
            
            unset($_SESSION['carritoCompra']);
            # Redirecionamento
            header("location: $project_index/".$user['profile_page']."?option=thankyouCompra&success=insert_ok");
        }
    }

	

?>