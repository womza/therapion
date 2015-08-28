<?php
require_once 'db_conn.php';
require_once 'function.php';

// if $_GET['id_psicologo'] isn't defined get the name $_GET['p']
if (!isset($_GET['id_psicologo']))
    $_GET['id_psicologo'] = get_psicologo_id_by_name($_GET['p']);

$psicologo=get_psicologo($_GET['id_psicologo']);
$metodos=get_psicologo_metodos($_GET['id_psicologo']); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php include './common/head-tag.php'; ?>
	<title>Therapy Sessions: Counseling by <?php echo $psicologo['nombres_apellidos'] ?></title> 
	<meta name="keywords" content="therapy sessions"> 
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
							<img src="./assets/images/profiles/<?php echo $psicologo['foto'] ?>" height="150" width="100">
						</div>
											
						<h1><?php echo $psicologo['nombres_apellidos'] ?> - <?php echo $psicologo['titulo'] ?></h1>
					
						<h4>APPOINTMENTS</h4>
						
						<p>Select a service: </p>	
					
												
						<div class="wrap-buttons">	
							<?php foreach($metodos as $metodo): 
							if($metodo['titulo']=='email'):?>											
							<a class="standardsButton" href="<?php echo get_credentials()['site_root']?>/formemail.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>">E-mail<br />counseling</a> 
							<?php elseif ($metodo['titulo']=='chat'): ?>
							<a class="standardsButton" href="<?php echo get_credentials()['site_root']?>/formchat.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>">Chat<br />counseling</a> 
							<?php elseif ($metodo['titulo']=='phone'): ?>
							<a class="standardsButton wm" href="<?php echo get_credentials()['site_root']?>/formphone.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>">Phone<br />counseling</a> 
							<?php else: ?>
							<a class="standardsButton wm" href="<?php echo get_credentials()['site_root']?>/formvideoconference.php?id_psicologo=<?php echo $psicologo['id_psicologo'] ?>">Video conference<br />counseling</a>
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