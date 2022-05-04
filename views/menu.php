<?php if(isset($user) and $user['profile_page'] == "admin.php"){ ?>

<li class="active">
    <a href="?financiero=ano">
        <i class="fas fa-chart-line"></i>
        BALANÇO FINANCEIRO
    </a>
</li>

<li class="active">
    <a href="#homeClients" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fa fa-user"></i>
        CLIENTES
    </a>
    <ul class="collapse list-unstyled" id="homeClients">
        <li>
            <a href="?option=add_client"><i class="fa fa-plus"></i> Cadastrar Clientes</a>
        </li>
        <li>
            <a href="?option=manager_clients"><i class="fa fa-cogs"></i> Gerenciar Clientes</a>
        </li>        
    </ul>
</li>

<li class="active">
    <a href="#homeProductos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fas fa-pen-square"></i>
        PRODUTOS
    </a>
    <ul class="collapse list-unstyled" id="homeProductos">
        <li>
            <a href="?option=add_productos"><i class="fa fa-plus"></i> Cadastrar Productos</a>
        </li>
        <li>
            <a href="?option=manager_productos"><i class="fa fa-cogs"></i> Gerenciar Productos</a>
        </li>        
    </ul>
</li>

<li class="active">
    <a href="#homeVentas" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fas fa-dollar-sign"></i>
        COMPRAS
    </a>
    <ul class="collapse list-unstyled" id="homeVentas">
        <li>
            <a href="?option=add_compras"><i class="fa fa-plus"></i> Cadastrar Ventas</a>
        </li>
        <li>
            <a href="?option=manager_compras"><i class="fa fa-cogs"></i> Gerenciar Ventas</a>
        </li>        
    </ul>
</li>

<?php } ?>

<li>
    <a href="controllers/logout.php">
        <i class="fa fa-power-off"></i>
        LOGOUT
    </a>
</li>