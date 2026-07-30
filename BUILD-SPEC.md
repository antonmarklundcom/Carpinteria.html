# BUILD-SPEC — Constructora (Asunción) · one-pager demo

**Modo:** DEMO (lead-gen para el suegro del cliente; los datos reales
llegan después). **Ejecutar exactamente. No desviarse. Ante una duda,
preguntar en vez de adivinar.**

---

## 1. Intake

```
NEGOCIO:        ⚠️ "Constructora Vera" — NOMBRE PROVISORIO (ver §9)
OFICIO:         Constructora / obra civil (NO mueblería, NO carpintería fina)
CIUDAD:         Asunción (Capital)
BARRIOS:        Villa Morra, Recoleta, Las Mercedes, Carmelitas
ZONAS:          Asunción · San Lorenzo · Luque · Lambaré ·
                Fernando de la Mora · Capiatá · viajes al interior
WHATSAPP:       +595 995 628862  →  wa.me/595995628862
TELÉFONO FIJO:  ⚠️ no hay → ocultar
SERVICIOS:      6 (ver §4)
DIFERENCIAL:    Obra llave en mano con presupuesto sin costo y precio
                cerrado antes de empezar
CONFIANZA:      ⚠️ sin RUC / años / garantía confirmados → filas ocultas
RESEÑAS:        NINGUNA → sección 8 se reemplaza (§4)
FOTOS:          NINGUNA → paneles de motivo (§6)
CONVERSIÓN:     whatsapp-first
DISEÑO:         PC — TALLER
PRECIOS:        "Presupuesto sin costo" — CERO cifras en Gs.
PAGOS:          ⚠️ no confirmados → sección de pagos NO se incluye
```

---

## 2. Tokens de diseño — PC Taller (copiar literal)

```css
--bg:#F5F4F1; --surface:#FFFFFF; --text:#1A1815; --muted:#63605A;
--accent:#C2410C; --accent-tint:#FBE9E0; --dark:#22201C; --border:#DEDAD3;
--wa:#25D366;
--radius:14px;
--shadow:0 1px 2px rgba(0,0,0,.04), 0 8px 24px rgba(0,0,0,.06);
--ease:cubic-bezier(0.16,1,0.3,1);
```

Tipografía: títulos `Archivo` 700 · cuerpo `Inter` 400. **Un solo enlace
a Google Fonts**, ambas familias en la misma petición.

Escala: H1 `clamp(44px,6vw,76px)`/1.05 · H2 `clamp(32px,4vw,48px)` ·
ingress 18–20px · cuerpo 16–17px · etiquetas 12–13px mayúsculas `.08em`.

`#25D366` **sólo** en el FAB y botones de WhatsApp. El acento del sitio
es `#C2410C`. Nunca verde como acento.

Breakpoints, exactamente tres: `640px`, `1024px`, `1280px`.
Container: `width: min(1280px, 100% - 48px)`; móvil `100% - 32px`.

---

## 3. Orden de secciones y patrón de layout

| # | Sección | Patrón |
|---|---|---|
| 1 | Header sticky | — |
| 2 | Hero | **(b)** full-bleed + tarjeta overlay abajo-izq. que **cruza el borde** |
| 3 | Franja de confianza | **(h)** banda oscura `--dark` |
| 4 | Servicios | **(d)** bento, 6 celdas de tamaño mixto |
| 5 | Banda full-bleed | **(h)** banda acento `--accent` + CTA WhatsApp |
| 6 | Cómo trabajamos | **(e)** stepper horizontal, marcadores numéricos grandes |
| 7 | Tipos de obra | **(c)** 2/3 + 1/3 |
| 8 | Nuestros compromisos | **(d)** bento 3 celdas ← *reemplaza reseñas* |
| 9 | Zonas de cobertura | **(c)** |
| 10 | Preguntas frecuentes | **(f)** columna angosta centrada — **única vez** |
| 11 | Contacto | **(a)** split 55/45 |
| 12 | Footer | — |
| — | FAB WhatsApp + barra sticky móvil | — |

