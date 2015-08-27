<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<?php include './common/head-tag.php'; ?>

	<title>Verkkoneuvonta. Ajanvaraus. Psykologipalvelu. Psykoterapia. Uraneuvonta.</title> 
	<meta name="keywords" content="verkkoneuvonta, ajanvaraus, konsultaatio, psykologipalvelu, psykoterapia, uraneuvonta"> 
	<meta name="description" content="Verkkoneuvonnan ajanvaraus. Varaa tästä mieleisesi nettitapaaminen tai käytä palvelua sähköpostin avulla.">   
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
						VARAA PALVELU
						</h1>
						
						<p> 
						Ole hyvä ja valitse aluksi mieleisesi psykologi tai psykoterapeutti. 
						</p> 
						
						<hr />
					</div>
				</div>
			
						
				<div class="half-column">
					<div class="info">
 
	<?php require_once('../db_conn.php');
						$psicologos=get_psicologos('first',4);
						$i=0;
						//echo print_r($psicologos);
						while($psicologo=$psicologos->fetch_array(MYSQLI_ASSOC)):
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="./bookwith.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>">Varaa palvelu</a>
							</div>
							
							<h4><a href="./bookwith.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>"><?php echo $psicologo['nombres_apellidos'] ?></a></h4>
							
							<p> 
                                                        <b> 
							<?php echo $psicologo['titulo'] ?>
							<br />  
							<?php echo $psicologo['educacion'] ?>
							</b>
                                                        <p>  

							  <p><?php echo $psicologo['informacion_adicional'] ?></p>  

							  
							<p>  
							Konsultaation aiheita: <?php echo $psicologo['temas_consulta'] ?>
							<?php if ($psicologo['therapy_programs']==1): ?>
							sekä <a class="link small" href="./terapiaohjelma.php">Yksilölliset terapiaohjelmat <img src="../assets/images/internal-link.png" /></a>  
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
						$psicologos=get_psicologos('second',4);
						$i=0;
						//echo print_r($psicologos);
						while($psicologo=$psicologos->fetch_array(MYSQLI_ASSOC)):
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="./bookwith.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>">Varaa palvelu</a>
							</div>
							
							<h4><a href="./bookwith.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>"><?php echo $psicologo['nombres_apellidos'] ?></a></h4>

							<p> 
                                                        <b> 
							<?php echo $psicologo['titulo'] ?>
							<br />  
							<?php echo $psicologo['educacion'] ?>
							</b>
                                                        <p>   
							  
                                                        <p><?php echo $psicologo['informacion_adicional'] ?></p>  

							<p>  
							Konsultaation aiheita: <?php echo $psicologo['temas_consulta'] ?>
							<?php if ($psicologo['therapy_programs']==1): ?>
							sekä <a class="link small" href="./terapiaohjelma.php">Yksilölliset terapiaohjelmat <img src="../assets/images/internal-link.png" /></a>  
							<?php endif; ?>
							</p>  

							  
							<p>  
							"<?php echo $psicologo['about'] ?>"  
							</p>  
								
							<hr />
 							<br />				
						</div>	
					<?php $i=($i==0)?1:0; endwhile; ?>

					 <?php $equipo=get_equipo(4);
                          		if($equipo['customer_service']==1):
                           ?>

                                                      


                                                <div class="profile">
 
 							<div class="photo rgt">
								<img src="../assets/images/therapion-logo.jpg" height="150" width="100">							 
								<a class="standardsButton " href="./fiformkartoitus.php">Yhteydet</a>
							</div>
							
							<h4><a href="./fiformkartoitus.php">Asiakaspalvelu</a></h4>
														 
							<p>
                                                        Asiakaspalvelu auttaa mielellään kaikissa palveluun liittyvissä asioissa.
                                                        </p>

                                                       <p>
                                                       Ota rohkeasti yhteyttä!
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