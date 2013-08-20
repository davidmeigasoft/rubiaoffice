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
	
<!--header-->

		
		<div id="login">
	<form class="form-signin" method="post" action="<?php echo base_url().'admin/loguear';?>">
		<div class="widget widget-4">
			<div class="widget-head">
				<h4 class="heading">Zona privada</h4>
			</div>
		</div>
		<h2 class="glyphicons unlock form-signin-heading"><i></i> Datos acceso</h2>
		<div class="uniformjs">
			<input type="text" name="mail" class="input-block-level" placeholder="Email"> 
			<input type="password" name="pass" class="input-block-level" placeholder="Password"> 
		</div>
		<button class="btn btn-large btn-primary" type="submit">Entrar</button>
        <?php if(isset($error)): ?>
    	<div class="alert alert-error" style="margin-top:10px">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?php echo $error; ?>
		</div>
        <?php endif; ?>
	</form>
    	
</div>		
				


				<!-- End Content -->
		</div>
		<!-- End Wrapper -->
		</div>
		
		<!-- Sticky Footer -->
		<div id="footer" class="visible-desktop">
	      	<div class="wrap">
	      		<ul>
	      			<li class="dropdown dropup">
	      				<span data-toggle="dropdown" class="dropdown-toggle glyphicons cogwheel text" title=""><i></i><span class="hidden-phone">Opciones de vista</span></span>
	      				<ul class="dropdown-menu pull-left">
	      					<li class="active"><a href="#" data-toggle="layout" data-layout="fixed" title="">Fija</a></li>
	      					<li><a href="#" data-toggle="layout" data-layout="fluid" title="">Fluida</a></li>
	      				</ul>
	      			</li>
	      			<li class="dropdown dropup">
	      				<span data-toggle="dropdown" class="dropdown-toggle glyphicons settings text" title=""><i></i><span class="hidden-phone">Opciones de menu</span></span>
	      				<ul class="dropdown-menu pull-left">
	      					<li class="active"><a href="#" data-toggle="menuPosition" data-menuPosition="left-menu" title="">Menú izquierdo</a></li>
	      					<li><a href="#" data-toggle="menuPosition" data-menuPosition="right-menu" title="">Menú derecho</a></li>
	      				</ul>
	      			</li>
	      			<li style="visibility:hidden"><a href="documentation.html?lang=en" class="glyphicons circle_question_mark text" title=""><i></i><span class="hidden-phone">Documentation</span></a></li>
	      		</ul>
	      	</div>
	    </div>
				
	</div>
	
	<!-- JQueryUI v1.9.2 -->
	<script src="<?php echo base_url(); ?>assets-admin/theme/scripts/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.min.js"></script>
	
	<!-- JQueryUI Touch Punch -->
	<!-- small hack that enables the use of touch events on sites using the jQuery UI user interface library -->
	<script src="<?php echo base_url(); ?>assets-admin/theme/scripts/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- MiniColors -->
	<script src="<?php echo base_url(); ?>assets-admin/theme/scripts/jquery-miniColors/jquery.miniColors.js"></script>
	
	<!-- Select2 -->
	<script src="<?php echo base_url(); ?>assets-admin/theme/scripts/select2/select2.js"></script>
	
	<!-- Themer -->
	<script>
	var themerPrimaryColor = '#DA4C4C';
	</script>
	<script src="<?php echo base_url(); ?>assets-admin/theme/scripts/jquery.cookie.js"></script>
	<script src="<?php echo base_url(); ?>assets-admin/theme/scripts/themer.js"></script>
	
	<!-- Notyfy -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets-admin/theme/scripts/notyfy/jquery.notyfy.js"></script>
	
	<!-- Dashboard Custom Script -->
	<!--<script type="text/javascript" src="<?php echo base_url(); ?>assets-admin/theme/scripts/index.js"></script> -->
	
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	
	<!-- Resize Script -->
	<script src="<?php echo base_url(); ?>assets-admin/theme/scripts/jquery.ba-resize.js"></script>
	
	<!-- Uniform -->
	<script src="<?php echo base_url(); ?>assets-admin/theme/scripts/pixelmatrix-uniform/jquery.uniform.min.js"></script>
    
    	<!-- DataTables -->
	<script src="<?php echo base_url(); ?>assets-admin/theme/scripts/DataTables/media/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets-admin/theme/scripts/DataTables/media/js/DT_bootstrap.js"></script>
    
    <!-- Form Elements Custom script -->
	<script src="<?php echo base_url(); ?>assets-admin/theme/scripts/form_elements.js" type="text/javascript"></script>

		<!-- jQuery Validate -->
	<script src="<?php echo base_url(); ?>assets-admin/theme/scripts/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets-admin/theme/scripts/form_validator.js" type="text/javascript"></script>

	
	<!-- Bootstrap Script -->
	<script src="<?php echo base_url(); ?>assets-admin/bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Bootstrap Extended -->
	<script src="<?php echo base_url(); ?>assets-admin/bootstrap/extend/bootstrap-select/bootstrap-select.js"></script>
	<script src="<?php echo base_url(); ?>assets-admin/bootstrap/extend/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
	<script src="<?php echo base_url(); ?>assets-admin/bootstrap/extend/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"></script>
	<script src="<?php echo base_url(); ?>assets-admin/bootstrap/extend/jasny-bootstrap/js/jasny-bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets-admin/bootstrap/extend/jasny-bootstrap/js/bootstrap-fileupload.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets-admin/bootstrap/extend/bootbox.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets-admin/bootstrap/extend/bootstrap-wysihtml5/js/wysihtml5-0.3.0_rc2.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets-admin/bootstrap/extend/bootstrap-wysihtml5/js/bootstrap-wysihtml5-0.0.2.js" type="text/javascript"></script>
	
	<!-- Custom Onload Script -->
	<script src="<?php echo base_url(); ?>assets-admin/theme/scripts/load.js"></script>
	
	<!-- Layout Options -->
	<script src="<?php echo base_url(); ?>assets-admin/theme/scripts/layout.js"></script>
	
	<!--<script>
	//Load the Visualization API and the piechart package.
	google.load('visualization', '1.0', {'packages':['table', 'corechart']});
	
	// Set a callback to run when the Google Visualization API is loaded.
	google.setOnLoadCallback(charts.traffic_sources_dataTables.init);
	</script>-->
    
    <!-- UPLOADIFY -->
	<script src="<?php echo base_url(); ?>assets-admin/upload/jquery.uploadifive.min.js"></script>
    
    


</body>
</html>