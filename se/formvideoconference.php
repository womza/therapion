<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">

<head>
	<?php include './common/head-tag.php';

		require_once '../db_conn.php';
		$psicologo=get_psicologo($_GET['id_psicologo']);
	?>


	<title>Konsultation per videosamtal (dvs ett samtal via Internet)</title> 
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

						
                                               <h3>Konsultation per videosamtal (dvs ett samtal via Internet)</h3>     
						    

                                                <p>
                                                P� den h�r sidan kan du boka en konsultation med mig.
                                                </p>

					 
						 
													
							<br /><br />
							
								<h3>1. Personuppgifter</h3>
							
								
							<div class="control-group">
								<label class="control-label">Ditt namn</label>
								<div class="controls">
									<input name="name" type="text" size="30" maxlength="40">
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label">Din e-postadress</label>
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
							2. Program som ska anv�nds 
							</h3>
							<p>
							Du kan v�lja programmet som du tycker b�st. Typiska alternativ �r Skype, VSee, Facebook, och s� vidare.  
							</p>
							
							<div class="control-group">
								<label class="control-label">Program som du har valt</label>
								<div class="controls">							
									<input type="text" name="program" size="25">
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label">Ditt anv�ndarnamn</label>
								<div class="controls">							
									<input type="text" name="username" size="25">
								</div>
							</div>
							<br />
							<br />
							
							<h3>
							3. Konsultationstiden
							</h3>
						
	
                                                        <p>
                                                        V�nligen f�resl� n�gra tider som skulle passa dig. Om du vill, kan du skriva n�gra ord om din situation ocks�.
                                                        </p>

							
							<div class="control-group">
								<label class="control-label">Ditt f�reslag om konsultationstid</label>
								<div class="controls">							
									<textarea rows="4" name="question" cols="63"></textarea>
									<span>Om du bor utomlands, gl�m inte att ber�tta om det, annars vet vi inte vilken tid du talar om.</span> 
								</div>
							</div>

                                                        <br />
							
							<p>
							F�r att s�nda iv�g ditt meddelande, klicka p� Skicka. Sedan f�r du bekr�ftelse med betalningsinstruktioner.
							</p>

							<div class="wrap-buttons">
								<input class="standardsButton" type="reset" value="�terst�lla">
								<input class="standardsButton" type="submit" value="Skicka">
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