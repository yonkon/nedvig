<?php
function getProvince($k){
	$ar_province = file("custom/include/language/province.txt");
	foreach($ar_province as $v){
		$v=explode('|||', $v);
		if(trim($v[0]) == trim($k)){
            $result=$v[1];
			break;
		}
	}
	if(isset($result)){
	    return $result;
	}
	else{
	    return false;
	}
}

function getCoast($k){
	$ar_coast = file("custom/include/language/coast.txt");
	foreach($ar_coast as $v){
		$v=explode('|||', $v);
		if(trim($v[0]) == trim($k)){
            $result=$v[1];
			break;
		}
	}
	if(isset($result)){
	    return $result;
	}
	else{
	    //return '||'.$v[0].'-'.$k.'-'.$v[1].'||';
		return false;
	}
}
?>