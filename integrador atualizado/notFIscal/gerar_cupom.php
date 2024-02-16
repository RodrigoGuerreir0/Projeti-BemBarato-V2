<?php
// Recupera os dados do formulário
//fazer as alterações necessarias depois
$cliente = $_POST['cliente'];

// Adicione aqui o código para recuperar outros dados do formulário (itens, quantidade, preço, etc.)

// Calcula o total da compra (exemplo simples)
$total = 0; // Inicializa o total como zero

// Adicione aqui o código para calcular o total com base nos itens, quantidade, preço, etc.

// Gera o cupom
$cupom = "CUPOM FISCAL\n";
$cupom .= "Cliente: $cliente\n";
// Adicione outras informações ao cupom conforme necessário

$cupom .= "Total: R$ " . number_format($total, 2, ',', '.') . "\n";

// Exibe o cupom
echo nl2br($cupom); // nl2br é usado para preservar quebras de linha ao exibir no navegador
?>