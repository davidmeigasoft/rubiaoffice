		<div id="content">
		<ul class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>admin" class="glyphicons home"><i></i> Admin</a></li>
	<li class="divider"></li>
	<li>Listado de artículos</li>
</ul>
<div class="separator"></div>
<h3 class="glyphicons show_thumbnails"><i></i> Artículos</h3>
<div class="separator"></div>

<div class="innerLR">
	<div class="widget widget-gray widget-body-white">
		<div class="widget-head">
			<h4 class="heading">Listado de artículos</h4>
		</div>
		<div class="widget-body" style="padding: 10px 0;">
			<table class="dynamicTable table table-striped table-bordered table-primary table-condensed">
				<thead>
					<tr>
						<th>Nom</th>
                        <th>Marca</th>
                        <th>Color</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th class="center">Acciones</th>
                        
					</tr>
				</thead>
				<tbody>
                <?php foreach($articulo as $row): ?>
					<tr class="gradeA">
						<td><?php echo $row->nombre; ?></td>
                        <td><?php echo $row->marca; ?></td>
                        <td><?php echo $row->color; ?></td>
                        <td><?php echo $row->precio; ?></td>
                        <td><?php echo $row->stock; ?></td>
                       <!-- <td>
						<?php /* foreach ($subcategoria as $row_subcategoria):
							 if ($row->subcategoria == $row_subcategoria->subcategoria_id):
                            	foreach ($categoria as $row_categoria):
									if ($row_subcategoria->categoria == $row_categoria->categoria_id): 
                            			echo $row_categoria->nombre;
									endif;
                        		endforeach;	
                            endif;
                        endforeach; ?>
 
                        </td
                        <td>
     					 <?php foreach ($subcategoria as $row_subcategoria):?>
							<?php if ($row->subcategoria == $row_subcategoria->subcategoria_id): ?>
                            	<?php echo $row_subcategoria->nombre; ?>
                            <?php endif; ?>
                        <?php endforeach; */?>
                        </td>>-->
                        
						<td class="center">
 <a href="<?php echo base_url();?>admin_articulo/articulo_id/<?php echo $row->articulo_id; ?>" class="btn-action glyphicons pencil btn-success"><i></i></a>
						<a href="<?php echo base_url();?>admin_articulo/borra_articulo/<?php echo $row->articulo_id; ?>" class="btn-action glyphicons remove_2 btn-danger"><i></i></a>
                        <a href="<?php echo base_url();?>admin_galeria/galeria_thumb/<?php echo $row->articulo_id; ?>" class="btn-action glyphicons picture btn-success"><i></i></a>
                        </td>
					</tr>
                 <?php endforeach; ?>
                    
				</tbody>
			</table>
                         <?php if(isset($error)): ?>
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php echo $error; ?>
                </div>
            <?php endif; ?>
		</div>
	</div>
</div>

<br/>