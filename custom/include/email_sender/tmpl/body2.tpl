<div style="font-size:14px;" width="100%">
Здравствуйте, {$first_name}.<br><br><br>
Ознакомьтесь с вариантом.<br><br>



<table width="100%" align="left">
    {foreach from=$ar_adr key=k item=v}
        {if in_array($k, array('Точный адрес объекта'))}
            <tr><td style="min-width: 200px"  width="27%"  align="left">{$k}</td><td  align="left">{$v}</td></tr>
        {/if}
    {/foreach}
    {foreach from=$ar_obj key=k item=v}
        {if in_array($k, array('Тип'))}
        <tr><td style="min-width: 200px"  width="25%"  align="left">{$k}</td><td  align="left">{$v}</td></tr>
        {/if}
    {/foreach}
{*{foreach from=$ar_lang key=k item=v}
    <tr><td style="min-width: 200px" width="25%"  align="left">{$k}</td><td  align="left">{$v}</td></tr> 
{/foreach}*}
    {foreach from=$ar_area key=k item=v}
        {if in_array($k, array('Общая площадь (кв. м.)'))}
            <tr><td style="min-width: 200px"  width="27%"  align="left">{$k}</td><td  align="left">{$v}</td></tr>
        {/if}
    {/foreach}

    {*{if !empty($ar_obj['Кол-во спален'])}*}
        {*<tr><td style="min-width: 200px"  width="25%"  align="left">Кол-во спален</td><td  align="left">{$ar_obj['Кол-во спален']}</td></tr>*}
    {*{/if}*}
    {*{if !empty($ar_obj['Кол-во ванных комнат'])}*}
        {*<tr><td style="min-width: 200px"  width="25%"  align="left">Кол-во ванных комнат</td><td  align="left">{$ar_obj['Кол-во ванных комнат']}</td></tr>*}
    {*{/if}*}

{foreach from=$ar_obj key=k item=v}
    {if in_array($k, array( 'Кол-во спален', 'Кол-во ванных комнат'))}
    <tr><td style="min-width: 200px"  width="25%"  align="left">{$k}</td><td  align="left">{$v}</td></tr>
    {/if}
{/foreach}

{foreach from=$ar_dist key=k item=v}
    <tr><td style="min-width: 200px"  width="27%"  align="left">{$k}</td><td  align="left">{$v}</td></tr> 
{/foreach}

{foreach from=$ar_dop key=k item=v}
    <tr><td style="min-width: 200px"  width="27%"  align="left">{$k}</td><td  align="left">{$v}</td></tr> 
{/foreach}
</table>
{if !empty($str1) || !empty($str2) || !empty($str3)}
    <br>
{/if}
{if !empty($str1)}
<p>{$str1}</p>
{/if}
{if !empty($str2)}
<p>{$str2}</p>
{/if}
{if !empty($str3)}
<p>{$str3}</p>
{/if}
{if empty($str1) && empty($str2) && empty($str3)}
    <p>&nbsp;</p>
{/if}
{foreach from=$ar_price key=k item=v}
    <p style="font-weight: bold">{$k}: <span style="font-size: 21px; color: rgb(20, 180, 20);"><b>{$v} Евро</b></span></p>
{/foreach}
<p>ID {$id_ob}</p>
<p> Буду рад ответить на все Ваши вопросы.<br>
    Прошу Вас прокомментировать присланный объект (что нравится, что нет), чтобы я понимал в каком направлении двигаться дальше.
    Буду признателен обратной связи.<br>
    Хорошего Вам дня!</p>
</div>
<br><br>
<hr style="width:40%;margin-left:0;height:1px;margin-bottom:0;">
<div style="float:left;">
<img src="{$site_url}/custom/themes/default/images/foto-email.jpg"
     style="vertical-align:top; width: 14em; margin-right: 3em; margin-top: 1em;"
        >
</div>

<div style="font-size:12px;float:left;">
<br><span>С наилучшими пожеланиями, Вячеслав</span>
<br><span>(382)69-846-975</span>
<br><span>DOO Trade, Черногория, Бар. ул. Риста Лекича 1/26</span>
<br><span>Skype: <a href="skype:tradegoria-v">tradegoria-v</a></span>
<br><span>
Веб-сайт <a href="http://tradegoria.com/" target="_blank" style="color:#2F94E9">http://tradegoria.com/</a></span>
</div>




