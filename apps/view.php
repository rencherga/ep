<?php

include('functions.php');

error_reporting(E_ERROR | E_WARNING);

$uid = 23244;
$mid = $_GET["mid"];

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
echo "<script>

            function persistAdd(idList)
            {
                var varURL = \"/apps/procNewInvitee.php?tok_frm=\";
                varURL  += \"" . getFormKey($uid) . "&id_list=\";
                varURL  += idList + \"&tnww=\";
                varURL  += \"" . encrypt_decrypt("encrypt",$uid) . "\"; 
                varURL  += \"&mid=" . $mid . "\";\n";
echo "         
                loadDoc(varURL, myFunction);
                
            }
            function loadDoc(url, cFunction) {
              var xhttp;
              xhttp=new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                  cFunction(this);
                }
              };
              xhttp.open(\"GET\", url, true);
              xhttp.send();
            }
            function myFunction(xhttp) {
              document.getElementById(\"add_invitee_panel\").innerHTML =
              xhttp.responseText;
            }
            function myFunction2(xhttp) {
              document.getElementById(\"add_agenda_item_panel\").innerHTML =
              xhttp.responseText;
            }
            function removeAgendaItem(aitr)
            {
                var vURL = \"/apps/procDelItem.php?tok_frm=\";
                vURL += \"" . getFormKey($uid) . "\";
                vURL += \"&tnww=" . encrypt_decrypt("encrypt",$uid) . "\";
                vURL += \"&jb=rai&aid=\" + aitr;
                loadDoc(vURL, myFunction2);
            }
            function removeAttendee(ai)
            {
                var vURL = \"/apps/procDelItem.php?tok_frm=\";
                vURL += \"" . getFormKey($uid) . "\";
                vURL += \"&tnww=" . encrypt_decrypt("encrypt",$uid) . "\";
                vURL += \"&jb=rati&aid=\" + ai;
                vURL += \"&mid=" . encrypt_decrypt("encrypt",$mid) . "\";
                
                loadDoc(vURL, myFunction2);
            }
            </script>\n";
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

$sql = "SELECT COUNT(*) FROM tbl_meeting WHERE m_owner = " . $uid . " AND meetingid = " . $mid;
$real = getData($sql);
if ($real > 0)
{
    
    $meet = new Meeting("","");
    $meet = $meet->getWholeMeeting($mid);
    
    echo "<div class=\"panel panel-primary\">\n";
    echo "<div class=\"panel-heading\">" . $meet->m_title . "</div>\n";
    echo "<div class=\"panel-body\">" . "" . "</div>\n";
    
    echo "\t\t<table class=\"table table-bordered table-striped table-hover \">\n";
    echo "\t\t\t<TR><TD><B>Meeting Time:</b></TD><TD><button type=\"button\" class=\"btn btn-info btn-sm\" ";
    echo " data-toggle=\"modal\" data-target=\"#myEditDateTimeModal\">" . $meet->mdate . "</button></TD></TR>\n";
    echo "\t\t\t<TR><TD><B>Meeting Length:</b></TD><TD>" . $meet->mduration . "</TD></TR>\n";
    echo "\t\t\t<TR><TD><B>Meeting Location:</b></TD><TD>" . $meet->m_locationName . "</TD></TR>\n";
    echo "\t\t\t<TR><TD><B>Attedees Invited:</b></TD><TD>";
    echo "<button type=\"button\" class=\"btn btn-info btn-sm\" data-toggle=\"modal\" data-target=\"#myModal\">";
    echo " View " . $meet->m_attendee_count . " attendees</button>";
    echo "&nbsp;&nbsp;&nbsp;";
    echo "<button type=\"button\" class=\"btn btn-info btn-sm\" data-toggle=\"modal\" data-target=\"#myAddAttendeeModal\">";
    echo "Add</button>";
    echo "</TD></TR>\n";
    
    ######  go get agenda items 
    
    $a_html = "";
    if ($meet->m_agenda > 0)
    {
      $sql = "SELECT COUNT(*) FROM tbl_agenda_child WHERE agendaid =  " . $meet->m_agenda;   
      $agenda_items = getData($sql);
      if ($agenda_items > 0)
      {
            $sql = "SELECT child_id FROM tbl_agenda_child WHERE agendaid = " . $meet->m_agenda;
            $cids = getArray($sql);
            #$iC = 0;
            foreach ($cids as $val)
            {
                $cid = $val['child_id'];
                $sql = "SELECT ownerid FROM tbl_agenda_child WHERE child_id = " . $cid;
                #echo "\n<!------- SQL " . $iC . " = " . $sql . " -------------->\n"; 
                $oid = getData($sql);
                $ownerName = getData("SELECT CONCAT(f_name, ' ', l_name) FROM tbl_user WHERE uid = " . $oid);
                $agendaItem = getData("SELECT agenda_item_name FROM tbl_agenda_child WHERE child_id = " . $cid);
                $lastTouched= getData("SELECT last_modified FROM tbl_agenda_child WHERE child_id = " . $cid);
                $a_html .= "\t\t\t\t<TR><TD>" . $ownerName . "</TD><TD>" . $agendaItem . "</TD><TD>" . $lastTouched . "</TD>";
                $a_html .= "<TD><CENTER><button onclick=\"removeAgendaItem('" . encrypt_decrypt("encrypt",$cid) . "');\" ";
                $a_html .= "type=\"button\" class=\"btn btn-sm btn-success \"> Remove </button></CENTER></TD></TR>\n";
                #$iC++;
            }
            echo "\t\t\t<TR><TD><B>Agenda:</b></TD><TD>";
            echo "<button type=\"button\" class=\"btn btn-info btn-sm\" data-toggle=\"modal\" data-target=\"#myAgendaModal\">";
            echo " View " . $agenda_items . " items</button>&nbsp;&nbsp;&nbsp;";
            echo "<button type=\"button\" class=\"btn btn-info btn-sm\" data-toggle=\"modal\" data-target=\"#myAddAgendaModal\">Add</button></TD></TR>\n";
            echo "</TD></TR>\n";
      }
      else
      {
          echo "\t\t\t<TR><TD><B>Agenda:</b></TD><TD>";
          echo "<button type=\"button\" class=\"btn btn-info btn-sm\" data-toggle=\"modal\" data-target=\"#myAddAgendaModal\">Add Agenda Items</button></TD></TR>\n";
      }
    }
    else   
    {
        echo "\t\t\t<TR><TD><B>Agenda:</b></TD><TD>";
        echo "<button type=\"button\" class=\"btn btn-info btn-sm\" data-toggle=\"modal\" data-target=\"#myAddAgendaModal\">Add Agenda Items</button></TD></TR>\n";
    }
    echo "\t\t\t<TR><TD><B>Description:</b></TD><TD>" . $meet->m_desc . "</TD></TR>\n";
    echo "\t\t\t<TR><TD><B>Owner:</b></TD><TD>" . $meet->m_owner . "</TD></TR>\n";	
    echo "\t\t\t<TR><TD><B>Timezone:</b></TD><TD>" . $meet->m_timezone . "</TD></TR>\n";	
    echo "\t\t\t<TR><TD><B>Voting:</b></TD><TD>" . $meet->vote_to_be_held . "</TD></TR>\n";
    echo "\t\t\t<TR><TD><B>VoteHeld:</b></TD><TD>" . $meet->vote_held . "</TD></TR>\n";
    echo "\t\t\t<TR><TD><B>Vote Completed:</b></TD><TD>" . $meet->vote_completed . "</TD></TR>\n";	
    echo "\t\t\t<TR><TD><B>Meeting Created:</b></TD><TD>" . $meet->created . "</TD></TR>\n";	
    echo "\t\t\t<TR><TD><B>Recurring Meeting:</b></TD><TD>" . $meet->recurring . "</TD></TR>\n";	
    echo "\t\t\t<TR><TD><B>Type of Recurring:</b></TD><TD>" . $meet->recurring_type . "</TD></TR>\n";	
    echo "\t\t\t<TR><TD><B>Recurring Meeting Length</b></TD><TD>" . $meet->recurring_indicator . "</TD></TR>\n";	
    echo "\t\t\t<TR><TD><B>Recurring Start Date:</b></TD><TD>" . $meet->recurring_st_date . "</TD></TR>\n";	
    echo "\t\t\t<TR><TD><B>Recurring End Date:</b></TD><TD>" . $meet->recurring_ed_date . "</TD></TR>\n";
    echo "\t\t</table>\n";
    echo "<!----------------  Modal for attendees -------------------------->\n";
    echo "<!-- Modal -->\n
    <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
      <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h4 class=\"modal-title\">" . $meet->m_title . "</h4>
          </div>
          <div class=\"modal-body\">
            <h3>Attendees</h3>\n
                <table class=\"table table-bordered table-striped table-hover \">\n";
        $sql = "SELECT A.attendeeid FROM tbl_attendees A, tbl_address_book B WHERE A.attendeeid = B.addressid AND A.meetingid = " . $mid;
        $sql .= " ORDER by B.name asc ";
        echo "<!------------- " . $sql . "---------->";
        $aids = getArray($sql);
        foreach ($aids as $val)
        {
            $aid = $val['attendeeid'];
            $sql = "SELECT name FROM tbl_address_book WHERE addressid = " . $aid;
            echo "\t\t\t\t<TR><TD>" . getData($sql) . "</TD>";
            echo "<TD><CENTER><button onclick=\"removeAttendee('" . encrypt_decrypt("encrypt", $aid) . "');\" ";
            echo "type=\"button\" class=\"btn btn-sm btn-success \"> Remove </button></CENTER></TD></TR>\n";
        }
echo "          </table>\n";
     echo "</div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
          </div>
        </div>
      </div>
    </div>\n";
    echo "<!-------------  END MODAL FOR INVITEES  ---->\n";
    
    echo "<!-------------  START MODAL FOR DATE/TIME EDIT  ---->
    <div id=\"myEditDateTimeModal\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">    
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Edit Meeting Date and Time</h4>
                </div>
                <div class=\"modal-body\">
                    <h3>Date / Time</h3>\n
                    <div class=\"controls col-sm-9\">
                        <form name=\"edit_date_time_form\">\n";
            $strDate = getData("SELECT mdate from tbl_meeting where meetingid = " . $meet->meetingid);
            $strDateDropDown = getDateDropDowns($strDate);   
            $strTimeDropDown = getTimeDropDowns($strDate); 
    echo "                  <table border='0'>\n";
    echo "                     <TR>\n" . $strTimeDropDown . "</TR>\n";
    echo "                     <TR>\n" . $strDateDropDown . "</TR>\n";
    echo "                  </table>\n";
    echo "              </form>\n";
echo "              </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div></div>
    </div>\n";
     echo "<!-------------  END   MODAL FOR DATE/TIME EDIT  ---->\n";
     
    echo "<!-------------  START MODAL VIEW AGENDA ITEMS  ---->\n";
    echo "<!-- Modal -->\n
    <div id=\"myAgendaModal\" class=\"modal fade\" role=\"dialog\">
      <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h4 class=\"modal-title\">" . $meet->m_title . "</h4>
          </div>
          <div class=\"modal-body\">
            <h3>Agenda Items</h3>\n";
            echo "\t\t\t<table class=\"table table-bordered table-striped table-hover \">\n";
            echo $a_html;
            echo "\t\t\t</table>\n";
            echo "</div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
          </div>
        </div>
      </div>
    </div>\n";
    
    echo "<!-------------  END MODAL FOR VIEW AGENDA ITEMS  ---->\n";
    echo "<!-------------  START MODAL ADD AGENDA ITEMS  ---->\n";
    echo "\t\t<!--------- SCRIPT FOR ADDING AGENDA ITEMS --------->\n";
    echo "\t\t<script>\n";
    echo "\t\t\tfunction addAgendaItemFunc()\n";
    echo "\t\t\t{\n";
    echo "\t\t\t\tvar aaiForm  = document.forms.add_agenda_item_form;\n";
    echo "\t\t\t\tvar aaiName  = aaiForm.a_name.value;\n";
    echo "\t\t\t\tvar aaiDesc  = aaiForm.a_desc.value;\n";
    echo "\t\t\t\tvar aaiMid   = \"" . encrypt_decrypt("encrypt", $mid) . "\";\n";
    echo "\t\t\t\tvar aaiTNWW  = \"" . encrypt_decrypt("encrypt", $uid) . "\";\n";
    echo "\t\t\t\tvar aaiFT    = \"" . getFormKey($uid) . "\";\n";
    echo "\t\t\t\tif (aaiDesc.length > 0 && aaiName.length > 0)\n";
    echo "\t\t\t\t{\n";
    echo "\t\t\t\t\tvar varURL = \"/apps/procNewAgenda.php?\";\n";
    echo "\t\t\t\t\tvarURL += \"mid=\" + aaiMid;\n";
    echo "\t\t\t\t\tvarURL += \"&tnww=\" + aaiTNWW;\n";
    echo "\t\t\t\t\tvarURL += \"&tok_frm=\" + aaiFT;\n";
    echo "\t\t\t\t\tvarURL += \"&nm=\" + aaiName;\n";
    echo "\t\t\t\t\tvarURL += \"&desc=\" + aaiDesc;\n";
    #echo "\t\t\t\t\talert(varURL);\n";
    echo "\t\t\t\t\tloadDoc(varURL, myFunction2);\n";
    echo "\t\t\t\t\taaiForm.a_name.value =\"\";\n";
    echo "\t\t\t\t\taaiForm.a_desc.value =\"\";\n";
    echo "\t\t\t\t\taaiForm.a_name.focus();\n";
    echo "\t\t\t\t\tlocation.reload();\n"; 
    echo "\t\t\t\t}\n";
    echo "\t\t\t\telse\n";
    echo "\t\t\t\t{\n";
    echo "\t\t\t\t\talert('Missing description or name');\n";
    echo "\t\t\t\t}\n";
    echo "\t\t\t}\n";
    echo "\t\t</script>\n";
    echo "\t\t<!------END SCRIPT FOR ADDING AGENDA ITEMS --------->\n";
    echo "<!-- Modal -->\n";
    echo "<div id=\"myAddAgendaModal\" class=\"modal fade\" role=\"dialog\">\n";
    echo "\t<div class=\"modal-dialog\">\n";
    echo "\t\t<!-- Modal content-->\n";
    echo "\t\t\t<div class=\"modal-content\">\n";
    echo "\t\t\t\t<div class=\"modal-header\">\n";
    echo "\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>\n";
    echo "\t\t\t\t<h4 class=\"modal-title\">" . $meet->m_title . "</h4>\n";
    echo "\t\t\t</div>\n";
    echo "\t\t\t<div class=\"modal-body\">\n";
    echo "\t\t\t\t<h3>Agenda Items:</h3>\n";
    echo "\t\t\t\t<table>\n";
    echo "\t\t\t\t\t<form name=\"add_agenda_item_form\">\n";
    echo "\t\t\t\t\t\t<TR>\n";
    echo "\t\t\t\t\t\t\t<TD><label class=\"control-label control-label-left col-sm-3\" for=\"name\">Agenda Item:</label></TD>\n";        
    echo "\t\t\t\t\t\t\t<TD><input name=\"a_name\" type=\"text\" class=\"form-control k-textbox\" data-role=\"text\" required=\"required\"></TD>\n";
    echo "\t\t\t\t\t\t</TR>\n";
    echo "\t\t\t\t\t\t<TR>\n";
    echo "\t\t\t\t\t\t\t<TD><label class=\"control-label control-label-left col-sm-3\" for=\"name\">Item Description:</label></TD>\n";        
    echo "\t\t\t\t\t\t\t<TD><textarea name=\"a_desc\" class=\"form-control k-textbox\" data-role=\"textarea\" required=\"required\"></textarea></TD>\n";
    echo "\t\t\t\t\t\t</TR>\n";
    echo "\t\t\t\t\t\t<TR>\n";
    echo "\t\t\t\t\t\t\t<TD>&nbsp;</TD>\n";        
    echo "\t\t\t\t\t\t\t<TD>";
    echo "<button type=\"button\" class=\"btn btn-info btn-sm\" onclick=\"addAgendaItemFunc();\">Add</button></TD>\n";
    echo "\t\t\t\t\t\t</TR>\n";
    echo "\t\t\t\t\t</form>\n";
    echo "\t\t\t\t</table>\n";
    echo "\t\t\t</div>\n";
    echo "\t\t\t<div id=\"add_agenda_item_panel\" class=\"modal-footer\">\n";
    echo "\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>\n";
    echo "\t\t\t</div>\n";
    echo "\t\t</div>\n";
    echo "\t</div>\n";
    echo "</div>\n";
    echo "<!-------------  END MODAL FOR ADD AGENDA ITEMS  ---->\n";
    echo "<!-------------  START MODAL ADD ATTENDEES  ---->\n";
    echo "<!-- Modal -->\n
    <div id=\"myAddAttendeeModal\" class=\"modal fade\" role=\"dialog\">\n";
    echo "<script>\n";
    echo "function show()\n";
    echo "{\n";
    echo "     var InvForm = document.forms.add_attendee;\n";
    echo "     var SelBranchVal = \"\";\n";
    echo "     var x = 0;\n";
    echo "     for (x=0;x<InvForm.items.length;x++)\n";
    echo "     {\n";
    echo "        if(InvForm.items[x].selected)\n";
    echo "        {\n";
    echo "         SelBranchVal = InvForm.items[x].value + \",\" + SelBranchVal ;\n";
    echo "        }\n";
    echo "     }\n";
    echo "     \n";
    echo "     persistAdd(SelBranchVal);\n";
    echo "     return SelBranchVal;\n";
    echo "}\n";
    echo "</script>\n";
    echo "<div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h4 class=\"modal-title\">Add Attendees</h4>
          </div>
          <div class=\"modal-body\">\n";
            echo "\t\t<form name=\"add_attendee\">\n";
            echo "\t\t\t<label for=\"sel2\">Potential Attendees:</label>\n\t\t\t<select multiple name=\"items\" class=\"form-control\" id=\"sel2\">\n";
            #$sql = "SELECT addressid FROM tbl_address_book  WHERE ownerid = " . $uid . " ORDER BY name ASC";
            $sql = "SELECT addressid FROM tbl_address_book WHERE ownerid = " . $uid . " AND addressid NOT IN ";
            $sql .= "(SELECT attendeeid FROM tbl_attendees WHERE meetingid = " . $mid . " ) ORDER BY name ASC ";
            $adids = getArray($sql);
            foreach ($adids as $val)
            {
                $aid = $val['addressid'];
                $sql = "SELECT name FROM tbl_address_book WHERE addressid = " . $aid;
                echo "\t\t\t\t<option value=\"" . $aid . "\">" . getData($sql) . "</option>\n";
            }
            echo "";
            echo "\t\t\t</select>";
            echo "\t\t\t";
            echo "\t\t\t<BR>\n";
            echo "\t\t\t<button onclick=\"show();\" type=\"button\" class=\"btn btn-sm btn-success \">Add</button>";
            echo "\t\t</form>";
            echo "</div>
          <div id=\"add_invitee_panel\" class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
          </div>
        </div>
      </div>
    </div>\n";
    
    
    echo "<!-------------  END MODAL ADD ATTENDEES  ---->\n";
}
else
{
   echo "<h2>Invalid meeting!</h2>\n";
   echo "\t\t<form><button onclick=\"window.location.href='/apps/newmeeting.php'\" type=\"button\" class=\"btn btn-lg btn-success \">New Meeting</button></form>\n";    
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



