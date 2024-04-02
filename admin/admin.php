<!--?php

// Показывать всю информацию, по умолчанию INFO_ALL
phpinfo();
?-->
<?php
session_start();
include "../database/database.php";
//$mysql=mysqli_connect($mysql_host,$database_user,$database_pass) or die("<b>mysqli Error:</b> Невозможно подключиться к БД. Проверьте кооректность используемых данных.");
//mysqli_select_db($mysql,$mysql_name)or die("<b>mysqli Error:</b> Невозможно выбрать указанную базу данных. Проверьте правильность имени базы.");
foreach($_GET AS $key => $value) {
${$key} = $value;
} 
foreach($_POST AS $key => $value) {
${$key} = $value;
} 
global $action;
if($action== "logout"){
session_destroy();
header("Location: admin.php");
}
if(!isset($_SESSION['ein'])){
    global $admin_id;
if($admin_id!="" && $admin_pass!=""){
    $pass=md5(md5($admin_pass));
//mysqli_query($mysql,"SET NAMES utf8");

$search=mysqli_query($mysql,"SELECT * FROM smp_ad WHERE admin_id='$admin_id' AND admin_pass='$pass'");
if(mysqli_num_rows($search)==1){
$_SESSION['ein']=base64_encode($admin_id);
header("location: admin.php?action=dologin");
}
}
}
if(isset($_SESSION['ein'])){
$bchome="
<table width=100% cellspacing=0 border=0>
    <TD width=5%><a href=\"?action=dologin\"><img src=\"images/main_s.png\" border=\"0\"></a></Td>
    <TD width=50%><a href=\"?action=dologin\"><font size=3><B>Главное меню</b></font></a></TD> 
    <TD width=10%>&nbsp;</Td>
    <TD width=5%><a href=\"?action=logout\"><img src=\"images/exit_s.png\" border=\"0\"></a></Td>
    <TD width=30%><a href=\"?action=logout\"><font size=3><B>Выйти</B></font></a></TD>
</table>";
$text="<BR>";
$menu = "
<table width=100% align=\"center\" cellspacing=\"2\" cellpadding=\"2\" border=0 style=\"padding:100px;\">
<TR>
    <td align=center><a href=\"?action=add_quiz\"><img src=\"images/new_ad.png\" border=\"0\"></a></td>
    <td width=25%><a href=\"?action=add_quiz\"><font size=3><B>Создать опрос</B></font></a></td>
    <td width=15% rowspan=3><img style=\"align:center;width:100%;\" src=\"../image/logo_l_y.png\" alt=\"альтернативный текст\" /></td>
    <td width=25% align=right><a href=\"?action=manage_quiz\"><font size=3><B>Редактировать опросы</B></font></a><BR><font size=2>Редактирование, удаление опросов.</font></td>
    <td width=5% align=center><a href=\"?action=manage_quiz\"><img src=\"images/manage.png\" border=\"0\"></a></td>

</TR>

<TR>
    <td width=5% align=center><a href=\"?action=poll_template\"><img src=\"images/template.gif\" border=\"0\"></a></td>
    <td width=25%><a href=\"?action=poll_template\"><font size=3><B>Изменить внешний вид опроса</B></font></a><BR></td>
    <td width=25% align=right><a href=\"?action=change\"><font size=3><B>Данные администратора</B></font></a><BR><font size=2>Изменить логин и пароль<BR /> для входа в админку.</font></td>
    <td width=5% align=center><a href=\"?action=change\"><img src=\"images/admin_info.png\" border=\"0\"></a></td>
</TR>

<TR>
    <td width=5% align=center><a href=\"?action=logout\"><img src=\"images/logout.png\" border=\"0\"></a></td>
    <td width=25%><a href=\"?action=logout\"><font size=3><B>Выйти</B></font></a></td>
    <td width=25% align=right><a href=\"?action=faq\"><font size=3><b>Ответить на вопросы пользователей</b></font></a><br><font size=2>Главная форма раздела &#34Форум&#34.</font></td>
    <td width=5% align=center><a href=\"?action=faq\"><img src=\"images/faq.png\" border=\"0\"></a></td>
</TR>
</table>";
}
?>										
<HTML><HEAD>
<meta charset = "utf-8" />
<TITLE>СНТ "Сосна" - Панель администратора</TITLE>
<link href="style.css" type='text/css' rel='stylesheet'>
    <link rel="stylesheet" href="../style/style.css">
    <style>
   body {
    background: url(../image/nav.png) top no-repeat; /* Цвет фона и путь к файлу */
    background-size: 95% 15%;   
   }
  </style>
<script LANGUAGE="JavaScript">
<!--
var confirmMsg  = 'Are you sure you want to ';
function confirmLink(theLink, theGroup)
{
    if (confirmMsg == '') {
        return true;
    }

    var is_confirmed = confirm(confirmMsg + theGroup);
    if (is_confirmed) {
        theLink.href += '&is_js_confirmed=1';
    }

    return is_confirmed;
}
//-->
</script>
<SCRIPT LANGUAGE="JavaScript" src="js/201a.js">
</SCRIPT>
</HEAD>
<BODY bgColor=#ffffff leftMargin=0 topMargin=0 rightmargin=0 bottommargin=0>
<TABLE height=50 cellSpacing=0 cellPadding=0 width="98%" border=0>
<TBODY>
<TR>
<TD colspan=0 cellpadding=0 width=2%><img src="../admin/images/space.gif" width=1 height=50></TD>
<TD width=78% style="padding-left:5px;">
    <h2 class= "h2_y" style="text-shadow: 2px 0 black, 0 -2px black, -2px 0 black, 0 2px black; text-align:left; margin-left:15px"><font size=6>СНТ "Сосна" - Панель администратора</font></h2>
