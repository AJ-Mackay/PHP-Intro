<?php

$file = "example.txt";

if($handle = fopen($file, 'r')) {
    echo $content = fread($handle, filesize($file)); // Each byte equals a character

    fclose($handle);
} else {
    echo "Not able to write to file";
}



?>