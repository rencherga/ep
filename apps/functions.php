<?php

require_once 'meekrodb.2.3.class.php';

DB::$user     = 'eps';
DB::$password = 'eps_pass';
DB::$dbName   = 'eps';

function getData($qry) {
  error_reporting(E_ERROR | E_PARSE);
  $data = "";
  $db_host = 'localhost';
  $db_user = 'eps';
  $db_pwd = 'eps_pass';
  $database = 'eps';
  if (!mysql_connect($db_host, $db_user, $db_pwd))
  {
    die("Can't connect to database");
  }
  if (!mysql_select_db($database))
  {
    die("Can't select database");
  }
  $result = mysql_query($qry );
  if (!$result)
  {
    die("Query to show fields from table failed");
  }
  while($row = mysql_fetch_row($result))
  {
    $data .= $row[0];
  }
  return $data;
}

function updateData($sql) {
  $iRet = 0;
  $db_host = 'localhost';
  $db_user = 'eps';
  $db_pwd = 'eps_pass';
  $database = 'eps';
  if (!mysql_connect($db_host, $db_user, $db_pwd))
  {
    die("Can't connect to database");
  }
  if (!mysql_select_db($database))
  {
    die("Can't select database");
  }
  mysql_query( $sql );
  #echo "sql = " .$sql . "<BR>";    
  return $iRet;
}

function getArray($sql)
{
	$strRet = array();
	$strRet = DB::query($sql);
	return $strRet;
}


function getFormKey($uid)
{
  $ret = "";
  $rndstr = getRandomString(28);
  $ran = mt_rand(10000,99999); 
  $sql = "INSERT INTO tbl_form_keys VALUES ('";
  $sql .= $rndstr . "', " . $uid . ", NOW(), '" . $_SERVER['REMOTE_ADDR'] . "' )";
  updateData($sql);
  $ret = $rndstr;
  return $ret;
}

function isFormKeyLegit($uid, $token)
{
    $ret = FALSE;
    $sql = "SELECT COUNT(*) FROM tbl_form_keys WHERE uid = " . $uid . " AND frm_token = '" . $token . "'";
    $real = getData($sql);
    if ($real > 0)
    {
        $sql = "SELECT TIMESTAMPDIFF(MINUTE, dt_touched, NOW()) AS AGE FROM tbl_form_keys WHERE uid = " . $uid;
        $sql .= " AND frm_token = '" . $token . "'";
        $age = getData($sql);
        if ($age > 119)
        {
            $ret = FALSE;    
        }
        else
        {
            $ret = TRUE;
            $sql  = "UPDATE tbl_form_keys SET dt_touched = NOW() WHERE ";
            $sql .= " uid = " . $uid;
            $sql .= " AND frm_token = '" . $token . "'";
            updateData($sql);
        }
    }
    return $ret;
}

function getRandomString($cnt)
{
  $ret = substr(base64_encode(sha1(mt_rand())), 0, $cnt);    
  return $ret;
}

