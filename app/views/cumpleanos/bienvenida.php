<section class="bienvenida" id="bienvenida" aria-labelledby="tituloBienvenida">
    <div class="bienvenida__brillos" aria-hidden="true">
        <span style="--x:12%;--y:18%;--d:0s">✦</span>
        <span style="--x:84%;--y:14%;--d:.8s">✦</span>
        <span style="--x:22%;--y:72%;--d:1.4s">✧</span>
        <span style="--x:78%;--y:68%;--d:.4s">✦</span>
        <span style="--x:50%;--y:8%;--d:1.1s">✧</span>
        <span style="--x:8%;--y:46%;--d:1.8s">✧</span>
        <span style="--x:92%;--y:44%;--d:.2s">✧</span>
    </div>

    <div class="bienvenida__contenido">
        <div class="regalo" id="regalo" aria-hidden="true">
            <svg viewBox="0 0 200 190" class="regalo__svg" role="img" focusable="false">
                <defs>
                    <linearGradient id="gCaja" x1="0" y1="0" x2="0" y2="1">
                        <stop offset="0" stop-color="#ff8fbd"/><stop offset="1" stop-color="#f0569a"/>
                    </linearGradient>
                    <linearGradient id="gTapa" x1="0" y1="0" x2="0" y2="1">
                        <stop offset="0" stop-color="#ffa9cf"/><stop offset="1" stop-color="#ff7ab1"/>
                    </linearGradient>
                    <linearGradient id="gOro" x1="0" y1="0" x2="1" y2="1">
                        <stop offset="0" stop-color="#ffe9a8"/><stop offset="1" stop-color="#f1bd57"/>
                    </linearGradient>
                </defs>
                <ellipse cx="100" cy="180" rx="72" ry="8" fill="#b4417a" opacity=".18"/>
                <!-- Caja -->
                <rect x="34" y="88" width="132" height="86" rx="10" fill="url(#gCaja)"/>
                <rect x="88" y="88" width="24" height="86" fill="url(#gOro)"/>
                <circle cx="56" cy="112" r="3" fill="#fff" opacity=".55"/>
                <circle cx="70" cy="140" r="2.5" fill="#fff" opacity=".5"/>
                <circle cx="142" cy="120" r="3" fill="#fff" opacity=".55"/>
                <circle cx="128" cy="152" r="2.5" fill="#fff" opacity=".5"/>
                <!-- Tapa -->
                <g class="regalo__tapa">
                    <rect x="26" y="62" width="148" height="34" rx="10" fill="url(#gTapa)"/>
                    <rect x="88" y="62" width="24" height="34" fill="url(#gOro)"/>
                    <!-- Moño -->
                    <path d="M100 62 C 66 22, 36 40, 62 58 C 76 66, 92 64, 100 62 Z" fill="url(#gOro)"/>
                    <path d="M100 62 C 134 22, 164 40, 138 58 C 124 66, 108 64, 100 62 Z" fill="url(#gOro)"/>
                    <path d="M100 62 C 82 46, 66 46, 62 54" fill="none" stroke="#e0a53f" stroke-width="2" opacity=".6"/>
                    <path d="M100 62 C 118 46, 134 46, 138 54" fill="none" stroke="#e0a53f" stroke-width="2" opacity=".6"/>
                    <circle cx="100" cy="62" r="9" fill="#f6cf74"/>
                </g>
            </svg>
        </div>

        <p class="bienvenida__sobretitulo">Hay algo especial esperándote</p>
        <h1 class="bienvenida__titulo" id="tituloBienvenida">Feliz cumpleaños,<br>mi niña hermosa <span aria-hidden="true">❤️</span></h1>
        <p class="bienvenida__frase">Hice este pequeño mundo pensando en ti, con todo mi corazón.</p>

        <button type="button" class="btn btn--grande" id="btnAbrirRegalo">
            <span>Abre tu regalito, mi amor 🎁</span>
        </button>
        <?php if (!empty($musica)): ?>
            <button type="button" class="btn btn--chico btn--suave" id="btnAbrirMusica">Abrir con música 🎶</button>
        <?php endif; ?>
    </div>
</section>
