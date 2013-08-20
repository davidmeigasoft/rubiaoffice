<div class="clearfix"></div>
 
<div class="page_title">

	<div class="container">
		<div class="leaft_title"><h1><?php// echo ucfirst(str_replace("%20", " ",$nombre_categoria));?></h1></div>
        <div class="reght_pagenation"><a href="<?php echo base_url(); ?>">Home</a><i>/</i> Mobiliario</div>
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



<?php /*?>	<?php foreach($ultimos_articulos_sub as $row): ?>
    	<li><span><a href="#">
        
        <?php if($row->file_name != ""): ?>
        <img src="<?php  echo base_url().'uploads/articulo/small/'.$row->file_name; ?>"  alt="" />
        <?php else: ?>
        <img src="<?php  echo base_url().'uploads/articulo/noimage_small.png'; ?>"  alt="" />
        <?php endif; ?>
        </a></span>
         <a href="<?php echo base_url().'inicio/articulo/'.$row->categoria_id.'/'.$row->subcategoria_id.'/'.$row->articulo_nombre.'/'.$row->articulo_id;?>"> <?php echo $row->articulo_nombre; ?></a>
              <i><?php echo word_limiter($row->articulo_desc, 10); ?></i>
        </li>
	
	<?php endforeach; ?><?php */?>
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
 
              
      <form action="demo_form.asp">
        <input type="button" value="prueba" onClick="prueba();">
      </form>
     
    <script type="text/javascript">
	
	function prueba()
		{
		alert("funciona");
		}
		
	</script>
          
    <div id="itemContainer"> 
       
    <?php foreach($listado_articulos_categoria as $row): ?>
    
    <div class="blog_post"><!-- /# post -->	
        <div class="blog_postcontent">
            
            <div class="image_frame small">
            <?php if($row->file_name != ""): ?>
            <img src="<?php echo base_url().'uploads/articulo/mid/'.$row->file_name; ?> "/>
            <?php else: ?>
            <img src="<?php echo base_url().'uploads/articulo/noimage_min.png';?> "/>
            <?php endif; ?>
            </div>
            
            <div class="post_info_content_small">
            <h3><a href="<?php echo base_url().'inicio/articulo/'.$row->categoria_id.'/'.$row->subcategoria_id.'/'.$row->articulo_nombre.'/'.$row->articulo_id;?>"><?php echo ucfirst($row->articulo_nombre); ?></a></h3>
            
            <div class="clearfix"></div>
            
            <p><?php echo word_limiter($row->articulo_desc, 15); ?></p><br>
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
    <div class="container_holder"><div class="holder"></div>
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