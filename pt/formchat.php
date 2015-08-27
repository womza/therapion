<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php include './common/head-tag.php'; 
		require_once '../db_conn.php';		
		$psicologo=get_psicologo($_GET['id_psicologo']);
	?>
	<title>Consulta pelo chat</title> 
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
						
							<h3>Consulta por chat</h3>     
						    
							<p>
							Aqui voc� pode reservar uma consulta pelo chat comigo. 
							</p>		
					
							<br /><br />
							
								<h3>1. Suas informa��es de contato</h3>
							
															
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
							<br /><br />
							
							<h3>
							2. Programa de chat
							</h3>
							<p>
							Voc� pode escolher o programa para fazer a sua consulta. As alternativas s�o: Skype, Facebook, Vsee, etc. 
							<p>
							Por favor, escreva o programa que est� selecionado e o usu�rio. 
							</p>
							
							<div class="control-group">
								<label class="control-label">Programa</label>
								<div class="controls">							
									<input type="text" name="program" size="25">
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label">Usu�rio</label>
								<div class="controls">							
									<input type="text" name="username" size="25">
								</div>
							</div>
							<br />
							<br />
							
							<h3>
							3. Data e hora da consulta 
							</h3>
							

                                                        <p>
                                                        Por favor, sugerem duas datas alternativas e per�odo do dia para a realiza��o da consulta.
                                                        </p>

							
							<div class="control-group">
								<label class="control-label">Dicas de data e hora</label>
								<div class="controls">							
									<textarea rows="4" name="question" cols="63"></textarea>
								        <span>Se voc� mora no exterior, n�o se esque�a de mencionar o pa�s e a cidade para ajustar o calend�rio.</span>
								</div>
							</div>
							
								<p>
                                                                Por favor, verifique as informa��es de contato antes de enviar a sua consulta. Muito obrigado. 
                                                                </p>

                                                                <p>
                                                                O sistema dar� instru��es sobre como fazer o pagamento. Para todas as sess�es � necess�rio um pagamento adiantado.
								</p>



							<div class="wrap-buttons">
								<input class="standardsButton" type="reset" value="Esvaziar">
								<input class="standardsButton" type="submit" value="Enviar">
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