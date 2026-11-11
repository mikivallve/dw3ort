# ws/contenido
Cuándo: crear o editar páginas, entradas, categorías o menús.
Leer: docs/site.md (Contenido). Nada del tema.

## Pasos
1. Confirmá con la persona qué quiere publicar y en qué categoría.
2. Si conviene el panel (texto largo, imágenes), guiala por el panel.
   Si es repetitivo, pasale el comando; lo corre en el Site Shell.
3. Pedile solo el ID que devuelve.
4. Queda en borrador: que la revise y la publique.
5. Que verifique en el navegador (no leas HTML).

## Comandos
wp term create category "Flora y fauna" --slug=flora-y-fauna
wp post create --post_title="Carpincho" --post_category=flora-y-fauna --porcelain
wp post list --fields=ID,post_title,post_status --format=table | head -20
wp menu item add-post principal 42

## Ojo
- Fichas de especie: insertar el patrón "Ficha de especie", no armarla a mano.
- Datos de especies: del SNAP o del sitio oficial. Nada inventado.

## Cierre (obligatorio)
- site.md: páginas o categorías nuevas.
- log.md: fecha · qué · quién lo ejecutó.
