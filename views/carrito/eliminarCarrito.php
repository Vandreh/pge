<?php
    session_start();
    $arreglo = $_SESSION['carritoCompra'];
    for($i=0; $i < count($arreglo); $i++){
        if($arreglo[$i]['id_producto'] != $_POST['id']){
            $arregloNuevo[] = array(
                'id_producto' => $arreglo[$i]['id_producto'],
                'producto_created_in' => $arreglo[$i]['producto_created_in'],
                'user_id' => $arreglo[$i]['user_id'],
                
                'product_name' => $arreglo[$i]['product_name'],
                'product_description' => $arreglo[$i]['product_description'],
                'product_price' => $arreglo[$i]['product_price'],
                'cantidad' => $arreglo[$i]['cantidad']
            );
        }
    }
    if(isset($arregloNuevo)){
        $_SESSION['carritoCompra'] = $arregloNuevo;
    }else{
        //quiere decir que el registro a eliminar es el unico que habia
        unset($_SESSION['carritoCompra']);
    }
    echo "Produto eliminado";
?>