**Sin sección de precios** (no hay cifras) y **sin sección de reseñas**
(no hay reseñas). Rompen el container: 2, 5 y 7. Solapes de borde: la
tarjeta del hero y los marcadores numéricos del stepper.

---

## 4. COPY LITERAL — escribir exactamente esto

### Sección 1 — Header
Logo texto: `Constructora Vera`
Nav: `Servicios` · `Cómo trabajamos` · `Zonas` · `Preguntas`
Número visible como texto: `+595 995 628862`
Botón: `Escribinos`

### Sección 2 — Hero
- Eyebrow: `ASUNCIÓN · GRAN ASUNCIÓN · INTERIOR DEL PAÍS`
- **H1:** `Construcción de casas llave en mano en Asunción`
- Ingress: `Casas, quinchos, piscinas y quintas. Nos hacés una sola
  contratación y te entregamos la obra terminada, con presupuesto sin
  costo y precio cerrado antes de poner el primer ladrillo.`
- CTA primaria: `Pedí tu presupuesto sin costo`
- CTA secundaria: `Llamanos` → `tel:+595995628862`
- Tarjeta overlay (cruza el borde), 3 filas:
  `Presupuesto sin costo` · `Precio cerrado antes de empezar` ·
  `Atendemos todo el país`

### Sección 3 — Franja de confianza (banda oscura, 4 ítems)
`Presupuesto sin costo` · `Obra llave en mano` ·
`Asunción y Gran Asunción` · `Viajamos al interior`

> No agregar RUC, años ni garantía: no están confirmados.

### Sección 4 — Servicios (bento, 6)
- Eyebrow: `LO QUE CONSTRUIMOS`
- **H2:** `Obra completa, de la excavación a la entrega`

1. **`Construcción de casas llave en mano`**
   `Proyecto, materiales, mano de obra y terminaciones. Recibís la casa
   lista para entrar a vivir, sin coordinar diez gremios por tu cuenta.`
2. **`Construcción de piscinas de hormigón`**
   `Piscinas de hormigón armado, con vereda perimetral, filtrado e
   iluminación. Hechas para durar décadas, no una temporada.`
3. **`Quinchos y áreas de asado`**
   `El quincho es el corazón de la casa paraguaya. Lo construimos con
   parrilla, mesada, bacha y techo, integrado al patio que ya tenés.`
4. **`Construcción y refacción de quintas`**
   `Obra nueva o puesta a punto de tu quinta: casa principal, quincho,
   piscina, caminos y perimetral. Coordinamos todo aunque esté lejos.`
5. **`Remodelación y ampliación de casas`**
   `Ampliaciones, dormitorios nuevos, reforma de cocina y baños.
   Trabajamos sobre lo que ya está construido sin romper de más.`
6. **`Decks, pérgolas y patios`**
   `Decks, pérgolas y veredas que conectan la casa con el patio y la
   piscina. Materiales elegidos para el sol y la lluvia de Paraguay.`

### Sección 5 — Banda acento full-bleed
Frase: `¿Tenés un terreno y no sabés por dónde empezar?`
Sub: `Mandanos una foto del terreno por WhatsApp y te decimos qué se
puede hacer.`
CTA: `Escribinos por WhatsApp`

### Sección 6 — Cómo trabajamos (stepper, 4 pasos)
- Eyebrow: `CÓMO TRABAJAMOS`
- **H2:** `Cuatro pasos, sin sorpresas en el medio`

1. `Nos escribís` — `Contanos qué querés hacer y mandanos fotos del
   terreno o de la casa. Respondemos por WhatsApp.`
2. `Visitamos la obra` — `Vamos al lugar, tomamos medidas y entendemos
   qué necesitás de verdad. La visita no tiene costo.`
3. `Presupuesto cerrado` — `Te pasamos el presupuesto por escrito, con
   los materiales y el alcance detallados. El precio queda cerrado.`
4. `Construimos y entregamos` — `Coordinamos todos los gremios y te
   mantenemos al tanto del avance hasta la entrega final.`

