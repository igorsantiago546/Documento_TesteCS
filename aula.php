<?php 
    include "aula2.php";
    $premio = 1547.90;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 - UC13</title>
</head>
<body>
    
    <table>
        <th>id</th>
        <th>nome</th>
        <th>telefone</th>
        <th>prêmio<th>
        <tr>
            <td>1254</td>
            <td>Igor</td>
            <td>2185-9231</td>
            <td><?php echo($premio * 0.12); ?></td>
        </tr>
        <tr>
            <td>1298</td>
            <td>Wellington</td>
            <td>2185-9200</td>
            <td><?php echo($premio * 0.28); ?></td>
        </tr>
        <tr>
            <td>1288</td>
            <td>Leonardo</td>
            <td>2185-7500</td>
            <td><?php echo($premio * 0.50); ?></td>
        </tr>
        
        <tr>
            <td>1285</td>
            <td><?php echo($nome); ?></td>
            <td>2185-8200</td>
            <td><?php echo($premio * 0.60); ?></td>
        </tr>
    </table>

</body>
</html>