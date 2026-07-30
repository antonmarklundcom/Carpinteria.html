# BUILD-SPEC LÄGE 2 — expansión a sitio completo

**Ejecutar exactamente. No desviarse. Ante una duda, preguntar en vez de
adivinar.** Complementa a `BUILD-SPEC.md` (läge 1), no lo reemplaza:
intake, tokens, anti-fabricación y contrato responsive siguen vigentes.

## 0. Precondición

**Leer `/workspace/carpinteria.html/index.html` ANTES de escribir nada** y
extraer los tokens y los patrones de sección ya construidos. **El diseño
no cambia.** Una expansión que se ve distinta de la demo aprobada es un
bug, no una mejora.

## 1. Alcance

8 páginas. **NO** se construyen `/zonas/` ni `/sobre-nosotros/`:

- `/zonas/` exige, por página, un trabajo real hecho en esa ciudad. No
  hay ninguno. Seis páginas con el nombre de ciudad cambiado son
  contenido duplicado y hunden el dominio entero, incluidas las páginas
  buenas.
- `/sobre-nosotros/` es una página de confianza y no hay años, RUC,
  equipo ni historia confirmados.

Ambas quedan en la lista de placeholders hasta que lleguen datos reales.

## 2. Árbol de archivos

```
index.html                              ← recortar (§7)
404.html
robots.txt
sitemap.xml
.htaccess                               ← ya existe, no tocar
enviar.php                              ← ya existe, no tocar
assets/css/site.css                     ← tokens + componentes compartidos
assets/js/site.js                       ← nav, fade-up, FAQ, consent, form-alert
assets/img/                             ← vacío por ahora
servicios/casas-llave-en-mano/index.html
servicios/piscinas/index.html
servicios/quinchos/index.html
servicios/quintas/index.html
servicios/remodelaciones/index.html
servicios/decks-y-pergolas/index.html
precios/index.html
contacto/index.html
```

URLs de directorio con `/` final. Rutas a assets **absolutas desde la
raíz** (`/assets/css/site.css`), porque el sitio vive en `public_html/`.

## 3. CSS y JS compartidos

Mover a `assets/css/site.css` todo lo que hoy está inline en
`index.html`: tokens `:root`, reset, `.container`, `.btn*`, `.eyebrow`,
`.card`, `.bento`, `.faq*`, `.form*`, header, footer, FAB, barra móvil,
consent, `.fade-up`, breakpoints.

**Mantener inline en cada página** sólo la CSS crítica del hero de esa
página (≤2 KB) para no perder LCP.

`assets/js/site.js`: nav móvil, observer de `.fade-up`, acordeón FAQ,
consent banner, lector de `?ok=/?error=` del formulario. Un solo
archivo, sin dependencias.

Header, footer, FAB y barra móvil **idénticos carácter por carácter** en
las 9 páginas. NAP idéntico en todos los footers.

## 4. Inventario y metadata

`{N}` = `Constructora Vera`. Título ≤60, meta ≤155.

| Ruta | H1 | `<title>` |
|---|---|---|
| `/` | Construcción de casas llave en mano en Asunción | *(sin cambios)* |
| `/servicios/casas-llave-en-mano/` | Construcción de casas llave en mano en Asunción | Casas llave en mano en Asunción \| {N} |
| `/servicios/piscinas/` | Construcción de piscinas de hormigón en Asunción | Construcción de piscinas en Asunción \| {N} |
| `/servicios/quinchos/` | Construcción de quinchos y áreas de asado en Asunción | Construcción de quinchos en Asunción \| {N} |
| `/servicios/quintas/` | Construcción y refacción de quintas en Asunción | Construcción de quintas en Asunción \| {N} |
| `/servicios/remodelaciones/` | Remodelación y ampliación de casas en Asunción | Remodelación de casas en Asunción \| {N} |
| `/servicios/decks-y-pergolas/` | Decks, pérgolas y patios en Asunción | Decks y pérgolas en Asunción \| {N} |
| `/precios/` | Cuánto cuesta construir en Paraguay | Cuánto cuesta construir en Paraguay \| {N} |
| `/contacto/` | Contacto | Contacto \| {N} |

Meta descriptions (usar literal):

