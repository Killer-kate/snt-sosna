<?php
foreach($_GET AS $key => $value) {
${$key} = $value;
} 
foreach($_POST AS $key => $value) {
${$key} = $value;
} 
include ("conf.php");
$db=mysqli_connect($db_host,$database_user,$database_pass) or die("<b>MySQL Error:</b> Невозможно подключиться к БД. Проверьте кооректность используемых данных.");
mysqli_select_db($db,$db_name)or die("<b>MySQL Error:</b> Невозможно выбрать указанную базу данных. Проверьте правильность имени базы.");
if($action=="showpoll" && $id!=""){
mysqli_query($db,"SET NAMES utf8");
$mpi=mysqli_query($db,"SELECT * FROM smp_cust");
$col=mysqli_fetch_array($mpi);
mysqli_query($db,"SET NAMES utf8");
$pc=mysqli_query($db,"SELECT * FROM smp_quiz WHERE tm='$id'");
if(mysqli_num_rows($pc)==1){
$now=mysqli_fetch_array($pc);
echo "<form onsubmit=\"javascript: return false;\"><table width=\"$col[pw]\"  style='border:$col[boc] 1px solid;' cellpadding=0 cellspacing=0 bgcolor=\"$col[bbc]\"><TR bgcolor=\"$col[hlc]\" height=\"25\"><TD style='padding:5px;font-size:$col[hls]px;color:$col[ttc];' valign=middle><B>$now[title]</B></TD></TR><TR height=10><td><img src='smart_php_poll/images/space.gif' height=1 width=1></td></TR>";
mysqli_query($db,"SET NAMES utf8");
$nx=mysqli_query($db,"SELECT * FROM smp_answer WHERE tm='$id'");
while($row=mysqli_fetch_array($nx)){
echo "<TR height=\"25\"><td style='padding:5px;font:$col[bts]px verdana, tahoma; color:$col[btc]; text-align:left;' valign=top><input type=radio name=note value=\"$row[qid]\" onclick=\"begen($row[qid]);\"> $row[answer]</td></TR>";
}
echo "<input type=hidden name=\"option\" id=\"option\" value=\"\">";
echo "<TR height=\"25\"><TD align=\"center\"><input type=\"submit\" onclick=\"javascript:fetch($id);\" style='color:$col[buc]' value=\"Голосовать!\"><BR><BR><a href=\"#showr\" onclick=\"javascript:result($id);\"><font size='2' color=\"$col[btc]\">Результаты</a></font></TD></TR><TR height=10><td><img src='smart_php_poll/images/space.gif' height=1 width=1></td></TR></Table><BR><table border=0 cellspacing=0 width=\"$col[pw]\"></table>";
echo "</form>";
}else{
echo "<table border=0 cellspacing=0 width=\"$col[pw]\"><TR height=\"25\"><td width='100%' style='padding:5px;font:10px verdana, tahoma; color:#330000; text-align:center;' valign=top>Этот опрос был удален.</td></TR></table>";
}
}
if($action=="post_result" && $id!=""){
$ip=$_SERVER['REMOTE_ADDR'];
//$ip=rand(1,1000);
$option=trim($option);
mysqli_query($db,"SET NAMES utf8");
$mpi=mysqli_query($db,"SELECT * FROM smp_cust");
$col=mysqli_fetch_array($mpi);
mysqli_query($db,"SET NAMES utf8");
$pc=mysqli_query($db,"SELECT * FROM smp_quiz WHERE tm='$id'");
if(mysqli_num_rows($pc)==1){
$now=mysqli_fetch_array($pc);
echo "<table width=\"$col[pw]\" style='border:$col[boc] 1px solid;' cellpadding=0 cellspacing=0 bgcolor=\"$col[bbc]\"><TR bgcolor=\"$col[hlc]\" height=\"25\"><TD style='padding:5px;font-size:$col[hls]px;color:$col[ttc];' valign=middle><B>$now[title]</B></TD></TR><TR height=10><td><img src='smart_php_poll/images/space.gif' height=1 width=1></td></TR>";
mysqli_query($db,"SET NAMES utf8");
$prog=mysqli_query($db,"SELECT * FROM smp_result WHERE tm='$id' AND ip='$ip'");
if(mysqli_num_rows($prog)>0){
echo "<TR height=\"25\"><td style='padding:5px;font:$col[bts]px verdana, tahoma; color:$col[btc]; text-align:left;' valign=top><b>Вы уже голосовали.</b></td></TR>";
}else{
if($option!=""){
mysqli_query($db,"SET NAMES utf8");
$ins=mysqli_query($db,"INSERT INTO smp_result SET point='$option',ip='$ip', tm='$id'");
}else{
echo "<TR height=\"25\"><td style='padding:5px;font:$col[bts]px verdana, tahoma; color:$col[btc]; text-align:left;' valign=top><b>Пожалуйста, выберите вариант.</b></td></TR>";
}
}
mysqli_query($db,"SET NAMES utf8");
$nx=mysqli_query($db,"SELECT * FROM smp_answer WHERE tm='$id'");
$total_results=mysqli_query($db,"SELECT * FROM smp_result WHERE tm='$id'");
$total_re=mysqli_num_rows($total_results);
while($row=mysqli_fetch_array($nx)){
if (!defined('qid')) define('qid', '0');
$opt=$row[qid];
mysqli_query($db,"SET NAMES utf8");
$prong=mysqli_query($db,"SELECT * FROM smp_result WHERE tm='$id' AND point='$row[qid]'");
$tse=mysqli_num_rows($prong);
$result[$opt]=$tse;
if($total_re>0){
$percentage=round(($tse/$total_re)*100,2);
}else{
$percentage=0;
}
$wt=100-$percentage;
if($percentage==0){
$tdw=1;
}else{
$tdw=$percentage;
}
echo "<TR height=\"18\"><td style='padding:5px;font:$col[bts]px verdana, tahoma; color:$col[btc]; text-align:left;' valign=top>$row[answer]</td></TR>";
echo "<TR height=\"18\"><td style=\"padding-left:5px;\"><table width=\"80%\" align=left cellspacing=0 cellpadding=0><tr height=\"10\"><td bgcolor=\"$col[hlc]\" width=\"$tdw%\"><img src=\"images/spacer.gif\" width=\"0\" height=\"1\"></td><td width=\"$wt\"  style=\"font:$col[bts]px verdana, tahoma; color:$col[btc]; text-align:left;\"><img src=\"images/spacer.gif\" width=\"1\" height=\"1\">$percentage%</td></tr></table></td></TR>";
echo "<tr height=\"10\"><td width=100%><img src=\"images/spacer.gif\" width=\"1\" height=\"1\"></td></tr>";
}
echo "<tr height=\"5\"><td width=100%><img src=\"images/spacer.gif\" width=\"1\" height=\"1\"></td></tr>";

echo "<TR height=\"18\"><td style='padding:5px;font:$col[bts]px verdana, tahoma; color:$col[btc]; text-align:left;' valign=top>Всего проголосовало: $total_re</td></TR>";
echo "<TR height=10><td><img src='smart_php_poll/images/space.gif' height=1 width=1></td></TR></Table><BR><table border=0 cellspacing=0 width=\"$col[pw]\"></table>";
}
}
if($action=="see_result" && $id!=""){
    global $option;
$option=trim($option);
mysqli_query($db,"SET NAMES utf8");
$mpi=mysqli_query($db,"SELECT * FROM smp_cust");
$col=mysqli_fetch_array($mpi);
mysqli_query($db,"SET NAMES utf8");
$pc=mysqli_query($db,"SELECT * FROM smp_quiz WHERE tm='$id'");
if(mysqli_num_rows($pc)==1){
$now=mysqli_fetch_array($pc);
echo "<table width=\"$col[pw]\" style='border:$col[boc] 1px solid;' cellpadding=0 cellspacing=0 bgcolor=\"$col[bbc]\"><TR bgcolor=\"$col[hlc]\" height=\"25\"><TD style='padding:5px;font-size:$col[hls]px;color:$col[ttc];' valign=middle><B>$now[title]</B></TD></TR><TR height=10><td><img src='smart_php_poll/images/space.gif' height=1 width=1></td></TR>";
mysqli_query($db,"SET NAMES utf8");
$nx=mysqli_query($db,"SELECT * FROM smp_answer WHERE tm='$id'");
mysqli_query($db,"SET NAMES utf8");
$total_results=mysqli_query($db,"SELECT * FROM smp_result WHERE tm='$id'");
$total_re=mysqli_num_rows($total_results);
while($row=mysqli_fetch_array($nx)){
    if (!defined('qid')) define('qid', '0');
$opt=$row[qid];
mysqli_query($db,"SET NAMES utf8");
$prong=mysqli_query($db,"SELECT * FROM smp_result WHERE tm='$id' AND point='$row[qid]'");
$tse=mysqli_num_rows($prong);
$result[$opt]=$tse;
if($total_re>0){
$percentage=round(($tse/$total_re)*100,2);
}else{
$percentage=0;
}
if($percentage==0){
$tdw=1;
}else{
$tdw=$percentage;
}
$wt=100-$percentage;
echo "<TR height=\"18\"><td style='padding:5px;font:$col[bts]px verdana, tahoma; color:$col[btc]; text-align:left;' valign=top>$row[answer]</td></TR>";
echo "<TR height=\"18\"><td style=\"padding-left:5px;\"><table width=\"80%\" align=left cellspacing=0 cellpadding=0><tr height=\"10\"><td bgcolor=\"$col[hlc]\" width=\"$tdw%\"><img src=\"images/spacer.gif\" width=\"0\" height=\"1\"></td><td width=\"$wt\" style=\"font:$col[bts]px verdana, tahoma; color:$col[btc]; text-align:left;\"><img src=\"images/spacer.gif\" width=\"1\" height=\"1\">$percentage%</td></tr></table></td></TR>";
echo "<tr height=\"10\"><td width=100%><img src=\"images/spacer.gif\" width=\"1\" height=\"1\"></td></tr>";
}
echo "<tr height=\"5\"><td width=100%><img src=\"images/spacer.gif\" width=\"1\" height=\"1\"></td></tr>";
echo "<TR height=\"18\"><td style='padding:5px;font:$col[bts]px verdana, tahoma; color:$col[btc]; text-align:left;' valign=top>Всего проголосовало: $total_re</td></TR>";
echo "<TR height=10><td><img src='smart_php_poll/images/space.gif' height=1 width=1></td></TR></Table><BR><table border=0 cellspacing=0 width=\"$col[pw]\"></table>";
}
}