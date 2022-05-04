<!-- Criação do Formulário -->
<form action="<?=$GLOBALS['project_index'];?>/controllers/clientes.php" method="POST">
    
	<input type="hidden" name="id_cliente" value="<?=$cliente_r['id_cliente'];?>">

	<div class="row">
		<div class="col-md-8">
		<label> Nome do Cliente: </label><br>
			<input type="text" name="cliente_name" placeholder="Digite el nombre" required class="form-control" value="<?=$cliente_r['cliente_name'];?>">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Data de Nascimento: </label><br>
			<input type="date" name="cliente_birth" placeholder="Digite el cumpleaños" required class="form-control" value="<?=$cliente_r['cliente_birth'];?>">
			<br><br>
		</div>
		
		
		<hr>
		<input type="hidden" name="action" value="edit">
		<input type="hidden" name="user_id" value="<?php echo $cpf;?>">
		<div class="col-md-12">
			<p class="text-right">
			<button class="btn btn-primary"> 
				<i class="fa fa-thumbs-up"></i>
				 Atualizar Cadastro 
			</button>
			</p>
		</div>	
	</div>
</form>