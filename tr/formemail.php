<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="tr-TR" lang="tr-TR">
<head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
	<?php include './common/head-tag.php'; 
		require_once '../db_conn.php';		
		$psicologo=get_psicologo($_GET['id_psicologo'],'latin5');
	?>

	<title>E-posta danışmanlık</title> 
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
	
							<h3>E-posta danışmanlık</h3> 
   
                                                <p>
                                                Bu formu doldurarak e-posta danışmanlık hizmetimizden yararlanabilirsiniz.
                                                </p>

					
						<div class="control-group">
							<label class="control-label">İsim ve soyadı</label>
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
							<label class="control-label">Şehir / Ülke</label>
							<div class="controls">					
								<input name="location" type="text" size="30" maxlength="40">
							</div> 
						</div>
						
						
						
						<div class="control-group">
							<label class="control-label">Mesaj</label>
							<div class="controls">		
								<textarea rows="15" name="question" cols="63"></textarea>
								<span>En fazla 500 kelime</span> 
							</div> 
						</div>
						
		 
						 <div class="clr"></div> 
						
                                                 <p> 
                                                Formu doldurduktan sonra, gönder butonunu tıklayınız. Yazdıklarınızı silip yeniden başlamak istiyorsanız temizle butonunu tıklayınız.
						</p>

						<div class="wrap-buttons">
							<input class="standardsButton" type="reset" value="Temizle">
							<input class="standardsButton" type="submit" value="Gönder">
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