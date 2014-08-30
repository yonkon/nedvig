<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2011 SugarCRM Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

/*********************************************************************************

 * Description:  Defines the Account SugarBean Account entity with the necessary
 * methods and variables.
 ********************************************************************************/

require_once("include/SugarObjects/templates/company/Company.php");

// Account is used to store account information.
class Account extends Company {
	var $field_name_map = array();
	// Stored fields
	var $date_entered;
	var $date_modified;
	var $modified_user_id;
	var $assigned_user_id;
	var $annual_revenue;
	var $billing_address_street;
	var $billing_address_city;
	var $billing_address_state;
	var $billing_address_country;
	var $billing_address_postalcode;

    var $billing_address_street_2;
    var $billing_address_street_3;
    var $billing_address_street_4;

	var $description;
	var $email1;
	var $email2;
	var $email_opt_out;
	var $invalid_email;
	var $employees;
	var $id;
	var $industry;
	var $name;
	var $ownership;
	var $parent_id;
	var $phone_alternate;
	var $phone_fax;
	var $phone_office;
	var $rating;
	var $shipping_address_street;
	var $shipping_address_city;
	var $shipping_address_state;
	var $shipping_address_country;
	var $shipping_address_postalcode;

    var $shipping_address_street_2;
    var $shipping_address_street_3;
    var $shipping_address_street_4;

	var $sic_code;
	var $ticker_symbol;
	var $account_type;
	var $website;
	var $custom_fields;

	var $created_by;
	var $created_by_name;
	var $modified_by_name;

	// These are for related fields
	var $opportunity_id;
	var $case_id;
	var $contact_id;
	var $task_id;
	var $note_id;
	var $meeting_id;
	var $call_id;
	var $email_id;
	var $member_id;
	var $parent_name;
	var $assigned_user_name;
	var $account_id = '';
	var $account_name = '';
	var $bug_id ='';
	var $module_dir = 'Accounts';
	var $emailAddress;


	var $table_name = "accounts";
	var $object_name = "Account";
	var $importable = true;
	var $new_schema = true;
	// This is used to retrieve related fields from form posts.
	var $additional_column_fields = Array('assigned_user_name', 'assigned_user_id', 'opportunity_id', 'bug_id', 'case_id', 'contact_id', 'task_id', 'note_id', 'meeting_id', 'call_id', 'email_id', 'parent_name', 'member_id'
	);
	var $relationship_fields = Array('opportunity_id'=>'opportunities', 'bug_id' => 'bugs', 'case_id'=>'cases',
									'contact_id'=>'contacts', 'task_id'=>'tasks', 'note_id'=>'notes',
									'meeting_id'=>'meetings', 'call_id'=>'calls', 'email_id'=>'emails','member_id'=>'members',
									'project_id'=>'project',
									);

    //Meta-Data Framework fields
    var $push_billing;
    var $push_shipping;

	function Account() {
        parent::Company();

        $this->setupCustomFields('Accounts');

		foreach ($this->field_defs as $field) {
			$this->field_name_map[$field['name']] = $field;
		}


        //Combine the email logic original here with bug #26450.
		if( (!empty($_REQUEST['parent_id']) && !empty($_REQUEST['parent_type']) && $_REQUEST['parent_type'] == 'Emails'
        	&& !empty($_REQUEST['return_module']) && $_REQUEST['return_module'] == 'Emails' )
        	||
        	(!empty($_REQUEST['parent_type']) && $_REQUEST['parent_type'] != 'Accounts' &&
        	!empty($_REQUEST['return_module']) && $_REQUEST['return_module'] != 'Accounts') ){
			$_REQUEST['parent_name'] = '';
			$_REQUEST['parent_id'] = '';
		}
	}

	function get_summary_text()
	{
		return $this->name;
	}

	function get_contacts() {
		return $this->get_linked_beans('contacts','Contact');
	}



