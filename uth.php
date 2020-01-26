<?php

$anotherJSON='{"squadName": "Super hero squad", "homeTown": "Metro City", "active": true,"members": [{"name": "Molecule Man", "age": 29,"secretIdentity": "Dan Jukes","powers": ["Radiation resistance","Radiation blast"]}]}';
$phpobj = json_decode($anotherJSON); //converts the json to a PHP object
echo "<pre>";
	print_r($phpobj); 
echo "</pre>";


echo "$phpobj->squadName";

echo "<pre>";
	print_r($phpobj->members); 
echo "</pre>";
?>