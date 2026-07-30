# Plan — Carpintería (sitio HTML estático)

> **PRECEDENCIA — LEER PRIMERO.**
> El skill `paraguay-local-site` es la autoridad sobre estructura, diseño,
> técnica y QA. Cuando exista, `BUILD-SPEC.md` es la autoridad sobre esta
> obra en concreto. Este archivo y sus hermanos (`STRUCTURE.md`,
> `SEO-NOTES.md`, `CONTENT-GUIDE.md`) son **material de fondo**: aportan
> el ángulo de marca heredado de `muebleria`, nada más. **Donde estos
> documentos contradigan al skill o al BUILD-SPEC, gana el skill.**

## Estado actual

Repo vacío salvo estos documentos. **Todavía no se puede construir**:
falta el bloque de intake del skill (§0). Sin esos datos cualquier build
inventaría nombre, ciudad, número de WhatsApp, años y garantías — lo que
el skill prohíbe explícitamente (§5, anti-fabricación).

## Decisiones ya tomadas (Opus, LÄGE 0)

- **Stack:** HTML estático, un solo `index.html` con CSS inline y JS
  vanilla mínimo. Sin build, sin npm, sin Node. Deploy a Hostinger
  copiando archivos a `public_html/`.
- **Pista de diseño: PC — TALLER.** Es la asignación del skill para
  `carpintero` (ver `references/design-lib-py.md`, tabla por oficio).
  No se corre Claude Design: la pista ya existe y se copia literal.
- **Conversión: whatsapp-first.** Carpintería no es un oficio de
  urgencia; no aplica el modo llamada-first (ese es para cerrajería,
  destapes, urgencias 24h).
- **Schema JSON-LD: `GeneralContractor`.** Ver `SEO-NOTES.md` — no
  existe un tipo `Carpenter` en schema.org.

## Flujo de trabajo (modos del skill)

1. **LÄGE 0 — BUILD-SPEC** (Opus): se completa el intake, se fijan
   tokens de diseño, orden de secciones y **toda la copy literal**, y se
   escribe `BUILD-SPEC.md`. Ninguna línea puede quedar abierta a
   interpretación.
2. **Ejecución** (Sonnet): prompt único — *"Implementá BUILD-SPEC.md
   exacto. No te desvíes. Preguntá ante una duda en vez de adivinar."*
3. **LÄGE 2** (opcional, si el cliente aprueba): expansión a sitio
   completo reusando los mismos tokens. El diseño **nunca** cambia en
   läge 2.

## Qué se hereda de `muebleria` (y qué no)

**Se hereda** — únicamente tono y ángulo de venta, ver `CONTENT-GUIDE.md`:
transparencia de precio, taller local frente a cadena, contraste contra
el material barato, WhatsApp como canal real de venta.

**NO se hereda:**
- La arquitectura Next.js (rutas, componentes, SSG) — irrelevante aquí.
- Todo el e-commerce: carrito, checkout, Pagopar, webhooks, Google
  Sheets, R2, GoHighLevel. No hay backend en este proyecto.
- El catálogo de muebleria (roperos, comedores...). Carpintería tiene
  otros servicios y hay que levantarlos del cliente real.
- Cualquier dato concreto de muebleria: RUC, número de WhatsApp, datos
  bancarios, precios. **Nada de eso se copia** — pertenece a otro
  negocio.

## Bloqueantes antes de escribir BUILD-SPEC.md

- [ ] ¿Demo de prospecto o cliente real con datos?
- [ ] Nombre real del negocio
- [ ] Ciudad + departamento, y barrios/zonas que atiende de verdad
- [ ] Número de WhatsApp (formato `5959XXXXXXXX`)
- [ ] Servicios reales (3–6)
- [ ] ¿Hay fotos de trabajos? ¿Hay reseñas reales de Google?
- [ ] ¿Se muestran precios en Gs. o "presupuesto sin costo"?
- [ ] RUC / factura legal: ¿sí o se oculta la fila?
