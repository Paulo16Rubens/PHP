<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<?php
echo "<h1>Estrutura Condicional - Switch</h1>";
$dia= getdate();
switch($dia["wday"]){
case 5:
echo "Finalmente Sexta";
break;
case 6:
echo"Super Sábado";
break;
case 0;
echo"Domingo Sonolento";
break;
case 2;
echo"Aula de Programação";
break;
default;
echo"Estou Esperando o Final de Semana";
}
?>
</body>
</html>
