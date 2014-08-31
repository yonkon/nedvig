<?PHP
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2010 SugarCRM Inc.
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
/**
 * THIS CLASS IS FOR DEVELOPERS TO MAKE CUSTOMIZATIONS IN
 */
require_once('modules/sphr_Client/sphr_Client_sugar.php');
class sphr_Client extends sphr_Client_sugar {

	function sphr_Client(){
		parent::sphr_Client_sugar();
		$this->emailAddress = new SugarEmailAddress();
	}
	function retrieve($id = -1, $encode=true) {
        $ret_val = parent::retrieve($id, $encode);
        $this->emailAddress->handleLegacyRetrieve($this);
        return $ret_val;
    }

    function save($check_notify=false) {
        $this->emailAddress->handleLegacySave($this, $this->module_dir);
        $email1_ori = $this->email1;
        $email2_ori = $this->email2;
        $this->in_workflow = false;
        parent::save($check_notify);
        $override_email = array();
        if($this->in_workflow) {// workflow will edit this $this->email1 and $this->email2
            if($email1_ori != $this->email1) {
                $override_email['emailAddress0'] = $this->email1;
            }
            if($email2_ori != $this->email2) {
                $override_email['emailAddress1'] = $this->email2;
            }
        }
        $this->emailAddress->save($this->id, $this->module_dir, $override_email,'','','','',$this->in_workflow);
        return $this->id;
    }

    function get_list_view_data() {
        global $system_config;
        global $current_user;
        $temp_array = $this->get_list_view_array();        
        $temp_array['NAME']= $this->first_name;
        if($this->last_name!= '' && $this->status != 2){ //Добавляем фамилию, если клиент не в статусе "Соискатель"
           if($temp_array['NAME']!= '') $temp_array['NAME'].= ' ';
           $temp_array['NAME'].= $this->last_name;
        }

        $temp_array['EMAIL1'] = $this->emailAddress->getPrimaryAddress($this);
        $temp_array['EMAIL1_LINK'] = $current_user->getEmailLink('email1', $this, '', '', 'ListView');
        
        //#3789
        $temp_array['ACTIVITIES'] = $this->getTasks($temp_array['ID']) === true ? translate('LBL_ACTIVITIES_YES','sphr_Client') : translate('LBL_ACTIVITIES_NO','sphr_Client');
        //---
        if ($this->assigned_user_id != $current_user->id) {
            $personal_data = array('EMAIL', 'EMAIL1', 'EMAIL1_LINK', 'PHONE', 'PHONE_HOME', 'PHONE_MOBILE', 'PHONE_WORK','PHONE_OTHER', 'PHONE_FAX', 'EMAIL2');
            foreach ($personal_data as $excluded_field) {
                $temp_array[$excluded_field] = '';
            }

        }
        return $temp_array;
    }

    //#3789
    function getTasks($parent_id = '')
    {
        if (empty($parent_id))
            return false;

        $tracks = array(
            array('table'=>'tasks', 'status'=>'Completed'),
            array('table'=>'meetings', 'status'=>'Planned'),
            array('table'=>'calls', 'status'=>'Planned'),
        );

        global $db;
        foreach ($tracks as $key => $value)
        {
            $sql_status = "= '{$value['status']}'";
            if ($value['table'] == 'tasks')
                $sql_status = "<> '{$value['status']}'";

            $sql = "
                SELECT count(id) as cnt
                FROM `".$value['table']."`
                WHERE `parent_id` = '".$parent_id."'
                AND `status` {$sql_status}
                ";

            $result = $db->query($sql);
            $row = $db->fetchByAssoc($result);

            if ($row['cnt'] > 0)
                return true;
        }

        return false;
    } 
    //---
}
?>