<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<?php include './common/head-tag.php'; 
		require_once '../db_conn.php';
		$psicologo=get_psicologo($_GET['id_psicologo']);
	?>
	<title>Consulta por telefone</title> 
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
						
							<h3>Consulta por telefone</h3>     
						    
							<p>
							Aqui você pode reservar uma consulta pelo telefone comigo. 
							</p>							
							<br /><br />
							
								<h3>1. Suas informações de contato</h3>
							
								
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
								<label class="control-label">De onde você está escrevendo (Cidade e País)</label>
								<div class="controls">							      
									<input name="location" type="text" size="30" maxlength="40">
								</div>
							</div>
							<br /><br />
							
							<h3>
							2. Telefone   
							</h3>
							
							<p>
                                                        Por favor, dê o seu número de telefone (que seja para um telefone fixo ou móvel). 
                                                        <br />
                                                        Se residir no estrangeiro, por favor, comece com o código do país.
                                                        </p>
							
							<div class="control-group">
								<label class="control-label">Número de telefone</label>
								<div class="controls">							
									<input type="text" name="phone" size="25">
								</div>
							</div>
							
							<br />
							<br />
							
							<h3>
							3. Data e hora da consulta 
							</h3>

                                                        <p>
                                                        Por favor, sugerem duas datas alternativas e período do dia para a realização da consulta.
                                                        </p>
							
							
							<div class="control-group">
								<label class="control-label">Dicas de data e hora</label>
								<div class="controls">							
									<textarea rows="4" name="question" cols="63"></textarea>
									<span>Se você mora no exterior, não se esqueça de mencionar o país ea cidade para ajustar o calendário.</span>
								</div>
							</div>
							
								<p>	 						
                                                        Por favor, verifique as informações de contato antes de enviar a sua consulta. Muito obrigado. 
                                                        </p>
                                                        <p>
                                                        O sistema dará instruções sobre como fazer o pagamento. Para todas as sessões é necessário um pagamento adiantado.
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