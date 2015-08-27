<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="no" lang="no">
<head>
	<?php include './common/head-tag.php'; 
		require_once '../db_conn.php';
		$psicologo=get_psicologo($_GET['id_psicologo']);
	?>
	<title>Konsultasjon per telefon eller mobiltelefon</title> 
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
						
							<h3>Konsultasjon per telefon eller mobiltelefon</h3>   
  
						    <p>
                                                   På denne siden kan du bestille en konsultasjon med meg.
                                                   </p>
														
							<br /><br />
							
								<h3>1. Kontaktinformasjon</h3>
							
								
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
							<br /><br />
							
							<h3>
							2. Ditt telefonnummer 
							</h3>
							
							<p>
                                                        Psykologen kan ringe til både vanlig telefon og mobiltelefon. Hvis du bor i utlandet, vennligst start telefonnummeret med landskoden. 
                                                        </p>
                                                       
							
							<div class="control-group">
								<label class="control-label">Ditt telefonnummer</label>
								<div class="controls">							
									<input type="text" name="phone" size="25">
								</div>
							</div>
							
							<br />
							<br />
							
							<h3>
							3. Ønsket tidspunkt for konsultasjon
							</h3>

							<p>
                                                        Vennligst foreslå noen dager og tidspunkt som passer for deg. Hvis du ønsker det kan du også skrive noen ord om situasjonen din.
                                                        </p>
                                                        
                                                        <br />
							
							<div class="control-group">
								<label class="control-label">Dine forslag for tidspunkt</label>
								<div class="controls">							
									<textarea rows="4" name="question" cols="63"></textarea>
									<span>Oppgi tidspunkt for ønsket kontakt i lokal tid.</span>
								</div>
							</div>
							

                                                        <br />
							 
                                                        <h5>
                                               Når du er ferdig med å skrive meldingen, klikker du på “Send”.
                                               <br />
                                               Deretter får du en bekreftelse med betalingsinstruksjoner.
                                               </h5> 
                                                         


							<div class="wrap-buttons">
								<input class="standardsButton" type="reset" value="Visk ut">
								<input class="standardsButton" type="submit" value="Send">
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