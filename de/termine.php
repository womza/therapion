<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
	<?php include './common/head-tag.php'; ?>

	<title>Terminvereinbarung. Termine vereinbaren.</title> 

        <meta name="keywords" content="terminvereinbarung, termine vereinbaren, psychologe, psychotherapeut, berater"> 
        <meta name="description" content="Terminvereinbarung. Termine vereinbaren. Hier können Sie direkt mit den Beratern/innen einen Termin vereinbaren."> 
 
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
						TERMINVEREINBARUNG 
						</h1> 
						  
						<p> 
                                                Bitte wählen Sie einen Psychologen aus der Liste aus. 
                                                </p> 			
						
												
						<hr />
					</div>
				</div>
			
						
				<div class="half-column">
					<div class="info">

						<?php require_once('../db_conn.php');
						$psicologos=get_psicologos('first',9);
						$i=0;
						//exit(print_r($psicologos->fetch_array(MYSQLI_ASSOC)));
						//echo print_r($psicologos);
						while($psicologo=$psicologos->fetch_array(MYSQLI_ASSOC)):
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="./bookwith.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>">Termin buchen</a>
							</div>
							
							<h4><a href="./bookwith.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>"><?php echo $psicologo['nombres_apellidos'] ?></a></h4>
							
							<p> 
                                                        <b> 
							<?php echo $psicologo['titulo'] ?>
							<br />  
							<?php echo $psicologo['educacion'] ?>
							</b>
                                                        </p> 
							  

							  <p><?php echo $psicologo['informacion_adicional'] ?></p> 

							<p>  
							Themenübersicht: <?php echo $psicologo['temas_consulta'] ?>
							<?php if ($psicologo['therapy_programs']==1): ?>
							und <a class="link small" href="./therapieprogramm.php">Therapieprogramme <img src="../assets/images/internal-link.png" /></a>  
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
						$psicologos=get_psicologos('second',9);
						$i=0;
						//echo print_r($psicologos);
						foreach($psicologos as $psicologo):
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="./bookwith.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>">Termin buchen</a>
							</div>
							
							<h4><a href="./bookwith.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>"><?php echo $psicologo['nombres_apellidos'] ?></a></h4>
							
							<p> 
                                                        <b> 
							<?php echo $psicologo['titulo'] ?>
							<br />  
							<?php echo $psicologo['educacion'] ?>
							</b>
                                                        </p> 
							  
							  <p><?php echo $psicologo['informacion_adicional'] ?></p> 

							<p>  
							Themenübersicht: <?php echo $psicologo['temas_consulta'] ?>
							<?php if ($psicologo['therapy_programs']==1): ?>
							und <a class="link small" href="./therapieprogramm.php">Therapieprogramme <img src="../assets/images/internal-link.png" /></a>   
							<?php endif; ?>
							</p>  

							  
							<p>  
							"<?php echo $psicologo['about'] ?>"  
							</p>  
								
							<hr />
 							<br />				
						</div>	
					<?php $i=($i==0)?1:0; endforeach; ?>

                          <?php $equipo=get_equipo(9);
                          		if($equipo['customer_service']==1):
                           ?>

                                                        <div class="profile">
 
 							<div class="photo lft">
								<img src="../assets/images/therapion-logo.jpg" height="150" width="100">							 
								<a class="standardsButton " href="./deformkundenservice.php">Kontakt</a>
							</div>
							
							<h4><a href="./deformkundenservice.php">Kundenservice</a></h4>
														 
							<p>
                                                       Haben Sie Fragen zu unseren Angeboten?
                                                       </p>

							
                                                        <p>
                                                       Das Kundenservice-Team berät Sie gerne!
                                                        </p>							 
 							 

                                                        <p>
                                                       Hier finden Sie schnell Unterstützung.
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