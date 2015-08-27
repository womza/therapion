<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<?php include './common/head-tag.php'; 
		require_once '../db_conn.php';
		$psicologo=get_psicologo($_GET['id_psicologo']);
	?>
	<title>Consultation par téléphone</title> 
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
						 
						<form method="POST" action="./sendphone.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>">
						
							
							<h3>Consultation par téléphone</h3>     
						    
						 <p>
                                                Réservez votre consultation maintenant.
                                                 </p>
						
							<br /><br />
							
								<h3>1. Le client</h3>
							
								
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
							<br /><br />
							
							<h3>
							2. Numéro de téléphone 
							</h3>
							
							<p>
                                                        S'il vous plaît, entrez votre numéro de téléphone. 
                                                        <br />
                                                        Si vous résidez à l'étranger, indiquez votre numéro précédé de + et du code pays sur 3 chiffres.
                                                        </p>
							
							<div class="control-group">
								<label class="control-label">Numéro de téléphone</label>
								<div class="controls">							
									<input type="text" name="phone" size="25">
								</div>
							</div>
							
							<br />
							<br />
							
							<h3>
							3. Votre séance
							</h3>
							
                                                         <p>
                                                        vous pouvez choisir l'heure et la date pour votre séance. 
                                                        <br />
                                                        La thérapeute confirmera votre session dès que vous aurez effectué le paiement.
                                                        </p>
							
							<div class="control-group">
								<label class="control-label">Date et heure préférées</label>
								<div class="controls">							
									<textarea rows="4" name="question" cols="63"></textarea>
									<span>Si vous résidez à l'étranger, veuillez indiquer l'heure locale.</span>
								</div>
							</div>
							

                                                        <br />

							<p>
                                                        Remplissez les champs avec des données, puis envoyez le formulaire.
                                                        <br />
                                                        Suivez ensuite les instructions pour le règlement.
                                                        </p>


							<div class="wrap-buttons">
								<input class="standardsButton" type="reset" value="Effacer">
								<input class="standardsButton" type="submit" value="Envoyer">
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