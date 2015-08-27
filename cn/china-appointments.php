<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-hans" lang="zh-hans">

<head>


	<?php include './common/head-tag.php'; ?>
	<title>預約 |粵語/國語心理輔導, 現在預約</title> 
        <meta name="keywords" content="預約, 粵語/國語心理輔導, 現在預約">
	 
	<meta name="description" content="粵語/國語心理輔導, 現在預約">  


</head>
<body>
<div id="container" class="home">

	<?php include './common/header.php'; ?>

	<div id="main-bd" class="widget">
		<div class="container wrap">			
			<div class="inner">	
					
				<div class="full-column">
					<div class="info">
						
						<h1>粵語/國語心理輔導, 現在預約</h1> 
						 
						<p>
						To book a session now, select your counselor from the list below. 
                                                <br />
                                                 By using our services, you agree to the <a class="link" href="./china-terms-and-conditions.php" >Terms and Conditions <img src="../assets/images/internal-link.png" /></a>.
						</p>
						
						
						<hr />
					</div>
				</div>
			
						
				<div class="half-column">
					<div class="info">

						
							<?php require_once('../db_conn.php');
						$psicologos=get_psicologos('first',15,'utf8');
						$i=0;
						//exit(print_r($psicologos->fetch_array(MYSQLI_ASSOC)));
						//echo print_r($psicologos);
						while($psicologo=$psicologos->fetch_array(MYSQLI_ASSOC)):
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="./bookwith.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>">Book with me</a>
							</div>
							
							<h4><a href="./bookwith.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>"><?php echo $psicologo['nombres_apellidos'] ?></a></h4>
							
							<p> 
                                                        <b> 
							<?php echo $psicologo['titulo'] ?>
							<br />  
							<?php echo $psicologo['educacion'] ?>
							</b>
                                                        <p> 
							 
							  
							<p>  
							Counseling themes: <?php echo $psicologo['temas_consulta'] ?>
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
						$psicologos=get_psicologos('second',15,'utf8');
						$i=0;
						//echo print_r($psicologos);
						foreach($psicologos as $psicologo):
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="./bookwith.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>">Book with me</a>
							</div>
							
							<h4><a href="./bookwith.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>"><?php echo $psicologo['nombres_apellidos'] ?></a></h4>
							
							<p> 
                                                        <b> 
							<?php echo $psicologo['titulo'] ?>
							<br />  
							<?php echo $psicologo['educacion'] ?>
							</b>
                                                        <p>  
							  
							<p>  
							Counseling themes: <?php echo $psicologo['temas_consulta'] ?>
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

                          <?php $equipo=get_equipo(15);
                          		if($equipo['customer_service']==1):
                           ?>

						
						 
                                                       <div class="profile">
 
 							<div class="photo rgt">
								<img src="../assets/images/therapion-logo.jpg" height="150" width="100">							 
								<a class="standardsButton " href="./cnformcustomerservice.php">聯絡我們</a>
							</div>
							
							<h4><a href="./cnformcustomerservice.php">客戶服務</a></h4>
														 
							
							<p>  
                                                        如果對我們的服務有任何疑問或需要幫助, 歡迎聯絡客戶服務部 
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