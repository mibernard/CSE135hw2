<?php
// Print HTTP headers
header("Cache-Control: no-cache");
header("Content-type: text/html");

// Print HTML header
echo "<html><head><title>Hello HTML World!</title></head>
    <body><h1 align=center>Hello HTML World</h1>
    <hr/>\n";

echo "Hello World<br/>\n";
echo "This program was generated by php programming language at: " . date('r') . "<br/>";
echo "Your current IP address is: " . $_SERVER['REMOTE_ADDR'] . "<br/>";
echo "Team members: Adam Alemi, Roman Ahmadi, Mathew Bernard<br/>";

// Print HTML footer
echo "</body></html>";
?>
