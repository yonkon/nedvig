<?
$module = 'sphr_Client';
$dictionary['sphr_Client']['fields']['email1'] = array(
    'name'        => 'email1',
    'vname'        => 'LBL_EMAIL',
    'group'=>'email1',
    'type'        => 'varchar',
    'function'    => array(
    'name'        => 'getEmailAddressWidget',
       'returns'    => 'html'
    ),
    'source'    => 'non-db',
    'studio' => array('editField' => true),
    );

$dictionary['sphr_Client']['fields']['email_addresses_primary'] = array(
    'name' => 'email_addresses_primary',
    'type' => 'link',
    'relationship' => 'sphr_client_email_addresses_primary',
    'source' => 'non-db',
    'vname' => 'LBL_EMAIL_ADDRESS_PRIMARY',
    'duplicate_merge' => 'disabled',
    );

$dictionary['sphr_Client']['fields']['email_addresses'] = array (
    'name' => 'email_addresses',
    'type' => 'link',
    'relationship' => 'sphr_client_email_addresses',
    'source' => 'non-db',
    'vname' => 'LBL_EMAIL_ADDRESSES',
    'reportable'=>false,
    'unified_search' => true,
    'rel_fields' => array('primary_address' => array('type'=>'bool')),
    );

$dictionary['sphr_Client']['relationships']['sphr_client_email_addresses'] = array(
    'lhs_module'=> 'sphr_Client',
    'lhs_table'=> 'sphr_client',
    'lhs_key' => 'id',
    'rhs_module'=> 'EmailAddresses',
    'rhs_table'=> 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type'=>'many-to-many',
    'join_table'=> 'email_addr_bean_rel',
    'join_key_lhs'=>'bean_id',
    'join_key_rhs'=>'email_address_id',
    'relationship_role_column'=>'bean_module',
    'relationship_role_column_value'=>'sphr_Client'
    );

$dictionary['sphr_Client']['relationships']['sphr_client_email_addresses_primary'] = array(
    'lhs_module'=> 'sphr_Client',
    'lhs_table' => 'sphr_client',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type'=>'many-to-many',
    'join_table'=> 'email_addr_bean_rel',
    'join_key_lhs'=>'bean_id',
    'join_key_rhs'=>'email_address_id',
    'relationship_role_column'=>'primary_address',
    'relationship_role_column_value'=>'1'
    );
?>