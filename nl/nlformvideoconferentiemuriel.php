<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
	<?php include './common/head-tag.php'; ?>

	<title>Sessie via videoconferentie</title> 
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
							<img src="../assets/images/profiles/muriel.jpg" height="150" width="100">
						</div>
						
						<h1>
						Muriel Lahor -  Integratieve psychotherapeut
						</h1>

 

						
						<form method="POST" action="./nlsendvideoconferentiemuriel.php">
						
							<h3>Sessie via videoconferentie</h3>     
						   
						<p>
                                                Boek nu uw sessie.
                                                </p>
					
							<br /><br />
							
								<h3>1. Contactgegevens</h3>
							
								
							<div class="control-group">
								<label class="control-label">Naam</label>
								<div class="controls">
									<input name="name" type="text" size="30" maxlength="40">
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label">E-mail</label>
								<div class="controls">
									<input name="email" type="text" size="30" maxlength="40">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label">Woonplaats (stad / land)</label>
								<div class="controls">							      
									<input name="location" type="text" size="30" maxlength="40">
								</div>
							</div>
							<br /><br />
							
							<h3>
							2. Videoconferentie-programma 
							</h3>

							<p>
                                                        Kies hier het videoconferentie-programma (bijv. Skype).
                                                        </p>
							
							<div class="control-group">
								<label class="control-label">Programma</label>
								<div class="controls">							
									<input type="text" name="program" size="25">
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label">Gebruikersnaam</label>
								<div class="controls">							
									<input type="text" name="username" size="25">
								</div>
							</div>
							<br />
							<br />
							
							<h3>
							3. Afspraak
							</h3>
						
	
                                                         <p>
                                                 Kies ten minste twee (2) dagen en tijden wanneer u beschikbaar bent. 
                                                        <br />
                                                Uw therapeut zal de afspraak per email na betaling bevestigen.
                                                        </p>
							
							<div class="control-group">
								<label class="control-label">Gekozen tijdstip</label>
								<div class="controls">							
									<textarea rows="4" name="question" cols="63"></textarea>
									<span></span>
								</div>

								 
							</div>

                           
							
							<p> 
                                                        Vul alle velden in en klik op "Verstuur". Volg de betalingsinstructies op het scherm.
              						</p>

							<div class="wrap-buttons">
								<input class="standardsButton" type="reset" value="Reset">
								<input class="standardsButton" type="submit" value="Verstuur">
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