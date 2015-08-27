<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
	<?php include './common/head-tag.php'; 
		require_once '../db_conn.php';		
		$psicologo=get_psicologo($_GET['id_psicologo']);
	?>

	<title>Beratung per E-Mail</title> 
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
						
						<form method="POST" action="./sendemail.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>">
						
						<h3>Beratung per E-Mail</h3>   

                                               	
                                                <p>
                                                Bitte füllen Sie das Formular vollständig aus. 
                                                </p> 


					
						<div class="control-group">
							<label class="control-label">Name</label>
							<div class="controls">
								<input name="name" type="text" size="30" maxlength="40">
							</div> 
						</div>
						<div class="control-group">
							<label class="control-label">E-Mail</label>
							<div class="controls">						
								<input name="email" type="text" size="30" maxlength="40">
							</div> 
						</div>
						
						<div class="control-group">
							<label class="control-label">Wohnsitz (Stadt / Land)</label>
							<div class="controls">					
								<input name="location" type="text" size="30" maxlength="40">
							</div> 
						</div>
						
						
						
						<div class="control-group">
							<label class="control-label">Ihre Frage</label>
							<div class="controls">		
								<textarea rows="15" name="question" cols="63"></textarea>
								<span>Max. 500 Wörter</span> 
							</div> 
						</div>
						
		 
						 <div class="clr"></div> 
						 
						<p>
                                                Wenn Sie Ihre Angaben überprüft haben, klicken Sie auf Absenden um Ihre Anfrage an uns zu übermitteln.
                                                <br />
                                                Bitte beachten Sie die nun folgenden Zahlungsinformationen. Vielen Dank.
						</p>

						<div class="wrap-buttons">
							<input class="standardsButton" type="reset" value="Zurücksetzen">
							<input class="standardsButton" type="submit" value="Absenden">
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