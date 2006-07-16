<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or execute 'locale -a' on the server.
// Examples:
// on Linux try 'es_CL'
// on FreeBSD try 'es_CL.ISO_8859-15'
// on Windows try 'es', or 'Spanish'
define('LANGUAGE_LOCALE', 'es_CL');

define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Return date in raw format
// $date should be in format dd/mm/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
  }
}

define('NUMERIC_DECIMAL_SEPARATOR', '.');
define('NUMERIC_THOUSANDS_SEPARATOR', ',');

// Global entries for the <html> tag
define('HTML_PARAMS','xmlns="http://www.w3.org/1999/xhtml" dir="ltr" xml:lang="es" lang="es"');

// charset for web pages and emails
define('CHARSET', 'iso-8859-15');

// page title
define('TITLE', 'osCommerce');

// header text in includes/header.php
define('HEADER_TITLE_HELP', 'Ayuda');
define('HEADER_TITLE_OSCOMMERCE_SUPPORT_SITE', 'osCommerce Sitio de Soporte');
define('HEADER_TITLE_ONLINE_CATALOG', 'Cat�logo');
define('HEADER_TITLE_LANGUAGES', 'Lenguajes');

define('BOX_CONNECTION_PROTECTED', 'Una conexi�n segura del SSL de %s le protege.');
define('BOX_CONNECTION_UNPROTECTED', 'Una conexi�n segura del SSL <font color="#ff0000">no</font> le protege.');
define('BOX_CONNECTION_UNKNOWN', 'desconocido');

// text for gender
define('MALE', 'Masculino');
define('FEMALE', 'Femenino');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/AAAA');

define('BOX_CONFIGURATION_ADMINISTRATORS', 'Administradores');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'Configuraci�n');
define('BOX_CONFIGURATION_MYSTORE', 'Mi Tienda');
define('BOX_CONFIGURATION_LOGGING', 'Loging');
define('BOX_CONFIGURATION_CACHE', 'Cache');
define('BOX_CONFIGURATION_SERVICES', 'Servicios');
define('BOX_CONFIGURATION_CREDIT_CARD_TYPES', 'Tipos de Tarjeta de Cr�dito');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'M�dulos');
define('BOX_MODULES_PAYMENT', 'Pagos');
define('BOX_MODULES_SHIPPING', 'Env�os');
define('BOX_MODULES_ORDER_TOTAL', 'Total del Pedido');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', 'Cat�logo');
define('BOX_CATALOG_CATEGORIES', 'Categor�as');
define('BOX_CATALOG_PRODUCTS', 'Productos');
define('BOX_CATALOG_CATEGORIES_PRODUCTS_ATTRIBUTES', 'Atributos de Productos');
define('BOX_CATALOG_MANUFACTURERS', 'Fabricantes');
define('BOX_CATALOG_REVIEWS', 'Comentarios');
define('BOX_CATALOG_SPECIALS', 'Especiales');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Productos Esperados');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', 'Clientes');
define('BOX_CUSTOMERS_CUSTOMERS', 'Clientes');
define('BOX_CUSTOMERS_ORDERS', 'Pedidos');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', 'Localizaciones / Impuestos');
define('BOX_TAXES_COUNTRIES', 'Pa�ses');
define('BOX_TAXES_ZONES', 'Zonas');
define('BOX_TAXES_GEO_ZONES', 'Zonas de Impuesto');
define('BOX_TAXES_TAX_CLASSES', 'Clases de Impuesto');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', 'Raportes');
define('BOX_REPORTS_STATISTICS', 'Estadisticas');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', 'Herramientas');
define('BOX_TOOLS_BACKUP', 'Respaldar Base de Datos');
define('BOX_TOOLS_BANNER_MANAGER', 'Manager de Banderas');
define('BOX_TOOLS_CACHE', 'Cache Control');
define('BOX_TOOLS_IMAGES', 'Imagenes');
define('BOX_TOOLS_FILE_MANAGER', 'Manager de Archivos');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Manager de Bolet�n');
define('BOX_TOOLS_SERVER_INFO', 'Informaci�n del Servidor');
define('BOX_TOOLS_WHOS_ONLINE', 'Qui�n es en L�nea');

// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', 'Localization');
define('BOX_LOCALIZATION_CURRENCIES', 'Valutas');
define('BOX_LOCALIZATION_LANGUAGES', 'Lenguajes');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Estatus del Pedidos');
define('BOX_LOCALIZATION_WEIGHT_CLASSES', 'Clases de Peso');
define('BOX_LOCALIZATION_IMAGE_GROUPS', 'Grupos de Im�genes');

