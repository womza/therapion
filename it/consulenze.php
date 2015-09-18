<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<head>
	<?php include './common/head-tag.php'; ?>

	<title>Consulenza private. Prenotazione - psicologia e psicoterapia.</title> 

	<meta name="keywords" content="consulenza psicologica, prenotazione, psicologia, psicoterapia"> 
        <meta name="description" content="Prenotazione - psicologia e psicoterapia. Scegliere il Suo psicologo o psicoterapeuta in questa lista."> 
 

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
						CONSULENZE PRIVATE - PRENOTAZIONE
						</h1> 
						  
						 
						<p> 
                                                Scegliere il Suo psicologo o psicoterapeuta in questa lista. 
                                                </p>
						
						<hr />
					</div>
				</div>
			
						
				<div class="half-column">
					<div class="info">

						
						<?php require_once('../db_conn.php');
						$psicologos=get_psicologos('first',11);
						$i=0;
						//exit(print_r($psicologos->fetch_array(MYSQLI_ASSOC)));
						//echo print_r($psicologos);
						while($psicologo=$psicologos->fetch_array(MYSQLI_ASSOC)):
							$psicologo_name = get_psicologo_name_url($psicologo);
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="./<?php echo $psicologo_name ?>">Prenotare ora</a>
							</div>
							
							<h4><a href="./<?php echo $psicologo_name ?>"><?php echo $psicologo['nombres_apellidos'] ?></a></h4>
							
							<p><b>  
							<?php echo $psicologo['titulo'] ?>
							<br />
							<?php echo $psicologo['educacion'] ?>
							</b></p>
							   
							  
							<p>  
							Campi di intervento: <?php echo $psicologo['temas_consulta'] ?>
							<?php if ($psicologo['therapy_programs']==1): ?>
							and <a class="link small" href="./therapy_programs">Therapy Programs <img src="./assets/images/internal-link.png" /></a>  
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
						$psicologos=get_psicologos('second',11);
						$i=0;
						//echo print_r($psicologos);
						foreach($psicologos as $psicologo):
							$psicologo_name = get_psicologo_name_url($psicologo);
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="./<?php echo $psicologo_name ?>">Prenotare ora</a>
							</div>
							
							<h4><a href="./<?php echo $psicologo_name ?>"><?php echo $psicologo['nombres_apellidos'] ?></a></h4>
							
							<p><b>  
							<?php echo $psicologo['titulo'] ?>
							<br />
							<?php echo $psicologo['educacion'] ?>
							</b></p>
							  
							<p>  
							Campi di intervento: <?php echo $psicologo['temas_consulta'] ?>
							<?php if ($psicologo['therapy_programs']==1): ?>
							and <a class="link small" href="./therapy_programs">Therapy Programs <img src="./assets/images/internal-link.png" /></a>  
							<?php endif; ?>
							</p>  

							  
							<p>  
							"<?php echo $psicologo['about'] ?>"  
							</p>  
								
							<hr />
 							<br />				
						</div>	
					<?php $i=($i==0)?1:0; endforeach; ?>

                          

                          <?php $equipo=get_equipo(11);
                          		if($equipo['customer_service']==1):
                           ?>
                                            


                                                <div class="profile">
 
 							<div class="photo rgt">
								<img src="../assets/images/therapion-logo.jpg" height="150" width="100">							 
								<a class="standardsButton " href="./itformservizioclienti.php"> Contatti</a>
							</div>
							
							<h4><a href="./itformservizioclienti.php">Servizio clienti</a></h4>
														 
							<p>
						Il servizio clienti è a vostra completa disposizione, per rispondere alle vostre domande.
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