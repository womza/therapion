<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="da" lang="da">
<head>
	<?php include './common/head-tag.php'; ?>
	<title>Online booking. Psykologisk konsultation. Konsultation hos psykoterapeut.</title> 
          
        <meta name="keywords" content="online booking, book en konsultation, psykolog, psykoterapeut, terapeut"> 
        <meta name="description" content="Book en konsultation. Her kan du bestille tid til personlig konsultation."> 
   
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
                                           ONLINE BOOKING 
                                           </h1>  
  
                                           <p> 
                                           Her kan du bestille en personlig konsultation.
                                           </p> 
  


						
						<hr />
					</div>
				</div>
			
						
				<div class="half-column">
					<div class="info">

                             <?php require_once('../db_conn.php');
						$psicologos=get_psicologos('first',7);
						$i=0;
						//echo print_r($psicologos);
						while($psicologo=$psicologos->fetch_array(MYSQLI_ASSOC)):
							$psicologo_name = get_psicologo_name_url($psicologo);
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="./<?php echo $psicologo_name ?>">Bestil nu!</a>
							</div>
							
							<h4><a href="./<?php echo $psicologo_name ?>"><?php echo $psicologo['nombres_apellidos'] ?></a></h4>
							
							<h5>  
							<?php echo $psicologo['titulo'] ?>
							</h5>  
							  
							<p>  
							Eksempler p� arbejdsomr�der: <?php echo $psicologo['temas_consulta'] ?>
							<?php if ($psicologo['therapy_programs']==1): ?>
							and <a class="link small" href="./therapy_programs">Therapy Programs <img src="../assets/images/internal-link.png" /></a>  
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
						$psicologos=get_psicologos('second',7);
						$i=0;
						//echo print_r($psicologos);
						foreach($psicologos as $psicologo):
							$psicologo_name = get_psicologo_name_url($psicologo);
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="./<?php echo $psicologo_name ?>">Bestil nu!</a>
							</div>
							
							<h4><a href="./<?php echo $psicologo_name ?>"><?php echo $psicologo['nombres_apellidos'] ?></a></h4>
							
							<h5>  
							<?php echo $psicologo['titulo'] ?>
							</h5>  
							  
							<p>  
							Eksempler p� arbejdsomr�der: <?php echo $psicologo['temas_consulta'] ?>
							<?php if ($psicologo['therapy_programs']==1): ?>
							and <a class="link small" href="./therapy_programs">Therapy Programs <img src="../assets/images/internal-link.png" /></a>  
							<?php endif; ?>
							</p>  

							  
							<p>  
							"<?php echo $psicologo['about'] ?>"  
							</p>  
								
							<hr />
 							<br />				
						</div>	
					<?php $i=($i==0)?1:0; endforeach; ?>

                          <?php $equipo=get_equipo(7);
                          		if($equipo['customer_service']==1):
                           ?>



                                             	 <div class="profile">
							
							<div class="photo rgt">
								<img src="../assets/images/kundeservice.jpg" height="150" width="100">							 
								<a class="standardsButton " href="./dkformkundeservice.php">Kontakt</a>
							</div>
							
							<h4><a  href="./dkformkundeservice.php">Kundeservice</a></h4>
							
			
				

<p> 
Du er altid velkommen til at kontakte os hvis du har sp�rgsm�l eller kommentarer.
</p>
 
<p>
Vi st�r altid klar til at hj�lpe dig.
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