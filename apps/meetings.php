<?php

include('functions.php');

error_reporting(E_ERROR | E_WARNING);

echo "<!DOCTYPE html>\n";
echo "<html class=' pp' lang='en'>\n";
echo "<head>\n";
echo "    <meta charset='utf-8'>\n";
echo "    <meta content='IE=Edge,chrome=1' http-equiv='X-UA-Compatible'>\n";
echo "    <title>Meetings - ElectricPolicy</title>\n";
echo "    <meta name=\"csrf-param\" content=\"authenticity_token\" />\n";
echo "    <meta name=\"csrf-token\" content=\"Ec7KGeWJdFdtu1/6gdVwrRWBWUdSQBhtlEVSg8kIMT3x2HAflSjpFLE2IAyJWk6sfVUXT7pnwmgQ0o/RF93q4g==\" />\n";
echo "\n";

echo "    <link rel=\"stylesheet\" media=\"all\" href=\"https://assets0.productplan.com/assets/application-0fbdc17e3f9f3ce8c309a48e9d64b9f9e07ea1b67ed588adcf5557d1e5a8fdb3.css\" />\n";
echo "    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"https://assets0.productplan.com/assets/favicon-ad9ab65e552a23afddc9a34a4fddb448f79362ab05cef1475c0b794327ba7377.ico\" />\n";
echo "    \n";
echo "</head>\n";
echo "\n";
echo "<body data-action='index' data-controller='roadmapsController'>\n";
echo "    <!-- Google Tag Manager -->\n";
echo "    <noscript>\n";
echo "        <iframe src=\"//www.googletagmanager.com/ns.html?id=GTM-56MDRJ\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe>\n";
echo "    </noscript>\n";
echo "    <script>\n";
echo "        dataLayer.push({\n";
echo "            'userId': '68339'\n";
echo "        });\n";
echo "        (function(w, d, s, l, i) {\n";
echo "            w[l] = w[l] || [];\n";
echo "            w[l].push({\n";
echo "                'gtm.start': new Date().getTime(),\n";
echo "                event: 'gtm.js'\n";
echo "            });\n";
echo "            var f = d.getElementsByTagName(s)[0],\n";
echo "                j = d.createElement(s),\n";
echo "                dl = l != 'dataLayer' ? '&l=' + l : '';\n";
echo "            j.async = true;\n";
echo "            j.src =\n";
echo "                '//www.googletagmanager.com/gtm.js?id=' + i + dl;\n";
echo "            f.parentNode.insertBefore(j, f);\n";
echo "        })(window, document, 'script', 'dataLayer', 'GTM-56MDRJ');\n";
echo "    </script>\n";
echo "    <!-- End Google Tag Manager -->\n";

echo "\n";
echo "    <nav class='navbar navbar-fixed-top navbar-default'>\n";
echo "        <div class='container-fluid'>\n";
echo "            <div class='navbar-header company-name'>\n";
echo "                <a class='navbar-brand' href='/' id='brand'>COPB</a>\n";
echo "            </div>\n";
echo "            <ul class='nav navbar-nav navbar-right user_menu'>\n";
echo "                <li><a id=\"roadmaps_header_link\" title=\"Create or view other roadmaps\" href=\"https://app.productplan.com/roadmaps\">Roadmaps</a>\n";
echo "                </li>\n";
echo "                <li class='notifications'></li>\n";
echo "                <li class='dropdown'>\n";
echo "                    <a class='dropdown-toggle pull-right' data-toggle='dropdown' href='#' id='user_menu'>\n";
echo "rencherga@ldschurch.org\n";
echo "<i class='fa fa-caret-down'></i>\n";
echo "<ul class='dropdown-menu'>\n";
echo "<li><a id=\"your_settings\" href=\"/user_settings/profile\">Your Settings</a>\n";
echo "                </li>\n";
echo "                <li>\n";
echo "                    <a id=\"billing\" href=\"/manage_subscription/overview\">Account Settings</a>\n";
echo "                </li>\n";
echo "                <li><a id=\"integrations\" href=\"https://app.productplan.com/integrations\">Integrations</a>\n";
echo "                </li>\n";
echo "                <li><a id=\"sign_out\" rel=\"nofollow\" data-method=\"delete\" href=\"https://app.productplan.com/users/sign_out\">Sign Out</a>\n";
echo "                </li>\n";
echo "            </ul>\n";
echo "            </a>\n";
echo "            </li>\n";
echo "            <li style='visibility:hidden;'>\n";
echo "                <a class='fullscreen-button show navbar-link' id='go-fullscreen'>\n";
echo "                    <i class='fa fa-arrows-alt' title='Start Presenter View'></i>\n";
echo "                </a>\n";
echo "            </li>\n";
echo "            </ul>\n";
echo "        </div>\n";
echo "    </nav>\n";
echo "\n";
echo "\n";
echo "    <div id='page-content'>\n";
echo "        <div class='container-fluid'>\n";
echo "\n";