define('BOX_HEADING_LOGOFF', 'Salir');

// javascript messages
define('JS_ERROR', '�Errores han ocurrido durante el proceso de su formulario!\nPor favor haga las correcciones siguientes:\n\n');
define('JS_OPTIONS_VALUE_PRICE', '* El atributo del producto nuevo necesita un valor del precio\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* El atributo del producto nuevo necesita un prefijo del precio\n');
define('JS_PRODUCTS_NAME', '* El producto nuevo necesita un nombre\n');
define('JS_PRODUCTS_DESCRIPTION', '* El producto nuevo necesita una descripci�n\n');
define('JS_PRODUCTS_PRICE', '* El producto nuevo necesita un valor del precio\n');
define('JS_PRODUCTS_WEIGHT', '* El producto nuevo necesita un valor del peso\n');
define('JS_PRODUCTS_QUANTITY', '* El producto nuevo necesita un valor de la cantidad\n');
define('JS_PRODUCTS_MODEL', '* El producto nuevo necesita un valor modelo\n');
define('JS_PRODUCTS_IMAGE', '* El producto nuevo necesita un valor de la imagen\n');
define('JS_SPECIALS_PRODUCTS_PRICE', '* Un nuevo precio para este producto necesita ser fijado\n');
define('JS_ORDER_DOES_NOT_EXIST', '�El N�mero del Pedido n�mero %s no existe!');

define('CATEGORY_PERSONAL', 'Personal');
define('CATEGORY_ADDRESS', 'Direcci�n');
define('CATEGORY_CONTACT', 'Contacto');
define('CATEGORY_COMPANY', 'Empresa');
define('CATEGORY_OPTIONS', 'Optiones');

