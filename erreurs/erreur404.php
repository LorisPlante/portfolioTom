<?php
    define('RACINE','/');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZP46V38MCG"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-ZP46V38MCG');
    </script>

    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <title>Lp-Design - Erreur 404</title>
    <meta name="description" content="Lp-Design - Erreur 404">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://www.lp-design.fr">

    <!------------ www description ------------>
    <meta property="og:title" content="Lp-Design - Erreur 404">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.lp-design.fr">
    <meta property="og:image" content="<?= RACINE ?>medias/images/logo/logoLPBlanc.svg">
    <meta property="og:description" content="Lp-Design - Erreur 404">
    <meta name="theme-color" content="#fffbf5">
    <!-- <meta name="twitter:card" content="summary_large_image"> -->

    <!------------ favicon ------------>
    <link rel="apple-touch-icon" sizes="180x180" href="<?= RACINE ?>medias/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= RACINE ?>medias/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= RACINE ?>medias/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= RACINE ?>medias/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?= RACINE ?>medias/images/favicon/safari-pinned-tab.svg" color="#c00000">
    <meta name="msapplication-TileColor" content="#c00000">

    <!------------ Font Awesome ------------>
    <script src="https://kit.fontawesome.com/6d1905595e.js" crossorigin="anonymous"></script>

    <!------------ CSS ------------>
    <link href="<?= RACINE ?>css/erreurs.css" rel="stylesheet" type="text/css"/>

  </head>


  <body>


<body>
    <h1>
      <a href="<?= RACINE ?>"> 
        <img src="<?= RACINE ?>medias/images/logo/logoLPDesign.svg" alt="logo Loris Planté">          
      </a>
    </h1>
    <h2>Erreur 404</h2>
    <p>Cette page n'existe pas !</p>
    <?php include 'erreur-includes.php'; ?>