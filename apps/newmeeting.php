<?php

include('functions.php');


error_reporting(E_ERROR | E_WARNING);

echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"https://getbootstrap.com/favicon.ico\">

    <title>Electric Policy</title>
    <!------- https://getbootstrap.com/examples/navbar-fixed-top/ ----->
    <!-- Bootstrap core CSS -->
    <link href=\"https://getbootstrap.com/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href=\"https://getbootstrap.com/assets/css/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"https://getbootstrap.com/examples/navbar-fixed-top/navbar-fixed-top.css\" rel=\"stylesheet\">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
    <script src=\"../../assets/js/ie-emulation-modes-warning.js\"></script>

    <link href=\"http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"http://wenzhixin.net.cn/p/bootstrap-table/src/bootstrap-table.css\" rel=\"stylesheet\" type=\"text/css\" />

    <link href=\"http://cdn.kendostatic.com/2014.1.318/styles/kendo.common.min.css\" rel=\"stylesheet\" />
    <link href=\"http://cdn.kendostatic.com/2014.1.318/styles/kendo.bootstrap.min.css\" rel=\"stylesheet\" />
    <link href=\"http://protostrap.com/Assets/gv/css/gv.bootstrap-form.css\" rel=\"stylesheet\" type=\"text/css\" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>

    <!-- Fixed navbar -->
    <nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"/apps/\">Electric Policy</a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav\">";

echo "            <li class=\"active\"><a href=\"index.php\">Home</a></li>\n";
echo "            <li><a href=\"/apps/mymeetings.php\">My Meetings</a></li>\n";
echo "            <li><a href=\"/apps/policy.php\">Policy</a></li>\n";
echo "            <li><a href=\"/apps/ab.php\">Address Book</a></li>\n";
echo "            <li><a href=\"#contact\">Contact</a></li>\n";
echo "                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">Action</a>
                            </li>
                            <li><a href=\"#\">Another action</a>
                            </li>
                            <li><a href=\"#\">Something else here</a>
                            </li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li class=\"dropdown-header\">Nav header</li>
                            <li><a href=\"#\">Separated link</a>
                            </li>
                            <li><a href=\"#\">One more separated link</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!----
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"../navbar/\">Default</a></li>
            <li><a href=\"../navbar-static-top/\">Static top</a></li>
            <li class=\"active\"><a href=\"./\">Fixed top <span class=\"sr-only\">(current)</span></a></li>
          </ul>
           ----->
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <div class=\"container\">";
echo "        <!-----    CONTAINER START ------>
        <form action=\"/apps/pnmr.php\" method=\"POST\" id=\"formentry\" class=\"form-horizontal\" role=\"form\" data-parsley-validate novalidate>
        <input type=\"hidden\" name=\"fat\" value=\"T2x3PoIbCu42JRBZW5rhMaUy8F0N\">
            <div class=\"container-fluid shadow\">
                <div class=\"row\">
                    <div id=\"valErr\" class=\"row viewerror clearfix hidden\">
                        <div class=\"alert alert-danger\">Oops! Seems there are some errors..</div>
                    </div>
                    <div id=\"valOk\" class=\"row viewerror clearfix hidden\">
                        <div class=\"alert alert-success\">Yay! ..</div>
                    </div>


                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group brdbot\">
                                        <h3>New Meeting Creation:</h3>
                                        <div class=\"controls col-sm-9\">

                                            <p id=\"field50\" data-default-label=\"Header\" data-default-is-header=\"true\" data-control-type=\"header\"></p><span id=\"errId1\" class=\"error\"></span>
                                        </div>

                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label control-label-left col-sm-3\" for=\"name\">Meeting Name:<span class=\"req\"> *</span>
                                        </label>
                                        <div class=\"controls col-sm-9\">

                                            <input name=\"name\" class=\"form-control k-textbox\" data-role=\"text\" required=\"required\" data-parsley-errors-container=\"#errId2\" type=\"text\"><span id=\"errId2\" class=\"error\"></span>
                                        </div>

                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label control-label-left col-sm-3\" for=\"m_desc\">Meeting Description:<span class=\"req\"> *</span>
                                        </label>
                                        <div class=\"controls col-sm-9\">

                                            <textarea name=\"m_desc\" rows=\"3\" class=\"form-control k-textbox\" data-role=\"textarea\" required=\"required\" data-parsley-errors-container=\"#errId3\"></textarea><span id=\"errId3\" class=\"error\"></span>
                                        </div>

                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label control-label-left col-sm-3\" for=\"m_time\">Meeting Date &amp; Time:<span class=\"req\"> *</span>
                                        </label>
                                        <div class=\"controls col-sm-9\">

                                            <span style=\"\" class=\"k-widget k-datetimepicker k-header form-control\"><span class=\"k-picker-wrap k-state-default\"><input name=\"m_time\" class=\"form-control k-input\" data-role=\"datetime\" style=\"width: 100%;\" role=\"textbox\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-disabled=\"false\" aria-readonly=\"false\" aria-label=\"Current focused date is 5/4/2017 1:00:00 PM\" data-error-container=\"#errfield3\" required=\"required\" aria-activedescendant=\"field3_option_selected\" data-date-format=\"yyyy-mm-dd hh:ii\" data-parsley-errors-container=\"#errId4\" type=\"text\"><span unselectable=\"on\" class=\"k-select\"><span unselectable=\"on\" class=\"k-icon k-i-calendar\" role=\"button\" aria-controls=\"field3_dateview\">select</span><span unselectable=\"on\" class=\"k-icon k-i-clock\" role=\"button\" aria-controls=\"field3_timeview\">select</span></span>
                                            </span>
                                            </span><span id=\"errId4\" class=\"error\"></span>
                                        </div>

                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label control-label-left col-sm-3\" for=\"m_time_zone\">Time Zone:<span class=\"req\"> *</span>
                                        </label>
                                        <div class=\"controls col-sm-9\">

                                            <select name=\"m_time_zone\" class=\"form-control\" data-role=\"select\" required=\"required\" selected=\"selected\" data-parsley-errors-container=\"#errId5\">" . getTimeZoneOptions() . "
                                                
                                            </select><span id=\"errId5\" class=\"error\"></span>
                                        </div>

                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label control-label-left col-sm-3\" for=\"m_duration\">Meeting Duration:<span class=\"req\"> *</span>
                                        </label>
                                        <div class=\"controls col-sm-9\">

                                            <select name=\"m_duration\" class=\"form-control\" data-role=\"select\" required=\"required\" selected=\"selected\" data-parsley-errors-container=\"#errId5\">





                                                <option value=\"15\">15</option>
                                                <option value=\"30\">30</option>
                                                <option value=\"45\">45</option>
                                                <option value=\"60\" selected=\"selected\">60</option>
                                                <option value=\"90\">90</option>
                                                <option value=\"\"></option>
                                            </select><span id=\"errId5\" class=\"error\"></span>
                                        </div>

                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label control-label-left col-sm-3\" for=\"location\">Meeting Location:</label>
                                        <div class=\"controls col-sm-9\">

                                            <select name=\"m_location\" class=\"form-control\" data-role=\"select\" data-parsley-errors-container=\"#errId6\">
                                                <option value=\"10001\" selected=\"selected\">Phone</option>";
