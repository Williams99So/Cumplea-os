<?php /** @var string $contenido @var string $titulo @var array $mensajes @var ?string $musica */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="theme-color" content="#ffb3d1">
    <meta name="robots" content="noindex, nofollow">
    <title><?= e($titulo) ?></title>
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ctext y='.9em' font-size='90'%3E%F0%9F%92%97%3C/text%3E%3C/svg%3E">
    <link rel="stylesheet" href="<?= e(asset('css/estilos.css')) ?>">
    <script>document.documentElement.className += ' js';</script>
    <noscript><style>.bienvenida{display:none!important}body{overflow:auto!important}.reveal{opacity:1!important;transform:none!important}</style></noscript>
</head>
<body class="bloqueado">

<!-- Capa de corazones y brillos flotantes (decorativa) -->
<div class="fondo-flotante" aria-hidden="true" id="fondoFlotante"></div>

<?= $contenido ?>

<!-- Aviso flotante para los corazones sorpresa -->
<div class="aviso" id="aviso" role="status" aria-live="polite"></div>

<!-- Música (solo si existe un archivo en public/audio/) -->
<?php if ($musica): ?>
    <audio id="musica" src="<?= e(asset($musica)) ?>" loop preload="none"></audio>
    <button type="button" class="btn-musica" id="btnMusica" aria-pressed="false" aria-label="Activar música">
        <span class="btn-musica__icono" aria-hidden="true">♪</span>
        <span class="btn-musica__texto">Música</span>
    </button>
<?php endif; ?>

<canvas id="confeti" class="confeti" aria-hidden="true"></canvas>

<!-- Datos para JavaScript -->
<script type="application/json" id="datosApp"><?= json_encode(['mensajes' => $mensajes, 'musica' => (bool) $musica], JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP) ?></script>
<script src="<?= e(asset('js/animaciones.js')) ?>" defer></script>
</body>
</html>
