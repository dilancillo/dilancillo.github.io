<?php
if (!isset($pageTitle)) $pageTitle = "Navidad mágica";
$currentPage = basename($_SERVER["PHP_SELF"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#10251f">
  <title><?= htmlspecialchars($pageTitle) ?> | Navidad mágica</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="video-background" aria-hidden="true">
    <video class="background-video" autoplay muted loop playsinline poster="assets/img/navidad-poster.jpg">
      <source src="https://videos.pexels.com/video-files/856857/856857-hd_1920_1080_30fps.mp4" type="video/mp4">
    </video>
    <div class="video-shade"></div>
  </div>
  <div class="ambient-glow"></div><div class="snow-layer" aria-hidden="true"></div>

  <!-- Personajes vectoriales animados: el duende y el reno recorren la pantalla -->
  <div class="walking-character elf-character" aria-hidden="true">
    <svg viewBox="0 0 120 150" role="img">
      <ellipse cx="60" cy="143" rx="31" ry="5" class="character-shadow"/>
      <path d="M35 53 Q10 26 22 12 Q43 18 50 42Z" class="elf-hat"/>
      <path d="M48 42 Q73 12 101 27 Q91 53 65 60Z" class="elf-hat"/>
      <circle cx="101" cy="27" r="7" class="hat-bell"/>
      <path d="M35 67 Q60 48 85 67 L94 111 Q61 126 27 111Z" class="elf-coat"/>
      <path d="M36 76 L18 101 M84 76 L103 100" class="elf-limbs arm-left"/>
      <circle cx="16" cy="104" r="8" class="elf-skin"/><circle cx="105" cy="103" r="8" class="elf-skin"/>
      <ellipse cx="60" cy="57" rx="25" ry="25" class="elf-skin"/>
      <path d="M36 53 Q39 28 64 30 Q83 30 86 51 Q67 42 54 48 Q45 53 36 53Z" class="elf-hair"/>
      <circle cx="51" cy="58" r="2.5" class="face-eye"/><circle cx="69" cy="58" r="2.5" class="face-eye"/>
      <path d="M53 70 Q60 76 68 70" class="face-smile"/>
      <path d="M43 112 L36 135 M77 112 L84 135" class="elf-legs"/>
      <path d="M25 135 L43 135 L39 144 L20 144Z M77 135 L95 135 L100 144 L81 144Z" class="elf-shoes"/>
      <path d="M29 84 L60 92 L91 84" class="elf-belt"/>
      <rect x="53" y="88" width="14" height="10" rx="2" class="elf-buckle"/>
    </svg>
    <span class="character-name">TIMO · DUENDE</span>
  </div>
  <div class="walking-character reindeer-character" aria-hidden="true">
    <svg viewBox="0 0 150 140" role="img">
      <ellipse cx="74" cy="132" rx="43" ry="5" class="character-shadow"/>
      <path d="M48 35 Q28 8 18 15 M28 22 Q10 18 12 5 M93 35 Q113 7 124 15 M115 22 Q135 17 137 5" class="antlers"/>
      <path d="M43 47 Q61 22 91 39 L119 69 Q115 104 78 112 Q40 108 31 79Z" class="deer-body"/>
      <path d="M102 57 Q126 35 140 56 L139 82 Q124 98 106 85Z" class="deer-head"/>
      <path d="M117 46 L110 29 L128 39Z M135 48 L148 34 L148 58Z" class="deer-ears"/>
      <circle cx="130" cy="63" r="3" class="face-eye"/><ellipse cx="144" cy="78" rx="7" ry="6" class="deer-nose"/>
      <path d="M42 95 L37 123 M68 104 L67 125 M96 101 L101 123" class="deer-legs"/>
      <path d="M29 123 L43 123 L44 130 L28 130 M59 125 L73 125 L74 132 L58 132 M94 123 L108 123 L110 130 L94 130" class="deer-hooves"/>
      <path d="M38 61 Q16 56 18 78" class="deer-tail"/>
      <path d="M70 40 Q77 31 85 42" class="deer-scarf"/>
      <circle cx="80" cy="42" r="7" class="scarf-bell"/>
    </svg>
    <span class="character-name">NOG · RENO</span>
  </div>
  <header class="site-header">
    <a class="brand" href="index.php"><span class="brand-emblem">✦</span><span>NAVIDAD <b>MÁGICA</b><small>EL TALLER DE SANTA</small></span></a>
    <button class="menu-toggle" type="button" aria-label="Abrir menú" aria-expanded="false">☰</button>
    <nav class="main-nav" aria-label="Navegación principal">
      <a class="<?= $currentPage === 'index.php' ? 'active' : '' ?>" href="index.php">Inicio</a>
      <a class="<?= $currentPage === 'galeria.php' ? 'active' : '' ?>" href="galeria.php">Juguetes <span class="nav-count">50</span></a>
      <a class="<?= $currentPage === 'carta.php' ? 'active' : '' ?>" href="carta.php">Mi carta</a>
      <a class="<?= $currentPage === 'cartas.php' ? 'active' : '' ?>" href="cartas.php">Cartas recibidas</a>
    </nav>
  </header>
  <div class="snowball-transition" aria-hidden="true"><span>❄</span></div>