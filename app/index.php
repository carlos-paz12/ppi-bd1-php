<?php 
$conn = new PDO("sqlite:db/market_db.sqlite");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <header class="container">
        <h1>Armazenamento de Itens</h1>
        <nav>
            <ul style="list-style-type: none;">
                <li><a href="form.php">Novo item</a></li>
            </ul>
        </nav>
    </header>
    <main class="container">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>VALOR DA UNIDADE</th>
                <th>QUANTIDADE</th>
            </tr>
            <?php

            $q = $conn->query("SELECT * FROM itens;");
            $itens = $q->fetchAll();

            foreach($itens as $i):
            ?>
            <tr>
                <td><?= $i->id ?></td>
                <td><?= $i->nome ?></td>
                <td><?= $i->valor_unidade ?></td>
                <td><?= $i->quantidade ?></td>
            </tr>
            <?php endforeach;?>
        </table>
    </main>
</body>
</html>