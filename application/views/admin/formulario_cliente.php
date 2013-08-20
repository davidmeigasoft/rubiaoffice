		<div id="content">
		<ul class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>admin" class="glyphicons home"><i></i> Admin</a></li>
	<li class="divider"></li>
	<li>Alta cliente</li>
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
	<form name="form" method="post" class="form-horizontal" action="<?php echo base_url().'admin_cliente/alta_cliente'; ?>">
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
									<input type="text" value="<?php echo set_value('nombre'); ?>" class="span10" name="nombre" />
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Apellidos</label>
								<div class="controls">
									<input type="text" value="<?php echo set_value('apellido'); ?>" class="span10" name="apellido" />
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Fecha de alta</label>
								<div class="controls">
									<div class="input-append">
										<input type="text" id="datepicker" class="span12" value="<?php echo set_value('fecha_alta'); ?>" name="fecha_alta" />
										<span class="add-on glyphicons calendar"><i></i></span>
									</div>
								</div>
							</div>
                            <div class="control-group">
								<label class="control-label">Movil</label>
                                <div class="controls">
									<div class="input-append">
										<input type="text" id="" class="span12" value="<?php echo set_value('movil'); ?>" name="movil" />
										<span class="add-on glyphicons phone"><i></i></span>
									</div>
                                </div>
							</div>
                            
                            <div class="control-group">
								<label class="control-label">Mail</label>
                                <div class="controls">
									<div class="input-append">
										<input type="text" id="" class="span12" value="<?php echo set_value('mail'); ?>" name="mail" />
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
										<option value="H">Hombre</option>
										<option value="M">Mujer</option>
									</select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Edad</label>
								<div class="controls">
									<input type="text" value="<?php echo set_value('edad'); ?>" class="span4" name="edad"/>
								</div>
							</div>
                            
                            <div class="control-group">
								<label class="control-label">Password</label>
                                <div class="controls">
									<div class="input-append">
										<input type="text" id="" class="span6" value="<?php echo set_value('pass'); ?>" name="pass" />
										<span class="add-on glyphicons lock"><i></i></span>
									</div>
                                </div>
							</div>
                            
                            <div class="control-group" style="display:none">
								<label class="control-label">Admin?</label>
                                <div class="toggle-button" data-toggleButton-style-enabled="info" style="margin-left:20px">
									<input type="checkbox" value="1" <?php echo set_checkbox('admin'); ?> name="admin"/>
								</div>
							</div>
                            
                            <div class="control-group">
								<label class="control-label">Activo?</label>
                                <div class="toggle-button" data-toggleButton-style-enabled="info" style="margin-left:20px">
									<input class="ck" type="checkbox" name="activo" checked="checked"/>
								</div>
							</div>
                            
						</div>
					</div>
					<hr class="separator bottom" />
					<div class="control-group row-fluid">
						<label class="control-label">Acerca de </label>
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