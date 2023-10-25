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
        <h1>Novo Item</h1>
        <nav>
            <ul style="list-style-type: none;">
                <li><a href="index.php">Home</a></li>
            </ul>
        </nav>
    </header>
    <main class="container">
        <form action="db/save.php" method="get">
            <div class="form-group">
                <label for="txtNome">Nome</label>
                <input type="text" name="nome" id="txtNome" class="form-control">
            </div>
            <div class="form-group">
                <label for="numberValor">Valor R$</label>
                <input type="number" name="valor" id="numberValor" class="form-control" step="0.01" min="0.01">
            </div>
            <div class="form-group">
                <label for="numberQuantidade">Quantidade</label>
                <input type="number" name="quantidade" id="numberQuantidade" class="form-control" min="1">
            </div>
            <input type="submit" value="Salvar" class="btn btn-primary">
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </main>
</body>
</html>