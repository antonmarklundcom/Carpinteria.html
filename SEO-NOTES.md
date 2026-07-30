# Notas de SEO

> **PRECEDENCIA.** Los requisitos técnicos (§6) y el QA (§9) los fija el
> skill `paraguay-local-site`. Los patrones de búsqueda salen de
> `references/keywords-py.md`. Este archivo registra decisiones tomadas
> y lo poco que se hereda de `muebleria`.

## ⚠️ Corrección: tipo de schema

Una versión anterior de este archivo indicaba `@type: "Carpenter"`.
**Ese tipo no existe en schema.org.** Los subtipos de
`HomeAndConstructionBusiness` son: `Electrician`, `GeneralContractor`,
`HVACBusiness`, `HousePainter`, `Locksmith`, `MovingCompany`, `Plumber`,
`RoofingContractor`.

**Para una carpintería usar `GeneralContractor`.** Es el subtipo válido
más cercano y hereda de `LocalBusiness`, que es lo que Google consume.

## JSON-LD requerido

El skill exige bastante más que el `FurnitureStore` mínimo que tenía
muebleria. Campos obligatorios: `name`, `telephone` (+595), `address`
con `addressCountry: "PY"` **y** `addressRegion` (departamento), `geo`,
`openingHoursSpecification`, `priceRange`, `areaServed`, `sameAs`
(Facebook/Instagram). Más un bloque `FAQPage` aparte.

```json
{
  "@context": "https://schema.org",
  "@type": "GeneralContractor",
  "name": "[NOMBRE REAL]",
  "url": "https://[dominio]",
  "telephone": "+5959XXXXXXXX",
  "priceRange": "Gs. ...",
  "areaServed": ["[ciudad]", "..."],
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "[ciudad]",
    "addressRegion": "[departamento]",
    "addressCountry": "PY"
  },
  "geo": { "@type": "GeoCoordinates", "latitude": "", "longitude": "" },
  "openingHoursSpecification": [],
  "sameAs": []
}
```

Ningún campo se rellena con datos inventados. Si falta un dato, se
omite el campo y se anota en la lista de placeholders.

## Keywords

Patrón paraguayo (ver `references/keywords-py.md`):

1. `[servicio] en [ciudad]` ← **el H1 del one-pager es este patrón**
2. `[servicio] cerca de mí`
3. `[servicio] [barrio]`
4. `precio [servicio] Paraguay` / `cuánto cuesta [servicio]` ← va al FAQ
5. `mejor [servicio] en [ciudad]`

Un keyword primario por página. H1 = keyword primario. Los H2 son
subtemas. La cobertura de zona se nombra explícita en texto plano.

**Regla de zonas:** sólo se crean páginas de zona para ciudades que el
taller atiende de verdad. Páginas doorway finas hunden el dominio
entero. Máximo 3–6 para un negocio de Gran Asunción.

## Qué NO trasladar de muebleria

El párrafo SEO de 150–250 palabras por categoría (ver `lib/categories.ts`)
era un patrón de **e-commerce**: tenía sentido con 8 categorías y 24
fichas de producto compitiendo por long-tail transaccional.

En un one-pager ese bloque de texto no va: las secciones son cortas y
la copy la fija el BUILD-SPEC frase por frase. La fórmula larga **sólo**
se recupera en LÄGE 2, dentro de las páginas `/servicios/[servicio]/`,
y sin inventar años, garantías ni cifras.

## `<head>` y metadata

- `<html lang="es-PY">`, og con `locale: es_PY`
- title `{Servicio} en {Ciudad} | {Marca}`
- description 150–160 caracteres con diferencial + zona
- canonical en cada página
- **demo:** `<meta name="robots" content="noindex,nofollow">` — se quita
  recién al lanzar en el dominio del cliente

## Off-site

Una vez publicado, usar el skill `gbp-optimizer`: categoría primaria en
español correcta, NAP idéntico al sitio, fotos semanales de trabajos
reales, pedido de reseñas por WhatsApp tras cada trabajo terminado.
Facebook e Instagram con NAP idéntico — en Paraguay pesan más que en
Suecia.
