<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni
alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$classe = [
    [
        "Nome" => "Marco",
        "Cognome" => "Rossi",
        "Voti" => [5, 6, 8, 7],
    ],
    [
        "Nome" => "Luca",
        "Cognome" => "Bianchi",
        "Voti" => [5, 9, 8, 10, 5, 4, 5],
    ],
    [
        "Nome" => "Giulia",
        "Cognome" => "Lepri",
        "Voti" => [8, 8, 8, 7],
    ],
    [
        "Nome" => "Leonardo",
        "Cognome" => "Pesci",
        "Voti" => [8, 8, 10, 7],
    ],
    [
        "Nome" => "Lorenzo  ",
        "Cognome" => "Masini",
        "Voti" => [5, 5, 8, 7],
    ],
    [
        "Nome" => "Noemi",
        "Cognome" => "Bellucci",
        "Voti" => [5, 10, 8, 7],
    ],
    [
        "Nome" => "Jacopo",
        "Cognome" => "Mori",
        "Voti" => [8, 8, 9, 7],
    ],
    [
        "Nome" => "Carla",
        "Cognome" => "Trimarchi",
        "Voti" => [3, 2, 4, 4],
    ],
];

function toFixed($number, $decimals)
{
    return number_format($number, $decimals, '.', "");
}


echo "<ul>";
foreach ($classe as $k => $v) {
    echo ("<li>" . "Alunno" . " " .  $v["Nome"] . " " . $v["Cognome"] . "<br> " . "Media Voti:" . " " . toFixed((array_sum($v["Voti"])) / count($v["Voti"]), 1) . "<br> " . "<br> " . "</li>");
}

echo "</ul>";


?>