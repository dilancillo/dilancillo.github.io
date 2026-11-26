document.addEventListener("DOMContentLoaded", () => {
  const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  // Copos de nieve en distintas posiciones, tamaños y velocidades.
  const snowLayer = document.querySelector(".snow-layer");
  if (snowLayer && !reducedMotion) {
    for (let i = 0; i < 65; i++) {
      const flake = document.createElement("i");
      flake.className = "snowflake";
      flake.textContent = Math.random() > .72 ? "❄" : "•";
      flake.style.left = Math.random() * 100 + "%";
      flake.style.animationDuration = (8 + Math.random() * 15) + "s";
      flake.style.animationDelay = (-Math.random() * 20) + "s";
      flake.style.fontSize = (6 + Math.random() * 13) + "px";
      flake.style.opacity = (.35 + Math.random() * .6).toFixed(2);
      snowLayer.appendChild(flake);
    }
  }

  // Cuenta regresiva automática al próximo 25 de diciembre.
  const countdown = document.getElementById("christmas-countdown");
  if (countdown) {
    const updateCountdown = () => {
      const now = new Date();
      let target = new Date(now.getFullYear(), 11, 25, 0, 0, 0);
      if (now >= target) target = new Date(now.getFullYear() + 1, 11, 25, 0, 0, 0);
      const ms = Math.max(0, target - now);
      const values = {
        "cd-days": Math.floor(ms / 86400000),
        "cd-hours": Math.floor(ms / 3600000) % 24,
        "cd-minutes": Math.floor(ms / 60000) % 60,
        "cd-seconds": Math.floor(ms / 1000) % 60
      };
      Object.entries(values).forEach(([id, value]) => {
        const node = document.getElementById(id);
        if (node) node.textContent = String(value).padStart(2, "0");
      });
      if (ms === 0) countdown.innerHTML = '<div class="christmas-today">🎄 ¡Hoy es Navidad! ¡Feliz Navidad! 🎁</div>';
    };
    updateCountdown();
    setInterval(updateCountdown, 1000);
  }

  // Menú desplegable en pantallas pequeñas.
  const menuButton = document.querySelector(".menu-toggle");
  const nav = document.querySelector(".main-nav");
  if (menuButton && nav) menuButton.addEventListener("click", () => {
    const opened = nav.classList.toggle("open");
    menuButton.setAttribute("aria-expanded", String(opened));
  });

  // Buscador y filtros de las 50 tarjetas.
  const search = document.getElementById("toy-search");
  const filterButtons = document.querySelectorAll(".filter-btn");
  const cards = [...document.querySelectorAll(".toy-card")];
  const sections = document.querySelectorAll(".toy-category");
  const resultCount = document.getElementById("results-count");
  const noResults = document.getElementById("no-results");
  let activeFilter = "todos";
  const filterGallery = () => {
    const term = (search?.value || "").trim().toLocaleLowerCase("es");
    let visible = 0;
    cards.forEach(card => {
      const matchesText = card.dataset.name.includes(term);
      const matchesCategory = activeFilter === "todos" || card.dataset.category === activeFilter;
      const show = matchesText && matchesCategory;
      card.hidden = !show;
      if (show) visible++;
    });
    sections.forEach(section => {
      const hasVisible = [...section.querySelectorAll(".toy-card")].some(card => !card.hidden);
      section.hidden = !hasVisible;
    });
    if (resultCount) resultCount.textContent = `Mostrando ${visible} ${visible === 1 ? "regalo" : "regalos"}`;
    if (noResults) noResults.hidden = visible !== 0;
  };
  filterButtons.forEach(button => button.addEventListener("click", () => {
    activeFilter = button.dataset.filter;
    filterButtons.forEach(item => item.classList.toggle("active", item === button));
    filterGallery();
  }));
  if (search) search.addEventListener("input", filterGallery);

  // Transición de bola de nieve al abrir otra sección.
  const overlay = document.querySelector(".snowball-transition");
  document.querySelectorAll('a[href$=".php"]').forEach(link => link.addEventListener("click", event => {
    const url = new URL(link.href, location.href);
    if (reducedMotion || !overlay || url.origin !== location.origin || url.pathname === location.pathname) return;
    event.preventDefault();
    overlay.classList.add("launch");
    setTimeout(() => location.href = link.href, 760);
  }));
});