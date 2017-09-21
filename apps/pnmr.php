<?php

include('functions.php');

error_reporting(E_ERROR | E_WARNING);

$name       = $_POST["name"];
$m_desc     = $_POST["m_desc"];
$m_time     = $_POST["m_time"];
$fat        = $_POST["fat"];
$m_duration = $_POST["m_duration"];
$m_location = $_POST["m_location"];
$rec_no     = $_POST["rec_no"];
$rec_yes    = $_POST["rec_yes"];
$recur_every= $_POST["recur_every"];
$recur_freq = $_POST["recur_freq"];
$end_date   = $_POST["end_date"];
$st_date    = $_POST["st_date"];
$m_time_zone= $_POST["m_time_zone"];

$uid = "23244";

/*
name
m_desc
m_time
m_duration
m_location
rec_no
rec_yes
recur_every
recur_freq
end_date
st_date

*/

$meet = new Meeting($name, $uid);
$meet->mdate = returnMySQLDateFromBSDate($m_time);
$meet->mduration = $m_duration;
$meet->m_desc = clean_up_string_for_insert($m_desc);
$meet->m_owner = $uid;
$meet->m_location = $m_location;
$meet->m_timezone = $m_time_zone;
$meet->save();

echo "<html>\n";
echo "<head>\n";
echo "<meta http-equiv=\"refresh\" content=\"0;URL='/apps/'\" />";
echo "</head>\n";


/*
echo "name        = " . $name . "<br>\n";
echo "m_desc      = " . $m_desc . "<br>\n";
echo "m_time      = " . $m_time . "<br>\n";
echo "m_time cleaned = " . returnMySQLDateFromBSDate($m_time) . "<BR>\n";
echo "fat         = " . $fat . "<br>\n";
echo "m_duration  = " . $m_duration . "<br>\n";
echo "m_loction   = " . $m_location . "<br>\n";
echo "rec_no      = " . $rec_no . "<br>\n";
echo "rec_yes     = " . $rec_yes . "<br>\n";
echo "recur_every = " . $recur_every . "<br>\n";
echo "recur_freq  = " . $recur_freq . "<br>\n";
echo "end_date    = " . $end_date . "<br>\n";
echo "st_date     = " . $st_date . "<br>\n";
*/
echo "</html>\n";


?>

