<?php 
session_start();
if(!isset($_SESSION['auth'])) {
    header('location:login.php');
}
$user = $_SESSION['auth'];
require "app/controller/ViewController.php";
use App\Controller\ViewController;
$fetch = new ViewController();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streaming CRUD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
    
</head>
<header>
  <nav class="bg-white shadow dark:bg-gray-800">
    <div class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
        <div class="flex items-center justify-between">
            <div>
                <a class="text-xl font-bold text-gray-800 dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300" href="#">StreamYuk</a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="flex md:hidden">
                <button type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                        <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div class="items-center md:flex">
            <div class="flex flex-col md:flex-row md:mx-6">
              <!-- <button class="h-10 px-4 text-lg text-gray-100 transition-colors duration-150 bg-gray-700 rounded-lg focus:shadow-outline hover:bg-gray-800">Login</button> -->
              <button class="h-10 px-4 text-lg text-gray-100 transition-colors duration-150 bg-gray-700 rounded-lg focus:shadow-outline hover:bg-gray-800">Hello, <?= explode('@', $user['email'])[0] ?></button>
            </div>
        </div>
    </div>
  </nav> 
  <h2 class="text-center pt-28 text-4xl font-bold">
    <?php if($_GET['page'] == 'addmovie') {
      echo "Tambah Film";
    } else if($_GET['page'] == 'home') {
      echo "Film pilihan Anda";
    } else if($_GET['page'] == 'editmovie') {
      echo "Edit Film";
    } ?>
  </h2>
</header>
<body>
  <?php
  if($_GET['page'] == 'addmovie') {
    include "resources/addmovie.php";
  } else if($_GET['page'] == 'editmovie') {
    include "resources/editmovie.php";
  } else if($_GET['page'] == 'home') {
    include "resources/home.php";
  }
  ?>
</body>
<footer class="flex flex-col items-center justify-between px-6 py-4 bg-white dark:bg-gray-800 sm:flex-row">
  <a href="#" class="text-xl font-bold text-gray-800 dark:text-white hover:text-gray-700 dark:hover:text-gray-300">StreamYuk</a>
  
  <p class="py-2 text-gray-800 dark:text-white sm:py-0">All rights reserved 2021</p>

  <div class="flex -mx-2">
      <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit">
      </a>
  </div>
</footer>
</html>