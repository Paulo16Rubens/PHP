<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<?php
function testeStatic(){
static $a=0;
$a += 25;
echo "Valor da Variável a = $a <br>";
}
echo"<h1>Variável Estática</h1>";
testeStatic();
testeStatic();
testeStatic();
?>
</body>
</html>
