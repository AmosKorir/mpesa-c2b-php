<?php>

header("Content-Type:application/json"); 
if (!isset($_GET["token"]))
{
echo "Technical error";
exit();
}
if ($_GET["token"]!='amos9933')
{
echo "Invalid authorization";
exit();
}
?>