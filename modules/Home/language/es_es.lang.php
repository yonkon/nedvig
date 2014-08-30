<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version
 * 1.1.3 ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied.  See the License
 * for the specific language governing rights and limitations under the
 * License.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *    (i) the "Powered by SugarCRM" logo and
 *    (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * The Original Code is: SugarCRM Enterprise
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) 2004-2011 SugarCRM, Inc.;
 * All Rights Reserved.
 ********************************************************************************/
/*********************************************************************************
 * Description:  Defines the Spanish language pack for the base application.
 * $Id: es_es.lang.php,v 1.18 2011/02/08 21:00:51 aserrano Exp $
 * Source: SugarCRM 6.1.1
 * Contributor(s): Alberto Serrano (alb.serrano@gmail.com).
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Inicio',
  'LBL_MODULES_TO_SEARCH' => 'Módulos en los que Buscar',
  'LBL_NEW_FORM_TITLE' => 'Nuevo Contacto',
  'LBL_FIRST_NAME' => 'Nombre:',
  'LBL_LAST_NAME' => 'Apellidos:',
  'LBL_LIST_LAST_NAME' => 'Apellidos',
  'LBL_PHONE' => 'Teléfono:',
  'LBL_EMAIL_ADDRESS' => 'Correo electrónico:',
  'LBL_MY_PIPELINE_FORM_TITLE' => 'Mi Pipeline',
  'LBL_PIPELINE_FORM_TITLE' => 'Pipeline por Etapa de Ventas',
  'LBL_CAMPAIGN_ROI_FORM_TITLE' => 'ROI Campaña',
  'LBL_MY_CLOSED_OPPORTUNITIES_GAUGE' => 'Mi Indicador de Oportunidades Ganadas',

  'LNK_NEW_CONTACT' => 'Nuevo Contacto',
  'LNK_NEW_ACCOUNT' => 'Nueva Cuenta',
  'LNK_NEW_OPPORTUNITY' => 'Nueva Oportunidad',
  'LNK_NEW_QUOTE' => 'Nuevo Presupuesto',
  'LNK_NEW_LEAD' => 'Nuevo Cliente Potencial',
  'LNK_NEW_CASE' => 'Nuevo Caso',
  'LNK_NEW_NOTE' => 'Nueva Nota o Archivo Adjunto',
  'LNK_NEW_CALL' => 'Registrar Llamada',
  'LNK_NEW_EMAIL' => 'Archivar Email',
  'LNK_COMPOSE_EMAIL' => 'Redactar Email',
  'LNK_NEW_MEETING' => 'Programar Reunión',
  'LNK_NEW_TASK' => 'Nueva Tarea',
  'LNK_NEW_BUG' => 'Informar de Incidencia',
  'LBL_ADD_BUSINESSCARD' => 'Nueva Tarjeta de Visita',
  'ERR_ONE_CHAR' => 'Por favor, indique al menos un número o letra para su búsqueda...',
  'LBL_OPEN_TASKS' => 'Mis Tareas Pendientes',
  'LBL_SEARCH_RESULTS' => 'Resultados de Búsqueda',  
  'LBL_SEARCH_RESULTS_IN' => 'en', 
  'LNK_NEW_SEND_EMAIL' => 'Redactar Email',
  'LBL_NO_ACCESS' => 'No tiene acceso a esta área. Contacte con el Administrador de su sitio para obtenerlo.',  
  'LBL_NO_RESULTS_IN_MODULE' => '-- Sin Resultados --',
  'LBL_NO_RESULTS' => '<h2>No se han encontrado resultados. Por favor, realice una nueva búsqueda.</h2><br>',
  'LBL_NO_RESULTS_TIPS' => '<h3>Trucos para la Búsqueda:</h3><ul><li>Asegúrese que ha seleccionado las categorías adecuadas más arriba.</li><li>Amplíe sus criterios de búsqueda.</li><li>Si aun así no obtiene resultados, pruebe con la opción de búsqueda avanzada.</li></ul>',
  
  'LBL_RELOAD_PAGE' => 'Por favor, <a href="javascript: window.location.reload()">recargue la ventana</a> para usar este Sugar Dashlet.',
  'LBL_ADD_DASHLETS' => 'Agregar Sugar Dashlets',
  'LBL_ADD_PAGE' => 'Agregar Página',
  'LBL_DEL_PAGE' => 'Eliminar Página',
  'LBL_WEBSITE_TITLE' => 'Sitio Web',
  'LBL_RSS_TITLE' => 'Fuente de Noticias',
  'LBL_DELETE_PAGE' => 'Eliminar Página',
  'LBL_CHANGE_LAYOUT' => 'Cambiar Diseño',
  'LBL_RENAME_PAGE' => 'Renombrar Página',
  'LBL_CLOSE_DASHLETS' => 'Cerrar',
  'LBL_CLOSE_SITEMAP' => 'Cerrar',
  'LBL_OPTIONS' => 'Opciones', 
  // dashlet search fields
  'LBL_TODAY'=>'Hoy',
  'LBL_YESTERDAY' => 'Ayer', 
  'LBL_TOMORROW'=>'Mañana',
  'LBL_LAST_WEEK'=>'La Semana Pasada',
  'LBL_NEXT_WEEK'=>'La Próxima Semana',
  'LBL_LAST_7_DAYS'=>'Últimos 7 Días',
  'LBL_NEXT_7_DAYS'=>'Siguientes 7 Días',
  'LBL_LAST_MONTH'=>'Último Mes',
  'LBL_NEXT_MONTH'=>'Siguiente Mes',
  'LBL_LAST_QUARTER'=>'Úlimo Trimestre',
  'LBL_THIS_QUARTER'=>'Este Trimestre',
  'LBL_LAST_YEAR'=>'Último Año',
  'LBL_NEXT_YEAR'=>'Próximo Año',
  'LBL_LAST_30_DAYS' => 'Últimos 30 Días',
  'LBL_NEXT_30_DAYS' => 'Próximos 30 días',
  'LBL_THIS_MONTH' => 'Este Mes',
  'LBL_THIS_YEAR' => 'Este Año',
  'LBL_MODULES' => 'Módulos',
  'LBL_CHARTS' => 'Gráficos',
  'LBL_TOOLS' => 'Herramientas',
  'LBL_WEB' => 'Web',
  'LBL_SEARCH_RESULTS' => 'Resultados de Búsqueda',

  // Dashlet Categories
  'dashlet_categories_dom' => array(
      'Module Views' => 'Vistas del Módulo',
      'Portal' => 'Portal',
      'Charts' => 'Gráficos',
      'Tools' => 'Herramientas',
      'Miscellaneous' => 'Varios'),
  'LBL_MAX_DASHLETS_REACHED' => 'Ha alcanzado el número máximo de Sugar Dashlets que su administrador ha establecido. Por favor, quite un dashlet poder añadir más.',
  'LBL_ADDING_DASHLET' => 'Agregar Sugar Dashlet ...',
  'LBL_ADDED_DASHLET' => 'Sugar Dashlet Agregado',
  'LBL_REMOVE_DASHLET_CONFIRM' => '¿Está seguro de que desea quitar el Sugar Dashlet?',
  'LBL_REMOVING_DASHLET' => 'Quitando Sugar Dashlet ...',
  'LBL_REMOVED_DASHLET' => 'Sugar Dashlet Quitado',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'General',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtros',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Sólo Mis Elementos',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'Título',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Mostrar Filas',
  'LBL_DASHLET_DELETE' => 'Eliminar Sugar Dashlet',
  'LBL_DASHLET_REFRESH' => 'Actualizar Sugar Dashlet',
  'LBL_DASHLET_EDIT' => 'Editar Sugar Dashlet',
 
  'LBL_TRAINING_TITLE' => 'Formación',

  'LBL_CREATING_NEW_PAGE' => 'Creando Nueva Página...',
  'LBL_NEW_PAGE_FEEDBACK' => 'Ha creado una nueva página. Puede agregar nuevo contenido con la opción Agregar Sugar Dashlets.',
  'LBL_DELETE_PAGE_CONFIRM' => '¿Está seguro de que desea eliminar esta página?',
  'LBL_SAVING_PAGE_TITLE' => 'Guardando Título de Página...',  
  'LBL_RETRIEVING_PAGE' => 'Recuperando Página...',
  
  // Default out-of-box names for tabs
  'LBL_HOME_PAGE_1_NAME' => 'Mi Sugar',
  'LBL_HOME_PAGE_2_NAME' => 'Ventas',
  'LBL_HOME_PAGE_3_NAME' => 'Soporte',
  'LBL_HOME_PAGE_6_NAME' => 'Marketing',
  'LBL_HOME_PAGE_4_NAME' => 'Monitorización',

  'LBL_CLOSE_SITEMAP' =>'Cerrar',
  
  'LBL_SEARCH' => 'Buscar',
  'LBL_CLEAR' => 'Limpiar', 
  
  'LBL_BASIC_CHARTS' => 'Gráficos Básicos',
  'LBL_REPORT_CHARTS' => 'Gráficos de Informes',
  
  'LBL_MY_FAVORITE_REPORT_CHARTS' => 'Mis Informes Favoritos',
  'LBL_GLOBAL_REPORT_CHARTS' => 'Informes del Equipo Globlal',
  'LBL_MY_TEAM_REPORT_CHARTS' => 'Informes de Mi Equipo',
  'LBL_MY_SAVED_REPORT_CHARTS' => 'Mis Informes Guardados',
  
  'LBL_DASHLET_SEARCH' => 'Buscar Sugar Dashlet',


//ABOUT page
  'LBL_VERSION' => 'Versión',
  'LBL_BUILD' => 'Build',
  'LBL_VIEWLICENSE_COM' => '<P>Este programa es software libre; puede redistribuirlo y/o modificarlo bajo los términos de la <a href="LICENSE.txt" target="_blank" class="body"> GNU General Public License versión 3</a> tal cual está publicada por la Free Software Foundation, incluyendo los permisos adicionales establecidos en las cabeceras del código fuente.</P>',
  'LBL_SUGAR_COMMUNITY_EDITION' => 'Sugar Community Edition',
  'LBL_SUGAR_PROFESSIONAL' => "Sugar Professional",
  'LBL_SUGAR_ENTERPRISE' => "Sugar Enterprise",
  'LBL_AND' => "y",
  'LBL_ARE' => "son",
  'LBL_TRADEMARKS' => 'marcas registradas',
  'LBL_OF' => 'de',
  'LBL_FOUNDERS' => 'Fundadores',
  'LBL_JOIN_SUGAR_COMMUNITY' => 'Únase a la Comunidad Sugar',
  'LBL_DETAILS_SUGARFORGE' => 'Colabore y desarolle extensiones de Sugar',
  'LBL_DETAILS_SUGAREXCHANGE' => 'Compre y venda extensiones certificadas de Sugar',
  'LBL_TRAINING' => 'Formación',
  'LBL_DETAILS_TRAINING' => 'Aprenda más de Sugar utilizando material formativo interactivo en línea',
  'LBL_FORUMS' => 'Foros',
  'LBL_DETAILS_FORUMS' => 'Discuta sobre Sugar con usuarios y desarrolladores expertos de la comunidad',
  'LBL_WIKI' => 'Wiki',
  'LBL_DETAILS_WIKI' => 'Busque en la Base de Conocimiento sobre temas de usuarios y desarrolladores',
  'LBL_DEVSITE' => 'Sitio del Desarrollador',
  'LBL_DETAILS_DEVSITE' => 'Descubra recursos, tutoriales, y útiles enlaces para acelerar sus desarrollos sobre Sugar',
  'LBL_GET_SUGARCRM_RSS' => 'Suscríbase a Canales sobre SugarCRM',
  'LBL_SUGARCRM_NEWS' => 'Noticias sobre SugarCRM',
  'LBL_SUGARCRM_TRAINING_NEWS' => 'Noticias sobre Formación SugarCRM',
  'LBL_SUGARCRM_FORUMS' => 'Foros SugarCRM',
  'LBL_SUGARFORGE_NEWS' => 'Noticias en SugarForge',
  'LBL_ALL_NEWS' => 'Todas las Noticias',
  'LBL_LINK_CURRENT_CONTRIBUTORS' => '¡Haga clic en este enlace para ver una lista actual de los contribuyentes de Sugar!',
  'LBL_SOURCE_CODE' => 'Código Fuente',
  'LBL_SOURCE_SUGAR' => 'Sugar - La aplicación más popular del mundo para la automatización de la fuerza de ventas, creada por SugarCRM Inc.',
  'LBL_SOURCE_XTEMPLATE' => 'XTemplate - Un motor de plantillas para PHP creado por Barnabás Debreceni',
  'LBL_SOURCE_LOG4PHP' => 'Log4php - Un port a PHP de Log4j, el framework más popular en Java para trazas, creado por Ceki Gülcü',
  'LBL_SOURCE_NUSOAP' => 'NuSOAP - Un conjunto de clases PHP que permiten a los desarrolladores crear y consumir servicios web creado por NuSphere Corporation y Dietrich Ayala',
  'LBL_SOURCE_JSCALENDAR' => 'JS Calendar - Un calendario para introducir fechas creado por Mihai Bazon',
  'LBL_SOURCE_PHPPDF' => 'PHP PDF - Una librería para crear documentos PDF creado por Wayne Munro',
  'LBL_SOURCE_JSONPHP' => 'JSON.php - Un script PHP para convertir a y del formato de datos JSON, por Michal Migurski.',
  'LBL_SOURCE_JSON' => 'JSON.js - Un analizador JSON y convertidor a cadenas JSON realizado en JavaScript.',
  'LBL_SOURCE_HTTP_WEBDAV_SERVER' => 'HTTP_WebDAV_Server - Una Implementación de Servidor WebDAV en PHP.',
  'LBL_SOURCE_JS_O_LAIT' => 'JavaScript O Lait - Una biblioteca de módulos y componentes reutilizables para mejorar el desarrollo con JavaScript, por Jan-Klaas Kollhof.',
  'LBL_SOURCE_PCLZIP' => 'PclZip - libería que ofrece funciones de compresión y extracción para archivos Zip, por Vincent Blavet',
  'LBL_SOURCE_SMARTY' => 'Smarty - Un motor de plantillas para PHP.',
  'LBL_SOURCE_OVERLIBMWS' => 'Overlibmws - una librería de JavaScript para creación de ventanas en el lado del cliente.',
  'LBL_SOURCE_WICK' => 'WICK: Web Input Completion Kit - Un control de predicción de escritura en JavaScript.',
  'LBL_SOURCE_YAHOO_UI_LIB' => 'Yahoo! User Interface Library - La Biblioteca de Utilidades de Interfaz Gráfica facilita la implementación de características para un cliente con un interfaz rico.',
  'LBL_SOURCE_PHPMAILER' => 'PHPMailer - Una clase para transferencia de correo para PHP con características completas.',
  'LBL_SOURCE_CRYPT_BLOWFISH' => 'Crypt_Blowfish - Permite una rápida encriptación blowfish en ambos sentidos sin requerir la extensión PHP MCrypt.',
  'LBL_SOURCE_HTML_SAFE' => 'HTML_Safe - Un analizador que elimina el contenido potencialmente peligroso del código HTML',
  'LBL_SOURCE_XML_HTMLSAX3' => 'XML_HTMLSax3 - Un analizador SAX para HTML y otros documentos con XML mal formado',
  'LBL_SOURCE_YAHOO_UI_LIB_EXT' => 'Yahoo! UI Extensions Library - Extensiones para la Yahoo! User Interface Library, por Jack Slocum',
  'LBL_SOURCE_JSMIN' => 'JSMin - un filtro que elimina comentarios y espacios en blanco no necesarios de los archivos JavaScript.',
  'LBL_SOURCE_SWFOBJECT' => 'SWFObject - detección JavaScript y script de incrustación del reproductor de Flash.',
  'LBL_SOURCE_TINYMCE' => 'TinyMCE - Control de edición WYSIWYG para navegadores web que permite al usuario editar el contenido HTML',
  'LBL_SOURCE_EXT' => 'Ext - Framework JavaScript para clientes de aplicaciones web.',
  'LBL_SOURCE_RECAPTCHA' => 'reCAPTCHA - Un servicio CAPTCHA gratuito que ayuda a digitalizar libros, periódicos y los programas de radio de toda la vida.', 
  'LBL_SOURCE_TCPDF' => 'TCPDF - Una clase PHP para generar documentos PDF.',
  'LBL_SOURCE_CSSMIN' => 'CssMin - Un analizador y minimizador de css.',
  'LBL_SOURCE_PHPSAML' => 'PHP-SAML - Un sencillo juego de herramientas SAML para PHP.',

  'LBL_DASHLET_TITLE' => 'Mis Sitios',
  'LBL_DASHLET_OPT_TITLE' => 'Título',
  'LBL_DASHLET_OPT_URL' => 'Dirección de Sitio Web',
  'LBL_DASHLET_OPT_HEIGHT' => 'Altura de Dashlet (en píxeles)',
  'LBL_DASHLET_SUGAR_NEWS' => 'Noticias Sugar',
  'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'Descubra Sugar',
);


?>
