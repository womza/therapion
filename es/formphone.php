<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<?php include './common/head-tag.php'; 
		require_once '../db_conn.php';
		$psicologo=get_psicologo($_GET['id_psicologo']);
	?>
<title>Consulta por tel�fono </title> 
	<meta name="keywords" content="">
	<meta name="robots" value="noindex,nofollow" />
</head>
<body>
<div id="container" class="home">

	<?php include './common/header.php'; ?>

	<div id="main-bd" class="widget">
		<div class="container wrap">			
			<div class="inner">	
					
				<div class="full-column">
					<div class="info">
						 
					 	<div class="photo rgt">
							<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">
						</div>
						
						<h1>
                                                <?php echo $psicologo['nombres_apellidos'] ?> - <?php echo $psicologo['titulo'] ?>
						</h1>
						
						<form method="POST" action="./sendphone.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>">
						
						
							<h3>Consulta por tel�fono</h3>     
						    
							<p>
								En esta p�gina usted puede reservar una consulta conmigo.
							</p>							
							<br /><br />
							
								<h3>1. Datos personales</h3>
							
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
								<label class="control-label">Correo electr�nico</label>
								<div class="controls">
									<input name="email" type="text" size="30" maxlength="40">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label">Pa�s y ciudad de donde me escribe</label>
								<div class="controls">							      
									<input name="location" type="text" size="30" maxlength="40">
								</div>
							</div>
							<br /><br />
							
							<h3>
							2. N�mero de tel�fono  
							</h3>
							
							<p>
							Por favor, escriba su n�mero de tel�fono fijo o celular. Si vive en el extranjero, comience con el c�digo del pa�s.
							<p>
							
							<div class="control-group">
								<label class="control-label">N�mero de tel�fono</label>
								<div class="controls">							
									<input type="text" name="phone" size="25">
								</div>
							</div>
							
							<br />
							<br />
							
							<h3>
							3. Fecha y horario de consulta
							</h3>
							

                                                         <p>
                                                         Por favor, sugerir dos alternativas de fecha y horario. El psic�logo le dar� la cita disponible.
                                                         </p> 

							
							<div class="control-group">
								<label class="control-label">Sugerencias de fecha y horario</label>
								<div class="controls">							
									<textarea rows="4" name="question" cols="63"></textarea>
									<span>Si vive en el extranjero, no olvidar mencionar el pa�s y la ciudad para ajustarnos al horario.</span>
								</div>
							</div>

<br />
							
								<p>
							Por favor, verifique los datos antes de enviarlos. 
							El sistema le dar� instrucciones de c�mo realizar el pago para continuar. 
								</p>


							<div class="wrap-buttons">
								<input class="standardsButton" type="reset" value="Reiniciar">
								<input class="standardsButton" type="submit" value="Enviar">
							</div>
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