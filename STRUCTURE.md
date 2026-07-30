# Estructura de sitio (adaptada de Next.js a HTML estático)

## Cómo estaba armado muebleria.com.py (Next.js)

```
app/
├── page.tsx                      # Home: hero, categorías, destacados, bloque diferenciador
├── (catalogo)/[categoria]/       # N landings SEO, una por categoría de producto
├── (catalogo)/producto/[slug]/   # Fichas de producto individuales (JSON-LD Product)
├── checkout/                     # (no aplica a Carpintería HTML estático)
├── nosotros/                     # Historia de marca y materiales
└── api/                          # (no aplica — sin backend)
```

## Equivalente recomendado para Carpintería (HTML estático)

**Modo 1 (one-pager, punto de partida):**

```
index.html          # Hero + servicios destacados + por qué elegirnos +
                     # galería de trabajos + WhatsApp CTA + footer con NAP
```

**Modo 2 (sitio completo, si el cliente aprueba expandir):**

```
/index.html
/nosotros.html                  # equivalente a app/nosotros — historia del
                                 # taller, materiales/técnicas, por qué local
/servicios/{servicio}.html       # una página por servicio, mismo patrón que
                                 # las landings de categoría de muebleria:
                                 # problema local → diferenciador → variantes
                                 # → precios/rango → CTA WhatsApp
/zonas/{ciudad}.html             # una página por zona de cobertura (si el
                                 # taller cubre varias ciudades/barrios)
/precios.html                    # rango de precios por tipo de trabajo
/galeria.html                    # fotos de trabajos terminados
/sitemap.xml
/robots.txt
```

## Componentes reutilizables (patrón, no código — HTML no tiene componentes)

- **Header**: logo, links a servicios, botón WhatsApp siempre visible.
- **Footer** (ver patrón real de `components/Footer.tsx` en muebleria):
  - Columna 1: nombre + descripción corta + RUC/dirección (NAP).
  - Columna 2: links a servicios/categorías.
  - Columna 3: contacto — WhatsApp con número real, link a "nosotros".
  - Línea final: copyright + "Hecho en Paraguay".
- **Bloque de confianza** (equivalente al "anti-humedad" de muebleria):
  un bloque que explica el problema del mercado (trabajo mal hecho,
  materiales baratos, changas sin garantía) y cómo el taller lo resuelve.
- **Botón/chip flotante de WhatsApp** con mensaje pre-armado según la
  página (`https://wa.me/<numero>?text=<mensaje codificado>`).

## Reglas de negocio a mantener

- Un solo precio o rango visible por servicio — sin "a consultar" cuando
  se pueda dar un rango honesto.
- WhatsApp como canal único de conversión, con mensaje pre-armado
  distinto por página/servicio (mismo patrón que `waLink()` en muebleria).
- No prometer nada (financiación, plazos, garantías) que no esté
  confirmado por el dueño del taller.
