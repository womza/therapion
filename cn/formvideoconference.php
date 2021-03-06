<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-hans" lang="zh-hans"> 
<head>
	<?php include './common/head-tag.php'; 
		require_once '../db_conn.php';
		$psicologo=get_psicologo($_GET['id_psicologo'],'utf8');
	?>
	<title>Video conference counseling</title> 
	<meta name="keywords" content="">
	<meta name="robots" value="noindex,nofollow" />
</head>
<body>
<div id="container" class="home">

	<?php include './common/header.php'; ?>

	<div id="main-bd" class="widget">
		<div class="container wrap">			
			<div class="inner">	
					
				<div class="full-column">
					<div class="info">
						 
					 	<div class="photo rgt">
							<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">
						</div>
						
						<h1>
                                                <?php echo $psicologo['nombres_apellidos'] ?> - <?php echo $psicologo['titulo'] ?>
						</h1>
						
						<form method="POST" action="./sendvideoconference.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>">
						
							<h3>Video conference counseling </h3>     
						    
							<p>
							Complete the form below to book your session.
							</p>		
					
							<br /><br />
							
								<h3>1. Contact information</h3>
							
								
							<div class="control-group">
								<label class="control-label">Your name</label>
								<div class="controls">
									<input name="name" type="text" size="30" maxlength="40">
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label">E-mail address</label>
								<div class="controls">
									<input name="email" type="text" size="30" maxlength="40">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label">Town & Country</label>
								<div class="controls">							      
									<input name="location" type="text" size="30" maxlength="40">
								</div>
							</div>
							<br /><br />
							
							<h3>
							2. Video conference service provider
							</h3>
							<p>
							
<p>
Choose your preferred video conference service provider. 
<br />
Options include Skype, VSee, Facebook, etc.  
</p>							 
							
							<div class="control-group">
								<label class="control-label">Service provider</label>
								<div class="controls">							
									<input type="text" name="program" size="25">
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label">Your username</label>
								<div class="controls">							
									<input type="text" name="username" size="25">
								</div>
							</div>
							<br />
							<br />
							
							<h3>
							3. Schedule your appointment
							</h3>
							
<p>
Suggest at least two (2) dates and times when you are available. 
<br />
Your counselor will confirm the session time after you have made the payment.
</p>
							
							<div class="control-group">
								<label class="control-label">Suggested session schedule</label>
								<div class="controls">							
									<textarea rows="4" name="question" cols="63"></textarea>
									<span>Please state your time zone.</span>
								</div>
							</div>
							
							<h5>
							Once you have completed this form, click the Submit button below. 
							<br>
							Press the Reset button, if you would like to clear this form and start again. 
							</h5>
							<div class="wrap-buttons">
								<input class="standardsButton" type="reset" value="Reset">
								<input class="standardsButton" type="submit" value="Submit">
							</div>
							</form>
					</div>
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