<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 129</title>
</head>
<body>
<?php
if(isset($_POST['botao'])){
    require "Sequencia.php";
    $seq = new Sequencia($_POST['inicio'],$_POST['fim']);
    if($_POST['opcao']=='t'){
        $seq->exibirTodosNumeros();
    }else if ($_POST['opcao']=='p'){
        $seq->exibirPares();
    }else{
        $seq->exibirImpares();
    }
    echo "<a href='index.php'>Reiniciar</a>";
}else{
?>
    <h1>Sequência</h1>
    <form action='index.php' method='post'>
        <label for='inicio'>Informe o valor inicial:</label>
        <select name='inicio' id='inicio'>
            <option selected value=1>1</option>
            <?php
            for($i=2;$i<100;$i++){
                echo "<option value={$i}>{$i}</option>";
            }
            ?>
        </select>
        <br>
        <label for='fim'>Selecione o valor final:</label>
        <select name='fim' id='fim'>
            <option selected value=100>100</option>
            <?php
            for($i=99;$i>1;$i--){
                echo "<option value={$i}>{$i}</option>";
            }
            ?>
        </select>
        <br>
        <label for='mostrar'>Informe o valor inicial:</label>
        <br>
        <input type='radio' name='opcao' value='t'>Todos
        <br>
        <input type='radio' name='opcao' value='p'>Apenas os pares
        <br>
        <input type='radio' name='opcao' value='i'>Apenas os ímpares
        <br>
        <input type=submit name=botao value="Mostrar a Sequência">
    </form>
<?php
}
?>
</body>
</html>