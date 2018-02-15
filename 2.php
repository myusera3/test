<?php 
file_put_contents("kodexplorer.zip",file_get_contents("http://static.kodcloud.com/update/download/kodexplorer4.25.zip"));

 $zip = new ZipArchive; 
 $res = $zip->open('kodexplorer.zip'); 
 if ($res === TRUE) { 
     echo 'ok'; 
    $zip->extractTo('kd'); 
     $zip->close(); 
 } else { 
     echo 'failed, code:' . $res; 
 }  ?>