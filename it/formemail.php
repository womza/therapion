<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<head>
	<?php include './common/head-tag.php'; 
		require_once '../db_conn.php';		
		$psicologo=get_psicologo($_GET['id_psicologo']);
	?>
	<title>Consulenza psicologica per email</title> 
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
							<img src="<?php echo get_credentials()['site_root']?>/assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">
						</div>
						
						<h1>
                                                <?php echo $psicologo['nombres_apellidos'] ?> - <?php echo $psicologo['titulo'] ?>
						</h1>
						
						<form method="POST" action="./sendemail.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>">
						
						<h3>Consulenza psicologica per email</h3>    

                                                <p>Richiedere una consulenza privata.</p>


					
						<div class="control-group">
							<label class="control-label">Nome</label>
							<div class="controls">
								<input name="name" type="text" size="30" maxlength="40">
							</div> 
						</div>
						<div class="control-group">
							<label class="control-label">Email</label>
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
							<label class="control-label">Messaggio</label>
							<div class="controls">		
								<textarea rows="15" name="question" cols="63"></textarea>
								<span>Massimo 400 parole</span> 
							</div> 
						</div>
						
		 
						 <div class="clr"></div> 
						 
						<p>
                                                Assicurarsi che l'indirizzo email sia corretto e che tutti i campi siano compilati. 
                                                <br />
                                                Per favore inviare il modulo e seguire le istruzioni seguenti per il pagamento.
                                          	</p>
					
						<div class="wrap-buttons">
							<input class="standardsButton" type="reset" value="Annulare">
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