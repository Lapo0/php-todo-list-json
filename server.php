<?php


$todos = [
    'Svegliarsi',
    'Mangiare',
    'Fare la spesa a piedi nudi',
    'Cantare sotto la doccia',
    'Soffiarsi il naso',
];

var_dump($todos);


$todos_json = json_encode($todos);
file_put_contents('./todo.json', $todos_json);

