<?php include_once("config/url.php");?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Bootstrap-->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js">
    <!--Font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
    />
    <!--CSS personalizado-->
    <link rel="stylesheet" href="<?=$BASE_URL?>css/styles.css"/>
    <title>Agenda</title>
  </head>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a href="<?=$BASE_URL?>index.php" class="navbar-brand">
      <img src="<?=$BASE_URL?>img/logo.jpg">
      </a>

      <div>
        <div class="navbar-nav">
          <a href="<?=$BASE_URL?>index.php" class="nav-link active" id="home-link">
            Agenda
          </a>
        </div>

        <div class="navbar-nav">
          <a href="<?=$BASE_URL?>index.php" class="nav-link active" id="home-link">
            Adicionar Contatos
          </a>
        </div>
      </div>
    </nav>
  </header>