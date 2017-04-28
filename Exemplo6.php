<html>
<head>
<title>Rubens</title>
</head>
<body>
<?php
"<h1>Operadores booleanos</h1><br>";
$c= FALSE;
echo "12>=12 and 10>2",(12>=12 and 10>2) ? 
"verdadeiro" : "falso";
echo"<br>";
echo "12>=12 or FALSE",(12>=12 or $c) ?
"verdadeiro" : "falso";
echo"<br>";
echo "12>=12 xor 10>2",(12>=12 xor 10>2) ?
"verdadeiro" : "falso";
echo"<br>";
echo "!FALSE",($c) ? 
"verdadeiro" : "falso";
echo"<br>";
echo "10>2 && FALSE",(10>2 && FALSE) ?
"verdadeiro" : "falso";
echo"<br>";
echo "12>=12 || FALSE",(12>=12 || FALSE) ?
"verdadeiro" : "falso";
?>

</body>
</html>
