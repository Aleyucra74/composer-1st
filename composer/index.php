<?php

$cpfs = $_GET['cpf'];
//importando dependencias
require(__DIR__.'/vendor/autoload.php');

// use \Bissolli\ValidadorCpfCnpj\CPF;

// Não importa se já vem formatado ou não
$cpf = new \Bissolli\ValidadorCpfCnpj\CPF($cpfs);

// $cpf = new CPF();
// $cpf->isValid('376.243.528.69');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" type="get">
    <label for="cpf">CPF:</label>
        <input name="cpf" id="cpf" type="text" value=""><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php

// Verifica se é um número válido de CNPJ ou CPF
// Retorna true/false
if($cpf->isValid()){
    echo ' CPF é valido!';
}else {
    echo 'INVALIDOO';
}


?>