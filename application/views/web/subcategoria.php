<div class="clearfix"></div>
 
<div class="page_title">

	<div class="container">
		<div class="leaft_title"><h1><?php foreach ($datos_subcategoria as $row): echo ucfirst($row->nombre); endforeach;?></h1></div>
        
        
        
        <div class="reght_pagenation"><a href="<?php echo base_url(); ?>">Home</a><i>/</i>
        
         <?php foreach ($datos_categoria as $row):?>
        <a href="<?php echo base_url().'inicio/categoria/'.$row->categoria_id.'/'.$row->nombre;?>">
        <?php echo ucfirst($row->nombre); endforeach; ?>
        </a>
        
        <i>/</i>
		<?php foreach ($datos_subcategoria as $row): echo ucfirst($row->nombre); endforeach; ?>
        </div>
       
	</div>
</div><!-- end page title --> 

<!-- Contant
======================================= -->

<div class="container">

<!-- left sidebar starts -->
<div class="left_sidebar">

	<div class="sidebar_widget">
    	<div class="sidebar_title">
		<?php foreach($datos_categoria as $row):?>
        	<h3><?php echo ucfirst($row->nombre) ?></h3>
		<?php endforeach; ?>
        </div>
        
		<ul class="arrows_list1">		

        	<?php foreach($menu as $subcat): ?>
          
				<li><a href="<?php echo base_url().'inicio/listar_categoria/'.$subcat->categoria.'/'.$subcat->subcategoria_id.'/'.$subcat->nombre; ?>"><?php echo ucfirst($subcat->nombre); ?></a></li>
                
            <?php endforeach;?>
		</ul>
	</div><!-- end section -->
    
    <div class="clearfix mar_top3"></div>
    
    <div class="sidebar_widget">
    
    	<div class="sidebar_title"><h3>Articulos recientes</h3></div>
        
			<ul class="recent_posts_list">
        
            <?php /*?><?php foreach($ultimos_articulos as $art): ?>
			
            <li><?php foreach($imagen_mid as $img): ?>
				<?php if($art->articulo_id == $img->articulo): ?>
            		<span><a href="#"><img src="<?php  echo base_url().'uploads/articulo/small/'.$img->file_name; ?>"  alt="" /></a></span>
                <?php else: ?>
                	<span><a href="#"><img src="<?php  echo base_url().'uploads/articulo/noimage_small.png'; ?>"  alt="" /></a></span>
            	<?php endif; ?>
				<?php endforeach; ?>
            
            <a href="<?php echo base_url(); ?>"> <?php echo $art->nombre; ?></a>
              <i><?php echo word_limiter($art->desc, 10); ?></i> 
			  
            </li>
            
<?php endforeach;?><?php */?>



	<?php foreach($ultimos_articulos_sub as $row): ?>
    	<li><span><a href="#">
        
        <?php if($row->file_name != ""): ?>
        <img src="<?php echo base_url();?>/image.php?width=50px&amp;cropratio=1:1&amp;image=<?php echo base_url().'uploads/articulo/mid/'.$row->file_name; ?>"  alt="" />
        <?php else: ?>
        
        <?php if($row->file_name == "" && $row->url != ""): ?>
        <img src="<?php echo base_url().'uploads/articulo/link_small.png';?> "/>
        <?php else: ?>
        
        <img src="<?php echo base_url();?>/image.php?width=50px&amp;cropratio=1:1&amp;image=<?php echo base_url().'uploads/articulo/noimage_small.png'; ?>"  alt="" />
        <?php endif; endif; ?>
        </a></span>
         <a href="<?php echo base_url().'inicio/articulo/'.$row->categoria_id.'/'.$row->subcategoria_id.'/'.$row->articulo_nombre.'/'.$row->articulo_id;?>"> <?php echo $row->articulo_nombre; ?></a>
              <i><?php echo word_limiter($row->articulo_desc, 10); ?></i>
        </li>
        

        
        
	
	<?php endforeach; ?>
    </ul>
                
	</div><!-- end section -->
	
</div><!-- end left sidebar -->


