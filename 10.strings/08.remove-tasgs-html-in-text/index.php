<?php
    // strip_tags = Remove tags html de um texto
    
    $text = "Esse é um html com <br /> tabs <br /><hr /><p>Olá mundo!</p><strong>test</strong>";

    echo strip_tags($text);
?>