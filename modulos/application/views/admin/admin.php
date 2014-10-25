    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?=heading('Bienvenido: '.$user, 4);?>
                    <small><div><?=anchor('login/logout', 'Cerar Sesión');?></div></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
<?php

$users = '<img src="'.base_url().'assets/img/users.png"/>';
$products = '<img src="'.base_url().'assets/img/products.png"/>';
$images = '<img src="'.base_url().'assets/img/images.jpg"/>';
$logout = '<img src="'.base_url().'assets/img/logout.png"/>';
?>
<div class="row">
	            <div class="col-md-4 portfolio-item">
                
                    <div class="item">
                    <ul>
                        <li><?=anchor('users', 'Administrar Usuarios');?></li>
                    </ul>
                    <div class="user"></div>
                    <div class="texto"><?=anchor('users', 'Administrar Usuarios');?></div>
                    </div>
                
                
            </div>
            <div class="col-md-4 portfolio-item">
                    <div class="item">
                        <ul>
                            <li><?=anchor('manage_products','Administrar Productos');?></li>

                        </ul>
                    	<div class="inventario"></div>
                    	<div class="texto"><?=anchor('manage_products','Administrar Productos');?></div>
                    </div>             
                
            </div>

	<!--<div><?=anchor('upload', 'Subir Imagenes');?></div>
	<div><?=anchor('upload', $images);?></div> -->

</div>

