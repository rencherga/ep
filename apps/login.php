<?php 

include("functions.php");

error_reporting(E_ERROR | E_WARNING);

echo "<!DOCTYPE html>\n<html lang=\"en\">\n<head>\n";
echo "<!-- Required meta tags always come first -->\n";
echo "<meta charset=\"utf-8\">\n";
echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n";
echo "<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">\n";
echo "<!-- Bootstrap CSS -->\n";
echo "<link rel=\"stylesheet\" href=\"https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css\">\n";
echo "<!-- BOOM goes the dynamite ----->\n";
echo "<title>.:Login:.</title>\n" ;
echo "</head>\n";
echo "  <body>\n";
echo "    <div class=\"container\">\n";
echo "      <form method=\"POST\" action=\"auth.php\" class=\"form-signin\">\n";
echo "        <h2 class=\"form-signin-heading\">Please sign in</h2>\n";
echo "        <label for=\"inputEmail\" class=\"sr-only\">Email address</label>\n";
echo "        <input type=\"input\" name=\"un\" id=\"un\" class=\"form-control\" placeholder=\"Username\" required autofocus>\n";
echo "        <label for=\"inputPassword\" class=\"sr-only\">Password</label>\n";
echo "        <input type=\"password\" name=\"pw\" id=\"pw\" class=\"form-control\" placeholder=\"Password\" required>\n";
echo "        <div class=\"checkbox\">\n";
echo "          <label>\n";
echo "            <input type=\"checkbox\" value=\"remember-me\"> Remember me\n";
echo "          </label>\n";
echo "        </div>\n";
echo "        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>\n";
echo "      </form>\n";
echo "    </div> <!-- /container -->\n";
echo "    <!-- Bootstrap core JavaScript\n";
echo "    ================================================== -->\n";
echo "    <!-- Placed at the end of the document so the pages load faster -->\n";
echo "  </body>\n";
echo "</html>\n";
?>
