<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
    <title>Depósito de Bebidas</title>
</head>
<?php
include("php/connect.php");

$sql = "SELECT * FROM bebidas";

$dados = mysqli_query($server, $sql) or die(mysqli_error($server));
?>

<body>
    <aside id="lateral">
        <div id="container-tt">
            <h2>Cadastro de Produto</h2>
        </div>
        <form action="index.php" method="get" id="formulario">
            <div id="container">
                <div class="container-label">
                    <label for="nome">Nome:</label>
                    <br>
                    <input type="text" id="nome" name="usuario" placeholder="Digite seu nome" required>
                </div>
                <div class="container-label">
                    <label for="nome-produto">Nome do Produto:</label>
                    <br>
                    <input type="text" id="nome-produto" name="produto" placeholder="Digite o nome do produto" required>
                </div>
                <div class="container-label">
                    <label for="preco-produto">Preço do Produto:</label>
                    <br>
                    <input type="text" id="preco-produto" name="preco" placeholder="Digite o preço do produto" required>
                </div>
                <div class="container-label">
                    <label for="tipo-produto">Tipo do Produto:</label>
                    <br>
                    <input type="text" id="tipo-produto" name="tipo" placeholder="Digite o tipo do produto" required>
                </div>
                <div class="container-label">
                    <label for="quantidade">Quantidade:</label>
                    <br>
                    <input type="text" id="quantidade" name="qtd" placeholder="Digite a quantidade do produto" required>
                </div>
                <div id="container-botao">
                    <input type="submit" value="Salvar" id="botao-salvar" name="cadastrar">
                </div>
            </div>
        </form>
        <?php
        include("connect.php");
        $nome = $_GET["usuario"];
        $produto = $_GET["produto"];
        $preco = $_GET["preco"];
        $tipo = $_GET["tipo"];
        $qtd = $_GET["qtd"];

        if (isset($_GET["cadastrar"])) {
            $sql = "INSERT INTO `bebidas` (`nome_produto`, `preco`, `tipo`, `quantidade`, `adicionado_por`) VALUES ('$produto', '$preco', '$tipo', '$qtd', '$nome')";
            if (mysqli_query($server, $sql)) {
                header("Location: index.php");
            } else {
                echo "<script>alert('Erro ao cadastrar!')</script>;";
            }
        }
        ?>

    </aside>
    <div id="container-tela2">
        <div id="container-tt2">
            <h2>Produtos Cadastrados</h2>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Nome do Produto</th>
                    <th>Preço do Produto</th>
                    <th>Tipo do Produto</th>
                    <th>Quantidade</th>
                    <th>Adicionado por:</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($dados)) {
                    $id = $row["id"];
                    $nome_pro = $row["nome_produto"];
                    $preco_pro = $row["preco"];
                    $tipo_pro = $row["tipo"];
                    $qtd_pro = $row["quantidade"];
                    $ad_por = $row["adicionado_por"];

                    echo "
                    <tr>
                    <td>$nome_pro</td>
                    <td>R$$preco_pro</td>
                    <td>$tipo_pro</td>
                    <td>$qtd_pro</td>
                    <td>$ad_por</td>
                    <td style='display: flex;'>
                        <abbr title='Editar'><a href='modalEditar.php?id=$id'><img src='imgs/editar.png' alt='' style='height: 20px; margin-left: 25px;'></a></abbr>
                        <abbr title='Excluir'><a href='modalExcluir.php?id=$id'><img src='imgs/lixeira-de-reciclagem.png' alt='' style='height: 20px; margin-left: 20px; padding-right: 30px; '></a></abbr>
                    </td>
                </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
<script src="script/script.js"></script>

</html>