- **casas:** `Construcción de casas llave en mano en Asunción y Gran Asunción. Proyecto, obra y terminaciones con un solo interlocutor. Presupuesto sin costo.`
- **piscinas:** `Construcción de piscinas de hormigón armado en Asunción y Gran Asunción, con vereda, filtrado e iluminación. Pedí tu presupuesto sin costo.`
- **quinchos:** `Construcción de quinchos y áreas de asado en Asunción. Parrilla, mesada, bacha y techo, integrados al patio que ya tenés. Presupuesto sin costo.`
- **quintas:** `Construcción y refacción de quintas en Asunción y alrededores: casa, quincho, piscina y perimetral. Coordinamos la obra aunque esté lejos.`
- **remodelaciones:** `Remodelación y ampliación de casas en Asunción. Dormitorios, cocina y baños, tocando lo mínimo de lo que ya está construido.`
- **decks:** `Construcción de decks, pérgolas y patios en Asunción. Materiales elegidos para el sol y la lluvia de Paraguay. Presupuesto sin costo.`
- **precios:** `Cómo cotizamos una obra en Paraguay: qué define el precio, qué incluye un presupuesto cerrado y por qué no publicamos precio por m2.`
- **contacto:** `Escribinos por WhatsApp al +595 995 628862. Presupuesto sin costo en Asunción, Gran Asunción e interior del país.`

## 5. Estructura de una página de servicio

Mismo orden en las 6. Patrones alternados (§3 del skill), sin dos
seguidos iguales:

```
1. Header (compartido)
2. Hero (a) split 55/45 — eyebrow + H1 + ingress + CTA WhatsApp + CTA tel
   Panel de motivo a la derecha (sin fotos todavía)
3. Qué incluye (d) bento — lista concreta
4. Cuándo lo necesitás (e) — 3–4 situaciones
5. Banda CTA (h) full-bleed acento
6. Cómo trabajamos (e) stepper — los MISMOS 4 pasos del home
7. Qué mirar antes de contratar (c) 2/3+1/3  ← reemplaza "trabajo realizado"
8. FAQ (f) 3–4 preguntas + FAQPage schema
9. Servicios relacionados (d) — 2 tarjetas + link al home
10. Contacto (a) — bloque WhatsApp + número visible
11. Footer (compartido)
```

**§7 reemplaza a "Trabajos realizados"**: no hay fotos ni obras que
mostrar, y una galería inventada está prohibida. En su lugar va un
bloque honesto y útil de qué debe exigir el cliente al contratar
cualquier constructora. Cuando lleguen fotos, se sustituye.

Breadcrumbs visibles arriba del hero: `Inicio › Servicios › {Servicio}`
+ `BreadcrumbList` schema.

## 6. COPY LITERAL POR PÁGINA

Escribir exactamente lo que sigue. No parafrasear ni "mejorar".

---

### 6.1 `/servicios/casas-llave-en-mano/`

**Ingress:** `Contratás una sola vez y te entregamos la casa terminada.
Nos ocupamos del proyecto, de los materiales, de todos los gremios y de
las terminaciones, para que no tengas que coordinar diez oficios
distintos mientras trabajás. El presupuesto es sin costo y el precio
queda cerrado por escrito antes de empezar.`

**Qué incluye** — `LO QUE ENTRA EN LA OBRA`
H2: `Todo lo que hace falta para entrar a vivir`
- `Proyecto y planos` — `Definimos la distribución con vos y preparamos la documentación necesaria para construir.`
- `Fundación y estructura` — `Excavación, cimientos, estructura de hormigón y mampostería.`
- `Instalaciones` — `Instalación eléctrica, agua, desagüe cloacal y pluvial, previsiones para aire acondicionado.`
- `Techo y aberturas` — `Estructura de techo, cubierta, aberturas y vidrios colocados.`
- `Terminaciones` — `Revoques, pisos, revestimientos, pintura, griferías y artefactos.`
- `Limpieza y entrega` — `Entregamos la obra limpia y funcionando, no en obra gruesa.`

