<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi">
<head>
	<?php include './common/head-tag.php'; ?>
	<title>Jatko: Tilauslomake</title> 
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
						 
					 
						<h1>
						JATKO: TILAUSLOMAKE
							</h1>
							
							<p>
							Ohje: kaikki jatkokonsut ilmoitetaan toimistoon joko tilausj�rjestelm�n kautta tai sitten 
							t�ll� lomakkeella!  
							</p>
							
							<p>
							Esimerkiksi, jos asiakas varaa sinulta uuden livekonsun suullisesti tai l�hett�� s�hk�postiisi uuden kysymyksen, 
                                                        <br />
                                                        tiedota asiasta toimistoon t�ll� lomakkeella. 
							</p> 
							<br /><br />
						
						<form method="POST" action="./fisendjatko.php">
						
							<h3>TILAUKSEN TIEDOT</h3>     
						    
							<p>
							Anna aluksi omat tietosi ja kerro sitten tiedot uudesta konsultaatiosta. 
							</p>		
					
							<br /><br />
							
								<h3>1. Toimijan oma etunimi (esim. Helena, Timo, jne.)</h3>
							
							
								
							<div class="control-group">
								<label class="control-label">Etunimi</label>
								<div class="controls">
									<input name="toimija" type="text" size="30" maxlength="40">
								</div>
							</div>							
							
							<br /><br />
							
							<h3>
							2. Asiakkaan tiedot:
							</h3>
							
							
							<div class="control-group">
								<label class="control-label">Asiakkaan etu- ja sukunimi </label>
								<div class="controls">							
									<input name="asiakas" type="text" size="30" maxlength="40">
								</div>
							</div>
							
							
							<br />
							<br />
							
							<h3>
							3. Konsultaation tiedot
							</h3>
							
<p>
Millainen konsultaatio on kyseess�? Onko se terapiaohjelma? 
<br />
Vai onko se meili, chatti, puhelu vai nettipuhelu? 
</p>

							
							<div class="control-group">
								<label class="control-label">Millainen konsultaatio </label>
								<div class="controls">																
									<input type="text" name="konsunlaji" size="25">
									<span>
										 
									</span>
								</div>
							</div>
							
				<p>
Mik� on live konsultaation ajankohta? 
<br />
Tai jos se on meili-konsultaatio, kerro milloin kysymys tuli sinulle. 
</p>
			
							
							<div class="control-group">
								<label class="control-label">P�iv�m��r�</label>
								<div class="controls">							
									<input type="text" name="ajankohta" size="25">
 

									<span>
										 
									</span>
									
								</div>
							</div>
							
							<br />
							<br />
							
							<h3>
							4. Lis�tiedot 
							</h3>
							
<p>
Kerro t�ss� lis�tietoja, jos niit� on. 
<br />
Voit j�tt�� t�m�n kent�n my�s tyhj�ksi.
</p>

														
							<div class="control-group">
								<label class="control-label">Lis�tiedot</label>
								<div class="controls">																
									<textarea rows="4" name="lisatiedot" cols="63"></textarea>
									<span>
										 
									</span>
								</div>
							</div>
							
							
							
								<p>
								Ole hyv�, tarkista antamasi tiedot viel� kerran ja l�het� lomake sitten. 
								</p>
							<div class="wrap-buttons">
								<input class="standardsButton" type="reset" value="Tyhjenn�">
								<input class="standardsButton" type="submit" value="L�het�">
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