### Sección 7 — Tipos de obra (2/3 + 1/3)
- Eyebrow: `TIPOS DE OBRA`
- **H2:** `Desde una ampliación hasta una quinta completa`
- Cuerpo (2/3): `No todas las obras arrancan igual. Hay quien compró un
  terreno y quiere una casa desde cero, y hay quien ya tiene la casa y
  necesita un quincho, una piscina o un dormitorio más. Tomamos las dos
  cosas. La diferencia está en cómo se planifica: en obra nueva podemos
  proyectar todo junto —casa, quincho y piscina— y ahorrarte trabajo
  repetido; en una ampliación, lo importante es tocar lo mínimo
  necesario de lo que ya está construido.`
- Lista (1/3), título `Trabajamos en`:
  `Obra nueva desde cero` · `Ampliaciones y remodelaciones` ·
  `Quinchos, piscinas y patios` · `Quintas y casas de fin de semana`

### Sección 8 — Nuestros compromisos (3 celdas) ← reemplaza reseñas
- Eyebrow: `NUESTROS COMPROMISOS`
- **H2:** `Lo que te podemos prometer por escrito`

1. `Presupuesto sin costo` — `La visita y el presupuesto no se cobran, y
   no quedás comprometido a nada por pedirlos.`
2. `Precio cerrado antes de empezar` — `El presupuesto va por escrito,
   con alcance y materiales detallados. Si algo cambia, se conversa
   antes, nunca después.`
3. `Un solo interlocutor` — `Coordinamos albañiles, electricistas,
   plomeros y terminaciones. Vos hablás con una sola persona.`

> **No** agregar garantía en años ni cantidad de obras: sin confirmar.

### Sección 9 — Zonas
- Eyebrow: `ZONAS DE COBERTURA`
- **H2:** `Dónde construimos`
- Cuerpo: `Trabajamos en Asunción y en todo Gran Asunción, y viajamos al
  interior del país para obras que lo justifiquen. Si tu terreno está
  lejos, escribinos igual y te decimos si podemos tomarlo.`
- Chips: `Asunción` · `San Lorenzo` · `Luque` · `Lambaré` ·
  `Fernando de la Mora` · `Capiatá` · `Ñemby` · `Villa Elisa` ·
  `Mariano Roque Alonso` · `Interior del país`
- Barrios en texto: `Villa Morra, Recoleta, Las Mercedes y Carmelitas`

### Sección 10 — FAQ (5, con `FAQPage` schema)
1. `¿El presupuesto tiene costo?`
   `No. La visita a la obra y el presupuesto por escrito son sin costo y
   no te comprometen a contratarnos.`
2. `¿Qué significa llave en mano?`
   `Que contratás una sola vez y nosotros nos ocupamos de todo:
   materiales, albañilería, instalaciones y terminaciones. Recibís la
   obra lista para usar, sin tener que coordinar cada gremio.`
3. `¿Cuánto cuesta construir una casa en Paraguay?`
   `Depende del tamaño, del nivel de terminación y de cómo esté el
   terreno. Por eso no publicamos un precio por metro cuadrado que
   después no se cumple: vamos al terreno, lo vemos y te pasamos un
   presupuesto cerrado por escrito.`
4. `¿En qué zonas trabajan?`
   `En Asunción y todo Gran Asunción —San Lorenzo, Luque, Lambaré,
   Fernando de la Mora, Capiatá y alrededores— y viajamos al interior
   del país según la obra.`
5. `¿Hacen también piscinas y quinchos si ya tengo la casa?`
   `Sí. Muchas obras que tomamos son justamente eso: sumar un quincho,
   una piscina o un deck a una casa que ya está construida.`

### Sección 11 — Contacto
- Eyebrow: `CONTACTO`
- **H2:** `Contanos qué querés construir`
- Cuerpo: `Escribinos por WhatsApp con una foto del terreno o de la casa
  y te respondemos con los próximos pasos.`
- Bloque WhatsApp: botón `Escribinos por WhatsApp` + número visible
  `+595 995 628862` como texto seleccionable
- Formulario, 3 campos: `Nombre` · `WhatsApp` · `¿Qué querés construir?`
  Botón `Enviar consulta`. `action="#"` +
  `<!-- CONECTAR: endpoint del formulario -->`
