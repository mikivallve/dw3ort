# Notas de orador

Las notas que se ven con la tecla **S** en la presentación, en el orden del deck. Salen de las slides (`src/*.html`); si cambiás una nota, volvé a generar este archivo.

## Clase 10

- **Agenda** · Taller de 3 horas (`wp-2.0`)
  Total 180 min. Avisar que es taller: se hace todo en la máquina a medida que avanzamos, sobre el sitio de la reserva que trajeron de tarea.
- **CMS vs. sitio estático** · Bloque 1 (`wp-2.1`)
  5 min. Conectar con lo que ya saben: el HTML que el navegador recibe es el mismo; lo que cambia es quién lo arma.
- **La tarea** · Bloque 1 · Punto de partida (`wp-2.2`)
  10 min. No esperar a los del plan B: que lo hagan en paralelo con los ajustes. Mostrar "Go to site folder" (app/public) en Local porque lo usamos en el bloque 3 y en la tarea.
- **La vida real** · Bloque 1 · Ajustes iniciales (`wp-2.3`)
  Parte de los 15 min de saneamiento. Probar el permalink abriendo una página antes y después.
- **Fuera el spam** · Bloque 1 · Ajustes iniciales (`wp-2.4`)
  Cerrar bloque 1 (min 30). Si alguien necesita comentarios en un proyecto, se habilitan entrada por entrada.
- **Páginas vs. Entradas** · Bloque 2 (`wp-2.5`)
  15 min. Error clásico: hacer cada novedad como página, o la página de Contacto como entrada.
- **Taxonomías** · Bloque 2 (`wp-2.6`)
  15 min. Tip: renombrar "Sin categoría" en vez de dejarla.
- **El Loop** · Bloque 2 (`wp-2.7`)
  20 min. La URL decide la consulta: /contacto/ trae 1 página, /category/noticias/ trae N entradas. El mismo Loop sirve para las dos.
- **Manos a la obra** · Bloque 2 · Ejercicio (`wp-2.8`)
  10 min. Cierra el bloque 2 (min 90). Los que terminan antes: agregar etiquetas y ver /tag/&lt;slug&gt;/.

## Clase 11

- **Agenda** · Taller de 3 horas (`agentes-1.0`)
  Total 160 min + 20 de margen. La idea fuerza: el agente es un compañero que sabe mucho pero no conoce su proyecto; la documentación es cómo se lo presentan, y tiene que ser corta. El ejercicio de armar el sistema queda opcional, para casa. El bloque 4 es el bloque 3 de la clase 10, que no llegamos a dar.
- **El agente arranca de cero** · Bloque 1 (`agentes-1.1`)
  20 min. Si usan Claude Code, mostrar /context antes y después de armar el sistema: es la forma más concreta de ver el gasto.
- **La estructura** · Bloque 2 (`agentes-1.2`)
  Que creen la carpeta docs/ y los archivos vacíos ahora. Los llenamos en los próximos slides.
- **AGENTS.md: el índice** · Bloque 2 (`agentes-1.3`)
  Ustedes le hablan normal ("quiero sumar 2 especies"); la tabla es la que traduce eso a qué archivo leer.
- **No quemar tokens** · Bloque 2 · Reglas (`agentes-1.4`)
  Estas reglas van en AGENTS.md porque aplican a todas las tareas. Pegar el bloque de la derecha tal cual.
- **Modo tutor: el agente guía** · Bloque 2 · Reglas (`agentes-1.5`)
  Es el slide más importante: con esto el agente sube su nivel en vez de reemplazarlos. Es el mismo modo tutor que trae el AGENTS.md del parcial: que lo practiquen ahora.
- **Tutor en el aula, libre en casa** · Bloque 2 · Por qué (`agentes-ia-porque`)
  Analogía de la calculadora: primero se aprende a hacer la cuenta, después la calculadora es libre, y justamente porque sabés hacer la cuenta te das cuenta si el resultado no tiene sentido. El modo tutor no es desconfianza: es la forma de que la IA los haga mejores y no los reemplace. En las tareas la IA es libre, pero se pide documentar cómo la usaron (IA.md, AGENTS.md). El simulacro no: es un ensayo del parcial, así que va en modo tutor; después pueden revisarlo con la IA libre.
