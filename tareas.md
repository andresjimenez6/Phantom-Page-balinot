# 📋 Tareas — Refactorización Phantom Page

Seguimiento de los objetivos del proyecto de refactorización.  
**Estado**: ⏳ Pendiente de aprobación del plan de implementación.

---

## FASE 1 — Semántica HTML5 y Accesibilidad (a11y)

- [ ] Añadir `<title>` y `<meta description>` en todos los archivos
- [ ] Corregir estructura `<header>` en `smartwatches.html` (usa `<nav>` raíz)
- [ ] Envolver el top-bar de `landing.html` en estructura semántica
- [ ] Migrar `data-alt` → `alt` descriptivo en todas las imágenes
- [ ] Añadir `aria-label` en todos los botones de iconos (search, person, favorite, shopping_bag, menu, chevrons)
- [ ] Convertir `<span>` interactivos en `<button>` con `aria-label`
- [ ] Corregir jerarquía de headings: un solo `<h1>` por página
- [ ] Aplicar contenedor máximo `max-w-7xl mx-auto` donde corresponda

---

## FASE 2 — Tailwind CSS (Consistencia + Mobile-First)

- [ ] Reemplazar `font-['Noto_Serif']` → `font-headline` en todos los archivos
- [ ] Reemplazar `font-['Manrope']` → `font-body` / `font-label` en todos los archivos
- [ ] Reemplazar `font-noto` / `font-manrope` → `font-headline` / `font-body`
- [ ] Unificar colores: `border-yellow-700/50` → `border-secondary/50`
- [ ] Aplicar responsive mobile-first: `px-4 sm:px-6 lg:px-8 xl:px-12`
- [ ] Eliminar duplicación de `<link>` Material Symbols
- [ ] Estandarizar bloques `<style>` entre archivos

---

## FASE 3 — Vanilla JS (Intersection Observer + Modular)

- [ ] Crear función `initScrollAnimations()` con Intersection Observer
- [ ] Añadir clases CSS `.reveal` / `.reveal.active` para animaciones de scroll
- [ ] Cachear elementos DOM en constantes
- [ ] Implementar `initMobileMenu()` en `landing.html`
- [ ] Añadir clases `.reveal` a las secciones que deben animarse

---

## FASE 4 — Fetch API y Formularios

- [ ] Estructurar formularios con `<form>`, `id`, `required`, `type="email"`
- [ ] Implementar `handleFormSubmit()` con async/await
- [ ] Estado: Cargando → Deshabilitar botón + spinner
- [ ] Estado: Éxito → Mensaje verde de confirmación
- [ ] Estado: Error → Mensaje rojo con try/catch
- [ ] Validación HTML5 nativa

---

## Progreso General

| Fase | Estado |
|---|---|
| Fase 1 — Semántica y a11y | ⏳ Pendiente |
| Fase 2 — Tailwind CSS | ⏳ Pendiente |
| Fase 3 — Vanilla JS | ⏳ Pendiente |
| Fase 4 — Fetch API | ⏳ Pendiente |
