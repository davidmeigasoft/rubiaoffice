		<div id="content">
		<ul class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>admin" class="glyphicons home"><i></i> Admin</a></li>
	<li class="divider"></li>
	<li><a href="<?php echo base_url(); ?>admin_subcategoria/listar_subcategoria"> Listado de subcategorías</a></li>
	<li class="divider"></li>
	<li>Editar subcategoría</li>
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



<?php foreach($subcategoria as $row): ?>
	<form name="form" method="post" class="form-horizontal" action="<?php echo base_url().'admin_subcategoria/actualiza_subcategoria'; ?>">
    
	<div class="tab-content" style="padding: 0;">
		<div class="tab-pane active" id="account-details">
		
			<div class="widget widget-2">
				<div class="widget-head">
					<h4 class="heading glyphicons edit"><i></i>Datos subcategoría</h4>
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
							
							<div class="control-group">
								<label class="control-label">Categoria</label>
								<div class="controls">
                                
                                <select name="categoria">
                                	<option selected>Seleccione Categoria
                                   
                                	<?php foreach($categoria as $cat): ?>
                                    
                                   	<?php if($row->categoria == $cat->categoria_id): ?> 
                                    	<option selected="<?php echo $cat->categoria_id; ?>"><?php echo $cat->nombre; ?> 
                                    <?php else: ?>
                                	<option value="<?php echo $cat->categoria_id; ?>" ><?php echo $cat->nombre;?>
                                     <?php endif; ?>
                                	<?php endforeach;?>
                                </select>
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>
						</div>
							
						<div class="span12">
							
					</div>
					<hr class="separator bottom" />
					<div class="control-group row-fluid">
						<label class="control-label">Descripcion </label>
						<div class="controls">
							<textarea id="mustHaveId" class="wysihtml5 span12" rows="5" name="desc"><?php echo $row->desc; ?></textarea>
						</div>
					</div>
                    <input type="hidden" name="subcategoria_id" value="<?php echo $row->subcategoria_id; ?>" />
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
   <?php endforeach; ?> 
	
</div>
<br/>