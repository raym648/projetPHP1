<?php
$fname = "";
$lname = "";
$subject = "";
$emailAddress = "";
$phoneNumber = "";
$message = "";


if(isset($_POST['submit'])){ // si formulaire soumis

echo "<br/>";
echo "<br/>";

echo "Merci" . ' ' . $_POST['fname']. ' ' . $_POST['lname'] . ' ' . "de nous avoir contacté à propos de" . ' ' . $_POST['subject'];
echo "<br />";
echo "Un de nos conseiller vous contactera soit à l’adresse : " . ' ' . $_POST['emailAddress'] . ' ' . "ou par téléphone au : " . ' ' . $_POST['phoneNumber'];
echo "<br />";
echo "dans les plus brefs délais pour traiter votre demande : "; 
echo "<br />";
echo $_POST['message'];

echo "<br/>";
echo "<br/>";

}

?>
