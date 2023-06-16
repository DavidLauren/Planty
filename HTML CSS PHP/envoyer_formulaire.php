<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nom = $_POST["nom"];
$email = $_POST["email"];
$message = $_POST["message"];

  // Adresse e-mail où vous souhaitez recevoir le formulaire
$destinataire = "planty.drinks@gmail.com";

  // Sujet de l'e-mail
$sujet = "Nouveau message depuis le formulaire de contact";

  // Corps de l'e-mail
$corps = "Nom: $nom\n";
$corps .= "Email: $email\n";
$corps .= "Message: $message\n";

  // En-têtes de l'e-mail
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

  // Envoi de l'e-mail
mail($destinataire, $sujet, $corps, $headers);

  // Redirection vers une page de confirmation
header("Location: confirmation.html");
exit();
}
?>