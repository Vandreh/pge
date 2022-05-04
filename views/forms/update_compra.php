<!-- Criação do Formulário -->
<form action="<?=$GLOBALS['project_index'];?>/controllers/compras.php" method="POST">
    
	<input type="hidden" name="id_compra" value="<?=$compra_r['id_compra'];?>">

	<div class="row">
		<div class="col-md-8">
		<label> Nome do Cliente: </label><br>
			<input type="text" name="cliente_name" placeholder="Digite el nombre" required class="form-control" value="<?=$compra_r['cliente_name'];?>">
			<br><br>
		</div>

		<div class="col-md-4">
		<label> Preço da Compra: </label><br>
			<input type="number" name="precio_compra" placeholder="Digite o preço" required class="form-control" value="<?=$compra_r['precio_compra'];?>">
			<br><br>
		</div>

		<div class="col-md-8">
		<label> Nome do Produto: </label><br>
			<input type="text" name="producto_compra" placeholder="Digite o nome" required class="form-control" value="<?=$compra_r['producto_compra'];?>">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Data da Compra: </label><br>
			<input type="date" name="fecha_compra" required class="form-control" value="<?=$compra_r['fecha_compra'];?>">
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