- **site.md: lo básico** · Bloque 2 (`agentes-1.6`)
  10 min para que escriban el suyo. Muchos datos los sacan con: wp option get home, wp theme list --status=active --fields=name, wp term list category --fields=slug.
- **Anatomía de un workstream** · Bloque 3 (`agentes-1.7`)
  Mismo molde para tema.md y deploy.md. Los comandos van probados: un comando que falla hace que el agente explore, y eso es lo que queremos evitar.
- **wp-cli en Local** · Bloque 3 · Práctica guiada (`agentes-1.8`)
  Ojo con db export: el .sql queda en la carpeta del tema, así que *.sql tiene que estar en el .gitignore antes del primer commit.
- **Cerrar = documentar** · Bloque 3 (`agentes-1.9`)
  La próxima sesión arranca leyendo esto: el agente sabe dónde quedaron sin explorar. Si un comando del workstream estaba mal, se corrige ahí: la doc mejora con el uso.
- **AGENTS.md de la reserva** · Bloque 3 · Ejemplo completo (`agentes-kit-1`)
  Es lo que armamos por partes en los slides anteriores, ensamblado. Que lo copien del repo y lo adapten a su reserva: cambiar nombre, Local y workstreams; las reglas quedan igual.
- **Un workstream de código** · Bloque 3 · Ejemplo completo (`agentes-kit-2`)
  contenido.md y deploy.md ya los vimos; este es el que más ayuda en el día a día porque frena al agente antes de escribir código que se resolvía en Personalizar.
- **Anatomía de un tema clásico** · Bloque 4 (`wp-2.9`)
  20 min. Abrir la carpeta del sitio de la reserva en VS Code desde Local (app/public/wp-content/themes/astra). No editar Astra directo: se pierde al actualizar (para eso existen los temas hijo).
- **Maquetar con Gutenberg** · Bloque 4 (`wp-2.10`)
  Parte de los 30 min de Gutenberg. La Vista de lista es clave para el troubleshooting de columnas del final.
- **La home de la reserva** · Bloque 4 · Práctica guiada (`wp-2.11`)
  Hacerlo en vivo sobre la home del starter template; la portada estática ya la configuró el template (Ajustes > Lectura). Si el template es de Elementor, hacerlo en una página nueva con Gutenberg.
- **IA como copiloto** · Bloque 4 (`wp-2.12`)
  Parte de los 25 min de IA. Comparar resultados entre dos alumnos con distinta reserva. Pedir que marquen un dato que la IA haya inventado.
- **IA para el CSS que falta** · Bloque 4 (`wp-2.13`)
  Cierra el bloque 4 (min 160). Modo tutor: la IA no escribe el CSS, lo revisa. Si a alguien le da el código igual, mirar si cargó las reglas del modo tutor en su AGENTS.md.
- **Armar el sistema** · Opcional (`agentes-1.10`)
  Pasar por los puestos mirando una sola cosa: ¿el agente les está pasando los comandos o los está corriendo él? Si los corre él, falta la regla de modo tutor o está mal escrita.

## Clase 12

- **Agenda** · Taller de 3 horas (`parcial-1.0`)
  Total 160 min, con 20 de margen para el arranque y la pausa. Lo primero, antes de saludar: que arranquen la descarga del zip del simulacro (300 MB por alumno en el mismo wifi; si no, se come el bloque 4). Lo importan en Local en la pausa. Si el wifi no da, pasarlo por pendrive. Los bloques 1 y 2 van cortos (15' y 10') para que el simulacro tenga 60'. El bloque 1 repasa las tareas de la semana (reserva y Arrocera Fantasía): cubren media parte de panel del parcial. El panel de memoria y DevTools pasaron a la clase 13, como práctica. El deploy a Pantheon no entra en el parcial: sus slides quedan al final, de referencia, pero no son una tarea. Las Tareas 1 y 2 de la reserva (tema y reserva viva) siguen opcionales, al final de la clase 13.
- **Puesta en común** · Bloque 1 (`wp-2.14`)
  15 min. 2 o 3 alumnos comparten pantalla (uno con la reserva, uno con las recetas). Preguntar antes de mostrar cada fragmento. Rol de Marta y Raúl es casi la pregunta 3 del teórico: no decirlo, pero insistir en Editor vs. Autor. La 404.php es el puente al bloque 3. Si alguien tiene 404 en todo: Ajustes › Enlaces permanentes › Guardar.
