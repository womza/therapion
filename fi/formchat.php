<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<?php include './common/head-tag.php'; 
		require_once '../db_conn.php';		
		$psicologo=get_psicologo($_GET['id_psicologo']);
	?>
		<title>Konsultaatio chatin avulla</title> 
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
						
						<form method="POST" action="./sendchat.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>">
						
							<h3>Konsultaatio chatin avulla</h3>     
						    
							<p>
							Tästä voit varata mieleisesi palvelun. 
							</p>	
						
							<br /><br />
							
								<h3>1. Asiakkaan yhteystiedot</h3>
							
															
							<div class="control-group">
								<label class="control-label">Nimi tai nimimerkki</label>
								<div class="controls">
									<input name="name" type="text" size="30" maxlength="40">
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label">Sähköposti</label>
								<div class="controls">
									<input name="email" type="text" size="30" maxlength="40">
								</div>
							</div>

							
							<br /><br />
							
							<h3>
							2. Ohjelma jota haluat käyttää 
							</h3>
							<p>
							Voit itse valita mieleisesi ohjelman chatin toteuttamiseen, esim. Skype.  
							</p>
							
							<div class="control-group">
								<label class="control-label">Valitsemasi ohjelma</label>
								<div class="controls">							
									<input type="text" name="program" size="25">
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label">Käyttäjätunnuksesi</label>
								<div class="controls">							
									<input type="text" name="username" size="25">
								</div>
							</div>
							<br />
							<br />
							
							<h3>
							3. Ajankohta
							</h3>


                                                        <p>
                                                        Ehdota muutamia sinulle sopivia aikoja. Jos haluat, voit myös kirjoittaa muutaman sanan tilanteestasi. 
                                                        </p>

							
							<div class="control-group">
								<label class="control-label">Ehdotuksesi konsultaation ajankohdaksi</label>
								<div class="controls">							
									<textarea rows="4" name="question" cols="63"></textarea>
									<span>Jos asut ulkomailla, muista kertoa missä, jotta tiedämme oikean aikavyöhykkeen. 
                                                                </span>
								</div>
							</div>
							

                                                        <br />
								<h5>
                                                                Kun olet valmis, ole hyvä ja tarkista antamasi tiedot. Sitten voit lähettää tilauksesi ja saat maksuohjeet.
                                                        	</h5>


							<div class="wrap-buttons">
								<input class="standardsButton" type="reset" value="Tyhjennä">
								<input class="standardsButton" type="submit" value="Lähetä">
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