echo "            <script src=\"https://assets0.productplan.com/assets/vendor-86d82988b4ca220cbc9fea50ba377344cd53db888b25048be3d858d08d4d2c05.js\"></script>\n";
echo "            <script src=\"https://assets0.productplan.com/assets/main-a69d1d54c371ed1ac43502f293444c0e20ffce6daeca6c46c231181226d315d9.js\"></script>\n";
echo <<<'EOD'
<script type="text/javascript">
                window.roadmap = false;
                window.masterPlan = false;
                window.colors = {
                    "0": {
                        "id": 0,
                        "color": "3b4750",
                        "rgb": "59,71,80",
                        "name": "Dark Grayish Blue"
                    },
                    "1": {
                        "id": 1,
                        "color": "205e91",
                        "rgb": "32,94,145",
                        "name": "Dark Blue"
                    },
                    "2": {
                        "id": 2,
                        "color": "42a9de",
                        "rgb": "66,169,222",
                        "name": "Bright Blue"
                    },
                    "3": {
                        "id": 3,
                        "color": "a9a9a9",
                        "rgb": "169,169,169",
                        "name": "Gray"
                    },
                    "4": {
                        "id": 4,
                        "color": "f06031",
                        "rgb": "240,96,49",
                        "name": "Red"
                    },
                    "5": {
                        "id": 5,
                        "color": "f9b300",
                        "rgb": "249,179,0",
                        "name": "Bright Orange"
                    },
                    "6": {
                        "id": 6,
                        "color": "6eb61f",
                        "rgb": "110,182,31",
                        "name": "Green"
                    },
                    "7": {
                        "id": 7,
                        "color": "b5070c",
                        "rgb": "181,7,12",
                        "name": "Dark Red"
                    },
                    "8": {
                        "id": 8,
                        "color": "4a635e",
                        "rgb": "74,99,94",
                        "name": "Dark Grayish Cyan"
                    },
                    "9": {
                        "id": 9,
                        "color": "23a688",
                        "rgb": "35,166,136",
                        "name": "Dark Cyan"
                    },
                    "10": {
                        "id": 10,
                        "color": "4ae9b6",
                        "rgb": "74,233,182",
                        "name": "Bright Cyan"
                    },
                    "11": {
                        "id": 11,
                        "color": "9d9d9d",
                        "rgb": "157,157,157",
                        "name": "Dark Gray"
                    },
                    "12": {
                        "id": 12,
                        "color": "fa3773",
                        "rgb": "250,55,115",
                        "name": "Pink"
                    },
                    "13": {
                        "id": 13,
                        "color": "fc3d1f",
                        "rgb": "252,61,31",
                        "name": "Bright Red"
                    },
                    "14": {
                        "id": 14,
                        "color": "f8941d",
                        "rgb": "248,148,29",
                        "name": "Orange"
                    },
                    "15": {
                        "id": 15,
                        "color": "ca0369",
                        "rgb": "202,3,105",
                        "name": "Strong Pink"
                    },
                    "16": {
                        "id": 16,
                        "color": "49363f",
                        "rgb": "73,54,63",
                        "name": "Dark Grayish Pink"
                    },
                    "17": {
                        "id": 17,
                        "color": "7a194b",
                        "rgb": "122,25,75",
                        "name": "Dark Pink"
                    },
                    "18": {
                        "id": 18,
                        "color": "ab367d",
                        "rgb": "171,54,125",
                        "name": "Dark Moderate Pink."
                    },
                    "19": {
                        "id": 19,
                        "color": "888888",
                        "rgb": "136,136,136",
                        "name": "Very Dark Gray"
                    },
                    "20": {
                        "id": 20,
                        "color": "29b864",
                        "rgb": "41,184,100",
                        "name": "Cyan Green"
                    },
                    "21": {
                        "id": 21,
                        "color": "00b89e",
                        "rgb": "0,184,158",
                        "name": "Cyan"
                    },
                    "22": {
                        "id": 22,
                        "color": "19508f",
                        "rgb": "25,80,143",
                        "name": "Blue"
                    },
                    "23": {
                        "id": 23,
                        "color": "029420",
                        "rgb": "2,148,32",
                        "name": "Dark Green"
                    },
                    "": {
                        "id": 24,
                        "color": "527093",
                        "rgb": "82,112,147",
                        "name": "Grayish Blue"
                    },
                    "default": {
                        "id": 25,
                        "color": "527093",
                        "rgb": "82,112,147",
                        "name": "Grayish Blue"
                    }
                };
                window.colorOptions = [{
                    "id": 0,
                    "color": "3b4750",
                    "rgb": "59,71,80",
                    "name": "Dark Grayish Blue"
                }, {
                    "id": 1,
                    "color": "205e91",
                    "rgb": "32,94,145",
                    "name": "Dark Blue"
                }, {
                    "id": 2,
                    "color": "42a9de",
                    "rgb": "66,169,222",
                    "name": "Bright Blue"
                }, {
                    "id": 3,
                    "color": "a9a9a9",
                    "rgb": "169,169,169",
                    "name": "Gray"
                }, {
                    "id": 4,
                    "color": "f06031",
                    "rgb": "240,96,49",
                    "name": "Red"
                }, {
                    "id": 5,
                    "color": "f9b300",
                    "rgb": "249,179,0",
                    "name": "Bright Orange"
                }, {
                    "id": 6,
                    "color": "6eb61f",
                    "rgb": "110,182,31",
                    "name": "Green"
                }, {
                    "id": 7,
                    "color": "b5070c",
                    "rgb": "181,7,12",
                    "name": "Dark Red"
                }, {
                    "id": 8,
                    "color": "4a635e",
                    "rgb": "74,99,94",
                    "name": "Dark Grayish Cyan"
                }, {
                    "id": 9,
                    "color": "23a688",
                    "rgb": "35,166,136",
                    "name": "Dark Cyan"
                }, {
                    "id": 10,
                    "color": "4ae9b6",
                    "rgb": "74,233,182",
                    "name": "Bright Cyan"
                }, {
                    "id": 11,
                    "color": "9d9d9d",
                    "rgb": "157,157,157",
                    "name": "Dark Gray"
                }, {
                    "id": 12,
                    "color": "fa3773",
                    "rgb": "250,55,115",
                    "name": "Pink"
                }, {
                    "id": 13,
                    "color": "fc3d1f",
                    "rgb": "252,61,31",
                    "name": "Bright Red"
                }, {
                    "id": 14,
                    "color": "f8941d",
                    "rgb": "248,148,29",
                    "name": "Orange"
                }, {
                    "id": 15,
                    "color": "ca0369",
                    "rgb": "202,3,105",
                    "name": "Strong Pink"
                }, {
                    "id": 16,
                    "color": "49363f",
                    "rgb": "73,54,63",
                    "name": "Dark Grayish Pink"
                }, {
                    "id": 17,
                    "color": "7a194b",
                    "rgb": "122,25,75",
                    "name": "Dark Pink"
                }, {
                    "id": 18,
                    "color": "ab367d",
                    "rgb": "171,54,125",
                    "name": "Dark Moderate Pink."
                }, {
                    "id": 19,
                    "color": "888888",
                    "rgb": "136,136,136",
                    "name": "Very Dark Gray"
                }, {
                    "id": 20,
                    "color": "29b864",
                    "rgb": "41,184,100",
                    "name": "Cyan Green"
                }, {
                    "id": 21,
                    "color": "00b89e",
                    "rgb": "0,184,158",
                    "name": "Cyan"
                }, {
                    "id": 22,
                    "color": "19508f",
                    "rgb": "25,80,143",
                    "name": "Blue"
                }, {
                    "id": 23,
                    "color": "029420",
                    "rgb": "2,148,32",
                    "name": "Dark Green"
                }];
            </script>
