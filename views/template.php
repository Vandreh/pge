<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PGE | APP</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="views/style4.css">
    
    <!-- Scripts para carrito de compras -->
    <link rel="stylesheet" href="views/carrito/carrito/css/style.css">

    </head>
    <body>

        <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3> Seção de <?= $page_title;?> </h3>
                </div>

                <!-- MENU -->
                <ul class="list-unstyled components">
                    <!-- incluindo o arquivo do menu -->
                    <?php include_once 'views/menu.php'; ?>
                </ul>
            </nav>

            <!-- Page Content  -->
            <div id="content">
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav" style="align-items: center;">
                    <li>
                        <button type="button" id="sidebarCollapse" class="btn btn-light">
                            <i class="fas fa-bars"></i>
                            <!--<span><--Barra Lateral- -></span>-->
                        </button>
                    </li>

                    <li class="navbar-text btn btn-light" style="padding-left:30px; padding-right:30px;margin-left:20px;background-color:#bfd6fd;border-radius:7px;">
                        <a href="?option=premiar_cliente" class="site-cart"> PREMIAR CLIENTE
                        </a>
                    </li>
                    
                    <li class="navbar-text btn btn-light" style="padding-left:30px; padding-right:30px;margin-left:20px; margin-right:20px;background-color:#bfd6fd;border-radius:7px;">
                        <a href="?option=add_nota_fiscal" class="site-cart"> Add Nota Fiscal
                        </a>
                    </li>
                  
                    <li class="navbar-text btn btn-light" style="padding-left:30px; padding-right:30px;background-color: #bfd6fd;border-radius:7px;">
                        <a href="?option=productos-compra" class="site-cart">Compra
                        <span class="fas fa-shopping-cart"></span>
                        <span class="count">
                            <?php
                                if(isset($_SESSION['carritoCompra'])){echo count($_SESSION['carritoCompra']);}else{echo 0;}
                            ?>
                        </span>
                        </a>
                    </li>
                </ul>
            </nav>

            <?php if(isset($_REQUEST['success'])){ ?>
                <div class="alert alert-primary alert-dismissible fade show float-left" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong> Registro realizado exitosamente</strong>
                </div>
            <?php } ?>

            <!-- FUNÇÃO GERENCIADORA DE CONTEUDO -->
            <?php page_content(); ?>
            
            <footer class="main-footer">
                <div class="float-right d-none d-sm-inline-block">
                    <strong> 2022-2023 <a href="https://vantecgestiona.com"> PGE </a></strong>APP®
                  <b> Version </b>  1.0
                </div>
            </footer>
        </div>
    </div>

        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script
            src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous">
        </script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                $('#tableGeral').DataTable({
                    "language":{
                        "sEmptyTable": "Ningun registro encontrado",
                        "sInfo": "Mostrando de _START_ hasta _END_ de _TOTAL_ registros",
                        "sInfoEmpty": "Mostrando 0 hasta 0 de 0 registros",
                        "sInfoFiltered": "(Total de _MAX_ registros)",
                        "sInfoPostFix": "",
                        "sInfoThousands": ".",
                        "sLengthMenu": "_MENU_ resultados por página",
                        "sLoadingRecords": "Cargando...",
                        "sProcessing": "Procesando...",
                        "sZeroRecords": "Ningun registro encontrado",
                        "sSearch": "Buscar",
                        "oPaginate": {
                            "sNext": "Próximo",
                            "sPrevious": "Anterior",
                            "sFirst": "Primero",
                            "sLast": "Último"
                        },
                        "oAria": {
                            "sSortAscending": ": Ordenar colunas de forma ascendente",
                            "sSortDescending": ": Ordenar colunas de forma descendente"
                        },
                        "select": {
                            "rows": {
                                "_": "Seleccionado %d lineas",
                                "0": "Ninguna linea seleccionada",
                                "1": "Seleccionado 1 linea"
                            }
                        }
                    }
                //"fixedHeader": true
                });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
  
        <script src="views/carrito/carrito/js/jquery-ui.js"></script>
        <script src="views/carrito/carrito/js/owl.carousel.min.js"></script>
        <script src="views/carrito/carrito/js/jquery.magnific-popup.min.js"></script>
        <script src="views/carrito/carrito/js/aos.js"></script>
        <script src="views/carrito/carrito/js/main.js"></script>
        
        <script>
            $(document).ready(function(){
                $(".btnEliminarVenta").click(function(event){
                    event.preventDefault();
                    var id = $(this).data('id');
                    var boton = $(this);
                    $.ajax({
                        method:'POST',
                        url:'./views/carrito/eliminarCarrito.php',
                        data:{id:id}
                    }).done(function(respuesta){
                        boton.parent('td').parent('tr').remove();
                    });
                });

                $(".txtCantidad").keyup(function(){
                    var cantidad = $(this).val();
                    var precio = $(this).data('precio');
                    var id = $(this).data('id');
                    var mult = parseFloat(cantidad) * parseFloat(precio);
                    incrementar(cantidad, precio, id);
                });

                $(".btnIncrementar").click(function(){
                    var precio = $(this).parent('div').parent('div').find('input').data('precio');
                    var id = $(this).parent('div').parent('div').find('input').data('id');
                    var cantidad = $(this).parent('div').parent('div').find('input').val();
                    incrementar(cantidad, precio, id);
                });

                function incrementar(cantidad, precio, id){
                    var mult = parseFloat(cantidad) * parseFloat(precio);
                    $(".cant"+id).text("$"+mult.toFixed(2));

                    $.ajax({
                        method:'POST',
                        url:'./views/carrito/actualizarCarrito.php',
                        data:{id:id, cantidad:cantidad}
                    }).done(function(respuesta){});
                }
            });
        </script>
    </body>
</html>