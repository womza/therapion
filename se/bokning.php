<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">
<head>
	<?php include './common/head-tag.php'; ?>

	<title>Psykologer och psykoterapeuter. Boka konsultation.</title> 
        <meta name="keywords" content="boka konsultation, psykolog, psykologer, psykoterapeut, psykoterapeuter, terapeut, terapeuter">  
        <meta name="description" content="Boka konsultation. Här hittar du en legitimerad psykolog. Här hittar du en legitimerad psykoterapeut. Leg. psykolog. Leg. psykoterapeut.">  
    
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
                                           BOKNING: avgiftsbelagda tjänster  
                                           </h1>  
  

                                           <p>  
                                           Var vänlig och välj din psykolog, psykoterapeut eller coach.   
                                           </p> 

						
						<hr />
					</div>
				</div>
			
						
				<div class="half-column">
					<div class="info">
 
	<?php require_once('../db_conn.php');
						$psicologos=get_psicologos('first',5);
						$i=0;
						//echo print_r($psicologos);
						while($psicologo=$psicologos->fetch_array(MYSQLI_ASSOC)):
							$psicologo_name = get_psicologo_name_url($psicologo);
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="./<?php echo $psicologo_name ?>">Boka nu</a>
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
							Exempel på frågeområden: <?php echo $psicologo['temas_consulta'] ?>
							<?php if ($psicologo['therapy_programs']==1): ?>
							och <a class="link small" href="./terapiprogram.php">Terapiprogram <img src="../assets/images/internal-link.png" /></a>  
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
                                            <?php require_once('../db_conn.php');
						$psicologos=get_psicologos('second',5);
						$i=0;
						//echo print_r($psicologos);
						while($psicologo=$psicologos->fetch_array(MYSQLI_ASSOC)):
							$psicologo_name = get_psicologo_name_url($psicologo);
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="./<?php echo $psicologo_name ?>">Boka nu</a>
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
							Exempel på frågeområden: <?php echo $psicologo['temas_consulta'] ?>
							<?php if ($psicologo['therapy_programs']==1): ?>
							och <a class="link small" href="./terapiprogram.php">Terapiprogram <img src="../assets/images/internal-link.png" /></a>  
							<?php endif; ?>
							</p>  

							  
							<p>  
							"<?php echo $psicologo['about'] ?>"  
							</p>  
								
							<hr />
 							<br />				
						</div>	
					<?php $i=($i==0)?1:0; endwhile; ?>

					 <?php $equipo=get_equipo(5);
                          		if($equipo['customer_service']==1):
                           ?>

                                                      


                                                <div class="profile">
 
 							<div class="photo rgt">
								<img src="../assets/images/therapion-logo.jpg" height="150" width="100">							 
								<a class="standardsButton " href="./seformkundservice.php">Kontakt</a>
							</div>
							
							<h4><a href="./seformkundservice.php">Kundservice</a></h4>
														 
							  
                                                        <p>
                                                        Välkommen att kontakta oss för mer information om våra tjänster.
                                                       </p>
                                                     

                                                        <p> 
                                                        Vi hjälper dig gärna!
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