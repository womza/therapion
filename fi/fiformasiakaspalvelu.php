<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi">
<head>
	<?php include './common/head-tag.php'; ?>
	<title>Asiakaspalvelu</title> 
	<meta name="keywords" content="asiakaspalvelu"> 
	<meta name="description" content="Asiakaspalvelu auttaa kaikissa palvelun k�ytt��n liittyviss� asioissa.">

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
                                                ASIAKASPALVELU
						</h1> 
						 

<p>
Asiakaspalvelu on luottamuksellista ja ilmaista. 
<br>
Voit joko soittaa tai l�hett�� s�hk�postia. 
</p>



<p>
Toimisto on auki arkip�ivisin klo 10:00 - 20:00.
</p>

<p>
Puhelin: + 358 (09) 2316 4346 
<br>
Skype: therapion
</p>


						
  
						 <hr />
						 <br /><br />
						<form method="POST" action="./fisendasiakaspalvelu.php"> 
						 
						 
						<h3>L�het� meille s�hk�postia</h3>
						 
						 
						<p> 
						Ole hyv� ja anna yhteystietosi. Kirjoita sitten viesti.
                                                </p>

					
															
						<div class="control-group">
							<label class="control-label">Nimi tai nimimerkki</label>
							<div class="controls">						 
								<input name="name" type="text" size="30" maxlength="40">
							</div> 
						</div>
						
						<div class="control-group">
							<label class="control-label">S�hk�posti</label> 
							<div class="controls">		
								<input name="email" type="text" size="30" maxlength="40">
							</div> 
						</div>
						 
												 
						<div class="control-group">
							<label class="control-label">Viesti</label>
						<div class="controls">		
								<textarea rows="10" name="question" cols="63"></textarea>
								<span>Enint��n 200 sanaa</span> 
							</div> 
						</div>
							
						
						 
						 <div class="clr"></div> 
						 
						<h5> 
Ole hyv� ja tarkista yhteystietosi ennen viestin l�hett�mist�.
						</h5>
						
						<div class="wrap-buttons">
							<input class="standardsButton" type="reset" value="Tyhjenn�"> 
							<input class="standardsButton" type="submit" value="L�het�">
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