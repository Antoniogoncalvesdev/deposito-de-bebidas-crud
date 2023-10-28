<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/modalExcluir.css">
    <title>Excluir</title>
    <style>

    </style>
</head>

<?php
$id = $_GET["id"] ?? '';
?>

<body>
    <form action="modalExcluir.php" method="get">
        <div id="container">
            <div id="borda">
                <div>
                    <h2>Confirmação de exclusão</h2>
                </div>
                <div id="paragrafos">
                    <p>Deseja excluir permanentemente?</p>
                    <p>Se sim, digite “Sim” e clique em “Confirmar”.</p>
                </div>
                <div id="botoesInput">
                    <div>
                        <button id="cancelar-botao"><a href="index.php">Cancelar</a></button>
                    </div>
                    <div>
                        <input type="text" id="confirmation-input" required>
                    </div>
                    <div>
                        <button type='button' id="excluir-botao" name="excluir" disabled>Confirmar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
<script>
    const confirmation_input = document.querySelector('input#confirmation-input')
    const button = document.querySelector('button#excluir-botao')

    confirmation_input.addEventListener('input', function() {
        if (confirmation_input.value == 'sim' || confirmation_input.value == 'Sim') {
            button.disabled = false

        } else {
            button.disabled = true
        }
    })

    button.addEventListener('click', function() {
        window.location.href = 'msgExcluir.php?id=' + <?php echo $id;?>
    })
</script>

</html>