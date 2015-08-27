<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
	<?php include './common/head-tag.php'; 
		require_once '../db_conn.php';
		$psicologo=get_psicologo($_GET['id_psicologo']);
	?>
	<title>Beratung per Telefon</title> 
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
						
					<form method="POST" action="./sendphone.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>">
						
							
							<h3>Beratung per Telefon</h3>    
 
						<p>
                                                Bitte füllen Sie das Formular vollständig aus. 
                                                </p>
														
							<br /><br />
							
								<h3>1. Ihre Kontaktinformation</h3>
							
								
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
								<label class="control-label">Wohnort (Stadt / Land)</label>
								<div class="controls">							      
									<input name="location" type="text" size="30" maxlength="40">
								</div>
							</div>
							<br /><br />
							
							<h3>
							2. Telefonnummer
							</h3>
							
							<p>
                                                        Geben Sie hier bitte Ihre Telefonnummer an. Falls Sie sich im Ausland befinden, geben Sie bitte die Vorwahl für das jeweilige Land mit an.
                                                        </p>
							
							<div class="control-group">
								<label class="control-label">Telefonnummer</label>
								<div class="controls">							
									<input type="text" name="phone" size="25">
								</div>
							</div>
							
							<br />
							<br />
							
							<h3>
							3. Termin
							</h3>
							
                                                        <p>
                                                        Schlagen Sie nun bitte einen Termin vor. Der Termin wir Ihnen dann per E-Mail bestätigt.
                                                        </p> 
							
							<div class="control-group">
								<label class="control-label">Terminvorschlag</label>
								<div class="controls">							
									<textarea rows="4" name="question" cols="63"></textarea>
									<span>Bitte beachten Sie, dass aus organisatorischen Gründen 1-2 Tage zwischen Antrag und Termin liegen sollten.</span>
								</div>
							</div>
							

                                                        <br />
							<p>
                                                        Wenn Sie Ihre Angaben überprüft haben, klicken Sie auf Absenden um Ihre Anfrage an uns zu übermitteln. 
                                                        <br />
                                                        Bitte beachten Sie die nun folgenden Zahlungsinformationen. Vielen Dank.
                                                        </p>


							<div class="wrap-buttons">
								<input class="standardsButton" type="reset" value="Zurücksetzen">
								<input class="standardsButton" type="submit" value="Absenden">
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