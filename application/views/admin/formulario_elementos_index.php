		<div id="content">
		<ul class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>admin" class="glyphicons home"><i></i> Admin</a></li>
	<li class="divider"></li>
	<li>Elementos Index</li>
</ul>
<div class="separator"></div>

<!-- <h3 class="glyphicons user"><i></i> My Account</h3> -->

<div class="widget widget-2 widget-tabs widget-tabs-2 tabs-right border-bottom-none">
	<div class="widget-head">
		<ul>
			<li class="active"><a class="glyphicons user" href="#account-details" data-toggle="tab"><i></i>Detalles de la categoría</a></li>
		</ul>
	</div>
</div>

<div class="innerLR">
	<form name="form" method="post" class="form-horizontal" action="<?php echo base_url().'admin_elementos_index/alta_elemento'; ?>">
	<div class="tab-content" style="padding: 0;">
		<div class="tab-pane active" id="account-details">
		
			<div class="widget widget-2">
				<div class="widget-head">
					<h4 class="heading glyphicons edit"><i></i>Datos de elemento</h4>
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
						</div><!--end span 6-->
                        

							<div class="control-group">
								<label class="control-label">Título</label>
								<div class="controls">
									<input type="text" value="<?php echo set_value('titulo'); ?>" class="span10" name="titulo" />
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>


							<div class="control-group">
								<label class="control-label">Subtítulo</label>
								<div class="controls">
									<input type="text" value="<?php echo set_value('subtitulo'); ?>" class="span10" name="subtitulo" />
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>


							<div class="control-group">
								<label class="control-label">Descripción 1</label>
								<div class="controls">
									<input type="text" value="<?php echo set_value('desc_1'); ?>" class="span10" name="desc_1" />
									<span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Campo obligatorio"><i></i></span>
								</div>
							</div>


							<div class="control-group">
								<label class="control-label">Descripción 2</label>
								<div class="controls">
									<input type="text" value="<?php echo set_value('desc_2'); ?>" class="span10" name="desc_2" />
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


						<div class="span6">
						</div><!--end span 6-->
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