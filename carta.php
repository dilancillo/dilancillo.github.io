<?php
require_once __DIR__ . "/includes/db.php";
$pageTitle = "Mi carta a Santa";
$success = ""; $error = ""; $giftPrefill = trim($_GET["regalo"] ?? "");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["child_name"] ?? "");
    $age = filter_var($_POST["age"] ?? "", FILTER_VALIDATE_INT);
    $gift = trim($_POST["gift"] ?? "");
    $message = trim($_POST["message"] ?? "");
    if ($name === "" || !$age || $age < 1 || $age > 17 || $gift === "") {
        $error = "Revisa tu nombre, edad y regalo. Esos campos son necesarios.";
    } else {
        try {
            $stmt = $pdo->prepare("INSERT INTO letters (child_name, age, gift, message) VALUES (:name, :age, :gift, :message)");
            $stmt->execute([":name"=>$name, ":age"=>$age, ":gift"=>$gift, ":message"=>$message]);
            $success = "¡Tu carta llegó al taller de Santa! 🎅"; $giftPrefill = "";
        } catch (PDOException $e) { $error = "No se pudo guardar la carta. Revisa la configuración de la base de datos."; }
    }
}
require_once __DIR__ . "/includes/header.php";
?>
<main class="page-shell narrow">
  <section class="page-heading"><span class="eyebrow">✉️ Correo directo al Polo Norte</span><h1>Mi carta a Santa Claus</h1><p>Completa los campos y cuéntale a Santa cuál es tu deseo navideño.</p></section>
  <?php if ($success): ?><div class="notice success"><?= htmlspecialchars($success) ?> <a href="cartas.php">Ver cartas recibidas</a></div><?php endif; ?>
  <?php if ($error): ?><div class="notice error"><?= htmlspecialchars($error) ?></div><?php endif; ?>
  <form class="letter-form" method="POST" action="carta.php">
    <div class="form-intro"><span>🎅</span><div><b>Una carta muy especial</b><small>Los campos marcados son obligatorios.</small></div></div>
    <label>¿Cómo te llamas?<input type="text" name="child_name" maxlength="60" required placeholder="Tu nombre"></label>
    <label>¿Cuántos años tienes?<input type="number" name="age" min="1" max="17" required placeholder="Tu edad"></label>
    <label>¿Qué regalo te gustaría recibir?<input type="text" name="gift" maxlength="120" required value="<?= htmlspecialchars($giftPrefill, ENT_QUOTES, "UTF-8") ?>" placeholder="Escribe tu regalo favorito"></label>
    <label>Un mensaje para Santa <span class="optional">(opcional)</span><textarea name="message" maxlength="500" rows="4" placeholder="Querido Santa..."></textarea></label>
    <p class="privacy-note">🔒 Privacidad: no escribas dirección, teléfono ni contraseñas. La lista pública solo muestra nombre, regalo y fecha. Para una demostración escolar, usa datos ficticios.</p>
    <button class="btn btn-primary" type="submit">Enviar mi carta ✨</button>
  </form>
</main>
<?php require_once __DIR__ . "/includes/footer.php"; ?>