- Debajo: `Presupuesto sin costo · Respondemos por WhatsApp`

### Sección 12 — Footer
Col 1: `Constructora Vera` + `Construcción de casas llave en mano,
piscinas, quinchos y quintas en Asunción y Gran Asunción.`
Col 2 `Servicios`: los 6 títulos de §4
Col 3 `Contacto`: `+595 995 628862` (link `tel:`) · WhatsApp ·
`Asunción, Paraguay`
Línea final: `© 2026 Constructora Vera — Hecho en Paraguay 🇵🇾`

> Sin RUC (no confirmado). Sin redes sociales (no existen todavía).

### Barra sticky móvil (<768px)
Primaria `WhatsApp` (verde) · secundaria `Llamar`

### `<head>` — copy literal

- `<title>`:
  `Construcción de casas llave en mano en Asunción | Constructora Vera`
- `<meta name="description">`:
  `Constructora en Asunción y Gran Asunción: casas llave en mano,
  piscinas de hormigón, quinchos y quintas. Presupuesto sin costo y
  precio cerrado por escrito.`
- `og:title` = el `<title>` · `og:description` = la description
- `og:type` `website` · `og:locale` `es_PY` · `og:site_name`
  `Constructora Vera`
- **Sin** `og:image` (no hay imagen), **sin** `canonical` ni `og:url`
  (no hay dominio todavía) → van a la lista de placeholders §9
- Favicon: SVG inline en data-URI, cuadrado `--accent` con la letra `V`
  en `Archivo` 700 blanco

### Banner de consentimiento — copy literal

- Texto: `Usamos cookies para entender cómo se usa el sitio y mejorarlo.
  Podés aceptarlas o seguir sin ellas.`
- Botón primario: `Aceptar`
- Botón secundario: `Seguir sin aceptar`
- Enlace: `Política de privacidad` → `href="#"` +
  `<!-- CONECTAR: política de privacidad -->`

Nada pre-marcado. Aparece abajo, no bloquea el contenido, y por encima
de la barra sticky móvil. La elección se guarda en `localStorage` para
no volver a mostrarlo.

---

## 5. Árbol de archivos

```
index.html          ← todo: HTML + CSS inline + JS vanilla mínimo
assets/             ← vacío por ahora (sin fotos)
```

Sin build, sin npm, sin dependencias externas más que Google Fonts.

---

## 6. Plan de imágenes — SIN FOTOS

No hay fotos y **está prohibido generar "fotos de obra" que parezcan
reales**. Cada slot lleva un **panel de motivo** en CSS puro, en la
paleta PC Taller:

| Slot | Panel |
|---|---|
| Hero | Degradado `--dark`→`#3A3630` + patrón de rejilla en `--accent` a baja opacidad + textura sutil de hormigón por `repeating-linear-gradient` |
| Servicios (bento) | Contenedor de icono tonado `--accent-tint` 48px, icono SVG inline de línea, 1.5px |
| Banda §5 | `--accent` sólido + rejilla diagonal blanca al 8% |
| Tipos de obra §7 | Bloque de rejilla arquitectónica en `--accent-tint` |

Iconos SVG inline dibujados a mano (casa, piscina/onda, parrilla,
árbol/quinta, muro con flecha, tablas de deck). Nada de librerías.

**Alt-texts** (para cuando lleguen las fotos, en la lista de
placeholders): `"Construcción de casa llave en mano en Asunción"`,
`"Construcción de piscina de hormigón en una quinta de Gran Asunción"`,
`"Quincho con parrilla construido en un patio de Asunción"`.

---

## 7. Keywords

| Elemento | Keyword |
|---|---|
| H1 (primaria) | `construcción de casas llave en mano Asunción` |
| H2 §4 | `construcción de casas, piscinas y quinchos` |
| H3 servicios | uno por servicio, **siempre con modificador de obra** |
| FAQ 3 | `cuánto cuesta construir una casa en Paraguay` |
| FAQ 2 | `qué es llave en mano` |
| §9 | `constructora en Asunción y Gran Asunción` |

