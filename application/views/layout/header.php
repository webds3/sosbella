<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/material.min.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/ripples.min.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/roboto.min.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style_general.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/amaran.min.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/datatables.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/chosen.min.css');?>">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css">
		<link href="https://file.myfontastic.com/NJFcWjhPp5YTF2gP2WZeum/icons.css" rel="stylesheet">
		<?php if(isset($css) && $css=='login'):?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style_login.css');?>">	
		<?php endif;?>
		<?php if(isset($css) && $css=='navbar'):?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style_navbar.css');?>">	
		<?php endif;?>
		<?php if(isset($css_body) && $css_body=='administracion'):?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style_administracion.css');?>">	
		<?php endif;?>
		<?php if(isset($css_body) && $css_body=='productos'):?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style_productos.css');?>">	
		<?php endif;?>
		<?php if(isset($css_body) && $css_body=='producto_detalle'):?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style_producto_detalle.css');?>">	
		<?php endif;?>
		<?php if(isset($css_body) && $css_body=='carrito'):?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style_carrito.css');?>">	
		<?php endif;?>
		<?php if(isset($fancy) && $fancy==TRUE):?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.fancybox.css');?>">	
		<?php endif;?>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js');?>"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
		<title><?php echo empty($titulo) ? "Sosbella" : $titulo;?></title>
	</head>
	<body>
	