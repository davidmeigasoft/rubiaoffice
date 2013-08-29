<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<head>
	<title>Admin</title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	
	<!-- Bootstrap -->
	<link href="<?php echo base_url('assets-admin/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets-admin/bootstrap/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet" />
	
	<!-- Bootstrap Extended -->
	<link href="<?php echo base_url(); ?>assets-admin/bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets-admin/bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets-admin/bootstrap/extend/bootstrap-wysihtml5/css/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet">
	
	<!-- Select2 -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets-admin/theme/scripts/select2/select2.css"/>
	
	<!-- Notyfy -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets-admin/theme/scripts/notyfy/jquery.notyfy.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets-admin/theme/scripts/notyfy/themes/default.css"/>
	
	<!-- JQueryUI v1.9.2 -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets-admin/theme/scripts/jquery-ui-1.9.2.custom/css/smoothness/jquery-ui-1.9.2.custom.min.css" />
	
	<!-- Glyphicons -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets-admin/theme/css/glyphicons.css" />
	
	<!-- Bootstrap Extended -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets-admin/bootstrap/extend/bootstrap-select/bootstrap-select.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets-admin/bootstrap/extend/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
	
	<!-- Uniform -->
	<link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>assets-admin/theme/scripts/pixelmatrix-uniform/css/uniform.default.css" />
    
    <!-- DataTables -->
	<link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>assets-admin/theme/scripts/DataTables/media/css/DT_bootstrap.css" />

	<!-- JQuery v1.8.2 -->
	<script src="<?php echo base_url(); ?>assets-admin/theme/scripts/jquery-1.8.2.min.js"></script>
	
	<!-- Modernizr -->
	<script src="<?php echo base_url(); ?>assets-admin/theme/scripts/modernizr.custom.76094.js"></script>
	
	<!-- MiniColors -->
	<link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>assets-admin/theme/scripts/jquery-miniColors/jquery.miniColors.css" />
	
	<!-- Theme -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets-admin/theme/css/style.min.css?1363272390" />
	
	<!-- LESS 2 CSS -->
	<script src="<?php echo base_url(); ?>assets-admin/theme/scripts/less-1.3.3.min.js"></script>
    
    <!-- UPLOADIFY CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets-admin/upload/uploadifive.css" />
	
	
	<!--[if IE]><script type="text/javascript" src="theme/scripts/excanvas/excanvas.js"></script><![endif]-->
	<!--[if lt IE 8]><script type="text/javascript" src="theme/scripts/json2.js"></script><![endif]-->
</head>
<body>
	
	<!-- Start Content -->
	<div class="container-fluid fixed">
		
		<div class="navbar main">
			<a href="index.html?lang=en" class="appbrand"><span>Admin+<span></span></span></a>
						<button type="button" class="btn btn-navbar">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
			</button>
						
			<ul class="topnav pull-right">
				<li class="visible-desktop">
					<ul class="notif" style="visibility:hidden">
						<li><a href="" class="glyphicons envelope" data-toggle="tooltip" data-placement="bottom" data-original-title="5 new messages"><i></i> 5</a></li>
						<li><a href="" class="glyphicons shopping_cart" data-toggle="tooltip" data-placement="bottom" data-original-title="1 new orders"><i></i> 1</a></li>
						<li><a href="" class="glyphicons log_book" data-toggle="tooltip" data-placement="bottom" data-original-title="3 new activities"><i></i> 3</a></li>
					</ul>
				</li>
				
				<li class="hidden-phone">
					<a href="#themer" data-toggle="collapse" class="glyphicons eyedropper"><i></i><span>Personaliza</span></a>
					<div id="themer" class="collapse">
						<div class="wrapper">
							<span class="close2">&times; cerrar</span>
							<h4>Elige <span>un tema</span></h4>
							<ul>
								<li>Tema: <select id="themer-theme" class="pull-right"></select><div class="clearfix"></div></li>
								<li>Color primario: <input type="text" data-type="minicolors" data-default="#ffffff" data-slider="hue" data-textfield="false" data-position="left" id="themer-primary-cp" /><div class="clearfix"></div></li>
								<li>
									
								</li>
							</ul>
						</div>
					</div>
				</li>
								
				<li class="account">
                        <a data-toggle="dropdown" href="form_demo.html?lang=en" class="glyphicons logout lock">
                        <span class="hidden-phone text">
							<?php if($this->session): ?>
                                <?php echo $this->session->userdata('usuario'); ?>
                            <?php endif; ?> 
                        </span><i></i></a>
					<ul class="dropdown-menu pull-right">
						<li><a href="form_demo.html?lang=en" class="glyphicons cogwheel">Preferencias<i></i></a></li>
						<li><a href="form_demo.html?lang=en" class="glyphicons camera">Fotos<i></i></a></li>
						<li class="highlight profile">
							<span>
								<span class="heading">Ficha <a href="form_demo.html?lang=en" class="pull-right">editar</a></span>
								<span class="img"></span>
								<span class="details">
									<a href="form_demo.html?lang=en">
										                                   
                                    </a>
									mail@mail.com
								</span>
								<span class="clearfix"></span>
							</span>
						</li>
						<li>
							<span>
								<a class="btn btn-default btn-small pull-right" style="padding: 2px 10px; background: #fff;" href="<?php echo base_url().'admin/cerrar'; ?>">Salir</a>
							</span>
						</li>
					</ul>
					  </li>
			</ul>
		</div>
		
