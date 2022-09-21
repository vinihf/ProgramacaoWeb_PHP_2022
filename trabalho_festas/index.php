<?php
require_once __DIR__."/vendor/autoload.php";
$festas = Festa::findall();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Festas</title>
</head>
<body>

<table>
    <tr>
        <td>Nome</td>
        <td>Endereço</td>
        <td>Cidade</td>
        <td>Data</td>
    </tr>
    <?php
    foreach($festas as $festa){
        echo "<tr>";
        echo "<td>{$festa->getNome()}</td>";
        echo "<td>{$festa->getEndereco()}</td>";
        echo "<td>{$festa->getCidade()}</td>";
        echo "<td>{$festa->getData()}</td>";
        echo "<td>
                <a href='formEdit.php?id={$festa->getId()}'>Editar</a>
                <a href='excluir.php?id={$festa->getId()}'>Excluir</a> 
             </td>";
        echo "</tr>";
    }
    ?>
</table>
<a href='formCad.php'>Adicionar Festa</a>
</body>
</html>