	function clear_account_case_relationship($account_id='', $case_id='')
	{
		if (empty($case_id)) $where = '';
		else $where = " and id = '$case_id'";
		$query = "UPDATE cases SET account_name = '', account_id = '' WHERE account_id = '$account_id' AND deleted = 0 " . $where;
		$this->db->query($query,true,"Error clearing account to case relationship: ");
	}

	/**
	* This method is used to provide backward compatibility with old data that was prefixed with http://
	* We now automatically prefix http://
	* @deprecated.
 	*/
	function remove_redundant_http()
	{	/*
		if(preg_match("@http://@", $this->website))
		{
			$this->website = substr($this->website, 7);
		}
		*/
	}

	function fill_in_additional_list_fields()
	{
		parent::fill_in_additional_list_fields();
	// Fill in the assigned_user_name
	//	$this->assigned_user_name = get_assigned_user_name($this->assigned_user_id);

	}

	function fill_in_additional_detail_fields()
	{
        parent::fill_in_additional_detail_fields();

        //rrs bug: 28184 - instead of removing this code altogether just adding this check to ensure that if the parent_name
        //is empty then go ahead and fill it.
        if(empty($this->parent_name)){
			$query = "SELECT a1.name from accounts a1, accounts a2 where a1.id = a2.parent_id and a2.id = '$this->id' and a1.deleted=0";
			$result = $this->db->query($query,true," Error filling in additional detail fields: ");

			// Get the id and the name.
			$row = $this->db->fetchByAssoc($result);

			if($row != null)
			{
				$this->parent_name = $row['name'];
			}
			else
			{
				$this->parent_name = '';
			}
        }
	}

	function get_list_view_data(){
		global $system_config,$current_user;
		$temp_array = $this->get_list_view_array();
		$temp_array["ENCODED_NAME"]=$this->name;
//		$temp_array["ENCODED_NAME"]=htmlspecialchars($this->name, ENT_QUOTES);
		if(!empty($this->billing_address_state))
		{
			$temp_array["CITY"] = $this->billing_address_city . ', '. $this->billing_address_state;
		}
		else
		{
			$temp_array["CITY"] = $this->billing_address_city;
		}
		$temp_array["BILLING_ADDRESS_STREET"]  = preg_replace("/[\r]/",'',$this->billing_address_street);
		$temp_array["SHIPPING_ADDRESS_STREET"] = preg_replace("/[\r]/",'',$this->shipping_address_street);
		$temp_array["BILLING_ADDRESS_STREET"]  = preg_replace("/[\n]/",'\n',$temp_array["BILLING_ADDRESS_STREET"] );
		$temp_array["SHIPPING_ADDRESS_STREET"] = preg_replace("/[\n]/",'\n',$temp_array["SHIPPING_ADDRESS_STREET"] );
    	if(isset($system_config->settings['system_skypeout_on']) && $system_config->settings['system_skypeout_on'] == 1){
    	if(!empty($temp_array['PHONE_OFFICE']) && skype_formatted($temp_array['PHONE_OFFICE'])){
    		$temp_array['PHONE_OFFICE'] = '<a href="callto://' . $temp_array['PHONE_OFFICE']. '">'.$temp_array['PHONE_OFFICE']. '</a>' ;
    	}}
    	$temp_array["EMAIL1"] = $this->emailAddress->getPrimaryAddress($this);
		$this->email1 = $temp_array['EMAIL1'];
		$temp_array["EMAIL1_LINK"] = $current_user->getEmailLink('email1', $this, '', '', 'ListView');
		return $temp_array;
	}
	/**
		builds a generic search based on the query string using or
		do not include any $this-> because this is called on without having the class instantiated
	*/
	function build_generic_where_clause ($the_query_string) {
	$where_clauses = Array();
	$the_query_string = $this->db->quote($the_query_string);
	array_push($where_clauses, "accounts.name like '$the_query_string%'");
	if (is_numeric($the_query_string)) {
		array_push($where_clauses, "accounts.phone_alternate like '%$the_query_string%'");
		array_push($where_clauses, "accounts.phone_fax like '%$the_query_string%'");
		array_push($where_clauses, "accounts.phone_office like '%$the_query_string%'");
	}

	$the_where = "";
	foreach($where_clauses as $clause)
	{
		if(!empty($the_where)) $the_where .= " or ";
		$the_where .= $clause;
	}

	return $the_where;
}


