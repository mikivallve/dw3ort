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
  Analogía de la calculadora: primero se aprende a hacer la cuenta, después la calculadora es libre, y justamente porque sabés hacer la cuenta te das cuenta si el resultado no tiene sentido. El modo tutor no es desconfianza: es la forma de que la IA los haga mejores y no los reemplace. En las tareas la IA es libre, pero se pide documentar cómo la usaron (IA.md, AGENTS.md).
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
  Cierra el bloque 3 (min 165). Insistir en que lean el CSS antes de pegarlo.
- **Armar el sistema** · Opcional (`agentes-1.10`)
  Pasar por los puestos mirando una sola cosa: ¿el agente les está pasando los comandos o los está corriendo él? Si los corre él, falta la regla de modo tutor o está mal escrita.

## Clase 12

- **Agenda** · Taller de 3 horas (`parcial-1.0`)
  Total 180 min. Los bloques 1 y 2 son lo que quedó pendiente de las clases 10 y 11. El bloque 2 lo hace el docente en pantalla: no entra en el parcial y cada uno lo puede repetir en casa con las slides. Las Tareas 1 y 2 pasaron a opcionales, al final de la clase 13.
- **Puesta en común** · Bloque 1 (`wp-2.14`)
  15 min: 5 de revisión en vivo (2 o 3 alumnos comparten pantalla), 5 de troubleshooting, 5 de checklist.
- **Dónde, gratis** · Bloque 2 (`deploy-1.0`)
  Datos de noviembre 2026: Pantheon Silver $0 con 2 sandboxes; para conectar dominio hace falta un plan pago. InstaWP pide tarjeta. Revisar antes de cada semestre.
- **Crear el sandbox** · Bloque 2 · Pantheon (`deploy-1.1`)
  Pedir que creen la cuenta antes de la clase si se puede (llegan mails de confirmación). Con 2 sandboxes por cuenta, que no hagan pruebas descartables.
- **De Local a Pantheon** · Bloque 2 · Práctica guiada (`deploy-1.2`)
  El orden importa: código primero, después la base (que espera que el tema exista), después uploads. La base viaja con los usuarios: el admin y la contraseña de Local pasan a ser los de Pantheon, así que nada de admin/admin.
- **Chequeo y workstream** · Bloque 2 (`deploy-1.3`)
  Cierra la clase. La próxima vez que quieran subir cambios, le piden al agente "subí a Pantheon" y el workstream ya tiene los pasos que hoy probamos.
- **Cómo es el parcial** · Bloque 3 · Formato (`parcial-1.1`)
  No adelantar el caso. Sí dejar claro el formato: van a recibir un sitio ajeno con cosas mal hechas, no van a construir uno de cero.
- **Cómo usar las 3 horas** · Bloque 3 · Estrategia (`parcial-1.2`)
  Insistir en el minuto 0–15: el error más caro de 2025 fue empezar a cambiar sin haber recorrido el sitio.
- **Dónde está cada cosa** · Bloque 3 · El panel (`parcial-1.3`)
  Preguntar antes de mostrar cada fila: "¿dónde lo harían?". Las que más fallan: categoría por defecto (está en Escritura, no en Categorías) y borrar un usuario sin perder su contenido.
- **Cazar un error de CSS** · Bloque 3 · DevTools (`parcial-1.4`)
  Hacerlo en vivo sobre cualquier sitio: agregar una regla rota en CSS adicional y que la encuentren con DevTools. 10 minutos.
- **¿Qué plantilla usa WordPress?** · Bloque 4 · Jerarquía (`parcial-2.1`)
  Pregunta disparadora: "si creo page-contacto.php, ¿qué pasa con /nosotros?". Nada: sigue usando page.php. Esa es la idea para pasar UNA página.
- **De un HTML a page-{slug}.php** · Bloque 4 · Receta (`parcial-2.2`)
  Mostrarlo en vivo con un HTML cualquiera. Remarcar que no hace falta Template Name: el nombre del archivo ya alcanza.
- **Lo que suele salir mal** · Bloque 4 · Trampas (`parcial-2.3`)
  La última fila aplica a la práctica de hoy, que es sobre un tema hijo: ahí va get_stylesheet_directory_uri(). En un tema que no es hijo, get_template_directory_uri().
- **Manos a la obra** · Bloque 4 · Práctica (`parcial-2.4`)
  Si alguno no tiene su sitio estático a mano, que use cualquier página estática que tenga, o el index.html del repo de clase. Los que terminan: pasar una segunda página.
- **Parcial 2025** · Bloque 5 · Simulacro (`parcial-1.5`)
  Lo importante de arrancar en clase: que todos logren importar el zip en Local antes de irse. Si alguien no puede bajarlo, pasarlo por pendrive.

## Clase 13

- **Agenda** · Taller de 3 horas (`parcial-2.0`)
  Total 170 min. Al final del deck están las Tareas 1 y 2, opcionales, para después del parcial. Empezar preguntando qué les costó del simulacro y anotarlo en el pizarrón para el bloque 3.
- **Qué miramos** · Bloque 1 · Corrección (`parcial-1.6`)
  Proyectar el sitio de un voluntario y corregir juntos 3 o 4 puntos. Juntar las dudas para el repaso de la clase 13.
- **Otra página, con reloj** · Bloque 2 · Contrarreloj (`parcial-2.8`)
  Es la parte del parcial con código. Si alguno lo termina en menos de 30', ya está listo.
- **Preguntas tipo (I)** · Bloque 3 · Repaso (`parcial-2.5`)
  Que respondan en papel 2 minutos por pregunta, sin dispositivos, como en el parcial. Después mostrar la respuesta.
- **Preguntas tipo (II)** · Bloque 3 · Repaso (`parcial-2.6`)
  Cerrar el bloque con las dudas que juntamos al corregir el simulacro.
- **El día del parcial** · Bloque 4 · Checklist (`parcial-2.7`)
  Si el export de Local falla en el laboratorio: comprimir la carpeta del sitio y además exportar la base desde Database › Adminer. Avisar que existe el plan B, pero que no cuenten con él.
- **Reserva viva** · Opcional · Tarea 2 (`wp-2.17`)
  Tarea 2, complementa la 1. Aprovecha que saben JS: el punto 4 es una primera mirada a WordPress headless. Errores típicos de la IA: encolar mal el CSS del padre, inventar la cabecera del patrón, pegar un script en un bloque HTML.
- **Entrega y evaluación** · Opcional · Tarea 2 (`wp-2.18`)
  La defensa es lo que hace que la IA sume en vez de reemplazar: pueden usarla para todo, pero tienen que entender lo que entregan.
