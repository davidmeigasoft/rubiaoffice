<!-- SubFooter-->

<div class="container">

	<div class="sub_footer">
    
        <div class="one_full">
			
            <div class="recent_blogs">
            	<strong class="title">Últimos productos</strong>
                <div class="clearfix mar_top12"></div>
                <div class="contenedor_ultimos_productos"/>
                <ul id="listado_ultimos_productos" class="jcarousel-skin-tango-footer">
                 
                
                <?php foreach($ultimos_articulos as $row): ?>
                
                <li class="ultimos_productos">
                    
                	<a href="<?php echo base_url().'inicio/articulo/'.$row->categoria_id.'/'.$row->subcategoria_id.'/'.$row->articulo_nombre.'/'.$row->articulo_id;?>">
                    
                    
                    <?php if($row->file_name != ""): ?>
                    <img src="<?php echo base_url();?>/image.php?width=100px&amp;cropratio=3:2&amp;image=<?php echo base_url().'uploads/articulo/mid/'; echo $row->file_name;?>" alt="" />
                    
                    <?php else: ?>
                    <img src="<?php echo base_url();?>/image.php?width=100px&amp;cropratio=3:2&amp;image=<?php echo base_url().'uploads/articulo/noimage_min.png'; ?>"/>
                    
                    
                    <?php endif; ?>
                    </a>
                    
                    <span class="title"><a href="<?php echo base_url().'inicio/articulo/'.$row->categoria_id.'/'.$row->subcategoria_id.'/'.$row->articulo_nombre.'/'.$row->articulo_id;?>"><?php echo ucfirst($row->articulo_nombre); ?></a></span>
                    
                </li>
                
                <?php endforeach; ?>

                </ul>   
              </div>
            </div></div>
              
        </div><!-- end recent blogs or news -->
        
        
        <div class="one_half last">
            <!-- end what peopel says -->
        
        
	</div>
</div>














<!--<div class="sub_footer">
    
        <div class="one_half">
			
            <div class="recent_blogs">
            	<strong class="title">Productos nuevos</strong>
                <div class="clearfix mar_top12"></div>
                <ul>
                	<li><a href="#"><img src="<?php//echo base_url().'assets-web/'; ?>images/site-img13.jpg" alt="" /></a></li>
                    <li class="title"><a href="#">Discos duros</a></li>
                </ul>
                	<div class="clearfix mar_top2"></div>
                <ul>
                	<li><a href="#"><img src="<?php//echo base_url().'assets-web/'; ?>images/site-img14.jpg" alt="" /></a></li>
                    <li class="title"><a href="#">Material de oficina</a></li>
                </ul>
                	<div class="clearfix mar_top2"></div>
                <ul>
                	<li><a href="#"><img src="<?php//echo base_url().'assets-web/'; ?>images/site-img15.jpg" alt="" /></a></li>
                    <li class="title"><a href="#">Proyectores</a></li>
                </ul>      
            </div>
                
        </div>
        
        
        <div class="one_half last">
            <div class="what_people_says">
            	<strong class="title">Nuestros clientes</strong>
                <div class="clearfix mar_top12"></div>
                
                <ul id="mycarouseltwo" class="jcarousel-skin-tango-two">
            
                    <li>
                        <p><img src="<?php// echo  base_url().'assets-web/'; ?>images/quotes.png" alt="" class="img_left1" />Atención personalizada, gran stock</p>
                        <div class="who_peoarea">
                        <img src="<?php// echo base_url().'assets-web/'; ?>images/site-img16.png" alt="" class="client_img" />
                        <strong>Meigasoft <em>(www.website.com)</em> <i>Cliente</i></strong>
                        </div>
                    </li>
        
    			</ul>
            </div>     
        </div>
        
        
	</div>
</div>-->













<!--
<div class="container">

	<div class="twitter_feed"></div>

</div> end latest tweets -->



<!-- Footer
======================================= -->

