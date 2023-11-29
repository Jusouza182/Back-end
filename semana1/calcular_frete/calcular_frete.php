<?php
if(isset($_GET['error'])) {
    echo  "<script>alert('Digite um dado válido!');</script>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Frete</title>
</head>
<body>
    <p>Para calcular o frete informe: </p>
    <form method="post" action="resultado.php">
    <label>Peso do produto:</label>
        <input type="number" placeholder="Digite o peso" name="peso" />
        <br />
        <br />
        <label>Distância em Km:</label>
        <input type="number" placeholder="Digite a distância" name="distancia" />
        <br />
        <br />
        <button type="submit">Calcular</button>
    </form>
</body>
</html>