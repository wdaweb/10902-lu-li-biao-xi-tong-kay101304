<?php 

include_once "../base.php";

$db=new DB("intro");
$id=$_POST['id'];

print_r($_POST);
if(!empty($_POST)){
    echo $db->save($_POST);
    
}

to("../admin.php");
?>