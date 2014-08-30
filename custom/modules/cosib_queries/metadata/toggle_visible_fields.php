<?php


$toggle_visible_fields = array(
	'type_of_query_c' => array(
		'visa' => array(
                        'type_of_object_c' =>0,
                        'type_of_object_relate_c' =>0,
                        'category_of_object_c' =>0,
		),
		'selling' => array(
			            'type_of_object_c' =>0,
                        'type_of_object_relate_c' =>1,
                        'category_of_object_c' =>1,

		),
		'buying' => array(
		                'type_of_object_c' =>1,
                        'type_of_object_relate_c' =>0,
                        'category_of_object_c' =>1,

		),
		'tolease' => array(
			            'type_of_object_c' =>0,
                        'type_of_object_relate_c' =>1,
                        'category_of_object_c' =>1,
		),
		'bylease' => array(
			            'type_of_object_c' =>1,
                        'type_of_object_relate_c' =>0,
                        'category_of_object_c' =>1,
		),
		'postsale' => array(
			            'type_of_object_c' =>0,
                        'type_of_object_relate_c' =>1,
                        'category_of_object_c' =>0,
		),

	),
	'status_c' => array(
		'status6' => array(
                        'type_of_object_relate_c' =>1,
		),
		'status1'=> array(
                        'type_of_object_relate_c' =>0,
		),
		'status2'=> array(
                        'type_of_object_relate_c' =>0,
  		),
		'status3'=> array(
                        'type_of_object_relate_c' =>0,
        ),
		'status4'=> array(
                        'type_of_object_relate_c' =>0,
  		),
		'status5' => array(
                        'type_of_object_relate_c' =>0,
		),
	),
	'transfer_c' => array(
		0 => array(
						'transfer_date_c' =>0,
		),
		1 => array(
						'transfer_date_c' =>1,
         ),
    ),
    'periodic_visit_c' => array(
		0 => array(
						'date_periodic_visit_c' =>0,
		),
		1 => array(
						'date_periodic_visit_c' =>1,
         ),
    ),
    'noplan_visit_c' => array(
		0 => array(
						'date_noplan_visit_c' =>0,
		),
		1 => array(
						'date_noplan_visit_c' =>1,
         ),
    ),
);


?>