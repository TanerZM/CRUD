<?php

require_once 'config.inc.php';

$naam       = $_POST['naam'];
$achternaam = $_POST['achternaam'];
$leeftijd   = $_POST['leeftijd'];
$tel        = $_POST['tel'];
$email      = $_POST['email'];
$rugnummer  = $_POST['rugnummer'];
$positie    = $_POST['positie'];

if (
    strlen($naam)       > 0 &&
    strlen($achternaam) > 0 &&
    strlen($leeftijd)   > 0 &&
    strlen($tel)        > 0 &&
    strlen($email)      > 0 &&
    strlen($rugnummer)  > 0 &&
    strlen($positie)    > 0
) {

    $query = "INSERT INTO basketball_members
            (naam, achternaam, leeftijd, tel, email, rugnummer, positie)
            VALUES(
            '$naam',
            '$achternaam',
            '$leeftijd',
            '$tel',
            '$email',
            '$rugnummer',
            '$positie')";

    $result = mysqli_query($mysqli, $query);

    if ($result) {
        header("location:home.php");
        exit;
    } else {
        echo 'er ging iets mis met het toevoegen!';
    }
} else {
    echo 'Een van de ingevulde data was ongeldig!';
} 
