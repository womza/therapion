<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="tr-TR" lang="tr-TR">
<head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
	<?php include './common/head-tag.php'; ?>
	<title>Müşteri Hizmetleri</title> 

	<meta name="keywords" content="Müşteri Hizmetleri"> 
	<meta name="keywords" description="Müşteri Hizmetleri. Bu bölümden bizlere ulaşabilir, istek ve görüşlerinizi bildirebilirsiniz."> 

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
						Müşteri Hizmetleri
						</h1> 
						 
						
                                                 <p> 
                                                 Bu bölümden bizlere ulaşabilir, istek ve görüşlerinizi bildirebilirsiniz.
                                                 </p>

						<br />
						 
						<form method="POST" action="./trsendcustomerservice.php"> 
						 
						 
						<h3>E-posta gönder</h3>
						 
						 
						
									
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
							<label class="control-label">Şehir/Ülke</label>
							<div class="controls">		
								<input name="location" type="text" size="30" maxlength="40">
							</div>
						</div>
						 
						<div class="control-group">
							<label class="control-label">Mesaj</label>
						<div class="controls">		
								<textarea rows="10" name="question" cols="63"></textarea>
								<span>En fazla 200 kelime</span> 
							</div> 
						</div>
							
						
						 
						 <div class="clr"></div> 
						 
                                                <h5> 
                                      Formu doldurduktan sonra, gönder butonunu tıklayınız. 
                                                <br />
                                      Yazdıklarınızı silip yeniden başlamak istiyorsanız temizle butonunu tıklayınız.
                                               </h5>
						
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