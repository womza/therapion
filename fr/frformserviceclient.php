<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<?php include './common/head-tag.php'; ?>
	<title>Service Clients</title> 
	<meta name="keywords" content="Service Clients"> 
	<meta name="description" content="Service Clients. Contactez notre Service Clients pour toute information complémentaire.">  
 

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
						SERVICE CLIENTS 
						</h1> 
						 
						
						<p>
                                                Contactez notre service clients pour toute information complémentaire. 
                                                </p>

						<br />
						 
						<form method="POST" action="./frsendserviceclient.php"> 
						 
						 
						<h3>FORMULAIRE DE CONTACT</h3>
						
                                                <br />
						 
										
									
						<div class="control-group">
							<label class="control-label">Votre nom</label>
							<div class="controls">						 
								<input name="name" type="text" size="30" maxlength="40">
							</div> 
						</div>
						
						<div class="control-group">
							<label class="control-label">Adresse email</label> 
							<div class="controls">		
								<input name="email" type="text" size="30" maxlength="40">
							</div> 
						</div>
						 
						<div class="control-group">
							<label class="control-label">Ville / Pays</label>
							<div class="controls">		
								<input name="location" type="text" size="30" maxlength="40">
							</div>
						</div>
						 
						<div class="control-group">
							<label class="control-label">Votre message</label>
						<div class="controls">		
								<textarea rows="10" name="question" cols="63"></textarea>
								<span>Max. 200 mots</span> 
							</div> 
						</div>
							
						
						 
						 <div class="clr"></div> 
						 
                                                 <p>   
                                                 Remplissez les champs avec des données, puis envoyez le formulaire. 
                                                 </p> 
   
						
						<div class="wrap-buttons">
							<input class="standardsButton" type="reset" value="Effacer"> 
							<input class="standardsButton" type="submit" value="Envoyer">
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