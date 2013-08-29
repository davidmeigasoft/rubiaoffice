<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<title>Galioffice</title>
	
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
    
    <!-- Favicon --> 
	<link rel="shortcut icon" href="<?php echo base_url().'assets-web/'; ?>images/favicon.ico">
    
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- Favicon -->
  	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url().'assets-web/'; ?>images/favicon.ico">
    
    <!-- ######### CSS STYLES ######### -->
	
    <link rel="stylesheet" href="<?php echo base_url().'assets-web/'; ?>css/reset.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url().'assets-web/'; ?>css/style.css" type="text/css" />
    
    <!-- responsive devices styles -->
	<link rel="stylesheet" media="screen" href="<?php echo base_url().'assets-web/'; ?>css/responsive-leyouts.css" type="text/css" />   

<!-- just remove the below comments witch color skin you want to use -->
    <!--<link rel="stylesheet" href="styles/colors/lightblue.css" />-->
    <!--<link rel="stylesheet" href="styles/colors/lightgreen.css" />-->
    <!--<link rel="stylesheet" href="styles/colors/blue.css" />-->
    <!--<link rel="stylesheet" href="styles/colors/green.css" />-->
    <!--<link rel="stylesheet" href="styles/colors/red.css" />-->
    <!--<link rel="stylesheet" href="styles/colors/cyan.css" />-->
    <!--<link rel="stylesheet" href="styles/colors/purple.css" />-->
    <!--<link rel="stylesheet" href="styles/colors/yellow.css" />-->
    <!--<link rel="stylesheet" href="styles/colors/brown.css" />-->   
    
    <link rel="stylesheet" href="<?php echo base_url().'assets-web/'; ?>css/colors/cyan.css" />
    
    <!-- style switcher -->
    <link rel = "stylesheet" media = "screen" href = "<?php echo base_url().'assets-web/'; ?>js/style-switcher/color-switcher.css" />
	  
    <!-- jquery jcarousel -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets-web/'; ?>js/jcarousel/skin.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets-web/'; ?>js/jcarousel/skintwo.css" />
    
        <!-- REVOLUTION SLIDER -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets-web/'; ?>js/revolutionslider/css/fullwidth.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets-web/'; ?>js/revolutionslider/rs-plugin/css/settings.css" media="screen" />

    
    <!-- iosslider -->
	<link rel = "stylesheet" media = "screen" href = "<?php echo base_url().'assets-web/'; ?>js/iosslider/common.css" />
    
    <!-- Nivo-slider -->
	<link rel = "stylesheet" media = "screen" href = "<?php echo base_url().'assets-web/'; ?>js/nivo-slider/nivo-slider.css" />
    <link rel = "stylesheet" media = "screen" href = "<?php echo base_url().'assets-web/'; ?>js/nivo-slider/themes/dark/dark.css" />
    
   
</head>

<body>



<div class="site_wrapper">

	<div class="container">
    
    	<div class="top_section">
        
           <div class="buscar">
           		<form><input type="text" class="buscador"/></form>
                <div id="icono_lupa">
                <img src="..\..\..\assets-web\images\elements\search.png"/>
                </div>
           </div>
           
            <div class="logo_innerpage"><a href="<?php echo base_url(); ?>" class="logo_innerpage"><h1>Gal<i>i</i>office</h1></a>
             <small id="subtitulo">Mobiliario de oficina</small>   
            </div><!-- end logo -->
           
           <style type="text/css">
           .buscar
		   	{
			width: 150px;
			height: 30px;
			/*background-color: blue;*/
			position: absolute;
			left: 800px;
			top: 15px;
			}
			
			.buscador
			{
			width: 115px;
			float: left;
			}
			
			.buscar #icono_lupa
			{
			width: 30px;
			height: 30px;
			/*background-color: green;*/
			float: right;
			background-image: url(..\..\..\assets-web\images\elements\search.png) no-repeat;
			}

           </style>
           

           
           
        <nav id="access" class="access" role="navigation">
        <div id="menu" class="menu">
        	
        	<ul id="tiny">
                 
                <li><a <?php if($this->uri->segment(2)=='home'): echo 'class = "activo"'; endif;?> href="<?php echo base_url().'inicio/home'; ?>">Empresa</a></li>  

    
    			
    			<?php foreach($familia as $fam):?>
                
                <li><a href=""><?php echo $fam->nombre;?></a>
                    <ul style="margin-top: 3px;">
                    
                    <?php foreach($categoria as $cat): ?>
                    
                    	<?php if($cat->familia == $fam->familia_id): ?>
                        <li><a href="<?php echo base_url().'inicio/categoria/'.$cat->categoria_id.'/'.$cat->nombre; ?>"><?php echo $cat->nombre; ?></a>
                        
							<ul style="margin-top: 0px;">
                            	<?php foreach($subcategoria as $sub): ?>
                            	<?php if($sub->categoria == $cat->categoria_id): ?>
                                <li><a href="<?php echo base_url().'inicio/subcategoria/'.$sub->subcategoria_id.'/'.$sub->nombre; ?>"><?php echo $sub->nombre; ?></a>
                                </li>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        
                        </li>
                    	<?php endif; ?>
                    
                    <?php endforeach; ?>                    
                    
                   	</ul>
                </li>	
                
                <?php endforeach; ?>
    
    
    
    
    
                <?php /*?><?php foreach($categoria as $cat): ?>          
                
                <li><a  <?php if ($cat->categoria_id == $categoria_id): echo 'class = "activo"'; endif; ?> href="<?php echo base_url().'inicio/categoria/'.$cat->categoria_id.'/'.$cat->nombre; ?>"><?php echo $cat->nombre;?></a>
                    <ul style="margin-top: 3px;">
                    <?php foreach($subcategoria as $subcat): ?>
                    <?php if($cat->categoria_id == $subcat->categoria):?>
                        <li><a href="<?php echo base_url().'inicio/subcategoria/'.$subcat->subcategoria_id.'/'.$subcat->nombre; ?>"><?php echo $subcat->nombre; ?></a>
                    <?php endif; ?>
                    <?php endforeach; ?>
                   	</ul>
                  
                 <?php endforeach; ?><?php */?>
    
    
                <li><a <?php if($this->uri->segment(2)=='contacto'): echo 'class = "activo"'; endif;?> href="<?php echo base_url().'inicio/contacto'; ?>">Contacto</a></li>
            </ul>
          
		</div>
        
  	</nav>
    
 </div>
 
</div>
<!-- end top -->

