<?php
include('connection.php');


$query_measurement = "SELECT * FROM `air_quality_data` order by date DESC limit 1";



try {
    // These two statements run the query against your database table.
    $stmt1 = $db->prepare($query_measurement);
    $stmt1->execute();
}
catch(PDOException $ex) {
    // Note: On a production website, you should not output $ex->getMessage().
    // It may provide an attacker with helpful information about your code.
    die("Failed to run query: " . $ex->getMessage());
}


    
$last_measure = $stmt1->fetch();

$last_date=$last_measure['date'];
$last_temp=$last_measure['temp'];
$last_hum=$last_measure['hum'];
$last_pm25=$last_measure['pm25'];
$last_nh3=$last_measure['nh3'];

$last_co2=$last_measure['co2'];

$last_no2=$last_measure['no2'];






?>