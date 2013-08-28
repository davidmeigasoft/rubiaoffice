		<div id="content">
		<ul class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>admin" class="glyphicons home"><i></i> Admin</a></li>
	<li class="divider"></li>
	<li>Alta artículo</li>
</ul>
<div class="separator"></div>

<!-- <h3 class="glyphicons user"><i></i> My Account</h3> -->

<div class="widget widget-2 widget-tabs widget-tabs-2 tabs-right border-bottom-none">
	<div class="widget-head">
		<ul>
			<li class="active"><a class="glyphicons user" href="#account-details" data-toggle="tab"><i></i>Detalles de artículo</a></li>
		</ul>
	</div>
</div>







<div class="innerLR">
	<form name="form" method="post" class="form-horizontal" action="<?php echo base_url().'admin_articulo/alta_articulo'; ?>">
	<div class="tab-content" style="padding: 0;">
		<div class="tab-pane active" id="account-details">
		
			<div class="widget widget-2">
				<div class="widget-head">
					<h4 class="heading glyphicons edit"><i></i>Datos del artículo</h4>
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
						<div class="span6">
							<div class="control-group">
								<label class="control-label">Nombre</label>
								<div class="controls">
									<input type="text" value="<?php echo set_value('nombre'); ?>" class="span10" name="nombre" />
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>
						
<!------------------------------------------------------------------------------------------->
                        	<div class="control-group">
								<label class="control-label">Categoría</label>
								<div class="controls">
                                
                                <select name="categoria2" id="cat">
                                	<option selected>Seleccione Categoría
                                   
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
<!-------------------------------------------------------------------------------------------> 


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
									<input type="text" value="<?php echo set_value('marca'); ?>" class="span10" name="marca" />
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>

							<div class="control-group">
								<label class="control-label">Color</label>
								<div class="controls">
									<input type="text" value="<?php echo set_value('color'); ?>" class="span10" name="color" />
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>

							<div class="control-group">
								<label class="control-label">Medidas</label>
								<div class="controls">
									<input type="text" value="<?php echo set_value('medidas'); ?>" class="span10" name="medidas" />
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>
                            
                            <div class="control-group">
								<label class="control-label">Unidades</label>
								<div class="controls">
									<input type="text" value="<?php echo set_value('unidades'); ?>" class="span10" name="unidades" />
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>

							<div class="control-group">
								<label class="control-label">Precio</label>
								<div class="controls">
									<input type="text" value="<?php echo set_value('precio'); ?>" class="span10" name="precio" />
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>

							<div class="control-group">
								<label class="control-label">Stock</label>
								<div class="controls">
									<input type="text" value="<?php echo set_value('stock'); ?>" class="span10" name="stock" />
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>
                            
                            <div class="control-group">
								<label class="control-label">URL</label>
								<div class="controls">
									<input type="text" value="<?php echo set_value('url'); ?>" class="span10" name="url" />
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>


</div><!--end span 6-->












                        

					</div>
					<hr class="separator bottom" />
					<div class="control-group row-fluid">
						<label class="control-label">Descripción</label>
						<div class="controls">
							<textarea id="mustHaveId" class="wysihtml5 span12" rows="5" name="desc"><?php echo set_value('desc'); ?></textarea>
						</div>
					</div>
					<div class="form-actions" style="margin: 0;">
						<button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>Guardar</button>
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
	
</div>
<br/>

<script type="text/javascript">
$(document).ready(function(e) {
    $('.ck').click(function(e) {
        alert("dddd");
    });
});
</script>