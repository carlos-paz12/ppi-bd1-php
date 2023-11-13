<?php 
$conn = new PDO("sqlite:market_db.sqlite");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$nome = $_GET["nome"];
$valor = $_GET["valor"];
$quantidade = $_GET["quantidade"];

$preparo = $conn->prepare("INSERT INTO itens (nome, valor_unidade, quantidade) VALUES(:n, :v, :q);");

$preparo->bindParam(":n", $nome);
$preparo->bindParam(":v", $valor);
$preparo->bindParam(":q", $quantidade);

$preparo->execute();

header("Location:../index.php");
?>