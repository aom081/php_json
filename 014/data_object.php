<img src="pic/p1.jfif" alt="หมาป่า" id="p1">
<img src="pic/p2.jfif" alt="bloodborne" id="p2">
<img src="" alt="" id="" name="">

<?php
$json_data = '{"id":"pic/p1.jfif",}';
?>

<?php for ($i = 1; $i <= 10; $i++) { ?>
    <img src="pic/p1.jfif" alt="" id="p<?= $i; ?>">
<?php } ?>

<?php

//Read the content of a JSON file

$students = file_get_contents('students.json');

//Decode the JSON data into an array

$decoded_data = json_decode($students, true);

echo "<b>ID Name Departmen Batch</b><br/>";

//Print the JSON data

foreach ($decoded_data as $student) {

    $ID = $student['ID'];

    $name = $student['name'];

    $department = $student['department'];

    $batch = $student['batch'];

    echo "$ID $name $department $batch<br/>";
}

?>