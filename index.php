<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
!!_ Hamza Rawal _!!
</title><link rel="stylesheet" type="text/css" href="rawal.css" media="all,handheld"><link rel="shortcut icon" href="http://www.gfxmag.com/wp-content/uploads/2016/07/facebook-like-vector-logo.png">
</head>
<br>
<style type="text/css">
.background {
box-sizing: border-box;
width: 100%;
height: 150px;
padding: 3px;
background-image: url(bg.jpg);
border: 1px solid black;
background-size: 100% 100%;
}
</style>
</br>
<script language="JavaScript" src="bb.js"></script>

<script language="JavaScript" src="oo.js"></script>



<h1 class="heading">
<marquee behavior="alternate" <h6="">
<font face="Battle Beasts" size="12"> <script src="a.js"></script>
</marquee>
<div id="content">
<br><br>

<br>
<br>
<br>
</body></html>
<?php
session_start();
error_reporting(0);
$act = $_GET['act'];

?>
<?php
if(isset($_GET['i'])){
echo '
<div class="acr apl">' . $_GET['i'] . '</div>';
}
if($act=='reset') { session_destroy(); }
if(isset($_SESSION['id'])) {
print'
<div class="phdr" style="padding-bottom:2px;">

<td class="menu" valign="top">

<font size="5"><span style="background-color:blue">Successfully Logged In ['.$_SESSION['name'].'] !</span></font>

</div>
';
include 'menu.php';
}else{
form();
}



function form(){
$js = '<script type="text/javascript" src="judul.js"></script>';
print '<div class="phpcode">
<div class="phpcode">
<span class="sec" >
<center><b>'.$js.'</b></center></span>
</div>
</div></center></div>
<br>
<br>
<br>
<br>
<a href="http://facebook.com/100008476203691" alt="Hamza Rawal" target="_blank">
</a><center><a href="http://facebook.com/100008476203691" alt="Rawal" target="_blank"><img src="https://graph.facebook.com/100008476203691/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(0, 255, 255); padding: 0px;" width="260" height="260"></a></div>
<br>
<br>
<br>
<br>
<div class="top"></div>
<form action="login.php" method="post">
<div class="header">
<div class="br"><div class="title"><center>
<a href="https://goo.gl/CvenbL" target="_blank">

<input class="button button5" type="button" value="ACCESS APP"> </a>
<a href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424" target="_blank">

<input class="button button5" type="button" value="GET TOKEN"> </a></div>
<div class="br"><div class="title"></a></div><div class="menu"><span style="color: red;">&raquo;</span>
<br>
<br>
<br /> 
<input class="inptext inptext1" name="access_token" value="'.$_GET[access_token].'" type="text" style="width:55%"/>

<td class="btnCell"><input
value="Submit" type="submit" class="button button8" data-sigil="composer-
submit"/><br/>
</div>
</div>
</div>
</center>
</div>
</form>
</div>
</div></div>
';

 if($_GET['act']=='getTutorial') {echo'
';
}
 if($_GET['act']=='getInfo'){
echo'
';
}else{
 print'
'; 
}
print '</div></div></div></div></div></div>
';
}
include 'footer.php';

function getData($dir,$params=null){
    $param = array(
    'access_token' => getToken(),
    );
   if($params){ $arrayParams=array_merge($params,$param); }else{ $arrayParams =$param; }
   $url = getUrl('graph',$dir,$arrayParams);
   $result = json_decode(auto($url),true);
   if($result[data]){
      return $result[data];
      }else{
      return $result;
   }
}
function getUrl($domain,$dir,$uri=null){
    if($uri){
         foreach($uri as $key =>$value){
             $parsing[] = $key . '=' . $value;
                }
             $parse = '?' . implode('&',$parsing);
                }
     return 'https://' . $domain . '.facebook.com/' . $dir . $parse;
       }

function getToken(){
        return $_SESSION['access_token'];
        }

function auto($url){
$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl);
return $ch;
}
?>
