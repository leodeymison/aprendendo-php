<?php
    $peoples = [
        'Leodeymison' => 20,
        'Carlos' => 50,
        'Diego' => 30,
        'Joanderson' => 10
    ];
?>

<table>
    <thead>
        <tr>
            <th>NOME</th>
            <th>IDADE</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($peoples as $key => $people): ?>
            <tr>
                <td><?= $key; ?></td>
                <td><?= $people; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>