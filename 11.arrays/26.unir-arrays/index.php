<?php
    $arrNumber = [12, 2, 100, 87, 56];
    $arrStr = ['Leo', 'josué', 'André', 'Filipe', 'Leopoldo'];
    $arrBool = [true, false, false];

    $new_arr = array_merge($arrNumber, $arrStr, $arrBool);

    print_r($new_arr);
?>