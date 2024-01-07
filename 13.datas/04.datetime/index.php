<?php
    $data = new DateTime();
    $data2 = new DateTime();

    echo $data->format('d/m/Y - h:i:s').'<br />';

    $data->modify('+5 days');

    echo $data->format('d/m/Y - h:i:s').'<br />';

    $data->setDate(2000, 11, 21);
    $data->setTime(01, 23, 45);
    
    echo $data->format('d/m/Y - h:i:s').'<br />';

    $diferenca = $data->diff($data2);
    echo "Diferença de dias: ".$diferenca->format('%d days').'<br />';
    print_r($diferenca);
    echo '<br />';


    if($data === $data2) {
        echo "Datas são iguais!";
    } else {
        echo "Datas são diferentes!";
    }
?>