**Cuándo lo necesitás** — `CUÁNDO NOS LLAMAN`
H2: `Situaciones en las que conviene llave en mano`
1. `Compraste un terreno y arrancás de cero` — `Tenés el lote pero no sabés por dónde empezar ni a quién llamar primero. Nosotros ordenamos todo el proceso desde el principio.`
2. `Trabajás todo el día y no podés estar en la obra` — `Llave en mano existe justamente para esto: vos no coordinás gremios ni comprás materiales.`
3. `Vivís en el exterior y querés construir en Paraguay` — `Te mandamos avances por WhatsApp y coordinamos todo a distancia.`
4. `Ya te pasó que una obra se frenó a la mitad` — `El precio cerrado por escrito y un solo responsable existen para que eso no se repita.`

**Qué mirar antes de contratar** — `ANTES DE FIRMAR`
H2: `Qué exigirle a cualquier constructora`
Cuerpo: `No hace falta entender de obra para contratar bien, pero sí
conviene pedir tres cosas por escrito antes de entregar plata. Primero,
un presupuesto que detalle alcance y materiales, no un número suelto:
si no dice qué piso, qué aberturas y qué griferías entran, ese número no
significa nada y va a cambiar. Segundo, quién es el responsable de la
obra y cómo te vas a comunicar con esa persona. Tercero, qué pasa si
algo cambia en el camino, porque en obra siempre cambia algo: lo
importante es que se converse antes y quede por escrito, nunca que
aparezca como sorpresa en la factura siguiente. Si una constructora se
incomoda con estas tres preguntas, ya te contestó lo más importante.`
Lista lateral, `Pedí siempre`:
`Presupuesto detallado por escrito` · `Un responsable con nombre` ·
`Cómo se manejan los cambios` · `Forma y plazos de pago`

**FAQ**
1. `¿Qué incluye exactamente una casa llave en mano?` → `Todo lo necesario para entrar a vivir: proyecto, fundación, estructura, techo, instalaciones, aberturas y terminaciones. Lo que queda afuera —muebles, cortinas, parquización— se aclara por escrito en el presupuesto para que no haya malentendidos.`
2. `¿Puedo hacer cambios durante la obra?` → `Sí. Los cambios se conversan antes de ejecutarlos y se ajusta el presupuesto por escrito. Nunca aparece un cambio ya hecho y facturado sin haberlo hablado.`
3. `¿Trabajan con planos que ya tengo?` → `Sí. Si ya tenés un proyecto hecho, lo revisamos y cotizamos la construcción sobre ese plano.`
4. `¿Hace falta que el terreno esté limpio?` → `No. Si hace falta desmalezar, nivelar o demoler algo previo, lo incluimos en el presupuesto.`

**Relacionados:** piscinas · quinchos

---

### 6.2 `/servicios/piscinas/`

**Ingress:** `Construimos piscinas de hormigón armado, hechas en el lugar
y pensadas para durar décadas. Incluye vereda perimetral, sistema de
filtrado e iluminación. Trabajamos tanto en casas de Asunción y Gran
Asunción como en quintas del interior.`

**Qué incluye** — H2: `Una piscina terminada, no un pozo con agua`
- `Excavación y replanteo` — `Marcamos la ubicación con vos y excavamos según la medida acordada.`
- `Hormigón armado` — `Estructura de hormigón armado hecha en el lugar, no prefabricada.`
- `Revestimiento` — `Revestimiento interior a elección, con terminación de borde.`
- `Filtrado` — `Bomba, filtro y cañerías de circulación instaladas y probadas.`
- `Iluminación` — `Luces sumergidas con su instalación eléctrica correspondiente.`
- `Vereda perimetral` — `Vereda antideslizante alrededor, para que no se camine sobre barro.`

**Cuándo lo necesitás** — H2: `Cuándo conviene encarar la piscina`
1. `Estás construyendo la casa` — `Si la hacemos junto con la obra, se aprovechan la excavación y las instalaciones. Sale más ordenado y más barato que hacerla después.`
2. `Ya tenés la casa y sobra patio` — `Se puede construir en un patio existente. Evaluamos acceso de máquinas y desagüe antes de cotizar.`
3. `Estás armando la quinta` — `Piscina, quincho y parrilla suelen ir juntos. Conviene proyectarlos de una sola vez.`
4. `Tenés una piscina vieja que pierde` — `También hacemos reparación y revestimiento de piscinas existentes.`

