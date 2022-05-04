<?php
    if(isset($_SESSION['carritoCompra'])){
    $carritoCompra = $_SESSION['carritoCompra'];
    foreach($carritoCompra as $carrito){$cart[] = $carrito['id_producto'];}}

    //Testar se existe conteúdo!
	#Se não existir, ele mostra a label 
	if($resultado == false){
		echo '<button class="btn btn-warning">';
			 echo ' <i class="fa fa-thumbs-down"></i>';
			 echo ' No existen resultados';
		echo '</button><br><br>';
		#se existir conteúdo, ele cria a tabela
	}else{
?>
     
<!-- SEARCH FORM -->
<form method="GET" class="form-inline ml-3">
    <h5>Lista de Produtos: <?php echo count($resultado); ?> productos. Seção de Compras: &nbsp&nbsp</h5>
    <div class="input-group">
    <input class="form-control form-control-navbar" type="search" placeholder="Buscador de Produtos" aria-label="Search" name="productoCompra" value="<?php echo $nombre; ?>">
    <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
        <i class="fas fa-search"></i>
        </button>
    </div>
    </div>
</form>

<div class="row mb-5">
    <div class="col-md-12 order-2">
        <div class="row mb-5">
            <?php if(!isset($_SESSION['carritoCompra'])){
                foreach($resultado as $fila){
            ?>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                    <div class="block-4 text-center border" style='margin-top:20px'>
                        <form action="<?=$GLOBALS['project_index'];?>/views/carrito/cart.php" method="POST" >
                            <input type="hidden" name="id_producto" value="<?php echo $fila['id_producto'];?>">
                            <input type="hidden" name="producto_created_in" value="<?php echo $fila['producto_created_in'];?>">
                            <input type="hidden" name="user_id" value="<?php echo $fila['user_id'];?>">
                            <div class="block-4-text p-4">
                                <h4 class="text-primary"><input type="hidden" name="product_name" value="<?php echo $fila['product_name'];?>"><?php echo $fila['product_name'];?></h4>
                                <input type="hidden" name="product_description" value="<?php echo $fila['product_description'];?>"><?php echo $fila['product_description'];?>
                                <p class="text-dark">Preço de Compra: $ <input style="width:100px;" name="product_price" type="number" min="0" step="0.01" value="<?php echo $fila['product_price'];?>"></p>
                                Quantidade: <input style="width:100px;" type="number" min="0" name="cantidad" placeholder="0" >
                                <button class="btn btn-danger" type="submit"  style='margin-top:20px'><i class="fas fa-cart-plus fa-lg mr-2"></i>Agregar Produto</button>
                            </div>
                        </form>
                    </div>
                </div>
            <?php } }else{
                foreach($resultado as $fila){
                    
            ?>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                    <div class="block-4 text-center border">
                        <form action="<?=$GLOBALS['project_index'];?>/views/carrito/cart.php" method="POST">
                            <input type="hidden" name="id_producto" value="<?php echo $fila['id_producto'];?>">
                            <input type="hidden" name="producto_created_in" value="<?php echo $fila['producto_created_in'];?>">
                            <input type="hidden" name="user_id" value="<?php echo $fila['user_id'];?>">
                            <div class="block-4-text p-4">
                                <h4 class="text-primary"><input type="hidden" name="product_name" value="<?php echo $fila['product_name'];?>"><?php echo $fila['product_name'];?></h4>
                                <input type="hidden" name="product_description" value="<?php echo $fila['product_description'];?>"><?php echo $fila['product_description'];?>
                                <p class="text-dark">Preço de Compra: $ <input style="width:100px;" name="product_price" type="number" min="0" step="0.01" value="<?php echo $fila['product_price'];?>"></p>
                                Quantidade: <input style="width:100px;" type="number" min="0" name="cantidad" placeholder="0" required>
                                <?php 
                                //var_dump($fila);
                                $fila1 = $fila['id_producto'];
                                if(in_array($fila1, $cart)) {
                                    echo '<button class="btn btn-success"><i class="fas fa-cart-plus fa-lg mr-2"></i>Produto Agregado</button>';
                                }else{
                                    echo '<button class="btn btn-danger" type="submit"><i class="fas fa-cart-plus fa-lg mr-2"></i>Agregar Produto</button>';
                                }
                                ?>
                                
                            </div>
                        </form>
                    </div>
                </div>
            <?php }} ?>      
        </div>
    </div>
</div>
<?php } ?>
