<?php
$page = "";
$title = "Home";
if(!empty($_GET['page'])){
    $page=$_GET["page"];
}

require "templates\header.php";
if ($page==''){
    require "templates\index.php";
}else{

}
require "templates\aside.php";
require "templates\footer.php";

?>


