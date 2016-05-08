<?php
    
    $result = 0;

    $imgFilename = $_GET["src"];

    // make file relative
    $relativeFile = './images/SimpleGallery/'.$imgFilename;
    
    $result = unlink($relativeFile);
    
    echo $result;

?>