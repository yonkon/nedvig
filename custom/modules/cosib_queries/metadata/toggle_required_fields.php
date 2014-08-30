<?php
 $toggle_required_fields = array(
	'type_of_query_c' => array(
		'visa' => array(
		              'assigned_user_name' => 1,
                      //'charge_c' =>1,
                      'number_of_people_c' =>1,
                      //'total_cost_c' =>1,
		),
		'selling' => array(
		                'assigned_user_name' => 1,
			            'category_of_object_c' =>1,
                        'type_of_object_relate_c' =>1,

		),
		'buying' => array(
						'assigned_user_name' => 1,
		                'category_of_object_c' =>1,
		                'coast_c' =>1,
		                'type_of_object_c' =>1,
		),
		'tolease' => array(
				        'assigned_user_name' => 1,
			            'category_of_object_c' =>1,
                        'type_of_object_relate_c' =>1,
		),
		'bylease' => array(
                        'assigned_user_name' => 1,
			            'category_of_object_c' =>1,
			            'coast_c' =>1,
			            'type_of_object_c' =>1,
		),
		'postsale' => array(
				        'assigned_user_name' => 1,
                        'type_of_object_relate_c' =>1,
		),

	),
	'status_c' => array(
		'status6' => array(
                        'type_of_object_relate_c' =>1,
                        'assigned_user_name' => 1,
		                'category_of_object_c' =>1,
		                'coast_c' =>1,
		                'type_of_object_c' =>1,
		),
		'status1'=> array(
                        'assigned_user_name' => 1,
		                'category_of_object_c' =>1,
		                'coast_c' =>1,
		                'type_of_object_c' =>1,
		),
		'status2'=> array(
                        'assigned_user_name' => 1,
		                'category_of_object_c' =>1,
		                'coast_c' =>1,
		                'type_of_object_c' =>1,
  		),
		'status3'=> array(
                       'assigned_user_name' => 1,
		                'category_of_object_c' =>1,
		                'coast_c' =>1,
		                'type_of_object_c' =>1,
        ),
		'status4'=> array(
                        'assigned_user_name' => 1,
		                'category_of_object_c' =>1,
		                'coast_c' =>1,
		                'type_of_object_c' =>1,
  		),
		'status5' => array(
                        'assigned_user_name' => 1,
		                'category_of_object_c' =>1,
		                'coast_c' =>1,
		                'type_of_object_c' =>1,
		),

	),
);

?>