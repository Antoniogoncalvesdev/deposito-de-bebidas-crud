<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/msgdeSucesso.css">
    <title>Sucesso!</title>
</head>
<body>
    <main>
        <div>
            <div>
                <span>Dados atualizados com sucesso!</span>
            </div>
            <div id='aa'>
                <a href="index.php">Voltar para página inicial</a>
            </div>
        </div>
    </main>
</body>
<?php 
include("php/connect.php");

$id = $_GET["id"];
$nome = $_GET["usuario"];
$produto = $_GET["produto"];
$preco = $_GET["preco"];
$tipo = $_GET["tipo"];
$qtd = $_GET["qtd"];

$sql = "UPDATE `bebidas` SET `nome_produto` = '$produto', `preco` = '$preco', `tipo` = '$tipo', `quantidade` = '$qtd', `adicionado_por` = '$nome' WHERE `id` = '$id'";

mysqli_query($server, $sql);

?>

</html>
