<link rel="stylesheet" href="<?php echo base_url().'assets-web/css/' ?>themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url().'assets-web/css/' ?>themes/light/light.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url().'assets-web/css/' ?>themes/dark/dark.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url().'assets-web/css/' ?>themes/bar/bar.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url().'assets-web/css/' ?>nivo-slider.css" type="text/css" media="screen" />
<!-- end top -->

<div class="clearfix"></div>
 
<div class="page_title">

	<div class="container">
		<div class="leaft_title"><h1><?php foreach($datos_articulo as $row): ?>
									 	<?php echo ucfirst($row->nombre); ?>
									 <?php endforeach;?>
                                     </h1></div>
        
        
        
        <div class="reght_pagenation"><a href="<?php echo base_url(); ?>">Home</a> <i>/</i> <a href="<?php echo base_url(); ?>">				<?php foreach($datos_categoria as $cat):?>
        
        
									<?php foreach($datos_subcategoria as $row): ?>
									 	<a href="<?php echo base_url().'inicio/listar_categoria/'.$cat->categoria_id.'/'.$row->subcategoria_id.'/'.$row->nombre;?>"><?php echo ucfirst($row->nombre); ?></a>
									 <?php endforeach;?></a><i>/</i><?php foreach($datos_articulo as $row): ?>
									 	<?php echo ucfirst($row->nombre); ?>
									 <?php endforeach;?></div>
                                     
                                     
                                 <?php endforeach;?>
	</div>
</div><!-- end page title --> 

<!-- Contant
======================================= -->

<div class="container">

<div class="content_fullwidth">
    
    	<div class="portfolio_area">	
            <div class="portfolio_area_left">

               <?php if($numero_imagenes == 0): ?> 	
                        	<img src="<?php echo base_url().'uploads/articulo/noimage.png'?>" alt="" data-transition="slideInLeft" />
                <?php else: ?>  
                   <div class="slider-wrapper theme-default">
                   <div id="slider" class="nivoSlider">
                     <?php foreach($articulo_imagen as $row): ?>
                        
                    		
                       			<img src="<?php echo base_url().'uploads/articulo/large/'.$row->file_name; ?>" data-thumb="<?php echo base_url().'uploads/articulo/small/'.$row->file_name; ?>" alt="" data-transition="slideInLeft" /> 
                            
                   		
						
                    <?php endforeach;?> </div></div>
                <?php endif; ?>    
                    
                </div>           

            <div class="portfolio_area_right">
                <?php foreach($articulo as $art):?>
					<?php if(($art->articulo_id == $articulo_id) && ($art->desc != "")):
							echo "<h3>Descripción</h3><p>";
							echo $art->desc; 
							echo "</p>";
						endif;
                endforeach;?>
                
                <div class="project_details"> 
                	<h3>Detalles</h3>
                    <?php foreach($articulo as $art): ?>
                    	<?php if($art->articulo_id == $articulo_id): ?>
                            <?php if($art->marca != ''): 
								echo '<span><strong>Marca</strong><i>'.$art->marca.'</i></span>';
							endif;?>
                            
                            <?php if($art->color != ''): 
								echo '<span><strong>Color</strong><i>'.ucfirst($art->color).'</i></span>';
							endif;?>
                            
                            <?php if($art->medidas != ''): 
								echo '<span><strong>Medidas</strong><i>'.$art->medidas.'</i></span>';
							endif;?> 
                            
                            <?php if(($art->unidades != '') && ($art->unidades != 0)): 
								echo '<span><strong>Unidades</strong><i>'.$art->unidades.'</i></span>';
							endif;?>
                            
                            <?php if($art->precio != ''): 
								echo '<span><strong>Precio</strong><i>'.$art->precio.'€</i></span>';
							endif;?> 
                            
                            <?php if($art->stock != ''): 
								echo '<span><strong>Unidades en almacén</strong><i>'.$art->stock.'</i></span>';
							endif;?>
                            
                            <?php if($art->url != ''): 
								echo '<span><i><a href="'.$art->url.'">Más información</a></i></span>';
							endif;?>
                            
                    	<?php endif; ?>
                    <?php endforeach; ?>
                    
     			  </div>
                
                
                
					<form name="form" method="post" class="form-horizontal" action="<?php echo base_url().'inicio/validar_formulario_articulo'; ?>">  
					<h3 style="margin-top: 30px;">Solicitar información</h3>
						<fieldset>
						
												
						<label for="name" class="blocklabel">Su nombre*</label>
						<p class="" ><input name="name" class="input_bg" type="text" id="name" value=''/></p>
	
						<label for="email" class="blocklabel">E-Mail*</label>
						<p class="" ><input name="email" class="input_bg" type="text" id="email" value='' /></p>

						<label for="message" class="blocklabel">Mensaje*</label>
						<p class=""><textarea name="message" class="textarea_bg" id="message" cols="10" rows="3" ></textarea></p>
						<p>
						<div class="clearfix"></div>
						<input name="Send" type="submit" value="Enviar" class="button medium align" id="send"/></p>
								
						<?php if (validation_errors() == true): ?>
                        <br/>
                        <div id="div4" class="error">
                            <div class="message-box-wrap">
                            <button class="close-but" id="colosebut2">close</button><strong>Error</strong>
          				
                        <?php echo validation_errors(); ?>
                        </div>
						</div>
                        
                       <?php endif;
                       
                       if(isset($msg)): ?>
                            <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php echo $msg; ?>
                            </div>
                        <?php endif; ?>
				
						</fieldset>
						
						</form> 
                
               
            </div>
          </div>    
          </div>
          </div>
          </div><!-- end section -->
          
          
<script type="text/javascript" src="<?php echo base_url().'assets-web/'?>js/universal/jquery.js"></script>
<script type="text/javascript" src = "<?php echo base_url().'assets-web/'?>js/nivo-slider/jquery.nivo.slider.js"></script>         
                            
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({controlNavThumbsFromRel:true, effect:'fade', manualAdvance:true});
    });
    </script>   
          
          <div class="clearfix divider_line02"></div>
</div>

<div class="clearfix mar_top2"></div>
