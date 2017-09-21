<?php 

include("functions.php");

error_reporting(E_ERROR | E_WARNING);

# authenticity_token
# title
# owner
# desc

$i_at  = $_POST["authenticity_token"];
$i_title  = $_POST["title"];
$i_owner  = $_POST["owner"];
$i_desc   = $_POST["desc"];

echo "<html>\n";
if (strlen($i_at) > 0)
{
  $sql = "SELECT COUNT(*) FROM tbl_form_keys WHERE keystr = '" . $i_at . "'";
  $cnt = getData($sql);
  if ($cnt > 0)
  {
     $i_title = mysql_real_escape_string(trim($i_title));
     $i_desc = mysql_real_escape_string(trim($i_desc));
     $i_owner = mysql_real_escape_string(trim($i_owner));
     $sql = "INSERT INTO tbl_test_table (title, description, owner, ts) VALUES ('" . $i_title . "', '" . $i_desc . "','" . $i_owner . "', NOW())"; 
     updateData($sql);
     echo "<META http-equiv=\"refresh\" ";
    echo "content=\"0;URL=/apps/pp.php\">";
  }
  else
  {
     echo "token not found";   
  }
}

echo "</html>\n";

?>