**Qué mirar antes de contratar** — H2: `Lo que define si una piscina dura`
Cuerpo: `La diferencia entre una piscina que sigue impecable a los
quince años y una que empieza a perder al tercero casi nunca se ve desde
arriba: está en la estructura y en el desagüe. Una piscina de hormigón
armado bien hecha lleva hierro calculado y hormigón vibrado, no una capa
de material sobre tierra compactada. El otro punto crítico es a dónde va
el agua: si el retrolavado del filtro y el desborde no tienen una salida
resuelta, el agua termina bajo la vereda y con el tiempo la levanta.
Preguntá siempre por esas dos cosas antes de comparar precios, porque
son justamente las que se recortan cuando un presupuesto viene
sospechosamente barato.`
Lista lateral, `Preguntá por`:
`Espesor y armadura de la estructura` · `A dónde va el retrolavado` ·
`Qué bomba y qué filtro llevan` · `Terminación del borde`

**FAQ**
1. `¿Cuánto tarda una piscina?` → `Depende del tamaño y del acceso al terreno. Te damos un plazo estimado por escrito junto con el presupuesto, después de ver el lugar.`
2. `¿Se puede construir en un patio chico?` → `En general sí, pero hay que verificar que entren las máquinas o prever excavación manual. Por eso vamos a ver el lugar antes de cotizar.`
3. `¿Incluye el tratamiento del agua?` → `Instalamos y dejamos funcionando el sistema de filtrado, y te explicamos el mantenimiento. Los productos químicos del uso diario corren por tu cuenta.`
4. `¿Reparan piscinas existentes?` → `Sí. Hacemos reparación de filtraciones, cambio de revestimiento y actualización del sistema de filtrado.`

**Relacionados:** quinchos · decks-y-pergolas

---

### 6.3 `/servicios/quinchos/`

**Ingress:** `El quincho es donde termina pasando todo en una casa
paraguaya. Lo construimos completo —parrilla, mesada, bacha y techo— e
integrado al patio que ya tenés, no como una construcción pegada aparte.`

**Qué incluye** — H2: `El quincho completo, listo para usar`
- `Estructura y techo` — `Estructura y cubierta, con la altura y la salida de humo bien resueltas.`
- `Parrilla` — `Parrilla de mampostería con tiraje calculado, para que el humo salga y no se meta en la casa.`
- `Mesada y bacha` — `Mesada de trabajo con bacha y su instalación de agua y desagüe.`
- `Piso` — `Piso apto para exterior, antideslizante y fácil de baldear.`
- `Instalación eléctrica` — `Tomas, iluminación y previsión para heladera o ventilador.`
- `Integración al patio` — `Conexión con la casa, la vereda y —si la hay— la piscina.`

**Cuándo lo necesitás** — H2: `Cuándo se justifica`
1. `Recibís gente seguido` — `Si el asado del domingo es fijo, el quincho deja de ser un lujo y pasa a ser la parte más usada de la casa.`
2. `Tenés patio pero no lo usás` — `Un patio sin sombra ni parrilla no se usa. Un quincho lo convierte en living.`
3. `Estás haciendo la piscina` — `Quincho y piscina se proyectan juntos: comparten vereda, desagüe e instalación eléctrica.`
4. `Tenés una parrilla que humea para adentro` — `Casi siempre es el tiraje. Se puede corregir sin rehacer todo.`

**Qué mirar antes de contratar** — H2: `Por qué algunos quinchos no se usan`
Cuerpo: `Un quincho mal resuelto no se rompe: simplemente deja de
usarse, que en la práctica es peor porque ya lo pagaste. Las dos causas
son casi siempre las mismas. La primera es el tiraje: si la campana y el
conducto no están bien dimensionados, el humo vuelve sobre la mesa y
nadie quiere quedarse ahí. La segunda es la orientación: un quincho que
recibe el sol de la tarde de lleno en verano paraguayo es inutilizable
justo en el horario en que lo querés usar. Ninguna de las dos se arregla
con revestimientos caros después. Se resuelven antes, decidiendo dónde y
cómo se construye.`
Lista lateral, `Se define antes`:
`Tiraje y altura de la campana` · `Orientación respecto del sol` ·
`Distancia a la cocina` · `Desagüe del piso`

