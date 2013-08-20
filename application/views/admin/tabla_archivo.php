		<div id="content">
		<ul class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>admin" class="glyphicons home"><i></i> Admin</a></li>
	<li class="divider"></li>
	<li>Asignar o borrar archivos</li>
</ul>
<div class="separator"></div>
<h3 class="glyphicons show_thumbnails"><i></i> Archivos</h3>
<div class="separator"></div>

<div class="innerLR">
	<div class="widget widget-gray widget-body-white">
		<div class="widget-head">
			<h4 class="heading">Lista de archivos</h4>
		</div>
        <!----------------------->
        <form name="form" method="post" action="<?php echo base_url().'admin_archivo/asigna_archivo'; ?>" enctype="application/x-www-form-urlencoded" >
		<div class="widget-body" style="padding: 10px 0;">
		   <?php if(isset($error)): ?>
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php echo $error; ?>
                </div>
            <?php endif; ?>   
			<table class="dynamicTable table table-striped table-bordered table-primary table-condensed checkboxs">
				<thead>
					<tr>
                    	<th style="width: 1%;" class="uniformjs"></th>
						<th>Nombre</th>
						<th>tipo</th>
						<th>ruta</th>
                        <th>Acciones</th>
					</tr>
				</thead>
				<tbody>
                <?php foreach($archivo as $row): ?>
					<tr class="selectable">
                    	<td class="center uniformjs"><input type="checkbox" name="archivo[]" value="<?php echo $row->archivo_id; ?>"/></td>
						<td><?php echo $row->nombre; ?></td>
						<td><?php echo $row->tipo; ?></td>
						<td><?php echo $row->ruta; ?></td>
                        <td class="center">
						<a style="display:none" href="<?php echo base_url();?>admin_archivo/archivo_id/<?php echo $row->archivo_id; ?>" class="btn-action glyphicons pencil btn-success"><i></i></a>
						<a href="<?php echo base_url();?>admin_archivo/borra_archivo/<?php echo $row->archivo_id; ?>" class="btn-action glyphicons remove_2 btn-danger"><i></i></a>
                        </td>
					</tr>
                 <?php endforeach; ?>
                    
				</tbody>
			</table>
<hr class="separator bottom" />
		<div class="pull-left">
			<div class="checkboxs_actions show pull-left">
            <label class="strong">| Añadir archivos a cliente:</label>
            <select style="width: 100%;" id="select2_1" name="cliente">
                   <?php foreach($cliente as $row): ?>
                   <option value="<?php echo $row->cliente_id; ?>"><?php echo $row->nombre; ?></option>
                   <?php endforeach; ?>
            </select>
		</div>
            <div class="clearfix"></div>
        </div>
        
        <div class="pull-right">
			<div class="checkboxs_actions show pull-right">
            <label class="strong">| Hacer asignación:</label>
            <button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>Asignar</button>
		</div>
            <div class="clearfix"></div>
        </div>
    </div>
    </form>
    <!----------------------->

		</div>
	</div>
 
    
</div>

<br/>