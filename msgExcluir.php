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
                <span>Dados deletados com sucesso!</span>
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

    $sql = "DELETE FROM `bebidas` WHERE `id` = '$id'";
    if (mysqli_query($server, $sql)) {

    } else {
        echo "Erro ao excluir: ". mysqli_error($con);
    }
?>
</html>
