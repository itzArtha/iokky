<?php
require "app/controller/UpdateController.php";
use App\Controller\UpdateController;

$add = new UpdateController();
    $data = array(
        'title' => $_POST['title'],
        'year' => $_POST['year'],
        'genre' => $_POST['genre'],
    );
    $add->update('movies', $data, 'id = ' . $_POST['id']);
    header('location:index.php?page=home');
?>