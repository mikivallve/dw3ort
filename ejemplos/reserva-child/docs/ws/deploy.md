# ws/deploy
Cuándo: subir o actualizar el sitio en Pantheon.
Leer: docs/site.md (En vivo). Nada más.

## Reglas
- search-replace siempre con --dry-run antes.
- Nunca subir *.sql al repo (está en .gitignore).
- Orden: código, base, imágenes.

## Pasos (los ejecuta la persona)
1. En el Site Shell, carpeta del tema:
   wp option get home                         # LOCAL
   wp search-replace LOCAL PANTHEON --all-tables --dry-run
   wp search-replace LOCAL PANTHEON --all-tables --export=reserva.sql
2. Código: en el wp-admin de Pantheon (modo SFTP) instalar Astra y los
   plugins y subir reserva-child.zip. En el panel: Commit.
3. Base: Dev › Database / Files › Import › reserva.sql.
4. Imágenes: wp-content/uploads en .zip › Import en Files.
5. Clear Caches y entrar con el usuario de Local.

## Chequeo
- Home, una entrada y Novedades cargan.
- Imágenes desde pantheonsite.io, no desde .local.
- Últimos avistamientos funciona (REST API).
- Si hay 404: Ajustes › Enlaces permanentes › Guardar.

## Cierre (obligatorio)
- site.md › En vivo: URL de Pantheon + fecha.
- log.md: "Deploy a Pantheon dev · ejecutó: …"
