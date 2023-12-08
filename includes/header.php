<?php
    define('RACINE','/');

    function getPageClassDesktop($currentPage){
        $currentUri = $_SERVER['REQUEST_URI'];

        if ($currentPage === 'accueil') {
            return ($currentUri === RACINE || $currentUri === '/index.php') ? 'text-violet bg-jaune rounded-full px-5 py-3' : 'rounded-full px-5 py-3 hover:bg-jaune hover:text-noir';
        }

        return (strpos($currentUri, $currentPage) !== false) ? 'text-violet bg-jaune rounded-full px-5 py-3' : 'rounded-full px-5 py-3 hover:bg-jaune hover:text-noir';
    }
    function getPageClassMobile($currentPage){
        $currentUri = $_SERVER['REQUEST_URI'];

        if ($currentPage === 'accueil') {
            return ($currentUri === RACINE || $currentUri === '/index.php') ? 'text-jaune bg-violet rounded-full px-5 py-3' : 'rounded-full px-5 py-3 hover:bg-violet hover:text-blanc';
        }

        return (strpos($currentUri, $currentPage) !== false) ? 'text-jaune bg-violet rounded-full px-5 py-3' : 'rounded-full px-5 py-3 hover:bg-violet hover:text-blanc';
    }
?>
<!DOCTYPE html>
<html lang="fr-FR" dir="ltr" class="scroll-smooth bg-violet text-jaune font-raleway">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!------------ CSS ------------>
    <link href="<?= RACINE ?>dist/styles.css" rel="stylesheet" type="text/css"/>

    <!------------ www description ------------>
    <meta property="og:title" content="<?php if(isset($title)): echo $title ; else: echo 'Page sans titre'; endif ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.lp-design.fr">
    <meta property="og:image" content="<?= RACINE ?>medias/images/logo/logoLPBlanc.png">
    <meta property="og:description" content="Lp-Design - Loris Planté - Web Developer, UI Designer - Adobe / Figma / HTML, CSS, PHP, JS - Paris">
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

  </head>

  <body class="w-full min-h-screen bg-violet">

  <nav id="nav-desktop" class="hidden lg:block bg-violet fixed top-0 left-0 w-full pr-2 border-b-2 border-jaune border-solid transition-all duration-500 ease-in-out z-40">
        <ul class="w-full flex justify-between items-center font-bold">
          <li>
            <h1>
              <a href="<?= RACINE ?>">
                <svg width="84" height="84" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <title>Tom Patin</title>
                    <rect width="84" height="84" fill="#70008F"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M42 14H7V27H47H61.5V27.0005C62.6933 27.0005 63.8378 27.4746 64.6816 28.3184C65.5254 29.1622 65.9995 30.3067 65.9995 31.5C65.9995 32.6933 65.5254 33.8378 64.6816 34.6816C63.8378 35.5254 62.6933 35.9995 61.5 35.9995V36L42 36V38V49V71H57V49H61.5H62V48.9929C66.46 48.8655 70.7105 47.0382 73.8744 43.8744C77.1562 40.5925 79 36.1413 79 31.5C79 26.8587 77.1563 22.4075 73.8744 19.1256C70.7105 15.9618 66.46 14.1345 62 14.0071V14L61.5099 14C61.5066 14 61.5033 14 61.5 14H47H42ZM31 71L31 36H16L16 71H31Z" fill="#FFD52B"/>
                </svg>
              </a>
            </h1>
          </li>
          <li><a href="<?= RACINE ?>" class="<?= getPageClassDesktop('accueil') ?>">ACCUEIL</a></li>
          <li><a href="<?= RACINE ?>biographie" class="<?= getPageClassDesktop(RACINE . 'biographie') ?>">BIOGRAPHIE</a></li>
          <li><a href="<?= RACINE ?>formations" class="<?= getPageClassDesktop(RACINE . 'formations') ?>">FORMATIONS</a></li>
          <li><a href="<?= RACINE ?>competences" class="<?= getPageClassDesktop(RACINE . 'competences') ?>">COMPÉTENCES</a></li>
          <li><a href="<?= RACINE ?>entreprises" class="<?= getPageClassDesktop(RACINE . 'entreprises') ?>">ENTREPRISES</a></li>
          <li><a href="<?= RACINE ?>projets" class="<?= getPageClassDesktop(RACINE . 'projets') ?>">PROJETS</a></li>
          <li><a href="<?= RACINE ?>contact" class="<?= getPageClassDesktop(RACINE . 'contact') ?>">CONTACT</a></li>
        </ul>
    </nav>

  <div id="burger" class="block lg:hidden fixed top-5 left-2 z-50 cursor-pointer">
    <div id="burger_open" class="block" onclick="toggleMenu()">
        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M39.5 4.5L4.5 4.5" stroke="#FFD52B" stroke-width="6.5" stroke-linecap="round"/>
            <path d="M39.5 22L4.5 22" stroke="#FFD52B" stroke-width="6.5" stroke-linecap="round"/>
            <path d="M39.5 39.5L4.5 39.5" stroke="#FFD52B" stroke-width="6.5" stroke-linecap="round"/>
        </svg>
    </div>
    <div id="burger_close" class="hidden" onclick="toggleMenu()">
        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.5 4.58533L39.4147 39.5" stroke="#FFD52B" stroke-width="6.48415" stroke-linecap="round"/>
            <path d="M39.5002 4.5L4.58559 39.4147" stroke="#FFD52B" stroke-width="6.48415" stroke-linecap="round"/>
        </svg>
    </div>
  </div>

    <nav id="nav-mobile" class="block fixed top-0 left-0 w-fit h-fit overflow-hidden z-50">
      <div id="close-menu" class="hidden fixed top-[84px] left-0 w-full h-[calc(100vh-84px)] z-[51] overflow-hidden" onclick="toggleMenu()"></div>
      <div id="menu" class="fixed top-[84px] left-[-110%] bg-jaune w-screen sm:w-80 h-screen z-[52] flex justify-center items-center overflow-hidden transition-all duration-300 ease-in-out">
        <ul class="text-noir font-bold text-menu flex justify-center items-start gap-6 flex-col">
          <li><a href="<?= RACINE ?>" class="<?= getPageClassMobile('accueil') ?>">ACCUEIL</a></li>
          <li><a href="<?= RACINE ?>biographie" class="<?= getPageClassMobile(RACINE . 'biographie') ?>">BIOGRAPHIE</a></li>
          <li><a href="<?= RACINE ?>formations" class="<?= getPageClassMobile(RACINE . 'formations') ?>">FORMATIONS</a></li>
          <li><a href="<?= RACINE ?>competences" class="<?= getPageClassMobile(RACINE . 'competences') ?>">COMPÉTENCES</a></li>
          <li><a href="<?= RACINE ?>entreprises" class="<?= getPageClassMobile(RACINE . 'entreprises') ?>">ENTREPRISES</a></li>
          <li><a href="<?= RACINE ?>projets" class="<?= getPageClassMobile(RACINE . 'projets') ?>">PROJETS</a></li>
          <li><a href="<?= RACINE ?>contact" class="<?= getPageClassMobile(RACINE . 'contact') ?>">CONTACT</a></li>
        </ul>
      </div>
    </nav>

  <header id="header-mobile" class="block lg:hidden bg-violet fixed top-0 left-0 w-full border-b-2 border-jaune border-solid z-40">
    <section class="header-section">
      <h1 class="block w-fit mx-auto">
        <a href="<?= RACINE ?>">
          <svg width="84" height="84" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
            <title>Tom Patin</title>
            <rect width="84" height="84" fill="#70008F"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M42 14H7V27H47H61.5V27.0005C62.6933 27.0005 63.8378 27.4746 64.6816 28.3184C65.5254 29.1622 65.9995 30.3067 65.9995 31.5C65.9995 32.6933 65.5254 33.8378 64.6816 34.6816C63.8378 35.5254 62.6933 35.9995 61.5 35.9995V36L42 36V38V49V71H57V49H61.5H62V48.9929C66.46 48.8655 70.7105 47.0382 73.8744 43.8744C77.1562 40.5925 79 36.1413 79 31.5C79 26.8587 77.1563 22.4075 73.8744 19.1256C70.7105 15.9618 66.46 14.1345 62 14.0071V14L61.5099 14C61.5066 14 61.5033 14 61.5 14H47H42ZM31 71L31 36H16L16 71H31Z" fill="#FFD52B"/>
          </svg>
        </a>
      </h1>
    </section>
    <p class="clear"></p>
  </header>

  