<div class="container">
    <div id="footer">
    	<div class="down_arrow"></div>
        
        <div class=" one_half">
        	<div class="footer_logo">Galioffice<i>.es</i></div>
            <ul class="address-liste">
            	<li class="icon1">Santiago de Compostela,<br />15702</li>
                <li class="icon2">981 555 555</li>
                <li class="icon3">981 555 555</li>
                <li class="icon4"><a href="mailto:info@galioficce.com">galioffice@galioffice.es</a></li>
            </ul>
        </div><!-- end section -->
        
        
        <div class="one_half last">
        
        	<div class="newsletter">
        		<h6>Recibir newsletter</h6>
            	Indíquenos su email si desea recibir ofertas
                <div class="clearfix mar_top1"></div>
                <form method="get" action="http://gsrthemes.com/aivan/html/home.html">            
					<input class="enter_email_input" name="samplees" id="samplees" value="Please enter your email..." onFocus="if(this.value == 'Please enter your email...') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Please enter your email...';}" type="text">			
					<input name="" value="subscribe" class="input_submit" type="submit">
				</form>          
       		</div><!-- end newsletter sign up -->
             
            <div class="clearfix mar_top2"></div>
             
            <div class="copyright">
            
            	Copyright © 2013 Galioffice.es Todos los derechos reservados<br />
Condiciones del servicio | Politica de privacidad
            
            </div><!-- end copyrights -->
        </div>
    </div>
    <div class="footer_shadow"></div>
</div>

  
<!-- style switcher -->
<script type="text/javascript" src="<?php echo base_url().'assets-web/'; ?>js/style-switcher/styleswitcher.js"></script>
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

<a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->
</div>

<!-- ######### JS FILES ######### -->
<!-- ######### JS FILES ######### -->
<!-- get jQuery from the google apis -->
<!--<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>-->

<!-- get jQuery from the google apis -->
<!--<script type="text/javascript" src="<?php// echo base_url().'assets-web/'?>js/universal/jquery.js"></script>-->
<script type="text/javascript" src="<?php echo base_url().'assets-web/'?>js/navigation/jquery-1.8.0.js"></script>

  <script type="text/javascript" src="<?php echo base_url().'assets-web/'?>js/navigation/jPages.js"></script>

<!-- Nivo-slider plugin -->
<!--<script type="text/javascript" src = "<?php//echo base_url().'assets-web/'?>js/nivo-slider/jquery.nivo.slider.pack.js"></script>-->
<script type="text/javascript" src = "<?php echo base_url().'assets-web/'?>js/nivo-slider/jquery.nivo.slider.js"></script>

<!-- iosSlider plugin -->
<script src = "<?php echo base_url().'assets-web/'?>js/iosslider/_src/jquery.iosslider.js"></script>
<script src = "<?php echo base_url().'assets-web/'?>js/iosslider/_lib/jquery.easing-1.3.js"></script>
<script src = "<?php echo base_url().'assets-web/'?>js/iosslider/_src/custom.js"></script>

<!-- style switcher -->
<script src="<?php echo base_url().'assets-web/'?>js/style-switcher/jquery-1.js"></script>
<script src="<?php echo base_url().'assets-web/'?>js/style-switcher/styleselector.js"></script>

<!-- main menu -->
<script type="text/javascript" src="<?php echo base_url().'assets-web/'?>js/mainmenu/ddsmoothmenu.js"></script>
<!--<script type="text/javascript" src="<?//php echo base_url().'assets-web/'?>js/mainmenu/jquery-1.7.1.min.js"></script>-->
<script type="text/javascript" src="<?php echo base_url().'assets-web/'?>js/mainmenu/selectnav.js"></script>

<script type="text/javascript" src="<?php echo base_url().'assets-web/'?>js/mainmenu/scripts.js"></script>

<!-- jquery jcarousel -->
<script type="text/javascript" src="<?php echo base_url().'assets-web/'?>js/jcarousel/jquery.jcarousel.min.js"></script>

