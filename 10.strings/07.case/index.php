<?php
    // strtolower - todas as letras minúsculas;
    // strtoupper - todas as letras maiúsculas;
    // ucfirst    - primeira letra da string em maiúscula;
    // ucwords    - primeira letra de cada palavra em maiúscula;

    $name = "LEODeymison";

    echo strtoupper($name);

    echo "<br />";

    $name = "LEODeymison";

    echo strtolower($name);

    echo "<br />";

    $name = "leodeymison gomes de alcAntara";

    echo ucfirst($name);

    echo "<br />";

    $name = "leodeymison gomes de alcAntara";

    echo ucwords($name);
?>