EOD;

echo "            <h1>Meetings</h1>\n";
echo "            <br>\n";
echo "            <a title=\"Create a new roadmap\" class=\"btn btn-success\"  href=\"/apps/newmeeting.php\">New Meeting</a>\n";
#echo "            <a title=\"View multiple roadmaps simultaneously\" class=\"btn btn-success\" style=\"margin-left: 30px\" data-remote=\"true\" href=\"/master_plans/new\">New Master Plan</a>\n";
echo "            <br>\n";
echo "            <br>\n";
echo "            <div id='roadmapable_list'>\n";
echo "                <div class='hidden' id='action-alert'>\n";
echo "                    <div class='alert'>\n";
echo "                        <button class='close alert-close' onclick=\"$('#action-alert').toggle(false);\" type='button'>&times;</button>\n";
echo "                        <span class='text'></span>\n";
echo "                    </div>\n";
echo "                </div>\n";
echo "\n";
echo "                <table class='roadmap-list table table-striped'>\n";
echo "                    <thead>\n";
echo "                       <tr>\n";
echo "                            <th>My Meetings</th>\n";
echo "                            <th>Description</th>\n";
echo "                            <th>Owner</th>\n";
echo "                            <th></th>\n";
echo "                            <th>Date & Time</th>\n";
echo "                            <th></th>\n";
echo "                        </tr>\n";
echo "                    </thead>\n";
echo "                    <tbody id='shared_roadmap_list'>\n";

