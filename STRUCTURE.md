# Estructura del sitio

> **PRECEDENCIA.** El orden de secciones y las reglas de layout los fija
> el skill `paraguay-local-site` (§2 y §3). Este archivo **no** define
> una estructura propia — sólo registra cómo se mapea el proyecto viejo
> de `muebleria` y qué decisiones ya se tomaron para Carpintería.
> Si algo acá contradice al skill, gana el skill.

## De dónde venimos: muebleria.com.py (Next.js)

```
app/
├── page.tsx                      # Home
├── (catalogo)/[categoria]/       # landings SEO por categoría
├── (catalogo)/producto/[slug]/   # fichas de producto
├── checkout/  ── NO APLICA (sin backend)
├── nosotros/                     # historia de marca y materiales
└── api/       ── NO APLICA (sin backend)
```

Lo único con valor trasladable es el patrón **"una landing por
categoría con copy propio y geolocalizado"**, que en el skill se
convierte en las páginas `/servicios/[servicio]/` de LÄGE 2.

## A dónde vamos

### LÄGE 1 — one-pager (punto de partida)

Un solo `index.html`. **El orden de las 13 secciones lo dicta el skill
§2 y no se altera** (header sticky → hero → franja de confianza →
servicios → banda full-bleed → cómo trabajamos → trabajos realizados →
reseñas → precios → zonas → FAQ → contacto → footer, más FAB de
WhatsApp y barra sticky móvil).

Layout por sección para la pista **PC — Taller**, copiado de
`references/design-lib-py.md`:

- hero **(b)** full-bleed foto de trabajo con tarjeta overlay abajo a la
  izquierda que cruza el borde de sección
- confianza **(h)** banda oscura
- servicios **(d)** bento con intervalos de precio
- cómo trabajamos **(e)** stepper con marcadores numéricos
- banda full-bleed **(h)** acento + CTA WhatsApp
- trabajos **(c)** antes/después
- reseñas **(d)**
- zonas **(c)**
- FAQ **(f)**
- contacto **(a)**

### LÄGE 2 — sitio completo (sólo si el cliente aprueba)

URLs de directorio, no archivos `.html` sueltos:

```
/
/servicios/[servicio]/     ← una por servicio principal, UN keyword c/u
/zonas/[ciudad]/           ← 3–6 ciudades REALMENTE atendidas
/precios/
/sobre-nosotros/
/contacto/
```

Archivos compartidos `assets/css/site.css` + `assets/js/site.js`, con la
CSS crítica inline en cada página. Obligatorio: `sitemap.xml`,
`robots.txt`, canonical por página, `Service` schema en servicios,
`BreadcrumbList`, 404.

**Regla dura:** el diseño de läge 2 es idéntico al de läge 1. Una
expansión que se ve distinta de la demo que el cliente compró es un bug.

## Patrón de footer heredado de muebleria

`components/Footer.tsx` tenía una estructura que funcionó y se puede
replicar en HTML plano:

- Col 1: nombre + descripción corta + NAP (RUC, ciudad)
- Col 2: links a servicios
- Col 3: contacto — WhatsApp con el número **visible como texto**, no
  sólo como link
- Línea final: copyright + "Hecho en Paraguay 🇵🇾"

El skill añade requisitos que muebleria no tenía y que son obligatorios:
NAP idéntico al del resto del sitio, horarios, redes sociales
(Facebook/Instagram pesan más en PY que en Europa) y link de privacidad.
