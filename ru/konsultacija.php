<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<?php include './common/head-tag.php'; ?>

	<title>Консультация психолога. Консультация психотерапевта.</title> 

<meta name="keywords" content="Консультация, Психолог, Психотерапевт, Консультация психолога, Консультация психотерапевта">
<meta name="description" content="Пожалуйста, выберите Вашего психолога или психотерапевта.">
 
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
						Консультация психолога. Консультация психотерапевта.
						</h1> 
						
						 
<p>
Пожалуйста, выберите Вашего психолога, психотерапевта или коуча.
</p>
						
						
						<hr />
					</div>
				</div>
			
						
				<div class="half-column">
					<div class="info">
<?php require_once('../db_conn.php');
						$psicologos=get_psicologos('first',12,'utf8');
						$i=0;
						//exit(print_r($psicologos->fetch_array(MYSQLI_ASSOC)));
						//echo print_r($psicologos);
						while($psicologo=$psicologos->fetch_array(MYSQLI_ASSOC)):
							$psicologo_name = get_psicologo_name_url($psicologo, true, true);
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="./<?php echo $psicologo_name ?>">Закажите сессию</a>
							</div>
							
							<h4><a href="./<?php echo $psicologo_name ?>"><?php echo $psicologo['nombres_apellidos'] ?></a></h4>
							
							<h5>  
							<?php echo $psicologo['titulo'] ?>
							</h5>  
							  
							<p>  
							Консультационные темы: <?php echo $psicologo['temas_consulta'] ?>
							<?php if ($psicologo['therapy_programs']==1): ?>
							<a class="link small" href="./programma-terapii.php">Программа терапии <img src="../assets/images/internal-link.png" /></a>  
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
						$psicologos=get_psicologos('second',12,'utf8');
						$i=0;
						//echo print_r($psicologos);
						foreach($psicologos as $psicologo):
							$psicologo_name = get_psicologo_name_url($psicologo, true, true);
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="./<?php echo $psicologo_name ?>">Закажите сессию</a>
							</div>
							
							<h4><a href="./<?php echo $psicologo_name ?>"><?php echo $psicologo['nombres_apellidos'] ?></a></h4>
							
							<h5>  
							<?php echo $psicologo['titulo'] ?>
							</h5>  
							  
                                                        <p>                                                              
							Консультационные темы: <?php echo $psicologo['temas_consulta'] ?>
							<?php if ($psicologo['therapy_programs']==1): ?>
							<a class="link small" href="./programma-terapii.php">Программа терапии <img src="../assets/images/internal-link.png" /></a>  
							<?php endif; ?>
							</p> 
							  
							<p>  
							"<?php echo $psicologo['about'] ?>"  
							</p>  
								
							<hr />
 							<br />				
						</div>	
					<?php $i=($i==0)?1:0; endforeach; ?>

                          <?php $equipo=get_equipo(12);
                          		if($equipo['customer_service']==1):
                           ?>
                                            
						
						 
                                                       <div class="profile">
 
 							<div class="photo lft">
								<img src="../assets/images/therapion-logo.jpg" height="150" width="100">							 
								<a class="standardsButton " href="./ruformofis.php">Контакты</a>
							</div>
							
							<h4><a href="./ruformofis.php">Обслуживание клиентов</a></h4>
														 
							
							 

                                                        <p>
                                                        Пожалуйста, пишите нам на электронную почту Ваши замечания.
                                                        </p>

                                                        <p>  
                                                        Предварительное психологическое консультирование является бесплатным и конфиденциальным. 
                                                        </p>

                                                        <p>
                                                        <p>
							Мы ответим Вам в ближайшее время.
							</p>
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