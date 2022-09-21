<?php
if(isset($_POST['botao'])){
    require_once __DIR__."/vendor/autoload.php";
    $festa = new Festa($_POST['nome'],$_POST['endereco'],$_POST['cidade'],$_POST['data']);
    $festa->save();
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiciona Festa</title>
</head>
<body>
    <form action='formCad.php' method='POST'>
        Nome: <input name='nome' type='text' required>
        <br>
        Endereço: <input name='endereco' type='text' required>
        <br>
        Cidade: <input name='cidade' type='text' required>
        <br>
        Data: <input name='data' type='date' required>
        
        <input type='submit' name='botao'>
    </form>
</body>
</html>

