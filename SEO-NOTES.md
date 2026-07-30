# Notas de SEO trasladadas de muebleria.com.py

## Metadata / `<head>`

- `title` con patrón `{Beneficio/diferenciador} | {Marca}`, ej:
  `"Comedores de madera resistentes a la humedad | Mueblería Paraguay"`.
  Para Carpintería: `"{Servicio} en {Ciudad} | {Marca Carpintería}"`.
- `description` de 150–160 caracteres: material/diferenciador + zona de
  entrega/cobertura. Ejemplo real:
  > "Comedores modernos en madera maciza, terciado fenólico y melamina RH.
  > Mesas y sillas que aguantan el clima paraguayo. Entrega en Asunción y
  > Gran Asunción."
- `lang="es-PY"`, `locale: es_PY` en Open Graph.
- Canonical (`alternates.canonical` en Next → `<link rel="canonical">`
  en HTML estático) en cada página.
- `metadataBase` / URL absoluta del sitio para que OG/canonical resuelvan
  bien: usar la URL real del dominio final de Carpintería.

## JSON-LD (structured data)

Muebleria usa `@type: FurnitureStore` en el home. Para un taller de
carpintería corresponde `@type: "HomeAndConstructionBusiness"` o más
específico `"Carpenter"` (schema.org tiene el tipo `Carpenter` dentro de
`HomeAndConstructionBusiness`). Plantilla a adaptar:

```json
{
  "@context": "https://schema.org",
  "@type": "Carpenter",
  "name": "NOMBRE DEL TALLER",
  "url": "https://dominio.com.py",
  "image": "https://dominio.com.py/images/og-default.jpg",
  "telephone": "+595...",
  "areaServed": "Asunción y Gran Asunción",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "CIUDAD",
    "addressCountry": "PY"
  }
}
```

## Sitemap y robots

- `sitemap.xml` con una entrada por página real (home, nosotros/taller,
  cada página de servicio, cada zona si se hace modo 2). `changeFrequency`
  `weekly` para páginas de servicio/producto, `monthly` para institucionales.
- `robots.txt`: `allow: /`, `disallow` cualquier ruta de backend que no
  exista en HTML estático (probablemente ninguna — no hay `/checkout`
  ni `/api/` en este proyecto).

## Estrategia de contenido SEO (por qué funciona en Paraguay)

- Cada página de categoría/servicio no es solo una lista de productos:
  tiene un párrafo largo (150–250 palabras) que:
  1. Nombra el problema real y local (humedad, clima, uso familiar
     paraguayo — para Carpintería: durabilidad de la madera, plagas,
     humedad, mano de obra local vs. importado).
  2. Contrasta el producto propio contra la alternativa mala/genérica
     del mercado (en muebleria: MDP común de las cadenas grandes).
  3. Explica el material/técnica usada y por qué es superior.
  4. Da variantes/opciones concretas (tamaños, gamas de precio).
  5. Cierra con llamada a WhatsApp.
- Esto genera texto único, largo y geolocalizado por página — bueno
  para long-tail keywords tipo "{producto/servicio} + {ciudad/Paraguay}".
- Cobertura de zona siempre explícita: "Entrega/atención en Asunción y
  Gran Asunción" (o la zona real del cliente) repetida en cada página,
  clave para SEO local.

## Google Business Profile

Para el off-site, usar el skill **gbp-optimizer** una vez el sitio esté
publicado: categoría correcta (ej. "Carpenter"/"Carpintería"), NAP
consistente con el sitio, fotos de trabajos reales, posts, reseñas.
