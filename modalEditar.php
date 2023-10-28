<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/modalEditar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
    <title>Editar</title>
</head>

<?php 
include("php/connect.php");

$id = $_GET["id"];

$sql = "SELECT * FROM `bebidas` WHERE `id` = '$id'";

$res = mysqli_query($server, $sql);

$dados = mysqli_fetch_assoc($res);

?>

<body>
    <form action="msgEditar.php" method="get" id="formulario">
        <div id="container">
            <div id="container-tt">
                <h2>Editar Dados</h2>
            </div>
            <input type="hidden" name="id" value="<?php echo $dados["id"]; ?>" >
            <div class="container-label" id="label-nome">
                <label for="nome">Nome:</label>
                <br>
                <input type="text" id="nome" name="usuario" placeholder="Digite seu nome" value="<?php echo $dados["adicionado_por"]; ?>" required>
            </div>
            <div class="container-label">
                <label for="nome-produto">Nome do Produto:</label>
                <br>
                <input type="text" id="nome-produto" name="produto" placeholder="Digite o nome do produto" value="<?php echo $dados["nome_produto"]; ?>"  required>
            </div>
            <div class="container-label">
                <label for="preco-produto">Preço do Produto:</label>
                <br>
                <input type="text" id="preco-produto" name="preco" placeholder="Digite o preço do produto" value="<?php echo $dados["preco"]; ?>"  required>
            </div>
            <div class="container-label">
                <label for="tipo-produto">Tipo do Produto:</label>
                <br>
                <input type="text" id="tipo-produto" name="tipo" placeholder="Digite o tipo do produto" value="<?php echo $dados["tipo"]; ?>"  required>
            </div>
            <div class="container-label">
                <label for="quantidade">Quantidade:</label>
                <br>
                <input type="text" id="quantidade" name="qtd" placeholder="Digite a quantidade do produto" value="<?php echo $dados["quantidade"]; ?>"  required>
            </div>
            <div id="container-botao">
                <input type="submit" value="Salvar" id="botao-salvar">
            </div>
        </div>
    </form>
</body>
<script src="script/script.js"></script>

</html>