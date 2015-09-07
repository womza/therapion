<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php include './common/head-tag.php'; 
		require_once 'db_conn.php';		
		$psicologo=get_psicologo($_GET['id_psicologo']);
	?>
	<title>E-mail counseling</title> 
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
							<img src="<?php echo get_credentials()['site_root']?>/assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">
						</div>
						
						<h1>
                                                <?php echo $psicologo['nombres_apellidos'] ?> - <?php echo $psicologo['titulo'] ?>
						</h1>
						
					<form method="POST" action="<?php echo get_credentials()['site_root']?>/sendemail.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>">
						
						<h3>E-mail counseling</h3>     

						<p>
Complete the form below to book your session.
						</p>		
						
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
						
						
						
						<div class="control-group">
							<label class="control-label">Your question</label>
							<div class="controls">		
								<textarea rows="15" name="question" cols="63"></textarea>
								<span>Max. 500 words</span> 
							</div> 
						</div>
						
		 
						 <div class="clr"></div> 
						 
						<h5>
							Once you have completed this form, click the Submit button below.
					       <br />
							Press the Reset button, if you would like to clear this form and start again.  
						</h5>
						
						<div class="wrap-buttons">
							<input class="standardsButton" type="reset" value="Reset">
							<input class="standardsButton" type="submit" value="Submit">
						</div>
						<div class="clr"></div> 
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