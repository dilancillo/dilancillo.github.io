<?php
require_once __DIR__ . "/includes/db.php";
$pageTitle = "Cartas recibidas"; $letters = []; $loadError = false;
try { $stmt = $pdo->query("SELECT child_name, gift, created_at FROM letters ORDER BY created_at DESC LIMIT 100"); $letters = $stmt->fetchAll(); }
catch (PDOException $e) { $loadError = true; }
require_once __DIR__ . "/includes/header.php";
?>
<main class="page-shell">
  <section class="page-heading"><span class="eyebrow">📬 El correo del Polo Norte</span><h1>Cartas recibidas</h1><p>Una pequeña muestra de los deseos que han llegado al taller.</p></section>
  <?php if ($loadError): ?><div class="notice error">No se pudo consultar la base de datos. Revisa XAMPP y la configuración.</div>
  <?php elseif (!$letters): ?><div class="empty-state"><span>📭</span><h2>Aún no hay cartas</h2><p>¡El buzón está esperando el primer mensaje!</p><a class="btn btn-primary" href="carta.php">Escribir mi carta</a></div>
  <?php else: ?><div class="table-wrap"><table><thead><tr><th>Nombre</th><th>Regalo que desea</th><th>Fecha de envío</th></tr></thead><tbody>
    <?php foreach ($letters as $letter): ?><tr><td><?= htmlspecialchars($letter["child_name"]) ?></td><td><?= htmlspecialchars($letter["gift"]) ?></td><td><?= date("d/m/Y", strtotime($letter["created_at"])) ?></td></tr><?php endforeach; ?>
  </tbody></table></div><?php endif; ?>
</main>
<?php require_once __DIR__ . "/includes/footer.php"; ?>