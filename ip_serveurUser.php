<?php
/**
 * Created by PhpStorm.
 * User: coda
 * Date: 19/06/17
 * Time: 09:53
 */
// echo $_SERVER["REMOTE_ADDR"]; ?><!-- --><?// echo $_SERVER['HTTP_USER_AGENT'] ?>

<?php
$result='';

function test_nav($item)
{ global $result;
    if ((stripos($_SERVER['HTTP_USER_AGENT'],$item)!==false) && empty($result)) $result=$item;
}

$Navigateur=array("firefox","chrome","safari","opera","msi");
array_walk($Navigateur,'test_nav');
if (empty($result)) $result='autre navigateur';
echo "<p>Navigateur:".$result."</p><hr>";