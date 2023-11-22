<?php

require_once 'config.php';
require __DIR__ . '/src/models/recipe-model.php';

$errors = [];

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    if(!isset($_POST['title']) || trim($_POST['title'])==='' || strlen($_POST['title'])>255){
        $errors[]='Il faut un titre ou le titre les trop long.';
    }
    else{
        $title=htmlentities($_POST['title']);

    }
    if(!isset($_POST['description']) || $_POST['description']===''){
        $errors[]='Il faut une description';
    }
    else{
        $description=htmlentities($_POST['description']);
    }
    if (empty($errors)) {
        $recipe = [
            'title'=>$title,
            'description'=>$description
        ];
        saveRecipe($recipe);
        header('Location: /');
    }
}

require __DIR__ . '/src/views/form.php';