- **Cómo es el parcial** · Bloque 2 · Formato (`parcial-1.1`)
  No adelantar el caso. Sí dejar claro el formato: van a recibir un sitio ajeno con cosas mal hechas, no van a construir uno de cero. No hay que redactar: los textos vienen dados; se evalúa cargarlos bien.
- **Modo tutor: qué pasa si…** · Bloque 2 · Reglas (`parcial-1.7`)
  5 min. Leer la tabla en voz alta. La regla dura es solo para la trampa obvia: que no lleguen con miedo de equivocarse. En el simulacro van a ver el pie del panel; quien quiera ver la bitácora la abre en el Site Shell con wp eval 'parcial_bitacora_mostrar();'.
- **Cómo usar las 3 horas** · Bloque 2 · Estrategia (`parcial-1.2`)
  El teórico va adentro de las 3 horas, al principio. Insistir en el minuto 20–35: el error más caro de 2025 fue empezar a cambiar sin haber recorrido el sitio. Recordar que suma 55 sobre 50: trabarse en un punto no es perder el parcial. El panel va antes que el HTML → WordPress a propósito: son puntos seguros y rápidos, y si E se alarga no se pierden. E da puntaje parcial.
- **¿Qué plantilla usa WordPress?** · Bloque 3 · Jerarquía (`parcial-2.1`)
  Pregunta disparadora: "si creo page-contacto.php, ¿qué pasa con /nosotros?". Nada: sigue usando page.php. Esa es la idea para pasar UNA página. Las filas de etiqueta y 404 conectan con la tarea: el menú a /tag/raro/ funciona sin tag.php porque cae en archive.php o index.php.
- **De un HTML a page-{slug}.php + bloques** · Bloque 3 · Receta (`parcial-2.2`)
  Mostrarlo en vivo con el ejercicio 1 de Manson & Chi (ejemplos/manson-chi). Remarcar que no hace falta Template Name: el nombre del archivo ya alcanza. La idea central, que es la pregunta 5 del teórico: si el HTML se pega en la plantilla, la página se ve pero el cliente no puede cambiar un precio ni una foto sin tocar código. Mostrar dónde está "Clases CSS adicionales" (barra lateral › Avanzado) y que en un elemento con dos clases van las dos separadas por un espacio.
- **Lo que suele salir mal** · Bloque 3 · Trampas (`parcial-2.3`)
  WordPress mete el contenido de cada Grupo dentro de un div propio (wp-block-group__inner-container) cuando el tema no tiene theme.json. El CSS de las maquetas ya lo neutraliza con display: contents: que no borren esa regla. En el tema de Manson & Chi, además, los botones y Medios y texto tienen reglas del tema que les ganan; el CSS de los ejercicios ya trae el selector que les gana, con un comentario.
- **Manos a la obra** · Bloque 3 · Práctica (`parcial-2.4`)
  Los que terminan siguen con el ejercicio 2. En este tema el style.css del hijo no se carga (functions.php encola custom.css): que lo descubran con DevTools mirando el head. La solución en bloques de los tres ejercicios está en el repo del parcial, docente/ejercicios-manson-chi/.
- **Parcial 2025** · Bloque 4 · Simulacro (`parcial-1.5`)
  Lo importante de arrancar en clase: que todos logren importar el zip en Local antes de irse. Si alguien no puede bajarlo, pasarlo por pendrive. Si la descarga se hizo al entrar y la importación en la pausa, con 60' en clase la mayoría termina los ajustes y la parte A acá. Lo que se suma del parcial 2026 no está en la letra 2025: ajustes (5 pts, ya vistos en wp-2.3 y wp-2.8), usuarios con Atribuir (4) y la entrada completa (6). Así llegan al sprint del 01/12 habiéndolo hecho una vez. Los zips entregados se pasan por corregir.py --config simulacro-2025 antes del 01/12. Ojo: el WordPress del simulacro es viejo; como el 7 se saltea, no hace falta Duplicate Post.
- **Tres páginas con bloques** · Para casa · Tarea (`parcial-1.8`)
  Se suma al simulacro: los dos van en el mismo zip que entregan antes del lunes 30/11, así corregir.py y la revisión cubren las dos cosas. El README de ejemplos/manson-chi tiene la receta, la tabla de etiqueta → bloque y las trampas de cada ejercicio.
