<?php

$todo_string = file_get_contents('./todo.json');

$todo_list = json_decode($todo_string, true);


$todos = [
    'Svegliarsi',
    'Mangiare',
    'Fare la spesa a piedi nudi',
    'Cantare sotto la doccia',
    'Soffiarsi il naso',
];

$new_task = isset($_GET['todo']) ? $_GET['todo'] : null;

if ($new_task !== null) {
    $todo_list[] = $new_task;
}


$todos_json = json_encode($todos);
file_put_contents('./todo.json', $todos_json);


header('Content-Type: application/json');
echo $todos_json;
