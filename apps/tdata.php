<?php

include('functions.php');

error_reporting(E_ERROR | E_WARNING);

echo "<html>\n";

$sql = "SELECT meetingid FROM tbl_meeting ORDER BY meetingid DESC limit 1000";
$ids = getArray($sql);

foreach ($ids as $val)
{
        $id = $val['meetingid'];
        $i = 0;
        $iCount = rand(1,20);
        echo "" . $iCount . "<BR>\n";
        while ($i  < $iCount)
        {
           $sql = "SELECT uid FROM tbl_user ORDER by RAND() LIMIT 1";
           $user = getData($sql);
           $sql = "SELECT COUNT(*) FROM tbl_attendees WHERE meetingid = " . $id . " AND attendeeid = " . $user;
           #echo "sql = " . $sql . "<BR>\n";
           $howMany = getData($sql);
           if ($howMany > 0)
           {
           }
	   else
           {
             $sql = "INSERT INTO tbl_attendees VALUES (" . $id . ", " . $user . " )";
             echo "sql = " . $sql . "<BR>\n";
             updateData($sql);
 	   }
           echo " = " . $i . "<BR>\n";
           $i = $i + 1;
        }
}


#$sql = "select addtime(concat_ws(' ','2017-04-27' + interval rand()*31 day ,'00:00:00'),sec_to_time(floor(0 + (rand() * 86401))))";

echo "</html>\n";


?>

