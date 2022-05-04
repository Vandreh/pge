<?php  
	
	# Incluindo os arquivos necessários
	include_once $GLOBALS['project_path']."/models/connect.php";
	include_once $GLOBALS['project_path']."/models/manager.php";

	function validate_options(){
	    
	    //registro_financiero.php
	    if(isset($_GET['financiero'])){
			$ano = 0;
			if($_GET['financiero'] == "ano"){$ano = date("Y");}else{$ano = $_GET['financiero'];}

			$Total_Compra = 0;
			$Ano_Compra = 0;
			$Enero_Compra = 0;
			$Febrero_Compra = 0;
			$Marzo_Compra = 0;
			$Abril_Compra = 0;
			$Mayo_Compra = 0;
			$Junio_Compra = 0;
			$Julio_Compra = 0;
			$Agosto_Compra = 0;
			$Septiembre_Compra = 0;
			$Octubre_Compra = 0;
			$Noviembre_Compra = 0;
			$Diciembre_Compra = 0;

			$manager = new Manager;
			$compras = $manager->select_common("tb_compras", null, null, null);
			$manager = new Manager;
			$comprasAno = $manager->select_common("tb_compras", null, null, " WHERE CAST(tb_compras.fecha_compra AS VARCHAR) LIKE '$ano-%-%'");
			$manager = new Manager;
			$compras1 = $manager->select_common("tb_compras", null, null, " WHERE CAST(tb_compras.fecha_compra AS VARCHAR) LIKE '$ano-01-%'");
			$manager = new Manager;
			$compras2 = $manager->select_common("tb_compras", null, null, " WHERE CAST(tb_compras.fecha_compra AS VARCHAR) LIKE '$ano-02-%'");
			$manager = new Manager;
			$compras3 = $manager->select_common("tb_compras", null, null, " WHERE CAST(tb_compras.fecha_compra AS VARCHAR) LIKE '$ano-03-%'");
			$manager = new Manager;
			$compras4 = $manager->select_common("tb_compras", null, null, " WHERE CAST(tb_compras.fecha_compra AS VARCHAR) LIKE '$ano-04-%'");
			$manager = new Manager;
			$compras5 = $manager->select_common("tb_compras", null, null, " WHERE CAST(tb_compras.fecha_compra AS VARCHAR) LIKE '$ano-05-%'");
			$manager = new Manager;
			$compras6 = $manager->select_common("tb_compras", null, null, " WHERE CAST(tb_compras.fecha_compra AS VARCHAR) LIKE '$ano-06-%'");
			$manager = new Manager;
			$compras7 = $manager->select_common("tb_compras", null, null, " WHERE CAST(tb_compras.fecha_compra AS VARCHAR) LIKE '$ano-07-%'");
			$manager = new Manager;
			$compras8 = $manager->select_common("tb_compras", null, null, " WHERE CAST(tb_compras.fecha_compra AS VARCHAR) LIKE '$ano-08-%'");
			$manager = new Manager;
			$compras9 = $manager->select_common("tb_compras", null, null, " WHERE CAST(tb_compras.fecha_compra AS VARCHAR) LIKE '$ano-09-%'");
			$manager = new Manager;
			$compras10 = $manager->select_common("tb_compras", null, null, " WHERE CAST(tb_compras.fecha_compra AS VARCHAR) LIKE '$ano-10-%'");
			$manager = new Manager;
			$compras11 = $manager->select_common("tb_compras", null, null, " WHERE CAST(tb_compras.fecha_compra AS VARCHAR) LIKE '$ano-11-%'");
			$manager = new Manager;
			$compras12 = $manager->select_common("tb_compras", null, null, " WHERE CAST(tb_compras.fecha_compra AS VARCHAR) LIKE '$ano-12-%'");

			if($compras != NULL){
				foreach ($compras as $key => $value){
					$Total_Compra = $Total_Compra + $value['precio_compra'];	
				}
			}

			if($comprasAno != NULL){
				foreach ($comprasAno as $key => $value){
					$Ano_Compra = $Ano_Compra + $value['precio_compra'];	
				}
			}

			if($compras1 != NULL){
				foreach ($compras1 as $key => $value){
					$Enero_Compra = $Enero_Compra + $value['precio_compra'];	
				}
			}

			if($compras2 != NULL){
				foreach ($compras2 as $key => $value){
					$Febrero_Compra = $Febrero_Compra + $value['precio_compra'];	
				}
			}

			if($compras3 != NULL){
				foreach ($compras3 as $key => $value){
					$Marzo_Compra = $Marzo_Compra + $value['precio_compra'];	
				}
			}

			if($compras4 != NULL){
				foreach ($compras4 as $key => $value){
					$Abril_Compra = $Abril_Compra + $value['precio_compra'];	
				}
			}

			if($compras5 != NULL){
				foreach ($compras5 as $key => $value){
					$Mayo_Compra = $Mayo_Compra + $value['precio_compra'];	
				}
			}

			if($compras6 != NULL){
				foreach ($compras6 as $key => $value){
					$Junio_Compra = $Junio_Compra + $value['precio_compra'];	
				}
			}

			if($compras7 != NULL){
				foreach ($compras7 as $key => $value){
					$Julio_Compra = $Julio_Compra + $value['precio_compra'];	
				}
			}

			if($compras8 != NULL){
				foreach ($compras8 as $key => $value){
					$Agosto_Compra = $Agosto_Compra + $value['precio_compra'];	
				}
			}

			if($compras9 != NULL){
				foreach ($compras9 as $key => $value){
					$Septiembre_Compra = $Septiembre_Compra + $value['precio_compra'];	
				}
			}

			if($compras10 != NULL){
				foreach ($compras10 as $key => $value){
					$Octubre_Compra = $Octubre_Compra + $value['precio_compra'];	
				}
			}

			if($compras11 != NULL){
				foreach ($compras11 as $key => $value){
					$Noviembre_Compra = $Noviembre_Compra + $value['precio_compra'];	
				}
			}

			if($compras12 != NULL){
				foreach ($compras12 as $key => $value){
					$Diciembre_Compra = $Diciembre_Compra + $value['precio_compra'];	
				}
			}

			include_once $GLOBALS['project_path']."/views/forms/registro_financiero.php";
        }
        
        #carrito
        if(isset($_GET['productoCompra'])){
			$where = "";
			if($_REQUEST['productoCompra'] != false){$nombre = $_REQUEST['productoCompra'];}else{$nombre = "";}
			if($nombre != false){$where = " WHERE (product_name LIKE '%".$nombre."%' OR product_description LIKE '%".$nombre."%')";}
			
			$manager = new Manager;
			$resultado = $manager->select_common("tb_productos",null,null,$where);

			include_once $GLOBALS['project_path']."/views/carrito/carrito.php";
        }

		if(!isset($_GET['option'])){
			return false;
		}

		switch($_GET['option']){
		    
		    case "productos-carrito":
				include_once $GLOBALS['project_path']."/views/carrito/carrito/cart.php";
			break;
			
			case "productos-compra":
				include_once $GLOBALS['project_path']."/views/carrito/carrito/cart.php";
			break;
			
			case "checkout":
				$manager = new Manager;
				$ejecutar = $manager->select_common("tb_clientes",null,null,null);
				
				include_once $GLOBALS['project_path']."/views/carrito/carrito/checkout.php";
			break;
			
			
			case "thankyouCompra":
				include_once $GLOBALS['project_path']."/views/carrito/carrito/thankyou.php";
			break;

		    case "add_nota_fiscal":
				include_once $GLOBALS['project_path']."/views/forms/add_nota_fiscal.php";
			break;

			case "add_client":
				include_once $GLOBALS['project_path']."/views/forms/add_cliente.php";
				
				# Busca	
				$manager = new Manager;
				$table_content = $manager->select_common("tb_clientes",null,null,null);
				
				# Titulos
				#$table_titles['id_cliente'] = "ID";
				$table_titles['cliente_name'] = "NOME CLIENTE";
				$table_titles['cliente_birth'] = "DATA DE NASCIMENTO";
				$table_titles['cliente_created_in'] = "DATA DE REGISTRO";

				# Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_user.php";
				$update_destiny = "?option=update_client";

				# Filtro
				$filter = "id_cliente";
				$table_color = "#FF69B4";
				$table_icon = "plus";
				$table_header = " Lista de Clientes <hr>";
				# Incluindo a 'THE TABLE'
				include_once $GLOBALS['project_path']."/views/list_common_client.php";
			break;

			case "manager_clients":
				# Busca	
				$manager = new Manager;
				$table_content = $manager->select_common("tb_clientes",null,null,null);
				
				# Titulos
				#$table_titles['id_cliente'] = "ID";
				$table_titles['cliente_name'] = "NOME CLIENTE";
				$table_titles['cliente_birth'] = "NASCIMENTO";
				$table_titles['cliente_created_in'] = "DATA DE REGISTRO";

				# Liberação das Ações
				$delete = true;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "/controllers/clientes.php";
				$update_destiny = "?option=update_client";

				# Filtro
				$filter = "id_cliente";
				$table_color = "#FF69B4";
				$table_icon = "plus";
				$table_header = " Lista de Clientes <hr>";
				# Incluindo a 'THE TABLE'
				include_once $GLOBALS['project_path']."/views/list_common_client.php";
			break;

			case "premiar_cliente":
				# Busca	
				$manager = new Manager;
				$clientes = $manager->select_common("tb_clientes",null,null,null);
				$manager = new Manager;
				$compras = $manager->select_common("tb_compras",null,null,null);

				if($compras == false){
					echo '<button class="btn btn-warning">';
					echo ' <i class="fa fa-thumbs-down"></i>';
					echo ' No existen resultados';
			   		echo '</button><br><br>';
					#se existir conteúdo, ele cria a tabela
				}else{
				
					//Criando o array de clientes por ID:
					$count = [];
					$name = [];
					$total = [];
					foreach ($clientes as $key => $value) {
						foreach ($value as $k => $v) {
							if($k == "id_cliente") {
								$count["cliente_id"] = $v;
								$name['cliente_name'] = $value['cliente_name'];
								$total[$key]['countPrices'] = 0;
								$total[$key][$k] = $count["cliente_id"];
								$total[$key]["cliente_name"] = $name["cliente_name"];
								$total[$key]['countPurchases'] = 0;
							}
						}	
					}

					//Inserindo a soma das compras e dos preços das compras:
					foreach ($compras as $key => $value) {
						$id = $value['cliente_id'];
						$precos = $value['precio_compra'];
						for ($i=0; $i < count($total); $i++) { 
							if($total[$i]['id_cliente'] == $id) {
								++$total[$i]['countPurchases'];
								$total[$i]['countPrices'] += $precos;		
							}
						}
					}
					
					//print_r($total);
					//Ordenando array pela soma de gastos dos clientes
					rsort($total);

					# Titulos
					#$table_titles['id_cliente'] = "ID";
					$table_titles['cliente_name'] = "NOME CLIENTE";
					$table_titles['countPurchases'] = "NUMERO DE COMPRAS";
					$table_titles['countPrices'] = "TOTAL R$";

					# Filtro
					$table_color = "#FF69B4";
					$table_icon = "plus";
					$table_header = " Lista das Compras <hr>";
					# Incluindo a 'THE TABLE'
					include_once $GLOBALS['project_path']."/views/list_common_premiar.php";
				}
			break;

			//Caso seja nescessário manipular usuarios, descomentar
			/* case "add_user":
				include_once $GLOBALS['project_path']."/views/forms/add_user.php";
			break;
			case "manager_users":
				# Busca	
				$manager = new Manager;
				$table_content = $manager->select_common("tb_users",null,$cpf1,null);
				
				# Titulos
				$table_titles['id_user'] = "ID";	
				$table_titles['user_name'] = "NOME";	
				$table_titles['user_phone'] = "TELEFONE";	
				$table_titles['user_email'] = "EMAIL";	

				# Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_user.php";
				$update_destiny = "?option=update_user";

				# Filtro
				$filter = "id_user";
				$table_color = "#FF69B4";
				$table_icon = "plus";
				$table_header = " Lista de Usuários <hr>";
				# Incluindo a 'THE TABLE'
				include_once $GLOBALS['project_path']."/views/list_common.php";
			break; */
			
			case "add_productos":
				include_once $GLOBALS['project_path']."/views/forms/add_productos.php";
				
				# Busca	
				$manager = new Manager;
				$table_content = $manager->select_common("tb_productos",null,null,null);
				
				# Titulos
				#$table_titles['id_producto'] = "ID";
				$table_titles['product_name'] = "PRODUCTO";	
				$table_titles['product_description'] = "DESCRIÇÃO DO PRODUCTO";	
				$table_titles['product_price'] = "PREÇO";

				# Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/productos.php";
				$update_destiny = "?option=update_producto";

				# Filtro
				$filter = "id_producto";
				$table_color = "#FF69B4";
				$table_icon = "plus";
				$table_header = " Lista de Productos <hr>";
				# Incluindo a 'THE TABLE'
				include_once $GLOBALS['project_path']."/views/list_common_product.php";
				
			break;
			case "manager_productos":
				# Busca	
				$manager = new Manager;
				$table_content = $manager->select_common("tb_productos",null,null,null);
				
				# Titulos
				#$table_titles['id_producto'] = "ID";
				$table_titles['product_name'] = "PRODUCTO";	
				$table_titles['product_description'] = "DESCRIÇÃO DO PRODUCTO";	
				$table_titles['product_price'] = "PREÇO";

				# Liberação das Ações
				$delete = true;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "/controllers/productos.php";
				$update_destiny = "?option=update_producto";

				# Filtro
				$filter = "id_producto";
				$table_color = "#FF69B4";
				$table_icon = "plus";
				$table_header = " Lista de Productos <hr>";
				# Incluindo a 'THE TABLE'
				include_once $GLOBALS['project_path']."/views/list_common_product.php";
			break;
			
			case "update_producto":
				$user = $_SESSION[md5("user_data")];
				$cpf = $user['id_user'];
				
				$filter['id_producto'] = base64_decode($_GET['filter']);
				$manager = new Manager;
				$producto_r = $manager->select_common("tb_productos",null,$filter, null);

				$producto_r = $producto_r[0];

				include_once $GLOBALS['project_path']."/views/forms/update_producto.php";
			break;
			
			case "add_compras":
				$user = $_SESSION[md5("user_data")];
				$cpf = $user['id_user'];

    			$nombre = "";

				$manager = new Manager;
				$resultado = $manager->select_common("tb_productos",null,null,null);
				include_once $GLOBALS['project_path']."/views/carrito/carrito.php";
			break;

			case "manager_compras":
				# Busca	
				$manager = new Manager;
				$table_content = $manager->select_common("tb_compras",null,null,null);
				
				# Titulos
				$table_titles['cliente_name'] = "NOME CLIENTE";	
				$table_titles['producto_compra'] = "PRODUTO COMPRADO";
				$table_titles['fecha_compra'] = "DATA COMPRA";
				$table_titles['precio_compra'] = "PREÇO COMPRA";
				# Liberação das Ações
				$delete = true;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "/controllers/compras.php";
				$update_destiny = "?option=update_compra";

				# Filtro
				$filter = "id_compra";
				$table_color = "#FF69B4";
				$table_icon = "plus";
				$table_header = " Lista de Compras <hr>";
				# Incluindo a 'THE TABLE'
				include_once $GLOBALS['project_path']."/views/list_common_compra.php";
			break;

			/* case "update_user":

				$filter['id_user'] = base64_decode($_GET['filter']);
				$user_r = select("tb_users",null,$filter, null);

				$user_r = $user_r[0];

				$profile_u = select("tb_profiles",array("profile_name"), array("id_profile"=>$user_r['profile_id']),null);

				include_once $GLOBALS['project_path']."/views/forms/update_user.php";

			break; */
			
			case "update_client":

				$user = $_SESSION[md5("user_data")];
				$cpf = $user['id_user'];

				$filter['id_cliente'] = base64_decode($_GET['filter']);
				$manager = new Manager;
				$cliente_r = $manager->select_common("tb_clientes",null,$filter, null);

				$cliente_r = $cliente_r[0];

				//$profile_u = select("tb_profiles",array("profile_name"), array("id_profile"=>$user_r['profile_id']),null);

				include_once $GLOBALS['project_path']."/views/forms/update_client.php";
				
            	# Incluindo os arquivos necessarios
            	
                # Busca	
            	$manager = new Manager;
				$table_content = $manager->select_common("tb_compras",null,null,null);
            	if($table_content){
					foreach ($table_content as $key => $value) {
						$precio_compra[] = $value['precio_compra'];
					}
					$compra = array_sum($precio_compra);
					
					echo '<div class="row">';
					echo '<div class="col-md-3 form-control">';
					echo '<h5>Total de Compras: $'.$compra.'</h5>';
					echo '</div>';
					echo '</div>';
					
					
					# Titulos
					#$table_titles['id_compra'] = "ID COMPRA";
					$table_titles['cliente_name'] = "CLIENTE";
					$table_titles['producto_compra'] = "PRODUTO";
					$table_titles['fecha_compra'] = "DATA COMPRA";
					$table_titles['precio_compra'] = "PREÇO COMPRA";
					
					#PERMITIR EDIÇÃO DE COMPRAS RELACIONADAS AO CLIENTE
					# Liberação das Ações
					$delete = true;
					$update = true;
					$print  = false;
				}
            	# Caminho das Ações
            	$delete_destiny = "/controllers/compras.php";
            	$update_destiny = "?option=update_compra";
            
            	# Filtro
            	$filter = "id_compra";
            	$table_color = "#FF69B4";
            	$table_icon = "plus";
            	$table_header = " PRODUCTOS COMPRADOS: <hr>";
            	# Incluindo a 'THE TABLE'
            	include_once $GLOBALS['project_path']."/views/list_common_compra.php";
			break;
			
			case "update_compra":

				$filter['id_compra'] = base64_decode($_GET['filter']);
				$manager = new Manager;
				$compra_r = $manager->select_common("tb_compras",null,$filter, null);
				$compra_r = $compra_r[0];

				include_once $GLOBALS['project_path']."/views/forms/update_compra.php";
			break;

			default:
				echo "<h2> ERRO 404: NOT FOUND !</h2>";
			break;
		}
	}
?>
