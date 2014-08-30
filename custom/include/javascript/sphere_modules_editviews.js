function ElementValueLength(name) //функция получения длины значения эленемета без учета побелов в нем
{
	return document.getElementById(name).value.replace(RegExp("\\s+","g"),"").length;
}

function GetValidateIndex(name) //функция получения индекса элемента в массиве validate
{
	for (var i = 0; i < validate["EditView"].length; i++)
	{
		if (validate["EditView"][i][nameIndex] == name) return i;
	}
	return -1;
}

function checkEmail() //функция проверки e-mail 
{
	var i=GetValidateIndex("email");
	if (i==-1) return;
	if (isValidEmail(document.getElementById("email").value)) //используется функция из sugar_3.js
	{
		validate["EditView"][i][typeIndex] = "varchar";
		validate["EditView"][i][msgIndex]=MsgStr["LBL_EMAIL_ADDRESS"];
	} else {
		validate["EditView"][i][typeIndex] = "error";
		validate["EditView"][i][msgIndex]=MsgStr["ERR_EMAIL"];
	}
}

function checkINNandKPP() //функция проверки ИНН/КПП
{
	var i=GetValidateIndex("inn_and_kpp");
	if (i!=-1)
	{
		var INNandKPP = document.getElementById("inn_and_kpp").value;
		if ((INNandKPP=="") || (RegExp("\\.*\\/\\.*","").test(INNandKPP))) //проверка на наличие "/"
		{
			validate["EditView"][i][typeIndex] = "varchar";
			validate["EditView"][i][msgIndex]=MsgStr["LBL_INN_AND_KPP"];
		} else {
			validate["EditView"][i][typeIndex] = "error";
			validate["EditView"][i][msgIndex]=MsgStr["ERR_SLASH_NEED"];

		}
	}
}

function checkWebSite() //функция проверки адреса сайта
{
	var i=GetValidateIndex("website");
	if (i!=-1)
	{
		var WebSite = document.getElementById("website").value;
		//if (RegExp("[^a-z0-9\\:\\/\\.]+","i").test(WebSite);
		if ((WebSite=="") || (WebSite=="http://") || (RegExp("^((https?|ftp)\\:\\/\\/)?(([a-z0-9-]+)\\.)+([a-z]{2,4})\\/?$","i").test(WebSite))) //проверка адреса сайта по шаблону
		{
			validate["EditView"][i][typeIndex] = "varchar";
			validate["EditView"][i][msgIndex]=MsgStr["LBL_WEBSITE"];
		} else {
			validate["EditView"][i][typeIndex] = "error";
			validate["EditView"][i][msgIndex]=MsgStr["ERR_WEBSITE"];
			
		}
	}
}

function checkPayment() //функция установки обязательности цены за метр и цены за объект (поля - от/до)
{
	var Err = false;
	if ((ElementValueLength("payment_meter") == 0) && (ElementValueLength("payment_object") == 0)) Err = true; 	
	for (var i = 0; i < validate["EditView"].length; i++)
	{
		if (validate["EditView"][i][nameIndex] == "payment_meter" || validate["EditView"][i][nameIndex] == "payment_object" )
		{
			if (Err) //если ни одна цена не заполнена
			{
				validate["EditView"][i][typeIndex] = "error";
				validate["EditView"][i][msgIndex] = MsgStr["ERR_PAYMENT_NEED"];
			} else {
				validate["EditView"][i][typeIndex] = "int";
				switch(validate["EditView"][i][nameIndex])
				{
					case "payment_meter": validate["EditView"][i][msgIndex] =  MsgStr["LBL_PAYMENT_METER"]; break;
					case "payment_object": validate["EditView"][i][msgIndex] =  MsgStr["LBL_PAYMENT_OBJECT"]; break;
				}
			};
		}
	}	
}

function checkPayment2() //функция установки обязательности цены за метр и цены за объект (поля от и до раздельно)
{
	var Err = false;
	if ((ElementValueLength("payment_meter_from_c") == 0) && (ElementValueLength("payment_meter_to_c") == 0) &&
		(ElementValueLength("payment_object_from_c") == 0) && (ElementValueLength("payment_object_to_c") == 0)) Err = true; 	
	for (var i = 0; i < validate["EditView"].length; i++)
	{
		if ((validate["EditView"][i][nameIndex] == "payment_meter_from_c") || (validate["EditView"][i][nameIndex] == "payment_meter_to_c" ) ||
			(validate["EditView"][i][nameIndex] == "payment_object_from_c") || (validate["EditView"][i][nameIndex] == "payment_object_to_c" ))
		{
			if (Err) //если ни одна цена не заполнена
			{
				validate["EditView"][i][typeIndex] = "error";
				validate["EditView"][i][msgIndex] = MsgStr["ERR_PAYMENT_NEED"];
			} else {
				validate["EditView"][i][typeIndex] = "int";
				switch(validate["EditView"][i][nameIndex])
				{
					case "payment_meter_from_c": validate["EditView"][i][msgIndex] =  MsgStr["LBL_PAYMENT_METER_FROM"]; break;
					case "payment_meter_to_c": validate["EditView"][i][msgIndex] =  MsgStr["LBL_PAYMENT_METER_TO"]; break;
					case "payment_object_from_c": validate["EditView"][i][msgIndex] =  MsgStr["LBL_PAYMENT_OBJECT_FROM"]; break;
					case "payment_object_to_c": validate["EditView"][i][msgIndex] =  MsgStr["LBL_PAYMENT_OBJECT_TO"]; break;
				}
			};
		}
	}	
}