**FAQ**
1. `¿Se puede hacer un quincho en un patio que ya está terminado?` → `Sí. Vemos el espacio, el desagüe existente y por dónde pasar las instalaciones antes de cotizar.`
2. `¿Hacen sólo la parrilla?` → `Sí, también hacemos parrillas sueltas o corregimos parrillas existentes que humean para adentro.`
3. `¿Qué techo conviene?` → `Depende de la orientación y del uso. Lo definimos en la visita, no por catálogo.`
4. `¿Puede tener baño?` → `Sí, si hay dónde conectar el desagüe. Se cotiza aparte porque cambia bastante la obra.`

**Relacionados:** piscinas · decks-y-pergolas

---

### 6.4 `/servicios/quintas/`

**Ingress:** `Construimos y refaccionamos quintas completas: casa
principal, quincho, piscina, caminos y perimetral. Coordinamos toda la
obra aunque la quinta esté lejos de la ciudad, y te mandamos los avances
por WhatsApp.`

**Qué incluye** — H2: `La quinta entera, coordinada por una sola empresa`
- `Casa principal` — `Obra nueva o refacción de la construcción existente.`
- `Quincho y parrilla` — `El área de asado, integrada al resto.`
- `Piscina` — `Piscina de hormigón con su filtrado y vereda.`
- `Caminos y accesos` — `Entrada de vehículos, caminos internos y estacionamiento.`
- `Perimetral` — `Muro o cerco perimetral y portón de acceso.`
- `Instalaciones` — `Agua, electricidad y desagüe, incluso donde no hay red.`

**Cuándo lo necesitás** — H2: `Cuándo nos llaman por una quinta`
1. `Compraste un terreno fuera de la ciudad` — `Empezamos por lo básico: acceso, agua y electricidad. Después la construcción.`
2. `Heredaste o comprás una quinta vieja` — `Evaluamos qué conviene refaccionar y qué conviene rehacer de cero.`
3. `Querés sumar piscina y quincho` — `Es el pedido más común. Se proyectan juntos para no romper dos veces.`
4. `No podés ir a controlar la obra` — `Es exactamente por eso que coordinamos todo y mandamos avances.`

**Qué mirar antes de contratar** — H2: `Lo que cambia cuando la obra está lejos`
Cuerpo: `Construir fuera de la ciudad no es lo mismo, y conviene saberlo
antes de comparar presupuestos. Primero, la logística de materiales pesa
de verdad: cada viaje de arena, hierro o ladrillo cuesta más y demora
más, así que una obra bien planificada compra por cantidad en vez de ir
resolviendo día a día. Segundo, los servicios pueden no estar: si no hay
red de agua o de electricidad, hay que resolver pozo, tanque o
generación antes de levantar una pared, y eso tiene que estar en el
presupuesto desde el principio y no aparecer después. Tercero, el
control: si nadie del lado de la constructora está en el lugar de forma
regular, la obra se estira. Preguntá con qué frecuencia va a haber
alguien responsable en la quinta.`
Lista lateral, `Definir al inicio`:
`Hay agua y luz o hay que resolverlas` · `Estado del camino de acceso` ·
`Cada cuánto va el responsable` · `Dónde se guardan los materiales`

**FAQ**
1. `¿Trabajan fuera de Gran Asunción?` → `Sí, viajamos al interior del país. Según la distancia, el traslado puede impactar en el presupuesto y te lo aclaramos por escrito.`
2. `¿Y si la quinta no tiene agua ni luz?` → `Se resuelve como parte de la obra: pozo, tanque, y la instalación eléctrica que corresponda. Entra en el presupuesto desde el principio.`
3. `¿Puedo ver cómo avanza sin ir?` → `Sí. Mandamos fotos y avances por WhatsApp.`
4. `¿Refaccionan construcciones muy viejas?` → `Sí, pero primero vamos a verlas. A veces conviene refaccionar y a veces rehacer, y te lo decimos con franqueza aunque nos convenga lo contrario.`

**Relacionados:** casas-llave-en-mano · piscinas

---

### 6.5 `/servicios/remodelaciones/`

**Ingress:** `Ampliaciones, dormitorios nuevos, reforma de cocina y
baños. Trabajamos sobre lo que ya está construido tocando lo mínimo
necesario, y dejando la casa habitable durante la obra siempre que se
pueda.`

