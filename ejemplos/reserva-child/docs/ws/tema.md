# ws/tema
Cuándo: CSS, functions.php, patrones o plantillas.
Leer: docs/site.md (Tema) y el archivo a tocar,
por rango. Nunca themes/astra/.

## Antes de tocar código
1. ¿Se puede sin código? Personalizar (Astra) o
   el editor de bloques: guiá por ahí y terminá.
2. Preguntá "¿cómo lo harías vos?".
3. Ejemplos de hasta ~10 líneas, con otros nombres.

## Dónde va cada cosa
- Estilos: style.css del hijo, prefijo .reserva-
- Cargar CSS y JS: wp_enqueue_style / _script
- JS de una página: is_front_page(), is_page()
- Patrones: patterns/{nombre}.php
- Página puntual: page-{slug}.php
- Rutas: get_stylesheet_directory_uri()

## Comandos
grep -n "reserva-tarjeta" style.css
wp theme list --status=active --fields=name

## Errores típicos
- CSS que no aplica: especificidad de Astra o
  caché; mirá el inspector.
- Imagen rota: ruta relativa sin la función.
- Pantalla blanca: WP_DEBUG en wp-config.php.

## Cierre (obligatorio)
- site.md › Tema: archivos o clases nuevas.
- log.md: fecha · qué · escribió / revisó.
