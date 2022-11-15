<?php
date_default_timezone_set("Asia/Dhaka");
echo date("m-d-y") . "<br>";
echo date("m/d/y") . "<br>";
echo date("M/d/y") . "<br>";
echo date("F/d/y") . "<br>";
echo date("F/d/Y (D)") . "<br>";
echo date("F/d/Y (l)") . "<br>";
echo date("F/d/Y (l) h:i:s a") . "<br>";
echo date("F/d/Y (l) H:i:s A") . "<br>";


//mktime
// hour minute second month day year
$myTime = mktime(0, 0, 0, 12, 21, 2032);
echo date("F/d/Y (l) H:i:s A", $myTime) . "<br>";


//strtotime
$nextFriday = strtotime("next friday");
echo date("F/d/Y (l) H:i:s A", $nextFriday) . "<br>";

$nextday = strtotime("+3 years +6 month +5 days");
echo date("F/d/Y (l) H:i:s A", $nextday) . "<br>";

$startDate = strtotime("next friday");
$endDate = strtotime("+6 weeks", $startDate);

while ($startDate <= $endDate) {
    echo date("F/d/Y (l)", $startDate) . "<br>";
    $startDate = strtotime("+1 week", $startDate);
}
