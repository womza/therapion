<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
	<?php include './common/head-tag.php'; ?>
	<title>Kundenservice</title> 

	<meta name="keywords" content="Kundenservice"> 
	<meta name="description" content="Unser Kundenservice hilft Ihnen gern weiter."> 

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
						KUNDENSERVICE 
						</h1> 
						 
						<p>
                                                Haben Sie Fragen zu unseren Angeboten? Das Kundenservice-Team berät Sie gerne!
                                                </p>

					 
						 
<p>
<b>
Skype: therapion
<br />
Wir sind 24 Stunden für Sie erreichbar - 7 Tage die Woche.
</b>
</p>
 
						
						<br />
						 
						<form method="POST" action="./desendkundenservice.php"> 
	 
						<h3>KONTAKTFORMULAR</h3>
						 
						 
                                                <p>
                                                Bitte füllen Sie das Kontaktformular vollständig aus. 
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
							<label class="control-label">Ihre Mitteilung</label>
						<div class="controls">		
								<textarea rows="10" name="question" cols="63"></textarea>
								<span>Max. 300 Wörter</span> 
							</div> 
						</div>
							
						
						 
						 <div class="clr"></div> 
						 
                                                <p> 
                                                Wenn Sie Ihre Angaben überprüft haben, klicken Sie bitte auf "Absenden" um Ihre Anfrage an uns zu übermitteln. Vielen Dank.
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