        function create_export_query(&$order_by, &$where, $relate_link_join='')
        {
        	$custom_join = $this->custom_fields->getJOIN(true, true,$where);
			if($custom_join)
				$custom_join['join'] .= $relate_link_join;
                         $query = "SELECT
                                accounts.*,email_addresses.email_address email1,
                                accounts.name as account_name,
                                users.user_name as assigned_user_name ";
						if($custom_join){
   							$query .= $custom_join['select'];
 						}
						 $query .= " FROM accounts ";
                         $query .= "LEFT JOIN users
	                                ON accounts.assigned_user_id=users.id ";

						//join email address table too.
						$query .=  ' LEFT JOIN  email_addr_bean_rel on accounts.id = email_addr_bean_rel.bean_id and email_addr_bean_rel.bean_module=\'Accounts\' and email_addr_bean_rel.deleted=0 and email_addr_bean_rel.primary_address=1 ';
						$query .=  ' LEFT JOIN email_addresses on email_addresses.id = email_addr_bean_rel.email_address_id ' ;

						if($custom_join){
  							$query .= $custom_join['join'];
						}

		        $where_auto = "( accounts.deleted IS NULL OR accounts.deleted=0 )";

                if($where != "")
                        $query .= "where ($where) AND ".$where_auto;
                else
                        $query .= "where ".$where_auto;

                if(!empty($order_by))
                        $query .=  " ORDER BY ". $this->process_order_by($order_by, null);

                return $query;
        }

	function set_notification_body($xtpl, $account)
	{
		$xtpl->assign("ACCOUNT_NAME", $account->name);
		$xtpl->assign("ACCOUNT_TYPE", $account->account_type);
		$xtpl->assign("ACCOUNT_DESCRIPTION", $account->description);

		return $xtpl;
	}

