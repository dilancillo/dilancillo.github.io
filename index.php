<?php
$pageTitle = "Inicio";
require_once __DIR__ . "/includes/header.php";
?>
<main>
  <section class="hero hero-pro">
    <div class="hero-copy">
      <span class="eyebrow"><i>✦</i> El taller mágico del Polo Norte</span>
      <h1>Un mundo de ilusión.<br><em>Una Navidad mágica.</em></h1>
      <p>Descubre regalos increíbles, prepara tu carta y comparte tus deseos con Santa Claus. ¡La magia empieza aquí!</p>
      <div class="hero-actions">
        <a class="btn btn-primary" href="galeria.php">Explorar regalos <span>↗</span></a>
        <a class="btn btn-glass" href="carta.php">Escribir mi carta</a>
      </div>
      <div class="hero-trust"><span>❄ Nieve en vivo</span><span>✉ Correo del Polo Norte</span><span>🎁 50 ideas de regalo</span></div>
    </div>
    <div class="hero-scene" aria-label="Escena navideña ilustrada">
      <div class="scene-glow"></div><div class="scene-star star-a">✦</div><div class="scene-star star-b">✧</div>
      <div class="scene-moon">☾</div><div class="scene-tree">🎄</div>
      <div class="scene-santa">🎅</div><div class="scene-gift gift-a">🎁</div><div class="scene-gift gift-b">🎁</div>
      <div class="scene-snow snow-a"></div><div class="scene-snow snow-b"></div>
      <div class="scene-label">NORTH POLE · EST. 2026</div>
    </div>
  </section>

  <section class="countdown-section">
    <div class="countdown-intro"><span class="eyebrow">La fecha más esperada</span><h2>La Navidad está cada vez más cerca</h2><p>Prepara tus deseos. Santa ya está organizando los regalos.</p></div>
    <div id="christmas-countdown" class="countdown" aria-live="polite">
      <div class="time-box"><strong id="cd-days">--</strong><span>DÍAS</span></div>
      <div class="time-box"><strong id="cd-hours">--</strong><span>HORAS</span></div>
      <div class="time-box"><strong id="cd-minutes">--</strong><span>MINUTOS</span></div>
      <div class="time-box"><strong id="cd-seconds">--</strong><span>SEGUNDOS</span></div>
    </div>
  </section>

  <section class="section-block">
    <div class="section-heading"><div><span class="eyebrow">Explora el Polo Norte</span><h2>¿Qué te gustaría hacer?</h2></div><span class="heading-decoration">✧ ❄ ✧</span></div>
    <div class="feature-grid">
      <a class="feature-card feature-red" href="galeria.php"><span class="feature-icon">🎁</span><span class="feature-kicker">50 ideas para regalar</span><h3>Encuentra tu regalo ideal</h3><p>Explora juguetes, tecnología, creatividad y mucho más.</p><b>Ver galería <i>→</i></b><span class="card-watermark">🎄</span></a>
      <a class="feature-card feature-green" href="carta.php"><span class="feature-icon">✉️</span><span class="feature-kicker">Un mensaje especial</span><h3>Escribe a Santa</h3><p>Cuéntale cuál es ese regalo que te hace ilusión.</p><b>Crear mi carta <i>→</i></b><span class="card-watermark">✦</span></a>
      <a class="feature-card feature-gold" href="cartas.php"><span class="feature-icon">📬</span><span class="feature-kicker">Correo del Polo Norte</span><h3>Cartas recibidas</h3><p>Descubre los deseos que ya llegaron al taller.</p><b>Ver cartas <i>→</i></b><span class="card-watermark">❄</span></a>
    </div>
  </section>
  <section class="quote-strip"><span>“La magia de la Navidad está en compartir ilusión”</span><b>— Taller de Santa Claus 🎅</b></section>
</main>
<?php require_once __DIR__ . "/includes/footer.php"; ?>