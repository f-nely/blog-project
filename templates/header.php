<?php
//require_once 'helpers/url.php';
require_once 'data/categories.php';
require_once 'data/posts.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet"> 
  <title>Blog Codar</title>
</head>
<body>
  <header>
    <a href="../index.php" id="logo">
      <img src="../img/logo.svg" alt="Blog Codar">
    </a>
    <nav>
      <ul id="navbar">
        <li><a href="../index.php" class="nav-link">Home</a></li>
        <li><a href="#" class="nav-link">Categorias</a></li>
        <li><a href="#" class="nav-link">Sobre</a></li>
        <li><a href="../contato.php" class="nav-link">Contato</a></li>
      </ul>
    </nav>
  </header>