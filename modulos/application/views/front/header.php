<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
        <div id="user-login">
                <ul>
                    <li></li>
                    <li><img src="<?=base_url();?>assets/images/avatar_user.jpg"/>José López</li>
                </ul>
            </div><!-- /.container -->            
    </nav>
        <!-- Page Content -->
    <div class="container">
                    <!-- BEGIN CART -->
            <div class="cart-block">
                <div class="cart-info">
                    <?php if($total_items=$this->cart->total_items()):?> 
                    <a href="<?=base_url();?>javascript:void(0);" class="cart-info-count"><?=anchor('products/cart', 'Carrito - '.$total_items);?> Productos</a>
                    <a href="<?=base_url();?>javascript:void(0);" class="cart-info-value"></a>
                <?php endif; ?>    
                </div>
                <i class="fa fa-shopping-cart"></i>
                <!-- BEGIN CART CONTENT -->
                <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Pedidos
                    <small></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