**Qué incluye** — H2: `Obra sobre lo que ya tenés`
- `Ampliaciones` — `Dormitorios, escritorio, lavadero o cochera sumados a la casa existente.`
- `Cocina` — `Reforma completa: instalaciones, revestimientos, mesada y muebles.`
- `Baños` — `Cambio de artefactos, revestimientos, griferías e impermeabilización.`
- `Aberturas` — `Cambio de puertas y ventanas, con ajuste de la mampostería.`
- `Techos` — `Reparación de filtraciones y cambio de cubierta.`
- `Pintura y terminaciones` — `Revoques, pintura interior y exterior.`

**Cuándo lo necesitás** — H2: `Cuándo conviene ampliar en vez de mudarse`
1. `Creció la familia` — `Un dormitorio más suele costar bastante menos que cambiar de casa con todo lo que eso implica.`
2. `Trabajás desde casa` — `Un escritorio o un ambiente independiente cambia el día a día.`
3. `La cocina o el baño quedaron viejos` — `Son las dos reformas que más se notan y más valorizan la casa.`
4. `Tenés filtraciones` — `Una filtración no se detiene sola. Cuanto antes se toca, menos obra hace falta.`

**Qué mirar antes de contratar** — H2: `Remodelar tiene un riesgo que la obra nueva no tiene`
Cuerpo: `En una casa que ya está construida siempre aparece algo que no
se veía: una cañería que estaba donde nadie esperaba, un muro que no era
portante, humedad detrás de un revestimiento. Eso es normal y le pasa a
cualquiera. Lo que distingue a una constructora seria no es prometer que
no va a aparecer nada, sino cómo lo maneja cuando aparece: parar,
mostrarte qué se encontró, cotizar el desvío y seguir sólo con tu
acuerdo. Desconfiá de un presupuesto de remodelación llamativamente
barato que no menciona qué pasa ante un imprevisto: ese número casi
siempre se corrige después, cuando ya rompiste la pared y no podés
llamar a otro.`
Lista lateral, `Acordar antes`:
`Qué pasa ante un imprevisto` · `Se puede vivir en la casa durante la obra` ·
`Dónde se acumulan los escombros` · `Horarios de trabajo`

**FAQ**
1. `¿Puedo seguir viviendo en la casa?` → `En la mayoría de las ampliaciones, sí. En reformas de cocina o del único baño, hay días en que no se puede usar ese ambiente, y te lo avisamos antes.`
2. `¿Se llevan los escombros?` → `Sí, el retiro de escombros entra en el presupuesto.`
3. `¿Hace falta permiso municipal?` → `Depende de la obra y del municipio. Te decimos en la visita si tu caso lo requiere.`
4. `¿Hacen trabajos chicos?` → `Tomamos obras de remodelación, no changas sueltas de una jornada. Si es algo muy puntual te lo decimos de entrada para no hacerte perder tiempo.`

**Relacionados:** casas-llave-en-mano · quinchos

---

### 6.6 `/servicios/decks-y-pergolas/`

**Ingress:** `Decks, pérgolas y veredas que conectan la casa con el
patio y la piscina. Elegimos los materiales pensando en el sol y la
lluvia de Paraguay, que es lo que termina definiendo cuánto duran.`

**Qué incluye** — H2: `Lo que hacemos en el patio`
- `Decks` — `Deck de madera o material compuesto, con estructura ventilada por debajo.`
- `Pérgolas` — `Pérgolas de madera o hierro, con o sin cubierta.`
- `Veredas` — `Veredas perimetrales y caminos, antideslizantes.`
- `Bordes de piscina` — `Terminación de borde, coordinada con el deck.`
- `Iluminación exterior` — `Luces embutidas o colgantes con su instalación.`
- `Mantenimiento` — `Recuperación de decks existentes: lijado, sellado y cambio de tablas.`

**Cuándo lo necesitás** — H2: `Cuándo se pide`
1. `Hiciste la piscina y falta el entorno` — `Sin deck ni vereda, alrededor de la piscina termina habiendo barro.`
2. `Querés sombra en el patio` — `Una pérgola bien orientada cambia por completo el uso del patio en verano.`
3. `Tenés un deck que se puso gris y áspero` — `Casi siempre se recupera con lijado y sellado, sin cambiarlo entero.`
4. `Querés conectar la casa con el patio` — `Un deck a nivel del piso interior hace que el patio se use como una habitación más.`

