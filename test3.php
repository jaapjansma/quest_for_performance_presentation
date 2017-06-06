<?php

$db = new PDO('mysql:host=localhost;dbname=performance_test','performance_test', 'performance_test1234');
$i = 0;
foreach ($db->query("SELECT id FROM civicrm_contact") as $row) {
	$i++;
}
echo "Found {$i} records";

?>
