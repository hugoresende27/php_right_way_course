<?php

/* Data and Time */
$myTime = time() + 60 * 60 * 24 * 365;  //date plus one year
echo time(); //UNIX timestamp   //current time
echo "<hr>";
echo time() + 60 * 60 * 24;  //current time + one day
echo "<hr>";
echo date("m/d/Y g:ia");            //03/04/2023 1:20pm
echo "<hr>";
echo date("m/d/Y g:ia", $myTime);   //03/03/2024 1:22pm , if pass second parameter, convert to date

date_default_timezone_set("America/Los_Angeles");   //set timezone to LA
echo "<hr>";
echo date("m/d/Y g:ia");
echo "<hr>";
echo date("m/d/Y g:ia", $myTime);
echo "<hr>";
echo date_default_timezone_get();   //get timezone
echo "<hr>";                //mktime to make your time :)
echo date("m/d/Y g:ia", mktime(0,0,0,4,10,null));//04/10/2023 12:00am
echo "<hr>";
echo strtotime("2025-10-3");    //1759474800 timestamp for date
echo "<hr>";
echo date("m/d/Y g:ia", strtotime("last day of february 1988"));//02/29/1988 12:00am