Nunca usar `casa`, `piscina` o `quinta` como sustantivo suelto en un
título. Siempre con `construcción de` / `llave en mano` / `refacción`.

---

## 8. Técnica

- `<html lang="es-PY">`, una sola `<h1>`
- **`<meta name="robots" content="noindex,nofollow">`** — es una demo
- JSON-LD `GeneralContractor`: `name`, `telephone:"+595995628862"`,
  `areaServed` (las 6 ciudades + `Paraguay`), `address` con
  `addressLocality:"Asunción"`, `addressRegion:"Capital"`,
  `addressCountry:"PY"`. **Omitir** `geo`, `openingHoursSpecification`,
  `priceRange`, `sameAs` — sin datos. Más `FAQPage` con las 5 de §4.
- Enlaces WhatsApp, texto pre-cargado **distinto por sección**:
  `https://wa.me/595995628862?text=` +
  hero → `Hola%2C%20vi%20su%20p%C3%A1gina%20y%20quiero%20un%20presupuesto%20para%20construir%20una%20casa`
  servicios → uno por servicio · banda §5 → `...sobre%20mi%20terreno`
  contacto → `...y%20quiero%20consultar`
- `overflow-x:hidden` en `body`; full-bleed con
  `width:100vw; margin-left:calc(50% - 50vw)`
- FAB: 56px, `right:16px; bottom:16px`; bajo 768px `bottom:88px` y
  `body{padding-bottom:88px}`. `aria-label="Escribinos por WhatsApp"`
- Áreas táctiles ≥48×48px. Toda la tipografía en `clamp()`
- Splits (a, c) colapsan a una columna bajo 1024px; bento → 2 col bajo
  1024px → 1 col bajo 640px; stepper → vertical bajo 768px
- Movimiento: fade-up 80ms stagger, hover-lift 4px, `--ease`. Respetar
  `prefers-reduced-motion`. Sin parallax en móvil
- Banner de consentimiento simple (Ley 6534/2020), nada pre-marcado
- Peso ≤500 KB, Lighthouse móvil ≥90

---

## 9. Placeholders a confirmar con el dueño

1. **⚠️ NOMBRE DEL NEGOCIO** — "Constructora Vera" es provisorio.
   Aparece en: header, footer col 1, línea de copyright, `<title>`,
   og:title, JSON-LD `name`. Reemplazo de 6 puntos.
2. RUC y factura legal → agregar fila a §3 y al footer
3. Años en el rubro / cantidad de obras → recién entonces se puede
   agregar a §3 u §8
4. Garantía ofrecida (¿cuántos años, sobre qué?)
5. Fotos reales → reemplazan los paneles de motivo
6. Reseñas de Google → reponer la sección de reseñas
7. Métodos de pago → agregar sección de pagos
8. Teléfono fijo, horarios, dirección física, Facebook/Instagram
9. Dominio final → quitar `noindex`, poner canonical, og:url y og:image
10. Endpoint del formulario
11. Página de política de privacidad (el banner enlaza a `#`)

---

## 10. QA

- [ ] Cero reseñas, años, cantidades, garantías, matrículas o precios inventados
- [ ] Ningún `[COMPLETAR]` visible
- [ ] Voseo en todas las CTA; cero inglés; cero formas con `tú`
- [ ] WhatsApp `595995628862`, sin `+` ni espacios en la URL; texto distinto por sección
- [ ] `#25D366` sólo en elementos WhatsApp
- [ ] Teléfono clicable **y** visible como texto
- [ ] Sin dos secciones seguidas con el mismo patrón; hero es (b); ≥1 banda full-bleed; ≥2 roturas de container; ≥2 solapes de borde
- [ ] (f) usado una sola vez
- [ ] JSON-LD válido, una sola H1, alt en español
- [ ] Cero scroll horizontal en 360 / 390 / 768 / 1024 / 1440
- [ ] `document.documentElement.scrollWidth === clientWidth`
- [ ] Áreas táctiles ≥48px, FAB ≥56px
- [ ] Banner de consentimiento, nada pre-marcado
- [ ] `noindex` presente (es demo)
