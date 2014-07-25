<?php 
    $title="Product Search";
    $keywords ="";
    if(isset($_POST["keywords"])) $keywords = $_POST["keywords"];
    $content ="$keywords";
    include_once "templates/sitetemplate.php";
?>