<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<head>
	<?php include './common/head-tag.php'; ?>
	<title>Servizio Clienti</title> 
	<meta name="keywords" content="Servizio Clienti"> 
	<meta name="description" content="servizio clienti. Gentile cliente, se desidera ricevere ulteriori informazioni, compili il form sottostante."> 
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
						SERVIZIO CLIENTI
						</h1> 
						 
						
						
						<p> 
                                                Gentile cliente, se desidera ricevere ulteriori informazioni, compili il form sottostante.
                                                </p> 
						<br />
						 
						<form method="POST" action="./itsendservizioclienti.php"> 
						 
						 
						<h3>FORM DI CONTATTO</h3>
						 
						 
										
									
						<div class="control-group">
							<label class="control-label">Nome</label>
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
							<label class="control-label">Residenza (Cittá / Paese)</label>
							<div class="controls">		
								<input name="location" type="text" size="30" maxlength="40">
							</div>
						</div>
						 
						<div class="control-group">
							<label class="control-label">Il Suo messaggio</label>
						<div class="controls">		
								<textarea rows="10" name="question" cols="63"></textarea>
								<span>Max. 200 parole</span> 
							</div> 
						</div>
							
						
						 
						 <div class="clr"></div> 
						 
						<p>  
                                                Assicurarsi che l'indirizzo e-mail sia corretto e che tutti i campi siano compilati. Molte grazie. 
                                                </p>  
						
						<div class="wrap-buttons">
							<input class="standardsButton" type="reset" value="Annullare"> 
							<input class="standardsButton" type="submit" value="Inviare">
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