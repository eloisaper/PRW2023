<?php
    $cam1 = $_GET['cam1'];
    $cam2 = $_GET['cam2'];
    $cam3 = $_GET['cam3'];
    $qtd1 = $cam1 * 10;
    $qtd2 = $cam2 * 12;
    $qtd3 = $cam3 * 15;
    $pedido = $qtd1 + $qtd2 + $qtd3;

    echo "O valor do pedido é: $pedido";
?>