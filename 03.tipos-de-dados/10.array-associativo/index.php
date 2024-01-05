<?php
    $my_array = [
        'name' => 'Leo',
        'age' => 18,
        'sex' => "M",
    ];

    echo "<hr />";
    echo "- Nome: $my_array[name]", "<br />";
    echo "- Idade: $my_array[age]", "<br />";
    echo "- Sexo: $my_array[sex]", "<br />";
    echo "- Maior de idade? ", $my_array['age'] >= 18 ? "SIM" : "NÃO";
    echo "<hr />";
?>