define('ENTRY_GENDER', 'Sexo:');
define('ENTRY_GENDER_ERROR', 'Por favor elige Sexo.');
define('ENTRY_FIRST_NAME', 'Nombre:');
define('ENTRY_FIRST_NAME_ERROR', 'Su Nombre debe contener un m�nimo de ' . ACCOUNT_FIRST_NAME . ' caracteres.');
define('ENTRY_LAST_NAME', 'Apellido:');
define('ENTRY_LAST_NAME_ERROR', 'Su Apellido debe contener un m�nimo de ' . ACCOUNT_LAST_NAME . ' caracteres.');
define('ENTRY_DATE_OF_BIRTH', 'Fecha de Nacimiento:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Su Fecha de Nacimiento se debe fijarse correctamente.');
define('ENTRY_EMAIL_ADDRESS', 'Direcci�n E-Mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Su Direcci�n E-mail debe contener un m�nimo de ' . ACCOUNT_EMAIL_ADDRESS . ' caracteres.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Su Direcci�n E-mail no esta v�lida - por favor hacer cualquier correcci�n necesaria.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Su direcci�n E-mail existe ya en nuestros expedientes - por favor abrir una sesi�n con la direcci�n E-mail o crear una cuenta con una diversa direcci�n.');
define('ENTRY_COMPANY', 'Nombre de Empresa:');
define('ENTRY_COMPANY_ERROR', 'Su Nombre de Empresa debe contener un m�nimo de ' . ACCOUNT_COMPANY . ' caracteres.');
define('ENTRY_STREET_ADDRESS', 'Nombre de la Calle:');
define('ENTRY_STREET_ADDRESS_ERROR', 'Su Nombre de la Calle debe contener un m�nimo de ' . ACCOUNT_STREET_ADDRESS . ' caracteres.');
define('ENTRY_SUBURB', 'Suburbio:');
define('ENTRY_SUBURB_ERROR', 'Su Suburbio debe contener un m�nimo de ' . ACCOUNT_SUBURB . ' caracteres.');
define('ENTRY_POST_CODE', 'C�digo Postal:');
define('ENTRY_POST_CODE_ERROR', 'Su C�digo Postal debe contener un m�nimo de ' . ACCOUNT_POST_CODE . ' caracteres.');
define('ENTRY_CITY', 'Ciudad:');
define('ENTRY_CITY_ERROR', 'Su Ciudad debe contener un m�nimo de ' . ACCOUNT_CITY . ' caracteres.');
define('ENTRY_STATE', 'Provincia:');
define('ENTRY_STATE_ERROR', 'Su Provincia debe contener un m�nimo de ' . ACCOUNT_STATE . ' caracteres.');
define('ENTRY_STATE_ERROR_SELECT', 'Por favor elige una provincia del men�.');
define('ENTRY_COUNTRY', 'Pa�s:');
define('ENTRY_COUNTRY_ERROR', 'Debes seleccionar un pa�s de los pa�ses men�.');
define('ENTRY_TELEPHONE_NUMBER', 'N�mero de Tel�fono:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Su N�mero de Tel�fono debe contener un m�nimo de ' . ACCOUNT_TELEPHONE . ' caracteres.');
define('ENTRY_FAX_NUMBER', 'N�mero de Fax:');
define('ENTRY_FAX_NUMBER_ERROR', 'Su N�mero de Fax debe contener un m�nimo de ' . ACCOUNT_FAX . ' caracteres.');
define('ENTRY_NEWSLETTER', 'Bolet�nes:');
define('ENTRY_NEWSLETTER_YES', 'Subscrito');
define('ENTRY_NEWSLETTER_NO', 'Sin Subscripci�n');
define('ENTRY_PASSWORD', 'Contrase�a:');
define('ENTRY_PASSWORD_ERROR', 'Su Contrase�a debe contener un m�nimo de ' . ACCOUNT_PASSWORD . ' caracteres.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'La Confirmaci�n de Contrase�a debe coincidir con su Contrase�a.');
define('ENTRY_PASSWORD_CONFIRMATION', 'Confirmaci�n de Contrase�a:');

// images
define('IMAGE_ANI_SEND_EMAIL', 'Mandar E-Mail');
define('IMAGE_APPROVE', 'Approvar');
define('IMAGE_BACK', 'Atr�s');
define('IMAGE_BACKUP', 'Respaldar');
define('IMAGE_BOX_REMOVE', 'Quitar Box');
define('IMAGE_CANCEL', 'Cancelar');
define('IMAGE_CONFIGURE', 'Configurar');
define('IMAGE_CONFIRM', 'Confirmar');
define('IMAGE_COPY', 'Copiar');
define('IMAGE_COPY_TO', 'Copiar A');
define('IMAGE_DETAILS', 'Detalles');
define('IMAGE_DELETE', 'Borrar');
define('IMAGE_EDIT', 'Editar');
define('IMAGE_EDIT_DEFINITIONS', 'Editar Definiciones');
define('IMAGE_EMAIL', 'Email');
define('IMAGE_EXECUTE', 'Executar');
define('IMAGE_EXPORT', 'Exportar');
define('IMAGE_FILE_MANAGER', 'Manager de Archivo');
define('IMAGE_ICON_STATUS_GREEN', 'Activo');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Fijar Activo');
define('IMAGE_ICON_STATUS_RED', 'Inactivo');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Fijar Inactivo');
define('IMAGE_ICON_INFO', 'Informaci�n');
define('IMAGE_IMPORT', 'Importar');
define('IMAGE_INSERT', 'Insertar');
define('IMAGE_LOCK', 'Cerrar');
define('IMAGE_LOGIN', 'Ingresar');
define('IMAGE_MODULE_INSTALL', 'Instalar M�dulo');
define('IMAGE_MODULE_REMOVE', 'Quitar M�dulo');
define('IMAGE_MOVE', 'Mover');
define('IMAGE_NEW_BANNER', 'Nueva Bandera');
define('IMAGE_NEW_CATEGORY', 'Nueva Categor�a');
define('IMAGE_NEW_COUNTRY', 'Nuevo Pa�s');
define('IMAGE_NEW_CURRENCY', 'Nueva Valuta');
define('IMAGE_NEW_FILE', 'Nuevo Archivo');
define('IMAGE_NEW_FOLDER', 'Nuevo Carpeta');
define('IMAGE_NEW_LANGUAGE', 'Nueva Lenguaje');
define('IMAGE_NEW_NEWSLETTER', 'Nuevo Bolet�n');
define('IMAGE_NEW_PRODUCT', 'Nuevo Producto');
define('IMAGE_NEW_TAX_CLASS', 'Nueva Clase de Impuesto');
define('IMAGE_NEW_TAX_RATE', 'Nuevo Impuesto Fiscal');
define('IMAGE_NEW_TAX_ZONE', 'Nueva Zona de Impuesto');
define('IMAGE_NEW_ZONE', 'Nueva Zona');
define('IMAGE_ORDERS', 'Pedidos');
define('IMAGE_ORDERS_INVOICE', 'Factura');
define('IMAGE_ORDERS_PACKINGSLIP', 'Resbal�n');
define('IMAGE_PREVIEW', 'Muestra');
define('IMAGE_REJECT', 'Rechazo');
define('IMAGE_RESTORE', 'Restaurar');
define('IMAGE_RESET', 'Reajustar');
define('IMAGE_SAVE', 'Guardar');
define('IMAGE_SEARCH', 'Buscar');
define('IMAGE_SELECT', 'Seleccionar');
define('IMAGE_SEND', 'Mandar');
define('IMAGE_SEND_EMAIL', 'Mandar Email');
define('IMAGE_UNLOCK', 'Abrir');
define('IMAGE_UPDATE', 'Actualizar');
define('IMAGE_UPDATE_CURRENCIES', 'Actualizaci�n del Cambio de la Valuta');
define('IMAGE_UPLOAD', 'Subir');

define('ICON_CROSS', 'Falso');
define('ICON_CURRENT_FOLDER', 'Carpeta Actual');
define('ICON_DELETE', 'Borrar');
define('ICON_ERROR', 'Error');
define('ICON_FILE', 'Archivo');
define('ICON_FILE_DOWNLOAD', 'Descargar');
define('ICON_FOLDER', 'Carpeta');
define('ICON_LOCKED', 'Cerrado');
define('ICON_PREVIOUS_LEVEL', 'Nivel anterior');
define('ICON_PREVIEW', 'Muestra');
define('ICON_STATISTICS', 'Estad�stica');
define('ICON_SUCCESS', 'Exito');
define('ICON_TICK', 'Verdad');
define('ICON_UNLOCKED', 'Abierto');
define('ICON_WARNING', 'Advertencia');

define('BUTTON_CANCEL', 'Cancelar');
define('BUTTON_BACK', 'Atr�s');
define('BUTTON_DELETE', 'Borrar');
define('BUTTON_INSERT', 'Insertar');
define('BUTTON_OK', 'OK');
define('BUTTON_SAVE', 'Guardar');
define('BUTTON_SEND', 'Mandar');

define('ICON_FILES', 'Archivos');
define('ICON_ORDERS', 'Pedidos');
define('ICON_PRODUCTS', 'Productos');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Page&nbsp;%s&nbsp;of&nbsp;%d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINISTRATORS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> administradores)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> banderas)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> categor�as)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> paises)');
define('TEXT_DISPLAY_NUMBER_OF_CREDIT_CARDS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> tarjetas de cr�dito)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> clientes)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> valutas)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> lenguajes)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> fabricantes)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> bolet�nes)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> pedidos)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> estatus de los pedidos)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_ATTRIBUTES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> atributos del producto)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_ATTRIBUTES_GROUPS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> grupo de atributos del producto)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> productos)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> productos esperados)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> comentarios de productos)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> productos en especial)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> clases de impuesto)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> zonas de impuesto)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> impuestos fiscales)');
define('TEXT_DISPLAY_NUMBER_OF_WEIGHT_CLASSES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> clases de peso)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> zonas)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');

