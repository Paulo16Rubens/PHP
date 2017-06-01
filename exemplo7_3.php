<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<h1>Estrutura Condicional - If/Else</h1>
<h2>Cálculo IMC</h2>
<?php
$altura=1.58; //Altura do indivíduo
$peso=62; //Peso do indivíduo
$imc=$peso/($altura*$altura); //Cálculo do IMC
if($imc<18.5){
echo ($imc+" Classificação Magreza");
}
else if(($imc>18.5)&&($imc<24.9)){
echo ($imc." Classificação Saudável");
}
else if(($imc>24.9)&&($imc<29.9)){
echo ($imc." Classificação Sobrepeso");
}
else if(($imc>29.9)&&($imc<34.9)){
echo ($imc." Classificação Obesidade Grau I");
}
else if(($imc>34.9)&&($imc<39.9)){
echo ($imc." Classificação Obesidade Grau II - Severa");
}
else if($imc>=40){
echo ($imc." Classificação Obesidade Grau III - Mórbida");
}
?>
</body>
</html>
