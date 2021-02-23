<?php
session_start();
// if(!isset($_SESSION['nurse']['email']))
// {
//     header('location: logout.php');
// }
// if($_SESSION['nurse']['email'] == "")
// {
//     header('location: logout.php');
// }
//error_reporting(1);
include_once('assets/lib/dbcxn.inc.php');
// Include all classes in the classes folder
//var_dump(glob("class/*.php"));

foreach (glob("class/*.php") as $filename) {
	include_once($filename);
}
// User.login
$op = $_REQUEST['op'];
//user.register
//$op =  $dbobject->DecryptData("pacific",$op);
$operation  = array();
$operation = explode(".", $op);


// getting data for the class method
$params = array();
if(count($_FILES) > 0)
{
    $_REQUEST['_files'] = $_FILES;
}
$params = $_REQUEST;
$data   = [$params];
//file_put_contents("kkk.txt",json_encode($_FILES)." -- ".json_encode($_REQUEST));

//////////////////////////////
/// callling the method of the class
$foo = new $operation[0];
print_r(call_user_func_array(array($foo, trim($operation[1])), $data));
//var_dump($foo);
//}else
//{
//	echo "invalid token";
//}