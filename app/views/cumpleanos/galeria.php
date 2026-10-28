<?php /** @var array $fotos */ ?>
<section class="seccion galeria" id="galeria" aria-labelledby="tituloGaleria">
    <header class="seccion__cabecera reveal">
        <p class="seccion__sobretitulo">Nuestro álbum de recuerdos</p>
        <h2 class="seccion__titulo" id="tituloGaleria">Mi persona favorita</h2>
        <p class="seccion__texto">Toca cualquier foto para verla grande <button type="button" class="corazon-secreto corazon-secreto--inline" data-secreto aria-label="Un corazoncito escondido">💗</button></p>
    </header>

    <div class="album">
        <?php foreach ($fotos as $i => $f): ?>
            <figure class="polaroid polaroid--<?= e($f['orientacion']) ?> reveal" style="--giro:<?= [-3, 2.5, -1.5, 3, -2.5, 1.5][$i % 6] ?>deg;--retraso:<?= ($i % 3) * 90 ?>ms">
                <button type="button" class="polaroid__boton" data-foto="<?= $i ?>" aria-label="Ampliar foto <?= (int) $f['numero'] ?>: <?= e($f['frase']) ?>">
                    <span class="polaroid__cinta" aria-hidden="true"></span>
                    <img src="<?= e(asset($f['archivo'])) ?>" alt="<?= e($f['alt']) ?>"
                         width="<?= (int) $f['ancho'] ?>" height="<?= (int) $f['alto'] ?>"
                         loading="lazy" decoding="async">
                </button>
                <figcaption><?= e($f['frase']) ?></figcaption>
            </figure>
        <?php endforeach; ?>
    </div>

    <div class="seccion__pie reveal">
        <a class="btn" href="#personajes" data-ir>Entra a tu mundo de fantasía 🦄</a>
    </div>

    <!-- Visor ampliado -->
    <div class="visor" id="visor" role="dialog" aria-modal="true" aria-label="Foto ampliada" hidden>
        <button type="button" class="visor__cerrar" id="visorCerrar" aria-label="Cerrar">✕</button>
        <button type="button" class="visor__nav visor__nav--prev" id="visorPrev" aria-label="Foto anterior">‹</button>
        <figure class="visor__figura">
            <img id="visorImg" src="" alt="">
            <figcaption id="visorPie"></figcaption>
        </figure>
        <button type="button" class="visor__nav visor__nav--next" id="visorNext" aria-label="Foto siguiente">›</button>
    </div>
</section>
