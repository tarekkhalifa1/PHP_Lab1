<?php
// Show php info
    // echo phpinfo();

// Website name as constant
    define('WEBNAME', 'ITI DAY 1');
    // echo WEBNAME;

// Show server name, address, port, filename, and path
// echo "<pre>";
// print_r($_SERVER);
    // echo "<h3> Server Name </h3>";
    // echo $_SERVER["SERVER_NAME"];
    // echo "<h3> Server Address </h3>";
    // echo $_SERVER["SERVER_ADDR"]; echo "</br>";
    // echo "<h3> Server Port </h3>";
    // echo $_SERVER["SERVER_PORT"]; echo "</br>";
    // echo "<h3> File Name </h3>";
    // echo $_SERVER["SCRIPT_FILENAME"]; echo "</br>";
    // echo "<h3> Server Path </h3>";
    // echo $_SERVER["PATH"];
// echo "</pre>";


function showMsg(){
$age = 10;
    switch($age){
        case $age > 0 && $age < 5:
            echo "<h3> Stay at home </h3>"; 
            break;
        case $age == 5:
            echo "<h3> Go to Kindergarden </h3>"; 
            break;
        case $age > 5 && $age < 13:
            echo "<h3> Go to grade five </h3>"; 
            break;
        default: echo "<h3> Please enter age between 1 to 12 </h3>";
}
}

// showMsg();
?>