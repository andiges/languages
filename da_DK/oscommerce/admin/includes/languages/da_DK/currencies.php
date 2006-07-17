<?php
/*
  $Id: currencies.php 410 2006-01-26 09:17:09Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Valuta');

define('TABLE_HEADING_CURRENCY_NAME', 'Valuta');
define('TABLE_HEADING_CURRENCY_CODES', 'Kode');
define('TABLE_HEADING_CURRENCY_VALUE', 'V�rdi');
define('TABLE_HEADING_CURRENCY_EXAMPLE', 'Eksempel');
define('TABLE_HEADING_ACTION', 'Handling');

define('TEXT_INFO_INSERT_INTRO', 'Inds�t venligst den nye valuta med tilh�rende data');
define('TEXT_INFO_EDIT_INTRO', 'Lav venligst de n�dvendige �ndringer');
define('TEXT_INFO_DELETE_INTRO', 'Er du sikker p� du vil slette den valuta?');
define('TEXT_INFO_UPDATE_SERVICE_INTRO', 'V�lg venligst hvilken valutaopdateringsservice der skal bruges.');

define('TEXT_INFO_HEADING_NEW_CURRENCY', 'Ny valuta');

define('TEXT_INFO_CURRENCY_TITLE', 'Titel:');
define('TEXT_INFO_CURRENCY_CODE', 'Kode:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Symbol Venstre:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Symbol H�jre:');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Decimalpladser:');
define('TEXT_INFO_CURRENCY_VALUE', 'V�rdi:');

define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . '<br /><small>(Dette kr�ver manuel opdatering af valutakurser)</small>');
define('TEXT_INFO_SERVICE_TERMS', 'Ved at bruge den valgte valutaopdateringsservice godkender du brugsbetingelserne for denne service.');

define('TEXT_INFO_CURRENCY_UPDATED', 'Udvekslingskursen for %s (%s) blev succesrigt opdateret via %s.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'ADVARSEL: Standardvalutaen kan ikke fjernes. S�t venligst en anden valuta som standard og pr�v igen.');
define('ERROR_CURRENCY_INVALID', 'FEJL: Udvekslingskursen for %s (%s) blev ikke succesrigt opdateret %s. Er det en valideret valutakode?');
define('WARNING_PRIMARY_SERVER_FAILED', 'ADVARSEL: Den prim�re udvekslingskurs-server (%s) har fejlet for %s (%s) - pr�ver den sekund�re server.');

define('TEXT_INFO_DELETE_PROHIBITED', 'ADVARSEL: Standardvalutaen kan ikke fjernes. S�t venligst en anden valuta som standard og pr�v igen.');
?>
