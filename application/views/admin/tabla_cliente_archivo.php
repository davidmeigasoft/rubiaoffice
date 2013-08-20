		<div id="content">
		<ul class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>admin" class="glyphicons home"><i></i> Admin</a></li>
	<li class="divider"></li>
	<li><a href="<?php echo base_url(); ?>admin_cliente/listado_clientes">Listado de clientes</a></li>
    <li class="divider"></li>
	<li>Archivos de 
    <?php foreach($cliente as $row): ?>
	 <?php echo $row->nombre; ?>
    <?php endforeach; ?>
    </li>
</ul>
<div class="separator"></div>
<h3 class="glyphicons show_thumbnails"><i></i> Archivos</h3>
<div class="separator"></div>

<div class="innerLR">
	<div class="widget widget-gray widget-body-white">
		<div class="widget-head">
			<h4 class="heading">Listado de archivos</h4>
		</div>
		<div class="widget-body" style="padding: 10px 0;">
			<table class="dynamicTable table table-striped table-bordered table-primary table-condensed">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Ruta</th>
                        <th>Acciones</th>
                        
					</tr>
				</thead>
				<tbody>
                <?php foreach($archivo as $row): ?>
					<tr class="gradeA">
						<td><?php echo $row->nombre; ?></td>
						<td><?php echo $row->ruta; ?></td>
                        <td class="center">
						<a href="<?php echo base_url();?>admin_cliente/quita_archivo/<?php echo $row->archivo_id; ?>/<?php echo $row->cliente_id; ?>" class="btn-action glyphicons remove_2 btn-danger"><i></i></a>
                        </td>
					</tr>
                 <?php endforeach; ?>
                    
				</tbody>
			</table>
		</div>
	</div>
</div>

<br/>