# Plan — Carpintería (sitio HTML estático)

Base de conocimiento trasladada desde el repo hermano `muebleria`
(Next.js, tienda de muebles Paraguay) para construir Carpintería como
un sitio **HTML estático** en vez de Next.js/Node. Mismo mercado
(muebles/madera en Paraguay), misma lógica de negocio, distinta stack.

## Por qué HTML estático en vez de Node

- Sin servidor vivo que mantener, sin build de Next, deploy directo a
  Hostinger (o cualquier hosting) subiendo archivos.
- Ideal para un taller de carpintería: catálogo de servicios/productos
  a medida, no un carrito de compra complejo. El flujo real de venta
  es "mirá fotos → escribime por WhatsApp → cotizamos a medida", así
  que no hace falta checkout, pagos online ni base de datos.
- Usar el skill **paraguay-local-site** (modo 1: one-pager WhatsApp-first
  vendedora; modo 2: expansión a sitio de 6–12 páginas con servicios,
  zonas y precios) en vez de reconstruir la arquitectura Next.js.

## Qué se reutiliza de `muebleria`

1. **Tono y ángulo de copywriting** — ver `CONTENT-GUIDE.md`.
2. **Estructura de SEO/metadata** — ver `SEO-NOTES.md`.
3. **Arquitectura de páginas** (adaptada a HTML estático) — ver `STRUCTURE.md`.
4. **Reglas de negocio** que siguen aplicando:
   - WhatsApp como canal principal de contacto/venta (`wa.me` con
     mensaje pre-armado, ver `lib/whatsapp.ts` en muebleria).
   - Precios y costos de envío/armado siempre visibles, sin "consultar
     precio" ni letra chica.
   - Nunca prometer cuotas, financiación o beneficios que no estén
     confirmados por escrito con el proveedor/banco real.
   - Contacto directo (WhatsApp) en vez de tickets de soporte — refuerza
     la idea de "taller local, no cadena".

## Qué NO se traslada tal cual

- Todo lo específico de e-commerce de muebleria (carrito, checkout,
  Pagopar, webhooks, Google Sheets, R2, GoHighLevel) — no aplica a un
  sitio HTML estático sin backend. Si Carpintería más adelante quiere
  cotizador online o checkout, se evalúa aparte.
- El catálogo de productos de muebleria (roperos, comedores, etc.) no
  es el de Carpintería — hay que levantar el catálogo real del cliente
  (categorías de carpintería: muebles a medida, puertas, aberturas,
  decks, restauración, etc.) antes de escribir copy.

## Próximos pasos

1. Confirmar con el cliente: nombre real del negocio, ciudad/zona de
   Paraguay, número de WhatsApp, rubro exacto (carpintería general,
   muebles a medida, aberturas, ebanistería...), servicios/productos,
   fotos disponibles.
2. Ejecutar el skill `paraguay-local-site` modo 1 para generar el
   one-pager HTML vendedor.
3. Revisar con el cliente y, si aprueba, expandir a modo 2 (sitio
   completo) reusando el mismo diseño.
