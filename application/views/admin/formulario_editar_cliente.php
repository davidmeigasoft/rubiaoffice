		<div id="content">
		<ul class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>admin" class="glyphicons home"><i></i> Admin</a></li>
	<li class="divider"></li>
	<li><a href="<?php echo base_url(); ?>admin_cliente/listado_clientes"> Listado de clientes</a></li>
	<li class="divider"></li>
	<li>Editar cliente</li>
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
<?php foreach($cliente as $row): ?>
	<form name="form" method="post" class="form-horizontal" action="<?php echo base_url().'admin_cliente/actualiza_cliente'; ?>">
    
	<div class="tab-content" style="padding: 0;">
		<div class="tab-pane active" id="account-details">
		
			<div class="widget widget-2">
				<div class="widget-head">
					<h4 class="heading glyphicons edit"><i></i>Datos personales</h4>
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
									<input type="text" value="<?php echo $row->nombre; ?>" class="span10" name="nombre" />
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Apellidos</label>
								<div class="controls">
									<input type="text" value="<?php echo $row->apellido; ?>" class="span10" name="apellido" />
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Fecha de alta</label>
								<div class="controls">
									<div class="input-append">
										<input type="text" id="datepicker" class="span12" value="<?php echo $row->fecha_alta; ?>" name="fecha_alta" />
										<span class="add-on glyphicons calendar"><i></i></span>
									</div>
								</div>
							</div>
                            <div class="control-group">
								<label class="control-label">Movil</label>
                                <div class="controls">
									<div class="input-append">
										<input type="text" id="" class="span12" value="<?php echo $row->movil; ?>" name="movil" />
										<span class="add-on glyphicons phone"><i></i></span>
									</div>
                                </div>
							</div>
                            
                            <div class="control-group">
								<label class="control-label">Mail</label>
                                <div class="controls">
									<div class="input-append">
										<input type="text" id="" class="span12" value="<?php echo $row->mail; ?>" name="mail" />
										<span class="add-on glyphicons envelope"><i></i></span>
									</div>
                                </div>
							</div>
                            
						</div>
						<div class="span6">
							<div class="control-group">
								<label class="control-label">Sexo</label>
								<div class="controls">
									<select class="span12" name="sexo">
                                    	<?php if($row->sexo == 'H'): ?>
                                        	<option value="H" selected="selected">Hombre</option>
                                        <?php endif; ?>
                                        <?php if($row->sexo == 'M'): ?>
                                        	<option value="M" selected="selected">Mujer</option>
                                        <?php endif; ?>
										<option value="H" <?php echo set_select('sexo', 'Hombre'); ?>>Hombre</option>
										<option value="M" <?php echo set_select('sexo', 'Mujer'); ?>>Mujer</option>
									</select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Edad</label>
								<div class="controls">
									<input type="text" value="<?php echo $row->edad; ?>" class="input-mini" name="edad"/>
								</div>
							</div>
                            
                            <div class="control-group">
								<label class="control-label">Password</label>
                                <div class="controls">
									<div class="input-append">
										<input type="text" id="" class="span6" value="<?php echo $row->pass; ?>" name="pass" />
										<span class="add-on glyphicons lock"><i></i></span>
									</div>
                                </div>
							</div>
                            
                            <div class="control-group" style="display:none">
								<label class="control-label">Admin?</label>
                                <div class="toggle-button" data-toggleButton-style-enabled="info" style="margin-left:20px">
									<input type="checkbox" value="<?php echo $row->admin; ?>" name="admin"/>
								</div>
							</div>
                            
                            <div class="control-group">
								<label class="control-label">Activo?</label>
                                <div class="toggle-button" data-toggleButton-style-enabled="info" style="margin-left:20px">
									
                                    <?php if($row->activo == 'on'): ?>
                                    <input type="checkbox" value="<?php echo $row->activo; ?>" checked = "checked" name="activo"/>
                                    <?php endif; ?>
                                    <?php if($row->activo == '0'): ?>
                                    <input type="checkbox" name="activo"/>
                                    <?php endif; ?>
                                    
								</div>
							</div>
                            
						</div>
					</div>
					<hr class="separator bottom" />
					<div class="control-group row-fluid">
						<label class="control-label">Acerca de </label>
						<div class="controls">
							<textarea id="mustHaveId" class="wysihtml5 span12" rows="5" name="desc"><?php echo $row->desc; ?></textarea>
						</div>
					</div>
                    <input type="hidden" name="cliente_id" value="<?php echo $row->cliente_id; ?>" />
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