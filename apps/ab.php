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
echo getConfirmJavascript($uid);

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
$sql = "SELECT COUNT(*) FROM tbl_address_book WHERE ownerid = " . $uid;
$howManyEntries = getData($sql);
if ($howManyEntries > 0)
{
    #################
    echo "<div class=\"panel-heading\">" . getData("SELECT CONCAT(f_name, ' ', l_name) FROM tbl_user WHERE uid = " . $uid . "") . " ";
    echo " has " . $howManyEntries . " contacts in the address book</div>\n";
    echo "<div class=\"panel-body\" name=\"panel_body_head\">" . getData("SELECT DATE_FORMAT(NOW(),'%b %d %Y %h:%i %p') FROM DUAL") . "</div>\n";
    echo "\t\t<form>";
    echo "<button type=\"button\" class=\"btn btn-info btn-sm\" data-toggle=\"modal\" data-target=\"#AddFormModal\">Add Entry</button>";
    echo "<button type=\"button\" class=\"btn btn-info btn-sm\" data-toggle=\"modal\" data-target=\"#myModal\">Import Contacts</button>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "</form>\n<BR>\n";
    echo "\t\t<table class=\"table table-bordered table-striped table-hover \">\n";
    echo "            <thead>\n";
    echo "                <td><b>Name</b></td>\n";
    echo "                <td><b>Email</b></td>\n";
    echo "                <td><b>Date Added</b></td>\n";
    echo "                <td><b>Last Sent</b></td>\n";
    echo "                <td>&nbsp;</td>\n";
    echo "                <td>&nbsp;</td>\n";
    echo "            </thead>\n";
    ##### This is for meetings created or owned by loggeed in user
    $i = 0;
    $sql = "SELECT addressid from tbl_address_book WHERE ownerid = " . $uid . " order by name asc";
    $aids = getArray($sql);
    foreach ($aids as $val)
    {
        $aid = $val['addressid'];
        
        echo "\t\t<TR>\n";
        echo "\t<TD>" . getData("SELECT name from tbl_address_book WHERE addressid = " . $aid . "") . "</a></td>\n";
        echo "\t<td>" . getData("SELECT email from tbl_address_book WHERE addressid = " . $aid . "") . "</td>\n"; 
        echo "\t<td>" . getData("SELECT created from tbl_address_book WHERE addressid = " . $aid . "") . "</td>\n";
        echo "\t<td>" . getData("SELECT lastsent from tbl_address_book WHERE addressid = " . $aid . "") . "</td>\n";
        echo "\t<td><CENTER><button onclick=\"alert('');\" ";
        echo "type=\"button\" class=\"btn btn-sm btn-success \"> Edit </button></CENTER></td>\n";
        echo "\t<td><CENTER><button onclick=\"doDelete(" . $i . ", 'dai');\" ";
        echo "type=\"button\" class=\"btn btn-sm btn-success \"> Remove </button></CENTER></td>\n";
        echo "\t\t</TR>\n";
        $i++;
    }
    echo "        </table>\n";
}
else
{
    echo "Add or import your address book!";
}
###################
echo "<!------ PRIMARY CONTAINER STOP  -------->\n";
echo "    </div> <!-- /container -->\n";
echo "<!-------------  START MODAL ADD FORM  ---->\n";
echo "\t\t<!--------- SCRIPT FOR ADDING ADDRESS BOOK ENTRIES --------->\n";
echo "<SCRIPT>
        function loadDoc(url, cFunction) {
            var xhttp;
            xhttp=new XMLHttpRequest();
            xhttp.onreadystatechange = function() 
            {
                if (this.readyState == 4 && this.status == 200) 
                {
                  cFunction(this);
                }
              };
              xhttp.open(\"GET\", url, true);
              xhttp.send();
            }
            function myFunction(xhttp) 
            {
              document.getElementById(\"panel_body_head\").innerHTML =
              xhttp.responseText;
            }
            function myFunction2(xhttp) 
            {
              document.getElementById(\"add_ab_entry_panel\").innerHTML =
              xhttp.responseText;
            }
     </SCRIPT>";
echo "\t\t<script>\n";
echo "\t\t\tfunction addABEntryFunc()\n";
echo "\t\t\t{\n";
echo "\t\t\t\tvar aaiForm   = document.forms.add_entry_address_book_form;\n";
echo "\t\t\t\tvar aaiName   = aaiForm.ab_name.value;\n";
echo "\t\t\t\tvar aaiEmail  = aaiForm.ab_email.value;\n";
echo "\t\t\t\tvar aaiTNWW   = \"" . encrypt_decrypt("encrypt", $uid) . "\";\n";
echo "\t\t\t\tvar aaiFT     = \"" . getFormKey($uid) . "\";\n";
echo "\t\t\t\tif (aaiName.length > 0 && aaiEmail.length > 0)\n";
echo "\t\t\t\t{\n";
echo "\t\t\t\t\tvar varURL = \"/apps/procNewABEntry.php?\";\n";
echo "\t\t\t\t\tvarURL += \"tnww=\" + aaiTNWW;\n";
echo "\t\t\t\t\tvarURL += \"&tok_frm=\" + aaiFT;\n";
echo "\t\t\t\t\tvarURL += \"&nm=\" + aaiName;\n";
echo "\t\t\t\t\tvarURL += \"&em=\" + aaiEmail;\n";
#echo "\t\t\t\t\talert(varURL);\n";
echo "\t\t\t\t\tloadDoc(varURL, myFunction);\n";
echo "\t\t\t\t\taaiForm.ab_name.value =\"\";\n";
echo "\t\t\t\t\taaiForm.ab_email.value =\"\";\n";
echo "\t\t\t\t\taaiForm.ab_name.focus();\n";
echo "\t\t\t\t}\n";
echo "\t\t\t\telse\n";
echo "\t\t\t\t{\n";
echo "\t\t\t\t\talert('Missing name or email');\n";
echo "\t\t\t\t}\n";
echo "\t\t\t}\n";
echo "\t\t</script>\n";
echo "\t\t<!------END SCRIPT FOR ADDRESS BOOK ENTRIES --------->\n";
echo "<!-- Modal -->\n
<div id=\"AddFormModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Add Contact to Address Book</h4>
      </div>
      <div class=\"modal-body\">\n";
echo "\t\t\t\t<h3>Add:</h3>\n";
echo "\t\t\t\t<table>\n";
echo "\t\t\t\t\t<form name=\"add_entry_address_book_form\">\n";
echo "\t\t\t\t\t\t<TR>\n";
echo "\t\t\t\t\t\t\t<TD><label class=\"control-label control-label-left col-sm-3\" for=\"name\">Name:</label></TD>\n";        
echo "\t\t\t\t\t\t\t<TD><input name=\"ab_name\" type=\"text\" class=\"form-control k-textbox\" data-role=\"text\" required=\"required\"></TD>\n";
echo "\t\t\t\t\t\t</TR>\n";
echo "\t\t\t\t\t\t<TR>\n";
echo "\t\t\t\t\t\t\t<TD><label class=\"control-label control-label-left col-sm-3\" for=\"name\">Email Address:</label></TD>\n";        
echo "\t\t\t\t\t\t\t<TD><input name=\"ab_email\" type=\"text\" class=\"form-control k-textbox\" data-role=\"text\" required=\"required\"></TD>\n";
echo "\t\t\t\t\t\t</TR>\n";
echo "\t\t\t\t\t\t<TR>\n";
echo "\t\t\t\t\t\t\t<TD>&nbsp;</TD>\n";        
echo "\t\t\t\t\t\t\t<TD>";
echo "<button type=\"button\" class=\"btn btn-info btn-sm\" onclick=\"addABEntryFunc();\">Add</button></TD>\n";
echo "\t\t\t\t\t\t</TR>\n";
echo "\t\t\t\t\t</form>\n";
echo "\t\t\t\t</table>\n";
echo "\t\t\t</div>\n";
echo "\t\t\t<div id=\"add_ab_entry_panel\" class=\"modal-footer\">\n";
echo "\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>\n";
echo "\t\t\t</div>\n";
echo "</div>
  </div>
</div>\n";
echo "<!-------------  END MODAL FOR ADD FORM  ---->\n";

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
