<!-- Criação do Formulário -->
<?php 
    $user = $_SESSION[md5("user_data")];
	$cpf = $user['id_user'];
?>

<form action="<?=$GLOBALS['project_index'];?>/controllers/productos.php" method="POST">
    <br><br>
	<div class="row">
	    
		<div class="col-md-8">
		<label> Nome do Produto: </label><br>
			<input type="text" name="product_name" placeholder="Digite o nome do produto" required class="form-control">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Preço: </label><br>
			<input type="text" name="product_price" placeholder="Digite o preço" required class="form-control">
			<br><br>
		</div>
		<div class="col-md-9">
			<label> Descrição: </label><br>
			<input type="text" name="product_description" placeholder="Descrição do produto" class="form-control">
			<br><br>
		</div>
		
		<input type="hidden" name="action" value="add">
		<input type="hidden" name="user_id" value="<?php echo $cpf;?>">
		
		<hr>			
		<div class="col-md-12">
			<p class="text-right">
			<button class="btn btn-primary"> 
				<i class="fa fa-thumbs-up"></i>
				 Finalizar Cadastro 
			</button>
			</p>
		</div>	
	</div>
</form>