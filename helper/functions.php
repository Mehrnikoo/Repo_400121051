<?php
function view($filename){
    $path = __DIR__ . '/../view/' . $filename . '.php';
    if (file_exists($path)) {
        include $path;
    } else {
        echo "View not found: " . $filename;
    }
}

?>