define('TEXT_DEFAULT', 'predeterminado');
define('TEXT_SET_DEFAULT', 'Fijar como predeterminado');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Requerido</span>');
define('TEXT_IMAGE_NONEXISTENT', 'IMAGEN NO EXISTE');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Error: Actualmente no hay una valuta predeterminada. Poe favor fijar una en: Administraci�n ->Localizaci�n->Valutas');

define('TEXT_CACHE_CATEGORIES', 'Categor�as');
define('TEXT_CACHE_MANUFACTURERS', 'Fabricantes');
define('TEXT_CACHE_ALSO_PURCHASED', 'Los M�s Comprados');

define('TEXT_NONE', '--ning�no--');
define('TEXT_TOP', 'Top');
define('TEXT_TRUE', 'Verdad');
define('TEXT_FALSE', 'Falso');
define('TEXT_OPTIONAL', 'Voluntario');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Error: Destinaci�n no existe.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Error: Destinaci�n no es escribible.');
define('ERROR_FILE_NOT_REMOVEABLE', 'Error: No puede quitar este archivo. Por favor fijar los permisos del usuario en: %s');
define('ERROR_FILE_NOT_SAVED', 'Error: Archivo subido no guardadao.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Error: Tipo del archivo subido no permitido.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Exito: El archivo subido se ha guardado con �xito.');
define('WARNING_NO_FILE_UPLOADED', 'Advertencia: Ning�n archivo se ha subido.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Advertencia: Los archivos subidos se inhabilitaron en el archivo de la configuraci�n de php.ini.');

define('SUCCESS_DB_ROWS_UPDATED', 'Exito: �Entrada actualizada con �xito!');
define('WARNING_DB_ROWS_NOT_UPDATED', 'Advertencia: Entrada no sera actualizada debido a los datos contentidos son iguales.');
define('ERROR_DB_ROWS_NOT_UPDATED', 'Error: Entrada no acualizada debido a un error.');

define('MAXIMUM_FILE_UPLOAD_SIZE', '(Max: %s)');
?>