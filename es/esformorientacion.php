<?php require_once('../db_conn.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<?php include './common/head-tag.php'; ?>
	<title>Servicio al cliente</title> 
	<meta name="keywords" content="Servicio al cliente"> 
	<meta name="description" content="Favor de comunicarse a nuestra oficina para conocer mejor nuestros servicios. El servicio al cliente es confidencial y sin ningún costo adicional."> 
 </head>
<body>
<div id="container" class="home">

	<?php include './common/header.php'; ?>

	<div id="main-bd" class="widget">
		<div class="container wrap">			
			<div class="inner">	
					
				<div class="full-column">
					<div class="info">
						 
						<h1> 
						SERVICIO AL CLIENTE 
						</h1> 
						 
						
						<p> 
						Favor de comunicarse a nuestra oficina para conocer mejor nuestros servicios. 
						<br />
						El servicio al cliente es confidencial y gratis. Agradecemos sus comentarios y sugerencias. 
						</p> 
						
<p>
<b>
NOTA: Para las preguntas psicológicas se requiere una consulta: 
<a class="link small" href="./consultas.php">Pedir cita <img src="../assets/images/internal-link.png" /></a> 
</b>
</p>
				
<br />		 
						<form method="POST" action="./essendorientacion.php"> 
						 
						 
						<h3>CORREO ELECTRÓNICO </h3>
						 
						 
						<p> 
						Por favor, introduzca sus datos personales.  
						</p> 
					
									
						<div class="control-group">
							<label class="control-label">Nombre</label>
							<div class="controls">						 
								<input name="name" type="text" size="30" maxlength="40">
							</div> 
						</div>
						
						<div class="control-group">
							<label class="control-label">Correo electrónico</label> 
							<div class="controls">		
								<input name="email" type="text" size="30" maxlength="40">
							</div> 
						</div>
						 
						<div class="control-group">
							<label class="control-label">País y ciudad de donde nos escribe</label>
							<div class="controls">		
								<input name="location" type="text" size="30" maxlength="40">
							</div>
						</div>
						 
						<div class="control-group">
							<label class="control-label">Comentarios</label>
						<div class="controls">		
								<textarea rows="10" name="question" cols="63"></textarea>
								<span>Máx. 200 palabras</span> 
							</div> 
						</div>
							
						
						 
						 <div class="clr"></div> 
						 
						<p> 
						Por favor, verifique que sus datos personales sean los correctos y que este satisfecho con su pregunta. 
                                                <br />
                                               Una vez terminado, envié su mensaje a nuestra oficina.	 
						</p> 
						
						<div class="wrap-buttons">
							<input class="standardsButton" type="reset" value="Reiniciar"> 
							<input class="standardsButton" type="submit" value="Enviar">
						</div>
						<div class="clr"></div> 
						</form> 
					</div>
				</div>
							
		</div>			
	</div>	
</div>
	
	
	
	<div id="toTop"></div>

	<?php include './common/footer.php'; ?>
</div>
<?php include './common/fast.js.php'; ?>
</body>
</html>