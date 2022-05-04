<?php  

	# Incluindo os arquivos necessários
	include_once dirname(__DIR__)."/models/config.php";
	include_once $project_path."/models/connect.php";
	include_once $project_path."/models/manager.php";

	# Validando a sessão
	session_start();

	if(!isset($_SESSION[md5("user_data")])){
		header("location: $project_index?error=access_denied");
	}

	# Recuperando os dados da sessão
	$user = $_SESSION[md5("user_data")];
	
	# Testando se é realmente um ADMIN 
	if($user['profile_page'] != "admin.php"){
		header("location: $project_index?error=access_denied");
	}

	//Se for delete
	if(isset($_POST['filter'])) {

		$delete=$_POST['filter'];
		$_POST['action'] = "delete";
	}

	switch($_POST['action']){

		case 'add':
			$manager = new Manager;
			unset($_POST['action']);
			$manager->insert_common("tb_productos", $_POST, null);
		break;

		case 'edit':
			$manager = new Manager;
			unset($_POST['action']);
			$manager->update_common("tb_productos", $_POST, ['id_producto'=>$_POST['id_producto']],null);
		break;

		case 'delete':
			$manager = new Manager;
			unset($_POST['action']);
			$manager->delete_common("tb_productos",['id_producto'=>$delete],null);
			header("location: $project_index/".$user['profile_page']."?option=manager_productos&success=delete_ok");
		break;
	}

		# Redirecionamento
		header("location: $project_index/".$user['profile_page']."?option=manager_productos&success=insert_ok");
?>