<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
	<?php include './common/head-tag.php'; ?>

	<title>Sessie via telefoon</title> 
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
                                                 Muriel Lahor - Integratieve psychotherapeut
                                                </h1>

                                               
						
						<form method="POST" action="./nlsendtelefoonmuriel.php">
						
							<h3>Sessie via telefoon</h3> 
    
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
							2. Telefoonnummer 
							</h3>
							
							<p>
                                                        Meld hier uw telefoonnummer. Als u in het buitenland woont, te beginnen met de landcode.
                                                        </p>
							
							<div class="control-group">
								<label class="control-label">Telefoonnummer</label>
								<div class="controls">							
									<input type="text" name="phone" size="25">
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
							

                                                        <br />
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