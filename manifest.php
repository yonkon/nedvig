<?php
// $Id: manifest.php,v 1.54 2011/02/08 21:29:28 aserrano Exp $
// manifest file for information regarding application of new code
$manifest = array(
	// only install on the following regex sugar versions (if empty, no check) 
    'acceptable_sugar_versions' =>
    array (
		'exact_matches' => array (
		),
		'regex_matches' => array (
			'6\.1\..*'
		),
    ),
    'acceptable_sugar_flavors' =>
    array (
        0 => 'CE',
        1 => 'PRO',
        2 => 'ENT',
    ),

    // name of new code
    'name' => 'Spanish (Spain) Language Pack',

    // description of new code
    'description' => 'Spanish (Spain) Language Pack',

    // author of new code
    'author' => 'Alberto Serrano',

    // date published
    'published_date' => '2011/02/08',

    // version of code
    'version' => '6.1.1',

    // type of code (valid choices are: full, langpack, module, patch, theme )
    'type' => 'langpack',

    // icon for displaying in UI (path to graphic contained within zip package)
    'icon' => 'include/images/flag-es_ES.png',
    
    'is_uninstallable' => TRUE,
    
);



$installdefs = array(
	'id'=> 'es_es',
/*	
   // This seems unnecessary:
   'copy' => array(
						array('from'=> '<basepath>/LEEME-i18n.txt',
							  'to'=> 'LEEME-i18n.txt',
							  ),
						array('from'=> '<basepath>/include',
							  'to'=> 'jscalendar',
							  ),
						array('from'=> '<basepath>/modules',
							  'to'=> 'jscalendar',
							  ),
						array('from'=> '<basepath>/modules',
							  'to'=> 'modules',
							  ),
					), */
	);
?>
