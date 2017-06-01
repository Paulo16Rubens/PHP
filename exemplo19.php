<html>
<head>
<meta charset='utf-8'>
</head>
<body>
<form method='get' action=' '>
Login: <input type='text' size='20' name='login'><br>
Senha: <input type='password' size='20' name='senha'>
<input type='submit' value='Enviar'><br>
<?php
if(isset($_GET['login'])){
echo $_GET['login'].'<br>';
echo $_GET['senha'].'<br>';
}
?>
</body>
</html>
