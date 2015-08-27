<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">
<head>
	<?php include './common/head-tag.php'; ?>
	<title>Kontakta oss - Kundservice</title> 
	<meta name="keywords" content="kundservice"> 
	<meta name="description" content="Kundservice. Vi ger dig g�rna mer information om v�ra tj�nster."> 
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
						KUNDSERVICE  
						</h1> 
						 
						
                                                <p> 
                                                Vi ger dig g�rna mer information om v�ra tj�nster.  
                                                </p>

 
						
						<br />
						 
						<form method="POST" action="./sesendkundservice.php"> 
						 
						 
						<h3>Kontakta oss via e-post</h3>
						 
						 
											
									
						<div class="control-group">
							<label class="control-label">Ditt namn</label>
							<div class="controls">						 
								<input name="name" type="text" size="30" maxlength="40">
							</div> 
						</div>
						
						<div class="control-group">
							<label class="control-label">E-postadress</label> 
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
						 
						<div class="control-group">
							<label class="control-label">Meddelande</label>
						<div class="controls">		
								<textarea rows="10" name="question" cols="63"></textarea>
								<span>Beskriv ditt �rende (max 200 ord)</span> 
							</div> 
						</div>
							
						
						 
						 <div class="clr"></div> 
						 
                                                <p> 
                                                F�r att s�nda iv�g ditt meddelande, klicka p� Skicka. Vi svarar s� snart som m�jligt!   
                                                </p>

						
						<div class="wrap-buttons">
							<input class="standardsButton" type="reset" value="�terst�lla"> 
							<input class="standardsButton" type="submit" value="Skicka">
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