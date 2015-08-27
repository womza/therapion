<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="jp" lang="jp">
<head>
	<?php include './common/head-tag.php'; 
		require_once '../db_conn.php';		
		$psicologo=get_psicologo($_GET['id_psicologo'],'utf8');
	?>
	<title>チャットカウンセリング</title> 
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
                                                <?php echo $psicologo['nombres_apellidos'] ?> 
						</h1>
						
						<form method="POST" action="./sendchat.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>">
						
							<h3>チャットカウンセリング</h3>     
						    
							 <p>
                  このウェブページでは,　担当カウンセラーと，チャットカウンセリングを予約することができます。 
                                                    	</p>
							
							<br /><br />
							
								<h3>1. ご連絡先</h3>
							
															
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
							<br /><br />
							
							<h3>
							2. チャット　プログラム 
							</h3>
							
<p>
カウンセリングセッションに用いるチャットプログラムをお選びください。選択例として，スカイプ, MSNメッセンジャー，ヤフーメッセンジャーなどが挙げられます。
</p>

							<div class="control-group">
								<label class="control-label">プログラム名</label>
								<div class="controls">							
									<input type="text" name="program" size="25">
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label">お客様のユーザーネーム</label>
								<div class="controls">							
									<input type="text" name="username" size="25">
								</div>
							</div>
							<br />
							<br />
							
							<h3>
							3. カウンセリングセッションのご予約
							</h3>
							
<p>
ご希望のカウンセリングの日時を，1つか2つご提示ください。海外に在住の場合は,　タイムゾーンが把握できるようにお客様のお住まいの市町村,　もしくは国名もお忘れなくご記入ください。
</p>
					
							<div class="control-group">
							<label class="control-label">ご希望のカウンセリングセッション日時</label>
							<div class="controls">							
							<textarea rows="4" name="question" cols="63"></textarea>
							<span></span>

								</div>
							</div>
							
								<h5>
                                                         このフォームに記入後,　送信ボタンを押してください。
                                                                <br />
                                                         このフォームを記入し直すには,　リセットボタンを押してください。
                                                                </h5>

							<div class="wrap-buttons">
							<input class="standardsButton" type="reset" value="リセット">
							<input class="standardsButton" type="submit" value="送信">
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