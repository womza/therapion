<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="jp" lang="jp">


<head>
	<?php include './common/head-tag.php'; ?>

	<title>日本語カウンセリングご予約</title> 
        <meta name="keywords" content="日本語カウンセリングご予約">
        <meta name="description" content="日本語カウンセリングご予約">
 
</head>
<body>
<div id="container" class="home">

	<?php include './common/header.php'; ?>

	<div id="main-bd" class="widget">
		<div class="container wrap">			
			<div class="inner">	
					
				<div class="full-column">
					<div class="info">
						
						<h1>日本語カウンセリングご予約</h1> 
						 
<p>
日本語によるカウンセリングご予約の際、以下のカウンセラーから希望されるカウンセラーを選択してください。
<br />
カウンセリングご予約完了後、お支払いのページにお支払い方法が表示されます。 
</p>

 
						
						<hr />
					</div>
				</div>
			
						
				<div class="half-column">
					<div class="info">


					<?php require_once('../db_conn.php');
						$psicologos=get_psicologos('first',14,'utf8');
						$i=0;
						//exit(print_r($psicologos->fetch_array(MYSQLI_ASSOC)));
						//echo print_r($psicologos);
						while($psicologo=$psicologos->fetch_array(MYSQLI_ASSOC)):
							$psicologo_name = get_psicologo_name_url($psicologo, true);
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="./<?php echo $psicologo_name ?>">予約する</a>
							</div>
							
							<h4><a href="./<?php echo $psicologo_name ?>"><?php echo $psicologo['nombres_apellidos'] ?></a></h4>
							
							 
                                                        <h5>
							<?php echo $psicologo['educacion'] ?>
							</h5>
                                                         
							  
							<p>  
							カウンセリングのテーマ: <?php echo $psicologo['temas_consulta'] ?>
							<?php if ($psicologo['therapy_programs']==1): ?>
							<a class="link small" href="./japan-therapy-programs.php">セラピー・プログラム <img src="../assets/images/internal-link.png" /></a>  
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
						$psicologos=get_psicologos('second',14,'utf8');
						$i=0;
						//echo print_r($psicologos);
						foreach($psicologos as $psicologo):
							$psicologo_name = get_psicologo_name_url($psicologo, true);
						 ?>
						
						<div class="profile">
 
 							<div class="photo <?php echo ($i==0)?'lft':'rgt' ?>">
								<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">							 
								<a class="standardsButton " href="./<?php echo $psicologo_name ?>">予約する</a>
							</div>
							
							<h4><a href="./<?php echo $psicologo_name ?>"><?php echo $psicologo['nombres_apellidos'] ?></a></h4>
							
							<h5>  
							<?php echo $psicologo['educacion'] ?>
							</h5> 

							</h5>  
							  
							<p>  
							カウンセリングのテーマ: <?php echo $psicologo['temas_consulta'] ?>
							<?php if ($psicologo['therapy_programs']==1): ?>
							<a class="link small" href="./japan-therapy-programs.php">セラピー・プログラム <img src="../assets/images/internal-link.png" /></a>  
							<?php endif; ?>
							</p>  

							  
							<p>  
							"<?php echo $psicologo['about'] ?>"  
							</p>  
								
							<hr />
 							<br />				
						</div>	
					<?php $i=($i==0)?1:0; endforeach; ?>

                          <?php $equipo=get_equipo(14);
                          		if($equipo['customer_service']==1):
                           ?>

			 
						
			

                                    <div class="profile">
							
							<div class="photo rgt">
						<img src="../assets/images/therapion-logo.jpg" height="150" width="100">							 
						<a class="standardsButton " href="./jpformcustomerservice.php">受付先</a>
							</div>
							
					<h4><a  href="./jpformcustomerservice.php">カスタマーサービス</a></h4>
							
<p>
カウンセリングご利用のお問い合わせは無料です。
</p>

<p>
セラピオンは皆様の秘密を厳守します。
</p>

<p>
お問い合わせの際に、セラピオンの提供するメンタルヘルスサービスについてより詳しくお伝えします。
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