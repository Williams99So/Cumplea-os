<?php /** @var array $carta */ ?>
<section class="seccion carta" id="carta" aria-labelledby="tituloCarta">
    <header class="seccion__cabecera reveal">
        <p class="seccion__sobretitulo">Lo más importante</p>
        <h2 class="seccion__titulo" id="tituloCarta">Una carta para ti</h2>
        <p class="seccion__texto">Escrita con el corazón, solo para ti <button type="button" class="corazon-secreto corazon-secreto--inline" data-secreto aria-label="Un corazoncito escondido">💗</button></p>
    </header>

    <div class="sobre-zona reveal">
        <span class="sobre-corazon sobre-corazon--1" aria-hidden="true">💕</span>
        <span class="sobre-corazon sobre-corazon--2" aria-hidden="true">💗</span>
        <span class="sobre-corazon sobre-corazon--3" aria-hidden="true">💖</span>
        <span class="sobre-corazon sobre-corazon--4" aria-hidden="true">💞</span>

        <div class="sobre" id="sobre">
            <div class="sobre__fondo"></div>
            <div class="sobre__papel" aria-hidden="true"><span>Para ti, mi amor ❤️</span></div>
            <div class="sobre__frente"></div>
            <div class="sobre__solapa"></div>
            <div class="sobre__sello" aria-hidden="true">❤</div>
        </div>

        <button type="button" class="btn" id="btnCarta" aria-expanded="false" aria-controls="cartaPapel">
            <span id="btnCartaTexto">Abrir carta 💌</span>
        </button>
    </div>

    <div class="carta__envoltorio" id="cartaEnvoltorio">
        <div class="carta__recorte">
            <article class="carta__papel" id="cartaPapel" aria-label="Carta de cumpleaños" tabindex="-1">
                <div class="carta__herramientas">
                    <button type="button" class="btn btn--chico btn--suave" id="btnEscribir">✨ Verla escribirse</button>
                    <button type="button" class="btn btn--chico btn--suave" id="btnMostrarTodo" hidden>Mostrar todo</button>
                </div>
                <div class="carta__texto" id="cartaTexto">
                    <?php foreach ($carta as $i => $parrafo): ?>
                        <p class="carta__parrafo<?= $i === 0 ? ' carta__parrafo--saludo' : '' ?>"><?= e($parrafo) ?></p>
                    <?php endforeach; ?>
                </div>
                <div class="carta__cierre" aria-hidden="true">❤️</div>
            </article>
        </div>
    </div>

    <div class="seccion__pie reveal">
        <a class="btn" href="#final" data-ir>Hay una última sorpresa 🌟</a>
    </div>
</section>
