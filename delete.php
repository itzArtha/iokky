<?php
require "app/controller/DeleteController.php";
use App\Controller\DeleteController;

$delete = new DeleteController();
$delete->delete('movies', 'id = ' . $_GET['id']);

header('location:index.php?page=home');

?>