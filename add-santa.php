<?php

$newUser = json_decode(file_get_contents('php://input'), true);
$team = $newUser['team'];
 
$file = 'teams/'.$team.'.json'; 
if( file_exists($file) ) {
    $fileContent = json_decode(file_get_contents($file),true);
    array_push($fileContent['members'], $newUser);
}
else {
    $newFile = array();
    $newFile['members'] = array();
    array_push($newFile['members'], $newUser);
    $fileContent = $newFile;
}


$fp = fopen('teams/'.$team.'.json', 'w');
fwrite($fp, json_encode($fileContent));
fclose($fp);

?>