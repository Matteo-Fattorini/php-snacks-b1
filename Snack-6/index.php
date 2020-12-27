<!-- Utilizzare questo array: https://pastebin.com/CkX3680A.
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio
e i PM in un rettangolo verde. -->


<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];


echo "<div style = 'border: 5px solid grey; width: 50%; padding: 20px;'>";
foreach($db["teachers"] as $k => $v){
    echo($v["name"]. " " . $v["lastname"]  ."<br>");

}
echo "</div>";

echo "<div style = 'border: 5px solid green; width: 50%; padding: 20px; margin-top: 100px;'>";
foreach($db["pm"] as $k => $v){
    echo($v["name"]. " " . $v["lastname"]  ."<br>");

}
echo "</div>";


?>