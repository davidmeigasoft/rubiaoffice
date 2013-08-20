<?php include('header.php');?>

<div class="clearfix"></div>
 
<div class="page_title">

	<div class="container">
		<div class="leaft_title"><h1>Contacto</h1></div>
        <div class="reght_pagenation"><a href="index.html">Home</a> <i>/</i> Contacto</div>
	</div>
</div><!-- end page title --> 

<!-- Contant
======================================= -->

<div class="container">

<div class="content_fullwidth">
    
    	<div id="content_area">
        
        	<div class="one_full">
            
           
            <h3>Dónde estamos</h3>
				<iframe class="google-map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.es/maps?q=42.851256,-8.583695&amp;num=1&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll=42.850963,-8.583728&amp;output=embed"></iframe><br /><small><a href="http://maps.google.es/maps?q=42.851256,-8.583695&amp;num=1&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll=42.850963,-8.583728&amp;source=embed" style="color:#0000FF;text-align:left"></a></small>
            
            </div><!-- end google map -->
            
            <div class="clearfix mar_top2"></div>
            
            <div class="one_full">
            <!--<h2>Some Information</h2>
            <p>Feel free to talk to our online representative at any time you please using our Live Chat system on our website or one of the below instant messaging programs.</p>
            
            <p>Please be patient while waiting for response. (24/7 Support!)<br /><br />
            <strong>Phone General Inquiries: 1-888-123-4567-8900</strong></p>-->
            
            </div>
            
		<div class="mar_top3"></div>

            <div class="one_half">
            
            <div class="address-info">
                    <h2>Dirección</h2>
                        <ul>
                        <li>
                        <strong>Galioffice</strong><br />
                        Poligono empresarial Novo Milladoiro<br />
                        Móvil: 689 099 720<br />
                        E-mail: <a href="mailto:mail@companyname.com">comercial@galioffice.es</a><br />
                        Website: <a href="index.php">Galioffice.es</a>
                        </li>
                        
                        <li>
                        <br />
                        <strong>Horario</strong>
                        <p>Lunes - Viernes 10:00 a 14:00</p>
                        <p>Sabado de 10:00 a 14:00</p>
                        <div class="clearfix mar_top5"></div>
                        </li>
                    </ul>
                </div>
            </div>
              
            
            <div class="one_half last">	            
            
            <h2>Formulario de contacto</h2>
		
					<form name="form" method="post" class="form-horizontal" action="<?php echo base_url().'inicio/validar_formulario'; ?>">  
					
						<fieldset>
						
												
						<label for="name" class="blocklabel">Su nombre*</label>
						<p class="" ><input name="name" class="input_bg" type="text" id="name" value=''/></p>
						
						
						<label for="email" class="blocklabel">E-Mail*</label>
						<p class="" ><input name="email" class="input_bg" type="text" id="email" value='' /></p>
						
						
						<label for="website" class="blocklabel">Web</label>
						<p><input name="website" class="input_bg" type="text" id="website" value=""/></p>
						
						
						<label for="message" class="blocklabel">Mensaje*</label>
						<p class=""><textarea name="message" class="textarea_bg" id="message" cols="20" rows="7" ></textarea></p>
						
						
						<p>
						<input type="hidden" id="myemail" name="myemail" value="gsrthemes9@gmail.com" />
						<input type="hidden" id="myblogname" name="myblogname" value="yourcompanyname.com" />
						<div class="clearfix"></div>
						<input name="Send" type="submit" value="Enviar" class="button medium align" id="send"/></p>
								

						<?php if (validation_errors() == true): ?>
                        <br/>
                        <div id="div4" class="error">
                            <div class="message-box-wrap">
                            <button class="close-but" id="colosebut2">close</button><strong>Error</strong>
          				
                        <?php echo validation_errors(); ?>
                        </div>
						</div>
                        
                       <?php endif;
                       
                       if(isset($msg)): ?>
                            <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php echo $msg; ?>
                            </div>
                        <?php endif; ?>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                                				
						</fieldset>
						
						</form> 
			</div>
            
            
        
    </div>
    
    </div><!-- end content full width area -->

</div>

<div class="clearfix mar_top2"></div>