$uid = 23244;

##### This is for meetings created or owned by loggeed in user
$sql = "SELECT meetingid from tbl_meeting WHERE m_owner = " . $uid . " order by mdate asc";
$mids = getArray($sql);

foreach ($mids as $val)
{

    $mid = $val['meetingid'];
    $meet = new Meeting(' ', 123456);
    $meet = $meet->getSmallMeeting($mid);
    echo "\t<TR <tr class='roadmap roadmapable-row share shared shared_object-row' data-editor='true' data-id='" . $mid ;
    echo "' data-name='" . $meet->m_title . "' data-snapshot='false' data-type='roadmap' data-viewonly='false'>\n";
    echo "<td class='title'><a onclick=\"dataLayer.push({&#39;event&#39;: &#39;open_shared_roadmap&#39;});\" href=\"" . $mid . "\">";
    echo "" . $meet->m_title . "</a>\n</td>\n";
    echo "<td class='description'>\n" . $meet->m_desc . "</td>\n"; 
    echo "<td class='owner'>" . $meet->m_owner . "</td>\n";
    echo "<td class='follow-bell-icon'></td>\n<td class='last_updated_at'>" . $meet->mdate . "</td>\n";
    echo "<td class='actions'></td>\n</tr>\n";
}

##### now we will display meetinsg I am invited to if there are any

