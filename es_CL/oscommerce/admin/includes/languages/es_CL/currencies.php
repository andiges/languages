<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Valutas');

define('TABLE_HEADING_CURRENCY_NAME', 'Valuta');
define('TABLE_HEADING_CURRENCY_CODES', 'C�digo');
define('TABLE_HEADING_CURRENCY_VALUE', 'Valor');
define('TABLE_HEADING_CURRENCY_EXAMPLE', 'Ejemplo');
define('TABLE_HEADING_ACTION', 'Acci�n');

define('TEXT_INFO_INSERT_INTRO', 'Por favor ingresar la nueva valuta con sus datos relacionados');
define('TEXT_INFO_EDIT_INTRO', 'Por favor realizar cualquier cambio necesario');
define('TEXT_INFO_DELETE_INTRO', '�Esta seguro que quiere borrar esta valuta?');
define('TEXT_INFO_UPDATE_SERVICE_INTRO', 'Por favor seleccionar el servicio para usar de la actualizaci�n de la valuta.');

define('TEXT_INFO_HEADING_NEW_CURRENCY', 'Nueva Valuta');

define('TEXT_INFO_CURRENCY_TITLE', 'Titulo:');
define('TEXT_INFO_CURRENCY_CODE', 'C�digo:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'S�mbolo Izquierda:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'S�mbolo Derecha:');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Decimales:');
define('TEXT_INFO_CURRENCY_VALUE', 'Valor:');

define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . '<br /><small>(requiere una actualizaci�n manual de los valores de las valutas)</small>');
define('TEXT_INFO_SERVICE_TERMS', 'Usando la actualizaci�n seleccionada de la valuta mantener los t�rminos y condiciones del servicio implicado.');

define('TEXT_INFO_CURRENCY_UPDATED', 'El cambio para %s (%s) fue actualizado con �xito v�a %s.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'Advertencia: La valuta predeterminada no puede ser quitada. Por favor fijar otra valuta como la predeterminada y intente otra vez.');
define('ERROR_CURRENCY_INVALID', 'Error: El cambio para %s (%s) no era actualizado v�a %s. �Es un c�digo v�lido de la valuta?');
define('WARNING_PRIMARY_SERVER_FAILED', 'Advertencia: El servidor primario del cambio (%s) fall� para %s (%s) - intentar el servidor secundario del cambio.');

define('TEXT_INFO_DELETE_PROHIBITED', 'Advertencia: La valuta predeterminada no puede ser quitada. Por favor fijar otra valuta como la predeterminada y intente otra vez.');
?>