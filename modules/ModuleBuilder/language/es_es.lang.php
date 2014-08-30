<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Enterprise Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/products/sugar-enterprise-eula.html
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2010 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/
/*********************************************************************************
 * Description:  Defines the Spanish language pack for the base application.
 * $Id: es_es.lang.php,v 1.25 2010/10/31 20:04:27 aserrano Exp $
 * Source: SugarCRM 6.1.0RC2
 * Contributor(s): Alberto Serrano (alb.serrano@gmail.com).
 ********************************************************************************/

$mod_strings = array(
'help'=>array(
	'package'=>array(
			'create'=>'Proporcione un <b>Nombre</b> para el paquete. El nombre que introduzca debe ser alfanumérico y no debe contener espacios. (Ejemplo: HR_Management)<br/><br/> Puede proporcionar la información del <b>Autor</b> y la <b>Descripción</b> del paquete. <br/><br/>Haga clic en <b>Guardar</b> para crear el paquete.',
			'modify'=>'Las propiedades y acciones posibles del <b>Paquete</b> aparecen aquí.<br><br>Puede modificar el <b>Nombre</b>, <b>Autor</b> y <b>Descripción</b> del paquete, así como ver y personalizar cualquiera de los módulos contenidos en el paquete.<br><br>Haga clic en <b>Nuevo Módulo</b> para crear un módulo para el paquete.<br><br>Si el paquete contiene al menos un módulo, puede <b>Publicar</b> y <b>Desplegar</b> el paquete, así como <b>Exportar</b> las personalizaciones realizadas al paquete.',
			'name'=>'Este es el <b>Nombre</b> del paquete actual. <br/><br/>El nombre que introduzca debe ser alfanumérico, comenzar por una letra y no contener espacios. (Example: HR_Management)',
			'author'=>'Este es el <b>Autor</b> mostrado durante la instalación como el nombre de la entidad que ha creado el paquete.<br><br>El Autor podría ser un individuo o una empresa.',
			'description'=>'Esta es la <b>Descripción</b> del paquete que se muestra durante la instalación.',
			'publishbtn'=>'Haga clic en <b>Publicar</b> para guardar todos los datos introducidos y para crear un archivo .zip que sea una versión instalable del paquete.<br><br>Utilice el <b>Cargardor de Módulos</b> para subir el archivo .zip e instalar el paquete.',
			'deploybtn'=>'Haga clic en <b>Desplegar</b> para guardar todos los datos introducidos y para instalar el paquete, incluyendo todos los módulos, en la instancia actual.',
			'duplicatebtn'=>'Haga clic en <b>Duplicar</b> para copiar el contenido del paquete en un paquete nuevo y mostrar el recién creado paquete. <br/><br/>Se creará de forma automática un nuevo nombre para el nuevo paquete añadiendo un número al final del nombre del paquete original. Puede renombrar el nuevo paquete introduciendo un nuevo <b>Nombre</b> y haciendo clic en <b>Guardar</b>.',			
			'exportbtn'=>'Haga clic en <b>Exportar</b> para crear un archivo .zip que contenga las personalizaciones hechas al paquete.<br><br> El archivo generado no es una versión instalable del paquete.<br><br>Utilice el <b>Cargador de Módulos</b> para importar el archivo .zip y para que el paquete, personalizaciones incluidas, aparezca en el Constructor de Módulos.',
			'deletebtn'=>'Haga clic en <b>Eliminar</b> para eliminar este paquete y todos los archivos relacionados con este paquete.',
			'savebtn'=>'Haga clic en <b>Guardar</b> para guardar todos los datos introducidos relativos al paquete.',
			'existing_module'=>'Haga clic en el icono <b>Módulo</b> para editar las propiedades y personalizar los campos, relaciones y diseños asociados al módulo.',
			'new_module'=>'Haga clic en <b>Nuevo Módulo</b> para crear un nuevo módulo para este paquete.',
			'key'=>'Esta <b>Clave</b> alfanumérica de 5 letras se usará para prefijar todos los directorios, nombres de clases y tablas de base de datos de todos los módulos en el paquete actual.<br><br>La clave se usa para contribuir a la unicidad de los nombres de tablas.',
			'readme'=>'Haga clic para agregar un texto <b>Léame</b> para este paquete.<br><br>El Léame quedará disponible en el momento de instalación.',
	),
	'main'=>array(
		
	
	),
	'module'=>array(

		'create'=>'Proporcione un <b>Nombre</b> para el módulo. La <b>Etiqueta</b> que introduzca aparecerá en la pestaña de navegación. <br/><br/>Elija mostrar una pestaña de navegación para el módulo marcando el cuadro <b>Pestaña de Navegación</b>.<br/><br/>Marque el cuadro <b>Seguridad de Equipos</b> para tener un campo de selección de Equipos dentro de los registros del módulo. <br/><br/>Finalmente, seleccione el tipo de módulo que desea crear. <br/><br/>Seleccione un tipo de plantilla. Cada plantilla contiene un conjunto determinado de campos, así como diseños predefinidos, para ser usados como base de su módulo. <br/><br/>Haga clic en <b>Guardar</b> para crear el módulo.',




		'modify'=>'Puede cambiar las propiedades del módulo o personalizar los <b>Campos</b>, <b>Relaciones</b> y <b>Diseños</b> relacionados con el módulo.',
		'importable'=>'Marcando la opción <b>Importable</b> se habilitará la importación para este módulo.<br><br>Un enlace al Asistente de Importación aparecerá en el panel de Atajos del módulo.  El Asistente de Importación le facilitará la importación de datos provenientes de fuentes externas en el módulo personalizado.',
		'team_security'=>'Marcando la opción <b>Seguridad de Equipos</b> se habilitará la seguridad de equipos para este módulo.  <br/><br/>Si la seguridad de equipos está habilitada, el campo de selección de Equipo aparecerá en los registros del módulo ',
		'reportable'=>'Marcando esta opción permitirá que este módulo tenga informes que corran contra él.',
		'assignable'=>'Marcando esta opción permitirá que un registro de este módulo sea asignado a un usuario.',
		'has_tab'=>'Marcando <b>Pestaña de Navegación</b> proveerá al módulo de una pestaña de navegación.',
		'acl'=>'Marcando esta opción habilitará los Controles de Acceso para este módulo, incluyendo la Seguridad a Nivel de Campo.',
		'studio'=>'Marcando esta opción permitirá que los administradores personalicen este módulo dentro del Estudio.',
		'audit'=>'Marcando esta opción habilitará la Auditoría para este módulo. Los cambios a algunos de los campos serán registrados de forma que los administradores puedan revisar el historial de cambios.',
		'viewfieldsbtn'=>'Haga clic en <b>Ver Campos</b> para ver los campos asociados con el módulo y crear y editar campos personalizados.',
		'viewrelsbtn'=>'Haga clic en <b>Ver Relaciones</b> para ver las relaciones asociadas con este módulo y crear nuevas relaciones.',
		'viewlayoutsbtn'=>'Haga clic en <b>Ver Diseños</b> para ver los diseños de este módulo y personalizar la disposición de los campos dentro de los diseños.',
		'duplicatebtn'=>'Haga clic en <b>Duplicar</b> para copiar las propiedades del módulo en uno nuevo y mostrar el nuevo módulo. <br/><br/>Se creará de forma automática un nuevo nombre para el nuevo módulo añadiendo un número al final del nombre del módulo original.',
		'deletebtn'=>'Haga clic en <b>Eliminar</b> para eliminar este módulo.',
		'name'=>'Este es el <b>Nombre</b> del módulo actual.<br/><br/>El nombre debe ser alfanumérico, empezar por una letra y no contener espacios. (Example: HR_Management)',
		'label'=>'Esta es la <b>Etiqueta</b> que aparecerá en la pestaña de navegación del módulo. ',
		'savebtn'=>'Haga clic en <b>Guardar</b> para guardar todos los datos introducidos relacionados con el módulo.',
		'type_basic'=>'El tipo de plantilla <b>Básica</b> proporciona los campos básicos, como Nombre, Asignado a, Equipo, Fecha de Creación y Descripción.',
		'type_company'=>'El tipo de plantilla <b>Empresa</b> proporciona campos particulares de una organización, como Nombre de Empresa, Industria y Dirección de Facturación.<br/><br/>Use esta plantilla para crear módulos que sean similares al módulo estándar de Cuentas.',
		'type_issue'=>'El tipo de plantilla <b>Incidencia</b> proporciona campos particulares de casos e incidencias, como Número, Estado, Prioridad y Descripción.<br/><br/>Use esta plantilla para crear módulos que sean similares a los módulos estándar de Casos y Seguimiento de Incidencias.',
		'type_person'=>'El tipo de plantilla <b>Persona</b> proporciona campos particulares de individuos, como Saludo, Cargo, Nombre, Dirección y Número de Teléfono.<br/><br/>Use esta plantilla para crear módulos que sean similares a los módulos estándar de Contactos y Clientes Potenciales.',
		'type_sale'=>'El tipo de plantilla <b>Ventas</b> proporciona campos específicos de una oportunidad, como la Toma de Contacto, Etapa, Cantidad y Probabilidad.<br/><br/>Use esta plantilla para crear módulos que sean similares al módulo estándar de Oportunidades.',
		'type_file'=>'La plantilla <b>Archivo</b> proporciona campos específicos de un Documento, como Nombre de Archivo, tipo de Documento, y Fecha de Publicación.<br><br>Use esta plantilla para crear módulos que sean similares al módulo estándar de Documentos.',
	
	),
	'dropdowns'=>array(
		'default' => 'Todas las <b>Listas Desplegables</b> de la aplicación se listan a aquí.<br><br>Las listas desplegables pueden ser usadas para campos de lista desplegable de cualquier módulo.<br><br>Para realizar cambios a una lista desplegable existente, haga clic en su nombre.<br><br>Haga clic en <b>Agregar Desplegable</b> para crear un nuevo desplegable.',
		'editdropdown'=>'Las listas desplegables pueden ser utilizadas para campos desplegables estándar o personalizados de cualquier módule.<br><br>Proporcione un <b>Nombre</b> para la lista desplegable.<br><br>Si tiene instalado otros paquetes de idioma en la aplicación, podrá seleccionar el <b>Idioma</b> a utilizar para los elementos de la lista.<br><br>En el campo <b>Nombre de Elemento</b>, proporcione un nombre para la opción en la lista desplegable.  Este nombre no aparecerá en la lista desplegable que es visible a los usuarios.<br><br>En el campo <b>Etiqueta de Visualización</b>, proporcione una etiqueta que será visible a los usuarios.<br><br>Tras proporcionar el nombre de elemento y la etiqueta de visualización, haga clic en <b>Agregar</b> para agregar el elemento a la lista desplegable.<br><br>Para cambiar el orden de los elementos en la lista, arrastre y suelte elementos en las posiciones deseadas.<br><br>Para editar la etiqueta de visualización de un elemento, haga clic en el icono <b>Editar</b>, e introduzca una nueva etiqueta. Para eliminar un elemento de la lista desplegable, haga clic en el icono <b>Eliminar</b>.<br><br>Para deshacer un cambio realizado a una etiqueta de visualización, haga clic en <b>Deshacer</b>.  Para rehacer un cambio que ha sido previamente deshecho, haga clic en <b>Rehacer</b>.<br><br>Haga clic en <b>Guardar</b> para guardar la lista desplegable.',
	),
	'subPanelEditor'=>array(
		'modify'	=> 'Todos los campos que pueden ser mostrados en el <b>Subpanel</b> aparecen aquí.<br><br>La columna <b>Por Defecto</b> contiene los campos que son mostrados en el Subpanel.<br/><br/>La columna <b>Ocultos</b> contiene los campos que pueden ser agregados a la columna Por Defecto.',
		'savebtn'	=> 'Haga clic en <b>Guardar y Desplegar</b> para guardar los cambios que ha realizado y activarlos en el módulo.',
		'historyBtn'=> 'Haga clic en <b>Ver Historial</b> para ver y restaurar del historial un diseño previamente guardado.',
	    'historyDefault'=> 'Haga clic en <b>Restaurar Vista Por Defecto</b> para restaurar el diseño original de una vista.',
		'Hidden' 	=> 'Los campos <b>Ocultos</b> no aparecen en el subpanel.',
		'Default'	=> 'Los campos <b>Por Defecto</b> aparecen en el subpanel.',

	),
	'listViewEditor'=>array(
		'modify'	=> 'Todos los campos que pueden ser mostrados en la <b>Vista de Lista</b> aparecen aquí.<br><br>La columna <b>Por Defecto</b> contiene los campos que son mostrados en la Vista de Lista por defecto.<br/><br/>La columna <b>Displonibles</b> contiene los campos que un usuario puede seleccionar en la Búsqueda para crear una Vista de Lista personalizada. <br/><br/>La columna <b>Ocultos</b> muestra los campos que pueden ser agregados a las columnas Por Defecto o Disponibles.', 
		'savebtn'	=> 'Haga clic en <b>Guardar y Desplegar</b> para guardar los cambios que ha realizado y activarlos en el módulo.',
		'historyBtn'=> 'Haga clic en <b>Ver Historial</b> para ver y restaurar del historial un diseño previamente guardado.',
	    'historyDefault'=> 'Haga clic en <b>Restaurar Vista Por Defecto</b> para restaurar el diseño original de una vista.',
		'Hidden' 	=> 'Los campos <b>Ocultos</b> no están disponibles para ser vistos por los usuarios en las Vistas de Lista.',
		'Available' => 'Los campos <b>Disponibles</b> no se muestran por defecto, pero pueden ser agregados a las Vistas de Lista por los usuarios.',
		'Default'	=> 'Los campos <b>Por Defecto</b> aparecen en las Vistas de Lista que no han sido personalizadas por los usuarios.'
	),
	'popupListViewEditor'=>array(
		'modify'	=> 'Todos los campos que pueden ser mostrados en la <b>Vista de Lista</b> aparecen aquí. <br><br>La columna <b>Por Defecto</b> contiene los campos que serán mostrados en la Lista de Vista por defecto.<br/><br/>La columna <b>Ocultos</b> contiene los campos que pueden ser añadidos a las columnas Por Defecto o Disponibles.', 
		'savebtn'	=> 'Al hacer clic en <b>Guardar y Desplegar</b> guardará todos los cambios y los hará activos en el módulo.',
		'historyBtn'=> 'Haga clic en <b>Ver Historial</b> para ver y restaurar del historial un diseño previamente guardado.',
	    'historyDefault'=> 'Haga clic en <b>Restaurar Vista Por Defecto</b> para restaurar el diseño original de una vista.',
		'Hidden'	=> 'Campos <b>Ocultos</b> no disponibles actualmente para que los usuarios los vean en Vistas de Lista.',
		'Default'	=> 'Los campos <b>Por Defecto</b> aparecen en Vistas de Lista que no han sido personalizadas por un usuario.'
	),
	'searchViewEditor'=>array(
		'modify'	=> 'Todos los campos que pueden ser mostrados en el formulario de <b>Búsqueda</b> aparecen aquí. <br><br>La columna <b>Por Defecto</b> contiene los campos que serán mostrados en el formulario de Búsqueda.<br/><br/>La columna <b>Ocultos</b> contiene los campos disponibles para que usted, como administrador, los pueda agregar al formulario de Búsqueda.', 
		'savebtn'	=> 'Al hacer clic en <b>Guardar y Desplegar</b> guardará todos los cambios y los activará',
		'Hidden' 	=> 'Los campos <b>Ocultos</b> no aparecen en la búsqueda.',
		'historyBtn'=> 'Haga clic en <b>Ver Historial</b> para ver y restaurar del historial un diseño previamente guardado.',
	    'historyDefault'=> 'Haga clic en <b>Restaurar Vista Por Defecto</b> para restaurar el diseño original de una vista.',
		'Default'	=> 'Los campos <b>Por Defecto</b> aparecen en la Búsqueda.'
	),
	'layoutEditor'=>array(
		'defaultdetailview'=>'El área de <b>Diseño</b> contiene los campos que actualmente están siendo mostrados en la <b>Vista de Detalle</b>.<br/><br/>La <b>Caja de Herramientas</b> contiene la <b>Papelera de Reciclaje</b> y los campos y elementos del diseño que pueden ser agregados al mismo.<br><br>Haga cambios al diseño arrastrando y soltando elementos y campos entre la <b>Caja de Herramientas</b> y el <b>Diseño</b> así como dentro del mismo diseño.<br><br>Para quitar un campo del diseño, arrastre el campo a la <b>Papelera de Reciclaje</b>. El campo pasará a estar disponible en la Caja de Herramientas para ser agregado al diseño.',
		'defaultquickcreate'=>'El área de <b>Diseño</b> contiene los campos que actualmente están siendo mostrados en el formulario de <b>Creación Rápida</b>.<br><br>El formulario de Creación Rápida aparece en los subpaneles de un módulo cuando el botón Crear es pulsado.<br/><br/>La <b>Caja de Herramientas</b> contiene la <b>Papelera de Reciclaje</b> y los campos y elementos del diseño que pueden ser agregados al mismo.<br><br>Haga cambios al diseño arrastrando y soltando elementos y campos entre la <b>Caja de Herramientas</b> y el <b>Diseño</b> así como dentro del mismo diseño.<br><br>Para quitar un campo del diseño, arrastre el campo a la <b>Papelera de Reciclaje</b>. El campo pasará a estar disponible en la Caja de Herramientas para ser agregado al diseño.',
		//this defualt will be used for edit view
		'default'	=> 'El área de <b>Diseño</b> contiene los campos que actualmente están siendo mostrados en la <b>Vista de Edición</b>.<br/><br/>La <b>Caja de Herramientas</b> contiene la <b>Papelera de Reciclaje</b> y los campos y elementos del diseño que pueden ser agregados al mismo.<br><br>Haga cambios al diseño arrastrando y soltando elementos y campos entre la <b>Caja de Herramientas</b> y el <b>Diseño</b> así como dentro del mismo diseño.<br><br>Para quitar un campo del diseño, arrastre el campo a la <b>Papelera de Reciclaje</b>. El campo pasará a estar disponible en la Caja de Herramientas para ser agregado al diseño.',
		'saveBtn'	=> 'Haga clic en <b>Guardar</b> para preservar los cambios que ha realizado al diseño desde la última vez que lo guardó.<br><br>Los cambios no se mostrarán en el módulo hasta que Despliegue los cambios guardados.',
		'historyBtn'=> 'Haga clic en <b>Ver Historial</b> para ver y restaurar del historial un diseño previamente guardado.',
	    'historyDefault'=> 'Haga clic en <b>Restaurar Vista Por Defecto</b> para restaurar el diseño original de una vista.',
		'publishBtn'=> 'Haga clic en <b>Guardar y Desplegar</b> para guardar todos los cambios que ha realizado al diseño desde la última vez que lo guardó, y para dejar activos los cambios en el módulo.<br><br>El diseño será mostrado de nuevo inmediatamente en el módulo.',
		'toolbox'	=> 'La <b>Caja de Herramientas</b> contiene la <b>Papelera de Reciclaje</b>, elementos de diseño adicionales y el conjunto de campos disponibles para ser agregados al diseño.<br/><br/>Los elementos de diseño y los campos de la Caja de Herramientas pueden ser arrastrados y soltados en el diseño, y los elementos de diseño y los campos pueden ser arrastrados y soltados del diseño a la Caja de Herramientas.<br><br>Los elementos de diseño son <b>Paneles</b> y <b>Filas</b>. Agregando una nueva fila o un nuevo panel al diseño proporciona ubicaciones adicionales en el diseño para los campos.<br/><br/>Arrastre y suelte cualquier campo en la Caja de Herramientas o en el diseño a una posición de campo ocupada para intercambiar las ubicacines de los dos campos.<br/><br/>El campo de <b>Relleno</b> crea espacio vacío en el diseño allí donde es colocado.',
		'panels'	=> 'El área de <b>Diseño</b> proporciona una vista sobre cómo el diseño aparecerá en el módulo cuando los cambios realizados al diseño sean desplegados.<br/><br/>Puede reposicionar campos, filas y paneles arrastrándolos y soltándolos en la ubicación deseada.<br/><br/>Quite elementos arrastrándolos y soltándolos en la <b>Papelera de Reciclaje</b> de la Caja de Herramientas, o agregue nuevos elementos y campos arrastrándolos de la <b>Caja de Herramientas</b> y soltándolos en la ubicación deseada del diseño.',
		'delete'	=> 'Arrastre y suelte cualquier elemento aquí para quitarlo del diseño',
		'property'	=> 'Edite la etiqueta mostrada para este campo. <br/>El <b>Orden de Tabulación</b> controla en qué orden la tecla tabulador cambiará el foco entre los distintos campos.',
	),
	'fieldsEditor'=>array(
		'default'	=> 'Los <b>Campos</b> disponibles para un módulo se listan aquí por Nombre de Campo.<br><br>Los campos personalizados creados para el módulo aparecen sobre los campos disponibles para el módulo por defecto.<br><br>Para editar un campo, haga clic en el <b>Nombre de Campo</b>.<br/><br/>Para crear un nuevo campo, haga clic en <b>Agregar Campo</b>.',
		'mbDefault'=>'Los <b>Campos</b> disponibles para un módulo se listan aquí por Nombre de Campo.<br><br>Para configurar las propiedades de un campo, haga clic en el Nombre de Campo.<br><br>Para crear un nuevo campo, haga clic en <b>Agregar Campo</b>. La etiqueta y el resto de propiedades del nuevo campo pueden ser editadas tras su creación haciendo clic en el Nombre de Campo.<br><br>Tras el despliegue del módulo, los nuevos campos creados con el Contructor de Módulos serán tradados como campos estándar del módulo desplegado en el Estudio.',
        'addField'	=> 'Seleccione un <b>Tipo de Datos</b> para el nuevo campo. El tipo que seleccione determinará que tipo de caracteres pueden introducirse para el campo. Por ejemplo, sólo se podrán introducir números enteros en campos que son del tipo de datos Entero.<br><br> Provea al campo de un <b>Nombre</b>.  El nombre debe ser alfanumérico y no contener espacios. El carácter subrayado también es válido.<br><br> La <b>Etiqueta de Visualización</b> es la etiqueta que aparecerá para los campos en los diseños de módulos.  La <b>Etiqueta del Sistema</b> se utiliza para hacer referencia al campo en el código.<br><br> Según el tipo de datos seleccionado para el campo, algunas o todas las siguientes propiedades podrán ser establecidas en el mismo:<br><br> El <b>Texto de Ayuda</b> aparece temporalmente cuando el usuario mantiene el cursor sobre el campo y puede ser utilizado para indicar al usuario el tipo de entrada deseada.<br><br> El <b>Texto de Comentario</b> sólo se ve en el Estudio y/o Constructor de Módulos, y puede ser utilizado para describir el campo a los administradores.<br><br> El <b>Valor por Defecto</b> que aparecerá en el campo.  Los usuarios pueden introducir un nuevo valor en el campo o dejar el valor predeterminado.<br><br> Seleccione la opción de <b>Actualización Masiva</b> para poder utilizar la característica de Actualización Masiva en el campo.<br><br>El valor del <b>Tamaño Máximo</b> determina el máximo número de caracteres que pueden ser introducidos en el campo.<br><br> Seleccione la opción <b>Campo Requerido</b> para hacer el campo requerido. Debe de suministrarse un valor para este campo para poder guardar un registro que lo contenga.<br><br> Seleccione la opción <b>Informable</b> para permitir que el campo sea utilizado en filtros y para mostrar datos en Informes.<br><br> Seleccione la opción <b>Auditar</b> para poder realizar un seguimiento de los cambios el campo en el Registro de Cambios.<br><br>Seleccione una de las opciones en el campo <b>Importable</b> para permitir, prohibir o requerir que el campo sea importado mediante el Asistente de Importación.<br><br>Seleccione una opción en el campo <b>Combinar Duplicados</b> para habilitar o no las características de Combinar Duplicados y Búsqueda de Duplicados.<br><br>Para ciertos tipos de datos se podrán establecer propiedades adicionales.',
		'editField' => 'Las propiedades de este campo pueden ser personalizadas.<br><br>Haga clic en <b>Clonar</b> para crear un nuevo campo con las mismas propiedades.',
        'mbeditField' => 'La <b>Etiqueta de Visualización</b> de un campo de Sugar puede ser personalizada. El resto de propiedades del campo no pueden ser personalizadas.<br><br>Haga clic en <b>Clonar</b> para crear un nuevo campo con las mismas propiedades.<br><br>Para quitar un campo plantilla de modo que no aparezca en el módulo, quite el campo de los <b>Diseños</b> correspondientes.'
	),
	'exportcustom'=>array(
	    'exportHelp'=>'Exportar personalizaciones realizadas en el Estudio creando paquetes que pueden ser subidos en otras instancias de Sugar a través del <b>Cargador de Módulos</b>.<br><br>  Antes de empezar, proporcione un <b>Nombre de Paquete</b>.  Puede introducir la información sobre el <b>Autor</b> y la <b>Descripción</b> del paquete también.<br><br>Seleccione el o los módulos que contengan las personalizaciones que desea exportar. Sólo aquellos módulos que contengan personalizaciones aparecerán en la lista de selección.<br><br>Haga clic en <b>Exportar</b> para crear un archivo .zip para el paquete que contenga las personalizaciones.',
	    'exportCustomBtn'=>'Haga clic en <b>Exportar</b> para crear un archivo .zip para el paquete que contenga las personalizaciones que desea exportar.',
	    'name'=>'Este es el <b>Nombre</b> del paquete. Este nombre será mostrado durante la instalación.',
	    'author'=>'Este es el <b>Autor</b> que será mostrado durante la instalación como el nombre de la entidad que creó el paquete. El Autor puede ser un individuo o una empresa.',
	    'description'=>'Esta es la <b>Descripción</b> del paquete mostrada durante la instalación.',
	),
	'studioWizard'=>array(
		'mainHelp' 	=> 'Bienvenido al área de <b>Herramientas de Desarrollo</b>. <br/><br/>Use las herramientas de este área para crear y gestionar módulos y campos tanto estándar como personalizados.',
		'studioBtn'	=> 'Use el <b>Estudio</b> para personalizar los módulos desplegados.',
		'mbBtn'		=> 'Use el <b>Constructor de Módulos</b> para crear nuevos módulos.',
		'sugarPortalBtn' => 'Use el <b>Editor de Portal de Sugar</b> para administrar y personalizar el Portal Sugar.',
		'dropDownEditorBtn' => 'Use el <b>Editor de Listas Desplegables</b> para agregar y editar listas desplegables globales para campos de lista desplegable.',
		'appBtn' 	=> 'El modo de aplicación le permite personalizar varias propiedades del programa, como por ejemplo, cuántos informes se muestran en la página de inicio',
		'backBtn'	=> 'Volver al paso previo.',
		'studioHelp'=> 'Utilice el <b>Estudio</b> para establecer qué información del módulo se muestra y cómo lo hace.',
		'moduleBtn'	=> 'Haga clic para editar este módulo.',
		'moduleHelp'=> 'Los componentes del módulo que puede personalizar aparecen aquí.<br><br>Haga clic en un icono para seleccionar el componente a editar.',
		'fieldsBtn'	=> 'Crear y personalizar los <b>Campos</b> que almacenan la información en el módulo.',		
		'labelsBtn' => 'Editar las <b>Etiquetas</b> mostradas para los campos y otros títulos del módulo.',
	    'relationshipsBtn' => 'Agregar nuevas <b>Relaciones</b> del módulo o ver las existentes.',
		'layoutsBtn'=> 'Personalizar los <b>Diseños</b> del módulo.  Los diseños son las diferentes vistas del módulo que contienen campos.<br><br>Puede establecer qué campos aparecen y cómo son organizados en cada diseño.',
		'subpanelBtn'=> 'Determina qué campos aparecen en los <b>Subpaneles</b> del módulo.',
		'portalBtn' =>'Personalizar los <b>Diseños</b> del módulo que aparecen en el <b>Portal Sugar</b>.',
		'layoutsHelp'=>  'Los <b>Diseños</b> de un módulo que pueden ser personalizados aparecen aquí.<br><br>Los diseños muestran los campos y sus datos.<br><br>Haga clic en un icono para seleccionar el diseño a editar.',
		'subpanelHelp'=> 'Los <b>Subpaneles</b> de un módulo que pueden ser personalizados aparecen aquí.<br><br>Haga clic en un icono para seleccionar el módulo a editar.',
		'newPackage'=>'Haga clic en <b>Nuevo Paquete</b> para crear un nuevo paquete.',
        'exportBtn' => 'Haga clic en <b>Exportar Personalizaciones</b> para crear y descargar un paquete que contenga las personalizaciones que ha realizado en el Estudio a varios módulos específicos.',
        'mbHelp'    => 'Use el <b>Constructor de Módulos</b> para crear paquetes que contengan módulos personalizados basados en objetos estándar o personalizados.',
	    'viewBtnEditView' => 'Personalizar el diseño de <b>Vista de Edición</b> del módulo.<br><br>La Vista de Edición es el formulario que contiene los campos de entrada para capturar los datos introducidos por el usuario.',
	    'viewBtnDetailView' => 'Personalizar el diseño <b>Vista de Detalle</b> del módulo.<br><br>La Vista de Detalle muestra datos de campos introducidos por el usuario.',
		'viewBtnDashlet' => 'Personalizar el <b>Sugar Dashlet</b> del módulo, incluyendo la Vista de Lista y la Búsqueda del Sugar Dashlet.<br><br>El Sugar Dashlet estará disponible para ser añadido a las páginas del módulo Inicio.',
		'viewBtnListView' => 'Personalizar el diseño <b>Vista de Lista</b> del módulo.<br><br>Los resultados de la Búsqueda aparecen en la Vista de Lista.',
	    'searchBtn' => 'Personalizar los diseños de <b>Búsqueda</b> del módulo.<br><br>Determina qué campos pueden ser utilizados para filtrar los registros que aparecen en la Vista de Lista.',
		'viewBtnQuickCreate' =>  'Personalizar el diseño <b>Creación Rápida</b> del módulo.<br><br>El formulario de Creación Rápida aparece en los subpaneles y en el módulo de Emails.',    
	    'searchHelp'=> 'Los formularios de <b>Búsqueda</b> que pueden ser personalizados aparecen aquí. <br><br>Los formularios de búsqueda contienen campos para filtrar registros.<br><br>Haga clic en un icono para seleccionar el diseño de búsqueda a editar.',
	    'dashletHelp' =>'Los diseños de <b>Sugar Dashlet</b> que pueden ser personalizados aparecen aquí.<br><br>El Sugar Dashlet estará disponible para ser añadido a las páginas del módulo Inicio.',
	    'DashletListViewBtn' =>'La <b>Vista de Lista de Sugar Dashlet</b> muestra los registros basándose en los fíltros de búsqueda del Sugar Dashlet.',
	    'DashletSearchViewBtn' =>'La <b>Búsqueda de Sugar Dashlet</b> filtra los registros de la vista de lista de Sugar Dashlet.',
	    'popupHelp' =>'Los diseños <b>Emergentes</b> que pueden ser personalizados aparecen aquí.<br>',
	    'PopupListViewBtn' =>'La <b>Vista de Lista Emergente</b> muestra registros basados en las vistas de Búsqueda Emergente.',
	    'PopupSearchViewBtn' =>'Los registros de vista de <b>Búsqueda Emergente</b> para la vista de lista Emergente.',
		'BasicSearchBtn' => 'Personalizar el formulario de <b>Búsqueda Básica</b> que aparece en la pestaña de Búsqueda Básica en el área de Búsqueda del módulo.',
	    'AdvancedSearchBtn' => 'Personalizar el formulario de <b>Búsqueda Avanzada</b> que aparece en la pestaña de Búsqueda Avanzada en el área de Búsqueda del módulo.',
	    'portalHelp' => 'Administrar y personalizar el <b>Portal de Sugar</b>.',
	    'SPUploadCSS' => 'Subir una <b>Hoja de Estilos</b> para el Portal de Sugar.',
	    'SPSync' => '<b>Sincronice</b> las personalizaciones a la instancia del Portal de Sugar.',
	    'Layouts' => 'Personalizar los <b>Diseños</b> de los módulos del Portal de Sugar.',
	    'portalLayoutHelp' => 'Los módulos del Portal de Sugar aparecen en este área.<br><br>Seleccione un módulo para editar sus <b>Diseños</b>.',
		'relationshipsHelp' => 'Todas las <b>Relaciones</b> que existen entre el módulo y otros módulos desplegados aparecen aquí.<br><br>El <b>Nombre</b> de la relación es un nombre generado por el sistema para la relación.<br><br>El <b>Módulo Principal</b> es el módulo que posee las relaciones.  Por ejemplo, todas las propiedades de las relaciones para las que el módulo de Cuentas es el módulo principal se almacenan en las tablas de base de datos de Cuentas.<br><br>El <b>Tipo</b> es el tipo de relación existente entre el Módulo Principal y el <b>Módulo Relacionado</b>.<br><br>Haga clic en el título de una columna para ordenar por la columna.<br><br>Haga clic en una fila de la tabla de la relación para ver y editar las propiedades asociadas con la relación.<br><br>Haga clic en <b>Agregar Relación</b> para crear una nueva relación.<br><br>Se pueden crear relaciones entre dos módulos desplegados cualesquiera.',
        'relationshipHelp'=>'Las <b>Relaciones</b> pueden ser creadas entre el módulo y otro módulo personalizado o desplegado.<br><br> Las relaciones se expresan visualmente a través de subpaneles y relacionan campos de los registros del módulo.<br><br>Seleccione uno de los siguientes <b>Tipos</b> de relación para el módulo:<br><br> <b>Uno-a-Uno</b> - Los registros de ambos módulos contendrán campos relacionados.<br><br> <b>Uno-a-Muchos</b> - Los registros del Módulo Principal contendrán un subpanel, y los registros del Módulo Relacionado contendrán un campo relacionado.<br><br> <b>Muchos-a-Muchos</b> - Los registros de ambos módulos mostrarán subpaneles.<br><br> Seleccione el <b>Módulo Relacionado</b> para la relación. <br><br>Si el tipo de relación implica el uso de subpaneles, seleccione la vista de subpanel para los módulos correspondientes.<br><br> Haga clic en <b>Guardar</b> para crear la relación.',
		'convertLeadHelp' => "Aquí puede agregar módulos a la pantalla de diseño de conversión y modificar los diseños existentes.<br/>
		Puede reordenar los módulos arrastrando sus filas en la tabla.<br/><br/>
		
		<b>Módulo:</b> El nombre del módulo.<br/><br/>
		<b>Requeridos:</b> Módulos requeridos que deben ser creados o seleccionados antes de que el cliente potencial pueda ser convertido.<br/><br/>
		<b>Copiar Datos:</b> Si está seleccionado, los campos del cliente potencial serán copiados a campos con el mismo nombre en los registros recién creados.<br/><br/>
		<b>Permitir Selección:</b> Los módulos con un campo relacionado en Contactos pueden ser seleccionados en lugar de creados durante el proceso de conversión del cliente potencial.<br/><br/>
		<b>Editar:</b> Modificar el diseño de conversión para este módulo.<br/><br/>
		<b>Eliminar:</b> Quitar este módulo del diseño de conversión.<br/><br/>
		",
		'editDropDownBtn' => 'Editar una Lista Desplegable global',
		'addDropDownBtn' => 'Agregar una nueva Lista Desplegable global',
	),
	'fieldsHelp'=>array(
		'default'=>'Los <b>Campos</b> del módulo aparecen aquí listados por Nombre de Campo.<br><br>La plantilla del módulo incluye un conjunto predeterminado de campos.<br><br>Para crear un nuevo campo, haga clic en <b>Agregar Campo</b>.<br><br>Para editar un campo, haga clic en el <b>Nombre de Campo</b>.<br/><br/>Tras el despliegue del módulo, los nuevos campos creados en el Constructor de Módulos, así como los campos de la plantilla, se tratarán como campos estándar en el Estudio.',
	),
	'relationshipsHelp'=>array(
		'default'=>'Las <b>Relaciones</b> que han sido creadas entre el módulo y otros módulos aparecen aquí.<br><br>El <b>Nombre</b> de la relación es un nombre generado por el sistema para la relación.<br><br>El <b>Módulo Principal</b> es el módulo que posee las relaciones. Las propiedades de la relación son guardadas en tablas de la base de datos pertenecientes al módulo primario.<br><br>El <b>Tipo</b> es el tipo de relación existente entre el Módulo Principal y el <b>Módulo Relacionado</b>.<br><br>Haga clic en el título de una columna para ordenar por la columna.<br><br>Haga clic en una fila de la tabla de la relación para ver y editar las propiedades asociadas con la relación.<br><br>Haga clic en <b>Agregar Relación</b> para crear una nueva relación.',
		'addrelbtn'=>'ayuda emergente para agregar relación...',
		'addRelationship'=>'Las <b>Relaciones</b> pueden ser creadas entre el módulo y otro módulo personalizado o desplegado.<br><br> Las relaciones se expresan visualmente a través de subpaneles y relacionan campos de los registros del módulo.<br><br>Seleccione uno de los siguientes <b>Tipos</b> de relación para el módulo:<br><br> <b>Uno-a-Uno</b> - Los registros de ambos módulos contendrán campos relacionados.<br><br> <b>Uno-a-Muchos</b> - Los registros del Módulo Principal contendrán un subpanel, y los registros del Módulo Relacionado contendrán un campo relacionado.<br><br> <b>Muchos-a-Muchos</b> - Los registros de ambos módulos mostrarán subpaneles.<br><br> Seleccione el <b>Módulo Relacionado</b> para la relación. <br><br>Si el tipo de relación implica el uso de subpaneles, seleccione la vista de subpanel para los módulos correspondientes.<br><br> Haga clic en <b>Guardar</b> para crear la relación.',
	),
	'labelsHelp'=>array(
		'default'=> 'Las <b>Etiquetas</b> de los campos, así como otros títulos en el módulo, pueden ser cambiadas.<br><br>Edite la etiqueta haciendo clic dentro del campo, introduciendo una nueva etiqueta y haciendo clic en <b>Guardar</b>.<br><br>Si hay algún paquete de idioma instalado en la aplicación, puede seleccionar el <b>Idioma</b> a utilizar para las etiquetas.',
		'saveBtn'=>'Haga clic en <b>Guardar</b> para guardar todos los cambios.',
		'publishBtn'=>'Haga clic en <b>Guardar y Desplegar</b> para guardar todos los cambios y activarlos.',
	),
	'portalSync'=>array(
	    'default' => 'Introduzca el <b>URL de Portal de Sugar</b> de la instancia de portal a actualizar, y haga clic en <b>Adelante</b>.<br><br>Tras ésto, introduzca un usuario y contraseña de Sugar válidos, y haga clic en <b>Iniciar Sincronización</b>.<br><br>Las personalizaciones que haya realizado en los <b>Diseños</b> de Portal de Sugar, así como la <b>Hoja de Estilos</b> si alguna hubiera sido subida, serán transferidas a la instancia de portal especificada.',
	),
	'portalStyle'=>array(
	    'default' => 'Puede personalizar la apariencia del Portal de Sugar mediante una hoja de estilos.<br><br>Seleccione la <b>Hoja de Estilos</b> a subir.<br><br>La hoja de estilos será desplegada en el Portal Sugar la próxima vez que realice una sincronización.',
	),
), 

'assistantHelp'=>array(
	'package'=>array(
			//custom begin
			'nopackages'=>'Para empezar un proyecto, haga clic en <b>Nuevo Paquete</b> y creará un nuevo paquete en el que albergar sus módulos personalizados. <br/><br/>Cada paquete puede contener uno o más módulos.<br/><br/>Por ejemplo, puede querer crear un paquete que contenga un módulo personalizado relacionado con el módulo estándar de Cuentas. O puede querer crear un paquete que contenga varios módulos nuevos que trabajan de forma conjunta como un proyecto y que están relacionados entre si y con otros módulos ya existentes en la aplicación.',
			'somepackages'=>'Un <b>paquete</b> actúa como contenedor de módulos pesonalizados, todos los cuales son parte de un proyecto. El paquete puede contener uno o más <b>módulos</b> personalizados que pueden estar relacionados entre ellos o con otros módulos de la aplicación.<br/><br/>Tras la creación de un paquete para su proyecto, puede crear módulos para el paquete de forma inmediata, o volver al Constructor de Módulos más tarde para completar el proyecto.<br><br>Cuando el proyecto ha sido completado, puede <b>Desplegar</b> el paquete para instalar los módulos personalizados dentro de la aplicación.',
			'afterSave'=>'Su nuevo paquete debería contener al menos un módulo. Puede crear uno o más módulos personalizados para el paquete.<br/><br/>Haga clic en <b>Nuevo Módulo</b> para crear un módulo personalizado para este paquete.<br/><br/> Tras la creación de al menos un módulo, puede publicar o desplegar el paquete y dejarlo así disponible para su instancia y/o para las instancias de otros usuarios.<br/><br/> Para desplegar el paquete en un paso a su instancia de Sugar, haga clic en <b>Desplegar</b>.<br><br>Haga clic en <b>Publicar</b> para guardar el paquete como un archivo .zip. Tras guardar el archivo .zip en su equipo, utilice el <b>Cargador de Módulos</b> para subir e instalar el paquete en su instancia de Sugar.  <br/><br/>Puede distribuir el archivo a otros usuarios para que lo suban e instalen en sus propias instancias de Sugar.',
			'create'=>'Un <b>paquete</b> actúa como contenedor de módulos personalizados, todos los cuales son parte de un proyecto. El paquete puede contener uno o más módulos personalizados que pueden estar relacionados entre ellos o con otros módulos de la aplicación.<br/><br/>Tras la creación de un paquete para su proyecto, puede crear módulos para el paquete de forma inmediata, o volver al Constructor de Módulos más tarde para completar el proyecto.',
			),
	'main'=>array(
		'welcome'=>'Use las <b>Herramientas de Desarrollo</b> para crear y administrar módulos y campos tanto estándar como personalizados. <br/><br/>Para administrar los módulos de la aplicación, haga clic en <b>Estudio</b>. <br/><br/>Para crear módulos personalizados, haga clic en <b>Constructor de Módulos</b>.',
		'studioWelcome'=>'Todos los módulos actualmente instalados, incluyendo los objetos estándares así como los cargados por un módulo, son personalizables dentro del Estudio.'
	),
	'module'=>array(
		'somemodules'=>"Ya que el paquete actual contiene al menos un módulo, puede <b>Desplegar</b> los módulos en el paquete dentro de su instancia de Sugar o <b>Publicar</b> el paquete a instalar en la instancia de Sugar actual o en otra instancia utilizando el <b>Cargador de Módulos</b>.<br/><br/>Para instalar el paquete directamente en su instancia de Sugar, haga clic en <b>Desplegar</b>.<br><br>Para crear un archivo .zip para el paquete que pueda ser cargado e instalado tanto en la instancia actual de Sugar como en otras instancias mediante el <b>Cargador de Módulos</b>, haga clic en <b>Publicar</b>.<br/><br/> Puede construir los módulos para este paquete en etapas, y publicarlos o desplegarlos cuando se sienta preparado para ello. <br/><br/>Tras publicar o deplegar de un paquete, puede hacer cambios a las propiedades del mismo y personalizar los módulos.  Tras ello, publique o despliegue de nuevo el paquete para que los cambios sean aplicados." ,
		'editView'=> 'Aquí puede editar los campos existentes. Puede quitar cualquiera de los campos existentes o agregar los campos disponibles en el panel situado a la izquierda.',
		'create'=>'Cuando seleccione el tipo de <b>Tipo</b> de módulo que desea crear, tenga en cuenta los tipos de campos que desea tener dentro del módulo. <br/><br/>Cada plantilla de módulo contiene un conjunto de campos pertenecientes al tipo de módulo descrito en su título.<br/><br/><b>Básica</b> - Proporciona los campos básicos que aparecen en módulos estándar, como el Nombre, Asignado a, Equipo, Fecha de Creación y Descripción.<br/><br/> <b>Empresa</b> - Proporciona campos específicos de una organización, como Nombre de Empresa, Industria y Dirección de Facturación.  Use esta plantilla para crear módulos que son similares al módulo estándar de Cuentas.<br/><br/> <b>Persona</b> - Proporciona campos específicos de un individuo, como Saludo, Cargo, Nombre, Dirección y Número de Teléfono. Use esta plantilla para crear módulos que sean similares a los módules estándar de Contactos y Clientes Potenciales.<br/><br/><b>Incidencia</b> - Proporciona campos particulares de casos e incidencias, como Número, Estado, Prioridad y Descripción. Use esta plantilla para crear módulos que sean similares a los módulos estándar de Casos y Seguimiento de Incidencias.<br/><br/>Nota: Tras la creación del módulo, puede editar las etiquetas de los campos incluidos en la plantilla, así como crear campos personalizados para agregarlos a los diseños del módulo.',
		'afterSave'=>'Personalice el módulo para ajustarse a sus necesidades mediante la edición y creación de campos, y el establecimiento de relaciones con otros módulos y de la disposición de los campos en los diseños.<br/><br/>Para ver los campos plantilla y administrar los campos personalizados dentro del módulo, haga clic en <b>Ver Campos</b>.<br/><br/>Para crear y administrar relaciones entre el módulo y otros módulos, independientemente de si los módulos ya existen en la aplicación o son otros módulos personalizados del mismo paquete, haga clic en <b>Ver Relaciones</b>.<br/><br/>Para editar los diseños de módulos, haga clic en <b>Ver Diseños</b>. Puede cambiar los diseños de las Vistas de Detalle y de Edición del módulo de la misma forma que lo haría para módulos existentes en la aplicación, utilizando el Estudio.<br/><br/> Para crear un módulo con las mismas propiedades que el módulo actual, haga clic en <b>Duplicar</b>.  Después podrá personalizar el nuevo módulo.',
		'viewfields'=>'Los campos del módulo pueden ser personalizados para ajustarse a sus necesidades.<br/><br/>No puede eliminar campos estándar, pero puede quitarlos de los diseños correspondientes dentro de las páginas de Diseños. <br/><br/>Puede crear rápidamente nuevos campos que tengan propiedades similares a las de campos existentes haciendo clic en <b>Clonar</b> en el formulario de <b>Propiedades</b>.  Introduzca las nuevas propiedades, y haga clic en <b>Guardar</b>.<br/><br/>Se recomienda que establezca todas las propiedades para los campos estándar y los campos personalizados antes de que publique e instale el paquete que contiene el módulo personalizado.',
		'viewrelationships'=>'Puede crear relaciones muchos-a-muchos entre el módulo actual y cualquier otro módulo del paquete, y/o entre el módulo actual y otros módulos ya instalados en la aplicación.<br><br> Para crear relaciones uno-a-muchos y uno-a-uno, cree campos <b>Relacionado con</b> y <b>Posiblemente Relacionado con</b> para los módulos.',
		'viewlayouts'=>'Puede controlar qué módulos están disponibles para captura de datos desde la <b>Vista de Edición</b>.  También puede controlar qué datos son mostrados desde la <b>Vista de Detalle</b>.  Las vistas no han de ser iguales. <br/><br/>El formulario de Creación Rápida se muestra cuando hace clic en <b>Crear</b> dentro del subpanel de un módulo. Por defecto, el diseño del formulario de <b>Creación Rápida</b> es el mismo que el diseño por defecto de <b>Vista de Edición</b>. Puede personalizar el formulario de Creación Rápida de forma que contenga menos y/o diferentes campos que el diseño de Vista de Edición. <br><br>Puede establecer la seguridad del módulo utilizando la personalización del Diseño conjuntamente con la <b>Administración de Roles</b>.<br><br>',
		'existingModule' =>'Tras crear y personalizar este módulo, puede crear módulos adicionales o volver al paquete para <b>Publicar</b> o <b>Desplegar</b> el mismo.<br><br>Si desea crear módulos adicionales, haga clic en <b>Duplicar</b> para crear un módulo con las mismas propiedades que el módulo actual, o vuelva a navegar al paquete y haga clic en <b>Nuevo Módulo</b>.<br><br> Si ya está listo para <b>Publicar</b> o <b>Desplegar</b> el paquete que contiene este módulo, vuelva a navegar al paquete para realizar estas funciones. Puede publicar y desplegar paquetes que contengan al menos un módulo.',
		'labels'=> 'Las etiquetas de los campos estándar así como las de los campos personalizados pueden ser cambiadas. Los cambios a las etiquetas de los campos no afecta a los datos almacenados en los mismos.',
	),
	'listViewEditor'=>array(
		'modify'	=> 'A la izquierda tiene tres columnas. La columna "Por Defecto" contiene los campos que son mostrados en una vista de lista por defecto, la columna "Disponibles" contiene los campos que un usuario puede seleccionar para utilizar al crear una vista de lista personalizada, y la columna "Ocultos" contiene los campos actualmente deshabilitados pero disponibles para que usted, como administrador, los agregue a las columnas Por Defecto o Disponibles de modo que los usuarios puedan utilizarlos.', 
		'savebtn'	=> 'Haciendo clic en <b>Guardar</b> guardará todos los cambios y los activará.',
		'Hidden' 	=> 'Los campos Ocultos son campos que no están disponibles actualmente para que los usuarios los utilicen en las vistas de lista.',
		'Available' => 'Los campos Disponibles son campos que no se muestran por defecto, pero que pueden ser habilitados por los usuarios.',
		'Default'	=> 'Los campos Por Defecto son mostrados a los usuarios que no han personalizado la configuración de las vistas de lista.'
	),
	'searchViewEditor'=>array(
		'modify'	=> 'Hay dos columnas mostradas en la izquierda. La columna "Por Defecto" contiene los campos que serán mostrados en la vista de búsqueda, y la columna "Ocultos" contiene los campos disponibles para que usted, como administrador, los pueda agregar a la vista.', 
		'savebtn'	=> 'Al hacer clic en <b>Guardar y Desplegar</b> guardará todos los cambios y los activará.',
		'Hidden' 	=> 'Los campos ocultos son campos que no son mostrados en la vista de búsqueda.',
		'Default'	=> 'Los campos Por Defecto serán mostrados en la vista de búsqueda.',
	),
	'layoutEditor'=>array(
		'default'	=> 'A la izquierda tiene dos columnas. La de la derecha, llamada Diseño Actual o Vista Preliminar de Diseño, es donde realiza los cambios al diseño del módulo. La de la izquierda, llamada Caja de Herramientas, contiene elementos útiles y herramientas para utilizar en la edición del diseño. <br/><br/>Cuando el área de diseño se llama Diseño Actual, está trabajando en una copia del diseño actualmente utilizado para la presentación del módulo.<br/><br/>Si se llama Vista Preliminar del Diseño, está trabajando con una copia creada previamente mediante un clic en el botón Guardar, y que puede haber sido ya cambiada desde que se creó la versión que ven los usuarios de este módulo.',
		'saveBtn'	=> 'Al hacer clic en este botón guarda el diseño de forma que puede preservar sus cambios. Cuando vuelva a este módulo trabajará con el nuevo diseño. Su diseño, sin embargo, no será visto por el resto de usuarios del módulo hasta que haga clic en el botón Guardar y Desplegar.',
		'publishBtn'=> 'Haga clic en este botón para desplegar el diseño. Esto implica que el diseño quedará visible de forma inmediata para los usuarios de este módulo.',
		'toolbox'	=> 'La caja de herramientas contiene una variedad de características útiles para editar diseños, incluyendo un área de papelera y una serie de elementos adicionales, como un conjunto de campos disponibles. Cualquiera de éstos puede ser arrastrado y soltado en el diseño.',
		'panels'	=> 'Este área muestra cómo los usuarios de este módulo verán su diseño cuando sea desplegado.<br/><br/>Puede reposicionar los elementos, como campos, filas y paneles arrastrando y soltándolos; eliminar elementos arrastrándolos y soltándolos en área de la papelera en la caja de herramientas, o agregar nuevos elementos arrastrándolos desde la caja de herramientas y soltándolos en la posición deseada del diseño.',
	),
	'dropdownEditor'=>array(
		'default'	=> 'A la izquierda tiene dos columnas. La de la derecha, llamada Diseño Actual o Vista Preliminar de Diseño, es donde realiza los cambios al diseño del módulo. La de la izquierda, llamada Caja de Herramientas, contiene elementos útiles y herramientas para utilizar en la edición del diseño. <br/><br/>Cuando el área de diseño se llama Diseño Actual, está trabajando en una copia del diseño actualmente utilizado para la presentación del módulo.<br/><br/>Si se llama Vista Preliminar del Diseño, está trabajando con una copia creada previamente mediante un clic en el botón Guardar, y que puede haber sido ya cambiada desde que se creó la versión que ven los usuarios de este módulo.', 
		'dropdownaddbtn'=> 'Haciendo clic en este botón se añade un nuevo elemento a la lista desplegable.',
	),
	'exportcustom'=>array(
	    'exportHelp'=>'Las personalizaciones realizadas en el Estudio dentro de esta instancia pueden ser empaquetadas y desplegadas en otra instancia. <br><br>Proporcione un <b>Nombre de Paquete</b>. Puede proporcionar información sobre el <b>Autor</b> y la <b>Descripción</b> del paquete.<br><br>Seleccione los módulos que contienen las personalizaciones a exportar. (Sólo los módulos que contengan personalizaciones estarán disponibles para ser seleccionados.)<br><br>Haga clic en <b>Exportar</b> para crear un archivo .zip para el paquete que contenga las personalizaciones. El archivo .zip podrá ser subido en otra instancia mediante el <b>Cargador de Módulos</b>.',
	    'exportCustomBtn'=>'Haga clic en <b>Exportar</b> para crear un archivo .zip para el paquete que contenga las personalizaciones que desea exportar.
',
	    'name'=>'El <b>Nombre</b> del paquete será mostrado en el Cargador de Módulos después de que el paquete sea subido al Estudio para su instalación.',
	    'author'=>'El <b>Autor</b> es el nombre de la entidad que ha creado el paquete. El Autor puede ser un individuo o una empresa.<br><br>El Autor será mostrado en el Cargador de Módulos después de que el paquete sea subido al Estudio para su instalación.
',
	    'description'=>'La <b>Descripción</b> del paquete será mostrada en el Cargador de Módulos después de que el paquete sea subido al Estudio para su instalación.',
	),
	'studioWizard'=>array(
		'mainHelp' 	=> 'Bienvenido al área de <b>Herramientas de Desarrollo</b1>. <br/><br/>Use las herramientas de este área para crear y administrar módulos y campos tanto estándar como personalizados.',
		'studioBtn'	=> 'Use el <b>Estudio</b> para personalizar los módulos instalados cambiando la disposición de los campos, seleccionando los campos que están disponibles y creando campos de datos personalizados.',
		'mbBtn'		=> 'Use el <b>Constructor de Módulos</b> para crear nuevos módulos.',
		'appBtn' 	=> 'El modo de aplicación le permite personalizar varias propiedades del programa, como por ejemplo, cuántos informes se muestran en la página de inicio',
		'backBtn'	=> 'Volver al paso previo.',
		'studioHelp'=> 'Use el <b>Estudio</b> para personalizar los módulos instalados.',
		'moduleBtn'	=> 'Haga clic para editar este módulo.',
		'moduleHelp'=> 'Seleccione el componente de módulo que desea editar',
		'fieldsBtn'	=> 'Edite qué información es almacenada en el módulo mediante el control de los <b>Campos</b> del mismo.<br/><br/>Puede editar y crear campos personalizados aquí.',
		'labelsBtn' => 'Haga clic en <b>Guardar</b> para guardar sus etiquetas personalizadas.'	,
		'layoutsBtn'=> 'Personalice los <b>Diseños</b> de las vistas de Edición, Detalle, Lista y Búsqueda.',
		'subpanelBtn'=> 'Edite la información que se muestra en los subpaneles de estos módulos.',
		'layoutsHelp'=> 'Seleccione un <b>Diseño a editar</b>.<br/<br/>Para cambiar el diseño que contiene los campos de introducción de datos, haga clic en <b>Vista de Edición</b>.<br/><br/>Para cambiar el diseño que muestra los datos introducidos en los campos en la Vista de Edición, haga clic en <b>Vista de Detalle</b>.<br/><br/>Para cambiar las columnas que aparecen en la lista por defecto, haga clic en <b>Vista de Lista</b>.<br/><br/>Para cambiar los diseños de los formularios de búsqueda Básica y Avanzada, haga clic en <b>Búsqueda</b>.',
		'subpanelHelp'=> 'Seleccione un <b>Subpanel</b> a editar.',
		'searchHelp' => 'Seleccione un diseño de <b>Búsqueda</b> a editar.',
		'labelsBtn'	=> 'Edite las <b>Etiquetas</b> a mostrar para los valores de este módulo.',
        'newPackage'=>'Haga clic en <b>Nuevo Paquete</b> para crear un nuevo paquete.',
        'mbHelp'    => '<b>Bienvenido al Constructor de Módulos.</b><br/><br/>Use el <b>Constructor de Módulos</b> para crear paquetes que contengan módulos personalizados basados en objetos estándar o personalizados. <br/><br/>Para comenzar, haga clic en <b>Nuevo Paquete</b> para crear un nuevo paquete, o seleccione el paquete a editar.<br/><br/> Un <b>paquete</b> actúa como contenedor de módulos personalizados, todos los cuales son parte de un proyecto. El paquete puede contener uno o más módulos personalizados que pueden estar relacionados entre ellos o con otros módulos de la aplicación. <br/><br/>Por ejemplo: Puede querer crear un paquete que contenga un módulo personalizado que esté relacionado con el módulo estándar de Cuentas. O, puede desear crear un paquete que contenga varios módulos nuevos que funcionan conjuntamente como un proyecto y que están relacionados entre ellos y con otros módulos de la aplicación.',
        'exportBtn' => 'Haga clic en <b>Exportar Personalizaciones</b> para crear un paquete que contenga las personalizaciones que ha realizado en el Estudio a varios módulos específicos.',
	),
	
	
),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Editor de Listas Desplegables',

//ASSISTANT
'LBL_AS_SHOW' => 'Mostrar al Asistente en el futuro.',
'LBL_AS_IGNORE' => 'Ignorar al Asistente en el futuro.',
'LBL_AS_SAYS' => 'El Asistente Sugiere:',


//STUDIO2
'LBL_MODULEBUILDER'=>'Constructor de Módulos',
'LBL_STUDIO' => 'Estudio',
'LBL_DROPDOWNEDITOR' => 'Editor de Listas Desplegables',
'LBL_EDIT_DROPDOWN'=>'Editar Lista Desplegable',
'LBL_DEVELOPER_TOOLS' => 'Herramientas de Desarrollo',
'LBL_SUGARPORTAL' => 'Editor del Portal Sugar',
'LBL_SYNCPORTAL' => 'Sincronizar Portal',
'LBL_PACKAGE_LIST' => 'Lista de Paquetes',
'LBL_HOME' => 'Inicio',
'LBL_NONE'=>'-Ninguno-',
'LBL_DEPLOYE_COMPLETE'=>'Despliegue completado',
'LBL_DEPLOY_FAILED'   =>'Ha ocurrido un error durante el proceso de despliegue. Es posible que su paquete no haya sido instalado correctamente',

'LBL_ADD_FIELDS'=>'Agregar Campos Personalizados',
'LBL_AVAILABLE_SUBPANELS'=>'Subpaneles Disponibles',
'LBL_ADVANCED'=>'Avanzada',
'LBL_ADVANCED_SEARCH'=>'Búsqueda Avanzada',
'LBL_BASIC'=>'Básica',
'LBL_BASIC_SEARCH'=>'Búsqueda Básica',
'LBL_CURRENT_LAYOUT'=>'Diseño',
'LBL_CURRENCY' => 'Moneda',
'LBL_DASHLET'=>'Sugar Dashlet',
'LBL_DASHLETLISTVIEW'=>'Vista de Lista de Sugar Dashlet',
'LBL_DASHLETSEARCH'=>'Búsqueda de Sugar Dashlet',
'LBL_POPUP'=>'Vista Emergente',
'LBL_POPUPLIST'=>'Vista de Lista Emergente',
'LBL_POPUPLISTVIEW'=>'Vista de Lista Emergente',
'LBL_POPUPSEARCH'=>'Búsqueda Emergente',
'LBL_DASHLETSEARCHVIEW'=>'Búsqueda de Sugar Dashlet',
'LBL_DISPLAY_HTML'=>'Mostrar Código HTML',
'LBL_DETAILVIEW'=>'Vista Detallada', //HACER: Quizás sea "DetailView"
'LBL_DROP_HERE' => '[Soltar Aquí]',
'LBL_EDIT'=>'Editar',
'LBL_EDIT_LAYOUT'=>'Editar Diseño',
'LBL_EDIT_ROWS'=>'Editar Filas',
'LBL_EDIT_COLUMNS'=>'Editar Columnas',
'LBL_EDIT_LABELS'=>'Editar Etiquetas',
'LBL_EDIT_FIELDS'=>'Editar Campos Personalizados',
'LBL_EDIT_PORTAL'=>'Editar Portal para ',
'LBL_EDIT_FIELDS'=>'Editar Campos',
'LBL_EDITVIEW'=>'Vista de Edición', //HACER: Quizás sea "EditView"
'LBL_CONVERTLEAD' => 'Convertir Cliente Potencial',
'LBL_FILLER'=>'(relleno)',
'LBL_FIELDS'=>'Campos',
'LBL_FAILED_TO_SAVE' => 'Fallo Al Guardar',
'LBL_FAILED_PUBLISHED' => 'Fallo Al Publicar',
'LBL_HOMEPAGE_PREFIX' => 'Mi',
'LBL_LAYOUT_PREVIEW'=>'Vista Preliminar del Diseño',
'LBL_LAYOUTS'=>'Diseños',
'LBL_LISTVIEW'=>'Vista de Lista', //HACER: Quizás sea "ListView"
'LBL_MODULES'=>'Módulos',
'LBL_MODULE_TITLE' => 'Estudio',
'LBL_NEW_PACKAGE' => 'Nuevo Paquete',
'LBL_NEW_PANEL'=>'Nuevo Panel',
'LBL_NEW_ROW'=>'Nueva Fila',
'LBL_PACKAGE_DELETED'=>'Paquete Eliminado',
'LBL_PUBLISHING' => 'Publicando ...',
'LBL_PUBLISHED' => 'Publicado',
'LBL_SELECT_FILE'=> 'Seleccionar Archivo',
'LBL_SAVE_LAYOUT'=> 'Guardar Diseño',
'LBL_SELECT_A_SUBPANEL' => 'Seleccione un Subpanel',
'LBL_SELECT_SUBPANEL' => 'Seleccione Subpanel',
'LBL_SUBPANELS' => 'Subpaneles',
'LBL_SUBPANEL' => 'Subpanel',
'LBL_SUBPANEL_TITLE' => 'Título:',
'LBL_SEARCH_FORMS' => 'Búsqueda',
'LBL_SEARCH'=>'Búsqueda',
'LBL_STAGING_AREA' => 'Área de Diseño (arrastre y suelte elementos aquí)',
'LBL_SUGAR_FIELDS_STAGE' => 'Campos Sugar (haga clic en los elementos para agregarlos al área de diseño)',
'LBL_SUGAR_BIN_STAGE' => 'Papelera Sugar (haga clic en los elementos para agregarlos al área de diseño)',
'LBL_TOOLBOX' => 'Caja de Herramientas',
'LBL_VIEW_SUGAR_FIELDS' => 'Ver Campos Sugar',
'LBL_VIEW_SUGAR_BIN' => 'Ver Papelera Sugar',
'LBL_QUICKCREATE' => 'Creación Rápida', //HACER: Quizás sea "QuickCreate"
'LBL_EDIT_DROPDOWNS' => 'Editar una Lista Desplegable Global',
'LBL_ADD_DROPDOWN' => 'Agregar una nueva Lista Desplegable Global',
'LBL_BLANK' => '-vacío-',
'LBL_TAB_ORDER' => 'Órden de Tabulación',
'LBL_TAB_PANELS' => 'Mostrar paneles como pestañas',
'LBL_TAB_PANELS_HELP' => 'Mostrar cada panel como su propia pestaña en lugar de hacer que aparezcan todos en una pantalla',

'LBL_DROPDOWN_TITLE_NAME' => 'Nombre',
'LBL_DROPDOWN_LANGUAGE' => 'Idioma',
'LBL_DROPDOWN_ITEMS' => 'Elementos de Lista',
'LBL_DROPDOWN_ITEM_NAME' => 'Nombre del Elemento',
'LBL_DROPDOWN_ITEM_LABEL' => 'Etiqueta de Visualización',

'LBL_WIRELESSLAYOUTS'=>'Diseños para Móviles',
'LBL_WIRELESSEDITVIEW'=>'Vista de Edición para Móviles',
'LBL_WIRELESSDETAILVIEW'=>'Vista de Detalle para Móviles',
'LBL_WIRELESSLISTVIEW'=>'Vista de Lista para Móviles',
'LBL_WIRELESSSEARCH'=>'Búsqueda para Móviles',

'LBL_BTN_ADD_DEPENDENCY'=>'Agregar Dependencia',
'LBL_BTN_EDIT_FORMULA'=>'Editar Fórmula',
'LBL_DEPENDENCY' => 'Dependencia',
'LBL_CALCULATED' => 'Valor Calculado',
'LBL_READ_ONLY' => 'Sólo Lectura',
'LBL_FORMULA' => 'Fórmula',
'LBL_FORMULA_BUILDER' => 'Constructor de Fórmulas',
'LBL_NO_FIELDS' => 'No se han encontrado Campos',
'LBL_NO_FUNCS' => 'No se han encontrado Funciones',
'LBL_SEARCH_FUNCS' => 'Buscar Funciones...',
'LBL_SEARCH_FIELDS' => 'Buscar Campos...',
'LBL_FORMULA' => 'Fórmula',
'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Dependiente',

//RELATIONSHIPS
'LBL_MODULE' => 'Módulo',
'LBL_LHS_MODULE'=>'Módulo Principal',
'LBL_CUSTOM_RELATIONSHIPS' => '* relación creada en el Estudio',
'LBL_RELATIONSHIPS'=>'Relaciones',
'LBL_RELATIONSHIP_EDIT' => 'Editar Relación',
'LBL_REL_NAME' => 'Nombre',
'LBL_REL_LABEL' => 'Etiqueta',
'LBL_REL_TYPE' => 'Tipo',
'LBL_RHS_MODULE'=>'Módulo Relacionado',
'LBL_NO_RELS' => 'Sin Relaciones',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Condición Opcional' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Columna',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Valor',
'LBL_SUBPANEL_FROM'=>'Subpanel de',
'LBL_RELATIONSHIP_ONLY'=>'No se creará ningún elemento visible para esta relación ya que existía anteriormente una relación visible entre estos dos módulos.',
'LBL_ONETOONE' => 'Uno a Uno',
'LBL_ONETOMANY' => 'Uno a Muchos',
'LBL_MANYTOONE' => 'Muchos a Uno',
'LBL_MANYTOMANY' => 'Muchos a Muchos',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Seleccione una función o componente.',
'LBL_QUESTION_MODULE1' => 'Seleccione un módulo.',
'LBL_QUESTION_EDIT' => 'Seleccione un módulo a editar.',
'LBL_QUESTION_LAYOUT' => 'Seleccione un diseño a editar.',
'LBL_QUESTION_SUBPANEL' => 'Seleccione un subpanel a editar.',
'LBL_QUESTION_SEARCH' => 'Seleccione un diseño de búsqueda a editar.',
'LBL_QUESTION_MODULE' => 'Seleccione un componente de módulo a editar.',
'LBL_QUESTION_PACKAGE' => 'Seleccione un paquete a editar, o cree un nuevo paquete.',
'LBL_QUESTION_EDITOR' => 'Seleccione una herramienta.',
'LBL_QUESTION_DROPDOWN' => 'Seleccione una lista desplegable a editar, o cree una nueva lista desplegable.',
'LBL_QUESTION_DASHLET' => 'Seleccione un diseño de dashlet a editar.',
'LBL_QUESTION_POPUP' => 'Seleccione un diseño emergente a editar.',

//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Relacionado Con',
'LBL_NAME'=>'Nombre',
'LBL_LABELS'=>'Etiquetas',
'LBL_MASS_UPDATE'=>'Actualización Masiva',
'LBL_AUDITED'=>'Auditado',
'LBL_CUSTOM_MODULE'=>'Módulo',
'LBL_DEFAULT_VALUE'=>'Valor Por Defecto',
'LBL_REQUIRED'=>'Requerido',
'LBL_DATA_TYPE'=>'Tipo',
'LBL_HCUSTOM'=>'PERSONALIZADO', //HACER: Quizás sea "CUSTOM"
'LBL_HDEFAULT'=>'POR DEFECTO', //HACER: Quizás sea "DEFAULT"

'LBL_LANGUAGE'=>'Idioma:',


//SECTION
'LBL_SECTION_EDLABELS' => 'Editar Etiquetas',
'LBL_SECTION_PACKAGES' => 'Paquetes',
'LBL_SECTION_PACKAGE' => 'Paquete',
'LBL_SECTION_MODULES' => 'Módulos',
'LBL_SECTION_PORTAL' => 'Portal',
'LBL_SECTION_DROPDOWNS' => 'Listas Desplegables',
'LBL_SECTION_PROPERTIES' => 'Propiedades',
'LBL_SECTION_DROPDOWNED' => 'Editar Lista Desplegable',
'LBL_SECTION_HELP' => 'Ayuda',
'LBL_SECTION_ACTION' => 'Acción',
'LBL_SECTION_MAIN' => 'Principal',
'LBL_SECTION_EDPANELLABEL' => 'Editar Etiqueta de Panel',
'LBL_SECTION_FIELDEDITOR' => 'Editar Campo',
'LBL_SECTION_DEPLOY' => 'Desplegar',
'LBL_SECTION_MODULE' => 'Módulo',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Editar Visibilidad',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Por Defecto',
'LBL_HIDDEN'=>'Oculto',
'LBL_AVAILABLE'=>'Disponible',
'LBL_LISTVIEW_DESCRIPTION'=>'A continuación se muestran tres columnas. La columna <b>Por Defecto</b> contiene los campos que se muestran en una lista por defecto. La columna <b>Adicional</b> contiene campos que un usuario puede elegir a la hora de crear una vista personalizada. La columna <b>Disponible</b> muestra columnas disponibles para usted como administrador para, o bien añadirlas a las columnas Por Defecto, o a las Adicionales para que sean usadas por usuarios.', 
'LBL_LISTVIEW_EDIT'=>'Editor de Listas',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Vista Preliminar',
'LBL_MB_RESTORE'=>'Restaurar',
'LBL_MB_DELETE'=>'Eliminar',
'LBL_MB_COMPARE'=>'Comparar',
'LBL_MB_DEFAULT_LAYOUT'=>'Diseño por Defecto',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Agregar',
'LBL_BTN_SAVE'=>'Guardar',
'LBL_BTN_SAVE_CHANGES'=>'Guardar Cambios',
'LBL_BTN_DONT_SAVE'=>'Descartar Cambios',
'LBL_BTN_CANCEL'=>'Cancelar',
'LBL_BTN_CLOSE'=>'Cerrar',
'LBL_BTN_SAVEPUBLISH'=>'Guardar y Desplegar',
'LBL_BTN_NEXT'=>'Siguiente',
'LBL_BTN_BACK'=>'Anterior',
'LBL_BTN_CLONE'=>'Clonar',
'LBL_BTN_ADDCOLS'=>'Agregar Columnas',
'LBL_BTN_ADDROWS'=>'Agregar Filas',
'LBL_BTN_ADDFIELD'=>'Agregar Campo',
'LBL_BTN_ADDDROPDOWN'=>'Agregar Lista Desplegable',
'LBL_BTN_SORT_ASCENDING'=>'Ordenar Ascendete',
'LBL_BTN_SORT_DESCENDING'=>'Ordenar Descendente',
'LBL_BTN_EDLABELS'=>'Editar Etiquetas',
'LBL_BTN_UNDO'=>'Deshacer',
'LBL_BTN_REDO'=>'Repetir',
'LBL_BTN_ADDCUSTOMFIELD'=>'Agregar Campo Personalizado',
'LBL_BTN_EXPORT'=>'Exportar Personalizaciones',
'LBL_BTN_DUPLICATE'=>'Duplicar',
'LBL_BTN_PUBLISH'=>'Publicar',
'LBL_BTN_DEPLOY'=>'Desplegar',
'LBL_BTN_EXP'=>'Exportar',
'LBL_BTN_DELETE'=>'Eliminar',
'LBL_BTN_VIEW_LAYOUTS'=>'Ver Diseños',
'LBL_BTN_VIEW_FIELDS'=>'Ver Campos',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Ver Relaciones',
'LBL_BTN_ADD_RELATIONSHIP'=>'Agregar Relación',
//TABS


//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Error: El Campo Ya Existe',
'ERROR_INVALID_KEY_VALUE'=> "Error: Valor de Clave No Válido: [']",
'ERROR_NO_HISTORY' => 'No se han encontrado archivos en el historial',
'ERROR_MINIMUM_FIELDS' => 'El diseño debe contener al menos un campo',
'ERROR_GENERIC_TITLE' => 'Ha ocurrido un error',
'ERROR_REQUIRED_FIELDS' => '¿Está seguro de que desea continuar? Los siguientes campos requeridos no se encuentran en el diseño:  ',
'ERROR_ARE_YOU_SURE' => '¿Está seguro de que desea continuar?',

'ERROR_CALCULATED_MOBILE_FIELDS' => 'Los siguientes campos contienen valores calculados que no serán recalculados en tiempo real en la Vista de Edición de SugarCRM Mobile:',
'ERROR_CALCULATED_PORTAL_FIELDS' => 'Los siguientes campos contienen valores calculados que no serán recalculados en tiempo real en la Vista de Edición del Portal de SugarCRM:',



//SUGAR PORTAL
'LBL_PORTAL'=>'Portal',
'LBL_PORTAL_LAYOUTS'=>'Diseños de Portal',
'LBL_SYNCP_WELCOME'=>'Por favor, introduzca el URL de la instancia de portal que desea actualizar.',
'LBL_SP_UPLOADSTYLE'=>'Seleccione la hoja de estilos a subir desde su equipo.<br> La hoja de estilos será utilizada en el Portal de Sugar la próxima vez que realice una sincronización.',
'LBL_SP_UPLOADED'=> 'Subido',
'ERROR_SP_UPLOADED'=>'Por favor, asegúrese de que está subiendo una hoja de estilos CSS.',
'LBL_SP_PREVIEW'=>'Aquí tiene una vista preliminar de la apariencia que tendrá el Portal de Sugar usando la hoja de estilos.',
'LBL_PORTALSITE'=>'URL de Portal de Sugar: ',
'LBL_PORTAL_GO'=>'Adelante',
'LBL_UP_STYLE_SHEET'=>'Subir Hoja de Estilos',
'LBL_QUESTION_SUGAR_PORTAL' => 'Seleccione el diseño de Portal de Sugar a editar.',
'LBL_QUESTION_PORTAL' => 'Seleccione el diseño de portal a editar.',
'LBL_SUGAR_PORTAL'=>'Editor del Portal de Sugar',

//PORTAL PREVIEW
'LBL_CASES'=>'Casos',
'LBL_NEWSLETTERS'=>'Boletines de Noticias',
'LBL_BUG_TRACKER'=>'Seguimiento de Incidencias',
'LBL_MY_ACCOUNT'=>'Mi Cuenta',
'LBL_LOGOUT'=>'Salir',
'LBL_CREATE_NEW'=>'Crear Nuevo',
'LBL_LIST'=>'Lista',
'LBL_VIEW'=>'Vista',
'LBL_LOW'=>'Baja',
'LBL_MEDIUM'=>'Media',
'LBL_HIGH'=>'Alta',
'LBL_NUMBER'=>'Número:',
'LBL_PRIORITY'=>'Prioridad:',
'LBL_SUBJECT'=>'Asunto',
'LBL_DESCRIPTION'=>'Descripción:',




//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Nombre del Paquete:',
'LBL_MODULE_NAME'=>'Nombre del Módulo:',
'LBL_AUTHOR'=>'Autor:',
'LBL_DESCRIPTION'=>'Descripción:',
'LBL_KEY'=>'Clave:',
'LBL_ADD_README'=>' Léame',
'LBL_MODULES'=>'Módulos:',
'LBL_LAST_MODIFIED'=>'Última Modificación:',
'LBL_NEW_MODULE'=>'Nuevo Módulo',
'LBL_LABEL'=>'Etiqueta:',
'LBL_LABEL_TITLE'=>'Etiqueta',
'LBL_WIDTH'=>'Anchura',
'LBL_PACKAGE'=>'Paquete:',
'LBL_TYPE'=>'Tipo:',
'LBL_TEAM_SECURITY'=>'Seguridad de Equipos',
'LBL_ASSIGNABLE'=>'Asignable',
'LBL_PERSON'=>'Persona',
'LBL_COMPANY'=>'Compañía',
'LBL_ISSUE'=>'Incidencia',
'LBL_SALE'=>'Venta',
'LBL_FILE'=>'Archivo',
'LBL_NAV_TAB'=>'Pestaña de Navegación',
'LBL_CREATE'=>'Crear',
'LBL_LIST'=>'Lista',
'LBL_LIST_VIEW'=>'Vista de Lista',
'LBL_HISTORY'=>'Ver Historial',
'LBL_RESTORE_DEFAULT'=>'Restaurar Vista Por Defecto',
'LBL_ACTIVITIES'=>'Actividades',
'LBL_SEARCH'=>'Buscar',
'LBL_NEW'=>'Nuevo',
'LBL_TYPE_BASIC'=>'básica',
'LBL_TYPE_COMPANY'=>'compañía',
'LBL_TYPE_PERSON'=>'persona',
'LBL_TYPE_ISSUE'=>'incidencia',
'LBL_TYPE_SALE'=>'venta',
'LBL_TYPE_FILE'=>'archivo',
'LBL_RSUB'=>'Este es el subpanel que se mostrará en su módulo',
'LBL_MSUB'=>'Este es el subpanel que su módulo proporciona para que sea mostrado por el módulo relacionado',
'LBL_MB_IMPORTABLE'=>'Importable',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'visible',
'LBL_VE_HIDDEN'=>'oculto',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] ha sido eliminado',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Exportar Personalizaciones',
'LBL_EC_NAME'=>'Nombre del Paquete:',
'LBL_EC_AUTHOR'=>'Autor:',
'LBL_EC_DESCRIPTION'=>'Descripción:',
'LBL_EC_KEY'=>'Clave:',
'LBL_EC_CHECKERROR'=>'Por favor, seleccione un módulo.',
'LBL_EC_CUSTOMFIELD'=>'campos personalizados',
'LBL_EC_CUSTOMLAYOUT'=>'diseño personalizados',
'LBL_EC_NOCUSTOM'=>'No se ha personalizado ningún módulo.',
'LBL_EC_EMPTYCUSTOM'=>'tiene vacías las personalizaciones.',
'LBL_EC_EXPORTBTN'=>'Exportar',
'LBL_MODULE_DEPLOYED' => 'El módulo ha sido desplegado.',
'LBL_UNDEFINED' => 'no definido',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Error al recuperar datos',
'LBL_AJAX_TIME_DEPENDENT' => 'Hay en progreso una acción dependiente del tiempo. Por favor, espere e inténtelo de nuevo en unos instantes.',
'LBL_AJAX_LOADING' => 'Cargando...',
'LBL_AJAX_DELETING' => 'Eliminando...',
'LBL_AJAX_BUILDPROGRESS' => 'Construcción En Progreso...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Despliegue En Progreso...',
'LBL_AJAX_FIELD_EXISTS' =>'El nombre del campo que ha introducido ya existe. Por favor, introduzca un nuevo nombre para el campo.',
//JS
'LBL_JS_REMOVE_PACKAGE' => '¿Está seguro de que desea quitar este paquete? Esto eliminará permanentemente todos los archivos asociados con este paquete.',
'LBL_JS_REMOVE_MODULE' => '¿Está seguro de que desea quitar este módulo? Esto eliminará permanentemente todos los archivos asociados con este módulo.',
'LBL_JS_DEPLOY_PACKAGE' => 'Cualquier personalización que haya realizado en el Estudio será sobrescrita cuando este módulo sea desplegado de nuevo. ¿Está seguro de que desea proceder?',