$sql = "SELECT COUNT(*) from tbl_attendees WHERE attendeeid = " . $uid ;
$how_man_shared_meetings = getData($sql);
if ($how_man_shared_meetings > 0)
{
    echo "                 <thead>\n";
    echo "                       <tr>\n";
    echo "                            <th>Meetings shared with me</th>\n";
    echo "                            <th>Description</th>\n";
    echo "                            <th>Owner</th>\n";
    echo "                            <th></th>\n";
    echo "                            <th>Date & Time</th>\n";
    echo "                            <th></th>\n";
    echo "                        </tr>\n";
    echo "                    </thead>\n";      
    $sql = "SELECT meetingid FROM tbl_meeting WHERE meetingid IN(SELECT meetingid from tbl_attendees WHERE attendeeid = " . $uid . " ) ORDER BY mdate ASC";
    $mids = getArray($sql);

    foreach ($mids as $val)
    {
        $mid = $val['meetingid'];
        $meet = new Meeting(' ', 123456);
        $meet = $meet->getSmallMeeting($mid);
        echo "\t<TR <tr class='roadmap roadmapable-row share shared shared_object-row' data-editor='true' data-id='" . $mid ;
        echo "' data-name='" . $meet->m_title . "' data-snapshot='false' data-type='roadmap' data-viewonly='false'>\n";
        echo "<td class='title'><a onclick=\"dataLayer.push({&#39;event&#39;: &#39;open_shared_roadmap&#39;});\" href=\"" . $mid . "\">";
        echo "" . $meet->m_title . "</a>\n</td>\n";
        echo "<td class='description'>\n" . $meet->m_desc . "</td>\n"; 
        echo "<td class='owner'>" . $meet->m_owner . "</td>\n";
        echo "<td class='follow-bell-icon'></td>\n<td class='last_updated_at'>" . $meet->mdate . "</td>\n";
        echo "<td class='actions'></td>\n</tr>\n";
    }
}

################################
# Testing the Meeting Object
/*
echo "\n\n\n\n<!-------   this is the data = " . $meet->mdate . "  ---->\n\n\n\n";

$meet = new Meeting('Project kickoff meeting', 23244);
$meet->mdate = '2017-06-21 14:00:00';
$meet->mduration = 60;
$meet->m_desc = 'A meeting where the important nature of our family relations will be discussed.';
$meet->m_location = 1985;	
$meet->m_timezone = 4;	
$meet->m_agenda = 0;	
$meet->vote_to_be_held = 0;
$meet->vote_held = 0;
$meet->vote_completed = '0000-00-00 00:00:00';
$meet->recurring = 0;	
$meet->recurring_type = 0;	
$meet->recurring_indicator = 0;	
$meet->recurring_st_date = '0000-00-00 00:00:00';	
$meet->recurring_ed_date = '0000-00-00 00:00:00';        
$meet->save(); 
*/
################################
echo "\n";
echo "\n";
echo "                        <tr></tr>\n";
echo "                    </tbody>\n";
echo "\n";
echo "                </table>\n";
echo "\n";
echo "            </div>\n";
echo "            <div aria-hidden='true' aria-labelledby='new-laneLabel' class='modal' id='primary-modal' role='dialog' tabindex='-1'>\n";
echo "                <div class='modal-dialog'>\n";
echo "                    <div class='modal-content'>\n";
echo "                        <div id='modal_content_holder'>\n";
echo "                            Loading...\n";
echo "                        </div>\n";
echo "                    </div>\n";
echo "                </div>\n";
echo "            </div>\n";
echo "\n";
echo "            <div class='panel panel-default' id='ajax-loader-modal'>\n";
echo "                <i class='fa fa-spinner fa-spin'></i> Updating\n";
echo "            </div>\n";
echo "        </div>\n";
echo "    </div>\n";
echo "    <nav class='navbar navbar-fixed-bottom footer'>\n";
echo "        <div class='container-fluid'>\n";
echo "            <div class='help'>\n";
echo "                <a href='http://www.productplan.com/help' id='support' target='_blank'>\n";
echo "Help \n";
echo "</a>\n";
echo "                <span>\n";
echo "|\n";
echo "</span>\n";
echo "                <a class='intercom-link' href=''>\n";
echo "Contact Us\n";
echo "</a>\n";
echo "            </div>\n";
echo "            <div class='footer-icon'>\n";
echo "                Powered by\n";
echo "                <a href='http://productplan.com'><img src=\"https://assets0.productplan.com/assets/footer_logo-df856addd91d6c2a00d6ca63cc938882c5ca98252431a0233bd69668b1a4dbbf.png\" alt=\"Footer logo\" />\n";
echo "                </a>\n";
echo "            </div>\n";
echo "        </div>\n";
echo "    </nav>\n";
echo "\n";
echo "    <!--[if lt IE 9]> <script src=\"//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js\" type=\"text/javascript\"></script> <![endif]-->\n";
echo "\n";
echo "</body>\n";
echo "\n";
echo "</html>\n";


?>

