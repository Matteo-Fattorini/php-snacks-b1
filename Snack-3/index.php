<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in
questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di
post associati a quella data.
Stampare ogni data con i relativi post. -->


<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Matteo Fattorini',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Matteo Fattorini',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Matteo Fattorini',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Matteo Fattorini',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Matteo Fattorini',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Matteo Fattorini',
            'text' => 'Testo post 6'
        ]
    ],
];





foreach ($posts as $date => $messages) {
?> <ul>
        <li><?= $date ?>
            <ul>
                <?php
                foreach ($messages as $details) {
                ?> <li><?= $details["title"] . "<br>" . $details["author"] . "<br>" . $details["text"]   ?>
                    <?php
                }
                    ?>
            </ul>
        </li>
    </ul>
<?php
}
?>