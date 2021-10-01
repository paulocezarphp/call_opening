<?php

@$url_pages = $_GET['page'];

if($url_pages == "home"){

	include("page-home.php");

}elseif($url_pages == "notifications"){
    
    include("page-notifications.php");

}elseif($url_pages == "departments"){
    
    include("page-departments.php");

}elseif($url_pages == "files"){
    
    include("page-files.php");

}elseif($url_pages == "services"){
    
    include("page-services.php");

}elseif($url_pages == "contracts"){
    
    include("page-contracts.php");

}elseif($url_pages == "products"){
    
    include("page-products.php");

}else{ 

	include("page-home.php");

}

?>