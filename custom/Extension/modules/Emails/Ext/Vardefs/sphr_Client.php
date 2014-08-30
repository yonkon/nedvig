<?php
//filed
/* relationship collection attributes */
		/* added to support InboundEmail */
 $dictionary['Email']['fields']['sphr_client']	= array (
			'name'			=> 'sphr_client',
			'vname'			=> 'LBL_EMAILS_SPHR_CLIENT_REL',
			'type'			=> 'link',
			'relationship'	=> 'emails_sphr_client_rel',
			'module'		=> 'sphr_Client',
			'bean_name'		=> 'sphr_client',
			'source'		=> 'non-db',
		);


//relationship
$dictionary['Email']['relationships']['emails_sphr_client_rel'] =
  array (
  	'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'sphr_Client',
    'rhs_table' => 'sphr_client',
    'rhs_key' => 'id',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'sphr_Client',
    'reverse' => '0',
    'deleted' => '0',
  );


?>