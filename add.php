<?php
require "app/controller/CreateController.php";
use App\Controller\CreateController;

$add = new CreateController();
    $data = array(
        'title' => $_POST['title'],
        'year' => $_POST['year'],
        'genre' => $_POST['genre'],
    );
    $add->create('movies', $data);
    header('location:index.php?page=home');
?>