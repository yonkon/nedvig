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
 * Portions created by SugarCRM are Copyright (C) 2004-2010 SugarCRM, Inc.;
 * All Rights Reserved.
 ********************************************************************************/
/*********************************************************************************
 * Description:  Defines the Spanish language pack for the base application.
 * $Id: es_es.lang.php,v 1.11 2010/10/31 17:22:26 aserrano Exp $
 * Source: SugarCRM 6.1.0RC2
 * Contributor(s): Alberto Serrano (alb.serrano@gmail.com).
 ********************************************************************************/

$mod_strings = array (
	'LBL_SEND_DATE_TIME'			=> 'Fecha de Envío',
	'LBL_IN_QUEUE'					=> 'En Proceso',
	'LBL_IN_QUEUE_DATE'				=> 'Fecha de Encolamiento',
	'LBL_DISCLOSURE_TITLE'			=> 'Añadir Mensaje sobre Confidencialidad de Contenido a Cada Correo',
	'LBL_DISCLOSURE_TEXT_TITLE'		=> 'Confidencialidad de Contenido',
	'LBL_DISCLOSURE_TEXT_SAMPLE'	=> 'AVISO: Este mensaje de correo es para uso único de su(s) destinatario(s) y puede contener información privada y confidencial. Queda prohibido cualquier tipo de revisión, uso, revelación o distribución no autorizada. Si usted no es el destinatario previsto, por favor, destruya todas las copias del mensaje original y notifique al remitente de forma que podamos corregir la dirección de correo en nuestro registro. Gracias.',

  'LBL_ID' => 'Id',
  'LBL_ATTACHMENT_AUDIT' => ' ha sido enviado.  No se ha duplicado en local para minimizar la utilización de espacio en el disco duro.',
  'LBL_OLD_ID' => 'Id Antiguo',
  'LBL_LIST_CAMPAIGN' => 'Campaña',
  'LBL_LIST_FORM_PROCESSED_TITLE' => 'Procesados',
  'LBL_LIST_FORM_TITLE' => 'Cola',
  'LBL_LIST_FROM_EMAIL' => 'Email del Remitente',
  'LBL_LIST_FROM_NAME' => 'Nombre del Remitente',
  'LBL_LIST_IN_QUEUE' => 'En Proceso',
  'LBL_LIST_RECIPIENT_EMAIL' => 'Email del Destinatario',
  'LBL_LIST_RECIPIENT_NAME' => 'Nombre del Destinatario',
  'LBL_LIST_SEND_ATTEMPTS' => 'Intentos de Envío',
  'LBL_LIST_SEND_DATE_TIME' => 'Enviar el',
  'LBL_LIST_USER_NAME' => 'Nombre de Usuario',
  'LBL_MODULE_TITLE' => 'Administración de Cola de Email Saliente',
  'LBL_SEARCH_FORM_PROCESSED_TITLE' => 'Búsqueda de Procesados',
  'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Colas',
  'LBL_VIEW_PROCESSED_EMAILS' => 'Ver Emails Procesados',
  'LBL_VIEW_QUEUED_EMAILS' => 'Ver Emails Encolados',
  'LBL_RELATED_ID' => 'Id Relacionado',
  'LBL_RELATED_TYPE' => 'Tipo Relacionado',
  'LBL_SAVE_OUTBOUND_RAW' => 'Guardar los Emails Salientes en formato original',
  'LBL_MARKETING_ID' => 'Id de Marketing',
  'LBL_MODULE_ID' => 'EmailMan',
  'LBL_LIST_MESSAGE_NAME' => 'Mensaje de Marketing',
  'LBL_MODULE_NAME' => 'Configuración de Correo',
  'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS' => 'Configurar Opciones de Correo de la Campaña',
  'LBL_CONFIGURE_SETTINGS' => 'Configurar Opciones de Correo',
  'LBL_EMAILS_PER_RUN' => 'Número de emails enviados por lote', 
  'LBL_EMAIL_PER_RUN_REQ' => 'Número de emails enviados por lote',
  'LBL_LOCATION_ONLY' => 'Ubicación',
  'LBL_LOCATION_TRACK' => 'Ubicación de los archivos de seguimiento de campaña (como campaign_tracker.php)',
  'LBL_CAMP_MESSAGE_COPY' => 'Guardar copias de los mensajes de la campaña:',
  'LBL_CAMP_MESSAGE_COPY_DESC' => '¿Desea guardar copias completas de <bold>CADA</bold> mensaje de email enviado durante todas las campañas?  <bold>Se recomienda el valor por defecto de no hacerlo</bold>.  Si elige no, sólo se guardará la plantilla enviada y las variables para recrear el mensaje individual.',
  'LBL_DEFAULT_LOCATION' => 'Por Defecto',
  'LBL_CUSTOM_LOCATION' => 'Definido por el Usuario',
  'LBL_EMAIL_DEFAULT_CHARSET' => 'Redactar mensajes de email en este juego de caracteres',
  'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Valor en Config.php para site_url',
  'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Utilice únicamente valores enteros para especificar el número de emails enviados por lote',
  'TXT_REMOVE_ME' => 'Para borrar su suscripción a esta lista de correo ',
  'TXT_REMOVE_ME_ALT' => 'Para borrar su suscripción a esta lista de correo vaya a',
  'TXT_REMOVE_ME_CLICK' => 'haga clic aquí',
  'LBL_EMAIL_DEFAULT_EDITOR' => 'Redactar correo usando este cliente',
  'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Eliminar archivos adjuntos y notas relacionadas junto a los Emails borrados',
  'LBL_EMAIL_GMAIL_DEFAULTS' => 'Rellenar previamente valores por defecto para Gmail&#153;',
  'LBL_EMAIL_SMTP_SSL' => '¿Habilitar SMTP sobre SSL?',
	'LBL_EMAIL_USER_TITLE'						=> 'Configuración por Defecto de Email para el Usuario',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Configuración de Correo Saliente',
    'LBL_MAIL_SENDTYPE'							=> 'Agente de Transferencia de Correo (MTA):',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Usar Autenticación SMTP:',
	'LBL_MAIL_SMTPPASS'							=> 'Contraseña:',
	'LBL_MAIL_SMTPPORT'							=> 'Puerto SMTP:',
	'LBL_MAIL_SMTPSERVER'						=> 'Servidor de Correo SMTP:',
	'LBL_MAIL_SMTPUSER'							=> 'Usuario:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Elija su proveedor de Email:',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Contraseña de Yahoo! Mail:',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'ID de Yahoo! Mail:',
	'LBL_GMAIL_SMTPPASS'					=> 'Contraseña de Gmail:',
	'LBL_GMAIL_SMTPUSER'					=> 'Dirección de Email de Gmail:',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Contraseña de Exchange:',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Nombre de usuario de Exchange:',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Puerto de Servidor Exchange:',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Servidor Exchange:',
	'LBL_EMAIL_LINK_TYPE'				=> 'Cliente de Correo',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Cliente de Correo Sugar:</b> Enviar correo utilizando el cliente de correo de la aplicación Sugar.<br><b>Cliente de Correo Externo:</b> Enviar correo utilizando un cliente de correo fuera de la aplicación Sugar, como Microsoft Outlook.',
    'LBL_NOTIFICATION_ON_DESC' 					=> 'Cuando está habilitado, se enviarán emails a los usuarios cuando se les asignen registros.',
	'LBL_NOTIFY_FROMADDRESS' 					=> 'Dirección remitente:',
	'LBL_NOTIFY_FROMNAME' 						=> 'Nombre remitente:',
	'LBL_NOTIFY_ON'								=> 'Notificaciones de Asignación',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> '¿Enviar notificaciones a usuarios nuevos?',
	'LBL_NOTIFY_TITLE'							=> 'Opciones de Correo',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Opciones de Correo Saliente',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Enviar notificación usando como remitente la dirección de email del usuario asignador',
	
	'LBL_SECURITY_TITLE'						=> 'Configuración de Seguridad de Email',
	'LBL_SECURITY_DESC'							=> 'Marque aquello que NO debería ser permitido en Email entrante o mostradas en el módulo de Emails.',
	'LBL_SECURITY_APPLET'						=> 'Etiqueta Applet',
	'LBL_SECURITY_BASE'							=> 'Etiqueta Base',
	'LBL_SECURITY_EMBED'						=> 'Etiqueta Embed',
	'LBL_SECURITY_FORM'							=> 'Etiqueta Form',
	'LBL_SECURITY_FRAME'						=> 'Etiqueta Frame',
	'LBL_SECURITY_FRAMESET'						=> 'Etiqueta Frameset',
	'LBL_SECURITY_IFRAME'						=> 'Etiqueta iFrame',
	'LBL_SECURITY_IMPORT'						=> 'Etiqueta Import',
	'LBL_SECURITY_LAYER'						=> 'Etiqueta Layer',
	'LBL_SECURITY_LINK'							=> 'Etiqueta Link',
	'LBL_SECURITY_OBJECT'						=> 'Etiqueta Object',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Seleccionar la configuración mínima de seguridad por defecto en Outlook (errores en la visualización del contenido).',
	'LBL_SECURITY_SCRIPT'						=> 'Etiqueta Script',
	'LBL_SECURITY_STYLE'						=> 'Etiqueta Style',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Cambiar Todas las Opciones',
	'LBL_SECURITY_XMP'							=> 'Etiqueta Xmp',
    'LBL_YES'                                   => 'Sí',
    'LBL_NO'                                    => 'No',
    'LBL_PREPEND_TEST'                          => '[Prueba]: ',
	'LBL_SEND_ATTEMPTS'							=> 'Intentos de Envío',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Configurar el servidor de correo saliente por defecto para enviar notificaciones de correo, incluyendo alertas de workflow.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Permite a los usuarios utilizar esta cuenta para correo saliente:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Cuando esta opción está seleccionada, todos los usuarios podrán enviar correos utilizando la misma<br> cuenta de correo saliente para enviar notificaciones del sistema y alertas.  Si la opción no está seleccionada,<br> los usuarios podrán utilizar el servidor de correo saliente una vez proporcionen la información sobre su propia cuenta.',
    'LBL_FROM_ADDRESS_HELP'                     => 'Cuando está habilitado, el nombre de usuario y la dirección de correo del usuario asignante será incluida en el campo De del email. Es posible que esta característica no funcione con servidores SMTP que no permiten enviar desde una cuenta de correo distinta a la cuenta de correo del servidor.'

);


?>