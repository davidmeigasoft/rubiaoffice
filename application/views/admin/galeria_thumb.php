		<div id="content">
		<ul class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>admin" class="glyphicons home"><i></i> Admin</a></li>
	<li class="divider"></li>
    <li><a href="<?php echo base_url(); ?>admin_galeria/listado_galerias"><i></i> Tabla galerias</a></li>
	<li class="divider"></li>
	<li>Galeria de imagenes</li>
</ul>
<div class="separator"></div>

<h3 class="glyphicons picture"><i></i> Imágenes</h3>
<div class="separator"></div>

<div class="well">
	<div class="row-fluid gallery">
		<ul>
         <?php foreach($thumb as $row): ?>
         	<form method="post" enctype="application/x-www-form-urlencoded" action="<?php echo base_url();?>admin_thumb/borra_thumb">
            <input type="hidden" name="articulo_id" value="<?php echo $row->articulo; ?>" />
            <input type="hidden" name="imagen_id" value="<?php echo $row->imagen_id; ?>" />
            <input type="hidden" name="file_name" value="<?php echo $row->file_name; ?>" />
			<li class="span4">
				<span class="thumb view">
					<img src="<?php echo base_url().'uploads/articulo/large/'.$row->file_name; ?>" alt="<?php echo $row->nombre; ?>" />
                    <button type="submit" class="btn btn-block btn-danger btn-icon glyphicons delete" value="Borrar"><i></i>Borrar</button>
				</span>
				
                <div class="clearfix"></div>
			</li>
           </form>
        <?php endforeach; ?>   
		</ul>
	</div>
</div>	
    	<!-- Masonry -->
	<script src="<?php echo base_url(); ?>assets-admin/theme/scripts/jquery.masonry.min.js"></script>
	
	<script>
	function masonryGallery()
	{
		var $container = $('.gallery ul');
		$container.imagesLoaded( function(){
				$container.masonry({
					gutterWidth: 14,
			    	itemSelector : 'li',
			    	columnWidth: $('.gallery li:first').width()
			  	});
			});
	}
	$(function()
	{
		masonryGallery();

		$(window).resize(function(e){
			masonryGallery();
		});
	});
	</script>
