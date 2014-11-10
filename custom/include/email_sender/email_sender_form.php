<div id="PopupScreenLocker" style="width:100%; height:100%; position:fixed; top:0px; left:0px; 
background-color:#000; filter:alpha(opacity=50); opacity:0.5; display:none; "></div>		
<div id="PopupWindow" style="width:800px; height:540px; position:fixed; top:50px; left:112px;
background-color:#FFF; display:none;  border:1px solid #000;">
	<div id="PopupHeader"    style="padding:5px;  border-bottom: 1px solid #000; height:15px;">
		<h1 style="float:left;">
			<?php echo $caption_html; ?>
		</h1>
		<a href="#" onclick="
		document.getElementById('PopupScreenLocker').style.display='none';
		document.getElementById('PopupWindow').style.display='none';" 
		title="Закрыть" style="float:right;">Закрыть</a>
	</div>
	<div id="PopupWindowLog" style="padding:5px; top=20px; height=520px;">
		<textarea id="Log" readonly wrap="hard" style="height:500px; width:100%;"> 
		</textarea>
	</div>
	<div id="PopupWindowBody" style="padding:5px; top=20px; height=520px;">
    <?php if(!empty($pre_search_form_html) ) {?>
    <div id="pre_search_form" style="height:125px;border:1px solid #000;" >
      <?php echo $pre_search_form_html; ?>
    </div>
    <?php }?>
    <div id="search_form" style="height:125px;border:1px solid #000;" >
			<?php echo $search_form_html; ?>
		</div>
		<div id="delimiter" style="height:5px;border:none;"></div>
		<div id="mygrid_container" style="height:345px;border:1px solid #000;" ></div>
		<div id="PopupFooter"    style="padding:5px;  border-bottom: 1px none; height:15px;">
		<form> 
			<input type="button" id="send_btn" style="float:left;" value="Отправить" onclick="SendFromModule()"/>
			<span id="Hint" style="width:400px; float:left; padding-left:5px">
				<?php echo $hint_html; ?>
			</span>

			<input type="button" id="last_btn" value="&gt;&gt;" style="float:right;" onclick="GotoPage(GetLastPage());"/>
			<input type="button" id="next_btn" value="&gt;" style="float:right;" onclick="GotoPage(GetCurrentPage()+1);"/>

			<span id="PageIndicator" style="float:right; width:90px; text-align: center" >
			</span>
			
			<input type="button" id="prev_btn" value="&lt;" style="float:right;" onclick="GotoPage(GetCurrentPage()-1);"/>
			<input type="button" id="first_btn" value="&lt;&lt;" style="float:right;" onclick="GotoPage(1);"/>
		</form>
		</div>
	</div>
</div>		