		<div id="content">
		<ul class="breadcrumb">
	<li><a href="index.html?lang=en" class="glyphicons home"><i></i> Admin</a></li>
	<li class="divider"></li>
	<li>Formularios</li>
	<li class="divider"></li>
	<li>Multiples imágenes</li>
</ul>
<div class="separator"></div>

<!-- <h3 class="glyphicons user"><i></i> My Account</h3> -->

<div class="widget widget-2 widget-tabs widget-tabs-2 tabs-right border-bottom-none">
	<div class="widget-head">
		<ul>
			<li class="active"><a class="glyphicons user" href="#account-details" data-toggle="tab"><i></i>Detalles de imágen</a></li>
		</ul>
	</div>
</div>

<div class="innerLR">
	
    <form enctype="multipart/form-data" method="post">
		<div id="queue"></div>
		<input id="file_upload" name="userflie" type="file" multiple>
		<a style="position: relative; top: 8px;" href="javascript:$('#file_upload').uploadifive('upload')">Upload Files</a>
        <button id="upload" type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>upload</button>
	</form>


	<form name="form" enctype="multipart/form-data" method="post" class="form-horizontal" action="<?php echo base_url().'admin_thumb/alta_thumb'; ?>">
	<div class="tab-content" style="padding: 0;">
		<div class="tab-pane active" id="account-details">
		
			<div class="widget widget-2">
				<div class="widget-head">
					<h4 class="heading glyphicons edit"><i></i>Datos imágen</h4>
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
						</div>
						<div class="span6">
						</div>
					</div>
					<hr class="separator bottom" />
					<div class="control-group row-fluid">
						<label class="control-label">Descripción </label>
						<div class="controls">
							<textarea id="mustHaveId" class="wysihtml5 span12" rows="5" name="desc"><?php echo set_value('desc'); ?></textarea>
						</div>
					</div>
                    
                    <hr class="separator bottom" />
					<div class="control-group row-fluid">
						<label class="control-label">Subir </label>
                        <div class="controls">
						<div class="fileupload fileupload-new" data-provides="fileupload">
						  	<div class="input-append">
						    	<div class="uneditable-input span3"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div><span class="btn btn-file"><span class="fileupload-new">Archivo</span><span class="fileupload-exists">Cambiar</span><input name="userfile" type="file" /></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Eliminar</a>
						  	</div>
						</div>
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
	<?php $timestamp = time();?>
	
    $('#upload').click(function(e) {
        e.preventDefault();
		$('#file_upload').uploadifive('upload')
		
    });
	
		$(function() {
			$('#file_upload').uploadifive({
				'auto'             : false,
				'method'       : 'post',
				'formData'         : {
									   'timestamp' : '<?php echo $timestamp;?>',
									   'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				                     },
				'fileObjName'      : 'userfile',
				'queueID'          : 'queue',
				'uploadScript'     : '<?php echo base_url().'admin_thumb/alta_multi_thumb'; ?>',
				'onUploadComplete' : function(file, data) { alert(data) }
			});
		});
	
});//End document

		
</script>
