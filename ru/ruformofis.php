<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<?php include './common/head-tag.php'; ?>
	<title>Обслуживание клиентов</title> 
	<meta name="keywords" content="Обслуживание клиентов">
	<meta name="description" content="Обслуживание клиентов. Пожалуйста, пишите нам на электронную почту Ваши замечания."> 
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
						Обслуживание клиентов
						</h1> 
						 
						<p>
                                                Пожалуйста, пишите нам на электронную почту Ваши замечания.
                                                </p>
						
						
						<br />
						 
						<form method="POST" action="./rusendofis.php"> 
						 
						 
						<h3>Электронная почта</h3>
						 
						 
						<p> 
						Пожалуйста, заполните все поля формы.
						</p> 
					
									
						<div class="control-group">
							<label class="control-label">Ваше имя</label>
							<div class="controls">						 
								<input name="name" type="text" size="30" maxlength="40">
							</div> 
						</div>
						
						<div class="control-group">
							<label class="control-label">Ваш электронный адрес</label> 
							<div class="controls">		
								<input name="email" type="text" size="30" maxlength="40">
							</div> 
						</div>
						 
						<div class="control-group">
							<label class="control-label">Место жительства</label>
							<div class="controls">		
								<input name="location" type="text" size="30" maxlength="40">
							</div>
						</div>
						 
						<div class="control-group">
							<label class="control-label">Ваше послание</label>
						<div class="controls">		
								<textarea rows="10" name="question" cols="63"></textarea>
								<span></span> 
							</div> 
						</div>
							
						
						 
						 <div class="clr"></div> 
						 
						<p> 
						Пожалуйста проверьте Вашу контактную информацию, и пошлите нам свое сообщение. Большое спасибо.	 
						</p> 
						
						<div class="wrap-buttons">
							<input class="standardsButton" type="reset" value="Очистить"> 
							<input class="standardsButton" type="submit" value="Отправить">
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