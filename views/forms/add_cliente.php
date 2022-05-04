<!-- Criação do Formulário -->
<?php 
    $user = $_SESSION[md5("user_data")];
	$cpf = $user['id_user'];
?>

<form action="<?=$GLOBALS['project_index'];?>/controllers/clientes.php" method="POST">
    <br>
	<div class="row">
		<div class="col-md-8">
		<label> Nome Cliente: </label><br>
			<input type="text" name="cliente_name" placeholder="Digite o nome do cliente" required class="form-control">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Nascimiento: </label><br>
			<input type="date" name="cliente_birth" placeholder="Digite nacimiento" required class="form-control">
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