'LBL_DEPLOY_IN_PROGRESS' => 'Desplegando Paquete',
'LBL_JS_VALIDATE_NAME'=>'Nombre - Debe ser alfanumérico, sin espacios y comenzando por letra',
'LBL_JS_VALIDATE_KEY'=>'Clave - Debe ser alfanumérica',
'LBL_JS_VALIDATE_LABEL'=>'Por favor, introduzca la etiqueta que se utilizará como Nombre Visible de este módulo',
'LBL_JS_VALIDATE_TYPE'=>'Por favor, seleccione el tipo de módulo que quiere construir de la lista anterior',
'LBL_JS_VALIDATE_REL_NAME'=>'Nombre - Debe ser alfanumérico y sin espacios',
'LBL_JS_VALIDATE_REL_LABEL'=>'Etiqueta - por favor, agregue la etiqueta que será mostrada sobre el subpanel',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>"Al eliminar este campo personalizado, eliminará tanto el campo personalizado como todos los datos en la base de datos relacionados con el campo personalizado. El campo ya no aparecerá en ninguno de los diseños de módulos, y no estará disponible en los Informes."
	. "\\n\\nEl cambio en los Informes será visto tras cerrar la sesión y abrir una nueva, y todos los informes que contengan el campo tendrán que ser actualizados para poder ser ejecutados." 
	. "\\n\\n¿Desea continuar?",
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'¿Está seguro de que desea eliminar esta relación?',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Esto hará la relación permantente. ¿Está seguro de que desea desplegar esta relación?',
'LBL_CONFIRM_DONT_SAVE' => 'Hay cambios pendientes de ser guardados, ¿desea guardarlos ahora?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => '¿Guardar Cambios?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Los datos pueden ser truncados y ésto no podrá deshacerse, ¿está seguro de que desea continuar?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Seleccione el tipo de datos apropiado acorde con el tipo de datos que será introducido en el campo.',
'LBL_POPHELP_IMPORTABLE'=>'<b>Sí</b>: El campo será incluido en una operación de importación.<br><b>No</b>: El campo no será incluido en una importación.<br><b>Requerido</b>: Debe de suministrarse un valor para el campo en toda importación.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Introduzca un número para la Anchura, como medida en píxeles.<br> La imagen subida será escalada a esta Anchura.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Introduzca un número para la Altura, como medida en píxeles.<br> La imagen subida será escalada a esta Altura.',
'LBL_POPHELP_DUPLICATE_MERGE'=>'<b>Habilitado</b>: El campo aparecerá en la característica de Combinar Duplicados, pero no estará disponible para ser utilizado en las condiciones de filtrado de la característica Búsqueda de Duplicados.<br><b>Deshabilitado</b>: El campo no aparecerá en la característica Combinar Duplicados, y tampoco estará disponible para ser utilizado como condición de filtrado en la característica de Búsqueda de Duplicados.'

