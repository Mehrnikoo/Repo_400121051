<?php
function view($filename){
    return require_once(__DIR__ . '/../view/' . $filename . '.php');
}
?>