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
	
    <!-- iosslider -->
	<link rel = "stylesheet" media = "screen" href = "<?php echo base_url().'assets-web/'; ?>js/iosslider/common.css" />
    
    
</head>

<body>

<div class="site_wrapper">

	<div class="container_index">
    
    	<div class="top_section_home">
        <div id="logo"><a href="<?php echo base_url(); ?>" class="site_logo"><h1>Gal<i>i</i>office <small>Mobiliario de oficina</small></h1></a></div><!-- end logo -->
            
            <div id="site_menu">
                <ul>
                <li><a href="<?php echo base_url().'inicio/home'; ?>" class="active">Empresa</a></li>
                
				<?php foreach($categoria as $cat): ?>
                <li><a href="<?php echo base_url().'inicio/categoria/'.$cat->categoria_id.'/'.$cat->nombre; ?>"><?php echo ucfirst($cat->nombre);?></a>
                 <?php endforeach; ?>
                 
                <li><a href="<?php echo base_url().'inicio/contacto'; ?>">Contacto</a></li>
                </ul>
            </div><!-- end menu -->
            
        </div>
    
    </div>

<!-- end top -->

<div class="clearfix"></div>
 
<!-- Slider
======================================= -->  

<div class="container_full">
	
     <div class = 'fluidHeight'>
			
			<div class = 'sliderContainer'>
			
				<div class = 'iosSlider'>
				
					<div class = 'slider'>
					
                    <?php foreach($elemento as $row): ?>
                    
						<div class = 'item item1'>
							<div class = 'inner'>
                            	<img src="<?php echo base_url().'uploads/elementos_index/'.$row->img; ?>"/>					
								<div class = 'text1'><span><?php echo $row->titulo; ?></span></div>
								<div class = 'text2'><span><?php echo $row->subtitulo; ?></span></div>
								<div class = 'text3'><span><?php echo $row->desc_1; ?></span></div>
                                <div class="text4"><span><?php echo $row->desc_2; ?></span></div>
                                <div class="text5"><a href="<?php echo $row->url; ?>" class="get_button">Ver productos</a></div>
                                
							</div>
						</div>
						
					<?php endforeach; ?>

                        
					</div>
				</div>
				
                <div class="container_index">
                    <div class = 'slideSelectors'>
                        <div class="placed" style="width:400px">
                        
                        <?php foreach ($categoria as $row): ?>
                        
                            <div class = 'item'>
                            <a href="<?php  echo base_url().'inicio/categoria/'.$row->categoria_id.'/'.$row->nombre; ?>">
                            <img src="image.php?width=92px&amp;cropratio=1:1&amp;image=<?php echo base_url().'uploads/categoria/'.$row->img; ?>" title="<?php echo ucfirst($row->nombre); ?>"/>
                            </a>
                            </div>
                            
						<?php endforeach; ?>

                        </div>
                    </div>
                </div>
			</div>
		</div>
</div><!-- end slider -->

<!-- Footer
======================================= -->

<div class="footer_home">

	<div class="container_index">
    
        <div class="contactus">
            
            <ul>
			<li class="address">Santiago de Compostela<br />15702 Milladoiro</li>
            <li class="phone">981 555 555</li>
            <li class="fax">981 555 555</li>
            <li class="email"><a href="mailto:yourmailid@company.com">galioffice@galioffice.com</a></li>
			</ul>
            
            <h4 class="title">Contactar<br>con nosotros</h4>
            
		</div>
        
        
    	<div class="socials_home">
        	
            
            
		</div>
                 
    </div>

</div>

  
<!-- style switcher -->
<script type="text/javascript" src="<?php echo base_url().'assets-web/'?>js/style-switcher/styleswitcher.js"></script>
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url().'assets-web/'; ?>css/colors/lightblue.css" title="lightblue" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url().'assets-web/'; ?>css/colors/lightgreen.css" title="lightgreen" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url().'assets-web/'; ?>css/colors/blue.css" title="blue" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url().'assets-web/'; ?>css/colors/green.css" title="green" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url().'assets-web/'; ?>css/colors/red.css" title="red" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url().'assets-web/'; ?>css/colors/cyan.css" title="cyan" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url().'assets-web/'; ?>css/colors/purple.css" title="purple" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url().'assets-web/'; ?>css/colors/yellow.css" title="yellow" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url().'assets-web/'; ?>css/colors/brown.css" title="brown" />

<div id="style-selector" style="display:none">
    <div class="style-selector-wrapper">
	<span class="title">Choose Theme Options</span>
	<div>        
<span class="title-sub"></span>

<span class="title-sub2">Predefined Color Skins</span>

<ul class="styles">     
    <li><a href="#" onClick="setActiveStyleSheet('default'); return false;"><span class="pre-color-skin1"></span></a></li>
    <li><a href="#" onClick="setActiveStyleSheet('lightblue'); return false;"><span class="pre-color-skin2"></span></a></li>
    <li><a href="#" onClick="setActiveStyleSheet('lightgreen'); return false;"><span class="pre-color-skin3"></span></a></li>
    <li><a href="#" onClick="setActiveStyleSheet('blue'); return false;"><span class="pre-color-skin4"></span></a></li>
    <li><a href="#" onClick="setActiveStyleSheet('green'); return false;"><span class="pre-color-skin5"></span></a></li>
    <li><a href="#" onClick="setActiveStyleSheet('red'); return false;"><span class="pre-color-skin6"></span></a></li>
    <li><a href="#" onClick="setActiveStyleSheet('cyan'); return false;"><span class="pre-color-skin7"></span></a></li>
    <li><a href="#" onClick="setActiveStyleSheet('purple'); return false;"><span class="pre-color-skin8"></span></a></li>
    <li><a href="#" onClick="setActiveStyleSheet('yellow'); return false;"><span class="pre-color-skin9"></span></a></li>
    <li><a href="#" onClick="setActiveStyleSheet('brown'); return false;"><span class="pre-color-skin10"></span></a></li>
</ul>
<!-- end Predefined Color Skins --> 

<a href="#" class="close icon-chevron-right"></a>  
    
</div>
</div>
</div><!-- end style switcher -->


</div>

    
<!-- ######### JS FILES ######### -->
<!-- get jQuery from the google apis -->
<script type="text/javascript" src="<?php echo base_url().'assets-web/'?>js/universal/jquery.js"></script>

<!-- style switcher -->
<script src="<?php echo base_url().'assets-web/'?>js/style-switcher/jquery-1.js"></script>
<script src="<?php echo base_url().'assets-web/'?>js/style-switcher/styleselector.js"></script>

<!-- iosSlider plugin -->
<script src = "<?php echo base_url().'assets-web/'?>js/iosslider/_src/jquery.iosslider.js"></script>
<script src = "<?php echo base_url().'assets-web/'?>js/iosslider/_lib/jquery.easing-1.3.js"></script>
<script src = "<?php echo base_url().'assets-web/'?>js/iosslider/_src/custom.js"></script>

<script src="<?php echo base_url().'assets-web/'?>js/style-switcher/styleswitcher.js"></script>

</body>
</html>
