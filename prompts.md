# 📝 Registro de Prompts — Proyecto Phantom / Balinot

Historial completo de todos los prompts enviados a la IA durante el desarrollo de este proyecto, organizados cronológicamente por conversación.

---

## Conversación 1 — Creating Roselin-like Page
**Fecha:** 20 de marzo 2026  
**ID:** `02be20e3-2cd9-4e04-9432-aa769f6d3266`

> **Prompt:**  
> Crear una página web similar a Roselin.es usando Stitch, con requisitos técnicos detallados que cubren arquitectura HTML, diseño con Tailwind CSS, interactividad con Vanilla JS, y operaciones asíncronas con AJAX/Fetch API. El objetivo era generar un prompt para la creación de esta página respetando todos los parámetros especificados.

*(No se conservó el texto completo del prompt en los logs)*

---

## Conversación 2 — Modularizing HTML Code
**Fecha:** 20 de marzo 2026  
**ID:** `efdac5dd-e6b0-4216-8856-221b8d8bcdf4`

> **Prompt:**  
> Refactorizar el archivo `joyeria.html` segmentando su código en categorías modulares y reutilizables. Separar HTML, CSS y JavaScript en archivos distintos dentro de una carpeta `/assets` y organizar las diferentes secciones del HTML para mejor reutilización. Se pidió un plan de modularización, no la ejecución directa.

*(No se conservó el texto completo del prompt en los logs)*

---

## Conversación 3 — Converting JS to PHP
**Fecha:** 20 de marzo 2026  
**ID:** `c52af9f0-7576-47ea-8cdf-e00cff274e6e`

> **Prompt:**  
> Convertir código JavaScript existente a PHP para ser usado con XAMPP como servidor local, incluyendo una explicación de los cambios realizados.

*(No se conservó el texto completo del prompt en los logs)*

---

## Conversación 4 — Refactoring HTML To WordPress Theme
**Fecha:** 10 de abril 2026  
**ID:** `cf1c3fe0-2c16-4097-a3f6-bd24d08c3809`

> **Prompt:**  
> Refactorizar componentes HTML existentes en una arquitectura de tema WordPress modular y profesional. Reorganizar el codebase siguiendo las guías estructurales definidas en `templates/ejemplo-arquitectura-tema.md`, asegurando máxima modularidad, mantenibilidad y adherencia a los estándares de desarrollo WordPress.

*(No se conservó el texto completo del prompt en los logs, pero el plan generado incluyó:)*

- Crear `style.css`, `functions.php`, `inc/setup.php`, `inc/assets.php`, `inc/template-tags.php`
- Migrar header/footer a la estructura nativa de WP (`wp_head()`, `wp_footer()`, `get_header()`, `get_footer()`)
- Modularizar la página de inicio en `template-parts/home/` (hero, best-sellers, values, testimonials, newsletter, contact)
- Convertir páginas aisladas en plantillas de WordPress (`page-joyeria.php`, `page-relojeria.php`, etc.)

---

## Conversación 5 — Modularizing Joyas Page Template
**Fecha:** 10 de abril 2026  
**ID:** `068ad6c3-0fa9-477a-8990-fbd538616baf`

> **Prompt:**  
> Completar el refactoring del tema Phantom en una arquitectura WordPress modular. Finalizar la unificación de estilos, fuentes y configuraciones de Tailwind en todo el tema para asegurar consistencia y rendimiento. Limpiar todas las plantillas de página de código redundante y conectarlas mediante enlaces dinámicos de WordPress.

**Acciones del plan generado:**
- Centralizar fuentes en `assets.php` (Manrope + Noto Serif extendida)
- Centralizar configuración Tailwind en `assets/js/tailwind-config.js`
- Centralizar clases CSS utilitarias (`.sharp-edges`, `.text-editorial-spacing`, `.vertical-text`, scrollbars)
- Limpiar `page-joyas.php`, `page-novedades.php`, `page-smartwatches.php` de código `<head>` redundante

---

## Conversación 6 — Implementing WooCommerce Theme Structure (Intento 1)
**Fecha:** 23 de abril 2026  
**ID:** `7edee688-586b-4340-842b-74bf2a754af4`

> **Prompt:**  
> Implementar estructura de tema WooCommerce.

*(Conversación corta sin logs detallados, precursora de la conversación 7)*

---

## Conversación 7 — Implementing WooCommerce Theme Structure (Completa)
**Fecha:** 23 de abril 2026  
**ID:** `1ecdb7ac-85fe-4b30-8536-c188c3d0a1d4`

> **Prompt:**  
> Implementing WooCommerce Theme Structure  
> prompt → Teniendo en cuenta que he creado las siguientes categorías en el panel de wordpress.
> 
> listado de categorías  
> listado de atributos  
> listado de productos
> 
> (ID, Tipo, SKU, "GTIN, UPC, EAN o ISBN", Nombre, Publicado, "¿Está destacado?", "Visibilidad en el catálogo", "Descripción corta", Descripción, "Día en que empieza el precio rebajado", "Día en que termina el precio rebajado", "Estado del impuesto", "Clase de impuesto", ¿Existencias?, Inventario, "Cantidad de bajo inventario", "¿Permitir reservas de productos agotados?", "¿Vendido individualmente?", "Peso (kg)", "Longitud (cm)", "Anchura (cm)", "Altura (cm)", "¿Permitir valoraciones de clientes?", "Nota de compra", "Precio rebajado", "Precio normal", Categorías, Etiquetas, "Clase de envío", Imágenes, "Límite de descargas", "Días de caducidad de la descarga", Superior, "Productos agrupados", "Ventas dirigidas", "Ventas cruzadas", "URL externa", "Texto del botón", Posición, Marcas)
> 
> *(Incluía un CSV completo con datos de productos importados)*

