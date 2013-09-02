<div class="clearfix"></div>
 
<div class="page_title">

	<div class="container">
		<div class="leaft_title"><h1><?php foreach($datos_familia as $row): ?>
        	<?php echo ucfirst($row->nombre);?>
        <?php endforeach; ?>
        </h1></div>
        <div class="reght_pagenation"><a href="<?php echo base_url(); ?>">Inicio</a><i>/</i> 
        
        <?php foreach($datos_familia as $row): ?>
        	<?php echo ucfirst($row->nombre);?>
        <?php endforeach; ?>
        
        
        
        </div>
	</div>
</div><!-- end page title --> 

<!-- Contant
======================================= -->

<div class="container">


<div class="left_sidebar">

	<div class="sidebar_widget">
    	<div class="sidebar_title">
		<?php foreach($datos_familia as $row):?>
        	<h3><?php echo ucfirst($row->nombre) ?></h3>
		<?php endforeach; ?>
        </div>
        
		<ul class="arrows_list1">		

        <?php foreach($menu_familia_cat as $cat): ?>
          
			<li><a href="<?php echo base_url().'inicio/categoria/'.$cat->categoria_id.'/'.$cat->cat_nombre; ?>"><?php echo ucfirst($cat->cat_nombre); ?></a></li>
            	<ul style="margin-left: 20px;">
                
                	<?php foreach($menu_familia_sub as $sub): ?>
                    	<?php if($cat->categoria_id == $sub->categoria_id): ?>
                    	<li><a href="<?php echo base_url().'inicio/subcategoria/'.$sub->subcategoria_id.'/'.$sub->sub_nombre; ?>"><?php echo ucfirst($sub->sub_nombre); ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                
                	
                </ul>
        <?php endforeach; ?>
		</ul>
	</div><!-- end section -->
    
    <div class="clearfix mar_top3"></div>
    
	
</div><!-- end left sidebar -->


<div class="content_right">
      
      
      
 <div id="opciones_visualizacion" class="three_foourth" >
    	
        
        <div class="estilo_select">
         <?php foreach($datos_familia as $row):?> 
        <form id="ordenacion"  name="ordenar" action="<?php echo base_url().'inicio/ordenar_articulos_familia/'.$row->familia_id; ?>" method="post"> 
        
        <select onchange="this.form.submit()" name="ordenar" type="submit">
        	<option selected value="">Opciones de ordenación</option>        
        	<option value="az">Orden alfabético A-Z</option>
            <option value="za">Orden alfabético Z-A</option>
            <option value="caros">Más caros</option>
            <option value="baratos">Más baratos</option>
            <option value="recientes"> Más recientes</option>
        </select>
        
		</form>
        <?php endforeach; ?>
 		</div>
        
        <div class="boton_vista_inactivo" id="cuadricula"><span>Mostrar en cuadrícula</span></div>    
        <div class="boton_vista_activo" id="lista"><span>Mostrar en lista</span></div>
    </div>
      
     
      
    <div id="itemContainer"> 

    <?php foreach($listado_articulos_familia as $row): ?>
    
    <div class="blog_post"><!-- /# post -->	
        <div class="blog_postcontent">
            <div class="image_frame small">
             <?php if($row->url != ""): ?>
            
            <a href="http://<?php echo $row->url; ?>" target="_blank"> <img src="<?php echo base_url().'uploads/articulo/link_mid.png';?>" alt="Enlace externo"/>		
            
            </div>
            <div class="post_info_content_small">
            <h3><a href="http://<?php $row->url; ?>"><?php echo ucfirst($row->articulo_nombre); ?></a></h3>
                
            <div class="clearfix"></div>
            
             <p><a href="http://<?php $row->url; ?>"><?php echo $row->url; ?></a></p><br>
            
            <?php else: ?>
            
            
				<?php if($row->file_name != ""): ?>
                	<a href="<?php echo base_url().'inicio/articulo/'.$row->articulo_id.'/'.$row->articulo_nombre;?>">
                    <img src="<?php echo base_url().'uploads/articulo/mid/'.$row->file_name; ?>" alt="Imagen de artículo"/>
                    </a>
                <?php else: ?>
                
                	<a href="<?php echo base_url().'inicio/articulo/'.$row->articulo_id.'/'.$row->articulo_nombre;?>">
                    <img src="<?php echo base_url().'uploads/articulo/noimage_min.png';?>" alt="Imagen del artículo"/>
                    </a>
                <?php endif;?>
                </div>
                
                <div class="post_info_content_small">
                <h3><a href="<?php echo base_url().'inicio/articulo/'.$row->articulo_id.'/'.$row->articulo_nombre;?>"><?php echo ucfirst($row->articulo_nombre); ?></a></h3>
                
                <div class="clearfix"></div>
                
                <p><?php echo word_limiter($row->articulo_desc, 15); ?></p><br>
            
            
            <?php endif; ?>
            <!--<a class="but_info" href="master.php">+ Info</a> &nbsp; <a class="but_pdf" href="#">Descarga PDF</a>-->
            
            </div>
        </div>
    </div><!-- /# end post -->

	<?php endforeach; ?>
    </div>
    </div>
        

</div><!-- /# end post -->
                
<div class="clearfix divider_line02"></div>

</div>


<div class="container_holder">
	<div class="holder" style="text-align: center; float: right; height: 50px; width: 100%;"></div>
</div>     
  
       
<?php /*?><script type="text/javascript" src="<?php echo base_url().'assets-web/'?>js/navigation/jquery-1.8.0.js"></script>
<script type="text/javascript" src="<?php echo base_url().'assets-web/'?>js/navigation/jPages.js"></script><?php */?>
  
<script type="text/javascript" src="<?php echo base_url().'assets-web/'?>js/navigation/jquery-1.8.0.js"></script>

  <script type="text/javascript" src="<?php echo base_url().'assets-web/'?>js/navigation/jPages.js"></script>
  
       
    <script>
    
        $(function() {
            /* initiate plugin */
            $("div.holder").jPages({
                containerID: "itemContainer",
                 perPage   : 6
            });
        });
        
    </script>


    
<style type="text/css">



</style>


    

  

<div class="clearfix mar_top2">      </div>  
        
</div><!-- end content left side area -->

</div><!-- end content left side area -->


</div>

<div class="clearfix mar_top2"></div>				