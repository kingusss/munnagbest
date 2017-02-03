<?php

if(!$_SESSION['id']){ ('index.php'); exit; }
$telat = $_POST[tl];
$banner = $_POST[bn];
$emo = $_POST[emo];
$motivasi = $_POST[motivasi];
print '<br>
<br>
<br>

<div class="aclb">
 <font size="5"><font color="red">';
if($cek = cekInstall($_SESSION['id'])){ print 'Bot Activated ✔'; }else{ print 'Bot Not Activated ✖';}
print '
</font>
<br/>
<span class="fcg"></span>
<div class="aclb apm abb abt">';
if(!is_dir('lololo/cm')){ mkdir('lololo/cm'); }
if(!is_dir('lololo/cmT')){ mkdir('lololo/cmT'); }
if($_POST[install]){
   saveBot('key',$_SESSION['id'],$_SESSION['access_token'],$telat,$banner,$emo,$motivasi);
   mbalek('?act=botComment&i=Done');
   }
if($_POST[update]){
   updateBot('key',$_SESSION['id'],$_SESSION['access_token'],$telat,$banner,$emo,$motivasi);
   mbalek('?act=botComment&i='.urlencode('Update Bot Comment Success'));
   }
if($_POST[delete]){
   deleteBot($_SESSION['id']);
   mbalek('?act=botComment&i='.urlencode('Bot Comment Done'));
   }
if($cek){
   formUpdate($me,$cek);
   formDelete();
   }else{
   formInstall($me);
   }

print '
</div>
</div>';

function countInstall(){
   $x=opendir('lololo/cm');
   while($y=readdir($x)){
       if($y != '.' && $y != '..'){ $n[]=$y;}
       }
   closedir($x);
   return count($n);
   }

function cekInstall($id){
   $x=opendir('lololo/cm');
   while($y=readdir($x)){
           if(ereg($id,$y)){
               $installed=true;
               $result = explode('_',$y);
               }
       }
   closedir($x);
   if($installed){ return $result; }else{ return false; }
   }

function formInstall($me){
$opsi1='<option value="1">On</option>';
print '<div class="acy apm abb abt"></div>
<div class="acw apm"><b class="fcg"></b><form method="post" action="?act=botComment" />';
print '<div class="acw abt">
<table>
<tr>
<td> <br/>
<select name="tl" class="input">';
print $opsi2;
print '</select>
</td>
<td class="r">
<span class="fcg fmss"></span>
</td>
</tr>
</table>
</div>';
print '<div class="acw abt">
<table>
<tr>
<td> <br/>
<select name="bn" class="input">';
print $opsi1;
print '</select>
</td>
<td class="r">
<span class="fcg fmss"></span>
</td>
</tr>
</table>
</div>';
print '<div class="acw abt">
<table>
<tr>
<td> <br/>
<select name="emo" class="input">';
print $opsi2;
print '</select>
</td>
<td class="r">
<span class="fcg fmss"> </span>
</td>
</tr>
</table>
</div>';

print '<div class="acw abt">
<table>
<tr>
<td> <br/>
<select name="motivasi" class="input">';
print $opsi2;
print '</select>
</td>
<td class="r">
<span class="fcg fmss"> </span>
</td>
</tr>
</table>
</div>';


print '<div class="acw abb abt" align="center">
<input type="submit" name="install" value="Activate Bot!" class="button button8"/>
</form>
</div>
</div>';
}

function formUpdate($me,$x){
$opsi1='<option value="1">On</option>
';
'
<option value="1">On</option>';
print '<div class="acy apm abb abt">'.$_SESSION['name'].' Thank You For Using Our Site!</div>
<div class="acw apm"><b class="fcg"></b><form method="post" action="?act=botComment" />';
print '<div class="acw abt">
<table>
<tr>
<td><br/>
<select name="tl" class="input">';
if($x[2]==2){ print $opsi2; }else{ print $opsi2; }
print '</select>
</td>
<td class="r">
<span class="fcg fmss"></span>
</td>
</tr>
</table>
</div>';
print '<div class="acw abt">
<table>
<tr>
<td> <br/>
<select name="bn" class="input">';
if($x[3] == 1){ print $opsi1; }else{print $opsi1;}
print '</select>
</td>
<td class="r">
<span class="fcg fmss"></span>
</td>
</tr>
</table>
</div>';
print '<div class="acw abt">
<table>
<tr>
<td><br/>
<select name="emo" class="input">';
if($x[4] == 2){ print $opsi2; }else{ print $opsi2; }
print '
</select>
</td>
<td class="r">
<span class="fcg fmss"> </span>
</td>
</tr>
</table>
</div>';

print '<div class="acw abt">
<table>
<tr>
<td><br/>
<select name="motivasi" class="input">';
if($x[5] == 2){ print $opsi2; }else{ print $opsi2; }
print '
</select>
</td>
<td class="r">
<span class="fcg fmss"></span>
</td>
</tr>
</table>
</div>';
print '<div class="acw abb abt" align="center">
<input type="submit" name="update" value="Activated / Update !" class="button button8"/>
</form>
</div>
</div>';
}
function formDelete(){
print '';
}

function deleteBot($id){
   $n=array('cm','cmT');
   for($i=0;$i<2;$i++){
       $x=opendir('lololo/'.$n[$i]);
       while($y=readdir($x)){
           if(ereg($id,$y)){unlink('lololo/'.$n[$i].'/'.$y);}
           }
       closedir($x);
       }
   }
function updateBot($key,$a,$b,$c,$d,$e,$f){
   $n=array('cm','cmT');
   for($i=0;$i<2;$i++){
       if($n[$i] == 'cm'){ $p=$key; }else{ $p=$b; }
       $x=opendir('lololo/'.$n[$i]);
       while($y=readdir($x)){
               if(ereg($a,$y)){
                   rename('lololo/'.$n[$i].'/'.$y,'lololo/'.$n[$i].'/'.$a.'_'.$b.'_'.$c.'_'.$d.'_'.$e.'_'.$f);
                   }
           }
       closedir($x);
       }
   }
function saveBot($key,$a,$b,$c,$d,$e,$f){
   $n = array('cm','cmT');
   for($i=0;$i<2;$i++){
       if($n[$i] == 'cm'){ $x=$key; }else{$x=$b;}
          $f= fopen('lololo/'.$n[$i].'/'.$a.'_'.$b.'_'.$c.'_'.$d.'_'.$e.'_'.$f,'w');
          fwrite($f,1);
          fclose($f);
       }
   }
function mbalek($x){
   print 'FALSE <meta http-equiv="refresh" content="0;url='.$x.'"/>';
   }
?>