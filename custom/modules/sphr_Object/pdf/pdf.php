<?php
	//echo "generation start\n";

	/* //очистка кэша шаблонов
	require_once('modules/Administration/QuickRepairAndRebuild.php');
	$clear_cache=new RepairAndClear();
	$clear_cache->module_list=array("sphr_Object");
	$clear_cache->clearTpls();
	*/

	require_once('include/Sugarpdf/Sugarpdf.php');
	require_once('include/tcpdf/tcpdf.php');


    
	global $db,$current_language,$app_strings,$app_list_strings,$sugar_config ;
	$mod_strings = return_module_language($current_language, 'sphr_Object');
	/*$object_pdf = new Sugarpdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);*//*added by me*/
	$object_pdf = new Sugarpdf;
	/* //аналог
	require_once('include/Sugarpdf/sugarpdf/sugarpdf.smarty.php');
	$object_pdf = new SugarpdfSmarty;
	$object_pdf -> _initSmartyInstance();
	*/
	
	//$object_pdf->SetColor(66, 160, 255);/*added by me*/
	
	$object_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, false, PDF_HEADER_STRING);/*PDF_HEADER_TITLE added by me*/
	$object_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));/*added by me*/
    $object_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));/*added by me*/
 	$object_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);/*added by me*/
    $object_pdf->setHeaderMargin(PDF_MARGIN_HEADER);/*added by me*/
    $object_pdf->setFooterMargin(PDF_MARGIN_FOOTER);/*added by me*/
	$object_pdf->fileName = $PDF_name;
	$object_pdf->SetFont("times",'',12);
	$object_pdf->SetLineStyle(array('width' => 0, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(245, 201, 65)));
	$object_pdf->SetAutoPageBreak(TRUE,PDF_MARGIN_HEADER+PDF_MARGIN_FOOTER); //set auto page breaks
	$object_pdf->setImageScale(PDF_IMAGE_SCALE_RATIO); //2 чтобы изображение вставлялось в натуральную величину
	/*$object_pdf->setImageScale(PDF_IMAGE_SCALE_RATIO / 2); *///чтобы изображение вставлялось в натуральную величину

	require_once('include/DetailView/DetailView2.php');

     switch($current_language){
		case 'ru_ru': $lang = 'rus';
		break;
		case 'en_us': $lang = 'eng';
		break;
		case 'es_es': $lang = 'sp';
		break;
		default :  $lang = 'rus';
		break;
	}
	$name = 'name_'.$lang.'_c';
	$desc = ($lang!='rus')?'additional_description_'.$lang.'_c':'additional_description_c';
    require_once('include/Sugar_Smarty.php');
    $tmpl_dir = 'custom/modules/sphr_Object/pdf/tmpl/';
	$body='';
	$header_tmpl = 'header.html';
	$body_tmpl = 'body.html';
	$footer_tmpl = 'footer.html';
    $sugarSmarty = new Sugar_Smarty();
	$sugarSmarty->assign("MOD",$mod_strings);
	$sugarSmarty->assign("APP",$app_list_strings);
	$sugarSmarty->assign("SURL",$sugar_config['site_url']);

     $sugarSmarty->assign("TITLE",$this->bean->$name);
     $sugarSmarty->assign("DESCRIPTION",$this->bean->$desc);
     $sugarSmarty->assign("fields", $this->bean);
     $photos=array();$ip=0;
     $query_getPhotos = "SELECT * FROM `sphr_object_photo_c` WHERE `sphr_object_id`='".$this->bean->id."'  ORDER BY `main` ASC";
	$resource_getPhotos = $db->query($query_getPhotos);
	while($fromDB_getPhotos = $db->fetchByAssoc($resource_getPhotos)) {
		$photos[$ip] = $fromDB_getPhotos['id'];
		$ip++;
	}
	$sugarSmarty->assign("photos", $photos);
	$sugarSmarty->assign("photos_count",$ip);

    $HTML_content= $sugarSmarty->fetch($tmpl_dir.$body_tmpl);


	/*params
		$showTitle boolean value indicating whether or not to show a title on the resulting page
		$ajaxSave boolean value indicating whether or not the operation is an Ajax save request
	*/

	$HTML_content  = preg_replace("[\r|\n]", "", $HTML_content); //убираем символы перевода строки
	/*$HTML_content  = preg_replace("[(<a.*?>)|(</a>)]", "", $HTML_content); //убираем ссылки  */


	$PDF_dir = $sugar_config['upload_dir']."pdf/";
	if (!is_dir($PDF_dir))	mkdir($PDF_dir);
	$PDF_name_prefix = "offer_";
	$query_pdf ="SELECT pdf_id FROM sphr_object_pdf_c WHERE sphr_object_id = '".$this->bean->id."'";
	$result_pdf = $this->bean->db->query($query_pdf);
	if (($row = $this->bean->db->fetchByAssoc($result_pdf)) != null ) //если pdf_id для текущего объекта есть
	{
		$PDF_name = $PDF_name_prefix . $row['pdf_id'] . ".pdf";
	} else { //инначе добавим  pdf_id для текущего объекта
		$query_pdf_insert = "INSERT INTO sphr_object_pdf_c VALUES (NULL, '".$this->bean->id."')";
		$result_pdf_insert = $db->query($query_pdf_insert, true);
		$row = $this->bean->db->fetchByAssoc($db->query("SELECT LAST_INSERT_ID() as 'pdf_id'", true)); //пробуем получить созданный pdf_id с помощью LAST_INSERT_ID()
		if (($row == null) || ($row['pdf_id'] == 0)) //если не удалось получить - используем станадртный запрс
		{
			$query_pdf ="SELECT pdf_id FROM sphr_object_pdf_c WHERE sphr_object_id = '".$this->bean->id."'";
			$result_pdf = $this->bean->db->query($query_pdf);
			$row = $this->bean->db->fetchByAssoc($result_pdf);
		}
		$PDF_name = $PDF_name_prefix . $row['pdf_id'] . ".pdf";
	}
	//unlink($PDF_name); //необязательно

	error_reporting(E_ERROR ); //чтобы вывод предупреждений не мешал выводу pdf
	ob_clean();	//очитска вывода

	$object_pdf->AddPage();
	$object_pdf->Ln(2);/*added by me*/
	// output the HTML content
	$object_pdf->writeHTML($HTML_content, true, false, true, false, '');/*addec by me*/
	//$object_pdf->writeHTMLTable($HTML_content, true, false, true, false, '');/*by me*/
	//$object_pdf->writeHTML($HTML_content);
    // echo     $HTML_content; echo  strlen($HTML_content) ;
	//$GLOBALS['app_list_strings']['object_status_list'];
	//$GLOBALS['mod_strings']; - метки
	//$this->bean->getFieldValue('');
	//$this->bean->field_name_map[field]['vname']; - метка
		
	//$pdf->lastPage();/*added by me*/
	$object_pdf->lastPage();

	// I: send the file inline to the browser (default).
	// D: send to the browser and force a file download with the name given by name.
	// F: save to a local server file with the name given by name.
	// S: return the document as a string (name is ignored).
	$object_pdf->Output($PDF_dir.$PDF_name,"F");
	if (file_exists($PDF_dir.$PDF_name)){
		$echo =  'Файл успешно создан';
		$pdf_ok = 1;
	}  else{
		$echo = 'Произошла ошибка при создании файла';
		$pdf_ok = 0;
	}
?>