<?php 
    $dir = opendir('cmT/'); # This is the directory it will count from
    $i = 0; # Integer starts at 0 before counting

    # While false is not equal to the filedirectory
    while (false !== ($file = readdir($dir))) { 
        if (!in_array($file, array('.', '..') and !is_dir($file)) $i++;
    }

    echo "<center><div style="font-family: Segoe UI Light;font-size: 15pt;text-shadow: 0 0 15px 
#000000, 0 0 11px #000000, 0 0 5px #000000;color: #FFF"><font color="white">Total Website Users:</font> <font color=#58FAF4>$i</font></center>
"; # Prints out how many were in the directory
?>
</div>