**Qué mirar antes de contratar** — H2: `Por qué un deck se arruina antes de tiempo`
Cuerpo: `Los decks casi nunca fallan por la madera de la superficie:
fallan por abajo. Si la estructura no está ventilada y separada del
piso, la humedad queda atrapada y la madera se pudre desde el lado que
no se ve, aunque arriba se vea impecable. Lo segundo es el sellado: en
Paraguay el sol castiga fuerte, y un deck sin protección adecuada se
pone gris y áspero en una temporada. Eso no es un defecto de
fabricación, es mantenimiento, y conviene saber desde el principio cada
cuánto hay que hacerlo para no llevarse una sorpresa. Preguntá siempre
cómo se ventila la estructura y con qué producto se sella.`
Lista lateral, `Preguntá por`:
`Cómo se ventila la estructura` · `Con qué se sella y cada cuánto` ·
`Tipo de fijación de las tablas` · `Separación respecto del piso`

**FAQ**
1. `¿Qué dura más, madera o composite?` → `El composite pide menos mantenimiento y aguanta mejor el sol; la madera se ve más cálida y sale menos al inicio. Te mostramos las dos opciones con su precio en el presupuesto.`
2. `¿Cada cuánto hay que mantenerlo?` → `Un deck de madera necesita sellado periódico. Te dejamos indicado el producto y la frecuencia al entregar.`
3. `¿Recuperan un deck existente?` → `Sí. Lijado, sellado y cambio de las tablas que estén dañadas.`
4. `¿Hacen la pérgola sin el deck?` → `Sí, se pueden contratar por separado.`

**Relacionados:** piscinas · quinchos

---

### 6.7 `/precios/`

⚠️ **CERO cifras. No inventar precios, rangos ni valores por m².**

- Eyebrow `PRECIOS` · **H1:** `Cuánto cuesta construir en Paraguay`
- Ingress: `La respuesta honesta es que depende, y cualquiera que te tire
  un número por WhatsApp sin ver el terreno te está adivinando. Acá te
  explicamos qué define el precio de una obra y cómo cotizamos, para que
  puedas comparar presupuestos con criterio.`

**H2:** `Por qué no publicamos un precio por metro cuadrado`
`Un precio por m² parece práctico y por eso lo publican muchos, pero en
la práctica sirve poco: el mismo metro cuadrado cambia de precio según
el nivel de terminación, el estado del terreno, la distancia a la obra y
cuánto material haya que trasladar. Publicar un número bajo para atraer
consultas y después corregirlo cuando el cliente ya está enganchado es
una práctica común en el rubro, y es exactamente la que nos negamos a
usar. Preferimos ir, ver, y darte un número que se sostenga.`

**H2:** `Qué define el precio de tu obra` — 6 tarjetas (d):
- `El terreno` — `Nivel, acceso para máquinas, necesidad de desmonte o relleno.`
- `El tamaño` — `Metros cuadrados cubiertos y semicubiertos.`
- `Las terminaciones` — `Es lo que más varía. El mismo plano cambia de precio según pisos, aberturas y griferías.`
- `Las instalaciones` — `Cantidad de baños, aire acondicionado, agua caliente, previsiones eléctricas.`
- `La distancia` — `Una obra en el interior suma traslado de materiales y de personal.`
- `Los plazos` — `Acelerar una obra implica más gente trabajando en simultáneo.`

**H2:** `Cómo cotizamos` — stepper (e), 4 pasos:
1. `Nos contás qué querés hacer` — `Por WhatsApp, con fotos del terreno o de la casa.`
2. `Vamos a verlo` — `La visita no tiene costo y no te compromete a nada.`
3. `Armamos el presupuesto` — `Por escrito, con alcance y materiales detallados.`
4. `Queda cerrado` — `Ese es el precio. Si algo cambia, se conversa antes y se ajusta por escrito.`

**H2:** `Qué tiene que tener un presupuesto serio`
`Detalle de materiales por rubro, no un total suelto. Alcance explícito:
qué entra y qué queda afuera. Forma de pago por avance de obra, no todo
por adelantado. Y un responsable con nombre y teléfono. Si un
presupuesto no tiene estas cuatro cosas, no lo compares por precio,
porque no estás comparando lo mismo.`

**Banda CTA:** `Pedí tu presupuesto sin costo` + `La visita no te
compromete a nada.`

