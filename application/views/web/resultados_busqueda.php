<div class="clearfix"></div>
 
<div class="page_title">

	<div class="container">
		<div class="leaft_title"><h1>Resultados de búsqueda para "<?php echo $cadena_buscada; ?>"
        </h1></div>
        <div class="reght_pagenation">
        
        </div>
	</div>
</div><!-- end page title --> 

<!-- Contant
======================================= -->

<div class="container">

<div class="content_search" style="width: 100%">
     
    <h2>Se han encontrado <?php echo $numero_resultados ?> coincidencias:</h2><br/>
          
    <div id="itemContainer"> 

    <?php foreach($resultados_busqueda as $row): ?>
    
    <div class="blog_post"><!-- /# post -->	
        <div class="blog_postcontent">
            <div class="image_frame search">
             <?php if($row->url != ""): ?>
            
            <a href="http://<?php echo $row->url; ?>" target="_blank"> <img src="<?php echo base_url().'uploads/articulo/link_mid.png';?>" alt="Enlace externo"/>		
            
            </div>
            <div class="post_info_content_search">
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
                
                <div class="post_info_content_search">
                <h3><a href="<?php echo base_url().'inicio/articulo/'.$row->articulo_id.'/'.$row->articulo_nombre;?>"><?php echo ucfirst($row->articulo_nombre); ?></a></h3>
                
                <div class="clearfix"></div>
                
                <p><a style="color: #999;" href="<?php echo base_url().'inicio/articulo/'.$row->articulo_id.'/'.$row->articulo_nombre;?>"><?php echo word_limiter($row->articulo_desc, 45); ?></a></p><br>
            
            
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