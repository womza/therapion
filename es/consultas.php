<?php require_once('../db_conn.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<?php include './common/head-tag.php'; ?>

	<title>Cita con psicólogo o con psicóloga. Reservar una cita psicológica.</title> 
	<meta name="keywords" content="reservar, cita, consulta, psicologo, psicóloga, psicologia"> 
 	<meta name="Description" content="Cita con psicólogo. Consulta de psicología. Si desea concertar una cita, puede cumplimentar el siguiente formulario.">
 
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
						CONSULTAS
						</h1> 
						  
						 
						<p>
						Si desea concertar una cita, puede elegir su psicólogo(a) de esta lista.
						</p>
						
						
						<p> 
						Los servicios de paga son: consulta por correo electrónico, chat, teléfono o videoconferencia.  
						</p> 
						 
						<h5>                   
                                                Favor de reservar su consulta primero y después pagarla. 
                                                </h5>	
					
						<hr />
					</div>
				</div>
			
						
				<div class="half-column">
					<div class="info">

						<?php
						$psicologos=get_psicologos('first',2);
						$i=0;
						//echo print_r($psicologos);
						while($psicologo=$psicologos->fetch_array(MYSQLI_ASSOC)):
							$psicologo_name = get_psicologo_name_url($psicologo);
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="<?php echo BASE_URL.'/es/'.$psicologo_name ?>">Pedir cita</a>
							</div>
							
							<h4><a href="<?php echo BASE_URL.'/es/'.$psicologo_name ?>"><?php echo $psicologo['nombres_apellidos'] ?></a></h4>
							
							<p> 
                                                        <b> 
							<?php echo $psicologo['titulo'] ?>
							<br />  
							<?php echo $psicologo['educacion'] ?>
							</b>
                                                        <p>   


							  <p><?php echo $psicologo['informacion_adicional'] ?></p>  
							 

							<p>  
							Temas de consulta: <?php echo $psicologo['temas_consulta'] ?>
							<?php if ($psicologo['therapy_programs']==1): ?>
							y <a class="link small" href="./programas-de-terapia.php">Programas de terapia <img src="../assets/images/internal-link.png" /></a>  
							<?php endif; ?>
							</p>  

							  
							<p>  
							"<?php echo $psicologo['about'] ?>"  
							</p>  
								
							<hr />
 							<br />				
						</div>	
					<?php $i=($i==0)?1:0; endwhile; ?>




				
					</div>					 
				</div><!-- FIN COLUMNA1 -->
				<div class="half-column">
					<div class="info">
 
                                          <?php
						$psicologos=get_psicologos('second',2);
						$i=0;
						//echo print_r($psicologos);
						while($psicologo=$psicologos->fetch_array(MYSQLI_ASSOC)):
							$psicologo_name = get_psicologo_name_url($psicologo);
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="<?php echo BASE_URL.'/es/'.$psicologo_name ?>">Pedir cita</a>
							</div>
							
							<h4><a href="<?php echo BASE_URL.'/es/'.$psicologo_name ?>"><?php echo $psicologo['nombres_apellidos'] ?></a></h4>
							
							 
                                                        <p> 
                                                        <b> 
							<?php echo $psicologo['titulo'] ?>
							<br />  
							<?php echo $psicologo['educacion'] ?>
							</b>
                                                        <p>  


							  <p><?php echo $psicologo['informacion_adicional'] ?></p>  
							 

							  
							<p>  
							Temas de consulta: <?php echo $psicologo['temas_consulta'] ?>
							<?php if ($psicologo['therapy_programs']==1): ?>
							y <a class="link small" href="./programas-de-terapia.php">Programas de terapia <img src="../assets/images/internal-link.png" /></a>  
							<?php endif; ?>
							</p>  

							  
							<p>  
							"<?php echo $psicologo['about'] ?>"  
							</p>  
								
							<hr />
 							<br />				
						</div>	
					<?php $i=($i==0)?1:0; endwhile; ?>

					 <?php $equipo=get_equipo(2);
                          		if($equipo['customer_service']==1):
                           ?>

                                                      


                                                <div class="profile">
 
 							<div class="photo rgt">
								<img src="../assets/images/therapion-logo.jpg" height="150" width="100">							 
								<a class="standardsButton " href="./esformorientacion.php">Contactos</a>
							</div>
							
							<h4><a href="./esformorientacion.php">Servicio al Cliente</a></h4>
														 
							<p>
							Favor de comunicarse a nuestra oficina si tiene preguntas o dudas sobre su consulta o si desea conocer mejor nuestros servicios. 
                                                        </p>

                                                        <p>
                                                       El servicio al cliente es confidencial y gratis. 
                                                       </p>

                                                        <p>
                                                       Agradecemos sus comentarios y sugerencias.
                                                        </p>							 
 							 
							
							<hr />
 							<br />

                                                       </div>
                                                       <?php endif; ?>		

						 

					
					</div>					
				</div>
								
				<div class="clr"></div>
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