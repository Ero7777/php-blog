<?php
$page = "";
$title = "Home";
if(!empty($_GET['page'])){
    $page=$_GET["page"];
}

require "header.php";
if ($page=''){
    require "templates\index.php";
}else{

}
require "aside.php";
require "footer.php";

?>