function encrypt_decrypt($action, $string) {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'This is my secret key';
    $secret_iv = 'This is my secret iv';
    // hash
    $key = hash('sha256', $secret_key);
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    if( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    }
    else if( $action == 'decrypt' ){
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}

function isNotEmpty($input) 
{
    $strTemp = $input;
    $strTemp = trim($strTemp);
    if(strTemp != '') 
    {
         return true;
    }
    return false;
}

function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

function clean_up_string_for_insert($str)
{
    $strRet = "";
    $strRet = str_replace("'", '', $str);
    return $strRet;
}

function strnpos($haystack, $needle, $occurance, $pos = 0) 
{       
    for ($i = 1; $i <= $occurance; $i++) 
    {
        $pos = strpos($haystack, $needle, $pos) + 1;
    }
    return $pos - 1;      
}

function getConfirmJavascript($u)
{
    $sql = "SELECT addressid from tbl_address_book WHERE ownerid = " . $u . " order by name asc";
    $jsvar = "var aidarr = [ ";
    $nmvar = "var nmarr = [ ";
    $aids = getArray($sql);
    foreach ($aids as $val)
    {
        $aid = $val['addressid'];
        $a = encrypt_decrypt("encrypt", $aid);
        $jsvar .= "'" . $a . "',";
        $nmvar .= "'" . getData("SELECT name FROM tbl_address_book WHERE addressid = " . $aid) . "',";
    }
    $nmvar = rtrim($nmvar,',');
    $jsvar = rtrim($jsvar,',');
    $nmvar .= " ]";
    $jsvar .= " ]";
    $strRet  = "<script>\n";
    $strRet .= "\tfunction doDelete(indexVal, jb)\n";
    $strRet .= "\t{\n";
    $strRet .= "\t\t" . $jsvar . ";\n";
    $strRet .= "\t\t" . $nmvar . ";\n";
    $strRet .= "\t\tvar vTNMM = \"" . encrypt_decrypt("encrypt", $u) . "\";\n";
    $strRet .= "\t\tvar frmKey = \"" . getFormKey($u) . "\";\n";
    $strRet .= "\t\tvar vJB = \"\" + jb;\n";
    $strRet .= "\t\tvar vURL = \"/apps/procDelItem.php?tok_frm=\" + frmKey + \"&jb=\" + vJB;\n";
    $strRet .= "\t\tvURL += \"&tnww=\" + vTNMM + \"&aid=\" + aidarr[indexVal];\n";
    $strRet .= "\t\tvar answer = confirm(\"Remove Entry for \" + nmarr[indexVal] + \"?\");\n";
    $strRet .= "\t\tif (answer)\n";
    $strRet .= "\t\t{\n";
    $strRet .= "\t\t\tloadDoc(vURL, myFunction);\n";
    #$strRet .= "\t\t\tlocation.reload();\n"; 
    $strRet .= "\t\t\n";
    $strRet .= "\t\t\n";
    $strRet .= "\t\t}\n";
    $strRet .= "\t\telse\n"; 
    $strRet .= "\t\t{\n";
    $strRet .= "\t\t}\n";
    $strRet .= "\t}\n";
    $strRet .= "</script>\n";
    return $strRet;
}

function returnMySQLDateFromBSDate($dt)
{
    # 5/17/2017 6:00 PM
    $strRet = "";
    $len = strlen($dt);
    if ($len > 0)
    {
        $whack1 = strnpos($dt, '/',1);
        $whack2 = strnpos($dt, '/',2);
        $space  = strnpos($dt, ' ',1);
        $space2 = strnpos($dt, ' ',2);
        $col    = strnpos($dt, ':',1);
        $month  = substr($dt, 0, $whack1);
        $ampm   = substr($dt, -2);   
        $day    = substr($dt, $whack1, ($whack2 - $whack1) );
        $day    = str_replace('/', '', $day);
        $year   = substr($dt, $whack2, ($space - $whack2));
        $year   = str_replace('/', '', $year);
        $hour   = substr($dt, $space, ($col - $space));
        $hour   = str_replace(' ', '', $hour);
        $min    = substr($dt, $col, ($space2 - $col));
        $min    = str_replace(':', '', $min);
        $strRet = "" . $year . "-";
        if (strlen($month) == 1) { $strRet .= "0"; }
        $strRet  .= $month . "-";
        if (strlen($day) == 1) { $strRet .= "0"; }
        $strRet  .= $day . " ";
        if ($ampm == 'AM')
        {
            if (strlen($hour) == 1)
            { 
                $strRet .= "0";
            }
            $strRet .= $hour;
        }
        else
        {
            $hour = $hour + 12;
            $strRet .= $hour;
        }
        $strRet .= ":" . $min . ":00";
    }
    return $strRet;
}


function addAgendaItemToMeeting($uid, $mid, $aid, $nm, $desc)
{
    
    $sql = "INSERT into tbl_agenda_child (agendaid, ownerid, agenda_item_name, agenda_item_desc, created, last_modified) VALUES (";
    $sql .= "" . $aid . ", " . $uid . ", '" . $nm . "', '" . $desc . "', NOW(), NOW() )";
    updateData($sql);
    $sql = "SELECT child_items FROM tbl_agenda WHERE agendaid = " . $aid ;
    $ci = getData($sql);
    $ci = $ci + 1;
    $sql = "UPDATE tbl_agenda SET child_items = " . $ci . " WHERE agendaid = " . $aid;
    updateData($sql);
}

function stringInsert($str,$insertstr,$pos)
{
    $str = substr($str, 0, $pos) . $insertstr . substr($str, $pos);
    return $str;
} 

function getTimeDropDowns($strDate)
{
    # 0123456789012345678
    # 2017-08-08 16:00:00
    $monthCntr = 13;
    $dayCntr   = 32;
    $yearCntr  = 10;
    $i = 1;
    $strRet = $strDate;
    $yr = substr($strDate, 0, 4);
    $mn = substr($strDate, 5, 2);
    $dy = substr($strDate, 8, 2);
    $mn = str_replace('0', '', $mn); 
    $strRet = "<TD>\n<label for=\"sel2\">Date:</label>\n</TD>\n";
    $strRet .= "<TD>\n<select name=\"m_month\" class=\"form-control\">\n";
    while ($i < $monthCntr)
    {
        if ($i == 1) { $strRet .= "<option value='" . $i . "'>January</option>\n";  }
        if ($i == 2) { $strRet .= "<option value='" . $i . "'>February</option>\n";  }
        if ($i == 3) { $strRet .= "<option value='" . $i . "'>March</option>\n";  }
        if ($i == 4) { $strRet .= "<option value='" . $i . "'>April</option>\n";  }
        if ($i == 5) { $strRet .= "<option value='" . $i . "'>May</option>\n";  }
        if ($i == 6) { $strRet .= "<option value='" . $i . "'>June</option>\n";  }
        if ($i == 7) { $strRet .= "<option value='" . $i . "'>July</option>\n";  }
        if ($i == 8) { $strRet .= "<option value='" . $i . "'>August</option>\n";  }
        if ($i == 9) { $strRet .= "<option value='" . $i . "'>September</option>\n";  }
        if ($i == 10) { $strRet .= "<option value='" . $i . "'>October</option>\n";  }
        if ($i == 11) { $strRet .= "<option value='" . $i . "'>November</option>\n";  }
        if ($i == 12) { $strRet .= "<option value='" . $i . "'>December</option>\n";  }
        $i++;   
    }
    $strToken = "='" . $mn . "'";
    $strNew   = "='" . $mn . "' selected ";
    $strRet  = str_replace($strToken, $strNew, $strRet);
    $strRet .= "\n</select>\n</TD>\n";
    $strRet .= "<TD>\n<select name=\"m_day\" class=\"form-control\">\n";
    $i = 1;
    while ($i < $dayCntr)
    {
        $strRet .= "<option value='" . $i . "'>" . $i . "</option>\n";  
        $i++;   
    }
    $dy = str_replace('0', '', $dy); 
    $strToken = "='" . $dy . "'";
    $strNew   = "='" . $dy . "' selected ";
    $strRet  = str_replace($strToken, $strNew, $strRet);
    #$strRet = "yr = " . $yr . "<BR>mn = " . $mn . "<BR>dy = " . $dy . "<BR>";
    $strRet .= "\n</select>\n</TD>\n";
    $strRet .= "<TD>\n<select name=\"m_year\" class=\"form-control\">\n";
    $strRet .= "<option value='" . ($yr - 1) . "'>" . ($yr - 1) . "</option>\n";
    $strRet .= "<option selected value='" . $yr . "'>" . $yr . "</option>\n";
    $strRet .= "<option value='" . ($yr + 1) . "'>" . ($yr + 1) . "</option>\n";
    $strRet .= "</select>\n</td>";
    $strRet .= "";
    return $strRet;
}

function getDateDropDowns($strDate)
{
    # 0123456789012345678
    # 2017-08-08 16:00:00
    $hr  = substr($strDate, 11, 2);
    $min = substr($strDate, 14, 2);
    $strRet = "";
    $strRet = "<td>&nbsp;</td><TD>\n<label for=\"sel2\">Time:</label>\n</TD>\n";
    $strRet .= "<TD>\n<select name=\"m_hour\" class=\"form-control\">\n";
    $strRet .= "<option value='00'>00</option>\n";
    $strRet .= "<option value='01'>01</option>\n";
    $strRet .= "<option value='02'>02</option>\n";
    $strRet .= "<option value='03'>03</option>\n";
    $strRet .= "<option value='04'>04</option>\n";
    $strRet .= "<option value='05'>05</option>\n";
    $strRet .= "<option value='06'>06</option>\n";
    $strRet .= "<option value='07'>07</option>\n";
    $strRet .= "<option value='08'>08</option>\n";
    $strRet .= "<option value='09'>09</option>\n";
    $strRet .= "<option value='10'>10</option>\n";
    $strRet .= "<option value='11'>11</option>\n";
    $strRet .= "<option value='12'>12</option>\n";
    $strRet .= "<option value='13'>13</option>\n";
    $strRet .= "<option value='14'>14</option>\n";
    $strRet .= "<option value='15'>15</option>\n";
    $strRet .= "<option value='16'>16</option>\n";
    $strRet .= "<option value='17'>17</option>\n";
    $strRet .= "<option value='18'>18</option>\n";
    $strRet .= "<option value='19'>19</option>\n";
    $strRet .= "<option value='20'>20</option>\n";
    $strRet .= "<option value='21'>21</option>\n";
    $strRet .= "<option value='22'>22</option>\n";
    $strRet .= "<option value='23'>23</option>\n";
    $strRet .= "</select>\n</td>\n";
    $strToken = "='" . $hr . "'";
    $strNew   = "='" . $hr . "' selected ";
    $strRet  = str_replace($strToken, $strNew, $strRet);
    
    $strRetB .= "<TD>\n<select name=\"m_min\" class=\"form-control\">\n";
    $strRetB .= "<option value='00'>00</option>\n";
    $strRetB .= "<option value='15'>15</option>\n";
    $strRetB .= "<option value='30'>30</option>\n";
    $strRetB .= "<option value='45'>45</option>\n";
    $strToken = "='" . $min . "'";
    $strNew   = "='" . $min . "' selected ";
    $strRetB  = str_replace($strToken, $strNew, $strRetB);
    $strRetB .= "</select>\n</td>";
    
    $strRet .= $strRetB;
    
    #$strRet = "hr =" . $hr . "<BR>min = " . $min;
    return $strRet;
}


function getTimeZoneOptions()
{
    $strRet = "<option value=\"Pacific/Midway\">(GMT-11:00) Midway Island, Samoa</option>
<option value=\"-10\">(GMT-10:00) Hawaii-Aleutian</option>
<option value=\"-10\">(GMT-10:00) Hawaii</option>
<option value=\"-9.5\">(GMT-09:30) Marquesas Islands</option>
<option value=\"-9\">(GMT-09:00) Gambier Islands</option>
<option value=\"-9\">(GMT-09:00) Alaska</option>
<option value=\"-8\">(GMT-08:00) Tijuana, Baja California</option>
<option value=\"-8\">(GMT-08:00) Pitcairn Islands</option>
<option value=\"-8\">(GMT-08:00) Pacific Time (US & Canada)</option>
<option value=\"-7\" selected>(GMT-07:00) Mountain Time (US & Canada)</option>
<option value=\"-7\">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
<option value=\"-7\">(GMT-07:00) Arizona</option>
<option value=\"-6\">(GMT-06:00) Saskatchewan, Central America</option>
<option value=\"-6\">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
<option value=\"-6\">(GMT-06:00) Easter Island</option>
<option value=\"-6\">(GMT-06:00) Central Time (US & Canada)</option>
<option value=\"-5\">(GMT-05:00) Eastern Time (US & Canada)</option>
<option value=\"-5\">(GMT-05:00) Cuba</option>
<option value=\"-5\">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
<option value=\"America/Caracas\">(GMT-04:30) Caracas</option>
<option value=\"America/Santiago\">(GMT-04:00) Santiago</option>
<option value=\"America/La_Paz\">(GMT-04:00) La Paz</option>
<option value=\"Atlantic/Stanley\">(GMT-04:00) Faukland Islands</option>
<option value=\"America/Campo_Grande\">(GMT-04:00) Brazil</option>
<option value=\"America/Goose_Bay\">(GMT-04:00) Atlantic Time (Goose Bay)</option>
<option value=\"America/Glace_Bay\">(GMT-04:00) Atlantic Time (Canada)</option>
<option value=\"America/St_Johns\">(GMT-03:30) Newfoundland</option>
<option value=\"America/Araguaina\">(GMT-03:00) UTC-3</option>
<option value=\"America/Montevideo\">(GMT-03:00) Montevideo</option>
<option value=\"America/Miquelon\">(GMT-03:00) Miquelon, St. Pierre</option>
<option value=\"America/Godthab\">(GMT-03:00) Greenland</option>
<option value=\"America/Argentina/Buenos_Aires\">(GMT-03:00) Buenos Aires</option>
<option value=\"America/Sao_Paulo\">(GMT-03:00) Brasilia</option>
<option value=\"America/Noronha\">(GMT-02:00) Mid-Atlantic</option>
<option value=\"Atlantic/Cape_Verde\">(GMT-01:00) Cape Verde Is.</option>
<option value=\"Atlantic/Azores\">(GMT-01:00) Azores</option>
<option value=\"Europe/Belfast\">(GMT) Greenwich Mean Time : Belfast</option>
<option value=\"Europe/Dublin\">(GMT) Greenwich Mean Time : Dublin</option>
<option value=\"Europe/Lisbon\">(GMT) Greenwich Mean Time : Lisbon</option>
<option value=\"Europe/London\">(GMT) Greenwich Mean Time : London</option>
<option value=\"Africa/Abidjan\">(GMT) Monrovia, Reykjavik</option>
<option value=\"Europe/Amsterdam\">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
<option value=\"Europe/Belgrade\">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
<option value=\"Europe/Brussels\">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
<option value=\"Africa/Algiers\">(GMT+01:00) West Central Africa</option>
<option value=\"Africa/Windhoek\">(GMT+01:00) Windhoek</option>
<option value=\"Asia/Beirut\">(GMT+02:00) Beirut</option>
<option value=\"Africa/Cairo\">(GMT+02:00) Cairo</option>
<option value=\"Asia/Gaza\">(GMT+02:00) Gaza</option>
<option value=\"Africa/Blantyre\">(GMT+02:00) Harare, Pretoria</option>
<option value=\"Asia/Jerusalem\">(GMT+02:00) Jerusalem</option>
<option value=\"Europe/Minsk\">(GMT+02:00) Minsk</option>
<option value=\"Asia/Damascus\">(GMT+02:00) Syria</option>
<option value=\"Europe/Moscow\">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
<option value=\"Africa/Addis_Ababa\">(GMT+03:00) Nairobi</option>
<option value=\"Asia/Tehran\">(GMT+03:30) Tehran</option>
<option value=\"Asia/Dubai\">(GMT+04:00) Abu Dhabi, Muscat</option>
<option value=\"Asia/Yerevan\">(GMT+04:00) Yerevan</option>
<option value=\"Asia/Kabul\">(GMT+04:30) Kabul</option>
<option value=\"Asia/Yekaterinburg\">(GMT+05:00) Ekaterinburg</option>
<option value=\"Asia/Tashkent\">(GMT+05:00) Tashkent</option>
<option value=\"Asia/Kolkata\">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
<option value=\"Asia/Katmandu\">(GMT+05:45) Kathmandu</option>
<option value=\"Asia/Dhaka\">(GMT+06:00) Astana, Dhaka</option>
<option value=\"Asia/Novosibirsk\">(GMT+06:00) Novosibirsk</option>
<option value=\"Asia/Rangoon\">(GMT+06:30) Yangon (Rangoon)</option>
<option value=\"Asia/Bangkok\">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
<option value=\"Asia/Krasnoyarsk\">(GMT+07:00) Krasnoyarsk</option>
<option value=\"Asia/Hong_Kong\">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
<option value=\"Asia/Irkutsk\">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
<option value=\"Australia/Perth\">(GMT+08:00) Perth</option>
<option value=\"Australia/Eucla\">(GMT+08:45) Eucla</option>
<option value=\"Asia/Tokyo\">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
<option value=\"Asia/Seoul\">(GMT+09:00) Seoul</option>
<option value=\"Asia/Yakutsk\">(GMT+09:00) Yakutsk</option>
<option value=\"Australia/Adelaide\">(GMT+09:30) Adelaide</option>
<option value=\"Australia/Darwin\">(GMT+09:30) Darwin</option>
<option value=\"Australia/Brisbane\">(GMT+10:00) Brisbane</option>
<option value=\"Australia/Hobart\">(GMT+10:00) Hobart</option>
<option value=\"Asia/Vladivostok\">(GMT+10:00) Vladivostok</option>
<option value=\"Australia/Lord_Howe\">(GMT+10:30) Lord Howe Island</option>
<option value=\"Etc/GMT-11\">(GMT+11:00) Solomon Is., New Caledonia</option>
<option value=\"Asia/Magadan\">(GMT+11:00) Magadan</option>
<option value=\"Pacific/Norfolk\">(GMT+11:30) Norfolk Island</option>
<option value=\"Asia/Anadyr\">(GMT+12:00) Anadyr, Kamchatka</option>
<option value=\"Pacific/Auckland\">(GMT+12:00) Auckland, Wellington</option>
<option value=\"Etc/GMT-12\">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
<option value=\"Pacific/Chatham\">(GMT+12:45) Chatham Islands</option>
<option value=\"Pacific/Tongatapu\">(GMT+13:00) Nuku'alofa</option>
<option value=\"Pacific/Kiritimati\">(GMT+14:00) Kiritimati</option>";
    return $strRet;
}

class Meeting 
{
    // Creating some properties (variables tied to an object)
    public $meetingid = 0;
    public $mdate;
    public $mduration;
    public $m_title;
    public $m_desc;
    public $m_owner;	
    public $m_location;	
    public $m_locationName;
    public $m_timezone;	
    public $m_agenda;	
    public $m_attendee_count;
    public $vote_to_be_held;
    public $vote_held;
    public $vote_completed;	
    public $created;	
    public $recurring;	
    public $recurring_type;	
    public $recurring_indicator;	
    public $recurring_st_date;	
    public $recurring_ed_date;

    // Assigning the values
    public function __construct($m_title, $m_owner) {
        $this->m_title = $m_title;
        $this->m_owner = $m_owner;
    }
    
    public function getSmallMeeting($meetingid)
    {
        $this->meetingid = $meetingid;
        $sql = "select DATE_FORMAT(mdate,'%M %d, %Y %H:%i' ) from tbl_meeting where meetingid = " . $this->meetingid;
        $this->mdate = getData($sql);
        $this->m_title = getData("select m_title from tbl_meeting WHERE meetingid = " . $this->meetingid . "");
        $this->m_desc = getData("select m_desc from tbl_meeting WHERE meetingid = " . $this->meetingid . "");
        $sql = "SELECT CONCAT(f_name, ' ', l_name) AS nm FROM tbl_user  WHERE uid = (SELECT m_owner FROM tbl_meeting WHERE meetingid = " . $this->meetingid . " )";
        $this->m_owner = getData($sql);
        return $this;
    }

    public function getWholeMeeting($meetingid)
    {
        $this->meetingid = $meetingid;
        $sql = "select DATE_FORMAT(mdate,'%M %d, %Y %H:%i' ) from tbl_meeting where meetingid = " . $this->meetingid;
        $this->mdate = getData($sql);
        $this->mduration = getData("select mduration from tbl_meeting WHERE meetingid = " . $this->meetingid . "");
        $this->m_title = getData("select m_title from tbl_meeting WHERE meetingid = " . $this->meetingid . "");
        $this->m_desc = getData("select m_desc from tbl_meeting WHERE meetingid = " . $this->meetingid . "");
        $sql = "SELECT CONCAT(f_name, ' ', l_name) AS nm FROM tbl_user  WHERE uid = (SELECT m_owner FROM tbl_meeting WHERE meetingid = " . $this->meetingid . " )";
        $this->m_owner = getData($sql);
        $this->m_location = getData("select m_location from tbl_meeting WHERE meetingid = " . $this->meetingid . "");
        $this->m_timezone = getData("select m_timezone from tbl_meeting WHERE meetingid = " . $this->meetingid . "");
        $this->m_agenda = getData("select m_agenda from tbl_meeting WHERE meetingid = " . $this->meetingid . "");
        $this->vote_to_be_held = getData("select vote_to_be_held from tbl_meeting WHERE meetingid = " . $this->meetingid . "");
        $this->vote_held = getData("select vote_held from tbl_meeting WHERE meetingid = " . $this->meetingid . "");
        $this->vote_completed = getData("select vote_completed from tbl_meeting WHERE meetingid = " . $this->meetingid . "");
        $this->created = getData("select created from tbl_meeting WHERE meetingid = " . $this->meetingid . "");
        $this->recurring = getData("select recurring from tbl_meeting WHERE meetingid = " . $this->meetingid . "");
        $this->recurring_type = getData("select recurring_type from tbl_meeting WHERE meetingid = " . $this->meetingid . "");
        $this->recurring_indicator = getData("select recurring_indicator from tbl_meeting WHERE meetingid = " . $this->meetingid . "");
        $this->recurring_st_date = getData("select recurring_st_date from tbl_meeting WHERE meetingid = " . $this->meetingid . "");
        $this->recurring_ed_date = getData("select recurring_ed_date from tbl_meeting WHERE meetingid = " . $this->meetingid . "");
        $this->m_attendee_count = getData("select count(*) from tbl_attendees WHERE meetingid = " . $this->meetingid . "");
        $this->m_locationName = getData("select loc_desc_long from tbl_location WHERE locationid = " . $this->m_location . "");
        return $this;   
    }

        public function save() {
            $ret = "";
            $sql = "INSERT INTO tbl_meeting (m_title, m_owner, m_timezone) VALUES ('" . $this->m_title . "', " . $this->m_owner . ", -99) ";
            updateData($sql);
            $sql = "SELECT meetingid FROM tbl_meeting WHERE m_owner = " . $this->m_owner . " AND m_timezone = -99";
            $this->meetingid = getData($sql);
            $sql = "UPDATE tbl_meeting SET mdate = '" . $this->mdate . "' WHERE meetingid = " . $this->meetingid;
            updateData($sql);
            $sql = "UPDATE tbl_meeting SET mduration = " . $this->mduration . " WHERE meetingid = " . $this->meetingid;
            updateData($sql);
            $sql = "UPDATE tbl_meeting SET m_desc = '" . $this->m_desc . "' WHERE meetingid = " . $this->meetingid;
            #echo $sql . "<BR>";
            updateData($sql);
            $sql = "UPDATE tbl_meeting SET m_location = " . $this->m_location . " WHERE meetingid = " . $this->meetingid;
            updateData($sql);
            $sql = "UPDATE tbl_meeting SET m_timezone = " . $this->m_timezone . " WHERE meetingid = " . $this->meetingid;
            updateData($sql);
            $sql = "UPDATE tbl_meeting SET m_agenda = " . $this->m_agenda . " WHERE meetingid = " . $this->meetingid;
            updateData($sql);
            $sql = "UPDATE tbl_meeting SET vote_to_be_held = " . $this->vote_to_be_held . " WHERE meetingid = " . $this->meetingid;
            updateData($sql);
            $sql = "UPDATE tbl_meeting SET vote_held = " . $this->vote_held . " WHERE meetingid = " . $this->meetingid;
            updateData($sql);
            $sql = "UPDATE tbl_meeting SET vote_completed = '" . $this->vote_completed . "' WHERE meetingid = " . $this->meetingid;
            updateData($sql);
            $sql = "UPDATE tbl_meeting SET created = NOW() WHERE meetingid = " . $this->meetingid;
            updateData($sql);
            $sql = "UPDATE tbl_meeting SET recurring = " . $this->recurring . " WHERE meetingid = " . $this->meetingid;
            updateData($sql);
            $sql = "UPDATE tbl_meeting SET recurring_type = " . $this->recurring_type . " WHERE meetingid = " . $this->meetingid;
            updateData($sql);
            $sql = "UPDATE tbl_meeting SET recurring_indicator = " . $this->recurring_indicator . " WHERE meetingid = " . $this->meetingid;
            updateData($sql);
            $sql = "UPDATE tbl_meeting SET recurring_st_date = '" . $this->recurring_st_date . "' WHERE meetingid = " . $this->meetingid;
            updateData($sql);
            $sql = "UPDATE tbl_meeting SET recurring_ed_date = '" . $this->recurring_ed_date . "' WHERE meetingid = " . $this->meetingid;
            updateData($sql);
            return $ret;
        }
    }

?>


