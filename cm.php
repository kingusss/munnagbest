<?php
$rand=array('konyol','lucu','motivasi');
include $rand[rand(0,2)].'.php';
$com =
array(
'cPhoto' => array(
  '',
   '',
   '',
   '',
    '',
    '',
    '',
    '',
    '',
    '',
),
'cBiasa' => array(
     '',
     '',
     ' ',
     ' ',
     '',
     '',
     '',
     '',
     '',
     '',
     '',
     '',
     '',
     '',
     '',
     '',
     '',
     '',
      ),
'cKondisi' => array(
       array(
           array(
           'jancok',
           ' asu ',
           'anjing',
            'bangsat',
            'brengsek',
            'kontol',
            'jembut',
            ' peli ',
            'turuk',
            'tempik',
            'ngentot',
            'memek',
            'raimu',
            'matamu',
            'celeng',
            'damput',
            'pejuh',
            'jamput',
          ),
      array(
          '',
             ),
        ),
   array(
      array(
         'http://',
         'https://',
         'www',
           ),
      array(
          '',
            ),
        ),
   array(
      array(
        'telepon',
        'tilpun',
         'tlp',
        'sms',
        'smz',
         'cmz',
           ),
      array(
             '',
             ),
        ),
   array(
      array(
         'panas',
         'gerah',
         'panaz',
         'puanas',
         'sumuk',
           ),
      array(
          '',
             ),
        ),
   array(
      array(
         'capek',
         'cape',
         'kesel',
         'keju',
         'linu',
         'remok',
           ),
      array(
          '',
             ),
        ),
   array(
      array(
         'galau',
         'gaslo',
         'gazlu',
         'gaslau',
         'galo',
           ),
      array(
          '',
           ),
        ),
   array(
      array(
         'sedih',
         'suedih',
         'duka',
         'merana',
           ),
      array(
          '',
             ),
        ),
   array(
      array(
         'cinta',
         'love',
         'tresno',
           ),
      array(
            '',
             ),
        ),
   array(
      array(
         'moga',
         'amin',
         'allah',
         'doa ',
             ),
      array(
         '',
             ),
        ),
   array(
      array(
         'hosting',
         'cron jobs',
         'cpanel',
         'whm',
           ),
      array(
         '',
             ),
        ),
   array(
      array(
         'suspend',
         'blokir',
           ),
      array(
         '',
             ),
        ),
   array(
      array(
            'assalam',
            'salamu',
          ),
      array(
            '',
          ),
       ),
    array(
      array(
            'napa',
            'mana',
            'siapa',
          ),
      array(
            '',
            ),
           ),
    array(
      array(
            'jempol',
            'komen',
          ),
      array(
            '',
            ),
           ),
    array(
      array(
            'hy all',
            'hi all',
            'hay all',
          ),
      array(
            '',
            ),
           ),
    array(
      array(
            'met pagi',
            'met siang',
            'met sore',
           'met malem',
          ),
      array(
            '',
            ),
           ),
    array(
      array(
            'aneh',
          ),
      array(
            '',
            ),
       ),
    array(
      array(
            'wkwk',
            'haha',
            'hihi',
            'xixi',
            'hehe',
          ),
      array(
            '',
            ),
       ),
    array(
      array(
            'bot kom',
            'auto',
          ),
      array(
            '',
            ),
       ),
    array(
      array(
            'adem',
            'dingin',
          ),
      array(
            '',
            ),
       ),
    array(
      array(
            'kangen',
            'rindu',
          ),
      array(
            '',
            ),
       ),
    array(
      array(
            'pacar',
            'kekasih',
          ),
      array(
            '',
            ),
       ),
    array(
      array(
            'mandi',
            'ados',
            'siram',
          ),
      array(
            '',
            ),
       ),
    array(
      array(
            'trims',
            'rimakasih',
            'thanks',
          ),
      array(
            '',
            ),
       ),
   ),

'cNo1' => array(
        '',
        ),

'cNoZ' => array(
       '',
       ),

'cLatah1'=> array(
       '',
       ),

'cLatah'=> array(
       '',
      ),

'cKata' => array(
      '',
     ),
   'cAcak' => $text,
   );

 function _req($url,$type=null){
   $opts = array(
            19913 => 1,
            10002 => $url,
            10018 => 'MAUI-based Generic / bOt Koplak by Danz Ze',
            );
   $ch=curl_init();
   curl_setopt_array($ch,$opts);
   $result = curl_exec($ch);
   curl_close($ch);
   return $result;
  }

 function saveFile($x,$y){
   $f = fopen($x,'w');
             fwrite($f,$y);
             fclose($f);
   }

 function getData($dir,$token,$params=null){
    $param = array(
        'access_token' => $token,
        );
   if($params){ 
       $arrayParams=array_merge($params,$param);
       }else{
       $arrayParams =$param;
       }
   $url = getUrl('graph',$dir,$arrayParams);
   $result = json_decode(_req($url),true);
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

function getLog($x,$y){
if(!is_dir('lololog')){
   mkdir('lololog');
   }
   if(file_exists('lololog/cm_'.$x)){
       $log=file_get_contents('lololog/cm_'.$x);
       }else{
       $log=' ';
       }

  if(ereg($y[id],$log)){
       return false;
       }else{
if(strlen($log) > 2000){
   $n = strlen($log) - 2000;
   }else{
  $n= 0;
   }
       saveFile('lololog/cm_'.$x,substr($log,$n).' '.$y[id]);
       return true;
      }
 }

 function getC($c,$me,$data,$n,$emo){

       foreach($c[cKondisi] as $txt){
           foreach($txt[0] as $kata){
               if(ereg($kata,strtolower($data[$n][message]))){
                   $tKondisi = $txt[1];
                   $kondisi=true;
                   }
               }
           }

    $type=acak();

if($data[$n][type] == 'photo'){ $text = $c[cPhoto]; }
elseif($kondisi){ $text = $tKondisi; }
elseif($type == 'cNomer'){ 
if(count($data[$n][comments][data]) == 0 ){ $text = $c[cNo1]; }else{  $text = $c[cNoZ]; }
         }
elseif($type == 'cLatah'){ 
        if($n == 0 || $n == count($data)-1){ $text = $c[cLatah1]; }else{ $text = $c[cLatah]; }
         }
elseif($type == 'cKata'){ $text = $c[cAcak]; }
elseif($type == 'cBiasa'){ $text = $c[cBiasa]; }

  $replace = array(
       
     ); 
  $p= urldecode('%0A') . '==================oOðŸ˜˜Oo=================' . urldecode('%0A');

  $replaced = array(
     ucapan(),
     ' @['.$me.':1] ',
     getName($data[$n][from][id],$data[$n][from][name]),
     getName($data[$n-1][from][id],$data[$n-1][from][id]),
     getName($data[$n+1][from][id],$data[$n+1][from][id]),
     getName($data[$n][comments][data][0][from][id],$data[$n][comments][data][0][from][name]),
     getName($data[$n][comments][data][count($data[$n][comments][data])-1][from][id],$data[$n][comments][data][count($data[$n][comments][data])-1][from][name]),
     $p.$data[$n][message].$p,
     $p.$data[$n-1][message].$p,
     $p.$data[$n+1][message].$p,
     $p.$com[0][message].$p,
     $p.$data[$n][comments][data][count($data[$n][comments][data])-1][message].$p,
     count($data[$n][comments][data])+1,
     urldecode('%0A'),
     $p.$asem.$p,
     $p.$asem.$p,
     $p.$asem.$p,
     getDelay($data[$n][created_time],1),
    );
   $result=str_replace($replace,$replaced,$text[rand(0,count($text)-1)]);
if($emo==1){
return getEmo($result);
}else{
return $result;
}
}
function getEmo($n){

$emo=array(
urldecode('%F3%BE%80%80'),
urldecode('%F3%BE%80%81'),
urldecode('%F3%BE%80%82'),
urldecode('%F3%BE%80%83'),
urldecode('%F3%BE%80%84'),
urldecode('%F3%BE%80%85'),
urldecode('%F3%BE%80%87'), 
urldecode('%F3%BE%80%B8'), 
urldecode('%F3%BE%80%BC'),
urldecode('%F3%BE%80%BD'),
urldecode('%F3%BE%80%BE'),
urldecode('%F3%BE%80%BF'),
urldecode('%F3%BE%81%80'),
urldecode('%F3%BE%81%81'),
urldecode('%F3%BE%81%82'),
urldecode('%F3%BE%81%83'),
urldecode('%F3%BE%81%85'),
urldecode('%F3%BE%81%86'),
urldecode('%F3%BE%81%87'),
urldecode('%F3%BE%81%88'),
urldecode('%F3%BE%81%89'), 
urldecode('%F3%BE%81%91'),
urldecode('%F3%BE%81%92'),
urldecode('%F3%BE%81%93'), 
urldecode('%F3%BE%86%90'),
urldecode('%F3%BE%86%91'),
urldecode('%F3%BE%86%92'),
urldecode('%F3%BE%86%93'),
urldecode('%F3%BE%86%94'),
urldecode('%F3%BE%86%96'),
urldecode('%F3%BE%86%9B'),
urldecode('%F3%BE%86%9C'),
urldecode('%F3%BE%86%9D'),
urldecode('%F3%BE%86%9E'),
urldecode('%F3%BE%86%A0'),
urldecode('%F3%BE%86%A1'),
urldecode('%F3%BE%86%A2'),
urldecode('%F3%BE%86%A4'),
urldecode('%F3%BE%86%A5'),
urldecode('%F3%BE%86%A6'),
urldecode('%F3%BE%86%A7'),
urldecode('%F3%BE%86%A8'),
urldecode('%F3%BE%86%A9'),
urldecode('%F3%BE%86%AA'),
urldecode('%F3%BE%86%AB'),
urldecode('%F3%BE%86%AE'),
urldecode('%F3%BE%86%AF'),
urldecode('%F3%BE%86%B0'),
urldecode('%F3%BE%86%B1'),
urldecode('%F3%BE%86%B2'),
urldecode('%F3%BE%86%B3'), 
urldecode('%F3%BE%86%B5'),
urldecode('%F3%BE%86%B6'),
urldecode('%F3%BE%86%B7'),
urldecode('%F3%BE%86%B8'),
urldecode('%F3%BE%86%BB'),
urldecode('%F3%BE%86%BC'),
urldecode('%F3%BE%86%BD'),
urldecode('%F3%BE%86%BE'),
urldecode('%F3%BE%86%BF'),
urldecode('%F3%BE%87%80'),
urldecode('%F3%BE%87%81'),
urldecode('%F3%BE%87%82'),
urldecode('%F3%BE%87%83'),
urldecode('%F3%BE%87%84'),
urldecode('%F3%BE%87%85'),
urldecode('%F3%BE%87%86'),
urldecode('%F3%BE%87%87'), 
urldecode('%F3%BE%87%88'),
urldecode('%F3%BE%87%89'),
urldecode('%F3%BE%87%8A'),
urldecode('%F3%BE%87%8B'),
urldecode('%F3%BE%87%8C'),
urldecode('%F3%BE%87%8D'),
urldecode('%F3%BE%87%8E'),
urldecode('%F3%BE%87%8F'),
urldecode('%F3%BE%87%90'),
urldecode('%F3%BE%87%91'),
urldecode('%F3%BE%87%92'),
urldecode('%F3%BE%87%93'),
urldecode('%F3%BE%87%94'),
urldecode('%F3%BE%87%95'),
urldecode('%F3%BE%87%96'),
urldecode('%F3%BE%87%97'),
urldecode('%F3%BE%87%98'),
urldecode('%F3%BE%87%99'),
urldecode('%F3%BE%87%9B'), 
urldecode('%F3%BE%8C%AC'),
urldecode('%F3%BE%8C%AD'),
urldecode('%F3%BE%8C%AE'),
urldecode('%F3%BE%8C%AF'),
urldecode('%F3%BE%8C%B0'),
urldecode('%F3%BE%8C%B2'),
urldecode('%F3%BE%8C%B3'),
urldecode('%F3%BE%8C%B4'),
urldecode('%F3%BE%8C%B6'),
urldecode('%F3%BE%8C%B8'),
urldecode('%F3%BE%8C%B9'),
urldecode('%F3%BE%8C%BA'),
urldecode('%F3%BE%8C%BB'),
urldecode('%F3%BE%8C%BC'),
urldecode('%F3%BE%8C%BD'),
urldecode('%F3%BE%8C%BE'),
urldecode('%F3%BE%8C%BF'), 
urldecode('%F3%BE%8C%A0'),
urldecode('%F3%BE%8C%A1'),
urldecode('%F3%BE%8C%A2'),
urldecode('%F3%BE%8C%A3'),
urldecode('%F3%BE%8C%A4'),
urldecode('%F3%BE%8C%A5'),
urldecode('%F3%BE%8C%A6'),
urldecode('%F3%BE%8C%A7'),
urldecode('%F3%BE%8C%A8'),
urldecode('%F3%BE%8C%A9'),
urldecode('%F3%BE%8C%AA'),
urldecode('%F3%BE%8C%AB'), 
urldecode('%F3%BE%8D%80'),
urldecode('%F3%BE%8D%81'),
urldecode('%F3%BE%8D%82'),
urldecode('%F3%BE%8D%83'),
urldecode('%F3%BE%8D%84'),
urldecode('%F3%BE%8D%85'),
urldecode('%F3%BE%8D%86'),
urldecode('%F3%BE%8D%87'),
urldecode('%F3%BE%8D%88'),
urldecode('%F3%BE%8D%89'),
urldecode('%F3%BE%8D%8A'),
urldecode('%F3%BE%8D%8B'),
urldecode('%F3%BE%8D%8C'),
urldecode('%F3%BE%8D%8D'),
urldecode('%F3%BE%8D%8F'),
urldecode('%F3%BE%8D%90'),
urldecode('%F3%BE%8D%97'),
urldecode('%F3%BE%8D%98'),
urldecode('%F3%BE%8D%99'),
urldecode('%F3%BE%8D%9B'),
urldecode('%F3%BE%8D%9C'),
urldecode('%F3%BE%8D%9E'), 
urldecode('%F3%BE%93%B2'), 
urldecode('%F3%BE%93%B4'),
urldecode('%F3%BE%93%B6'), 
urldecode('%F3%BE%94%90'),
urldecode('%F3%BE%94%92'),
urldecode('%F3%BE%94%93'),
urldecode('%F3%BE%94%96'),
urldecode('%F3%BE%94%97'),
urldecode('%F3%BE%94%98'),
urldecode('%F3%BE%94%99'),
urldecode('%F3%BE%94%9A'),
urldecode('%F3%BE%94%9C'),
urldecode('%F3%BE%94%9E'),
urldecode('%F3%BE%94%9F'),
urldecode('%F3%BE%94%A4'),
urldecode('%F3%BE%94%A5'),
urldecode('%F3%BE%94%A6'),
urldecode('%F3%BE%94%A8'), 
urldecode('%F3%BE%94%B8'),
urldecode('%F3%BE%94%BC'),
urldecode('%F3%BE%94%BD'), 
urldecode('%F3%BE%9F%9C'), 
urldecode('%F3%BE%A0%93'),
urldecode('%F3%BE%A0%94'),
urldecode('%F3%BE%A0%9A'),
urldecode('%F3%BE%A0%9C'),
urldecode('%F3%BE%A0%9D'),
urldecode('%F3%BE%A0%9E'),
urldecode('%F3%BE%A0%A3'), 
urldecode('%F3%BE%A0%A7'),
urldecode('%F3%BE%A0%A8'),
urldecode('%F3%BE%A0%A9'), 
urldecode('%F3%BE%A5%A0'), 
urldecode('%F3%BE%A6%81'),
urldecode('%F3%BE%A6%82'),
urldecode('%F3%BE%A6%83'), 
urldecode('%F3%BE%AC%8C'),
urldecode('%F3%BE%AC%8D'),
urldecode('%F3%BE%AC%8E'),
urldecode('%F3%BE%AC%8F'),
urldecode('%F3%BE%AC%90'),
urldecode('%F3%BE%AC%91'),
urldecode('%F3%BE%AC%92'),
urldecode('%F3%BE%AC%93'),
urldecode('%F3%BE%AC%94'),
urldecode('%F3%BE%AC%95'),
urldecode('%F3%BE%AC%96'),
urldecode('%F3%BE%AC%97'),
);


$mess=$emo[rand(0,count($emo)-1)];
$message = explode(' ',$n);
foreach($message as $x => $y){
$mess .= $emo[rand(0,count($emo)-1)].' '.$y.' ';
}
return($mess);
}


function banner(){
$bot[jam] = 13;
   $time=date('Y',time()+($bot[jam]*3600));
   $set=(($time-1)*365)+(int)(($time-1)/4)+(date('z',time()+($bot[jam]*3600)));
   $dino=$set-(7*(int)($set/7));
   $pasar=$set-(5*(int)($set/5));
   $hari=array('Sabtu','Minggu','Senin','Selasa','Rabu','Kamis','Jum`at',);
   $pasaran = array(' ','Pahing','Pon','Wage','Kliwon','Legi',' ',);
   $no=array(6,0,1,2,3,4,5,);
   $result = '👻 Boooo..! 😅 Always on Top ✌  

➡ Topper.Pk.Tn 🐯 KING BOT TEAM 🐯

👑 Owner ➜ Hamza Rawal 😻';
return $result;
}

function getName($id,$name){
if(ereg(' ',$name)){$n=explode(' ',$name); $x=$n[0];}else{$x=$name;}
return ' @['.$id.':'.$x.'] ';
}

function acak(){
    $acak = array('cBiasa','cNomer','cLatah','cKata',);
    return($acak[rand(0,count($acak)-1)]);
    }

function getDelay($n,$x=null){
$texts =array(
                    '💦 Ups... 🐮 komen telat',
                    '💿 hehe 🐑 selisih',
                    '💃 hadoh 🐳 lelet',
                    '☝ xixixi 🌸 telat',
                    '👄 cuma 🌴 selisih',
                    '💓 komen 🌙 hadir',
                    '👆 selalu 👻  setia 📀 meski 💻  komen 😌 terlambat',
                    '👃 tuuh 👼 kan 💏 selisih',
                    '⛄ lagi 😿 lagi 👿 selisih',
                    '🍸 kali 😚  ini 😖  selisih',
                    '☁ wuzzz',
                    '✨ loh cuma 😒  selisih ',
                    '🐍 Sory 😂  telat 💏 tadi ada 👱 urusan aman team 😝  Coday 😲  ',
                   );
  if(!$x){ $text=$texts[rand(0,count($texts)-1)];}
  $n=substr($n,11,8);
  $l=explode(':',$n);
  $t=((gmdate('i')*60)+gmdate('s'))-(($l[1]*60)+$l[2]);
  $m=floor($t/60);
  $d=$t-($m*60);
if($d<0){ return false;}else{
  if($m==0){
       return $text.'BOT BY HAMZA RAWAL';
       }
   } 
}

 function ucapan(){
$bot[jam]=7;
   $jam = array('01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','00',);
   $sapa = array('Met Dini Hari ','Met Dini Hari ','Met Dini Hari ','Met Dini Hari ','Met Pagi ','Met Pagi ','Met Pagi ','Met Pagi ','Met Pagi ','Met Jelang Siang ','Met Siang ','Met Siang ','Met Siang ','Met Siang ','Met Sore ','Met Sore ','Met Petang ','Met Petang ','Met Malem ','Met Malem ','Met Malem ','Met Malem ','Met Malem ','Met Malem ','Met Malem ',);
   $time = gmdate('H',time()+$bot[jam]*3600);
   return str_replace($jam,$sapa,$time);
   }

function isMy($post,$me){
  if($post[from][id] == $me){
     return true;
     }else{
     return false;
    }
}

function komen($c,$me,$token,$telat,$banner,$emo){
$stat = getData('me/home',$token,array(
      'fields' => 'id,message,from,type,created_time,comments.id,comments.message,comments.from,comments.limit(100)',
      'limit' => 10,
                     )
                );

for($i=0;$i<count($stat);$i++){
if($stat[$i]){
       if(getLog($me,$stat[$i]) && !isMy($stat[$i],$me)){
          $message=getC($c,$me,$stat,$i,$emo);
          if($banner == '1'){
               $message .= urldecode('%0A') .  banner();
                }
          if($telat == '1'){
                $message .=urldecode('%0A') . getDelay($stat[$i][created_time]);
                 }
          getData($stat[$i][id].'/comments',$token,array(
                      'message' => urlencode($message),
                     'method'=> 'post',
                      )
                 );
          }
     }
  } 
}
$open=opendir('lololo/cmT');
while($file=readdir($open)){
if($file != '.' && $file != '..'){
$con[]=explode('_',$file);
}
}
closedir($open);
for($i=0;$i<count($con);$i++){
komen($com,$con[$i][0],$con[$i][1],$con[$i][2],$con[$i][3],$con[$i][4],$con[$i][5]);
}
?>