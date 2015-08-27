<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="tr-TR" lang="tr-TR">
<head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
	<?php include './common/head-tag.php'; 
		require_once '../db_conn.php';
		$psicologo=get_psicologo($_GET['id_psicologo'],'latin5');
	?>
	<title>Telefonla dan��manl�k </title> 
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
						
						
							<h3>Telefonla dan��manl�k</h3>     
						    
						 <p>
                                            Bu formu doldurarak telefonla dan��manl�k i�in randevu alabilirsiniz. 
                                        	</p>

							
							<br /><br />
							
								<h3>1. �leti�im bilgileri</h3>
							
								
							<div class="control-group">
								<label class="control-label">�sim ve soyad�</label>
								<div class="controls">
								<input name="name" type="text" size="30" maxlength="40">
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label">E-posta</label>
								<div class="controls">
								<input name="email" type="text" size="30" maxlength="40">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label">�ehir / �lke</label>
								<div class="controls">							      
							<input name="location" type="text" size="30" maxlength="40">
								</div>
							</div>
							<br /><br />
							
							<h3>
							2. Telefon numaras� 
							</h3>
							
							<p>
                L�tfen telefon numaran�z� giriniz. E�er yurt d���nda ya��yorsan�z, l�tfen �lke kodunu bildirmeyi unutmay�n. 
                                                        </p>
							
							<div class="control-group">
								<label class="control-label">Telefon numaras�</label>
								<div class="controls">							
									<input type="text" name="phone" size="25">
								</div>
							</div>
							
							<br />
							<br />
							
							<h3>
							3. Randevu tarihi
							</h3>
							
                                                        <p>
                             L�tfen randevu i�in uygun oldu�unuz g�n ve saati en az iki (2) alternatif vererek belirtiniz.
                                                        </p>
							
							<div class="control-group">
								<label class="control-label">Randevu bilgileri</label>
								<div class="controls">							
						<textarea rows="4" name="question" cols="63"></textarea>

									<span>
�lkeler aras�ndaki saat fark�n� hesaplayarak randevunuzu sorunsuz ayarlayabilmemiz i�in l�tfen bulundu�unuz �lkeyi ve �ehri bildirmeyi unutmay�n�z. 
                                                                     </span>
								</div>
							</div>
							

                                                        <br />
							<p>
							<h5>
Formu doldurduktan sonra, g�nder butonunu t�klay�n�z. Yazd�klar�n�z� silip yeniden ba�lamak istiyorsan�z temizle butonunu t�klay�n�z. 
                                                       </h5>
                                                 	</p>


							<div class="wrap-buttons">
							<input class="standardsButton" type="reset" value="Temizle">
							<input class="standardsButton" type="submit" value="G�nder">
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