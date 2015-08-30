<?php require_once('../db_conn.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<?php include './common/head-tag.php'; ?>
	<title>INSCRIPCI�N - CURSO INTENSIVO</title> 
        <meta name="keywords" content="inscripci�n>

        <meta name="description" content="Inscripci�n. Si desea inscribirse al curso, sea tan amable de completar el siguiente formulario.">

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
                                                INSCRIPCI�N - CURSO INTENSIVO
                                                </h1>


<p>
Si tiene preguntas antes de inscribirse, favor de comunicarse a nuestra oficina: <a class="link small" href="./esformorientacion.php">Servicio al Cliente <img src="../assets/images/internal-link.png" /></a>
</p>

                                                <p>
                                               Si desea inscribirse al curso, sea tan amable de completar el siguiente formulario..
                                                </p>
 

<h5>
NOTA: �No se aceptan inscripciones sin pago completo!
</h5>


						<br />
						 
						<form method="POST" action="./essendinscripcion.php"> 
						 
						 
						<h3>Formulario de inscripci�n</h3>
						 		
									
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
							<label class="control-label">Pa�s y ciudad de residencia</label>
							<div class="controls">		
								<input name="location" type="text" size="30" maxlength="40">
							</div>
						</div>
						 
						<div class="control-group">
							<label class="control-label">Sobre su trayectoria profesional</label>
						<div class="controls">		
								<textarea rows="10" name="question" cols="63"></textarea>
								<span>M�x. 300 palabras</span> 
							</div> 
						</div>
							
						
						 
						 <div class="clr"></div> 
						 
						<p>
                                                Por favor, verifique los datos antes de enviarlos.  
                                                <br />
                                                <br />
                                                El sistema le dar� instrucciones de c�mo realizar el pago para continuar. 	
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