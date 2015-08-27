<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="da" lang="da">
<head>
	<?php include './common/head-tag.php'; 
		require_once '../db_conn.php';
		$psicologo=get_psicologo($_GET['id_psicologo']);
	?>
	<title>Konsultation via telefon eller mobiltelefon</title> 
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
						
							<h3>Konsultation via telefon eller mobiltelefon</h3>     
						    

<p>
Book din konsultation her.
</p>
														
							<br /> 
							
								<h3>1. Kontaktinformation</h3>
							<br />
								
							<div class="control-group">
								<label class="control-label">Dit navn</label>
								<div class="controls">
									<input name="name" type="text" size="30" maxlength="40">
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label">E-mail adresse</label>
								<div class="controls">
									<input name="email" type="text" size="30" maxlength="40">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label">Stad & Land</label>
								<div class="controls">							      
									<input name="location" type="text" size="30" maxlength="40">
								</div>
							</div>
							<br /><br />
							
							<h3>
							2. Dit telefonnummer
							</h3>
							
							<p>
                                                        Vi kan ringe til dig. Hvis du bor i udlandet, skal du starte dit telefonnummer med landekode.
							</p>

                                                        <br />

							<div class="control-group">
								<label class="control-label">Dit telefonnummer</label>
								<div class="controls">							
									<input type="text" name="phone" size="25">
								</div>
							</div>
							
							<br />
							<br />
							
							<h3>
							3. �nsket tidspunkt
							</h3>
							
                                                        <p>
                                                        Venligst angive �nsket dato/tidspunkt for konsultationen. Hvis du �nsker, kan du ogs� skrive nogle ord om din situation.
                                                        </p>

                                                        <br />
							
							<div class="control-group">
								<label class="control-label">Dine forslag til tidspunkten</label>
								<div class="controls">							
									<textarea rows="4" name="question" cols="63"></textarea>
									<span>Hvis du bor i udlandet, glem ikke at fort�lle tidszonen.</span>
								</div>
							</div>
							

                                                        <br />
							<p>
                                                        Klik p� "Send" n�r du er f�rdig. S� f�r du en bekr�ftelse med betalingsinstruktioner.
                                                        </p>
							


							<div class="wrap-buttons">
								<input class="standardsButton" type="reset" value="Fortryd">
								<input class="standardsButton" type="submit" value="Send">
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