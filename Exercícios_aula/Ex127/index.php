<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 127</title>
</head>
<body>
<?php
if(isset($_POST['botao'])){
    require "Retangulo.php";
    $ret = new Retangulo($_POST['largura'],$_POST['altura']);
    echo "<h1>Retângulo</h1>";
    echo "<h2>A área é:".$ret->calculaArea()."</h2>";
    echo "<a href='index.php'>Reiniciar</a>";
}else{
?>
    <h1>Retângulo</h1>
    <form action='index.php' method='post'>
        <label for='largura'>Informe a largura:</label>
        <input type=number name=largura id=largura required>
        <label for='altura'>Informe a altura:</label>
        <input type=number name=altura id=altura required>
        <input type=submit name=botao value="Calcula Área">
    </form>
<?php
}
?>
</body>
</html>