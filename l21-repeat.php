<?php

$students = [
    [
        "name" => "ALi Hayder",
        "Team" => "Brazil"
    ],
    [
        "name" => "Rasel Hawlader",
        "Team" => "Argentina"
    ]
];



if (count($students) > 0) {
    foreach ($students as $student) {
        foreach ($student as $std) {
?>
            <h1 style='color: green'>
                <?php echo $std;  ?>
            </h1>
<?php

        }
    }
}
