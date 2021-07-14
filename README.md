# Divi Child Theme

Descargar este repositorio y descomprimir el archivo .zip  
[https://github.com/CompucentroSAS/divi-child-theme/archive/refs/heads/main.zip](https://github.com/CompucentroSAS/divi-child-theme/archive/refs/heads/main.zip)

Utilizar _git_ para clonar el repositorio  
`git clone https://github.com/CompucentroSAS/divi-child-theme.git`

## Recomendaciones

- 💡 No subir este archivo ni el archivo _screenshot.svg_ en la versión final del tema hijo.
- 💡 Emplear el archivo _screenshot.svg_ para crear la imagen del tema hijo. Se puede usar los formatos png y jpg pero recomiendo **jpg** porque no estamos usando transparencia y pesa menos. Optimizar empleando [Squoosh](https://squoosh.app/), [Compress PNG Images Online](https://compresspng.com/) o [Compress JPEG Images Online](https://compressjpeg.com/)
- 📁 La carpeta del tema no debe incluir espacios y agregar _-theme_ al final.

### style.css

- 🎨 Para el nombre del tema (_Theme Name_) escoger unas palabras y agregar _- Theme_ al final; no hace falta escribir el nombre completo.
- 🎨 En _Theme URI_ escribir la url de la página incluyendo _https://_

  ```css
  /*
  Theme Name:     [divi-child-theme]
  Theme URI:      https://[page-url]
  Description:    Divi Child Theme
  Author:         Compucentro
  Author URI:     https://compucentro.co
  Template:       Divi
  Version:        1.0.1
  */
  ```

- 🎨 Respetar la estructura del archivo. Obviamente se puede ampliar agregando otros ítems.

  ```css
  /*
  Indice
  1. HTML
  2. Tema
  3. Plugins
  4. Otros - Propietarios
  */
  ```

- 🎨 Abrir secciones con comentarios breves encerrados en `/* */`; procurar describir en 60 carácteres máximo.
- 🎨 Cerrar con `/* FIN ` mas la descripción del inicio, finalizar con `*/`.
- 🎨 Si una sección es pequeña, es decir pocas líneas, se agregan o modifican 2 o 3 elementos, no hace falta cerrar con comentarios.
- 🎨 He includo la variable `--accent-color: ` para establecer el color de acento y que debe coincidir con el definido para el sitio web. En esta hoja de estilo la utilizo en la clase `.more-link` (_Link "Leer mas" como boton_) y `.wpcf7-submit` (_Aplicar estilos de DIVI a Contact Form 7_).
- 🎨 También, he incluido unas clases auxiliares para cambiar el orden de las columnas en dispositivos móviles. Para usarlas, se agrega la clase `custom_row` en la configuración de la fila (Avanzado, ID y clases de CSS, Clase CSS) y las clases `first-on-mobile`, `second-on-mobile`, `third-on-mobile` y `fourth-on-mobile` a cada columna de acuerdo a lo que se requiera (Columna Configuracion, Avanzado, ID y clases de CSS, Clase CSS). Toda la información de cómo usarlas se puede consultar aquí: [How To Adjust Divi’s Column Stacking Order on Mobile Devices | Elegant Themes Blog](https://www.elegantthemes.com/blog/divi-resources/how-to-change-divis-column-stacking-order-on-mobile-devices).

### functions.php

- 🚀 Respetar la estructura del archivo. Obviamente se puede ampliar agregando otros ítems.

  ```php
  /**
   * Indice
   * 1. Generales
   * 2. DIVI
   * 3. Otros i.e. WooCommerce
   */
  ```

- 🚀 Abrir secciones con comentarios breves encerrados con `/* */`; procurar que no sean muy largos - 60 carácteres máximo.
- 🚀 Si es posible, dejar en comentarios la url del origen donde se copió la función.
- 🚀 No hace falta cerrar las secciones.

### Mejorar la navegacion del menu en móviles [(via)](https://gist.github.com/Garconis/a3855dbd7bfb7eeaebe1601d11b33979)

En la hoja de estilo está incluidas unas líneas que mejoran el menú principal en dispositivos móviles; sin embargo, se hace necesario agregar el siguinte código Javascript en **_Divi->Opciones del tema->Integración_** bajo la sección _Agregar código..._:

```js
<script>
jQuery(document).ready(function ($) {
  // Create collapsible sub menus in mobile Divi Header Nav
  $('<div class="sub-menu-toggle"></div>').insertBefore(
    "#main-header #mobile_menu.et_mobile_menu .menu-item-has-children > a"
  );
  // Create collapsible sub menus in mobile Divi Theme Builder Menu
  $('<div class="sub-menu-toggle"></div>').insertBefore(
    ".et_pb_module.et_pb_menu .et_mobile_menu .menu-item-has-children > a"
  );
  // Toggle the class to be popped on mobile Divi Header Nav
  $("#main-header #mobile_menu.et_mobile_menu .sub-menu-toggle").click(
    function () {
      $(this).toggleClass("popped");
    }
  );
  // Toggle the class to be popped on mobile Divi Theme Builder Menu
  $(".et_pb_module.et_pb_menu .et_mobile_menu .sub-menu-toggle").click(
    function () {
      $(this).toggleClass("popped");
    }
  );
  // Replace the mobile Divi Theme Builder Menu toggle with different href other than # hash, to prevent scroll to top on sub-menu-toggle clicks
  $('.et_pb_module.et_pb_menu a.mobile_nav[href="#"]').attr("href", "#0");
});
</script>
```

## Licencia

Ver el archivo LICENSE 🙃

---

🖖 [Alberto Cárdenas](https://albertocardenas.co)