. '<br><b>En Filtro</b>: El campo aparecerá en la característica de Combinar Duplicados, y también estará disponible en la característica de Búsqueda de Duplicados.<br><b>Sólo en Filtro</b>: El campo no aparecerá en la característica Combinar Duplicados, pero estará disponible en la característica de Búsqueda de Duplicados.<br><b>Filtro Seleccionado por Defecto</b>: El campo será utilizado en la condición de filtrado por defecto de la página de Búsqueda de Duplicados, y también aparecerá en la característica de Combinar Duplicados.'
,
'LBL_POPHELP_CALCULATED'=>"Cree una fórmula para determinar el valor de este campo.<br>" 
   . "Los campos que contienen fórmulas no se podrán ser calculados en tiempo real " 
   . "ni en el Portal Self-Service de Sugar ni en " 
   . "los diseños de Vistas de Edición de Sugar Mobile.",

//Revert Module labels
'LBL_RESET' => 'Restablecer',
'LBL_RESET_MODULE' => 'Restablecer Módulo',
'LBL_REMOVE_CUSTOM' => 'Quitar Personalizaciones',
'LBL_CLEAR_RELATIONSHIPS' => 'Limpiar Relaciones',
'LBL_RESET_LABELS' => 'Restablecer Eqiquetas',
'LBL_RESET_LAYOUTS' => 'Restablecer Diseños"',
'LBL_REMOVE_FIELDS' => 'Quitar Campos Personalizados',
'LBL_CLEAR_EXTENSIONS' => 'Limpiar Extensiones',
'LBL_CLEAR_EXTENSIONS' => 'Limpiar Extensiones',