<div id="wrapper">
	<div id="menu" class="hidden-phone">
		<div id="menuInner">
            <div id="search">
                <input type="text" placeholder="Quick search ..." />
                <button class="glyphicons search"><i></i></button>
            </div>
<ul style="display:none">

<li class="heading"><span>Categorias</span></li>
<li class="glyphicons home active"><a href="<?php echo base_url(); ?>admin/index/body"><i></i><span>Inicio</span></a></li>
<li class="glyphicons cogwheels" style="display:none"><a href="<?php echo base_url(); ?>admin/index/ui"><i></i><span>Elementos</span></a></li>
<li class="glyphicons charts" style="display:none"><a href="<?php echo base_url(); ?>admin/index/charts"><i></i><span>Charts</span></a></li>

<li class="hasSubmenu" style="display:none">
    <a data-toggle="collapse" class="glyphicons show_thumbnails_with_lines" href="#menu_forms"><i></i><span>Formularios</span></a>
    <ul class="collapse" id="menu_forms">
        <li class=""><a href="<?php echo base_url(); ?>admin/index/formulario_cliente"><span>Alta cliente</span></a></li>
        <li class=""><a href="<?php echo base_url(); ?>admin/index/formulario_archivo"><span>Alta archivo</span></a></li>
        <li class=""><a href="<?php echo base_url(); ?>admin/index/formulario_galeria"><span>Alta galeria</span></a></li>
        <li class=""><a href="<?php echo base_url(); ?>admin/index/formulario_thumb"><span>Alta de imágenes</span></a></li>
        <li class=""><a href="<?php echo base_url(); ?>admin/index/formulario_multi_thumb"><span>Alta varias imágenes</span></a></li>
    </ul>
</li>
                    
<li class="hasSubmenu" style="display:none">
    <a data-toggle="collapse" class="glyphicons table" href="#menu_tablas"><i></i><span>Tablas</span></a>
    
    <ul class="collapse" id="menu_tablas">
        <li class=""><a href="<?php echo base_url(); ?>admin_cliente/listado_clientes"><span>Clientes</span></a></li>
        <li class=""><a href="<?php echo base_url(); ?>admin_archivo/listado_archivos"><span>Archivos</span></a></li>
        <li class=""><a href="<?php echo base_url(); ?>admin_galeria/listado_galerias"><span>Galerias</span></a></li>
        <li class=""><a href="<?php echo base_url(); ?>admin_thumb/listado_thumbs"><span>Imágenes</span></a></li>
        <li class=""><a href="<?php echo base_url(); ?>admin_thumb/galeria_thumbs"><span>Galeria de imagenes</span></a></li>
    </ul>
</li>
                    
<li class="hasSubmenu">
    <a data-toggle="collapse" class="glyphicons user" href="#menu_clientes"><i></i><span>Clientes</span></a>
    <ul class="collapse" id="menu_clientes">
    	<li class=""><a href="<?php echo base_url(); ?>admin/index/formulario_cliente"><span>Alta cliente</span></a></li>
        <li class=""><a href="<?php echo base_url(); ?>admin_cliente/listado_clientes"><span>Lista de clientes</span></a></li>
    </ul>
</li>

<li class="hasSubmenu">
    <a data-toggle="collapse" class="glyphicons file" href="#menu_archivos"><i></i><span>Archivos</span></a>
    <ul class="collapse" id="menu_archivos">
    	<li class=""><a href="<?php echo base_url(); ?>admin/index/formulario_archivo"><span>Alta archivo</span></a></li>
        <li class=""><a href="<?php echo base_url(); ?>admin_archivo/listado_archivos"><span>Asignar archivos</span></a></li>
    </ul>
</li>

<li class="hasSubmenu">
    <a data-toggle="collapse" class="glyphicons show_big_thumbnails" href="#menu_galerias"><i></i><span>Galerias</span></a>
    <ul class="collapse" id="menu_galerias">
    	<li class=""><a href="<?php echo base_url(); ?>admin/index/formulario_galeria"><span>Alta galeria</span></a></li>
        <li class=""><a href="<?php echo base_url(); ?>admin_galeria/listado_galerias"><span>Lista de galerias</span></a></li>
    </ul>
