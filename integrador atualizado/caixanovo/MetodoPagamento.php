<!DOCTYPE html>
<html>

<head>
    <title>Métodos de Pagamento</title>
    <link rel="stylesheet" href="./css/MetodoPagento.css">
</head>
<?php
require 'validarcaixa.php';

$somaValores = SomarValores();
$descontoCompra = CalcularDesconto();
?>

<body>
    <div class="container">
        <h2>Escolha o método de pagamento:</h2>
        <form method="post">
            <p class="centralizarqtdgeral">
                <?php echo "R$ " . $somaValores; ?>
            </p>
            <input type="hidden" name="valor_compra" value="<?php echo $somaValores; ?>"> <br>
            <input type="radio" id="pix" name="metodo_pagamento" value="pix">
            <label for="pix">Pix</label><br>
            <input type="radio" id="debito" name="metodo_pagamento" value="debito">
            <label for="debito">Cartão de Débito</label><br>
            <input type="radio" id="credito" name="metodo_pagamento" value="credito">
            <label for="credito">Cartão de Crédito</label><br>
            <input type="radio" id="dinheiro" name="metodo_pagamento" value="dinheiro">
            <label for="dinheiro">Dinheiro</label><br>
            <input class="btn_finalizar txt" type="submit" value="Confirmar Pagamento"> <br>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valor_compra = $_POST["valor_compra"];
             $metodo_pagamento = $_POST["metodo_pagamento"];
            switch ($metodo_pagamento) {
                case "pix":
                    echo "Você escolheu pagar com Pix no valor de R$ $somaValores.";
                    break;
                case "debito":
                    echo "Você escolheu pagar com Cartão de Débito no valor de R$ $valor_compra.";
                    break;
                case "credito":
                    echo "Você escolheu pagar com Cartão de Crédito no valor de R$ $valor_compra.";
                    break;
                case "dinheiro":
                    echo "Você escolheu pagar com Dinheiro no valor de R$ $valor_compra.";
                    break;
                default:
                    echo "Por favor, escolha um método de pagamento.";
            }
        }
        ?>
    </div>
</body>

</html>
