<?php
if($act){
if($act == 'bomLike' ||
$act == 'bomComment' ||
$act == 'botLike' ||
$act == 'botComment' ||
$act == 'autoConfirm'||
$act == 'botResponStatus' ||
$act == 'botResponStatusKepo' ||
$act == 'botResponComment' ||
$act == 'botResponCommentKepo' ||
$act == 'botResponLike' ||
$act == 'botStatus'){
include $act.'.php';
}
print'
<div class="aclb fcg fsl abt apm">
<a class="fcs" href="index.php"> &laquo; Home </a>
';
if($act == menu){
print '
</div>
';
botMenu();
}else{
print '
<a class="fcs" href="?act=menu"> &laquo; Menu </a>
</div>
';
}
}else{
include 'chat.php';
botMenu();
}
function botMenu(){
print '
<br>
<br>
<br>
<font size="5"><font color="white"><a class="" href="?act=botComment">➥ Continue Setup!  </a> </font>
<br>
<br>
<br>
<div class="acg apm">
</div>'; 
}
?>