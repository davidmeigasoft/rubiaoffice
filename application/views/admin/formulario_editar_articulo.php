		<div id="content">
		<ul class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>admin" class="glyphicons home"><i></i> Admin</a></li>
	<li class="divider"></li>
	<li><a href="<?php echo base_url(); ?>admin_articulo/listar_articulo"> Listado de artículos</a></li>
	<li class="divider"></li>
	<li>Editar artículo</li>
</ul>
<div class="separator"></div>

<!-- <h3 class="glyphicons user"><i></i> My Account</h3> -->

<div class="widget widget-2 widget-tabs widget-tabs-2 tabs-right border-bottom-none">
	<div class="widget-head">
		<ul>
			<li class="active"><a class="glyphicons user" href="#account-details" data-toggle="tab"><i></i>Detalles de la cuenta</a></li>
		</ul>
	</div>
</div>
<div class="innerLR">



<?php foreach($articulo as $row): ?>
	<form name="form" method="post" class="form-horizontal" action="<?php echo base_url().'admin_articulo/actualiza_articulo'; ?>">
    
	<div class="tab-content" style="padding: 0;">
		<div class="tab-pane active" id="account-details">
		
			<div class="widget widget-2">
				<div class="widget-head">
					<h4 class="heading glyphicons edit"><i></i>Datos artículo</h4>
				</div>
				<div class="widget-body" style="padding-bottom: 0;">
                
                
                    <!--Fila de mensaje de error-->
                    <?php if (validation_errors() == true): ?>
                    <div class="row-fluid">
                    	<div class="span12">
                            <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php echo validation_errors(); ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                   </div>
                   <?php endif; ?>
                   <!--Fila de mensaje de error-->

					<div class="row-fluid">
						<div class="span12">
							<div class="control-group">
								<label class="control-label">Nombre</label>
								<div class="controls">
									<input type="text" value="<?php echo $row->nombre; ?>" class="span10" name="nombre" />
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>
							
							<!---------------------------------------------------------------------------------->

                        	<div class="control-group">
								<label class="control-label">Categoría</label>
								<div class="controls">
                                
                                <select name="categoria2" id="cat">
                                    
                                	<?php foreach($categoria as $cat): ?>
                                    
                                	<option value="<?php echo $cat->categoria_id; ?>" ><?php echo ucfirst($cat->nombre); ?>
                                	<?php endforeach;?>
                                    

                                    
                                </select>
                                <span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
                            </div>
                            
                        
							<div class="control-group">
								<label class="control-label">Subcategoría</label>
								<div class="controls">
                                
                                <select name="subcategoria" id="sub">
                                	<option selected>Seleccione Categoría
                                	
                                    
                                </select>
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>
							
<!---------------------------------------------------------------------------------->    
							
                            
				<script type="text/javascript">
                    $(document).ready(function(e) {
                        $("#cat").change(function(e) {
                            $.post('<?php echo base_url().'admin_articulo/combo_subcategoria/';?>',{id:$(this).val()},function(data){
                                    $('#sub').html(data);
                                });
                        });
                    });
                </script>
                            
                            
                            
                                 
                            <div class="control-group">
								<label class="control-label">Marca</label>
								<div class="controls">
									<input type="text" value="<?php echo $row->marca; ?>" class="span10" name="marca" />
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>

							<div class="control-group">
								<label class="control-label">Color</label>
								<div class="controls">
									<input type="text" value="<?php echo $row->color; ?>" class="span10" name="color" />
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>

							<div class="control-group">
								<label class="control-label">Medidas</label>
								<div class="controls">
									<input type="text" value="<?php echo $row->medidas; ?>" class="span10" name="medidas" />
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>

							<div class="control-group">
								<label class="control-label">Unidades</label>
								<div class="controls">
									<input type="text" value="<?php echo $row->unidades; ?>" class="span10" name="unidades" />
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>


							<div class="control-group">
								<label class="control-label">Precio</label>
								<div class="controls">
									<input type="text" value="<?php echo $row->precio; ?>" class="span10" name="precio" />
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>

							<div class="control-group">
								<label class="control-label">Stock</label>
								<div class="controls">
									<input type="text" value="<?php echo $row->stock; ?>" class="span10" name="stock" />
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>
                    
                    
					<hr class="separator bottom" />
					<div class="control-group row-fluid">
						<label class="control-label">Descripcion </label>
						<div class="controls">
							<textarea id="mustHaveId" class="wysihtml5 span12" rows="5" name="desc"><?php echo $row->desc; ?></textarea>
						</div>
					</div>
                    <input type="hidden" name="articulo_id" value="<?php echo $row->articulo_id; ?>" />
					<div class="form-actions" style="margin: 0;">
						<button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>Editar</button>
						<button type="button" class="btn btn-icon btn-default glyphicons circle_remove"><i></i>Cancelar</button>
					</div>
                    
             <?php if(isset($error)): ?>
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php echo $error; ?>
                </div>
            <?php endif; ?>

				</div>
			</div>
		</div>
        
        <!-------------------->
        
	</div>
    
	</form>
   
   
   
      <div class="widget widget-2">
        <form name="form" enctype="multipart/form-data" method="post">
				<div class="widget-head">
					<h4 class="heading glyphicons edit"><i></i>Subir imágenes</h4>
				</div>
				<div class="widget-body" style="padding-bottom: 0;">
                    <input type="hidden" name="articulo_id" value="<?php echo $row->articulo_id; ?>" />
                    <input type="hidden" name="nombre" value="<?php echo $row->nombre; ?>" />
					
                    
                    <div class="row-fluid">
                    <div class="span2"><input id="file_upload" name="userflie" type="file" multiple class="btn btn-icon btn-primary glyphicons circle_ok"></div>
                    <div class="span8" id="queue"></div>
                    <div class="span2"><button id="upload" type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>subir</button></div>
                    </div>
                    <br />
				</div>
			</div>
		</div>


<script type="text/javascript">

$(document).ready(function(e) {
	<?php $timestamp = time();?>
	
    $('#upload').click(function(e) {
        e.preventDefault();
		var galeria = $("input[name='galeria']:checked").val();
		$('#file_upload').uploadifive('upload');
		
    });
	
		$(function() {
			$('#file_upload').uploadifive({
				'auto'             : false,
				'buttonText' : '+Imágenes',
				'method'       : 'post',
				'formData'         : {
									   'timestamp' : '<?php echo $timestamp;?>',
									   'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				                     },
				'fileObjName'      : 'userfile',
				'queueID'          : 'queue',
				'uploadScript'     : '<?php echo base_url().'admin_thumb/alta_thumb_articulo/'.$row->articulo_id; ?>',
				'onUploadComplete' : function(file, data) {}
			});
		});

});//End document
		
</script>


   <?php endforeach; ?> 
   
	
</div>
<br/>