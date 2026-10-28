<?php /** @var array $zonas */ ?>
<section class="seccion personajes" id="personajes" aria-labelledby="tituloPersonajes">
    <header class="seccion__cabecera reveal">
        <p class="seccion__sobretitulo">Hecho a tu medida</p>
        <h2 class="seccion__titulo" id="tituloPersonajes">Tu mundo de fantasía</h2>
        <p class="seccion__texto">Tomé todo lo que te gusta y lo convertí en un pequeño mundo mágico. Toca las tarjetas para descubrir un mensajito <button type="button" class="corazon-secreto corazon-secreto--inline" data-secreto aria-label="Un corazoncito escondido">💗</button></p>
    </header>

    <?php foreach ($zonas as $zona): ?>
        <div class="zona zona--<?= e($zona['id']) ?> reveal">
            <div class="zona__titulo">
                <h3><?= e($zona['titulo']) ?></h3>
                <p><?= e($zona['frase']) ?></p>
            </div>
            <div class="zona__tarjetas zona__tarjetas--<?= count($zona['items']) ?>">
                <?php foreach ($zona['items'] as $p): ?>
                    <button type="button" class="tarjeta tarjeta--<?= e($p['tema']) ?>" data-tarjeta aria-pressed="false"
                            aria-label="<?= e($p['nombre']) ?>. Toca para leer tu mensaje">
                        <span class="tarjeta__interior">
                            <span class="tarjeta__cara tarjeta__frente">
                                <span class="tarjeta__ilustracion" aria-hidden="true">
                                    <?php require __DIR__ . '/ilustraciones/' . $p['id'] . '.php'; ?>
                                </span>
                                <span class="tarjeta__nombre"><?= e($p['nombre']) ?></span>
                                <span class="tarjeta__lema"><?= e($p['lema']) ?></span>
                                <span class="tarjeta__pista" aria-hidden="true">Toca ✨</span>
                            </span>
                            <span class="tarjeta__cara tarjeta__dorso">
                                <span class="tarjeta__corazon" aria-hidden="true">💖</span>
                                <span class="tarjeta__mensaje"><?= e($p['mensaje']) ?></span>
                                <span class="tarjeta__firma">Con amor ❤️</span>
                            </span>
                        </span>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="seccion__pie reveal">
        <a class="btn" href="#carta" data-ir>Tengo una carta para ti 💌</a>
    </div>
</section>
