		<div id="content">
		<ul class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>admin" class="glyphicons home"><i></i> Admin</a></li>
	<li class="divider"></li>
	<li>Listado de categorías</li>
</ul>
<div class="separator"></div>
<h3 class="glyphicons show_thumbnails"><i></i> Categorías</h3>
<div class="separator"></div>

<div class="innerLR">
	<div class="widget widget-gray widget-body-white">
		<div class="widget-head">
			<h4 class="heading">Listado de categorías</h4>
		</div>
		<div class="widget-body" style="padding: 10px 0;">
			<table class="dynamicTable table table-striped table-bordered table-primary table-condensed">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Descripcion</th>
                        <th class="center">Acciones</th>
                        
					</tr>
				</thead>
				<tbody>
                <?php foreach($categoria as $row): ?>
					<tr class="gradeA">
						<td><?php echo $row->nombre; ?></td>
						<td><?php echo $row->desc; ?></td>
						<td class="center">
 <a href="<?php echo base_url();?>admin_categoria/categoria_id/<?php echo $row->categoria_id; ?>" class="btn-action glyphicons pencil btn-success"><i></i></a>
						<a href="<?php echo base_url();?>admin_categoria/borra_categoria/<?php echo $row->categoria_id; ?>" class="btn-action glyphicons remove_2 btn-danger"><i></i></a>
                        <a href="<?php echo base_url();?>admin_categoria/archivo_categoria/<?php echo $row->categoria_id; ?>" class="btn-action glyphicons file btn-warning"><i></i></a>
                        </td>
					</tr>
                 <?php endforeach; ?>
                    
				</tbody>
			</table>
		</div>
	</div>
</div>

<br/>