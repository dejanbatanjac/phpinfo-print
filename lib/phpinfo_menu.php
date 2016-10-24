<?php
 ob_start();
 phpinfo();
 $c = ob_get_contents();
 ob_end_clean();


 echo '<style type="text/css">
 td, th {font-family: sans-serif;}
 pre {margin: 0px; font-family: monospace;}
 a:link {color: #000099; text-decoration: none; }
 a:hover {text-decoration: underline;}
 table {border-collapse: collapse; font-size:140%;}
 .center {text-align: center;}
 .center table { margin-left: auto; margin-right: auto; text-align: left;}
 .center th { text-align: center !important; }
 td, th { border: 1px solid #000000; font-size: 75%; vertical-align: baseline;}
 h1 {font-size: 150%;}
 h2 {font-size: 125%;}
 .p {text-align: left;}
 .e {background-color: #ccccff; font-weight: bold; color: #000000;}
 .h {background-color: #9999cc; font-weight: bold; color: #000000;}
 .v {background-color: #cccccc; color: #000000;}
 .vr {background-color: #cccccc; text-align: right; color: #000000;}
 img {float: right; border: 0px;}
 hr {width: 600px; background-color: #cccccc; border: 0px; height: 1px; color: #000000;}
 </style>';


 $pos1 = strpos($c, '<table');
 $pos2 = strrpos($c, '</table>', $pos1);

 echo '<div style="margin:10px">';
 echo substr($c, $pos1, $pos2-$pos1+8 );
 echo '</div>';



?>
