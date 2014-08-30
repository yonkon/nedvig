<?php
$module_name = 'cosib_queries';
$viewdefs [$module_name] =
array (
  'DetailView' =>
  array (
    'templateMeta' =>
    array (
      'form' =>
      array (
        'buttons' =>
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
        ),
      ),
      'maxColumns' => '2',
      'widths' =>
      array (
        0 =>
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 =>
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' =>
    array (
      'default' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'sphr_clientb_queries_name',
            'label' => 'LBL_SPHR_CLIENT_COSIB_QUERIES_FROM_SPHR_CLIENT_TITLE',
          ),
          1 => '',
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'type_of_query_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_OF_QUERY',
          ),
          1 =>
          array (
            'name' => 'status_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'status_desc_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS_DESC',
          ),
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        4 =>
        array (
          0 =>
          array (
            'name' => 'type_of_object_relate_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_OF_OBJECT_RELATE',
            'customCode' => '
           					{if $fields.type_of_query_c.value=="visa"}
            				 	{literal}<script type="text/javascript">
            				    jQuery(function($){
            				    	$("table#detailpanel_1 tbody>tr:eq(3)").css("display","none");
            				    });
            				  	</script>{/literal}
            				{elseif $fields.type_of_query_c.value=="postsale" || $fields.type_of_query_c.value=="selling" || $fields.type_of_query_c.value=="tolease"}
            						<a href="index.php?module=sphr_Object&action=DetailView&record={$fields.sphr_object_id_c.value}">{$fields.type_of_object_relate_c.value} </a>
            				{else} {$fields.type_of_object_c.options[$fields.type_of_object_c.value]}
            				{/if}',
          ),
          1 =>
          array (
            'customCode' => '
            				{if $fields.type_of_query_c.value=="bylease"}
            				{literal}
            				<script type="text/javascript">
						        function execSearchObject(record,sp) {

											ajaxStatus.showStatus(SUGAR.language.get("app_strings", "LBL_LOADING"));

											var callBackFunction = function(data) {

												alert(data.responseText);

												ajaxStatus.hideStatus();
												show_url="index.php?module=cosib_queries&action=SubPanelViewer&subpanel="+sp+"&record="+record+"&sugar_body_only=1&inline=1";
												showSubPanel(sp,show_url,true);
											}


											var cObj = YAHOO.util.Connect.asyncRequest("GET","index.php?module=cosib_queries&action=SearchObject&to_pdf=true&record="+record, {success: callBackFunction , failure: callBackFunction });
											return false;
									}
            				</script>
            				{/literal}
            				 jhhjj<input type="button" name="search_object_button" value="{$mod.LBL_SEARCH_OBJECT_BUTTON_TITLE}" onclick="return execSearchObject(\'{$fields.id.value}\',\'cosib_queries_sphr_object\')">
            				{/if}
           					{if $fields.type_of_query_c.value=="visa"}
	           					{literal}<script type="text/javascript">
	           					  jQuery(function($){$("div#LBL_DETAILVIEW_PANEL1").css("display","none"); $("div#LBL_DETAILVIEW_PANEL2").css("display","none");
	           					  });
	           					</script>{/literal}
            				{elseif $fields.type_of_query_c.value=="postsale"}
           						{literal}<script type="text/javascript">
	           					  jQuery(function($){$("div#LBL_DETAILVIEW_PANEL1").css("display","none");$("div#LBL_DETAILVIEW_PANEL3").css("display","none");
	           					  });
	           					</script>{/literal}
            				{else}
            					{literal}<script type="text/javascript">
	           					  jQuery(function($){$("div#LBL_DETAILVIEW_PANEL2").css("display","none");$("div#LBL_DETAILVIEW_PANEL3").css("display","none");
	           					  });
	           					</script>{/literal}
                            {/if}',
          ),
        ),
      ),
      'lbl_detailview_panel1' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'category_of_object_c',
            'studio' => 'visible',
            'label' => 'LBL_CATEGORY_OF_OBJECT',
          ),
          1 => '',
        ),
        1 =>
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
        ),
        2 =>
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
        ),
        3 =>
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
        ),
        4 =>
        array (
          0 =>
          array (
            'name' => 'quantity_of_bedroom_c',
            'studio' => 'visible',
            'label' => 'LBL_QUANTITY_OF_BEDROOM',
          ),
          1 => '',
        ),
        5 =>
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
        ),
        6 =>
        array (
          0 =>
          array (
            'name' => 'remoteness_from_sea_c',
            'studio' => 'visible',
            'label' => 'LBL_REMOTENESS_FROM_SEA',
          ),
          1 => '',
        ),
        7 =>
        array (
          0 =>
          array (
            'name' => 'remoteness_from_commercial_c',
            'label' => 'LBL_REMOTENESS_FROM_COMMERCIAL',
          ),
          1 => '',
        ),
        8 =>
        array (
          0 =>
          array (
            'name' => 'area_c',
            'studio' => 'visible',
            'label' => 'LBL_AREA',
          ),
          1 => '',
        ),
        9 =>
        array (
          0 =>
          array (
            'name' => 'view_of_sea_c',
            'label' => 'LBL_VIEW_OF_SEA',
          ),
          1 => '',
        ),
        10 =>
        array (
          0 =>
          array (
            'name' => 'view_on_mountains_c',
            'label' => 'LBL_VIEW_ON_MOUNTAINS',
          ),
          1 => '',
        ),
      ),
      'lbl_detailview_panel2' =>
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
        ),
      ),
      'lbl_detailview_panel3' =>
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
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'total_cost_c',
            'label' => 'LBL_TOTAL_COST',
          ),
          1 => '',
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
        ),
      ),
      'lbl_detailview_panel4' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'accounts_cob_queries_name',
            'label' => 'LBL_ACCOUNTS_COSIB_QUERIES_FROM_ACCOUNTS_TITLE',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
