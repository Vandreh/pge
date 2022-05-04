<?php
    include_once '../../models/config.php';
    session_start();
    if(isset($_SESSION['carritoCompra'])){
        if(isset($_POST)){
            $arreglo = $_SESSION['carritoCompra'];
            $encontro = false;
            $numero = 0;
            for($i=0; $i < count($arreglo); $i++){
                if($arreglo[$i]['id_producto'] == $_POST['id_producto']){
                    $encontro = true;
                    $numero = $i;
                }
            }

            if($encontro == true){
                $arreglo[$numero]['cantidad'] = $arreglo[$numero]['cantidad'] + $_POST['cantidad'];
                $_SESSION['carritoCompra'] = $arreglo;
            }else{
                $arregloNuevo = array(
                    'id_producto' => $_POST['id_producto'],
                    'producto_created_in' => $_POST['producto_created_in'],
                    'user_id' => $_POST['user_id'],
                    'product_name' => $_POST['product_name'],
                    'product_description' => $_POST['product_description'],
                    'product_price' => $_POST['product_price'],
                    'cantidad' => $_POST['cantidad']
                );
                array_push($arreglo, $arregloNuevo);
                $_SESSION['carritoCompra'] = $arreglo;
            }
            header("location: $project_index/admin.php?option=productos-compra&add=Produto Adicionado");
        }else{header("location: $project_index/admin.php?option=productos-compra");}
    }else{

        if(isset($_POST)){
            $arreglo[] = array(
                'id_producto' => $_POST['id_producto'],
                'producto_created_in' => $_POST['producto_created_in'],
                'user_id' => $_POST['user_id'],
                'product_name' => $_POST['product_name'],
                'product_description' => $_POST['product_description'],
                'product_price' => $_POST['product_price'],
                'cantidad' => $_POST['cantidad']
            );

            $_SESSION['carritoCompra'] = $arreglo;
            header("location: $project_index/admin.php?option=productos-compra&add=Produto Adicionado");
        }
        header("location: $project_index/admin.php?option=productos-compra&add=Produto Adicionado");
    }
?>