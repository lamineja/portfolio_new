<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $voornaam = $_POST["voornaam"];
    $achternaam = $_POST["achternaam"];
    $telefoonnummer = $_POST["telefoonnummer"];
    $email = $_POST["email"];
    $bericht = $_POST["bericht"];

    // E-mail naar de ontvanger
    $ontvanger_email = "laminefadigasy@gmail.com"; // Vervang dit met jouw e-mailadres
    $onderwerp = "Contactformulierbericht van $voornaam $achternaam";
    $bericht_body = "Naam: $voornaam $achternaam\n";
    $bericht_body .= "Bedrijfsnaam: $bedrijfsnaam\n";
    $bericht_body .= "Telefoonnummer: $telefoonnummer\n";
    $bericht_body .= "E-mail: $email\n";
    $bericht_body .= "Bericht:\n$bericht";

    // E-mail naar de gebruiker
    $gebruiker_onderwerp = "Bedankt voor je bericht";
    $gebruiker_bericht = "Bedankt voor je bericht, we nemen zo snel mogelijk contact met je op.";

    // Stuur e-mails
    $verzonden_naar_ontvanger = mail($ontvanger_email, $onderwerp, $bericht_body);
    $verzonden_naar_gebruiker = mail($email, $gebruiker_onderwerp, $gebruiker_bericht);

    if ($verzonden_naar_ontvanger && $verzonden_naar_gebruiker) {
        echo "Bedankt voor je bericht. We hebben je een kopie van het bericht gestuurd. We nemen zo snel mogelijk contact met je op.";
    } else {
        echo "Er is een probleem opgetreden bij het verzenden van het bericht. Probeer het later opnieuw.";
    }

header("Location: https://88683.stu.sd-lab.nl/intro/");
    exit();
}


?>
