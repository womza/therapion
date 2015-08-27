<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<head>
	<?php include './common/head-tag.php'; 
		require_once '../db_conn.php';
		$psicologo=get_psicologo($_GET['id_psicologo']);
	?>
	<title>Consulenza psicologica via telefono</title> 
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
						
						<h3>Consulenza psicologica via telefono</h3>     
						    
								
                                                <p>
                                                Richiedere una consulenza privata.
                                                </p>

						
							<br /><br />
							
								<h3>1. Dati cliente</h3>
							
								
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
							<br /><br />
							
							<h3>
							2. Numero di telefono  
							</h3>
							
							<p>
                                                        Inserisca qui per favore il Suo numero di telefono. In caso stesse all'estero servirebbe anche il prefisso del paese nel quale si trova.
                                                        </p>
							

							<div class="control-group">
								<label class="control-label">Numero di telefono</label>
								<div class="controls">							
									<input type="text" name="phone" size="25">
								</div>
							</div>
							
							<br />
							<br />
							
							<h3>
							3. La data e l'ora della sessione
							</h3>
							
                                                        <p>
                                                        Per favore inserisca la proposta per una data.
                                                        </p>

							
							<div class="control-group">
								<label class="control-label">La proposta</label>
								<div class="controls">							
									<textarea rows="4" name="question" cols="63"></textarea>
									<span>Per motivi organizzativi dovranno trascorrere 1-2 giorni tra domanda e data dell'appuntamento richiesto.</span>
								</div>
							</div>
							

                                                        <br />

							<p>
                                                       Assicurarsi che l'indirizzo e-mail sia corretto e che tutti i campi siano compilati. 
                                                       <br />
                                                       Per favore inviare il modulo e seguire le istruzioni seguenti per il pagamento.
                                                       </p>


							<div class="wrap-buttons">
								<input class="standardsButton" type="reset" value="Annulare">
								<input class="standardsButton" type="submit" value="Inviare">
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