		<div id="content">
		<ul class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>admin" class="glyphicons home"><i></i> Admin</a></li>
	<li class="divider"></li>
    <li><a href="<?php echo base_url(); ?>admin_galeria/listado_galerias">Listado de galerias</a></li>
    <li class="divider"></li>
	<li>Editar galeria</li>
</ul>
<div class="separator"></div>

<!-- <h3 class="glyphicons user"><i></i> My Account</h3> -->

<div class="widget widget-2 widget-tabs widget-tabs-2 tabs-right border-bottom-none">
	<div class="widget-head">
		<ul>
			<li class="active"><a class="glyphicons user" href="#account-details" data-toggle="tab"><i></i>Detalles de la galeria</a></li>
		</ul>
	</div>
</div>
<div class="innerLR">
<?php foreach($galeria as $row): ?>
	<form name="form" method="post" class="form-horizontal" action="<?php echo base_url().'admin_galeria/actualiza_galeria'; ?>">
    
	<div class="tab-content" style="padding: 0;">
		<div class="tab-pane active" id="account-details">
		
			<div class="widget widget-2">
				<div class="widget-head">
					<h4 class="heading glyphicons edit"><i></i>Datos galeria</h4>
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
						</div>
						<div class="span6">
							
							
                            
                            
                            
						</div>
					</div>
					<hr class="separator bottom" />
					<div class="control-group row-fluid">
						<label class="control-label">Acerca de </label>
						<div class="controls">
							<textarea id="mustHaveId" class="wysihtml5 span12" rows="5" name="desc"><?php echo $row->desc; ?></textarea>
						</div>
					</div>
                    <input type="hidden" name="galeria_id" value="<?php echo $row->galeria_id; ?>" />
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
 </form>       
        <!-------------------->
        
        
        <div class="widget widget-2">
        <form name="form" enctype="multipart/form-data" method="post">
				<div class="widget-head">
					<h4 class="heading glyphicons edit"><i></i>Subir imágenes</h4>
				</div>
				<div class="widget-body" style="padding-bottom: 0;">
                    <input type="hidden" name="galeria_id" value="<?php echo $row->galeria_id; ?>" />
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
        
	</div>
    
    
	</form>
   
	
</div>

<br/>

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
				'uploadScript'     : '<?php echo base_url().'admin_thumb/alta_thumb_galeria/'.$row->galeria_id; ?>',
				'onUploadComplete' : function(file, data) {}
			});
		});
	
});//End document

		
</script>
<?php endforeach; ?> 