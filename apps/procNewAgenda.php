<?php

include('functions.php');

error_reporting(E_ERROR | E_WARNING);

$tok_frm   = $_GET["tok_frm"];
$nm        = $_GET["nm"];
$desc      = $_GET["desc"];
$tnww      = $_GET["tnww"];
$meetingid = $_GET["mid"];

$uid = encrypt_decrypt("decrypt", $tnww);
$mid = encrypt_decrypt("decrypt", $meetingid);



$success = FALSE;
$added = 0;
/*
echo "t = " . $tok_frm . "<BR>";
echo "nm = " . $nm . "<BR>";
echo "uid = " . $uid . "<BR>";
echo "m = " . $mid . "<BR>";
*/

if (!empty($uid))
{
    #echo "1<BR>";
    if (!empty($mid))
    {
        #echo "2<BR>";
        if (!empty($nm))
        {
            #echo "3<BR>";
            if (!empty($desc))
            {
                #echo "4<BR>";
                if (!empty($tok_frm))
                {
                    #echo "5<BR>";
                    $real = isFormKeyLegit($uid, $tok_frm);
                    if ($real)
                    {
                        #echo "6<BR>";
                        $sql = "SELECT COUNT(*) FROM tbl_meeting WHERE meetingid = " . $mid;
                        $isMidReal = getData($sql);
                        if ($isMidReal > 0)
                        {
                            #echo "7<BR>";
                            $i = 0;
                            $success = TRUE;
                            $sql = "SELECT m_agenda FROM tbl_meeting WHERE meetingid = " . $mid;
                            $ag = getData($sql);
                            if ($ag > 0)
                            {
                                #echo "8<BR>";
                                #there is an agenda already created, we can add children now
                                addAgendaItemToMeeting($uid, $mid, $ag, $nm, $desc);
                                $added = $added + 1;
                            }
                            else
                            {
                                #echo "9<BR>";
                                #there IS NOT an agenda created, we need to do it now.
                                $sql = "SELECT m_title FROM tbl_meeting WHERE meetingid = " . $mid;
                                #echo "sql 1 = " . $sql . "<br>";
                                $agenda_title = getData($sql);
                                $sql = "INSERT INTO tbl_agenda (agenda_title, ownerid, child_items, creation_date, last_modified) VALUES ( ";
                                $sql .= "'" . $agenda_title . "', " . $uid . ", 0, NOW(),NOW() )";
                                #echo "sql 2 = " . $sql . "<br>";
                                updateData($sql);
                                $sql = "SELECT agendaid FROM tbl_agenda WHERE ownerid = " . $uid . " AND child_items = 0 AND agenda_title = '";
                                $sql .= "" . $agenda_title . "'";
                                #echo "sql 3 = " . $sql . "<br>";
                                $agendaid = getData($sql);
                                $sql = "UPDATE tbl_meeting SET m_agenda = " . $agendaid . " WHERE meetingid = " . $mid;
                                #echo "sql 4 = " . $sql . "<br>";
                                updateData($sql);
                                addAgendaItemToMeeting($uid, $mid, $agendaid, $nm, $desc);
                                $added = $added + 1;
                            }
                        }
                        else
                        {
                            #mid is bad
                            echo "malformed meeting id";
                        }
                    }
                }
            }
        }
    }
}

if ($added > 0)
{
    echo "added " . $added . " agenda item.";
}
else
{
    echo "something went wrong!";
}
?>

