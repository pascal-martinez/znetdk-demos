<?php
/* General labels */
define('LC_PAGE_TITLE','Demo ZnetDK');

/* Heading labels */
define('LC_HEAD_TITLE','Demostración de ZnetDK');
define('LC_HEAD_SUBTITLE','Aplicación lista para desarrollar...');

/* Menu item labels */
define('LC_MENU_HOME', 'Inicio');
define('LC_MENU_THEMES', 'Temas');
define('LC_MENU_EXAMPLE', 'Ejemplo');
define('LC_MENU_CRUDDEMO', 'Demo CRUD');
define('LC_MENU_SHOWCRUDDEMO', 'Demostración CRUD');
define('LC_MENU_CRUDSOURCECODE', 'Código fuente CRUD');
define('LC_MENU_DEMOFORM', 'Demo FORM');
define('LC_MENU_DEMOZNETDKFORM', 'Formulario ZnetDK');
define('LC_MENU_DEMOFORMVAL', 'Mensajes de formulario');
define('LC_MENU_DEMORBGROUP', 'Grupo de botones radio');
define('LC_MENU_DEMOLOADATA', 'Datos remotos');
define('LC_MENU_DEMOAUTOCOMPLETE', 'Autocompletado');
define('LC_MENU_DEMOUPLOAD','Subida de archivo');
define('LC_MENU_DEMOSERVERSIDE', 'Validación por el servidor');

/* Heading images */
define('LC_HEAD_IMG_LOGO', ZNETDK_APP_URI . 'images/milogo_es.png');

/* Authentication page lable */
define('LC_DEMO_AUTH_FUNC_NOT_AVAIL', 'Funcionalidad no disponible en este versión de demostración.');

/* CRUD Demo page labels */
define('LC_DEMO_FIELD_SEMICOLON', ' : ');
define('LC_DEMO_BUTTON_NEW', 'Nuevo');
define('LC_DEMO_BUTTON_TOOLTIP_NEW', 'Añadir un nuevo producto...');
define('LC_DEMO_BUTTON_EDIT', 'Modificar');
define('LC_DEMO_BUTTON_TOOLTIP_EDIT', 'Modificar el producto seleccionado...');
define('LC_DEMO_BUTTON_REMOVE', 'Suprimir');
define('LC_DEMO_BUTTON_TOOLTIP_REMOVE', 'Suprimir el producto seleccionado...');
define('LC_DEMO_BUTTON_RESET', 'Reinicializar la demo');
define('LC_DEMO_BUTTON_TOOLTIP_RESET', "Reinicializar los datos de la demo a las valores de origen.");
define('LC_DEMO_RADIO_ROWS', 'Líneas');
define('LC_DEMO_RADIO_ALL_ROWS', 'Todas');
define('LC_DEMO_FIELD_SEARCH', 'criterios de busqueda...');
define('LC_DEMO_FIELD_TOOLTIP_SEARCH', 'Buscar los productos que corresponden a los criterios...');
define('LC_DEMO_BUTTON_TOOLTIP_SEARCH', 'Vaciar el campo de busqueda...');
define('LC_DEMO_DATATABLE_PRODUCTS', 'productos');
define('LC_DEMO_FIELD_PRODUCT_NAME', 'Nombre');
define('LC_DEMO_FIELD_PART_NUMBER', 'Referencia');
define('LC_DEMO_FIELD_DESCRIPTION', 'Descripción');
define('LC_DEMO_FIELD_PRICE', 'Preso');
define('LC_DEMO_DIALOG_NEW', 'Nuevo producto');
define('LC_DEMO_DIALOG_EDIT', 'Modificar un producto');
define('LC_DEMO_DIALOG_SAVE', 'Guardar un producto');
define('LC_DEMO_DIALOG_REMOVE', 'Suprimir un producto');
define('LC_DEMO_BUTTON_SAVE', 'Guardar');
define('LC_DEMO_BUTTON_CANCEL', 'Anular');
define('LC_DEMO_BUTTON_YES', 'Sí');
define('LC_DEMO_BUTTON_NO', 'No');
define('LC_DEMO_QUESTION_MSG_REMOVE', '¿Quiere realmente suprimir el producto seleccionado?');
define('LC_DEMO_WARN_MSG_SELECT', "Por favor seleccione primero un producto!");
define('LC_DEMO_WARN_MSG_TITLE', 'Busqueda');
define('LC_DEMO_WARN_MSG_CRITERIA', "Por favor introduzca primero un criterio!");
define('LC_DEMO_WARN_MSG_SEARCH', 'No se ha encontrado ningún producto!');
define('LC_DEMO_ERROR_MSG_NEW', 'Lo siento, sólo 3 productos pueden ser añadidos en este versión de demostración. operación anulada.');
define('LC_DEMO_ERROR_MSG_UPDATE', 'Lo siento, sólo 3 productos pueden ser modificados en este versión de demostración. operación anulada.');
define('LC_DEMO_ERROR_MSG_REMOVE', 'Lo siento, sólo 3 productos pueden ser suprimidos en este versión de demostración. operación anulada.');
define('LC_DEMO_INFO_MSG_NEW', 'El producto ha sido añadido.');
define('LC_DEMO_INFO_MSG_UPDATE', 'El producto ha sido modificado.');
define('LC_DEMO_INFO_MSG_REMOVE', 'El producto ha sido suprimido.');
define('LC_DEMO_INFO_MSG_RESET', 'Los datos de demostración han sido reinicializados.');
define('LC_DEMO_LINK_SOURCE_CODE', "Ver el <a href='#' onclick='znetdk.showMenuView(\"crudsourcecode\");'>código fuente</a> de esta demostración");
define('LC_DEMO_TEASER_SOURCE_CODE', "Este código fuente se puede descargar desde <a href='https://www.znetdk.fr/telechargements#democrud' target='_blank'>www.znetdk.fr</a>");

