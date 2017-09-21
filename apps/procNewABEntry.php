<?php

include('functions.php');

error_reporting(E_ERROR | E_WARNING);

$tok_frm   = $_GET["tok_frm"];
$nm        = $_GET["nm"];
$em        = $_GET["em"];
$tnww      = $_GET["tnww"];

$uid = encrypt_decrypt("decrypt", $tnww);

$success = FALSE;
$added = 0;

/*
echo "t = " . $tok_frm . "<BR>";
echo "uid = " . $uid . "<BR>";
echo "nm = " . $nm . "<BR>";
echo "em = " . $em . "<BR>";
*/

if (!empty($uid))
{
    #echo "0 <BR>\n";
    if (!empty($nm))
    {
        #echo "1 <BR>\n";
        if (!empty($em))
        {
            #echo "2 <BR>\n";
            if (!empty($tok_frm))
            {
                #echo "3 <BR>\n";
                $real = isFormKeyLegit($uid, $tok_frm);
                if ($real)
                {
                    #echo "4 <BR>\n";
                    if (!filter_var($em, FILTER_VALIDATE_EMAIL) === false) 
                    {
                        #echo "5 <BR>\n";
                        $sql = "SELECT COUNT(*) FROM tbl_address_book WHERE ownerid = " . $uid . " AND email = '" . $em . "'";
                        $exist = getData($sql);
                        if ($exist < 1)
                        {
                            #echo "6 <BR>\n";
                            $sql = "INSERT INTO tbl_address_book (ownerid, email, name, created, lastsent) VALUES ( ";
                            $sql .= $uid . ", '" . $em . "', '" . $nm . "', NOW(), NOW() )";
                            updateData($sql);
                            $added = 1;
                        }
                        else
                        {
                            echo "" . $em . " already exists in your address book.";   
                        }
                    }
                    else 
                    {
                        echo "malformed email";
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
    echo "added " . $em . " to address book.";
}
else
{
    echo "something went wrong!";
}

?>

