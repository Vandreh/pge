<?php
    if(!isset($_SESSION['carritoCompra'])){
        header('location: ./index.php');
    }
    $arreglo = $_SESSION['carritoCompra'];
?>

<form name="f1" id="f1" action="<?=$GLOBALS['project_index'];?>/controllers/add_compras.php" method="POST">
    <div class="site-wrap">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="border p-4 rounded" role="alert">
                    Regressar ao carrinho de compra? <a href="?option=productos-compra">Click aqui</a>
                </div>
            </div>
        </div>    
        <div class="row">
            <div class="col-md-6 mb-5 mb-md-0">
                <h2 class="h3 mb-3 text-black">Detalhes da Compra</h2>
                <div class="p-3 p-lg-5 border">
                    
                        
                        <?php
                            $total = 0;
                            for($i=0;$i<count($arreglo);$i++){
                                $total = $total + ($arreglo[$i]['product_price'] * $arreglo[$i]['cantidad']);
                            }
                        ?>
                        <input type="hidden" name="user_id" value="<?php echo $cpf;?>">
                        <div class="form-group row">
                            <div class="col-md-12">
                        		<label>Nome do Cliente:</label> <br>
                                <select name="id_cliente" class="form-control">
                                <?php

                                //Recebendo os dados do controller
                                 foreach($ejecutar as $values): 
                                     $cliente_name = $values['cliente_name'];
                                     $id_cliente = $values['id_cliente'];
                                 ?>
                                <?php echo 
                                '<option value="'.$id_cliente.'">'.$cliente_name.'</option>';?>
                            	    
                            	<?php endforeach; ?>
                            	</select>
                            	
                    		</div>
                    	</div>	
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label  class="text-black">DATA DA COMPRA: </label>
                                <input type="date" name="fecha_compra" class="form-control" value="<?php echo date("Y-m-d");?>" required>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h2 class="h3 mb-3 text-black">Lista de Produtos</h2>
                        <div class="p-3 p-lg-5 border">
                            <table class="table site-block-order-table mb-5">
                                <thead>
                                    <th>Produto</th>
                                    <th>Total</th>
                                </thead>
                                <tbody>
                                    <?php
                                        for($i=0;$i<count($arreglo);$i++){
                                    ?>
                                    <tr>
                                        <td><?php echo $arreglo[$i]['product_name']?><strong class="mx-2">x</strong> <?php echo $arreglo[$i]['cantidad']?></td>
                                        <td>$<?php echo $arreglo[$i]['product_price']?></td>
                                    </tr>
                                  
                                    <?php } ?>
                                  
                                    <tr>
                                        <td class="text-black font-weight-bold"><strong>Subtotal</strong></td>
                                        <td class="text-black font-weight-bold"><strong>$<?php echo number_format($total, 2, '.', '');?></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg py-3 btn-block" >Finalizar Compra</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>