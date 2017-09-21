<?php

include('functions.php');

error_reporting(E_ERROR | E_WARNING);

$tok_frm   = $_GET["tok_frm"];
$id_list   = $_GET["id_list"];
$tnww      = $_GET["tnww"];
$meetingid = $_GET["mid"];

$uid = encrypt_decrypt("decrypt", $tnww);
$success = FALSE;
$added = 0;

/*
echo "t = " . $tok_frm . "<BR>";
echo "il = " . $id_list . "<BR>";
echo "tnww = " . $tnww . "<BR>";
echo "m = " . $meetingid . "<BR>";
*/

if (!empty($uid))
{
    if (!empty($meetingid))
    {
        if (!empty($id_list))
        {
            if (!empty($tok_frm))
            {
                $real = isFormKeyLegit($uid, $tok_frm);
                if ($real)
                {
                    $i = 0;
                    $success = TRUE;
                    $ids = explode(",", $id_list);
                    foreach ($ids as $val) 
                    {
                        
                        if (strlen($val > 2))
                        {
                            $sql = "SELECT COUNT(*) FROM tbl_address_book WHERE addressid = " . $val;
                            $idreal = getData($sql);
                            if ($idreal > 0)
                            {
                                $sql = "SELECT COUNT(*) FROM tbl_attendees WHERE attendeeid = " . $val . " AND meetingid = ";
                                $sql .= "" . $meetingid;
                                $mreal = getData($sql);
                                if ($mreal < 1)
                                {
                                    $sql = "INSERT INTO tbl_attendees VALUES (" . $meetingid . ", " . $val . " )";
                                    updateData($sql);
                                    $added = $added + 1;
                                }
                            }
                        }       
                    }
                }
            }
        }
    }
}

if ($added > 0)
{
    echo "added " . $added . " invitees.";
}
else
{
    echo "something went wrong!";
}
?>