**Prompt de ejecución:**
> Ahora necesito que ejecutes el plan establecido, tienes luz verde.

**Resultado:** 11 archivos nuevos creados y 2 modificados:
- `woocommerce/` → archive-product.php, content-product.php, single-product.php, content-single-product.php
- `inc/woocommerce/` → hooks.php, template-tags.php
- `template-parts/woocommerce/` → archive-header.php, archive-filters.php, product-card.php
- `assets/css/woocommerce.css`, `assets/js/woocommerce.js`

---

## Conversación 8 — Managing Chat Conversation History
**Fecha:** 8 de mayo 2026  
**ID:** `7a09f4ee-b204-4705-ab06-cc7f8ac735cf`

> **Prompt:**  
> ¿Dónde puedo ver el registro de todos los prompts que te he pasado?

**Respuesta:** Se indicó la ubicación de los logs en:
```
C:\Users\EAG\.gemini\antigravity\brain\<conversation-id>\.system_generated\logs\overview.txt
```

---

## Conversación 9 — Optimizing Phantom Web Architecture
**Fecha:** 8 de mayo 2026  
**ID:** `a8bfcaf4-cb80-4e87-a166-fae8f00b5461`

> **Prompt (completo):**  
> 1. **Arquitectura y Semántica (HTML5)**  
> Regla estricta: Todo el contenido debe ir envuelto en etiquetas semánticas (`<header>`, `<main>`, `<section>`, `<article>`, `<footer>`).  
> Accesibilidad (a11y): Todas las imágenes deben tener el atributo `alt`. Los botones y enlaces deben tener texto descriptivo o `aria-labels` si son solo iconos. El contraste de colores debe pasar el estándar WCAG AA.  
> Estructura de Bloques: Mantén un contenedor máximo (ej. `max-w-7xl mx-auto`) para centrar el contenido en pantallas grandes, preservando márgenes laterales (ej. `px-4 sm:px-6 lg:px-8`).
>
> 2. **Sistema de Diseño (Tailwind CSS)**  
> Mobile-First: Escribe siempre primero las clases para móvil y luego usa los modificadores `md:`, `lg:` para escalar hacia escritorio.  
> Consistencia: No inventes colores arbitrarios. Usa la paleta predefinida de Tailwind o extiende el archivo `tailwind.config.js` si necesitamos colores "Boutique" específicos (ej. `bg-boutique-dark`, `text-boutique-accent`).
>
> *(Texto completo truncado en los logs, pero el plan generado cubre 4 fases completas de refactorización para los 5 archivos HTML del proyecto Phantom-Page-balinot)*

**Archivos afectados:**
- `landing.html` (500 líneas, 34 KB)
- `joyas.html` (455 líneas, 31 KB)
- `smartwatches.html` (435 líneas, 30 KB)
- `Regalos.html` (334 líneas, 22 KB)
- `novedades.html` (362 líneas, 26 KB)

**4 Fases del plan:**
1. Semántica HTML5 y Accesibilidad (a11y)
2. Sistema de Diseño Tailwind CSS (Consistencia + Mobile-First)
3. Interactividad con Vanilla JS (Intersection Observer + Modular)
4. Asincronía y Fetch API (Formularios)

---

## Conversación 10 — Registro de Prompts (Actual)
**Fecha:** 8 de mayo 2026  
**ID:** `458f8392-ba52-42fd-8ed2-1cc5437a3540`

> **Prompt:**  
> Necesito que me muestres en un archivo nuevo llamado `prompts.md` todos los prompts usados en este proyecto.

---

## 📊 Resumen

| # | Conversación | Fecha | Tema Principal |
|---|---|---|---|
| 1 | Creating Roselin-like Page | 20/03/2026 | Generación de página tipo Roselin.es |
| 2 | Modularizing HTML Code | 20/03/2026 | Plan de modularización de `joyeria.html` |
| 3 | Converting JS to PHP | 20/03/2026 | Conversión JS → PHP para XAMPP |
| 4 | Refactoring HTML To WordPress Theme | 10/04/2026 | Arquitectura de tema WordPress |
| 5 | Modularizing Joyas Page Template | 10/04/2026 | Unificación de estilos y Tailwind |
| 6 | WooCommerce Structure (Intento 1) | 23/04/2026 | WooCommerce (preliminar) |
| 7 | WooCommerce Structure (Completa) | 23/04/2026 | Implementación completa WooCommerce |
| 8 | Chat History Location | 08/05/2026 | Ubicación de logs de conversación |
| 9 | Optimizing Phantom Web Architecture | 08/05/2026 | Refactorización integral HTML5/CSS/JS |
| 10 | Registro de Prompts | 08/05/2026 | Este archivo |
