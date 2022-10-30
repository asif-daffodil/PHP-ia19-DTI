<?php
/* $x = 15;
$g = 2;

while ($x <= 10) {
    echo "$g x $x = " . ($g * $x) . " <br>";
    $x++;
}

$a = 1;
while ($a <= 100) {
    if ($a % 7 == 0) {
        echo "$a <br>";
    }
    $a++;
}

for ($i = 0; $i < 10; $i++) {
    echo $i;
}

echo "<br>";

$b = 15;

do {
    echo "$b, ";
    $b++;
} while ($b <= 10); */

$fileName = basename($_SERVER["PHP_SELF"]);

?>

<a href="<?= $fileName; ?>?ghor=2">
    <button>2</button>
</a>
<a href="<?= $fileName; ?>?ghor=4">
    <button>4</button>
</a>
<a href="<?= $fileName; ?>">
    <button>Null</button>
</a>
<br><br>
<?php
$g =  $_GET["ghor"] ?? null;
if (!empty($g)) {
    for ($i = 1; $i <= 10; $i++) {
        echo "$g x $i = " . ($g * $i) . "<br>";
    }
}
?>