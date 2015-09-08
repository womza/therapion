<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<?php include './common/head-tag.php'; ?>
	<title>Therapy Sessions | Counseling Sessions | Appointment scheduling</title> 
	<meta name="keywords" content="therapy sessions, counseling sessions, appointment scheduling">  
	<meta name="description" content="Therapy and counseling sessions over the Internet. Appointment scheduling.">  
</head>
<body>
<div id="container" class="home">

	<?php include './common/header.php'; ?>

	<div id="main-bd" class="widget">
		<div class="container wrap">			
			<div class="inner">	
					
				<div class="full-column">
					<div class="info">
						
						<h1>Appointment Scheduling</h1> 
						 
						<p>
						To book a session now, select your counselor from the list below. By using our services, you agree to the <a class="link" href="./terms-and-conditions.php" >Terms and Conditions <img src="./assets/images/internal-link.png" /></a>.
						</p>
						
						
						<hr />
					</div>
				</div>
			
						
				<div class="half-column">
					<div class="info">
						<?php require_once('db_conn.php');
						$psicologos=get_psicologos('first',1);
						$i=0;
						//echo print_r($psicologos);
						while($psicologo=$psicologos->fetch_array(MYSQLI_ASSOC)):
							$psicologo_name = get_psicologo_name_url($psicologo);
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="./assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="./<?php echo $psicologo_name ?>">Book with me</a>
							</div>
							
							<h4><a href="./<?php echo $psicologo_name ?>"><?php echo $psicologo['nombres_apellidos'] ?></a></h4>
							
							<p> 
                                                        <b> 
							<?php echo $psicologo['titulo'] ?>
							<br />  
							<?php echo $psicologo['educacion'] ?>
							</b>
                                                        <p>    

							  <p><?php echo $psicologo['informacion_adicional'] ?></p>  
							<p>  
							Counseling themes: <?php echo $psicologo['temas_consulta'] ?>
							<?php if ($psicologo['therapy_programs']==1): ?>
						        and <a class="link small" href="./therapy-programs.php">Therapy Programs <img src="./assets/images/internal-link.png" /></a>  
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
						
						<?php require_once('db_conn.php');
						$psicologos=get_psicologos('second',1);
						$i=0;
						//echo print_r($psicologos);
						foreach($psicologos as $psicologo):
							$psicologo_name = get_psicologo_name_url($psicologo);
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="./assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="./<?php echo $psicologo_name ?>">Book with me</a>
							</div>
							
							<h4><a href="./<?php echo $psicologo_name ?>"><?php echo $psicologo['nombres_apellidos'] ?></a></h4>
							
							<p> 
                                                        <b> 
							<?php echo $psicologo['titulo'] ?>
							<br />  
							<?php echo $psicologo['educacion'] ?>
							</b>
                                                        <p>  

                                                         <p><?php echo $psicologo['informacion_adicional'] ?></p>  
							  
							<p>  
							Counseling themes: <?php echo $psicologo['temas_consulta'] ?>
							<?php if ($psicologo['therapy_programs']==1): ?>
							 and <a class="link small" href="./therapy-programs.php">Therapy Programs <img src="./assets/images/internal-link.png" /></a>  
							<?php endif; ?>
							</p>  
                                                         

							  
							<p>  
							"<?php echo $psicologo['about'] ?>"  
							</p>  

								
							<hr />
 							<br />				
						</div>	
					<?php $i=($i==0)?1:0; endforeach; ?>

                          <?php $equipo=get_equipo(1);
                          		if($equipo['customer_service']==1):
                           ?>
                                            
						
						 
                                                       <div class="profile">
 
 							<div class="photo lft">
								<img src="./assets/images/therapion-logo.jpg" height="150" width="100">							 
								<a class="standardsButton " href="./formcustomerservice.php">Contact us</a>
							</div>
							
							<h4><a href="./formcustomerservice.php">Customer Service</a></h4>
														 
							
							<p>  
                                                        Contact us if you require further information or have any questions regarding your booking. 
                                                        </p>

                                                        <p>
                                                        All correspondence is kept confidential.
                                                        </p>

                                                        <p>
                                                        We'll be glad to assist you.
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