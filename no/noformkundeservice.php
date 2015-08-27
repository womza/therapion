<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="no" lang="no">
<head>
	<?php include './common/head-tag.php'; ?>
	<title>Kundeservice - Therapion.com Norge</title> 

	<meta name="keywords" content="Kundservice, Norge"> 
	<meta name="description" content="Kontakt kundeservice hvis du har spørsmål eller trenger hjelp. Vi hjelper deg gjerne."> 

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
                                                Kontakt kundeservice hvis du har spørsmål eller trenger hjelp. Vi hjelper deg gjerne. 
                                                </p>						
						

 

						<br />
						 
						<form method="POST" action="./nosendkundeservice.php"> 
						 
						 
						<h3>SEND OSS EN E-POST</h3>
						 
											
									
						<div class="control-group">
							<label class="control-label">Ditt navn</label>
							<div class="controls">						 
								<input name="name" type="text" size="30" maxlength="40">
							</div> 
						</div>
						
						<div class="control-group">
							<label class="control-label">E-post</label> 
							<div class="controls">		
								<input name="email" type="text" size="30" maxlength="40">
							</div> 
						</div>
						 
						<div class="control-group">
							<label class="control-label">Sted & Land</label>
							<div class="controls">		
								<input name="location" type="text" size="30" maxlength="40">
							</div>
						</div>
						 
						<div class="control-group">
							<label class="control-label">Melding</label>
						<div class="controls">		
								<textarea rows="10" name="question" cols="63"></textarea>
								<span>Maks 200 ord</span> 
							</div> 
						</div>
							
						
						 
						 <div class="clr"></div> 

                                                <p>						 
						Når du er ferdig med å skrive meldingen, klikker du "Send." Vi vil svare deg så snart som mulig.  
                                                </p>
 

						
						<div class="wrap-buttons">
							<input class="standardsButton" type="reset" value="Visk ut"> 
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