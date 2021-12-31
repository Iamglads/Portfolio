<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $object = $_POST['object'];
    $message = $_POST['message'];


    $mailTo = "gladston.aristoverne@gmail.com";
    $headers = "From: ".$email;
    $object = "Objet: ".$object;
    $phone = "Téléphone: ".$phone;
    $txt = "Vous avez reçu un email de ".$name. " . ".$firstname. "\n\n".$message;

    mail($mailTo, $object, $phone, $txt, $headers);
    header("location: index.php?mailsend");
}

?>