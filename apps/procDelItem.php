<?php

include('functions.php');

error_reporting(E_ERROR | E_WARNING);

$tok_frm   = $_GET["tok_frm"];
$jb         = $_GET["jb"];
$aid        = $_GET["aid"];
$tnww      = $_GET["tnww"];

$uid = encrypt_decrypt("decrypt", $tnww);
$ai = encrypt_decrypt("decrypt", $aid);
$success = FALSE;
$added = 0;

/*
echo "t   = " . $tok_frm . "<BR>";
echo "uid = " . $uid     . "<BR>";
echo "jb  = " . $jb      . "<BR>";
echo "aid = " . $aid     . "<BR>";
echo "ai  = " . $ai      . "<BR>";
*/

if (!empty($tok_frm))
{
    #echo "0 <BR>\n";
    if (!empty($uid))
    {
        #echo "1 <BR>\n";
        if (!empty($jb))
        {
            #echo "2 <BR>\n";
            if (!empty($ai))
            {
                #echo "3 <BR>\n";
                $real = isFormKeyLegit($uid, $tok_frm);
                if ($real)
                {
                    if ($jb == 'dai')
                    {
                        $sql = "SELECT COUNT(*) FROM tbl_address_book WHERE addressid = " . $ai . " AND ownerid = " . $uid;
                        #echo "sql = " . $sql . "<BR>";
                        $belong = getData($sql);
                        if ($belong > 0)
                        {
                            $sql = "DELETE FROM tbl_address_book WHERE addressid = " . $ai;
                            #echo "sql = " . $sql . "<BR>";
                            updateData($sql);
                            $added++;
                        }
                    }
                    if ($jb == 'rai')
                    {
                        $sql = "SELECT COUNT(*) FROM tbl_agenda_child WHERE ownerid = " . $uid . " AND child_id = " . $ai;
                        $belong = getData($sql);
                        if ($belong > 0)
                        {
                            $sql = "DELETE FROM tbl_agenda_child WHERE child_id = " . $ai;
                            #echo "sql = " . $sql . "<BR>";
                            updateData($sql);
                        }
                    }
                    if ($jb == 'rati')
                    {
                        $mid        = $_GET["mid"];
                        #echo "mid = " . $mid . "<BR>";
                        $clean_mid  = encrypt_decrypt("decrypt", $mid);
                        #echo "clean mid = " . $clean_mid . "<BR>";
                        if (!empty($clean_mid))
                        {
                            $sql = "SELECT COUNT(*) FROM tbl_attendees WHERE meetingid = " . $clean_mid . " AND attendeeid = " . $ai;
                            #echo "sql = " . $sql . "<BR>";
                            $belong = getData($sql);
                            if ($belong > 0)
                            {
                                $sql = "DELETE FROM tbl_attendees WHERE meetingid = " . $clean_mid . " AND attendeeid = " . $ai;
                                #echo "sql = " . $sql . "<BR>";
                                updateData($sql);
                            }
                        }
                    }
                }
                else
                {
                    echo "bad token";
                }
            }
        }
    }
}

if ($added > 0)
{
    echo "deleted " . $ai . " from address book.";
}
else
{
    echo "something went wrong!";
}

?>

