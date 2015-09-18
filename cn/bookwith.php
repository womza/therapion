<?php
require_once '../db_conn.php';
$psicologo=get_psicologo($_GET['id_psicologo'],'utf8');
$metodos=get_psicologo_metodos($_GET['id_psicologo']); 
$psicologo_name = get_psicologo_name_url($psicologo);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-hans" lang="zh-hans"> 

<head>
	<?php include './common/head-tag.php'; ?>

        <title>Counseling by <?php echo $psicologo['nombres_apellidos'] ?></title> 
	<meta name="keywords" content="">
	<meta name="robots" value="noindex,nofollow" />
		
</head>
<body>
<div id="container" class="home">

	<?php include './common/header.php'; 
	
	?>

	<div id="main-bd" class="widget">
		<div class="container wrap">			
			<div class="inner">	
					
				<div class="full-column">
					<div class="info">
					
						<div class="photo rgt">
							<img src="../assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">
						</div>
											
						<h1><?php echo $psicologo['nombres_apellidos'] ?> - <?php echo $psicologo['titulo'] ?></h1>
					
						
						<h4>APPOINTMENTS</h4>
						
						<p>Select a service:</p>	

						<div class="wrap-buttons">	
							<?php foreach($metodos as $metodo): 
							if($metodo['titulo']=='email'):?>											
							<a class="standardsButton" href="<?php echo get_credentials()['site_root']?>/cn/<?php echo $psicologo_name ?>/email">E-mail<br />counseling</a> 
							<?php elseif ($metodo['titulo']=='chat'): ?>
							<a class="standardsButton" href="<?php echo get_credentials()['site_root']?>/cn/<?php echo $psicologo_name ?>/chat">Chat<br />counseling</a> 
							<?php elseif ($metodo['titulo']=='phone'): ?>
							<a class="standardsButton wm" href="<?php echo get_credentials()['site_root']?>/cn/<?php echo $psicologo_name ?>/phone">Phone<br />counseling</a> 
							<?php else: ?>
							<a class="standardsButton wm" href="<?php echo get_credentials()['site_root']?>/cn/<?php echo $psicologo_name ?>/videoconference">Video conference<br />counseling</a>
						<?php endif; endforeach; ?>
						</div>
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
<script>
function post(path, params, method) {
    method = method || "post"; // Set method to post by default if not specified.

    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);

    for(var key in params) {
        if(params.hasOwnProperty(key)) {
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", key);
            hiddenField.setAttribute("value", params[key]);

            form.appendChild(hiddenField);
         }
    }

    document.body.appendChild(form);
    form.submit();
}
</script>
</html>