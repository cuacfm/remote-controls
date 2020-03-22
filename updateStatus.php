<?php
$status=$_REQUEST['status'];
$channel=$_REQUEST['channel'];
$output="";
if (strcmp($status,"live")==0) {
   $output = shell_exec('/var/www/html/cuacfm.org-static/update-remote-conf.sh live');
}
if (strcmp($status,"preview")==0) {
   $output = shell_exec('/var/www/html/cuacfm.org-static/update-remote-conf.sh preview '.$channel);
}
if (strcmp($status,"retransmission")==0) {
   $output = shell_exec('/var/www/html/cuacfm.org-static/update-remote-conf.sh retransmission');
}
header("Location: index.html");
die();
?>