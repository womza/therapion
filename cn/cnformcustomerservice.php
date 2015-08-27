<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-hans" lang="zh-hans">
<head>
	<?php include './common/head-tag.php'; ?>
	<title>客戶服務</title> 
	<meta name="keywords" content="客戶服務"> 
	<meta name="description" content="客戶服務: 聯絡客戶服務部">
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
						客戶服務
						</h1> 
						 
						
						<p> 
如果對我們的服務有任何疑問或需要幫助, 歡迎聯絡客戶服務部
						</p>

						<br />
						
						
  
						 <hr />
						 <br /><br />
						<form method="POST" action="./cnsendcustomerservice.php"> 
						 
						 
						<h3>聯絡我們</h3>
						 
						 
						
									
						<div class="control-group">
							<label class="control-label">姓名</label>
							<div class="controls">						 
								<input name="name" type="text" size="30" maxlength="40">
							</div> 
						</div>
						
						<div class="control-group">
							<label class="control-label">電郵地址</label> 
							<div class="controls">		
								<input name="email" type="text" size="30" maxlength="40">
							</div> 
						</div>
						 
						<div class="control-group">
							<label class="control-label">所在國家及城市</label>
							<div class="controls">		
								<input name="location" type="text" size="30" maxlength="40">
							</div>
						</div>
						 
						<div class="control-group">
							<label class="control-label">內容</label>
						<div class="controls">		
								<textarea rows="10" name="question" cols="63"></textarea>
								<span>最多200字</span> 
							</div> 
						</div>
							
						
						 
						 <div class="clr"></div> 
						 
						<h5> 
						請在完成表格後點擊"遞交"
						<br> 
						如果你希望重新填寫此表格, 請點擊"重新填寫"
						</h5> 
						
						<div class="wrap-buttons">
							<input class="standardsButton" type="reset" value="重新填寫"> 
							<input class="standardsButton" type="submit" value="遞交">
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