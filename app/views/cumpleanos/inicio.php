<section class="seccion hero" id="inicio" aria-labelledby="tituloHero">
    <div class="hero__nubes" aria-hidden="true">
        <svg class="nube nube--a" viewBox="0 0 160 70"><path d="M24 62 Q4 62 6 46 Q8 32 26 34 Q28 12 52 14 Q68 0 86 14 Q108 6 118 26 Q142 24 144 46 Q146 62 126 62 Z" fill="#fff"/></svg>
        <svg class="nube nube--b" viewBox="0 0 160 70"><path d="M24 62 Q4 62 6 46 Q8 32 26 34 Q28 12 52 14 Q68 0 86 14 Q108 6 118 26 Q142 24 144 46 Q146 62 126 62 Z" fill="#fff"/></svg>
        <svg class="nube nube--c" viewBox="0 0 160 70"><path d="M24 62 Q4 62 6 46 Q8 32 26 34 Q28 12 52 14 Q68 0 86 14 Q108 6 118 26 Q142 24 144 46 Q146 62 126 62 Z" fill="#fff"/></svg>
    </div>

    <button type="button" class="corazon-secreto corazon-secreto--hero" data-secreto aria-label="Un corazoncito escondido">💗</button>

    <div class="hero__cuerpo reveal">
        <svg class="arcoiris" viewBox="0 0 300 150" aria-hidden="true" focusable="false">
            <g fill="none" stroke-width="9" stroke-linecap="round" opacity=".85">
                <path d="M20 145 A130 130 0 0 1 280 145" stroke="#ff8fb8"/>
                <path d="M34 145 A116 116 0 0 1 266 145" stroke="#ffc59a"/>
                <path d="M48 145 A102 102 0 0 1 252 145" stroke="#fff0a0"/>
                <path d="M62 145 A88 88 0 0 1 238 145" stroke="#b9f0c9"/>
                <path d="M76 145 A74 74 0 0 1 224 145" stroke="#a8dcff"/>
                <path d="M90 145 A60 60 0 0 1 210 145" stroke="#d3b8ff"/>
            </g>
        </svg>

        <p class="hero__sobretitulo">Hoy es tu día, mi amor</p>
        <h2 class="hero__titulo" id="tituloHero">Feliz<br class="salto"> Cumpleaños</h2>

        <div class="pastel" aria-hidden="false">
            <button type="button" class="pastel__boton" id="btnVela" aria-label="Soplar la velita y pedir un deseo">
                <svg viewBox="0 0 200 190" class="pastel__svg" focusable="false">
                    <defs>
                        <linearGradient id="gPastel1" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#ffc2dc"/><stop offset="1" stop-color="#ff8fbd"/></linearGradient>
                        <linearGradient id="gPastel2" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#e9dcff"/><stop offset="1" stop-color="#c9a7ff"/></linearGradient>
                        <radialGradient id="gLlama" cx=".5" cy=".7" r=".6"><stop offset="0" stop-color="#fffbe0"/><stop offset=".55" stop-color="#ffd76a"/><stop offset="1" stop-color="#ff9d5c"/></radialGradient>
                    </defs>
                    <ellipse cx="100" cy="176" rx="82" ry="9" fill="#fff" opacity=".9"/>
                    <ellipse cx="100" cy="176" rx="82" ry="9" fill="none" stroke="#f1bd57" stroke-width="2"/>
                    <!-- piso inferior -->
                    <rect x="28" y="112" width="144" height="60" rx="14" fill="url(#gPastel1)"/>
                    <path d="M28 124 q10 14 22 0 q10 16 22 0 q10 14 22 0 q10 16 22 0 q10 14 22 0 q10 16 22 0 v-12 h-130 z" fill="#fff"/>
                    <circle cx="52" cy="150" r="4" fill="#fff" opacity=".8"/><circle cx="100" cy="156" r="4" fill="#ffe9a8"/><circle cx="148" cy="150" r="4" fill="#fff" opacity=".8"/>
                    <!-- piso superior -->
                    <rect x="52" y="66" width="96" height="52" rx="12" fill="url(#gPastel2)"/>
                    <path d="M52 78 q8 12 16 0 q8 14 16 0 q8 12 16 0 q8 14 16 0 q8 12 16 0 q8 14 16 0 v-12 h-96 z" fill="#fff"/>
                    <circle cx="76" cy="100" r="3.5" fill="#fff" opacity=".85"/><circle cx="124" cy="100" r="3.5" fill="#fff" opacity=".85"/>
                    <!-- corazón -->
                    <path d="M100 104 C 86 92, 86 82, 94 82 C 98 82, 100 86, 100 86 C 100 86, 102 82, 106 82 C 114 82, 114 92, 100 104 Z" fill="#ff6fa5"/>
                    <!-- vela -->
                    <rect x="95" y="40" width="10" height="28" rx="3" fill="#fff"/>
                    <path d="M95 48 l10 6 M95 56 l10 6" stroke="#ff8fbd" stroke-width="3" opacity=".7"/>
                    <g class="pastel__llama">
                        <path d="M100 14 C 90 26, 88 34, 100 40 C 112 34, 110 26, 100 14 Z" fill="url(#gLlama)"/>
                    </g>
                </svg>
            </button>
            <p class="pastel__pista" id="pistaVela">Toca la velita ✨</p>
        </div>

        <p class="hero__dedicatoria">
            Hoy el mundo es un poquito más bonito porque tú existes.<br>
            Este rinconcito rosa lo hice para ti, con todo mi cariño.
        </p>

        <a class="btn" href="#galeria" data-ir>Descubre tus sorpresas ✨</a>
    </div>

    <svg class="ola" viewBox="0 0 1440 90" preserveAspectRatio="none" aria-hidden="true"><path d="M0 40 C 240 100, 480 0, 720 40 C 960 80, 1200 10, 1440 50 L1440 90 L0 90 Z"/></svg>
</section>
