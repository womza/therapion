<html lang="en" >
<head>


</head>
<body>
Usted ha sido uno de los expertos seleccionado para evaluar el proyecto "<?php echo $proyecto->nombre ?>". La Ficha de este proyecto la puede descargar de la siguiente url:
<br> <a href="<?php echo base_url() ?>uploads/fichas/<?php echo $proyecto->ficha ?>"><?php echo base_url() ?>uploads/fichas/<?php echo $proyecto->ficha ?></a>
<br>
La planilla de evaluación puede descargarla en la siguiente url:
<br> <a href="<?php echo base_url() ?>modelos/planilla.doc"><?php echo base_url() ?>modelos/planilla.doc</a>
<br>Una vez evaluado el proyecto puede subir su evaluación en la siguiente url:
<br> <a href="<?php echo $link ?>"><?php echo $link ?></a>
<br> La evaluación debe ser insertada antes de <?php echo $limite ?>
<br>Saludos, Dirección del Programa Nacional de Ciencias Básicas 

</body>
</html>