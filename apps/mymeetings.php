<?php

include('functions.php');

error_reporting(E_ERROR | E_WARNING);

$uid = 23244;

echo "<html lang=\"en\">\n";
echo "  <head>\n";
echo "    <meta charset=\"utf-8\">\n";
echo "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n";
echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n";
echo "    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->\n";
echo "    <meta name=\"description\" content=\"\">\n";
echo "    <meta name=\"author\" content=\"\">\n";
echo "    <link rel=\"icon\" href=\"https://getbootstrap.com/favicon.ico\">\n";
echo "    <title>Electric Policy</title>\n";
echo "    <!------- https://getbootstrap.com/examples/navbar-fixed-top/ ----->\n";
echo "    <!-- Bootstrap core CSS -->\n";
echo "    <link href=\"https://getbootstrap.com/dist/css/bootstrap.min.css\" rel=\"stylesheet\">\n";
echo "\n";
echo "    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->\n";
echo "    <link href=\"https://getbootstrap.com/assets/css/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">\n";
echo "\n";
echo "    <!-- Custom styles for this template -->\n";
echo "    <link href=\"https://getbootstrap.com/examples/navbar-fixed-top/navbar-fixed-top.css\" rel=\"stylesheet\">\n";
echo "\n";
echo "    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->\n";
echo "    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->\n";
echo "    <script src=\"../../assets/js/ie-emulation-modes-warning.js\"></script>\n";
echo "      \n";
echo "      <link href=\"http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />\n";
echo "    <link href=\"http://wenzhixin.net.cn/p/bootstrap-table/src/bootstrap-table.css\" rel=\"stylesheet\" type=\"text/css\" />\n";
echo "\n";
echo "    <link href=\"http://cdn.kendostatic.com/2014.1.318/styles/kendo.common.min.css\" rel=\"stylesheet\" />\n";
echo "    <link href=\"http://cdn.kendostatic.com/2014.1.318/styles/kendo.bootstrap.min.css\" rel=\"stylesheet\" />\n";
echo "    <link href=\"http://protostrap.com/Assets/gv/css/gv.bootstrap-form.css\" rel=\"stylesheet\" type=\"text/css\" />\n";
echo "\n";
echo "    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->\n";
echo "    <!--[if lt IE 9]>\n";
echo "      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>\n";
echo "      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>\n";
echo "    <![endif]-->\n";
#echo "    <!---- Redirect JS ----->\n";
#echo "      <script type=\"text/javascript\">\n";
#echo "          document.getElementById(\"new_meeting\").onclick = function () {\n";
#echo "          location.href = \"/apps/newmeeting.php\";\n";
#echo "          };\n";
#echo "      </script>\n";
echo "  </head>\n";
echo "\n";
echo "  <body>\n";
echo "\n";
echo "    <!-- Fixed navbar -->\n";
echo "    <nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse\">\n";
echo "      <div class=\"container\">\n";
echo "        <div class=\"navbar-header\">\n";
echo "          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">\n";
echo "            <span class=\"sr-only\">Toggle navigation</span>\n";
echo "            <span class=\"icon-bar\"></span>\n";
echo "            <span class=\"icon-bar\"></span>\n";
echo "            <span class=\"icon-bar\"></span>\n";
echo "          </button>\n";
echo "          <a class=\"navbar-brand\" href=\"/apps/\">Electric Policy</a>\n";
echo "        </div>\n";
echo "        <div id=\"navbar\" class=\"navbar-collapse collapse\">\n";
echo "          <ul class=\"nav navbar-nav\">\n";
echo "            <li class=\"active\"><a href=\"index.php\">Home</a></li>\n";
echo "            <li><a href=\"/apps/mymeetings.php\">My Meetings</a></li>\n";
echo "            <li><a href=\"/apps/policy.php\">Policy</a></li>\n";
echo "            <li><a href=\"/apps/ab.php\">Address Book</a></li>\n";
echo "            <li><a href=\"#contact\">Contact</a></li>\n";
echo "            <li class=\"dropdown\">\n";
echo "              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>\n";
echo "              <ul class=\"dropdown-menu\">\n";
echo "                <li><a href=\"#\">Action</a></li>\n";
echo "                <li><a href=\"#\">Another action</a></li>\n";
echo "                <li><a href=\"#\">Something else here</a></li>\n";
echo "                <li role=\"separator\" class=\"divider\"></li>\n";
echo "                <li class=\"dropdown-header\">Nav header</li>\n";
echo "                <li><a href=\"#\">Separated link</a></li>\n";
echo "                <li><a href=\"#\">One more separated link</a></li>\n";
echo "              </ul>\n";
echo "            </li>\n";
echo "          </ul>\n";
echo "          <!----\n";
echo "          <ul class=\"nav navbar-nav navbar-right\">\n";
echo "            <li><a href=\"../navbar/\">Default</a></li>\n";
echo "            <li><a href=\"../navbar-static-top/\">Static top</a></li>\n";
echo "            <li class=\"active\"><a href=\"./\">Fixed top <span class=\"sr-only\">(current)</span></a></li>\n";
echo "          </ul>\n";
echo "           ----->\n";
echo "        </div><!--/.nav-collapse -->\n";
echo "      </div>\n";
echo "    </nav>\n";
echo "\n";
echo "    <div class=\"container\">\n";
echo "<div class=\"panel panel-primary\">";
echo "        <!------ PRIMARY CONTAINER START -------->\n";
echo "<div class=\"panel-heading\">" . getData("SELECT CONCAT(f_name, ' ', l_name) FROM tbl_user WHERE uid = " . $uid) . " 's meetings.</div>\n";
echo "<div class=\"panel-body\">\n";
echo "\t\t<form><button onclick=\"window.location.href='/apps/newmeeting.php'\" type=\"button\" class=\"btn btn-lg btn-success \">New Meeting</button></form>\n</div>\n";  
$fat= "AH7mTg1PZVdCEt3S2Wjyo2Bizqvph60NGn5LwX91Q";
$sql = "SELECT COUNT(*) from tbl_meeting WHERE m_owner = " . $uid;
$howManyMeetings = getData($sql);
if ($howManyMeetings > 0)
{
    echo "\t\t<table class=\"table table-bordered table-striped table-hover \">\n";
    echo "            <thead>\n";
    echo "                <td><b>My Meetings</b></td>\n";
    echo "                <td><b>Description</b></td>\n";
    echo "                <td><b>Owner</b></td>\n";
    echo "                <td><b>Date & Time</b></td>\n";
    echo "            </thead>\n";
    ##### This is for meetings created or owned by loggeed in user
    $sql = "SELECT meetingid from tbl_meeting WHERE m_owner = " . $uid . " order by mdate asc";
    $mids = getArray($sql);
    foreach ($mids as $val)
    {
        $mid = $val['meetingid'];
        $meet = new Meeting(' ', 123456);
        $meet = $meet->getSmallMeeting($mid);
        echo "\t\t<TR>\n";
        echo "\t<TD><a href=\"/apps/view.php?mid=" . $mid . "&fat=" . $fat . "\">" . $meet->m_title . "</a></td>\n";
        echo "\t<td>" . $meet->m_desc . "</td>\n"; 
        echo "\t<td>" . $meet->m_owner . "</td>\n";
        echo "\t<td>" . $meet->mdate . "</td>\n";
        echo "\t\t</TR>\n";
    }
    echo "        </table>\n";    
}
else
{
    echo "<h2>No meetings yet!</h2>";
}
echo "    </div> <!-- /container -->\n";
echo "\n";
echo "\n";
echo "    <!-- Bootstrap core JavaScript\n";
echo "    ================================================== -->\n";
echo "    <!-- Placed at the end of the document so the pages load faster -->\n";
echo "    <script src=\"http://cdn.kendostatic.com/2014.1.318/js/jquery.min.js\"></script>\n";
echo "    <script src=\"http://protostrap.com/Assets/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>\n";
echo "    <script src=\"http://wenzhixin.net.cn/p/bootstrap-table/src/bootstrap-table.js\" type=\"text/javascript\"></script>\n";
echo "    <script src=\"http://protostrap.com/Assets/inputmask/js/jquery.inputmask.js\" type=\"text/javascript\"></script>\n";
echo "    <script src=\"http://cdn.kendostatic.com/2014.1.318/js/kendo.all.min.js\"></script>\n";
echo "    <script src=\"http://protostrap.com/Assets/parsely/parsley.extend.js\" type=\"text/javascript\"></script>\n";
echo "    <script src=\"http://protostrap.com/Assets/parsely/2.0/parsley.js\" type=\"text/javascript\"></script>\n";
echo "    <script src=\"http://protostrap.com/Assets/download.js\" type=\"text/javascript\"></script>\n";
echo "    <script src=\"http://protostrap.com/Assets/protostrap.js\" type=\"text/javascript\"></script>\n";
echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>\n";
echo "    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\/script>')</script>\n";
echo "    <script src=\"https://getbootstrap.com/dist/js/bootstrap.min.js\"></script>\n";
echo "    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->\n";
echo "    <script src=\"https://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js\"></script>\n";
echo "  </body>\n";
echo "</html>\n";


?>
