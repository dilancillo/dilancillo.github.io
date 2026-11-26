<?php
$pageTitle = "Galería de regalos";
require_once __DIR__ . "/includes/header.php";
$toys = [
  ["id"=>1,"name"=>"Osito de peluche","type"=>"Peluche","category"=>"ni\u00f1as","emoji"=>"\ud83e\uddf8","price"=>249,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=1"],
  ["id"=>2,"name"=>"Muñeca de colección","type"=>"Muñecas","category"=>"ni\u00f1as","emoji"=>"\ud83c\udf80","price"=>329,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=2"],
  ["id"=>3,"name"=>"Casa de muñecas","type"=>"Juegos de imaginación","category"=>"ni\u00f1as","emoji"=>"\ud83c\udfe0","price"=>599,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=3"],
  ["id"=>4,"name"=>"Set de pulseras","type"=>"Manualidades","category"=>"ni\u00f1as","emoji"=>"\ud83d\udcff","price"=>189,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=4"],
  ["id"=>5,"name"=>"Kit de maquillaje infantil","type"=>"Manualidades","category"=>"ni\u00f1as","emoji"=>"\ud83c\udfa8","price"=>219,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=5"],
  ["id"=>6,"name"=>"Cocina de juguete","type"=>"Juegos de imaginación","category"=>"ni\u00f1as","emoji"=>"\ud83c\udf73","price"=>749,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=6"],
  ["id"=>7,"name"=>"Caballito de peluche","type"=>"Peluche","category"=>"ni\u00f1as","emoji"=>"\ud83d\udc34","price"=>279,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=7"],
  ["id"=>8,"name"=>"Set de té","type"=>"Juegos de imaginación","category"=>"ni\u00f1as","emoji"=>"\ud83e\uded6","price"=>199,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=8"],
  ["id"=>9,"name"=>"Muñeca bebé","type"=>"Muñecas","category"=>"ni\u00f1as","emoji"=>"\ud83d\udc76","price"=>299,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=9"],
  ["id"=>10,"name"=>"Kit de pintura","type"=>"Manualidades","category"=>"ni\u00f1as","emoji"=>"\ud83d\udd8c\ufe0f","price"=>159,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=10"],
  ["id"=>11,"name"=>"Diario con candado","type"=>"Papelería","category"=>"ni\u00f1as","emoji"=>"\ud83d\udcd4","price"=>139,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=11"],
  ["id"=>12,"name"=>"Patines ajustables","type"=>"Deportes","category"=>"ni\u00f1as","emoji"=>"\ud83d\udefc","price"=>899,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=12"],
  ["id"=>13,"name"=>"Set de accesorios","type"=>"Manualidades","category"=>"ni\u00f1as","emoji"=>"\ud83d\udc8e","price"=>179,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=13"],
  ["id"=>14,"name"=>"Pelota brillante","type"=>"Deportes","category"=>"ni\u00f1as","emoji"=>"\u26bd","price"=>129,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=14"],
  ["id"=>15,"name"=>"Peluche de unicornio","type"=>"Peluche","category"=>"ni\u00f1as","emoji"=>"\ud83e\udd84","price"=>269,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=15"],
  ["id"=>16,"name"=>"Rompecabezas de fantasía","type"=>"Juegos de mesa","category"=>"ni\u00f1as","emoji"=>"\ud83e\udde9","price"=>149,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=16"],
  ["id"=>17,"name"=>"Micrófono de karaoke","type"=>"Música","category"=>"ni\u00f1as","emoji"=>"\ud83c\udfa4","price"=>399,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=17"],
  ["id"=>18,"name"=>"Auto de carreras","type"=>"Vehículos","category"=>"ni\u00f1os","emoji"=>"\ud83c\udfce\ufe0f","price"=>199,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=18"],
  ["id"=>19,"name"=>"Camión de construcción","type"=>"Vehículos","category"=>"ni\u00f1os","emoji"=>"\ud83d\ude9a","price"=>249,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=19"],
  ["id"=>20,"name"=>"Robot programable","type"=>"Robots","category"=>"ni\u00f1os","emoji"=>"\ud83e\udd16","price"=>599,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=20"],
  ["id"=>21,"name"=>"Pista de autos","type"=>"Vehículos","category"=>"ni\u00f1os","emoji"=>"\ud83c\udfc1","price"=>699,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=21"],
  ["id"=>22,"name"=>"Set de bloques","type"=>"Construcción","category"=>"ni\u00f1os","emoji"=>"\ud83e\uddf1","price"=>349,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=22"],
  ["id"=>23,"name"=>"Balón de fútbol","type"=>"Deportes","category"=>"ni\u00f1os","emoji"=>"\u26bd","price"=>229,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=23"],
  ["id"=>24,"name"=>"Figura de dinosaurio","type"=>"Figuras","category"=>"ni\u00f1os","emoji"=>"\ud83e\udd96","price"=>189,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=24"],
  ["id"=>25,"name"=>"Dinosaurio articulado","type"=>"Figuras","category"=>"ni\u00f1os","emoji"=>"\ud83e\udd95","price"=>279,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=25"],
  ["id"=>26,"name"=>"Avión a control remoto","type"=>"Vehículos","category"=>"ni\u00f1os","emoji"=>"\u2708\ufe0f","price"=>799,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=26"],
  ["id"=>27,"name"=>"Set de herramientas","type"=>"Juegos de imaginación","category"=>"ni\u00f1os","emoji"=>"\ud83d\udee0\ufe0f","price"=>299,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=27"],
  ["id"=>28,"name"=>"Lanzador de discos de espuma","type"=>"Juegos activos","category"=>"ni\u00f1os","emoji"=>"\ud83c\udfaf","price"=>249,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=28"],
  ["id"=>29,"name"=>"Tren eléctrico","type"=>"Vehículos","category"=>"ni\u00f1os","emoji"=>"\ud83d\ude82","price"=>899,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=29"],
  ["id"=>30,"name"=>"Guantes de portero","type"=>"Deportes","category"=>"ni\u00f1os","emoji"=>"\ud83e\udd45","price"=>319,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=31"],
  ["id"=>31,"name"=>"Set de explorador","type"=>"Aventura","category"=>"ni\u00f1os","emoji"=>"\ud83d\udd2d","price"=>259,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=32"],
  ["id"=>32,"name"=>"Dragón de fantasía","type"=>"Figuras","category"=>"ni\u00f1os","emoji"=>"\ud83d\udc09","price"=>299,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=33"],
  ["id"=>33,"name"=>"Consola portátil educativa","type"=>"Electrónica","category"=>"ni\u00f1os","emoji"=>"\ud83c\udfae","price"=>999,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=34"],
  ["id"=>34,"name"=>"Skateboard","type"=>"Deportes","category"=>"ni\u00f1os","emoji"=>"\ud83d\udef9","price"=>699,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=35"],
  ["id"=>35,"name"=>"Juego de ciencia","type"=>"Ciencia","category"=>"ni\u00f1os","emoji"=>"\ud83d\udd2c","price"=>379,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=36"],
  ["id"=>36,"name"=>"Audífonos inalámbricos","type"=>"Tecnología","category"=>"adolescentes","emoji"=>"\ud83c\udfa7","price"=>599,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=37"],
  ["id"=>37,"name"=>"Teclado mecánico","type"=>"Tecnología","category"=>"adolescentes","emoji"=>"\u2328\ufe0f","price"=>899,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=38"],
  ["id"=>38,"name"=>"Mouse gamer","type"=>"Tecnología","category"=>"adolescentes","emoji"=>"\ud83d\uddb1\ufe0f","price"=>449,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=39"],
  ["id"=>39,"name"=>"Lámpara LED RGB","type"=>"Tecnología","category"=>"adolescentes","emoji"=>"\ud83d\udca1","price"=>299,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=40"],
  ["id"=>40,"name"=>"Mini proyector","type"=>"Tecnología","category"=>"adolescentes","emoji"=>"\ud83d\udcfd\ufe0f","price"=>1299,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=41"],
  ["id"=>41,"name"=>"Cámara instantánea","type"=>"Fotografía","category"=>"adolescentes","emoji"=>"\ud83d\udcf7","price"=>1499,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=42"],
  ["id"=>42,"name"=>"Mochila urbana","type"=>"Accesorios","category"=>"adolescentes","emoji"=>"\ud83c\udf92","price"=>649,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=43"],
  ["id"=>43,"name"=>"Set de dibujo profesional","type"=>"Arte","category"=>"adolescentes","emoji"=>"\u270f\ufe0f","price"=>499,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=44"],
  ["id"=>44,"name"=>"Patineta profesional","type"=>"Deportes","category"=>"adolescentes","emoji"=>"\ud83d\udef9","price"=>1099,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=45"],
  ["id"=>45,"name"=>"Balón de básquetbol","type"=>"Deportes","category"=>"adolescentes","emoji"=>"\ud83c\udfc0","price"=>399,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=46"],
  ["id"=>46,"name"=>"Juego de mesa estratégico","type"=>"Juegos de mesa","category"=>"adolescentes","emoji"=>"\u265f\ufe0f","price"=>349,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=47"],
  ["id"=>47,"name"=>"Micrófono USB","type"=>"Tecnología","category"=>"adolescentes","emoji"=>"\ud83c\udf99\ufe0f","price"=>799,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=48"],
  ["id"=>48,"name"=>"Reloj digital deportivo","type"=>"Accesorios","category"=>"adolescentes","emoji"=>"\u231a","price"=>549,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=49"],
  ["id"=>49,"name"=>"Kit de robótica","type"=>"Ciencia","category"=>"adolescentes","emoji"=>"\ud83e\uddbe","price"=>1199,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=50"],
  ["id"=>50,"name"=>"Control inalámbrico","type"=>"Tecnología","category"=>"adolescentes","emoji"=>"\ud83c\udfae","price"=>899,"image"=>"https://loremflickr.com/720/520/toy,gift?lock=51"],
];

$categories = ["niñas"=>"Ideas para niñas","niños"=>"Ideas para niños","adolescentes"=>"Ideas para adolescentes"];
?>
<main class="page-shell gallery-page">
  <section class="gallery-banner">
    <div><span class="eyebrow">🎁 Catálogo del Polo Norte</span><h1>Encuentra un regalo <em>inolvidable</em></h1><p>Explora 50 ideas con fotografías y encuentra algo que te encante.</p></div>
    <div class="banner-gift">🎁<span>✦</span></div>
  </section>
  <section class="gallery-tools">
    <div class="search-wrap"><span>⌕</span><input id="toy-search" type="search" placeholder="Buscar un juguete..." aria-label="Buscar juguetes"></div>
    <div class="filter-tabs" role="group" aria-label="Filtrar por categoría">
      <button class="filter-btn active" data-filter="todos">Todos <small>50</small></button>
      <button class="filter-btn" data-filter="niñas">Niñas</button>
      <button class="filter-btn" data-filter="niños">Niños</button>
      <button class="filter-btn" data-filter="adolescentes">Adolescentes</button>
    </div>
    <p class="category-note">Estas categorías son sugerencias para explorar; cualquier regalo puede ser para cualquier persona. 💚</p>
  </section>
  <div class="gallery-status"><span id="results-count">Mostrando 50 regalos</span><span>Ordenados para descubrir ✨</span></div>
  <?php foreach ($categories as $categoryKey=>$categoryLabel): ?>
    <section class="toy-category" data-section="<?= htmlspecialchars($categoryKey) ?>">
      <div class="category-heading"><div><span class="eyebrow">Colección</span><h2><?= htmlspecialchars($categoryLabel) ?></h2></div><span class="category-symbol"><?= $categoryKey === "niñas" ? "🌷" : ($categoryKey === "niños" ? "🚀" : "🎧") ?></span></div>
      <div class="toy-grid">
        <?php foreach ($toys as $toy): if ($toy["category"] !== $categoryKey) continue; ?>
          <article class="toy-card" data-name="<?= htmlspecialchars(mb_strtolower($toy["name"],"UTF-8")) ?>" data-category="<?= htmlspecialchars($toy["category"]) ?>">
            <div class="toy-photo-wrap">
              <img class="toy-photo" src="<?= htmlspecialchars($toy["image"]) ?>" alt="Fotografía de <?= htmlspecialchars($toy["name"]) ?>" loading="lazy" onerror="this.style.display='none';this.nextElementSibling.style.display='grid'">
              <div class="toy-photo-fallback" style="display:none"><?= htmlspecialchars($toy["emoji"]) ?></div>
              <span class="toy-photo-tag"><?= htmlspecialchars($toy["type"]) ?></span>
            </div>
            <div class="toy-info"><h3><?= htmlspecialchars($toy["name"]) ?></h3><div class="toy-meta"><strong>$<?= number_format($toy["price"]) ?> MXN</strong><a href="carta.php?regalo=<?= urlencode($toy["name"]) ?>">Elegir regalo <span>→</span></a></div></div>
          </article>
        <?php endforeach; ?>
      </div>
    </section>
  <?php endforeach; ?>
  <div id="no-results" class="empty-state" hidden><span>🔎</span><h2>No encontramos ese regalo</h2><p>Prueba con otro nombre o cambia el filtro.</p></div>
</main>
<?php require_once __DIR__ . "/includes/footer.php"; ?>