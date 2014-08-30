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
 * $Id: es_es.lang.php,v 1.10 2010/10/31 17:43:08 aserrano Exp $
 * Source: SugarCRM 6.1.0RC2
 * Contributor(s): Alberto Serrano (alb.serrano@gmail.com).
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Empleados',
  'LBL_MODULE_TITLE' => 'Empleados: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Empleados',
  'LBL_LIST_FORM_TITLE' => 'Empleados',
  'LBL_NEW_FORM_TITLE' => 'Nuevo Empleado',
  'LBL_EMPLOYEE' => 'Empleado:',
  'LBL_LOGIN' => 'Nombre de Usuario',
  'LBL_RESET_PREFERENCES' => 'Restablecer Preferencias Por Defecto',
  'LBL_TIME_FORMAT' => 'Formato Hora:',
  'LBL_DATE_FORMAT' => 'Formato Fecha:',
  'LBL_TIMEZONE' => 'Zona Horaria:',
  'LBL_CURRENCY' => 'Moneda:',
  'LBL_LIST_NAME' => 'Nombre',
  'LBL_LIST_LAST_NAME' => 'Apellido',
  'LBL_LIST_EMPLOYEE_NAME' => 'Nombre del Empleado',
  'LBL_LIST_DEPARTMENT' => 'Departamento',
  'LBL_LIST_REPORTS_TO_NAME' => 'Informa a',
  'LBL_LIST_EMAIL' => 'Email',
  'LBL_LIST_PRIMARY_PHONE' => 'Teléfono Principal',
  'LBL_LIST_USER_NAME' => 'Nombre de Usuario',
  'LBL_LIST_EMPLOYEE_STATUS' => 'Estado del Empleado',
  'LBL_LIST_ADMIN' => 'Admin',
  'LBL_NEW_EMPLOYEE_BUTTON_TITLE' => 'Nuevo Empleado [Alt+N]',
  'LBL_NEW_EMPLOYEE_BUTTON_LABEL' => 'Nuevo Empleado',
  'LBL_NEW_EMPLOYEE_BUTTON_KEY' => 'N',
  'LBL_ERROR' => 'Error:',
  'LBL_PASSWORD' => 'Contraseña:',
  'LBL_EMPLOYEE_NAME' => 'Nombre de Empleado:',
  'LBL_USER_NAME' => 'Nombre de Usuario:',
  'LBL_FIRST_NAME' => 'Nombre:',
  'LBL_LAST_NAME' => 'Apellido:',
  'LBL_EMPLOYEE_SETTINGS' => 'Preferencias del Empleado',
  'LBL_THEME' => 'Tema:',
  'LBL_LANGUAGE' => 'Idioma:',
  'LBL_ADMIN' => 'Administrador:',
  'LBL_EMPLOYEE_INFORMATION' => 'Información del Empleado',
  'LBL_OFFICE_PHONE' => 'Tel. Oficina:',
  'LBL_REPORTS_TO' => 'Informa a Id:',
  'LBL_REPORTS_TO_NAME' => 'Informa a:',
  'LBL_OTHER_PHONE' => 'Otro:',
  'LBL_OTHER_EMAIL' => 'Email Alternativo:',
  'LBL_NOTES' => 'Notas:',
  'LBL_DEPARTMENT' => 'Departamento:',
  'LBL_TITLE' => 'Título:',
  'LBL_ANY_ADDRESS' => 'Dirección Alternativa:',
  'LBL_ANY_PHONE' => 'Tel. Alternativo:',
  'LBL_ANY_EMAIL' => 'Email Alternativo:',
  'LBL_ADDRESS' => 'Dirección:',
  'LBL_CITY' => 'Ciudad:',
  'LBL_STATE' => 'Estado/Provincia:',
  'LBL_POSTAL_CODE' => 'Código Postal:',
  'LBL_COUNTRY' => 'País:',
  'LBL_NAME' => 'Nombre:',
  'LBL_MOBILE_PHONE' => 'Móvil:',
  'LBL_OTHER' => 'Otro:',
  'LBL_FAX' => 'Fax:',
  'LBL_EMAIL' => 'Correo electrónico:',
  'LBL_HOME_PHONE' => 'Tel. Casa:',
  'LBL_WORK_PHONE' => 'Tel. Trabajo:',
  'LBL_ADDRESS_INFORMATION' => 'Información de Dirección',
  'LBL_EMPLOYEE_STATUS' => 'Estado del Empleado:',
  'LBL_PRIMARY_ADDRESS' => 'Dirección Principal:',
  'LBL_SAVED_SEARCH' => 'Opciones de Diseño',
  'LBL_CREATE_USER_BUTTON_TITLE' => 'Crear Usuario [Alt+N]',
  'LBL_CREATE_USER_BUTTON_LABEL' => 'Crear Usuario',
  'LBL_CREATE_USER_BUTTON_KEY' => 'N',
  'LBL_FAVORITE_COLOR' => 'Color Favorito:',
  'LBL_MESSENGER_ID' => 'Nombre MI:',
  'LBL_MESSENGER_TYPE' => 'Tipo MI:',
  'ERR_EMPLOYEE_NAME_EXISTS_1' => 'El nombre del empleado ',
  'ERR_EMPLOYEE_NAME_EXISTS_2' => ' ya existe.  No se permiten empleados duplicados.  Cambie el nombre del empleado para que sea único.',
  'ERR_LAST_ADMIN_1' => 'El nombre del empleado "',
  'ERR_LAST_ADMIN_2' => '" es el último empleado con permisos de administrador.  Al menos un empleado debe ser un administrador.',
  'LNK_NEW_EMPLOYEE' => 'Crear Empleado',
  'LNK_EMPLOYEE_LIST' => 'Ver Empleados',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para eliminar el empleado.',
  'LBL_DEFAULT_TEAM' => 'Equipo por Defecto:',
  'LBL_DEFAULT_TEAM_TEXT' => 'Selecciona el equipo por defecto para nuevos registros',
  'LBL_MY_TEAMS' => 'Mis Equipos',
  'LBL_LIST_DESCRIPTION' => 'Descripción',
  'LNK_EDIT_TABS' => 'Editar Pestañas',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => '¿Está seguro de que desea quitar a este empleado del equipo?',
  'LBL_SUGAR_LOGIN' => 'Es Usuario de Sugar',  
  'LBL_RECEIVE_NOTIFICATIONS' => 'Notificar al ser Asignado',  
  'LBL_IS_ADMIN' => 'Es Administrador',  
  'LBL_GROUP' => 'Usuario de Grupo',
  'LBL_PORTAL_ONLY'	=> 'Usuario Sólo de Portal',
  'LBL_PHOTO'	=> 'Foto',
  'LBL_DELETE_USER_CONFIRM' => 'Este Empleado es también un Usuario. Si elimina el registro de Empleado también eliminará el registro de Usuario, y el Usuario ya no podrá acceder a la aplicación. ¿Desea proceder con la eliminación del registro?',
  'LBL_DELETE_EMPLOYEE_CONFIRM' => '¿Está seguro de que desea eliminar este empleado?',
);


?>