<?php
    // ? trim  - limpa espaços antes e depois da string;
    // ? ltrim - limpa espaços da parte inicial da string;
    // ? rtrim - limpa espaços da parte final da string;

    $text1 = "    Meu nome é tal     ";
    echo "Texto atual |$text1|" . "<br />";
    $text1Clean = trim($text1);
    echo "Novo texto  |$text1Clean|" . "<br />";

    echo "<br /><br />";
    $text1 = "   Meu nome é tal";
    echo "Texto atual |$text1|" . "<br />";
    $text1Clean = ltrim($text1);
    echo "Novo texto  |$text1Clean|" . "<br />";

    echo "<br /><br />";
    $text1 = "Meu nome é tal    ";
    echo "Texto atual |$text1|" . "<br />";
    $text1Clean = rtrim($text1);
    echo "Novo texto  |$text1Clean|" . "<br />";
?>