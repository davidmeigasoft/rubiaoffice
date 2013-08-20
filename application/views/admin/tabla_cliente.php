		<div id="content">
		<ul class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>admin" class="glyphicons home"><i></i> Admin</a></li>
	<li class="divider"></li>
	<li>Listado de clientes</li>
</ul>
<div class="separator"></div>
<h3 class="glyphicons show_thumbnails"><i></i> Clientes</h3>
<div class="separator"></div>

<div class="innerLR">
	<div class="widget widget-gray widget-body-white">
		<div class="widget-head">
			<h4 class="heading">Listado de clientes</h4>
		</div>
		<div class="widget-body" style="padding: 10px 0;">
			<table class="dynamicTable table table-striped table-bordered table-primary table-condensed">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Apellidos</th>
						<th>Mail</th>
						<th>Movil</th>
						<th>Activo</th>
                        <th class="center">Acciones</th>
                        
					</tr>
				</thead>
				<tbody>
                <?php foreach($cliente as $row): ?>
					<tr class="gradeA">
						<td><?php echo $row->nombre; ?></td>
						<td><?php echo $row->apellido; ?></td>
						<td><?php echo $row->mail; ?></td>
						<td class="center"><?php echo $row->movil; ?></td>
						<td class="center">
                        <?php if($row->activo == 'on'): ?>
                        	<span class="label label-block label-important">Activo</span>
                        <?php endif; ?>
                        <?php if($row->activo == '0'): ?>
                        	<span class="label label-block label-inverse">No activo</span>
                        <?php endif; ?>
                        </td>
                        <td class="center">
						<a href="<?php echo base_url();?>admin_cliente/cliente_id/<?php echo $row->cliente_id; ?>" class="btn-action glyphicons pencil btn-success"><i></i></a>
						<a href="<?php echo base_url();?>admin_cliente/borra_cliente/<?php echo $row->cliente_id; ?>" class="btn-action glyphicons remove_2 btn-danger"><i></i></a>
                        <a href="<?php echo base_url();?>admin_cliente/archivo_cliente/<?php echo $row->cliente_id; ?>" class="btn-action glyphicons file btn-warning"><i></i></a>
                        </td>
					</tr>
                 <?php endforeach; ?>
                    
				</tbody>
			</table>
		</div>
	</div>
</div>

<br/>