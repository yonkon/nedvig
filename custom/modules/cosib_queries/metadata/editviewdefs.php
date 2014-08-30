<?php
$module_name = 'cosib_queries';
$viewdefs [$module_name] =
array (
  'EditView' =>
  array (
    'templateMeta' =>
    array (
      'maxColumns' => '3',
      'widths' =>
      array (
        0 =>
        array (
          'label' => '11',
          'field' => '23',
        ),
        1 =>
        array (
          'label' => '10',
          'field' => '23',
        ),
        2 =>
        array (
          'label' => '10',
          'field' => '23',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' =>
    array (
      'lbl_editview_panel4' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'sphr_clientb_queries_name',
            'label' => 'LBL_SPHR_CLIENT_COSIB_QUERIES_FROM_SPHR_CLIENT_TITLE',
          ),
          1 => array (
            'name' => 'type_of_query_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_OF_QUERY',
          ),
          2 => '',
        ),
        1 =>
        array (
           0 => 'assigned_user_name',
          1 =>
          array (
            'name' => 'status_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          2 =>  array (
            'name' => 'status_desc_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS_DESC',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'accounts_cob_queries_name',
            'label' => 'LBL_ACCOUNTS_COSIB_QUERIES_FROM_ACCOUNTS_TITLE',
          ),
          1 =>
          array (
            'studio' => 'false',
            'label' => 'LBL_ACCOUNTS_AGENTS',
            'customCode' => '
						<script>
						 var accounts_cob_queries_name_accounts_agent = new Object();
						 accounts_cob_queries_name_accounts_agent[\'module\']=\'cosib_queries\';
                         accounts_cob_queries_name_accounts_agent[\'module_id\']=\'{$fields.id.value}\';
						 accounts_cob_queries_name_accounts_agent[\'idfield_name\']=\'accounts_c3c3bccounts_ida\';
						 accounts_cob_queries_name_accounts_agent[\'idfield\']=\'{$fields.accounts_c3c3bccounts_ida.value}\';
						</script>
						<select id=\'accounts_cob_queries_name_accounts_agent_id\' value=\'\' name=\'accounts_cob_queries_name_accounts_agent\'></select>
						<script type=\'text/javascript\' src=\'custom/modules/Accounts/javascript/relate_field_agents.js\'></script>
						<script>
						 $(document).ready(function(){literal}{init_relate_accounts_agent(\'accounts_cob_queries_name\')});{/literal}
						</script>',
      		),
      		2 =>'',
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'type_of_object_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_OF_OBJECT',
          ),
          1 => array (
            'name' => 'type_of_object_relate_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_OF_OBJECT_RELATE',
          ),
          2 => '',
        ),
        4 =>
        array (
          0 => array (
            'name' => 'category_of_object_c',
            'studio' => 'visible',
            'label' => 'LBL_CATEGORY_OF_OBJECT',
          ),

          1 => '',
          2 => '',
        ),
      ),
      'lbl_editview_panel7' =>
      array (

        0 =>
        array (
          0 =>
          array (
            'name' => 'province_c',
            'studio' => 'visible',
            'label' => 'LBL_PROVINCE',
          ),
          1 =>
          array (
            'name' => 'budget_c',
            'studio' => 'visible',
            'label' => 'LBL_BUDGET',
          ),
          2 =>'',
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'coast_c',
            'studio' => 'visible',
            'label' => 'LBL_COAST',
          ),
          1 =>
          array (
            'name' => 'additional_term_budget_c',
            'studio' => 'visible',
            'label' => 'LBL_ADDITIONAL_TERM_BUDGET',
          ),
          2 =>'',
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'settlement_c',
            'studio' => 'visible',
            'label' => 'LBL_SETTLEMENT',
          ),
          1 =>
          array (
            'name' => 'credit_c',
            'studio' => 'visible',
            'label' => 'LBL_CREDIT_C',
          ),
          2 =>'',
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'quantity_of_bedroom_c',
            'studio' => 'visible',
            'label' => 'LBL_QUANTITY_OF_BEDROOM',
          ),
          1 => '',
          2 =>'',
        ),
        4 =>
        array (
          0 =>
          array (
            'name' => 'square_c',
            'label' => 'LBL_SQUARE',
          ),
          1 =>
          array (
            'name' => 'additional_desc_c',
            'studio' => 'visible',
            'label' => 'LBL_ADDITIONAL_DESC',
          ),
          2 =>'',
        ),
        5 =>
        array (
          0 =>
          array (
            'name' => 'remoteness_from_sea_c',
            'studio' => 'visible',
            'label' => 'LBL_REMOTENESS_FROM_SEA',
          ),
          1 => '',
          2 =>'',
        ),
        6 =>
        array (
          0 =>
          array (
            'name' => 'remoteness_from_commercial_c',
            'studio' => 'visible',
            'label' => 'LBL_REMOTENESS_FROM_COMMERCIAL_C',
          ),
          1 => '',
          2 =>'',
        ),
        7 =>
        array (
          0 =>
          array (
            'name' => 'area_c',
            'studio' => 'visible',
            'label' => 'LBL_AREA',
          ),
          1 => '',
          2 =>'',
        ),
        8 =>
        array (
          0 =>
          array (
            'name' => 'view_of_sea_c',
            'label' => 'LBL_VIEW_OF_SEA',
          ),
          1 => '',
          2 =>'',
        ),
        9 =>
        array (
          0 =>
          array (
            'name' => 'view_on_mountains_c',
            'label' => 'LBL_VIEW_ON_MOUNTAINS',
          ),
          1 => '',
          2 =>'',
        ),
      ),
      'lbl_editview_panel6' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'service_c',
            'studio' => 'visible',
            'label' => 'LBL_SERVICE',
          ),
          1 => '',
          2 =>'',
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'deposit_c',
            'label' => 'LBL_DEPOSIT',
          ),
          1 =>
          array (
            'name' => 'deposit_date_c',
            'label' => 'LBL_DEPOSIT_DATE',
          ),
          2 =>'',
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'keys_storing_c',
            'label' => 'LBL_KEYS_STORING',
          ),
          1 => '',
          2 => '',
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'taxes_c',
            'label' => 'LBL_TAXES',
          ),
          1 => '',
          2 => '',
        ),
        4 =>
        array (
          0 =>
          array (
            'name' => 'periodic_visit_c',
            'label' => 'LBL_PERIODIC_VISIT',
          ),
          1 =>
          array (
            'name' => 'date_periodic_visit_c',
            'label' => 'LBL_DATE_PERIODIC_VISIT_C',
          ),
          2 => '',
        ),
        5 =>
        array (
          0 =>
          array (
            'name' => 'noplan_visit_c',
            'label' => 'LBL_NOPLAN_VISIT',
          ),
          1 =>
          array (
            'name' => 'date_noplan_visit_c',
            'label' => 'LBL_DATE_NOPLAN_VISIT_C',
          ),
          2 => '',
        ),
        6 =>
        array (
          0 =>
          array (
            'name' => 'date_visit_c',
            'label' => 'LBL_DATE_VISIT',
          ),
          1 => '',
          2 => '',
        ),
        7 =>
        array (
          0 =>
          array (
            'name' => 'mail_service_c',
            'label' => 'LBL_MAIL_SERVICE',
          ),
          1 => '',
          2 => '',
        ),
        8 =>
        array (
          0 =>
          array (
            'name' => 'preparation_realty_c',
            'label' => 'LBL_PREPARATION_REALTY',
          ),
          1 => '',
          2 => '',
        ),
        9 =>
        array (
          0 =>
          array (
            'name' => 'loss_c',
            'label' => 'LBL_LOSS',
          ),
          1 => '',
          2 => '',
        ),
        10 =>
        array (
          0 =>
          array (
            'name' => 'help_client_c',
            'label' => 'LBL_HELP_CLIENT',
          ),
          1 => '',
          2 => '',
        ),
        11 =>
        array (
          0 =>
          array (
            'name' => 'transfer_c',
            'label' => 'LBL_TRANSFER',
          ),
          1 =>
          array (
            'name' => 'transfer_date_c',
            'label' => 'LBL_TRANSFER_DATE',
          ),
          2 => '',
        ),
        12 =>
        array (
          0 =>
          array (
            'name' => 'message_client_c',
            'studio' => 'visible',
            'label' => 'LBL_MESSAGE_CLIENT_C ',
          ),
          1 => '',
          2 => '',
        ),
        13 =>
        array (
          0 =>
          array (
            'name' => 'another_c',
            'studio' => 'visible',
            'label' => 'LBL_ANOTHER',
          ),
          1 => '',
          2 => '',
        ),
        14 =>
        array (
          0 => 'description',
          1 => '',
          2 => '',
        ),
      ),
      'lbl_editview_panel5' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'number_of_people_c',
            'studio' => 'visible',
            'label' => 'LBL_NUMBER_OF_PEOPLE',
          ),
          1 => '',
          2 => array(
            'name' => 'province_to_live_c',
            'studio' => 'visible',
            'label' => 'LBL_PROVINCE_TO_LIVE',
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'total_cost_c',
            'label' => 'LBL_TOTAL_COST',
          ),
          1 => '',
          2 =>'',
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'prepayment_date_c',
            'label' => 'LBL_PREPAYMENT_DATE',
          ),
          1 =>
          array (
            'name' => 'prepayment_size_c',
            'label' => 'LBL_PREPAYMENT_SIZE',
          ),
          2 =>'',
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'charge_summ_date_c',
            'label' => 'LBL_CHARGE_SUMM_DATE',
          ),
          1 =>
          array (
            'name' => 'charge_c',
            'label' => 'LBL_CHARGE',
          ),
          2 =>'',
        ),
        4 =>
        array (
          0 =>
          array (
            'name' => 'payment_date_c',
            'label' => 'LBL_PAYMENT_DATE',
          ),
          1 =>
          array (
            'name' => 'payment_size_c',
            'label' => 'LBL_PAYMENT_SIZE',
          ),
          2 =>'',
        ),
        5 =>
        array (
          0 =>
          array (
            'name' => 'documents_date_c',
            'label' => 'LBL_DOCUMENTS_DATE',
          ),
          1 =>
          array (
            'name' => 'resolution_date_c',
            'label' => 'LBL_RESOLUTION_DATE',
          ),
          2 =>'',
        ),
        6 =>
        array (
          0 =>
          array (
            'name' => 'dni_begin_date_c',
            'label' => 'LBL_DNI_BEGIN_DATE',
          ),
          1 =>
          array (
            'name' => 'dni_end_date_c',
            'label' => 'LBL_DNI_END_DATE',
          ),
          2 => array(
            'name' => 'visa_d_obtaining_date_c',
            'studio' => 'visible',
            'label' => 'LBL_VISA_D_OBTAINING_DATE',
          ),
        ),
      ),
     /* 'lbl_editview_panel8' =>
      array (
        0 =>

      ),   */
    ),
  ),
);
?>