> Formas de pago **no** se incluyen: no están confirmadas.

---

### 6.8 `/contacto/`

- **H1:** `Contacto`
- Ingress: `Escribinos por WhatsApp y te respondemos con los próximos
  pasos. Si podés, mandanos una foto del terreno o de la casa: nos
  ahorra la mitad de las preguntas.`
- Bloque WhatsApp grande + `+595 995 628862` visible como texto
- Formulario de 3 campos → `action="/enviar.php"` (misma lógica y
  honeypot que el home)
- `Zonas` — `Asunción, San Lorenzo, Luque, Lambaré, Fernando de la Mora,
  Capiatá, Ñemby, Villa Elisa, Mariano Roque Alonso e interior del país.`
- `Presupuesto sin costo · Respondemos por WhatsApp`

> Sin horarios ni dirección física: no confirmados.

---

## 7. Recorte del home

- Servicios: las 6 tarjetas quedan, cada una **enlaza a su página** y el
  texto se acorta a una línea. Agregar `Ver todos los servicios`.
- FAQ: quedan 3; se agrega `Ver todas las preguntas` → `/precios/`.
- Nav: `Servicios` · `Precios` · `Contacto`. Menú desplegable de
  servicios en desktop; acordeón en móvil.
- Todo lo demás del home **no se toca**.

## 8. Enlazado interno

- Home → las 6 servicios + `/precios/` + `/contacto/`
- Servicio → 2 relacionados (§6) + `/precios/` + `/contacto/` + home
- `/precios/` → las 6 servicios
- Footer (todas): las 6 servicios + precios + contacto
- Sin páginas huérfanas.

## 9. sitemap / robots / 404

`sitemap.xml` con las 9 URLs, `lastmod` de hoy, `priority`: home 1.0,
servicios 0.9, precios 0.8, contacto 0.7.

`robots.txt`:
```
User-agent: *
Allow: /
Sitemap: https://cornflowerblue-frog-810812.hostingersite.com/sitemap.xml
```

⚠️ Todas las páginas mantienen `noindex,nofollow` mientras sea demo. El
sitemap se genera igual, para que esté listo al lanzar.

`404.html`: header/footer compartidos, `No encontramos esa página`,
links a home y a los 6 servicios. Agregar `ErrorDocument 404 /404.html`
al `.htaccess`.

## 10. Técnica por página

- `<html lang="es-PY">`, una sola `<h1>`, canonical propio
- `LocalBusiness`/`GeneralContractor` en todas; `Service` en servicios;
  `FAQPage` donde hay FAQ; `BreadcrumbList` en todas menos el home
- FAB WhatsApp en todas, con texto pre-cargado **específico de la
  página**: `?text=Hola%2C%20quiero%20consultar%20por%20{servicio}`
- Consent banner en todas
- NAP idéntico carácter por carácter en todos los footers
- Contrato responsive del skill §6 en cada página nueva

## 11. QA (correr en las 9 páginas)

- [ ] Cero precios, años, obras, reseñas o garantías inventados
- [ ] Voseo en todas las CTA; cero `tú`; cero inglés
- [ ] Una `<h1>` por página; canonical único; título ≤60; meta ≤155
- [ ] Sin dos secciones seguidas con el mismo patrón; (f) una vez por página
- [ ] JSON-LD válido en todas
- [ ] **Sin scroll horizontal en 360/390/768/1024/1440 — verificar en
      navegador de verdad, no por inspección del código**
- [ ] Header/footer/FAB idénticos entre páginas; NAP idéntico
- [ ] Ningún enlace roto; ninguna página huérfana
- [ ] `noindex` presente en las 9
- [ ] Cada página ≤500 KB

## 12. Placeholders (se suman a los de BUILD-SPEC.md §9)

1. Nombre real → sigue siendo "Constructora Vera"
2. Fotos de obras → reemplazan paneles de motivo y habilitan
   "Trabajos realizados"
3. `/zonas/` — requiere una obra real por ciudad
4. `/sobre-nosotros/` — requiere años, RUC, equipo
5. Precios reales → habilitan tabla en `/precios/`
6. Formas de pago → sección propia
7. Horarios y dirección → `/contacto/` y schema
8. Facebook/Instagram → `sameAs`
9. Dominio real → canonical, og:url, sitemap, quitar `noindex`
