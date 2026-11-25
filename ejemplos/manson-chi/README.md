# De HTML a WordPress con bloques · Manson & Chi

Tres páginas nuevas para el sitio del simulacro (Manson & Chi Dentistry). Es la misma tarea que el bloque E del parcial: la maqueta viene en HTML y hay que pasarla a WordPress de forma que la clínica pueda cambiar textos y fotos desde el panel, sin tocar código.

**La plantilla pone el marco y el contenido se arma con bloques.** El HTML de la maqueta no se pega en la plantilla.

## Antes de empezar

- El sitio del simulacro importado en Local. El tema activo es **MDC** (`pfdm-cpi-cp`), un tema hijo de `pfdm-theme`.
- Bajá esta carpeta (`ejemplos/manson-chi/`): cada ejercicio trae su maqueta (`.html` y `.css`), y las fotos están en `img/`.
- Abrí la maqueta en el navegador y miralá con DevTools: lo que importa es el `<main>` y las clases de cada elemento.

## La receta (vale para los tres)

1. **Plantilla.** Creá `page-{slug}.php` en `wp-content/themes/pfdm-cpi-cp/`:
   ```php
   <?php get_header(); ?>

   <main class="formularios">
       <?php while ( have_posts() ) : the_post(); ?>
           <?php the_content(); ?>
       <?php endwhile; ?>
   </main>

   <?php get_footer(); ?>
   ```
   La clase del `<main>` es la de la maqueta: cambia en cada ejercicio.
2. **Página.** Creala con el slug exacto (si queda `patient-forms-2`, WordPress no usa tu plantilla).
3. **Bloques.** Armá con bloques todo lo que está dentro del `<main>` de la maqueta, con los textos tal cual.

   | En la maqueta | Bloque |
   | --- | --- |
   | `<div>` con cosas adentro | Grupo |
   | `<figure>` con una imagen | Imagen (subida a Medios, con su texto alternativo) |
   | `<h1>`, `<h2>`, `<h3>` | Título, con su nivel |
   | `<p>` | Párrafo |
   | `<ul>` u `<ol>` | Lista |
   | `<figure>` con una tabla | Tabla |
   | `<details>` con `<summary>` | Detalles |
   | `<div>` con un enlace adentro (`...-boton`) | Botón, dentro de un bloque Botones |
   | Foto y texto en dos mitades | Medios y texto |

4. **Clases.** Cada elemento que tiene clase en la maqueta lleva la misma clase en su bloque: *Avanzado › Clases CSS adicionales*. Si un elemento tiene dos clases, van las dos separadas por un espacio. Un `id` va en *Avanzado › Ancla HTML*.
5. **Estilos.** Copiá **solo** la sección "Página …" del CSS de la maqueta al final de `custom.css` del tema hijo. En este tema el `style.css` del hijo no se carga: comprobalo en DevTools (en el `<head>` o en la pestaña Network) antes de creerlo.
6. **Revisá.** Poné la maqueta y tu página lado a lado. Después recorré el resto del sitio: se tiene que ver igual que antes.

## Los ejercicios

| # | Maqueta | Slug | Clase del `<main>` | Qué suma | Tiempo |
| --- | --- | --- | --- | --- | --- |
| 1 | `1-patient-forms/` | `patient-forms` | `formularios` | Grupo, Título, Párrafo, Imagen, Lista y Botón | 20' |
| 2 | `2-office-tour/` | `office-tour` | `oficina` | Tarjetas (Grupos o Columnas) y Medios y texto | 30' |
| 3 | `3-visit-us/` | `visit-us` | `ubicacion` | Tabla, Detalles, Ancla HTML y dos botones juntos | 40' |

**1 · Patient Forms.** La raya marrón debajo del título la pone el CSS: no agregues un Separador. La caja verde (`formularios-caja`) va dentro del grupo `formularios-cuerpo`, al lado de la imagen.

**2 · Office Tour.** Las tres tarjetas son tres Grupos `oficina-tarjeta` dentro de un Grupo `oficina-tarjetas` (con Columnas también sale). La parte de abajo es un solo bloque **Medios y texto** con la clase `oficina-destacado`; el título, el párrafo y el botón van en su lado de texto.

**3 · Visit Us.** "Book your visit" lleva a `#turnos`: el grupo del final lleva el ancla `turnos`. Cada pregunta es un bloque Detalles con la clase `ubicacion-pregunta`. En la dirección, el salto de línea es Mayús + Enter. Los botones claros llevan dos clases: `ubicacion-boton ubicacion-boton-claro`.

## Cómo saber si está bien

- Se ve como la maqueta, en pantalla grande y en el celular (DevTools, modo responsive).
- Se edita desde el panel: cambiá un texto en el editor y fijate que cambie en el sitio.
- No hay ningún bloque *HTML personalizado* con código de la maqueta adentro.
- El resto del sitio se ve igual que antes.
- **Si una sección no toma los estilos,** buscá su clase con DevTools en el HTML de tu página: casi siempre falta, está mal escrita o quedó en otro bloque.

Con IA, en modo tutor: que te explique qué bloque corresponde o por qué una clase no aplica. Los bloques los armás vos.
