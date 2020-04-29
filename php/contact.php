<?php
$array = array("firstname" => "", "name" => "","email" => "","phone" => "", "sujet" => "", "societe" => "", "message" => "", "firstnameError" => "",
    "nameError" => "", "emailError" => "", "phoneError" => "", "sujetError" => "","societeError" =>"", "messageError" => "", "isSuccess" => false);

$emailTo = "oxyjeune@free.fr";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $array['firstname'] = verifyInput($_POST['firstname']);
    $array['name'] = verifyInput($_POST['name']);
    $array['email'] = verifyInput($_POST['email']);
    $array['phone'] = verifyInput($_POST['phone']);
    $array['sujet'] = verifyInput($_POST['sujet']);
    $array['societe'] = verifyInput($_POST['societe']);
    $array['message'] = verifyInput($_POST['message']);
    $array['isSuccess'] = true;
    $emailText = "";



    if (empty($array['firstname'])){
        $array['firstnameError'] = 'Information requise';
        $array['isSuccess'] = false;
    }
    else
        $emailText .= "Firstname: {$array['firstname']}\n";
    if (empty($array['name'])){
        $array['nameError'] = 'Information requise';
        $array['isSuccess'] = false;
    }
    else
        $emailText .= "Name: {$array['name']}\n";
    if (!isEmail($array['email'])){
        $array['emailError'] = "Format invalide";
        $array['isSuccess'] = false;
    }
    else
        $emailText .= "Email : {$array['email']}\n";
    if (isPhone($array['phone'])){
        $emailText .= "Téléphone : {$array['phone']}\n";

    } else {
        $array['phoneError'] = "Format invalide, chiffre ou espace !";
        $array['isSuccess'] = false;
    }

    if (empty($array['sujet'])){
        $array['sujetError'] = 'Information requise';
        $array['isSuccess'] = false;
    }else
        $emailText .= "Sujet : {$array['sujet']}\n";
    if (empty($array['societe'])){
        $emailText .= "Société : {$array['societe']}\n";
        $array['isSuccess'] = true;
    }
    else
        $emailText .= "Société : {$array['societe']}\n";
    if (empty($array['message'])){
        $array['messageError'] = 'Information requise';
        $array['isSuccess'] = false;
    }
    else
        $emailText .= "Message : {$array['message']}\n";

    if ($array['isSuccess']){
        $headers = "From : {$array['firstname']} {$array['name']} <{$array['email']}>\r\nReply-To: {$array['email']}";
        mail($emailTo, "Un message de votre site", $emailText, $headers);
    }

    echo json_encode($array);
}

function isPhone($var){
    return preg_match("/^[0-9 ]+$/", $var);
}
function isEmail($var){
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}
function verifyInput($var){
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
}

