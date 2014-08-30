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
 * *******************************************************************************/
/*********************************************************************************
 * Description:  Defines the Spanish language pack for the base application.
 * $Id: es_es.lang.php,v 1.9 2010/08/03 01:22:09 aserrano Exp $
 * Source: SugarCRM 6.0.0
 * Contributor(s): Alberto Serrano (alb.serrano@gmail.com).
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Actividades',
  'LBL_MODULE_TITLE' => 'Actividades: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Actividades',
  'LBL_LIST_FORM_TITLE' => 'Lista de Actividades',
  'LBL_LIST_SUBJECT' => 'Asunto',
  'LBL_LIST_CONTACT' => 'Contacto',
  'LBL_LIST_RELATED_TO' => 'Relacionado con',
  'LBL_LIST_DATE' => 'Fecha',
  'LBL_LIST_TIME' => 'Hora inicio',
  'LBL_LIST_CLOSE' => 'Cerrar',
  'LBL_SUBJECT' => 'Asunto:',
  'LBL_STATUS' => 'Estado:',
  'LBL_LOCATION' => 'Lugar:',
  'LBL_DATE_TIME' => 'Inicio:',
  'LBL_DATE' => 'Fecha inicio:',
  'LBL_TIME' => 'Hora inicio:',
  'LBL_DURATION' => 'Duración:',
  'LBL_DURATION_MINUTES' => 'Minutos de Duración:',
  'LBL_HOURS_MINS' => '(horas/minuntos)',
  'LBL_CONTACT_NAME' => 'Contacto: ',
  'LBL_MEETING' => 'Reunión:',
  'LBL_DESCRIPTION_INFORMATION' => 'Información adicional',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_COLON' => ':',
  'LBL_DEFAULT_STATUS' => 'Planificada',
  'LNK_NEW_CALL' => 'Registrar Llamada',
  'LNK_NEW_MEETING' => 'Programar Reunión',
  'LNK_NEW_TASK' => 'Nueva Tarea',
  'LNK_NEW_NOTE' => 'Nueva Nota o Agregar Archivo Adjunto',
  'LNK_NEW_EMAIL' => 'Nuevo Email Archivado',
  'LNK_CALL_LIST' => 'Ver Llamadas',
  'LNK_MEETING_LIST' => 'Ver Reuniones',
  'LNK_TASK_LIST' => 'Ver Tareas',
  'LNK_NOTE_LIST' => 'Ver Notas',
  'LNK_EMAIL_LIST' => 'Ver Emails',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para eliminar la cuenta.',
  'NTC_REMOVE_INVITEE' => '¿Está seguro de que desea eliminar a este asistente a la reunión?',
  'LBL_INVITEE' => 'Asistentes',
  'LBL_LIST_DIRECTION' => 'Dirección',
  'LBL_DIRECTION' => 'Dirección',
  'LNK_NEW_APPOINTMENT' => 'Nueva Cita',
  'LNK_VIEW_CALENDAR' => 'Ver Calendario',
  'LBL_OPEN_ACTIVITIES' => 'Actividades Abiertas',
  'LBL_HISTORY' => 'Historial',
  'LBL_UPCOMING' => 'Mis Próximas Citas',
  'LBL_TODAY' => 'hasta ',
  'LBL_NEW_TASK_BUTTON_TITLE' => 'Nueva Tarea [Alt+N]',
  'LBL_NEW_TASK_BUTTON_KEY' => 'N',
  'LBL_NEW_TASK_BUTTON_LABEL' => 'Nueva Tarea',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Programar Reunión [Alt+M]',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'M',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Programar Reunión',
  'LBL_SCHEDULE_CALL_BUTTON_TITLE' => 'Registrar Llamada [Alt+C]',
  'LBL_SCHEDULE_CALL_BUTTON_KEY' => 'C',
  'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Registrar Llamada',
  'LBL_NEW_NOTE_BUTTON_TITLE' => 'Nueva Nota o Archivo Adjunto [Alt+T]',
  'LBL_NEW_NOTE_BUTTON_KEY' => 'T',
  'LBL_NEW_NOTE_BUTTON_LABEL' => 'Nueva Nota o Archivo Adjunto',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Email Seguimiento [Alt+K]',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Email Seguimiento',
  'LBL_LIST_STATUS' => 'Estado',
  'LBL_LIST_DUE_DATE' => 'Fecha Vencimiento',
  'LBL_LIST_LAST_MODIFIED' => 'Modificado',
  'NTC_NONE_SCHEDULED' => 'Sin programación.',
  'appointment_filter_dom' => 
  array (
    'today' => 'hoy',
    'tomorrow' => 'mañana',
    'this Saturday' => 'esta semana',
    'next Saturday' => 'la semana que viene',
    'last this_month' => 'este mes',
    'last next_month' => 'el mes que viene',
  ),
  'LNK_IMPORT_CALLS'=>'Importar Llamadas',
  'LNK_IMPORT_MEETINGS'=>'Importar Reuniones',
  'LNK_IMPORT_TASKS'=>'Importar Tareas',
  'LNK_IMPORT_NOTES' => 'Importar Notas',
  'NTC_NONE' => 'Ninguna',
  'LBL_ACCEPT_THIS' => '¿Aceptar?',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Actividades Abiertas',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario Asignado',
);


?>
