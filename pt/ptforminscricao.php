<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
<head>
	<?php include './common/head-tag.php'; ?>
	<title>INSCRI��O - CURSO INTENSIVO</title> 
        <meta name="keywords" content="inscri��o>

        <meta name="description" content="Inscri��o. Pode inscrever-se, preenchendo o formul�rio de inscri��o.">

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
                                                INSCRI��O - CURSO INTENSIVO
                                                </h1>


                                                <p>
                                               Pode inscrever-se, preenchendo o formul�rio de inscri��o.
                                                </p>

						<br />
						 
						<form method="POST" action="./ptsendinscricao.php"> 
						 
						 
						<h3>Formul�rio de inscri��o</h3>
						 		
									
						<div class="control-group">
							<label class="control-label">Nome</label>
							<div class="controls">						 
								<input name="name" type="text" size="30" maxlength="40">
							</div> 
						</div>
						
						<div class="control-group">
							<label class="control-label">E-mail</label> 
							<div class="controls">		
								<input name="email" type="text" size="30" maxlength="40">
							</div> 
						</div>
						 
						<div class="control-group">
							<label class="control-label">De onde voc� est� escrevendo (Cidade e Pa�s)</label>
							<div class="controls">		
								<input name="location" type="text" size="30" maxlength="40">
							</div>
						</div>
						 
						<div class="control-group">
							<label class="control-label">Sobre sua experi�ncia profissional</label>
						<div class="controls">		
								<textarea rows="10" name="question" cols="63"></textarea>
								<span>M�ximo de 300 palavras</span> 
							</div> 
						</div>
							
						
						 
						 <div class="clr"></div> 
						 
						<p>
                                                Por favor, verifique as informa��es de contato antes de enviar a sua mensagem. 	
                                                <br />
                                                <br />
                                                O sistema dar� instru��es sobre como fazer o pagamento.
                                                </p>
						
						<div class="wrap-buttons">
							<input class="standardsButton" type="reset" value="Esvaziar"> 
							<input class="standardsButton" type="submit" value="Enviar">
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