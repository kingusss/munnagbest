<center>
<?php 
    // integer starts at 0 before counting
    $i = 0; 
    $dir = 'lololo/cmT/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
    // prints out how many were in the directory
    echo "Total Website Users: <font color=#58FAF4>$i</font>
";
?>
<br>
<font size="2"><span style="background-color:yellow"><a class="fcs" href="keluar.php">Click Here To Add Another Token !</a></span></font>
</center>
<center> <audio controls="" autoplay="">
  <source src="bgm.mp3">
  Your browser does not support the audio element.
</audio>
</center>