<div class="content_right">

		<!--section -->
        	<!--<div class="one_fill">
                <ul class="gallery clearfix">
                    <li>
                        <ul class="gallery clearfix">
                            <li class="border_threecol"><a href="images/blog/blog-img27.jpg" title="prettyPhoto"><img src="images/blog/blog-img27.jpg" alt="" /></a>
                            <strong>Publishing has packages</strong>
                           <p>There are many variations passages of Lorem Ipsum available but the majority have suffered alteration some form inject.<br><br>
                           <a class="but_info" href="#">Info</a></p>
                            </li>
                            
                            <li class="border_threecol"><a href="images/blog/blog-img27.jpg" title="prettyPhoto"><img src="images/blog/blog-img27.jpg" alt="" /></a>
                            <strong>Publishing has packages</strong>
                           <p>There are many variations passages of Lorem Ipsum available but the majority have suffered alteration some form inject.<br><br>
                           <a class="but_info" href="#">Info</a></p>
                            </li>
                            
                            <li class="border_threecol"><a href="images/blog/blog-img27.jpg" title="prettyPhoto"><img src="images/blog/blog-img27.jpg" alt="" /></a>
                            <strong>Publishing has packages</strong>
                           <p>There are many variations passages of Lorem Ipsum available but the majority have suffered alteration some form inject.<br><br>
                           <a class="but_info" href="#">Info</a></p>
                            </li>
                            
                            <div class="mar_top3"></div>
                            
                            <li class="border_threecol"><a href="images/blog/blog-img27.jpg" title="prettyPhoto"><img src="images/blog/blog-img27.jpg" alt="" /></a>
                            <strong>Publishing has packages</strong>
                           <p>There are many variations passages of Lorem Ipsum available but the majority have suffered alteration some form inject.<br><br>
                           <a class="but_info" href="#">Info</a></p>
                            </li>
                            
                        </ul>
                    </li>
                </ul>
              </div>-->
              <!-- end section -->
 
    <div id="opciones_visualizacion" class="three_foourth" >  
    
    	 <div class="estilo_select">
         <?php foreach($datos_subcategoria as $row):?> 
        <form id="ordenacion"  name="ordenar" action="<?php echo base_url().'inicio/ordenar_articulos_subcategoria/'.$row->categoria.'/'.$row->subcategoria_id.'/'.$row->nombre; ?>" method="post"> 
        
        <select onchange="this.form.submit()" name="ordenar" type="submit">
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
       
    <?php foreach($listado_articulos as $row): ?>
    
    <div class="blog_post"><!-- /# post -->	
        <div class="blog_postcontent">
            <div class="image_frame small">
            
            <?php if($row->url != ""): ?>
            
            <a href="http://<?php echo $row->url; ?>" target="_blank"> <img src="<?php echo base_url().'uploads/articulo/link_mid.png';?> "/>		
            
            </div>
            <div class="post_info_content_small">
            <h3><a href="http://<?php $row->url; ?>"><?php echo ucfirst($row->articulo_nombre); ?></a></h3>
                
            <div class="clearfix"></div>
            
             <p><a href="http://<?php $row->url; ?>"><?php echo $row->url; ?></a></p><br>
            
            <?php else: ?>
            
            
				<?php if($row->file_name != ""): ?>
                	<a href="<?php echo base_url().'inicio/articulo/'.$row->categoria_id.'/'.$row->subcategoria_id.'/'.$row->articulo_nombre.'/'.$row->articulo_id;?>">
                    <img src="<?php echo base_url().'uploads/articulo/mid/'.$row->file_name; ?> "/>
                    </a>
                <?php else: ?>
                
                	<a href="<?php echo base_url().'inicio/articulo/'.$row->categoria_id.'/'.$row->subcategoria_id.'/'.$row->articulo_nombre.'/'.$row->articulo_id;?>">
                    <img src="<?php echo base_url().'uploads/articulo/noimage_min.png';?> "/>
                    </a>
                <?php endif;?>
                </div>
                
                <div class="post_info_content_small">
                <h3><a href="<?php echo base_url().'inicio/articulo/'.$row->categoria_id.'/'.$row->subcategoria_id.'/'.$row->articulo_nombre.'/'.$row->articulo_id;?>"><?php echo ucfirst($row->articulo_nombre); ?></a></h3>
                
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