'LBL_HISTORY_TIMESTAMP' => 'Registro de Tiempo',
'LBL_HISTORY_TITLE' => ' historial',


'fieldTypes' => array(
				'varchar'=>'Campo de Texto', 
				'int'=>'Entero', 
				'float'=>'Coma flotante',
				'bool'=>'Casilla de Verificación',
				'enum'=>'Desplegable',
				'multienum' => 'Selección Múltiple',
                'date'=>'Fecha', 
                'phone' => 'Teléfono', 
                'currency' => 'Moneda', 
                'html' => 'HTML', 
                'radioenum' => 'Opción',
                'relate' => 'Relacionado', 
                'address' => 'Dirección', 
                'text' => 'Área de Texto', 
                'url' => 'URL', 
                'iframe' => 'IFrame', 
                'image' => 'Imagen',
				'encrypt'=>'Encriptado',
                'datetimecombo' =>'Fecha y hora',
				'decimal'=>'Decimal',
),

'parent' => 'Posiblemente Relacionado con',

'LBL_ILLEGAL_FIELD_VALUE' =>"Las claves de un desplegable no pueden contener comillas.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"Está seleccionando este elemento para su eliminación de la lista desplegable. Cualquier campo desplegable que use esta lista con este elemento como valor ya no mostrará dicho valor, y el valor ya no podrá ser seleccionado en los campos desplegables. ¿Está seguro de que desea continuar?",

);
?>