- **Dónde, gratis** · Para casa · Opcional (`deploy-1.0`)
  Datos de noviembre 2026: Pantheon Silver $0 con 2 sandboxes; para conectar dominio hace falta un plan pago. InstaWP pide tarjeta. Revisar antes de cada semestre.
- **Crear el sandbox** · Para casa · Pantheon (`deploy-1.1`)
  Para casa, no entra en el parcial. Crear la cuenta lleva unos minutos (llegan mails de confirmación). Con 2 sandboxes por cuenta, que no hagan pruebas descartables.
- **De Local a Pantheon** · Para casa · Paso a paso (`deploy-1.2`)
  El orden importa: código primero, después la base (que espera que el tema exista), después uploads. La base viaja con los usuarios: el admin y la contraseña de Local pasan a ser los de Pantheon, así que nada de admin/admin.
- **Chequeo y workstream** · Para casa (`deploy-1.3`)
  Cierra el deploy. La próxima vez que quieran subir cambios, le piden al agente "subí a Pantheon" y el workstream ya tiene los pasos que hoy probamos.

## Clase 13

- **Agenda** · Taller de 3 horas (`parcial-2.0`)
  Total 155 min + 15 de margen; las consultas son el colchón. Al final del deck están las Tareas 1 y 2, opcionales, para después del parcial. Empezar preguntando qué les costó del simulacro y anotarlo en el pizarrón para el bloque 4.
- **Qué miramos** · Bloque 1 · Corrección (`parcial-1.6`)
  Proyectar el sitio de un voluntario y corregir juntos 3 o 4 puntos. Juntar las dudas para el repaso del bloque 4.
- **Una página, con el reloj del parcial** · Bloque 2 · Contrarreloj (`parcial-2.8`)
  Es la parte del parcial con código (15 de 45 puntos del práctico). Antes de arrancar, borrar la página y la plantilla que hicieron en casa (o usar otro slug, como visit-us-2 con su page-visit-us-2.php). El que no llega en 30', sabe qué repasar.
- **Cazar un error de CSS** · Bloque 3 · DevTools (`parcial-1.4`)
  10 minutos, abre el sprint de panel (clase 13). En parejas, en el sitio del simulacro: cada uno agrega una regla rota en CSS adicional del sitio del otro (sin decir dónde) y el otro la caza con DevTools y la arregla donde nace.
- **Lo que el simulacro no pide** · Bloque 3 · Sprint de panel (`parcial-2.9`)
  Después de los 10' de DevTools. Que lo hagan solos y después mostrar en pantalla los dos que más fallan: borrar con "Atribuir todo el contenido a" y la categoría por defecto en Escritura. Para el logo sirve cualquier imagen. Cerrar con la slide "Dónde está cada cosa" como repaso.
- **Dónde está cada cosa** · Bloque 3 · El panel (`parcial-1.3`)
  Cierre del sprint de panel (clase 13). Preguntar antes de mostrar cada fila: "¿dónde lo harían?". Las que más fallan: categoría por defecto (está en Escritura, no en Categorías) y borrar un usuario sin perder su contenido.
- **Preguntas tipo (I)** · Bloque 4 · Repaso (`parcial-2.5`)
  Que respondan en papel 2 minutos por pregunta, sin dispositivos, como en el parcial. Después mostrar la respuesta.
- **Preguntas tipo (II)** · Bloque 4 · Repaso (`parcial-2.6`)
  Cerrar el bloque con las dudas que juntamos al corregir el simulacro.
- **El día del parcial** · Bloque 5 · Checklist (`parcial-2.7`)
  Si el export de Local falla en el laboratorio: comprimir la carpeta del sitio y además exportar la base desde Database › Adminer. Avisar que existe el plan B, pero que no cuenten con él.
- **Reserva viva** · Opcional · Tarea 2 (`wp-2.17`)
  Tarea 2, complementa la 1. Aprovecha que saben JS: el punto 4 es una primera mirada a WordPress headless. Errores típicos de la IA: encolar mal el CSS del padre, inventar la cabecera del patrón, pegar un script en un bloque HTML.
- **Entrega y evaluación** · Opcional · Tarea 2 (`wp-2.18`)
  La defensa es lo que hace que la IA sume en vez de reemplazar: pueden usarla para todo, pero tienen que entender lo que entregan.