<!-- REVOLUTION SLIDER -->
<script type="text/javascript" src="<?php echo base_url().'assets-web/'?>js/revolutionslider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="<?php echo base_url().'assets-web/'?>js/revolutionslider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- scroll up -->
<script type="text/javascript">
    $(document).ready(function(){
 
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
 
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 500);
            return false;
        });
 
    });
</script>

<!-- jquery jcarousel -->
<script type="text/javascript">

	jQuery(document).ready(function() {
			jQuery('#mycarousel').jcarousel();
	});
	
	jQuery(document).ready(function() {
			jQuery('#listado_ultimos_productos').jcarousel();
	});
	
</script>


<!-- Cambia visualización de artículos a  -->
    <script type="text/javascript">

		 $(document).ready(function(){
			 $('#cuadricula').click(function(){
				 $('.blog_post').addClass('cuadricula_post');
				 $('.post_info_content_small').addClass('cuadricula_info_small');
				 $('.blog_postcontent .image_frame.small').css({'width': '90%'});
				 
				 $('#cuadricula').removeClass('boton_vista_inactivo').addClass('boton_vista_activo'); 
				 $('#lista').removeClass('boton_vista_activo').addClass('boton_vista_inactivo'); 
				 });
				 

			 
			
			 $('#lista').click(function(){

				 $('.blog_post').removeClass('cuadricula_post');
				 //$('.image_frame.small').addClass('cuadricula_info_small');
				 $('.post_info_content_small').removeClass('cuadricula_info_small');
				 //$('.blog_post').css({'width': '33%', 'height':'300px'});
				 $('.blog_postcontent .image_frame.small').css({'width': '43%'});
				 //$('.post_info_content_small').css({'width': '90%'});
				 $('#lista').removeClass('boton_vista_inactivo').addClass('boton_vista_activo'); 
				 $('#cuadricula').removeClass('boton_vista_activo').addClass('boton_vista_inactivo'); 
				 });
				 

			 });
	</script>


<!-- Paginación -->

    <script>
    
        $(document).ready(function(){
				//$("#opciones_visualizacion p").text(i);
				
				/* initiate plugin */
				$("div.holder").jPages({
					containerID: "itemContainer",
					 perPage   : 3
				});
				
			});
		});
        
    </script>




<!-- nivo-slider -->
<script type="text/javascript">/*
jQuery(window).load(function(){
    jQuery("#n-slider").nivoSlider({
        effect:"fade",
        slices:10,
        boxCols:10,
        boxRows:10,
        animSpeed:600,
        pauseTime:5000,
        startSlide:0,
        directionNav:true,
        controlNav:true,
        controlNavThumbs:false,
        pauseOnHover:false,
        manualAdvance:false
    });
});*/
</script>      

<script type="text/javascript">

		var tpj=jQuery;
		tpj.noConflict();

		tpj(document).ready(function() {

		if (tpj.fn.cssOriginal!=undefined)
			tpj.fn.css = tpj.fn.cssOriginal;

			tpj('.fullwidthbanner').revolution(
				{
					delay:9000,
					startwidth:1000,
					startheight:570,

					onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

					thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
					thumbHeight:50,
					thumbAmount:3,

					hideThumbs:200,
					navigationType:"none",				// bullet, thumb, none
					navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

					navigationStyle:"round",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


					navigationHAlign:"right",				// Vertical Align top,center,bottom
					navigationVAlign:"bottom",					// Horizontal Align left,center,right
					navigationHOffset:50,
					navigationVOffset:55,

					soloArrowLeftHalign:"left",
					soloArrowLeftValign:"center",
					soloArrowLeftHOffset:0,
					soloArrowLeftVOffset:0,

					soloArrowRightHalign:"right",
					soloArrowRightValign:"center",
					soloArrowRightHOffset:0,
					soloArrowRightVOffset:0,

					touchenabled:"on",						// Enable Swipe Function : on/off



					stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
					stopAfterLoops:0,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic



					fullWidth:"on",

					shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

				});




	});
	</script>

</body>
</html>
