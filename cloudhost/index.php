<?
//cloudhost by john-dev
include("../includes/config.php");
include("../includes/function.inc.php");
include("../includes/class_REQUEST.php");//clouapp request handler
include("../includes/class_AUTH.php");
include("../includes/class_KEY.php");
include("../includes/class_UPLOAD.php");
include("../includes/class_FILES.php");
include("../includes/class_SHORTURL.php");
include('../includes/class_DIGEST.php');
include('../includes/ext_class_PUSHER.php');

if (function_exists("apache_request_headers")) {
  $header_in = apache_request_headers();
} else {
   die('cannot access headers');
}

$req=new handleREQUEST($header_in);

if(DO_DEBUG) {
    echo "<pre>SERVER:<br />";
    print_r($_SERVER);
    echo "</pre><br />";
     echo "<pre>FILES:<br />";
    print_r($_FILES);
    echo "</pre>"; 
}












