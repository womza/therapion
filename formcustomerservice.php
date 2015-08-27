<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<?php include './common/head-tag.php'; ?>
	<title>Customer Services</title> 
	<meta name="keywords" content="customer service"> 
	<meta name="description" content="Contact us if you require further information or have any questions. All information is kept confidential."></head>
<body>
<div id="container" class="home">

	<?php include './common/header.php'; ?>

	<div id="main-bd" class="widget">
		<div class="container wrap">			
			<div class="inner">	
					
				<div class="full-column">
					<div class="info">
						 
						<h1> 
						CUSTOMER SERVICE
						</h1> 
						 
						 


						Contact us if you require further information or have any questions.  
						<br> 
						All correspondence is kept confidential.
						</p>
						<br />
						
						<h3>SKYPE</h3> 
												 
						<p> 
						You can call us worldwide 24/7 toll-free through Skype. 
						<br /> 
						Our username is: therapion  
						</p> 
  
						 <hr />
						 <br /><br />
						<form method="POST" action="./sendcustomerservice.php"> 
						 
						 
						<h3>SEND AN E-MAIL</h3>
						 
						 
						<p> 
                             Feel free to submit your question, comment, suggestion, or feedback using this form.
                                                </p>
					
						
									
						<div class="control-group">
							<label class="control-label">Your name</label>
							<div class="controls">						 
								<input name="name" type="text" size="30" maxlength="40">
							</div> 
						</div>
						
						<div class="control-group">
							<label class="control-label">E-mail address</label> 
							<div class="controls">		
								<input name="email" type="text" size="30" maxlength="40">
							</div> 
						</div>
						 
						<div class="control-group">
							<label class="control-label">Town & Country</label>
							<div class="controls">		
								<input name="location" type="text" size="30" maxlength="40">
							</div>
						</div>
						 
						<div class="control-group">
							<label class="control-label">Your message</label>
						<div class="controls">		
								<textarea rows="10" name="question" cols="63"></textarea>
								<span>Max. 200 words</span> 
							</div> 
						</div>
							
						
						 
						 <div class="clr"></div> 
						 
						<h5> 
						Once you have completed this form, click the Submit button below. 
						<br> 
						Press the Reset button, if you would like to clear this form and start again. 
						</h5> 
						
						<div class="wrap-buttons">
							<input class="standardsButton" type="reset" value="Reset"> 
							<input class="standardsButton" type="submit" value="Submit">
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