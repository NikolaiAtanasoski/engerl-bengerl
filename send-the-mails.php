<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

$teamname = $_GET['team'];
echo $teamname;
echo "<br>";

$file = 'teams/'.$teamname.'.json';
if( file_exists($file) ) {
    $fileContent = json_decode(file_get_contents($file),true);
    $members = $fileContent['members'];

    shuffle($members);
    $santaPairs = array();
    for($i = 0; $i < count($members) - 1; $i++){
        $pair = create_one_pair($members[$i], $members[$i+1]);
        array_push($santaPairs, $pair);
    }
    //last pair
    $pair = create_one_pair($members[count($members) - 1], $members[0]);
    array_push($santaPairs, $pair);

    echo 'santapairs<br>';
    echo print_r($santaPairs);

    foreach($santaPairs as $pair){
        $santa = $pair->santa;
        $santaEmail = $pair->santaEmail;
        $receiver = $pair->receiver;
        echo '<br>'.$santa.'<br>'.$receiver.'<br>';
        sendEmail($teamname, $santa, $santaEmail, $receiver,);
    }
}
else {
    echo "bitch you guessin";
}

function create_one_pair($santa, $receiver){
    $pair = new stdClass();
    $pair->santa = $santa['name'];
    $pair->santaEmail = $santa['email'];
    $pair->receiver = $receiver['name'];
    return $pair;
}

function sendEmail($teamname, $santa, $santaEmail, $receiver){
    // the message
    $msg = "Hallo ".$santa.'!';
    $msg .= "\r\n";
    $msg .= "\r\n";
    $msg .= "Du darfst heuer ".$receiver." beschenken! juhu";
    $msg .= "\r\n";
    $msg .= "\r\n";
    $msg .= "Frohe Weihnachten!";
    
    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);
    
    //if(email != empty){
    mail($santaEmail,"Deine ".$teamname." Engerl Bengerl Auslosung",$msg);
    // send email
    //}
}

?>