</li>


<li class="hasSubmenu" style="display:none">
    <a data-toggle="collapse" class="glyphicons picture" href="#menu_imagenes"><i></i><span>Imágenes</span></a>
    <ul class="collapse" id="menu_imagenes">
    	<li class=""><a href="<?php echo base_url(); ?>admin/index/formulario_thumb"><span>Alta de imágenes</span></a></li>
        <li class=""><a href="<?php echo base_url(); ?>admin/index/formulario_multi_thumb"><span>Alta multi</span></a></li>
        <li class=""><a href="<?php echo base_url(); ?>admin_thumb/listado_thumbs"><span>Listado imágenes</span></a></li>
    </ul>
</li>

<li class="hasSubmenu">
    <a data-toggle="collapse" class="glyphicons book_open" href="#menu_blogs"><i></i><span>Blog</span></a>
    <ul class="collapse" id="menu_blogs">
    	<li class=""><a href="<?php echo base_url(); ?>admin_blog"><span>Alta post</span></a></li>
        <li class=""><a href="<?php echo base_url(); ?>admin_blog/listado_blogs"><span>Lista de posts</span></a></li>
    </ul>
</li>



                    
<li class="glyphicons calendar" style="display:none"><a href="<?php echo base_url(); ?>admin/index/body"><i></i><span>Calendario</span></a></li>
<li class="glyphicons user" style="display:none"><a href="<?php echo base_url(); ?>admin/index/login"><i></i><span>Login</span></a></li>
				
</ul>

<ul>
    <li class="heading"><span>Secciones</span></li>
    
<li class="hasSubmenu">
        <a data-toggle="collapse" class="glyphicons shopping_cart" href="#menu_elementos_index"><i></i><span>Elementos Index</span></a>
        <ul class="collapse" id="menu_elementos_index">
            <li class=""><a href="<?php echo base_url(); ?>admin_elementos_index"><span>Añadir elemento</span></a></li>
            <li class=""><a href="<?php echo base_url(); ?>admin_elementos_index/listar_elementos_index"><span>Listado de elementos</span></a></li>
        </ul>
    </li>


    <li class="hasSubmenu">
        <a data-toggle="collapse" class="glyphicons shopping_cart" href="#menu_familia"><i></i><span>Familias</span></a>
        <ul class="collapse" id="menu_familia">
            <li class=""><a href="<?php echo base_url(); ?>admin_familia"><span>Alta familia</span></a></li>
            <li class=""><a href="<?php echo base_url(); ?>admin_familia/listar_familia"><span>Listado de familias</span></a></li>
        </ul>
    </li>



    
    <li class="hasSubmenu">
        <a data-toggle="collapse" class="glyphicons shopping_cart" href="#menu_categoria"><i></i><span>Categorías</span></a>
        <ul class="collapse" id="menu_categoria">
            <li class=""><a href="<?php echo base_url(); ?>admin_categoria"><span>Alta categoría</span></a></li>
            <li class=""><a href="<?php echo base_url(); ?>admin_categoria/listar_categoria"><span>Listado de categorías</span></a></li>
        </ul>
    </li>
    
    
    <li class="hasSubmenu">
        <a data-toggle="collapse" class="glyphicons user" href="#menu_subcategoria"><i></i><span>Subcategorías</span></a>
        <ul class="collapse" id="menu_subcategoria">
            <li class=""><a href="<?php echo base_url(); ?>admin_subcategoria"><span>Alta subcategoría</span></a></li>
            <li class=""><a href="<?php echo base_url(); ?>admin_subcategoria/listar_subcategoria"><span>Listado de subcategorías</span></a></li>
        </ul>
    </li>
    
    
    <li class="hasSubmenu">
        <a data-toggle="collapse" class="glyphicons shopping_cart" href="#menu_articulos"><i></i><span>Artículos</span></a>
        <ul class="collapse" id="menu_articulos">
            <li class=""><a href="<?php echo base_url(); ?>admin_articulo"><span>Alta artículo</span></a></li>
            <li class=""><a href="<?php echo base_url(); ?>admin_articulo/listar_articulo"><span>Listado de artículos</span></a></li>
        </ul>
    </li>
    
    
    <li style="display:none" class="glyphicons sort"><a href="<?php echo base_url(); ?>admin/index/pages"><i></i><span>Paginas</span></a></li>
    <li style="display:none" class="glyphicons picture"><a href="<?php echo base_url(); ?>admin/index/gallery"><i></i><span>Galerias</span></a></li>
    <li style="display:none" class="glyphicons adress_book"><a href="<?php echo base_url(); ?>admin/index/bookings"><i></i><span>Archivos</span></a></li>
</ul>
    </div>
</div>
<!--header-->
        
