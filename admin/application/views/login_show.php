<!DOCTYPE html>
<html lang="en" style="background-color: green;">
<title>Administración Therapion</title>
<head>
    <meta charset="utf-8" />  

 
<style type='text/css'>
.menus
{
     color: white;
     font-size: 20px;
}
.centro {
	text-align:center;
	
	}
body
{
    font-family: Arial;
    font-size: 14px;
}
a {
    font-size: 14px;
}
a:hover
{
    text-decoration: underline;
}
</style>
</head>
<body>
<table width="100%"><td class="centro"></td></table>
<div align="center" style="margin: 50px auto; background-color: white; opacity: 0.8; filter: alpha(opacity=60); width:500px; padding: 30px; -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;">
  <p>Administración Therapion <br> <br>
</p>
<form method="post" action="<?php echo base_url() ?>index.php/user/login">
<input name="username" type="text" placeholder="Username"> <br>    <br> 
<input name="password" type="password" placeholder="Password">   <br>    <br>
<input type="submit" value="Enviar">    <br>    <br>
<?php echo (isset($error)?($error):'') ?>
</form>
</div>

</body>


</html>
 