<?php
    
$dictionary["sphr_Client"]["relationships"]["prospect_list_sphr_client"] = array (
	'lhs_module' => 'ProspectLists',
	'lhs_table' => 'prospect_lists',
	'lhs_key' => 'id',
	'rhs_module' => 'sphr_Client',
	'rhs_table' => 'sphr_client',
	'rhs_key' => 'id',
	'relationship_type' => 'many-to-many',
	'join_table' => 'prospect_lists_prospects',
	'join_key_lhs' => 'prospect_list_id',
	'join_key_rhs' => 'related_id',
	'relationship_role_column' => 'related_type',
	'relationship_role_column_value' => 'sphr_Client'
);


$dictionary["sphr_Client"]["fields"]["prospect_lists"] = array (
	'name' => 'prospect_lists',
	'type' => 'link',
	'relationship' => 'prospect_list_sphr_client',
    //new
	'module'=>'ProspectLists',
        'source'=>'non-db',
    //new
        'vname'=>'LBL_PROSPECT_LIST',
);

?>
