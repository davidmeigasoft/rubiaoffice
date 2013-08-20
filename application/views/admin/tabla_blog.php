		<div id="content">
		<ul class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>admin" class="glyphicons home"><i></i> Admin</a></li>
	<li class="divider"></li>
	<li>Listado de posts</li>
</ul>
<div class="separator"></div>
<h3 class="glyphicons show_thumbnails"><i></i> Posts</h3>
<div class="separator"></div>

<div class="innerLR">
	<div class="widget widget-gray widget-body-white">
		<div class="widget-head">
			<h4 class="heading">Listado de entradas</h4>
		</div>
		<div class="widget-body" style="padding: 10px 0;">
			<table class="dynamicTable table table-striped table-bordered table-primary table-condensed">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Fecha alta</th>
                        <th>Imágenes</th>
                        <th class="center">Acciones</th>
					</tr>
				</thead>
				<tbody>
                <?php foreach($blog as $row): ?>
					<tr class="gradeA">
						<td><?php echo $row->nombre; ?></td>
						<td><?php echo $row->fecha_alta; ?></td>
                        <td><span class="glyphicons btn-action single picture" style="margin-right: 0;"><i></i></span><?php echo $row->tb; ?> imágenes</td>
                        <td class="center">
						<a href="<?php echo base_url();?>admin_blog/blog_id/<?php echo $row->blog_id; ?>" class="btn-action glyphicons pencil btn-success"><i></i></a>
						<a href="<?php echo base_url();?>admin_blog/borra_blog/<?php echo $row->blog_id; ?>" class="btn-action glyphicons remove_2 btn-danger"><i></i></a>
                        <a href="<?php echo base_url();?>admin_blog/blog_thumb/<?php echo $row->blog_id; ?>" class="btn-action glyphicons picture btn-success"><i></i></a>
                        </td>
					</tr>
                 <?php endforeach; ?>
                    
				</tbody>
			</table>
		</div>
	</div>
</div>

<br/>