<?php
$fname = "";
$lname = "";
$emailAddress = "";


if(isset($_POST['submit'])){ // si formulaire soumis

echo "<br/>";
echo "<br/>";

echo "[ <b>FR</b> ]";
echo "<br />";
echo "<br />";
echo "Merci" . ' ' . $_POST['fname']  . ' ' . $_POST['lname'] . ' ' . "vous êtes bien enregistré";
echo "<br />";
echo "Afin de finaliser votre enregistrement, un mail de confirmation vous a été envoyé.";
echo "<br />";
echo "<br />";
echo "[ <b>EN</b> ]";
echo "<br />";
echo "<br />";
echo "Thank's" . ' ' . $_POST['fname'] . ' ' . $_POST['lname'] . ' ' . "you are well registered. ";
echo "<br />";
echo "To finalize your registration, a confirmation email has been sent to you.";

}

?>
