# 🎁 Regalo de cumpleaños — experiencia romántica interactiva

Página hecha en **PHP (patrón MVC) + HTML5 + CSS3 + JavaScript**, sin base de datos y sin librerías externas.
Todo (fuentes, iconos, ilustraciones, efectos) está dentro del proyecto, así que funciona sin internet.

## ▶️ Cómo ejecutarla con XAMPP (Windows)

1. **Copia la carpeta `cumpleanos`** completa (la que contiene `app`, `public`, `index.php` y este README) dentro de:
   `C:\xampp\htdocs\`
   Debe quedar así: `C:\xampp\htdocs\cumpleanos\public\index.php`
2. Abre el **Panel de control de XAMPP** y pulsa **Start** junto a **Apache**. (MySQL no hace falta.)
3. Abre tu navegador y entra a:

   **http://localhost/cumpleanos/public/**

   También funciona `http://localhost/cumpleanos/` (te redirige solo a `public/`).

No hay que configurar nada más: las rutas de imágenes, CSS y JS se calculan solas según la carpeta donde esté el proyecto (si le cambias el nombre a `regalo`, sería `http://localhost/regalo/public/`).

> Requiere PHP 7.4 o superior (XAMPP actual trae PHP 8.x).

## 🎵 Agregar música (opcional)

La música **no está incluida**, pero ya está todo preparado:

1. Pon una canción en `public/audio/` (formato `.mp3`, `.ogg`, `.m4a` o `.wav`; con un solo archivo basta).
2. Recarga la página. Aparecerá automáticamente:
   - un botón **“Abrir con música 🎶”** en la bienvenida, y
   - un botón **♪** arriba a la derecha para activar / pausar / reanudar.

La música solo empieza cuando ella pulsa un botón, con volumen moderado (35 %). Si no hay archivo de audio, los botones de música no se muestran.

## 🗂️ Estructura (MVC)

```
cumpleanos/
├── index.php                      ← atajo: redirige a public/
├── app/
│   ├── core/                      ← Router, Controller base y helpers
│   ├── controllers/CumpleanosController.php   ← C: arma los datos y elige la vista
│   ├── models/CumpleanosModel.php             ← M: carta, fotos, personajes, mensajes
│   └── views/                                  ← V: solo presentación
│       ├── layouts/main.php
│       └── cumpleanos/
│           ├── experiencia.php    ← ensambla todas las secciones
│           ├── bienvenida.php     ← regalo y botón de apertura
│           ├── inicio.php         ← sección principal (pastel, arcoíris)
│           ├── galeria.php        ← álbum de fotos + visor ampliado
│           ├── personajes.php     ← mundo de fantasía (tarjetas)
│           ├── carta.php          ← sobre y carta
│           ├── final.php          ← sorpresa final
│           └── ilustraciones/     ← 8 ilustraciones SVG originales
└── public/                        ← lo único accesible desde el navegador
    ├── index.php                  ← front controller
    ├── css/estilos.css
    ├── js/animaciones.js
    ├── img/amor1.jpg … amor6.jpg  ← las 6 fotos originales (sin modificar)
    ├── fonts/                     ← Great Vibes, Dancing Script, Quicksand (licencia OFL)
    └── audio/                     ← aquí va la canción (opcional)
```

## ✏️ Cómo cambiar textos

Todo el contenido está en `app/models/CumpleanosModel.php`: la carta, las frases bajo cada foto, los mensajes de los personajes y los mensajitos de los corazones secretos. No hace falta tocar el diseño.
Si más adelante quieres poner su nombre, edita los textos de las vistas en `app/views/cumpleanos/` (por ejemplo `bienvenida.php`). No se incluyó nombre, edad ni fecha porque no se proporcionaron.

## 💝 Qué tiene la experiencia

1. **Bienvenida:** regalo animado con botón “Abre tu regalito, mi amor 🎁”.
2. **Sección principal:** “Feliz Cumpleaños”, arcoíris, nubes y un pastelito con velita que se puede apagar para pedir un deseo.
3. **Álbum de recuerdos:** las 6 fotos como polaroids con frases; al tocarlas se amplían (flechas, teclado y deslizar con el dedo).
4. **Tu mundo de fantasía:** 8 tarjetas que se voltean con un mensajito (Sofía, Rapunzel, Ositos Cariñositos, Unicornios, Maléfica, Bruja Escarlata, Capitana Marvel, Mujer Maravilla), con ilustraciones originales inspiradas en sus temas.
5. **Carta:** sobre que se abre con botón (abrir / cerrar) y carta **completa**; botón opcional “Verla escribirse” con opción “Mostrar todo”.
6. **Sorpresa final:** escena mágica, deseo, mensaje final, confeti y botón “Volver a vivir nuestra historia”.
7. **Secretos:** 5 corazoncitos escondidos 💗 repartidos por la página.

Respeta la opción del sistema “reducir movimiento”: se desactivan animaciones, confeti y corazones flotantes.

## ✅ Qué se probó y qué no

Probado con servidor PHP 8.3 y Chromium (escritorio 1280 px y celular 390 px): sin errores de PHP/JS, las 6 fotos cargan, galería, visor, tarjetas, carta, escritura progresiva, música (con un archivo de prueba), confeti y reinicio funcionan.
**No se pudo probar** en Safari/iPhone ni en Apache de XAMPP reales; si algo se ve distinto, revisa que la dirección sea exactamente `http://localhost/cumpleanos/public/`.

Notas: las fotos `amor3.jpg` y `amor4.jpg` traen orientación EXIF; el navegador las muestra bien y los archivos no se tocaron.