$uid = "23244";
$sql = "select orgid from tbl_user WHERE uid = " . $uid . "";
$orgid = getData($sql);
$sql = "select locationid from tbl_location where orgid = " . $orgid;
$lids = getArray($sql);

foreach ($lids as $val)
{

    $lid = $val['locationid'];
    $sql = "SELECT loc_desc_long FROM tbl_location WHERE locationid = " . $lid;
    $locDesc = getData($sql);
    echo "                                                ";
    echo "<option value=\"" . $lid . "\">" . $locDesc . "</option>\n";
}                                              
echo "                                            </select><span id=\"errId6\" class=\"error\"></span>
                                        </div>

                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label control-label-left col-sm-3\">Recurring Meeting:<span class=\"req\"> *</span>
                                        </label>
                                        <div class=\"controls col-sm-9\">

                                            <label class=\"radio col-md-6\" for=\"radio21\">
                                                <input value=\"Option 1\" id=\"radio21\" name=\"rec_no\" required=\"required\" checked=\"checked\" data-parsley-errors-container=\"#errId7\" type=\"radio\">No</label>
                                            <label class=\"radio col-md-6\" for=\"radio22\">
                                                <input value=\"Option 2\" id=\"radio22\" name=\"rec_yes\" required=\"required\" data-parsley-errors-container=\"#errId7\" type=\"radio\">Yes</label><span id=\"errId7\" class=\"error\"></span>
                                        </div>

                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label control-label-left col-sm-3\" for=\"recur_every\">Recur every:</label>
                                        <div class=\"controls col-sm-9\">

                                            <select name=\"recur_every\" class=\"form-control\" data-role=\"select\" selected=\"selected\" data-parsley-errors-container=\"#errId8\">





                                                <option value=\"Day\" selected=\"selected\">Day</option>
                                                <option value=\"Week\">Week</option>
                                                <option value=\"Month\">Month</option>
                                                <option value=\"Year\">Year</option>
                                                <option value=\"\"></option>
                                            </select><span id=\"errId8\" class=\"error\"></span>
                                        </div>

                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label control-label-left col-sm-3\" for=\"recur_freq\">Recurrence Fequency:</label>
                                        <div class=\"controls col-sm-9\">

                                            <span style=\"\" class=\"k-widget k-numerictextbox form-control\"><span class=\"k-numeric-wrap k-state-default\"><input class=\"k-formatted-value form-control k-input\" tabindex=\"0\" style=\"display: inline;\" aria-disabled=\"false\" aria-readonly=\"false\" id=\"recur_freq\" data-parsley-errors-container=\"#errId9\" type=\"text\"><input name=\"recur_freq\" value=\"\" class=\"form-control k-input\" data-role=\"numeric\" data-format=\"integer\" role=\"spinbutton\" style=\"display: none;\" aria-valuenow=\"\" aria-disabled=\"false\" aria-readonly=\"false\" data-error-container=\"#errfield46\" data-default=\"1\" data-parsley-errors-container=\"#errId9\" type=\"text\"><span class=\"k-select\"><span unselectable=\"on\" class=\"k-link\"><span unselectable=\"on\" class=\"k-icon k-i-arrow-n\" title=\"Increase value\">Increase value</span></span><span unselectable=\"on\" class=\"k-link\"><span unselectable=\"on\" class=\"k-icon k-i-arrow-s\" title=\"Decrease value\">Decrease value</span></span>
                                            </span>
                                            </span>
                                            </span><span id=\"errId9\" class=\"error\"></span>
                                        </div>

                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label control-label-left col-sm-3\" for=\"st_date\">Recurrence Start Date:</label>
                                        <div class=\"controls col-sm-9\">

                                            <span style=\"\" class=\"k-widget k-datepicker k-header form-control\"><span class=\"k-picker-wrap k-state-default\"><input name=\"st_date\" class=\"form-control k-input\" data-role=\"date\" style=\"width: 100%;\" role=\"textbox\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-owns=\"field47_dateview\" aria-disabled=\"false\" aria-readonly=\"false\" aria-label=\"Current focused date is null\" data-error-container=\"#errfield47\" data-parsley-errors-container=\"#errId10\" type=\"text\"><span unselectable=\"on\" class=\"k-select\" role=\"button\" aria-controls=\"field47_dateview\"><span unselectable=\"on\" class=\"k-icon k-i-calendar\">select</span></span>
                                            </span>
                                            </span><span id=\"errId10\" class=\"error\"></span>
                                        </div>

                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label control-label-left col-sm-3\" for=\"end_date\">Recurrence End Date:</label>
                                        <div class=\"controls col-sm-9\">

                                            <span style=\"\" class=\"k-widget k-datepicker k-header form-control\"><span class=\"k-picker-wrap k-state-default\"><input name=\"end_date\" class=\"form-control k-input\" data-role=\"date\" style=\"width: 100%;\" role=\"textbox\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-owns=\"field48_dateview\" aria-disabled=\"false\" aria-readonly=\"false\" aria-label=\"Current focused date is null\" data-error-container=\"#errfield48\" data-parsley-errors-container=\"#errId11\" type=\"text\"><span unselectable=\"on\" class=\"k-select\" role=\"button\" aria-controls=\"field48_dateview\"><span unselectable=\"on\" class=\"k-icon k-i-calendar\">select</span></span>
                                            </span>
                                            </span><span id=\"errId11\" class=\"error\"></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">



                                <button onclick=\"\" id=\"button54\" type=\"submit\" class=\"btn btn-lg btn-info\">Save Meeting</button>
                                <button onclick=\"window.location.href='/apps/'\" id=\"button58\" type=\"button\" class=\"btn btn-lg btn-info\">Cancel</button>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </form>
        

    </div>
    <!-----    CONTAINER END ------>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>
        window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\/script>')
    </script>
    <script src=\"https://getbootstrap.com/dist/js/bootstrap.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"https://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js\"></script>
    <script src=\"http://cdn.kendostatic.com/2014.1.318/js/jquery.min.js\"></script>
    <script src=\"http://protostrap.com/Assets/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
    <script src=\"http://wenzhixin.net.cn/p/bootstrap-table/src/bootstrap-table.js\" type=\"text/javascript\"></script>

    <script src=\"http://protostrap.com/Assets/inputmask/js/jquery.inputmask.js\" type=\"text/javascript\"></script>
    <script src=\"http://cdn.kendostatic.com/2014.1.318/js/kendo.all.min.js\"></script>
    <script src=\"http://protostrap.com/Assets/parsely/parsley.extend.js\" type=\"text/javascript\"></script>
    <script src=\"http://protostrap.com/Assets/parsely/2.0/parsley.js\" type=\"text/javascript\"></script>
    <script src=\"http://protostrap.com/Assets/download.js\" type=\"text/javascript\"></script>
    <script src=\"http://protostrap.com/Assets/protostrap.js\" type=\"text/javascript\"></script>

</body>

</html>";

?>