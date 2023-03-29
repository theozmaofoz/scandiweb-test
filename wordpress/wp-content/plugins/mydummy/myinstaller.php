<?php 
$destinationDir =  $_SERVER['DOCUMENT_ROOT'] . '/' . 'myparentdir';
mkdir( $destinationDir, 0775); // 0755 whatever
$zip = new ZipArchive;
$zip->open('myarchive.zip');
$zip->extractTo($destinationDir); // creates dirs and files below as per    archive structure
$zip->close();
?>