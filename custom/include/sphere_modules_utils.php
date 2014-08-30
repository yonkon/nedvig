<?php
	function isAdmin()
	{
		global $current_user;
		return (is_admin($current_user->id));
	}
	function isUserInRole($role_name)
	{
		global $current_user;
		require_once("modules/ACLRoles/ACLRole.php");
		
		//true - чтобы толкько названия ролей, а не сам роли-объекты
		$user_roles = ACLRole::getUserRoles($current_user->id,true); 
		return (in_array($role_name, $user_roles));
	}
	function isCurrentUserOnlyOperator()
	{
		global $current_user;
		require_once("modules/ACLRoles/ACLRole.php");
		require_once("modules/ACLActions/ACLAction.php");

		$show_leads_only=false; //показывать только предв. контакты
		$show_all=false; //показывать всех клиентов

		//получим список ролей текущего пользователя
		//false - чтобы возвращать объект-роль, а не имя роли
		$user_roles = ACLRole::getUserRoles($current_user->id,false); 
		if (is_admin($current_user->id)) 
		{
			$show_all=true; 
		} else { 
			foreach ($user_roles as $role) //переберем все роли 
			{
				if (strcmp($role->name, 'Оператор call-центра')==0) {
					$show_leads_only = true;
				} else {
					$actions_role=array();
					$actions_role=ACLRole::getRoleActions($role->id); //получим список действий роли
					//echo "<pre>"; print_r ($actions_role);
					if (ACLAction::hasAccess(true,$actions_role['sphr_Client']['module']['list']['aclaccess'])) $show_all=true;
				}
			}
		}
		//echo "show_leads_only = ", $show_leads_only,"<br>show_all = ", $show_all; 	die();
		return (($show_leads_only) && ( ! $show_all));
	}
?>
