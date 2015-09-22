<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<?php include './common/head-tag.php'; 
		require_once '../db_conn.php';		
		$psicologo=get_psicologo($_GET['id_psicologo']);
	?>
	<title>Consulta por e-mail</title> 
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
						
							<h3>Consulta por e-mail</h3>     
						
                                                <p>
						<a  class="link" href="/pt/ptinstrucoesemail.php">Instruções: Como usar o serviço <img src="../assets/images/internal-link.png" /> </a>
						</p>

    				
												
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
						
						
						
						<div class="control-group">
							<label class="control-label">Pergunta</label>
							<div class="controls">		
								<textarea rows="15" name="question" cols="63"></textarea>
								<span>Máximo de 500 palavras</span> 
							</div> 
						</div>
						
		 
						 <div class="clr"></div> 
						 
						 <p>
                                                 Por favor, verifique as informações de contato antes de enviar a sua pergunta. 
                                                 </p>

                                                 <p>
                                                 O sistema dará instruções sobre como fazer o pagamento. Para todas as sessões é necessário um pagamento adiantado.
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