<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="notFiscal.css">
    <title>Nota Fiscal</title>
</head>

<body>
    <div class="notaFiscal-container">
        <h2 class="text-center borda mt-4">Nota Fiscal</h2>

        <div class="nota">
            <table class="table">
                <p class="texto"> R. Dr. Angelino Sanches, 800 - Vila Sao Pedro, Americana - SP, 13466-490
                    CNPJ: 12.965.128/0001-98
                </p>
        </div>
        <h1>CUPOM FISCAL</h1>
        <?php
        // Recupera os dados do formulário
        $cliente = $_POST['cliente']; //vincular o banco de dados

        // Adicione aqui o código para recuperar outros dados do formulário (itens, quantidade, preço, etc.)

        // Calcula o total da compra (exemplo simples)
        $total = 0; // Inicializa o total como zero

        // Adicione aqui o código para calcular o total com base nos itens, quantidade, preço, etc.

        // Obtém a data e hora atual
        $dataHoraCompra = date('d/m/Y H:i:s');

        // Gera o cupom
        $cupom = "CUPOM FISCAL\n";
        $cupom .= "Data e Hora da Compra: $dataHoraCompra\n";
        $cupom .= "Cliente: $cliente\n";
        // Adicione outras informações ao cupom conforme necessário

        $cupom .= "Total: R$ " . number_format($total, 2, ',', '.') . "\n";

        // Exibe o cupom
        echo nl2br($cupom); // nl2br é usado para preservar quebras de linha ao exibir no navegador
        ?>

        <table class="tabela">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            </thead>








    </div>

</body>

</html>