	function bean_implements($interface){
		switch($interface){
			case 'ACL':return true;
		}
		return false;
	}
	function get_unlinked_email_query($type=array()) {

		return get_unlinked_email_query($type, $this);
	}
//--for costaiberia project aggents of accounts
	function get_account_agents_list($mode=0){
		 $agents=array();
		 $agents['mode'] = $mode;  // 0 detailview, 1 editview
		 $agents['numagents'] = 0;
		 if ($this->id!=''){
		 	$query = "SELECT * FROM `accounts_agents` WHERE `id_a`='".$this->id."' and deleted=0";
			$resource =$this->db->query($query);
			$agents['numagents'] = $this->db->getRowCount($resource);
			if($agents['numagents']>0) {
				$agents['id'] = array();
				$agents['first_name'] = array();
				$agents['last_name'] = array();
				$agents['patronymic'] = array();
				$agents['birthday'] = array();
				$agents['title'] = array();
				$agents['office_address'] = array();
                                $agents['phone'] = array();
                                $agents['phone_mobile'] = array();
                                $agents['email'] = array();
                                $agents['skype'] = array();
				while($fromDB_getagents = $this->db->fetchByAssoc($resource)) {
				    $agents['id'][]= $fromDB_getagents['id'];
					$agents['first_name'][]= $fromDB_getagents['first_name'];
					$agents['last_name'][]= $fromDB_getagents['last_name'];
					$agents['patronymic'][]= $fromDB_getagents['patronymic'];
					$agents['birthday'][]= $fromDB_getagents['birthday'];
					$agents['title'][]= $fromDB_getagents['title'];
					$agents['office_address'][]= $fromDB_getagents['office_address'];
                                        $agents['phone'][]= $fromDB_getagents['phone'];
                                        $agents['phone_mobile'][]= $fromDB_getagents['phone_mobile'];
                                        $agents['email'][]= $fromDB_getagents['email'];
                                        $agents['skype'][]= $fromDB_getagents['skype'];
				}

			}

		 }
         return($agents);

	}
	function accounts_agents_to_db(){
		global $current_user;
		$count = $_POST['numBlocks'];
		for($i = 0; $i < $count; $i++) {
			$i2 = $i + 1;
			$id = ($_POST['agents_is_'.$i2] == '1')?create_guid():$this->db->quote($_POST['agents_k_id_'.$i2]);
			if($_POST['agents_is_'.$i2] == '1'||$_POST['agents_is_'.$i2] == '2') {
				$first_name = $this->db->quote(trim($_POST['agents_first_name_'.$i2]));
				$last_name = $this->db->quote(trim($_POST['agents_last_name_'.$i2]));
				$patronymic = $this->db->quote(trim($_POST['agents_patronymic_'.$i2]));
				$birthday = $this->db->quote(trim($_POST['agents_birthday_'.$i2]));
				$title = $this->db->quote(trim($_POST['agents_title_'.$i2]));
				$office_address = $this->db->quote(trim($_POST['agents_office_address_'.$i2]));
				$name = $this->db->quote(trim($_POST['agents_last_name_'.$i2]).' '.trim($_POST['agents_first_name_'.$i2])).' '.trim($_POST['agents_patronymic_'.$i2]);

				$query= 'REPLACE INTO `accounts_agents` (id,id_a,name,first_name,last_name,patronymic,birthday,title,office_address,phone,phone_mobile,email,skype,
						modified_user_id,date_modified'.(($_POST['agents_is_'.$i2] == '1')?',created_by,date_created':'').')
						values (\''.$id.'\',\''.$this->id.'\',\''.$name.'\',\''.$first_name.'\',\''.$last_name.'\',\''.$patronymic.'\',\''.$birthday.'\',\''.$title.'\',\''.$office_address.'\',
				 		\''.$this->db->quote(trim($_POST['agents_phone_'.$i2])).'\',
                                                \''.$this->db->quote(trim($_POST['agents_phone_mobile_'.$i2])).'\',
                                                \''.$this->db->quote(trim($_POST['agents_email_'.$i2])).'\',
                                                \''.$this->db->quote(trim($_POST['agents_skype_'.$i2])).'\',	
                                                \''.$current_user->id.'\',now()'.(($_POST['agents_is_'.$i2] == '1')?',\''.$current_user->id.'\',now()':'').')';
				$this->db->query($query);
			}
			elseif ($_POST['agents_is_'.$i2] == '3') {
				$query = "UPDATE `accounts_agents` SET deleted=1, modified_user_id='".$current_user->id."',date_modified=now() WHERE `id` ='".$id."'";
				$this->db->query($query);
			}
			else {
				continue;
			}
		}
	}
	function accounts_agents_delete(){
	  	global $current_user;
	  	$query = "UPDATE `accounts_agents` SET deleted=1, modified_user_id='".$current_user->id."',date_modified=now() WHERE `id_a` ='".$this->id."'";
		$this->db->query($query);

	}
	function relate_accounts_agents_delete($bean_id,$bean_dir){
		 	$query='DELETE FROM `accounts_agents_bean_rel`  WHERE bean_id=\''.$this->db->quote($bean_id).'\' AND bean_module=\''.$this->db->quote($bean_dir).'\' ';
            $this->db->query($query);
	}
	function relate_accounts_agents_save($bean_id,$bean_dir,$id_a,$id_aa){
            if($id_aa!=''){
            	$id=create_guid();
            	$query='INSERT INTO `accounts_agents_bean_rel`(id,id_aa,bean_id,bean_module,date_created,date_modified) VALUES(\''.$id.'\',\''.$id_aa.'\',\''.$bean_id.'\',\''.$bean_dir.'\', now(),now())';
            	$this->db->query($query);
            }

	}

