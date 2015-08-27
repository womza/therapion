<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="jp" lang="jp">
<head>
	<?php include './common/head-tag.php'; ?>
	<title>カスタマーサービス </title> 
	<meta name="keywords" content="カスタマーサービス"> 
	<meta name="description" content="カスタマーサービス。ご質問等ございましたら、カスタマーサービスまでご連絡ください。"> 
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
                                                カスタマーサービス 
						</h1> 
						 
						<p> 
                                                ご質問等ございましたら、カスタマーサービスまでご連絡ください。 
                                               <br />
                                                皆様から提供された情報の秘密を厳守致します。 
						</p> 
 
						<br />
						 
						<form method="POST" action="./jpsendcustomerservice.php"> 
						 
						 
						<h3>電子メールでのお問い合わせ</h3>
						 
						 
						<p> 
						以下の欄に、ご質問等をご記入いただき、メッセージを送信してください。 
						</p> 
					
									
						<div class="control-group">
							<label class="control-label">お名前</label>
							<div class="controls">						 
								<input name="name" type="text" size="30" maxlength="40">
							</div> 
						</div>
						
						<div class="control-group">
							<label class="control-label">電子メールアドレス</label> 
							<div class="controls">		
								<input name="email" type="text" size="30" maxlength="40">
							</div> 
						</div>
						 
						<div class="control-group">
							<label class="control-label">市町村，国名</label>
							<div class="controls">		
								<input name="location" type="text" size="30" maxlength="40">
							</div>
						</div>
						 
						<div class="control-group">
							<label class="control-label">メッセージ　（２００字以内)</label>
						<div class="controls">		
								<textarea rows="10" name="question" cols="63"></textarea>
								<span></span> 
							</div> 
						</div>
							
						
						 
						 <div class="clr"></div> 
						 
						<h5> 
                                                このフォームに記入後、送信ボタンを押してください。 
                                                <br />                                                
                                                このフォームを記入し直す場合は、リセットボタンを押してください。 

						</h5> 
						
						<div class="wrap-buttons">
							<input class="standardsButton" type="reset" value="リセット"> 
							<input class="standardsButton" type="submit" value="送信">
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