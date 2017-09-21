<?php

include('functions.php');

error_reporting(E_ERROR | E_WARNING);

echo "<html>\n";



echo returnMySQLDateFromBSDate("5/17/2017 6:00 AM") . "<BR>";
echo returnMySQLDateFromBSDate("1/1/2017 11:59 PM") . "<BR>";
echo returnMySQLDateFromBSDate("5/17/2017 6:00 PM") . "<BR>";
echo returnMySQLDateFromBSDate("5/17/2017 6:00 PM") . "<BR>";
 
echo "</html>\n";


?>

