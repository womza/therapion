<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<?php include './common/head-tag.php'; ?>
	<title>Consulta com um psicólogo, terapeuta o psicoterapeuta. Consulta psicológica.</title> 
        <meta name="keywords" content="consulta com psicólogo, consulta com psicoterapeuta, consulta psicólogica">
        <meta name="description" content="Consulta com um psicólogo, terapeuta o psicoterapeuta. Consulta psicológica.">


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
						CONSULTA: SERVIÇO PAGO 
						</h1> 
						  				
                                                

                                                <p>
                                                Para reservar uma sessão agora, selecione o profissional através do perfil na lista abaixo. 
                                                </p>

                                                <p>
                                                O sistema dará instruções sobre como fazer o pagamento no final do processo de reserva. 
                                                </p>
							
                                                 <h5>
                                                Para todas as sessões é necessário um pagamento adiantado. 
                                                </h5>
                                              					
						<hr />
					</div>
				</div>
			
						
				<div class="half-column">
					<div class="info">
						<?php require_once('../db_conn.php');
						$psicologos=get_psicologos('first',3);
						$i=0;
						//echo print_r($psicologos);
						while($psicologo=$psicologos->fetch_array(MYSQLI_ASSOC)):
							$psicologo_name = get_psicologo_name_url($psicologo);
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="./<?php echo $psicologo_name ?>">Consultar agora</a>
							</div>
							
							<h4><a href="./<?php echo $psicologo_name ?>"><?php echo $psicologo['nombres_apellidos'] ?></a></h4>
							
							<p> 
                                                        <b> 
							<?php echo $psicologo['titulo'] ?>
							<br />  
							<?php echo $psicologo['educacion'] ?>
							</b>
                                                        <p>   
							  
							<p>  
							Temas de aconselhamento: <?php echo $psicologo['temas_consulta'] ?>
							<?php if ($psicologo['therapy_programs']==1): ?>
							e <a class="link small" href="./programas-de-terapia-e-auto-ajuda.php">Programas de terapia <img src="../assets/images/internal-link.png" /></a>  
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
						$psicologos=get_psicologos('second',3);
						$i=0;
						//echo print_r($psicologos);
						foreach($psicologos as $psicologo):
							$psicologo_name = get_psicologo_name_url($psicologo);
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="./<?php echo $psicologo_name ?>">Consultar agora</a>
							</div>
							
							<h4><a href="./<?php echo $psicologo_name ?>"><?php echo $psicologo['nombres_apellidos'] ?></a></h4>
							
							<p> 
                                                        <b> 
							<?php echo $psicologo['titulo'] ?>
							<br />  
							<?php echo $psicologo['educacion'] ?>
							</b>
                                                        <p>  

							<p>  
							Temas de aconselhamento: <?php echo $psicologo['temas_consulta'] ?>
							<?php if ($psicologo['therapy_programs']==1): ?>
							e <a class="link small" href="./programas-de-terapia-e-auto-ajuda.php">Programas de terapia <img src="../assets/images/internal-link.png" /></a>  
							<?php endif; ?>
							</p>  

							  
							<p>  
							"<?php echo $psicologo['about'] ?>"  
							</p>  
								
							<hr />
 							<br />				
						</div>	
					<?php $i=($i==0)?1:0; endforeach; ?>

                          <?php $equipo=get_equipo(3);
                          		if($equipo['customer_service']==1):
                           ?>
                                            
						
						 
                                                       <div class="profile">
 
 							<div class="photo rgt">
								<img src="../assets/images/therapion-logo.jpg" height="150" width="100">							 
								<a class="standardsButton " href="https://www.therapion.com/pt/ptformservicoaocliente.php">Contato</a>
							</div>
							
							<h4><a href="https://www.therapion.com/pt/ptformservicoaocliente.php">Serviço ao cliente</a></h4>
														 
							
							
                                                        <p> 
                                                     Contate nosso escritório para saber mais sobre os nossos serviços. 
                                                       </p>

                                                        <p>
                                                     O serviço ao cliente é confidencial e gratuito.
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