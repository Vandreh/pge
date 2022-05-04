<!-- Criação do Formulário -->
<form action="<?=$GLOBALS['project_index'];?>/controllers/productos.php" method="POST">
    
    <input type="hidden" name="id_producto" value="<?php echo $producto_r['id_producto'];?>">

	<div class="row">
	    <div class="col-md-8">
		<label> Producto: </label><br>
			<input type="text" name="product_name" placeholder="Digite el producto" required class="form-control" value="<?=$producto_r['product_name'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Precio: </label><br>
			<input type="number" name="product_price" placeholder="Digite el Descuento" required class="form-control" value="<?=$producto_r['product_price'];?>">
			<br><br>
		</div>

		<div class="col-md-9">
			<label> Descrição: </label><br>
			<input type="text" name="product_description" placeholder="Descrição do produto" class="form-control" value="<?=$producto_r['product_description'];?>">
			<br><br>
		</div>

		<input type="hidden" name="action" value="edit">
		<input type="hidden" name="user_id" value="<?php echo $cpf;?>">
		
		<hr>			
		<div class="col-md-12">
			<p class="text-right">
			<button class="btn btn-primary"> 
				<i class="fa fa-thumbs-up"></i>
				 Actualizar Producto 
			</button>
			</p>
		</div>	
	</div>
</form>