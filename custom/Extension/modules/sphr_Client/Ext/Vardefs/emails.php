<?php
$dictionary['sphr_Client']['fields']['emails'] =
  array (
    'name' => 'emails',
    'type' => 'link',
    'relationship' => 'emails_sphr_client_rel', /* reldef in emails */
    'module'=>'Emails',
    'bean_name'=>'Email',
    'source'=>'non-db',
    'vname'=>'LBL_EMAILS',
  );
?>