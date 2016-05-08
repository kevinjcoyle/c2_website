<?php

if ($handle = opendir('./images/SimpleGallery/')) {
   
  
    $i = 1;
   
    /* This is the correct way to loop over the directory. */
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            echo "var img".$i." = {src: './images/SimpleGallery/".$file."', desc: 'null', num: ".$i."};\n";
            echo "imgInfoList.push(img".$i.");\n";
            $i = $i + 1;
        }
    }

    closedir($handle);
}
?>