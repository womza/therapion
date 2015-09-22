<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
<head>
	<?php include './common/head-tag.php'; ?>
	<title>Servi�o ao cliente</title> 
        <meta name="keywords" content="Servi�o ao cliente">
        <meta name="description" content="Servi�o ao cliente. Por favor, contate nosso escrit�rio para saber mais sobre os nossos servi�os.">

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
                                                SERVI�O AO CLIENTE 
                                                </h1>


                                                <p>
                                                Por favor, contate nosso escrit�rio para saber mais sobre os nossos servi�os. 
                                                <br />
                                                O servi�o ao cliente � confidencial e gratuito. 
                                                </p>
<p>
<b>
NOTA: Para as perguntas psicol�gicas se necesita uma consulta. <a href="http://www.therapion.com/pt/consulta.php">Fa�a a sua reserva</a>
</b>
</p>

						<br />
						 
						<form method="POST" action="./ptsendservicoaocliente.php"> 
						 
						 
						<h3>ENVIE-NOS UM E-MAIL</h3>
						 		
									
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
							<label class="control-label">Coment�rio ou pergunta</label>
						<div class="controls">		
								<textarea rows="10" name="question" cols="63"></textarea>
								<span>M�ximo de 200 palavras</span> 
							</div> 
						</div>
							
						
						 
						 <div class="clr"></div> 
						 
						<p>
                                                Por favor, verifique as informa��es de contato antes de enviar a sua mensagem. Muito obrigado.	
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