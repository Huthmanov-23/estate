<?php

require 'residentclass.php';

$obj = new Resident;
$obj->doupload($_FILES);
print_r($_FILES);

//print_r($_FILES); this is how to treat an uploade image
?>