	function relate_accounts_agents_load_list(){
		 global $mod_strings;
         $id_a = trim($_REQUEST['id_agent']);
         $custom_module = $this->db->quote(trim($_REQUEST['custom_module']));
         $acc_field = $this->db->quote(trim($_REQUEST['idfield_name']));
         $module_id = $this->db->quote(trim($_REQUEST['module_id']));
         $options = array();
         if($id_a==''){
          $options[]= array('id' => '','name'=> $mod_strings['LBL_AC_CHECKED'], 'selected' =>'');

         } else{

          $query='SELECT * from  `relationships` WHERE `lhs_module`="Accounts" AND `rhs_module`="'.$custom_module.'" AND `join_key_lhs`="'.$acc_field.'"';
          $result=$this->db->query($query);
           if($rel=$this->db->fetchByAssoc($result)){

            	$query='SELECT aa.id,aa.name, aabr.id as relate_id FROM `accounts_agents` aa LEFT JOIN `accounts_agents_bean_rel` aabr
            			ON (aabr.id_aa=aa.id  AND aabr.bean_id=\''.$module_id.'\' and aabr.bean_module=\''.$custom_module.'\'  and aabr.deleted=0)
            			WHERE aa.id_a=\''.$id_a.'\'  and aa.deleted = 0 ORDER BY aa.name ';
            	$result_agents=$this->db->query($query);
            	$is_relate=false;
            	if($this->db->getRowCount($result_agents)!=0){
            		$options[]=array('id' => '','name'=> $mod_strings['LBL_AG_CHECKED'], 'selected' =>'');
            		while ($res_agents=$this->db->fetchByAssoc($result_agents)){

                         if($res_agents['relate_id']!=''){
                         	$selected = 'selected';
                         	$is_relate = true;
                         }else{
                         	$selected = '';
                         }
            			 $options[]= array(
            			 	'id' => $res_agents['id'],
            			 	'name'=> $res_agents['name'],
            			 	'selected' => $selected,
                         );
            		}

            	} else $options[]= array('id' => '','name'=> $mod_strings['LBL_AG_ABSENT'], 'selected' =>'');
           }

         }
         return $options;

	}

	function relate_accounts_agents_load_detail(){
         global $mod_strings;
         $id_a = trim($_REQUEST['id_agent']);
         $custom_module = $this->db->quote(trim($_REQUEST['custom_module']));
         $acc_field = $this->db->quote(trim($_REQUEST['idfield_name']));
         $module_id = $this->db->quote(trim($_REQUEST['module_id']));
         $options = array();
         if($id_a==''){
          $options[]= array('id' => '','name'=> $mod_strings['LBL_AC_NOT_CHECKED'] );

         } else{

          $query='SELECT * from  `relationships` WHERE `lhs_module`="Accounts" AND `rhs_module`="'.$custom_module.'" AND `join_key_lhs`="'.$acc_field.'"';
          $result=$this->db->query($query);
           $options=array('id' => '','name' => '');
           if($rel=$this->db->fetchByAssoc($result)){

            	$query='SELECT aa.id,aa.name,aa.id_a, aabr.id as relate_id FROM `accounts_agents` aa LEFT JOIN `accounts_agents_bean_rel` aabr
            			ON (aabr.id_aa=aa.id  AND aabr.bean_id=\''.$module_id.'\' and aabr.bean_module=\''.$custom_module.'\'  and aabr.deleted=0)
            			WHERE aa.id_a=\''.$id_a.'\'  and aa.deleted = 0 ORDER BY aa.name ';
            	$result_agents=$this->db->query($query);
            	$is_relate=false;
            	if($this->db->getRowCount($result_agents)!=0){
            		$options=array('id' => '','name'=> $mod_strings['LBL_AG_NOT_CHECKED']);
            		while ($res_agents=$this->db->fetchByAssoc($result_agents)){
                         if($res_agents['relate_id']!=''){
                         	$selected = 'selected';
                         	$options= array(
            			 	'id' => $res_agents['id_a'],
            			 	'name'=> $res_agents['name'],
                             );
                            $is_relate = true;
                         }


            		}

            	} else $options = array('id' => '','name'=> $mod_strings['LBL_AG_ABSENT']);
           }

         }
         return $options;

	}

//--/for costaiberia project aggents of accounts

}