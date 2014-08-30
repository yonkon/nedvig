var RowsPerPage=10;
function GetCurrentPage()
{
	return CurrentPage;
}
function GetLastPage()
{
	var RowInd=0;
	for (var i=0; i<mygrid.getRowsNum(); i++)
	{ 
		id=mygrid.getRowId(i);
		if(mygrid.getRowAttribute(id,"filter_match") == 1) RowInd++;
	};
	return Math.ceil(RowInd/RowsPerPage);
}
function GotoPage(PageNumber)
{
	var RowInd=0;
	//mygrid.forEachRow(function(id)
	for (var i=0; i<mygrid.getRowsNum(); i++)
	{ 
		id=mygrid.getRowId(i);
		if(mygrid.getRowAttribute(id,"filter_match") == 0)
		{
			mygrid.setRowHidden(id,true);	
		} else {
			RowInd++;
			if ((RowInd > (PageNumber-1)*RowsPerPage) && (RowInd <= PageNumber*RowsPerPage))
				mygrid.setRowHidden(id,false);		
			else 
				mygrid.setRowHidden(id,true);		
		}
	};
	//}); 
	if ((PageNumber == 1) || (RowInd==0))
	{
		document.getElementById("prev_btn").disabled=true;
		document.getElementById("first_btn").disabled=true;
	} else {
		document.getElementById("prev_btn").disabled=false;
		document.getElementById("first_btn").disabled=false;
	}
	if ((PageNumber == Math.ceil(RowInd/RowsPerPage)) || (RowInd==0))
	{
		document.getElementById("next_btn").disabled=true;
		document.getElementById("last_btn").disabled=true;
	} else {
		document.getElementById("next_btn").disabled=false;
		document.getElementById("last_btn").disabled=false;
	}
		if (PageNumber*RowsPerPage > RowInd) 
			var Last = RowInd;
		else 
			var Last = PageNumber*RowsPerPage;
		if (RowInd==0)
			var First = "0";
		else 
			var First = "1";
		document.getElementById("PageIndicator").innerHTML="(" + First + " - " + Last.toString() + ") из " + RowInd.toString();
	 CurrentPage = PageNumber;
	/*
	with (document)
	{
		mygrid.filterBy(2,getElementById("title_advanced").value);
		mygrid.filterBy(9,getElementById("date_entered_advanced").value);
		mygrid.filterBy(3,getElementById("first_name_advanced").value);
	}
	 mygrid.makeFilter("title_advanced",2,true);
	 mygrid.makeFilter("date_entered_advanced",9,true);
	 mygrid.makeFilter("first_name_advanced",3,true);
	 */
	
}
function CheckInSelect(Value, SelectId)
{
	var Listbox=document.getElementById(SelectId);
	if (Listbox.selectedIndex == -1) return true; //если нет выбранных элементов
	for (var i=0; i < Listbox.options.length; i++)
	{
		if (Listbox.options[i].selected) 
		{	
			if (Value == Listbox.options[i].label) return true;
		}
	}
	return false;
}


function CheckInSelectBudjet(budjetsArray, Value, SelectId) {
    
    var Listbox=document.getElementById(SelectId);
    if (Listbox.selectedIndex == -1) return true; //если нет выбранных элементов
    
    var isCheck = false;
    
    for (var i=0; i < Listbox.options.length; i++)
    {
        if (Listbox.options[i].selected) {
            if (Listbox.options[i].value) {
                if (budjetsArray[Listbox.options[i].value][1]) {
                    if (Value >= budjetsArray[Listbox.options[i].value][0] && Value <= budjetsArray[Listbox.options[i].value][1]) isCheck = true;
                    else isCheck = false;
                }
                else {
                    if (Value >= budjetsArray[Listbox.options[i].value][0]) isCheck = true;
                    else isCheck = false;
                }
            }
            else isCheck = true; // пустому значения списка соответствуют все записи
        }
        
        if (isCheck) break; // если хотя бы по одному из пунктов нашли совпадение, то прерываем цикл и возвращаем положительный результат
    }
    
    return isCheck;
}


function addHandler(object, event, handler)
{
  if (typeof object.addEventListener != "undefined")
	object.addEventListener(event, handler, false);
  else if (typeof object.attachEvent != "undefined")
	object.attachEvent("on" + event, handler);
  else
	throw "Incompatible browser";
}

function StartSend(current_user_id)
{
	function createObject() 
	{
		var request_type;
		if(navigator.appName == "Microsoft Internet Explorer"){
			request_type = new ActiveXObject("Microsoft.XMLHTTP");
		} else {
			request_type = new XMLHttpRequest();
		}
		return request_type;
	}
	function UpdateStatus() 
	{
		if(http.readyState == 4) //ответ пришел?
		{
			if ( http.status == 200) { //ответ без ошибок пришел?
				document.getElementById("Log").value += http.responseText;
			} else {
				document.getElementById("Log").value += "Нет ответа от сервера.";
			}
			document.getElementById("Log").value += "\r\nДля продолжения, закройте это окно.";
		}
	}
	
	document.getElementById("PopupWindowBody").style.display="none"; 
	document.getElementById("PopupWindowLog").style.display="block";
	document.getElementById("Log").value = "Идет отправка...\r\n";

	var url = "index.php?entryPoint=SendPDF";
	var http = createObject();
	http.open("post", url ,true);	
	http.onreadystatechange =  UpdateStatus;
	http.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
	http.send("clients="+SelectedClients.toString()+"&objects="+SelectedObjects.toString()+"&current_user_id="+current_user_id.toString());
}