<?php

$studentName = "Setrang";

function studentName($sn = "Chimoy", $city = "Dhaka")
{
    return "Student name is $sn and student city is $city<br>";
}

echo studentName("Ali Hayder", "Feni");
echo studentName($studentName);
echo studentName();
echo studentName(city: "Bogura", sn: "Hero Alom");
