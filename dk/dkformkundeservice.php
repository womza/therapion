<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="da" lang="da">
<head>
	<?php include './common/head-tag.php'; ?>
	<title>Kundeservice - Therapion.com Danmark</title> 

	<meta name="keywords" content="Kundeservice, Danmark"> 
	<meta name="description" content="Har du brug for hjælp, eller mangler du svar på et spørgsmål, så kontakt os."> 

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
						KUNDESERVICE   
						</h1> 
						 
						
						<p> 
Har du spørgsmål eller kommentarer? Vores kundeservice hjælper dig gerne! 
</p> 

 

						<br />
						 
						<form method="POST" action="./dksendkundeservice.php"> 
						 
						 
						<h3>SKRIV TIL OS</h3>
						 
											
									
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
						 
						<div class="control-group">
							<label class="control-label">Kommentar eller spørgsmål</label>
						<div class="controls">		
								<textarea rows="10" name="question" cols="63"></textarea>
								<span>Max. 200 ord</span> 
							</div> 
						</div>
							
						
						 
						 <div class="clr"></div> 
						 
						
Klik på "Send" når du er færdig med din e-mail. Vi skal svare dig så hurtigt som muligt.   
						
						<div class="wrap-buttons">
							<input class="standardsButton" type="reset" value="Fortryd"> 
							<input class="standardsButton" type="submit" value="Send">
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