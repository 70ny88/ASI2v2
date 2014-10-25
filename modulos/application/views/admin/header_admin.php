<?php
     $logued = $this->session->userdata('logued_in');
	 $session = $this->session->userdata('session_id');
    
if($logued === FALSE || $session === FALSE ){ /* por seguridad hacemos doble verificación; aunque estas 
                                               * 2 variables siempre van a tener el mismo estado */
	redirect('login'); exit();
	
 } 	
?>
	<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=""><link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/template/style.css"/>
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery-1.9.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 $('tr:odd').css('background', '#e3e3e3');
});	
</script>


    <title><?=$title?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
        <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">ASI2 proyecto</a>             
        </div>
    </nav>
    <div class="botones-opciones">
	<ul>
		<li><?=anchor('login','Admin');?></li>
		<li><?=anchor('users','Usuarios');?></li>
		<li><?=anchor('manage_products','Productos');?></li>
		<li><?=anchor('upload','Imagenes');?></li>
		<li class="cart_menu"><?=anchor('login/logout', 'Cerrar Sesión');?></li>
	</ul>
</div><!-- End Menu -->
