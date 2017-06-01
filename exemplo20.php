<?php
 if(isset($_COOKIE['contador'])){
 	$tempo=time()+(3600*24*7);
 	$valor=$_COOKIE['contador']+1;
 	setcookie('contador', $valor, $tempo);
 }else{
 	$valor=1;
 	$tempo=time()+(3600*24*7);
 	setcookie('contador', $valor, $tempo);
 }
?>
<html>
<head>
	<meta charset='utf-8'/>
	<script>
	 function visita(valor){
	 	alert (valor+' visitas no site');
	 }
	</script>
</head>
	<?php
	 	echo "<body onload='visita($valor)'>";	 
	?>
</body>
</html>
