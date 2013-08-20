		<div id="content">
		<ul class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>admin" class="glyphicons home"><i></i> Admin</a></li>
	<li class="divider"></li>
	<li>Listado de galerias</li>
</ul>
<div class="separator"></div>
<h3 class="glyphicons show_thumbnails"><i></i> Galerias</h3>
<div class="separator"></div>

<div class="innerLR">
	<div class="widget widget-gray widget-body-white">
		<div class="widget-head">
			<h4 class="heading">Lista de galerias</h4>
		</div>
        <!----------------------->
        <form name="form" method="post" action="" enctype="multipart/form-data" >
        
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
                        <th>Imágenes</th>
                        <th class="center">Acciones</th>
					</tr>
				</thead>
				<tbody>
                <?php foreach($galeria as $row): ?>
                <input type="hidden" name="galeria_id" value="<?php echo $row->galeria_id; ?>" />
					<tr class="selectable">
                    	<td class="center uniformjs">
                            <label class="radio">
                                <input type="radio" class="radio" name="galeria" value="<?php echo $row->galeria_id; ?>" />
                            </label>
                        </td>
						<td><?php echo $row->nombre; ?></td>
                        <td><span class="glyphicons btn-action single picture" style="margin-right: 0;"><i></i></span><?php echo $row->tb; ?> imágenes</td>
                        <td class="center">
						<a href="<?php echo base_url();?>admin_galeria/galeria_id/<?php echo $row->galeria_id; ?>" class="btn-action glyphicons pencil btn-warning"><i></i></a>
						<a href="<?php echo base_url();?>admin_galeria/borra_galeria/<?php echo $row->galeria_id; ?>" class="btn-action glyphicons remove_2 btn-danger"><i></i></a>
                        <a href="<?php echo base_url();?>admin_galeria/galeria_thumb/<?php echo $row->galeria_id; ?>" class="btn-action glyphicons picture btn-success"><i></i></a>
                        </td>
					</tr>
                 <?php endforeach; ?>
                    
				</tbody>
			</table>

	<div class="clearfix"></div>

    </div>
    </form>
    <!----------------------->

		</div>
	</div>
 
    
</div>

<br/>

