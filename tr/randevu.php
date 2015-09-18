<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="tr-TR" lang="tr-TR">
<head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
	<?php include './common/head-tag.php'; ?>

	<title>Randevu Hizmetini</title> 

	<meta name="keywords" content="Psikolog,Terapist,Psikoterapist,Randevu Hizmetini">  
  
<meta name="description" content="E-Randevu: Randevu hizmeti. Psikolog randevu hizmetini. Terapist randevu hizmetini.">

 
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
						Randevu Hizmeti 
						</h1> 
						  
						 
						<p>  
                                               Randevu sistemini kullanarak terapistinizden online randevu alabilirsiniz.
                                                </p>  
										
						<hr />
					</div>
				</div>
			
						
				<div class="half-column">
					<div class="info">



<?php require_once('../db_conn.php');
						$psicologos=get_psicologos('first',13,'latin5');
						$i=0;
						//exit(print_r($psicologos->fetch_array(MYSQLI_ASSOC)));
						//echo print_r($psicologos);
						while($psicologo=$psicologos->fetch_array(MYSQLI_ASSOC)):
							$psicologo_name = get_psicologo_name_url($psicologo);
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="./<?php echo $psicologo_name ?>">Randevu al</a>
							</div>
							
							<h4><a href="./<?php echo $psicologo_name ?>"><?php echo $psicologo['nombres_apellidos'] ?></a></h4>
							
							<h5>  
							<?php echo $psicologo['titulo'] ?>
							<br />                                                         
							<?php echo $psicologo['educacion'] ?>
							</h5>   
							  
							<p>  
							Danışmanlık alanları: <?php echo $psicologo['temas_consulta'] ?>
							<?php if ($psicologo['therapy_programs']==1): ?>
							, and <a class="link small" href="./therapy_programs">Therapy Programs <img src="./assets/images/internal-link.png" /></a>  
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
						$psicologos=get_psicologos('second',13,'latin5');
						$i=0;
						//echo print_r($psicologos);
						foreach($psicologos as $psicologo):
							$psicologo_name = get_psicologo_name_url($psicologo);
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="./<?php echo $psicologo_name ?>">Randevu al</a>
							</div>
							
							<h4><a href="./<?php echo $psicologo_name ?>"><?php echo $psicologo['nombres_apellidos'] ?></a></h4>
							
							<h5>  
							<?php echo $psicologo['titulo'] ?>
							<br />  
							<?php echo $psicologo['educacion'] ?>
							</h5>   
							  
							<p>  
							Danışmanlık alanları: <?php echo $psicologo['temas_consulta'] ?>
							<?php if ($psicologo['therapy_programs']==1): ?>
							, and <a class="link small" href="./therapy_programs">Therapy Programs <img src="./assets/images/internal-link.png" /></a>  
							<?php endif; ?>
							</p>  

							  
							<p>  
							"<?php echo $psicologo['about'] ?>"  
							</p>  
								
							<hr />
 							<br />				
						</div>	
					<?php $i=($i==0)?1:0; endforeach; ?>

                          <?php $equipo=get_equipo(13);
                          //exit(print_r($equipo));
                          		if($equipo['customer_service']==1):
                           ?>



                                               
                                                <div class="profile">
 
 							<div class="photo lft">
								<img src="../assets/images/therapion-logo.jpg" height="150" width="100">							 
								<a class="standardsButton " href="./trformcustomerservice.php">Kişiler</a>
							</div>
							
							<h4><a href="./trformcustomerservice.php">Müşteri Hizmetleri</a></h4>
														 
							<p>
							Müşteri Hizmetleri olarak size destek olmak için buradayız. 
                                                        </p>

                                                        <p>
                                                        Lütfen daha fazla bilgi için bize ulaşın.
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