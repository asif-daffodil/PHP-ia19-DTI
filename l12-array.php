<?php
//indexed array
// $studentNAmes = array("Kamal", "Jamal", "Tomal", "Akmal");
$studentNAmes = ["Kamal", "Jamal", "Tomal", "Akmal"];
array_push($studentNAmes, "Abul Mal", "Kamal");
array_pop($studentNAmes);
array_shift($studentNAmes);
array_unshift($studentNAmes, "Chinmoy", "Ishita");

echo count($studentNAmes);
echo "<br>";
echo $studentNAmes[0];
echo "<br>";
echo "<pre>";
print_r($studentNAmes);
echo "</pre>";

for ($i = 0; $i < count($studentNAmes); $i++) {
    /* 
    if ($i + 1 < count($studentNAmes)) {
        $komaSp = ", ";
    } else {
        $komaSp = null;
    } 
    */
    $komaSp = ($i + 1 < count($studentNAmes)) ? ", " : null;
    echo $studentNAmes[$i] . $komaSp;
}
echo "<br>";
$j = 0;
foreach ($studentNAmes as $sn) {
    $komaSp = ($j + 1 < count($studentNAmes)) ? ", " : null;
    echo $sn . $komaSp;
    ++$j;
}

echo "<br>";

//associative array
$studenDetails = ["name" => "Ali Hayder", "age" => 23, "city" => "Feni"];
echo $studenDetails["name"];

$studenDetails["org"] = "DTI";
$studenDetails["name"] = "Hayder Ali";
$studenDetails["email"] = "hayderia-19@dipti.com.bd";
echo "<pre>";
print_r($studenDetails);
echo "</pre>";

foreach ($studenDetails as $k => $sd) {
    // echo strtoupper($k)  . " : $sd <br>";
    // echo strtolower($k)  . " : $sd <br>";
    echo ucfirst($k)  . " : $sd <br>";
}


//multi daimontional array
$students = [
    ["Abul", "Dhaka", 20],
    ["Babul", "Dhaka", 20],
    ["Kabul", "Dhaka", 20],
    ["Bulbul", "Dhaka", 20]
];

$message = [" lives in ", " and his age is ", "."];
echo $students[0][1] . " " . $students[1][1] . " " . count($students[0]);
echo "<pre>";
print_r($students);
echo "</pre>";

for ($i = 0; $i < count($students); $i++) {
    for ($j = 0; $j < count($students[$i]); $j++) {
        echo $students[$i][$j] . $message[$j];
    }
    echo "<br>";
}

$students[2][0];

$personDetails = [
    "Roll 1" => ["Name" => "Ali Hayder", "City" => "Feni"],
    "Roll 2" => ["Name" => "Chinmoy", "City" => "Dhaka"],
    "Roll 3" => ["Name" => "Asharaful", "City" => "Bhrammonbaria"],
];

foreach ($personDetails as $pk => $pd) {
    echo "$pk";
    foreach ($pd as $pdk => $pdv) {
        echo "$pdk : $pdv";
    }
}
