<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>H & M Western Admin</title>
    <meta name="description" content="Cake-A-Licious">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('vendors/font-awesome/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('vendors/themify-icons/css/themify-icons.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('vendors/flag-icon-css/css/flag-icon.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('vendors/selectFX/css/cs-skin-elastic.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('vendors/jqvmap/dist/jqvmap.min.css');?>">
    
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.4.1.min.js');?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main2.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    

    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <br>
                <a class="navbar-brand" href="<?php echo base_url('index.php/Welcome/admin');?>"><img src="<?php echo base_url('images/logo.png');?>" alt="Logo"></a>
                <h3 class="menu-title">H & M Western</h3>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo base_url('index.php/Admin');?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Orders</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="<?php echo base_url('index.php/Welcome/create');?>"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cutlery"></i>All Stocks</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="<?php echo base_url('index.php/Welcome/viewall');?>" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>All Orders</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="<?php echo base_url('index.php/Welcome/viewComplete');?>"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Completed Orders</a>
                    </li>

                    <h3 class="menu-title">Customer</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="<?php echo base_url('index.php/Welcome/create_user');?>" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Add Customer</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="<?php echo base_url('index.php/Welcome');?>" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>View all Customers </a>
                    </li>
                    <h3 class="menu-title">Extra</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="<?php echo base_url('index.php/Welcome/index');?>" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Go to website</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="<?php echo base_url('users/logout');?>" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Log out</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->