/* Form Demo page labels */
define('LC_DEMOFORM_DESC', 'Los widgets PrimeUI mostrados en el formulario
            están <strong>automáticamente instanciados</strong> por ZnetDK
            desde una simple definición HTML (ver el código fuente a la derecha).');
define('LC_DEMOFORMVAL_DESC', "Los mensajes de error mostrados a la validación del formulario pueden ser
            personalizado para cada campo, gracias a el atributo HTML <q>data-zdkerrmsg-...</q> que conviene.
            (ver el código fuente a la derecha).");
define('LC_DEMORBGROUP_DESC', 'Los botones radio PrimeUI se alinean automáticamente gracias al widget ZnetDK "Radio button group"'
        . '.<br>El elemento HTML <strong>&lt;br&gt;</strong> permite que los botones se muevan a la siguiente línea (ver código a la derecha).');
define('LC_DEMOLOADATA_DESC', "Este formulario ilustra la carga del contenido de los widgets <strong>dropdown</strong>"
        . " y <strong>listbox</strong>, a partir de un controlador de aplicación ZnetDK (ver el atributo HTML5 <q>data-zdk-action</q>)."
        . "<br>El contenido del widget puede ser actualizado a la demanda, conservando o no su selección actual.<br>Para más detalles"
        . ", ver el código fuente en HTML5, JavaScript y PHP en su mano derecha.");
define('LC_DEMOAUTOCOMPL_DESC', 'En este formulario, el campo <q>Language</q> es el widget PrimeUI <strong>Autocomplete</strong>'
        . ' que está conectado directamente a una acción del controlador ZnetDK, para obtener los idiomas que coresponden a la palabra '
        . 'clave entrada en el campo (ver código fuente en la mano derecha).');
define('LC_DEMOUPLOAD_DESC',"Este formulario ilustra la subida de archivo con el widget '<strong>InputFile</strong>'."
        . " Se muestra una miniatura cuando se selecciona una imagen. El controlador verifica si el archivo subido es efectivamente una imagen.");
define('LC_DEMOSERVERSIDE_DESC', "Los datos del formulario son validados por la acción especificada por la propiedad HTML "
        . "<q>data-zdk-action</q>. El controlador se basa en el <strong>validador</strong> <q>MyValidator</q> para controlar "
        . "los datos. La respuesta devuelta por el controlador indica si los datos están OK (<q>setSuccessMessage</q>) o no "
        . "(<q>setFailedMessage</q>). Ver el código fuente a la derecha.");