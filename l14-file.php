<?php
// readfile("./text.txt");

//write file
$fo = fopen("./text.txt", "w");
fwrite($fo, "Chinmoy is not a bad boy\n");
fwrite($fo, "Asharful is a good boy\n");
fwrite($fo, "Ali hayder is a good boy\n");
fclose($fo);

// read file
$fo = fopen("./text.txt", "r");
echo fread($fo, filesize("./text.txt"));
fclose($fo);

echo "<br>";

//fegts
$fo = fopen("./text.txt", "r");
while (!feof($fo)) {
    echo "<h6>" . fgets($fo) . "</h6>";
}

$fo = fopen("./text.pdf", "w");
fwrite($fo, "Chinmoy is not a bad boy\n");
fwrite($fo, "Asharful is a good boy\n");
fwrite($fo, "Ali hayder is a good boy\n");
fclose($fo);
