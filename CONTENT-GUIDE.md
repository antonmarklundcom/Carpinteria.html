# Guía de tono y copywriting

> **PRECEDENCIA.** Las reglas de idioma y conversión (§4) y de
> anti-fabricación (§5) las fija el skill `paraguay-local-site` y son
> innegociables. Este archivo aporta el **ángulo de marca** heredado de
> `muebleria`. Donde contradiga al skill, gana el skill.

## ⚠️ Dos correcciones sobre la versión anterior de este archivo

1. **Voseo obligatorio, tuteo prohibido.** La versión previa decía
   "tuteo/voseo". Es incorrecto: el skill exige voseo en todas las CTA
   —"Escribinos", "Llamanos", "Consultá", "Pedí tu presupuesto"— y el
   QA rechaza cualquier forma con `tú` ("Escríbenos", "Llámanos",
   "Agenda tu cita"). Cero inglés en la UI.
2. **La fórmula de párrafo NO puede incluir años, garantías ni cifras
   salvo que el cliente los haya confirmado.** La versión previa pedía
   "años de oficio" como paso fijo — eso empuja directo a inventar, que
   es lo único que el skill prohíbe de forma absoluta.

## Anti-fabricación (regla dura)

Nunca inventar: reseñas, puntajes, cantidad de trabajos, años en el
rubro, garantías, matrículas, nombres de clientes, precios.

| Falta | Reemplazo (nunca sección vacía, nunca `[COMPLETAR]` visible) |
|---|---|
| Reseñas | Sustituir la sección por "Cómo trabajamos": 3 principios concretos de trabajo, o un stack de garantías reales |
| Fotos | Paneles de motivo en la paleta de la pista. Nunca caras generadas ni "fotos de trabajos" falsas |
| RUC / matrícula | Ocultar la fila entera |
| Nombre | Usar el nombre real — la demo vende mucho mejor así |

## Voz de marca (esto sí se hereda de muebleria)

- Español paraguayo natural y cercano. Voseo siempre.
- Se presenta como **taller local, no cadena**: "sabés dónde estamos y
  respondemos por WhatsApp, no con un ticket de mesa de ayuda".
- Contraste contra la alternativa mala del mercado. En muebleria era el
  MDP de las grandes cadenas; en carpintería es la changa sin oficio,
  la madera sin tratar, el presupuesto que cambia al final.
- **Transparencia de precio como diferencial explícito**: "sin letra
  chica, sin sorpresas". Este fue el mejor ángulo de muebleria y es el
  que más conviene trasladar.
- Honestidad por encima de la venta: si un dato no está confirmado, no
  se escribe.

## Ejemplo de calibración de tono (muebleria, página "Roperos")

> "El ropero es la inversión grande del dormitorio, y es también el
> mueble que más sufre la humedad en Paraguay... Nuestros roperos están
> construidos con tableros RH (resistentes a la humedad) y fondos de
> terciado fenólico... Consultanos por WhatsApp si necesitás medidas
> especiales."

Sirve como **referencia de registro y calidez**, no como plantilla de
longitud: en el one-pager las secciones son mucho más cortas.

## Bloque "sobre nosotros" (patrón de `app/nosotros/page.tsx`)

Estructura que funcionó:
1. La frustración compartida que originó el negocio
2. "El problema no es tu casa / tu obra, es el material / la changa"
3. Qué material o método se eligió y por qué aguanta el uso real
4. Transparencia de precio antes de cobrar
5. Garantía humana: "si hay un problema, lo resolvemos" — la ventaja de
   ser taller local

Los pasos 3 y 5 sólo se escriben con datos confirmados por el dueño.

## Microcopy

- CTA primaria: "Hablá con un carpintero"
- WhatsApp con texto pre-cargado **distinto por sección**, para saber
  qué convirtió: `?text=Hola%2C%20vi%20su%20p%C3%A1gina%20web%20y%20quiero%20consultar%20por%20[servicio]`
- El número también visible como **texto plano** — mucha gente lo copia
- Precios en guaraníes con punto de miles: `Gs. 1.500.000`, e IVA
  declarado
- Footer: "Hecho en Paraguay 🇵🇾"
- Verde `#25D366` **sólo** en elementos de WhatsApp, nunca como acento
  del sitio (la pista PC — Taller usa naranja óxido `#C2410C`)