</TD>
<TD width=21%  style="padding-left:5px;">&nbsp;<?php global $bchome; echo "$bchome"; ?></TD><TD colspan=0 cellpadding=0 width=2%><img src="images/space.gif" width=1 height=50></TD>
</TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width="98%" border=0>
<TBODY>
<TR>
<TD colspan=0 cellpadding=0 width=2%><img src="images/space.gif" width=1 height=400></TD>
<TD vAlign=top>
<TABLE cellSpacing=0 cellPadding=3 width="100%" align=center border=0>
<TBODY>
<TR>
<TD vAlign=top colSpan=1><BR>
<?php
if(isset($_SESSION['ein'])){
if($action=="dologin"){
echo "$text";
echo "$menu";
}
if($action=="poll_template"){
if($ser=="true"){
mysqli_query($mysql,"SET NAMES utf8");
$bro=mysqli_query($mysql,"UPDATE smp_cust SET pw='$pw',boc='$boc',bbc='$bbc',hlc='$hlc',hls='$hls',ttc='$ttc',bts='$bts',btc='$btc',buc='$buc'");
if($bro){
echo "<table width=40% align=center cellspacing=0><TR bgcolor=\"#a3ae36\" height=\"26\"><TD align=center width=100% colspan=2><b>Подтвверждение</b></TD></TR><TR bgcolor=\"#a3ae36\"><TD align=center style=\"BORDER-LEFT:#a3ae36 1px solid;BORDER-BOTTOM:#a3ae36 1px solid;\"><img src=\"images/banner_check.png\"></TD><TD align=center width=80% style=\"BORDER-RIGHT:#a3ae36 1px solid;BORDER-BOTTOM:#a3ae36 1px solid;\">Изменения были сохранены.</TD></TR></table><BR>";
}else{
echo "<table width=40% align=center cellspacing=0><TR bgcolor=\"#a3ae36\" height=\"26\"><TD align=center width=100% colspan=2><b>Предупреждение</b></TD></TR><TR bgcolor=\"#a3ae36\"><TD align=center style=\"BORDER-LEFT:#a3ae36 1px solid;BORDER-BOTTOM:#a3ae36 1px solid;\"><img src=\"images/warning.png\"></TD><TD align=center width=80% style=\"BORDER-RIGHT:#a3ae36 1px solid;BORDER-BOTTOM:#a3ae36 1px solid;\">Изменения не могут быть сохранены.</TD></TR></table><BR>";
}
}
mysqli_query($mysql,"SET NAMES utf8");
$gett=mysqli_query($mysql,"SELECT * FROM smp_cust");
$goi=mysqli_fetch_array($gett);
?>
<script language=javascript>
<!--
function regen()
{
window.self.document.all.t0.innerHTML = "<table width="+window.self.document.all.pw.value+"  style='border:"+window.self.document.all.boc.value+" 1px solid;' cellpadding=0 cellspacing=0 bgcolor="+window.self.document.all.bbc.value+"><TR bgcolor="+window.self.document.all.hlc.value+" height=\"25\"><TD style='padding:4px;font-size:"+window.self.document.all.hls.value+"px;color:"+window.self.document.all.ttc.value+"' valign=middle><B>Название опроса</B></TD></TR><TR height=10><td><img src='images/space.gif' height=1 width=1></td></TR><TR height=\"25\"><td style='padding:2px;font:"+window.self.document.all.bts.value+"px verdana, tahoma; color:"+window.self.document.all.btc.value+"; text-align:left;' valign=top><input type=radio name=note> Вариант 1</TR><TR height=\"25\"><td style='padding:2px;font:"+window.self.document.all.bts.value+"px verdana, tahoma; color:"+window.self.document.all.btc.value+"; text-align:left;' valign=top><input type=radio name=note> Вариант 2</TR><TR height=\"25\"><td style='padding:2px;font:"+window.self.document.all.bts.value+"px verdana, tahoma; color:"+window.self.document.all.btc.value+"; text-align:left;' valign=top><input type=radio name=note> Вариант 3</TR><TR height=\"25\"><TD align=\"center\"><input type=\"button\" style='color:"+window.self.document.all.buc.value+"' value=\"Голосовать!\"><BR><BR><a href=\"#\"><font size='1' color='"+window.self.document.all.btc.value+"'>Результаты</a></font></TD></TR><TR height=10><td><img src='images/space.gif' height=1 width=1></td></TR></Table><BR><table border=0 cellspacing=0 width="+window.self.document.all.pw.value+"></table>";
}
//-->
</script>
<body onload="javascript:regen();">
<?php
echo "<form method=post action=\"?action=poll_template&ser=true\">";
echo "<div id=\"colorpicker201\" class=\"colorpicker201\"></div>";
echo "<Table width=100% align=center><TR><TD width=50%><table width=100%><tr bgcolor=\"#E6E6E6\" height=\"24\"><TD colspan=2><B>Настроить внешний вид опроса:</B></TD></TR><TR style=\"background:#F6F6F6;\"><Td width=50%>Цвет окантовки опроса:</TD><TD><input type=text name=\"boc\" size=10 value=\"$goi[boc]\" onkeyup=\"javascript:regen();\" id=\"boc\"><input type=\"button\" value=\" ... \"  onclick=\"showColorGrid2('boc','none');\"></TD></TR><TR style=\"background:#F6F6F6;\"><Td>Цвет фона опроса:</TD><TD><input type=text name=bbc size=10 value=\"$goi[bbc]\" onkeyup=\"javascript:regen();\" id=\"bbc\"><input type=\"button\" value=\" ... \"  onclick=\"showColorGrid2('bbc','none');\"></TD></TR><TR style=\"background:#F6F6F6;\"><Td>Цвет фона названия опроса:</TD><TD><input type=text name=hlc size=10 value=\"$goi[hlc]\" onkeyup=\"javascript:regen();\" id=\"hlc\"><input type=\"button\" value=\" ... \"  onclick=\"showColorGrid2('hlc','none');\"></TD></TR><TR style=\"background:#F6F6F6;\"><Td>Размер заголовка опроса:</TD><TD><input type=text name=hls size=10 value=\"$goi[hls]\" onkeyup=\"javascript:regen();\">px</TD></TR>
<TR style=\"background:#F6F6F6;\"><Td>Цвет заголовка опроса:</TD><TD><input type=text name=ttc size=10 value=\"$goi[ttc]\" onkeyup=\"javascript:regen();\" id=\"ttc\"><input type=\"button\" value=\" ... \"  onclick=\"showColorGrid2('ttc','none');\"></TD></TR>
<TR style=\"background:#F6F6F6;\"><Td>Цвет опций:</TD><TD><input type=text name=btc size=10 value=\"$goi[btc]\" onkeyup=\"javascript:regen();\" id=\"btc\"><input type=\"button\" value=\" ... \"  onclick=\"showColorGrid2('btc','none');\"></TD></TR><TR style=\"background:#F6F6F6;\"><Td>Размер шрифта опций:</TD><TD><input type=text name=bts size=10 value=\"$goi[bts]\" onkeyup=\"javascript:regen();\" width=10%>px</TD></TR><TR style=\"background:#F6F6F6;\"><Td>Цвет текста кнопки:</TD><TD><input type=text name=buc size=10 value=\"$goi[buc]\" onkeyup=\"javascript:regen();\" id=\"buc\"><input type=\"button\" value=\" ... \"  onclick=\"showColorGrid2('buc','none');\"><input type=hidden name=id value=\"$goi[op]\"></TD></TR><TR style=\"background:#F6F6F6;\"><Td>Ширина опроса:</TD><TD><input type=text name=pw size=10 value=\"$goi[pw]\" onkeyup=\"javascript:regen();\" width=10%>px</TD></TR><TR style=\"background:#F6F6F6;\"><TD><BR><BR></TD><TD><input type=submit value=' Внести изменения! '><input type=button value=' Отменить изменения! ' onclick='javascript: reset();regen();'></TD></TR></Table></TD><TD width=50% align=center valign=top><table width=100%><TR bgcolor=\"#E6E6E6\" height=\"24\"><TD><B>Предварительный просмотр</B></TD></TR><TR height=100><TD valign=center><span id=t0></span></TD></TR></table></TD></TR></Table></Form>";
}
elseif($action=="add_quiz"){
if($question==""){
echo "<form method=post action=\"?action=add_quiz\">";
echo "<table width=600 align=\"center\" cellspacing=\"0\" cellpadding=\"0\" style=\"BORDER:#E6e6e6 1px solid;\" bgcolor=\"#F6f6f6\">";
echo "<TR height=\"30\" bgcolor=\"#E6e6e6\"><TD colspan=2 align=\"center\"><B>Создать опрос</B></TD></TR>";
echo "<TR height=\"40\"><TD width=20% style=\"padding:4px;\">Название опроса:</TD><TD width=50%><input type=text name=title size=50></TD></TR>";
echo "<TR height=\"40\"><TD width=20% style=\"padding:4px;\">Количество вариантов ответа:</TD><TD width=50%><input type=text name=no size=5></TD></TR>";
echo "<TR height=\"40\"><TD width=20% style=\"padding:4px;\"><input type=hidden name=question value=0></TD><TD width=50%><input type=submit value='Дальше'></TD></TR>";
echo "</Table>";
echo "</form>";
}
if($question!="" && $answer==""){
if(is_numeric($no)){
echo "<form method=post action=\"?action=add_quiz\">";
echo "<table width=600 align=\"center\" cellspacing=\"0\" cellpadding=\"0\" style=\"BORDER:#E6e6e6 1px solid;\" bgcolor=\"#F6f6f6\">";
echo "<TR height=\"30\" bgcolor=\"#E6e6e6\"><TD colspan=2 align=\"center\"><B>$title</B></TD></TR>";
for($i=1;$i<=$no;$i++){
echo "<TR height=\"40\"><TD width=50 style=\"padding:4px;\">Вариант $i:</TD><TD width=500><input type=text name=\"answer[$i]\" size=\"40\"></TD></TR>";
}
echo "<TR><TD width=100><input type=hidden name=question value=0><input type=hidden name=no value=\"$no\"><input type=hidden name=title value=\"$title\"></TD><TD width=500><input type=submit value=' Готово! '></TD></TR>";
echo "<TR height=\"20\"><TD width=100% colspan=2>&nbsp;</TD></TR>";
echo "</Table>";
echo "</form>";
}else{
echo "<table width=40% align=center cellspacing=0><TR bgcolor=\"#E6e6e6\" height=\"26\"><TD align=center width=100% colspan=2><b>Ошибка</b></TD></TR><TR bgcolor=\"#F6f6f6\"><TD align=center style=\"BORDER-LEFT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\"><img src=\"images/warning.png\"></TD><TD align=center width=80% style=\"BORDER-RIGHT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\">Пожалуйста, вернитесь назад и укажите количество ответов в опросе (это может быть только число).</TD></TR></table><BR>";
}
}
if($question!="" && $answer!=""){
$tm=time();
$title=str_replace("'","&#39;",$title);
$title=str_replace("<","&lt;",$title);
$title=str_replace(">","&gt;",$title);
$title=stripslashes($title);
mysqli_query($mysql,"SET NAMES utf8");
$mfr=mysqli_query($mysql,"INSERT INTO smp_quiz SET title='$title', tm='$tm'");
for($i=1;$i<=$no;$i++){
$k=$i;
$answer[$i]=stripslashes($answer[$i]);
$answer[$i]=str_replace("'","&#39;",$answer[$i]);
$answer[$i]=str_replace("<","&lt;",$answer[$i]);
$answer[$i]=str_replace(">","&gt;",$answer[$i]);
mysqli_query($mysql,"SET NAMES utf8");
$mfr=mysqli_query($mysql,"INSERT INTO smp_answer SET answer='$answer[$i]',qid='$i', tm='$tm'");
}
if($mfr){
echo "<table width=40% align=center cellspacing=0><TR bgcolor=\"#E6e6e6\" height=\"26\"><TD align=center width=100% colspan=2><b>Подтверждение</b></TD></TR><TR bgcolor=\"#F6f6f6\"><TD align=center style=\"BORDER-LEFT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\"><img src=\"images/banner_check.png\"></TD><TD align=center width=80% style=\"BORDER-RIGHT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\"><b>Опрос успешно создан. Идентификатор опроса: <font color=blue>$tm</font></b><BR>Используйте этот ID для отображения опроса.</TD></TR></table><BR>";
}else{
echo "<table width=40% align=center cellspacing=0><TR bgcolor=\"#E6e6e6\" height=\"26\"><TD align=center width=100% colspan=2><b>Ошибка</b></TD></TR><TR bgcolor=\"#F6f6f6\"><TD align=center style=\"BORDER-LEFT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\"><img src=\"images/warning.png\"></TD><TD align=center width=80% style=\"BORDER-RIGHT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\">Произошла ошибка при добавлении опроса в базу данных. Пожалуйста, вернитесь назад и проверьте указанные данные.</TD></TR></table><BR>";
}
}
}
elseif($action=="view_quiz"){
if($do=="reset" && $confirm==""){
echo "<table width=50% align=center cellpadding=2 cellspacing=0><TR height=20 bgcolor=\"#E6e6e6\"><TD width=100% align=center colspan=2><b>Вы уверены, что хотите сбросить статистику для опроса?</b></TD></TR>";
echo "<TR bgcolor=\"#F6f6f6\"><TD style=\"BORDER-BOTTOM:#E6e6e6 1px solid;BORDER-LEFT:#E6e6e6 1px solid;\" width=30% align=center><img src=\"images/warning.png\"></TD><TD align=center style=\"BORDER-BOTTOM:#E6e6e6 1px solid;BORDER-RIGHT:#E6e6e6 1px solid;\"><BR><form method=post action=\"?action=view_quiz&do=reset\"><input type=hidden name=\"id\" value=\"$id\"><input type=hidden name=\"confirm\" value=\"yes\"><input type=submit value=\" Да \"> &nbsp; <input type=button value=\" Нет \" onclick=\"javascript: history.back();\"></form></TD></TR></table>";
}elseif($do=="reset" && $confirm!=""){
//mysqli_query($mysql,"SET NAMES utf8");
$mfr=mysqli_query($mysql,"DELETE FROM smp_result WHERE tm='$id'");
if($mfr){
echo "<table width=40% align=center cellspacing=0><TR bgcolor=\"#E6e6e6\" height=\"26\"><TD align=center width=100% colspan=2><b>Подтверждение</b></TD></TR><TR bgcolor=\"#F6f6f6\"><TD align=center style=\"BORDER-LEFT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\"><img src=\"images/banner_check.png\"></TD><TD align=center width=80% style=\"BORDER-RIGHT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\">Статистика по опросу была сброшена.<BR><a href=\"?action=manage_quiz\"><B>Назад, к управлению опросами</B></a></TD></TR></table><BR>";
}
}
mysqli_query($mysql,"SET NAMES utf8");
$mit=mysqli_query($mysql,"SELECT * FROM smp_quiz WHERE tm='$id'");
$qz=mysqli_fetch_array($mit);
//mysqli_query($mysql,"SET NAMES utf8");
$tot=mysqli_query($mysql,"SELECT * FROM smp_result WHERE tm='$id'");
$total=mysqli_num_rows($tot);
echo "<center><h3>$qz[title]</h3></center>";
echo "<table width=60% align=center cellspacing=1>";
echo "<TR><TD align=center colspan=2><b>Статистика опроса</b></TD></TR>";
echo "<TR height=30 bgcolor='#E8e8e8'><TD width=60%>Всего голосов</TD><TD width=40%>$total</TD></TR>";
mysqli_query($mysql,"SET NAMES utf8");
$mil=mysqli_query($mysql,"SELECT * FROM smp_answer WHERE tm='$id'");
while($cow=@mysqli_fetch_array($mil)){
//mysqli_query($mysql,"SET NAMES utf8");
$nm=mysqli_query($mysql,"SELECT * FROM smp_result WHERE point='$cow[qid]' AND tm='$id'");
$thibs=mysqli_num_rows($nm);
if($total>0){
$tp=round((($thibs/$total)*100),1);
}else{
$tp=0;
}
echo "<TR height=30 bgcolor='#E8E8E8'><TD>$cow[answer]</TD><TD>$tp% ($thibs голосов)</TD></TR>";
}
echo "<TR height=60><TD colspan=2 align=center>[<a href=\"?action=view_quiz&do=reset&id=$id\"><b>Сбросить статистику</b></a>]</TD></TR>";
echo "</table>";
}
elseif($action=="edit_quiz"){
if($do=="true"){
$title=str_replace("'","&#39;",$title);
$title=str_replace("<","&lt;",$title);
$title=str_replace(">","&gt;",$title);
$title=stripslashes($title);
mysqli_query($mysql,"SET NAMES utf8");
$er=mysqli_query($mysql,"UPDATE smp_quiz SET title='$title' WHERE tm='$id'");
mysqli_query($mysql,"SET NAMES utf8");
$mit1=mysqli_query($mysql,"SELECT * FROM smp_answer WHERE tm='$id'");
while($mow1=mysqli_fetch_array($mit1)){
$ig=$mow1[op];
$answer[$ig]=stripslashes($answer[$ig]);
$answer[$ig]=str_replace("'","&#39;",$answer[$ig]);
$answer[$ig]=str_replace("<","&lt;",$answer[$ig]);
$answer[$ig]=str_replace(">","&gt;",$answer[$ig]);
mysqli_query($mysql,"SET NAMES utf8");
$mpb=mysqli_query($mysql,"UPDATE smp_answer SET answer='$answer[$ig]' WHERE tm='$id' AND op='$ig'");
}
echo "<table width=40% align=center cellspacing=0><TR bgcolor=\"#E6e6e6\" height=\"26\"><TD align=center width=100% colspan=2><b>Подтверждение</b></TD></TR><TR bgcolor=\"#F6f6f6\"><TD align=center style=\"BORDER-LEFT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\"><img src=\"images/banner_edit.png\"></TD><TD align=center width=80% style=\"BORDER-RIGHT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\"><b>Опрос был отредактирован.<BR><a href=\"?action=manage_quiz\">Назад, к управлению опросами</a></TD></TR></table><BR>";
}
echo "<form method=post action=\"?action=edit_quiz\">";
echo "<table width=600 align=\"center\" cellspacing=\"0\" cellpadding=\"0\" style=\"BORDER:#E6e6e6 1px solid;\" bgcolor=\"#F6f6f6\">";
echo "<TR height=\"30\" bgcolor=\"#E6e6e6\"><TD colspan=2 align=\"center\"><B>Редактировать! опрос</B></TD></TR>";
mysqli_query($mysql,"SET NAMES utf8");
$mr=mysqli_query($mysql,"SELECT * FROM smp_quiz WHERE tm='$id'");
$in=@mysqli_fetch_array($mr);
echo "<TR height=\"10\"><TD colspan=2></TD></TR>";
echo "<TR height=\"35\"><TD width=100 style=\"padding:4px;\">Название опроса:</TD><TD width=500><input type=text name=title size=50 value=\"$in[title]\"></TD></TR>";
echo "<TR><TD colspan=2><BR></TD></TR>";
mysqli_query($mysql,"SET NAMES utf8");
$ques=mysqli_query($mysql,"SELECT * FROM smp_answer WHERE tm='$id'");
$i=0;
while($row=mysqli_fetch_array($ques)){
$ir=$row[op];
$i++;
echo "<TR height=\"35\"><TD width=100 style=\"padding:4px;\">Вариант $i:</TD><TD width=500><input type=text name=answer[$ir] size=50 value=\"$row[answer]\"></TD></TR>";
echo "<TR><TD colspan=2><BR></TD></TR>";
}
echo "<TR height=\"35\"><TD width=100 style=\"padding:4px;\"><input type=hidden name=do value=\"true\"><input type=hidden name=id value=\"$id\"></TD><TD width=500><input type=submit value=\"Внести изменения\"></TD></TR>";
echo "<TR height=\"10\"><TD colspan=2></TD></TR>";
echo "</table></form>";
}
elseif($action=="delete_quiz"){
if($confirm==""){
echo "<table width=50% align=center cellpadding=2 cellspacing=0><TR height=20 bgcolor=\"#E6e6e6\"><TD width=100% align=center colspan=2><b>Вы уверены, что хотите удалить этот опрос?</b></TD></TR>";
echo "<TR bgcolor=\"#F6f6f6\"><TD style=\"BORDER-BOTTOM:#E6e6e6 1px solid;BORDER-LEFT:#E6e6e6 1px solid;\" width=30% align=center><img src=\"images/empty.png\"></TD><TD align=center style=\"BORDER-BOTTOM:#E6e6e6 1px solid;BORDER-RIGHT:#E6e6e6 1px solid;\"><BR><form method=post action=\"?action=delete_quiz\"><input type=hidden name=\"id\" value=\"$id\"><input type=hidden name=\"confirm\" value=\"yes\"><input type=submit value=\" Да \"> &nbsp; <input type=button value=\" Нет \" onclick=\"javascript: history.back();\"></form></TD></TR></table>";
}elseif($confirm=="yes"){
mysqli_query($mysql,"SET NAMES utf8");
$del=mysqli_query($mysql,"DELETE FROM smp_quiz WHERE tm='$id'");
mysqli_query($mysql,"SET NAMES utf8");
$del=mysqli_query($mysql,"DELETE FROM smp_answer WHERE tm='$id'");
//mysqli_query($mysql,"SET NAMES utf8");
$del=mysqli_query($mysql,"DELETE FROM smp_result WHERE tm='$id'");
if($del){
echo "<table width=40% align=center cellspacing=0><TR bgcolor=\"#E6e6e6\" height=\"26\"><TD align=center width=100% colspan=2><b>Подтверждение</b></TD></TR><TR bgcolor=\"#F6f6f6\"><TD align=center style=\"BORDER-LEFT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\"><img src=\"images/banner_check.png\"></TD><TD align=center width=80% style=\"BORDER-RIGHT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\">Опрос был удален.<BR><a href=\"?action=manage_quiz\"><B>Назад, к управлению опросами</B></a></TD></TR></table><BR>";
}
}
}
elseif($action=="manage_quiz"){
$selall=("SELECT * FROM smp_quiz");
$row_num1=mysqli_num_rows(mysqli_query($mysql,$selall));
if(mysqli_num_rows(mysqli_query($mysql,$selall))==0){
echo "<BR><center><b>Нет опросов для редактирования</b></center><BR>";
}else{
$list_per_page=15;
if($start==""){
$start=1;
}
if($start==""||$start==1){
$sfrom=0;
}else{
$sfrom=(($start-1)*$list_per_page);
}
$end=$list_per_page;
if ($row_num1>$list_per_page){
$no_of_page=$row_num1/$list_per_page;
$no_page=explode(".",$no_of_page);
if($no_page[1]>0){
$no_of_page+=1;
}
echo "<center>";
echo "<table width=50% align=center border=0>";
if($start > 1){
$s=$start-1;
echo "<TD width=2%><a href='?action=manage_quiz&start=$s'><img src=\"images/previous.png\" border=0 alt=\"Previous\"></a></TD>";
}
echo "<td width=96% align=center>";
$last=round($no_of_page,0);
for($i=1;$i<=$no_of_page;$i++){
if($no_of_page<=20){
if($i!=$start){
echo " <a href='?action=manage_quiz&start=$i'><font size=2>$i</font></a> ";
}else{
echo "<font size=2> <b>$i</b> </font>";
}
}else{
if($i>$start+3){
if($once==""){
echo " ....... <a href='?action=manage_quiz&start=$last'><font size=4>$last</font></a>";
}
$once="yes";
}elseif($i<$start-3){
if($tonce=="" && ($start-3)>0){
echo "<a href='?action=manage_quiz&start=1'><font size=4>1</font></a> ....... ";
}
$tonce="yes";
}else{
if($i!=$start){
echo " <a href='?action=manage_quiz&start=$i'><font size=4>$i</font></a> ";
}else{
echo "<font size=2 color=\"#FFCC00\"> <b>$i</b> </font>";
}
}
}
}
echo "</TD>";
if($start < $i-1){
$n=$start+1;
$next = "<TD width=2%><a href='?action=manage_quiz&start=$n'><img src=\"images/next.png\" border=0 alt=\"Next\"></a></TD>";
}elseif($start>=$i){
$next =  "";
}
echo "$next</table></center><HR size=1px color=#E6E6E6>";
}
$gr=1;
$selall.=	(" LIMIT $sfrom,$end");
mysqli_query($mysql,"SET NAMES utf8");
$blist=(mysqli_query($mysql,$selall));
echo"<Table width=100% border=0><TR bgcolor=\"#E6E6E6\" align=middle height=26><TD width=45%><B>Название опроса</B></TD><TD width=20%><b>ID</b></TD><TD width=20%><B>Действие</B></TD></TR>";
$tm=time();
while($row=mysqli_fetch_array($blist)){
echo "<TR height=50 bgcolor=\"#F5F5F5\">";
echo "<TD align=center>$row[title]</TD><TD width=10% align=center>$row[tm]</TD><TD width=10% align=center><a href=\"?action=view_quiz&id=$row[tm]\"><img src=\"images/view.png\" border=0 alt=\"View Results\"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"?action=edit_quiz&id=$row[tm]\"><img src=\"images/edit.png\" border=0 alt=\"Внести изменения\"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"?action=delete_quiz&id=$row[tm]\"><img src=\"images/delete.png\" border=0 alt=\"Удалить\"></a></TD></TR>";
}
echo "</Table>";
 }
 }elseif($action=="change"){
mysqli_query($mysql,"SET NAMES utf8");
$exis=mysqli_query($mysql,"SELECT * FROM smp_ad");
$einf=mysqli_fetch_array($exis);
if($mode=="verify"){
if($admin_pass==$cpass && strlen($admin_pass)>=1){
    $new_pass=md5(md5($admin_pass));
mysqli_query($mysql,"SET NAMES utf8");
$updf=mysqli_query($mysql,"UPDATE smp_ad SET admin_id='$admin_id', admin_pass='$new_pass'");
echo "
<table width=50% align=center cellspacing=0 style=\"padding:100px;\">
    <TR bgcolor=\"#a3ae36\" height=\"26\">
                <TD colspan=3 align=center style=\"border-radius: 10px 10px 0 0;-webkit-border-radius: 10px 10px 0 0;-moz-border-radius: 10px 10px 0 0;-khtml-border-radius: 10px 10px 0 0;border: 2px solid #000;\"><font size=3><B>Подтверждение</B></font></TD>
    </TR>
    <TR bgcolor=\"#f8ff90\">
        <TD align=center style=\"border-radius: 0 0 0 10px;-webkit-border-radius: 0 0 0 10px;-moz-border-radius: 0 0 0 10px;-khtml-border-radius: 0 0 0 10px;BORDER-LEFT:#000 2px solid;BORDER-BOTTOM:#000 2px solid;padding:10px\"><img src=\"images/admin_info.png\"></TD>
        <TD align=center width=80% style=\"border-radius: 0 0 10px 0;-webkit-border-radius: 0 0 10px 0;-moz-border-radius: 0 0 10px 0;-khtml-border-radius: 0 0 10px 0;BORDER-RIGHT:#000 2px solid;BORDER-BOTTOM:#000 2px solid;\"><font size=3>Данные администратора были изменены.</font></TD>
    </TR>
</table><BR>";
$done="true";
}else{
echo "<table width=40% align=center cellspacing=0 border=0><TR bgcolor=\"#E6e6e6\" height=\"26\"><TD align=center width=100% colspan=2><b>Ошибка</b></TD></TR><TR bgcolor=\"#F6f6f6\"><TD align=center style=\"BORDER-LEFT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\"><img src=\"images/warning.png\"></TD><TD align=center width=80% style=\"BORDER-RIGHT:#E6e6e6 1px solid;BORDER-BOTTOM:#E6e6e6 1px solid;\">Новый пароль и его подтверждение не совпадают.</TD></TR></table><BR>";
echo "<form method=post action=?action=change&mode=verify><table width=50% align=center><TR height=26 bgcolor=#E6E6E6><TD colspan=2 align=center><B>Изменить данные входа администратора</B></TD></TR><TR height=26 bgcolor=#F6F6F6><TD width=20%>ID администратора</td><td width=80%><input type=text name=admin_id value=\"$einf[admin_id]\"></td></tr><TR height=26 bgcolor=#F6F6F6><TD width=20%>Новый пароль</td><td><input type=password name=\"admin_pass\"></td></tr><TR height=26 bgcolor=#F6F6F6><TD width=20%>Повторите новый пароль</td><td><input type=password name=\"cpass\"></td></tr><TR height=26 bgcolor=#F6F6F6><TD width=20%><BR><BR><BR></td><td><input type=submit value=Change></td></tr></table></form>";
}
}else{
echo "
<form method=post action=?action=change&mode=verify>
    
    <table width=50% align=center cellspacing=0 cellpadding=2 border=0 style=\"padding:50px;\">
            <TR height=26 bgcolor=#a3ae36>
                <TD colspan=3 align=center style=\"border-radius: 10px 10px 0 0;-webkit-border-radius: 10px 10px 0 0;-moz-border-radius: 10px 10px 0 0;-khtml-border-radius: 10px 10px 0 0;border: 2px solid #000;\"><font size=3><B>Изменить данные входа администратора</B></font></TD>
            </TR>
            <TR height=26 bgcolor=#f8ff90>
                <TD width=40% style=\"border-left: 2px solid #000;padding:10px;\"><font size=3>ID администратора</font></td>
                <td width=60% style=\"BORDER-RIGHT:#000 2px solid;padding:10px;\"><input type=text name=admin_id style=\"font-size:15px;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-khtml-border-radius:5px;\" value=\"$einf[admin_id]\"></td>
            </TR>
            <TR height=26 bgcolor=#f8ff90>
                <TD width=20% style=\"border-left: 2px solid #000;padding:10px;\"><font size=3>Новый пароль</font></td>
                <td style=\"BORDER-RIGHT:#000 2px solid;padding:10px;\"><input type=password name=\"admin_pass\" style=\"font-size:15px;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-khtml-border-radius:5px;\"></td>
            </TR>
            <TR height=26 bgcolor=#f8ff90>
                <TD width=20% style=\"border-left: 2px solid #000;padding:10px;\"><font size=3>Повторите новый пароль</font></td>
                <td style=\"BORDER-RIGHT:#000 2px solid;padding:10px;\"><input type=password name=\"cpass\" style=\"font-size:15px;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-khtml-border-radius:5px;\"></td>
            </TR>
            <TR height=26 bgcolor=#f8ff90>
                <TD width=\"35%\"  style=\"border-radius: 0 0 0 10px;-webkit-border-radius: 0 0 0 10px;-moz-border-radius: 0 0 0 10px;-khtml-border-radius: 0 0 0 10px;border-left: 2px solid #000;border-bottom: 2px solid #000;\"><BR><BR><BR></td>
                <td   style=\"border-radius: 0 0 10px 0;-webkit-border-radius: 0 0 10px 0;-moz-border-radius: 0 0 10px 0;-khtml-border-radius: 0 0 10px 0;border-right: 2px solid #000;border-bottom: 2px solid #000;padding:10px;\"><input type=submit value=\" Сохранить изменения \" style=\"font-size:15px;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-khtml-border-radius:5px;\"></td>
            </tr>
        </table>
</form>";
}
}
    
    
    
    elseif($action=="faq"){
        echo "<h2 class= \"h2_y\" style=\"text-shadow: 2px 0 black, 0 -2px black, -2px 0 black, 0 2px black; text-align:center;padding:15px;\">!!!Ответы на вопросы!!!</h2><center>
            <input type=button name=filter id=show value='Показать новые вопросы' style=\"font-size:15px;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-khtml-border-radius:5px;\">
            <input type=button name=filter id=hide value='Показать все вопросы' style=\"font-size:15px;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-khtml-border-radius:5px;\">
<!--Формируем два скрытых div, а кнопками будем показывать либо один, либо второй-->
<!--Первый div -->
                <div id='contentHide' style='display:none;'>";
        $sql = "SELECT * FROM faq";
                            if($result = $mysql->query($sql)){
                                $rowsCount = $result->num_rows; // количество полученных строк
                                    
                                    echo "<table cellspacing=0 border=1 style=\"padding:15px;\"><tr><th>id</th><th>Вопрос</th><th>Ответ</th><th>Ответить</th><th>Удалить</th></tr>";
                                foreach($result as $row){
                                    echo "<tr>";
                                    echo "<td><font size=3>&nbsp" . $row["id"] . "&nbsp</font></td>";
                                    echo "<td><font size=3>&nbsp" . $row["question"] . "&nbsp</font></td>";
                                    echo "<td><font size=3>&nbsp" . $row["answer"] . "&nbsp</font></td>";
                                    echo "<td><a href='update.php?id=" . $row["id"] . "'><font size=3> &nbspРедактировать&nbsp </font></a></td>";
                                    echo "<td><a href='delete.php?id=" . $row["id"] . "'><font size=3> &nbspУдалить&nbsp </font></a></td>";
                                    echo "</tr>";
                                }
                                    echo "</table>";
                            mysqli_free_result($result);
                            } else{
                                echo "Ошибка: " . $mysql->error;
                                }   
                        //mysqli_close($mysql);
        echo "</div><div id='contentShow' style='display:none;'>";
            $sql = "SELECT * FROM `faq` WHERE answer=''";
                            if($result = $mysql->query($sql)){
                                $rowsCount = $result->num_rows;
                                    echo "<table cellspacing=0 border=1 style=\"padding:15px;\"><tr><th>id</th><th>Вопрос</th><th>Ответить</th></tr>";
                                foreach($result as $row){
                                    echo "<tr>";
                                    echo "<td><font size=3>&nbsp" . $row["id"] . "&nbsp </font></td>";
                                    echo "<td><font size=3>&nbsp" . $row["question"] . "&nbsp </font></td>";
                                    
                                    echo "<td><a href='update.php?id=" . $row["id"] . "'><font size=3>&nbspОтветить на вопрос&nbsp </font></a></td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                        mysqli_free_result($result);
                            } else{
                                echo "Ошибка: " . $conn->error;
                                }   
                        mysqli_close($mysql);
        echo "</div></center>";
        echo "<script>
    let contentShow = document.getElementById('contentShow')
    let contentHide = document.getElementById('contentHide')
    let show = document.getElementById('show')
    let hide = document.getElementById('hide')
        show.addEventListener('click', () => {
            contentShow.style.display = 'block';
            contentHide.style.display = 'none';
        })
        hide.addEventListener('click', () => {
            contentShow.style.display = 'none';
            contentHide.style.display = 'block';
        })
</script>";
    }
    
    
    
}else{
    global $vpass;
if(strlen($vpass)>=1){
$ltext="<CENTER><font color=red>Вы ввели невверный пароль</font></CENTER>";
}else{
$ltext="";
}
if(!isset($_SESSION['ein'])){
readfile('login_form.html');
}
}
    ?><BR>

<TD colspan="0" cellpadding="0" width=0><img src="images/space.gif" width=1 height=400></TD>

<TABLE cellSpacing=0 cellPadding=0 width="98%" border=0>
<TBODY>
<TR>
    <TD style="BORDER-TOP: #a3ae36 0px solid; background: url('../image/footer.png') top no-repeat;background-size: 99% 100%;" height=150><p style="margin-right:30px; padding-top:100px; text-align:right;"><font size=3>Copyright © СНТ "Сосна" 2024.</font></p>
</TD></TR></TBODY>
    </TABLE></BR></body></BR></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></BODY></HTML>