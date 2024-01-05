<?php
    $value = 123.50;
    $frete = 12.30;
    $porcentagemDesconto = 10;

    $subtotal = ($value + $frete);
    $desconto = ($subtotal * $porcentagemDesconto) / 100;
    $total = $subtotal - $desconto;
    echo "<hr />";
    echo "Valor:  $value <br />";
    echo "Frete: $frete <br />";
    echo "Subtotal: $subtotal <br />";
    echo "Desconto: -$desconto ($porcentagemDesconto%) <br />";
    echo "<h3>Total: $total</h3>";
    echo "<hr />";
?>