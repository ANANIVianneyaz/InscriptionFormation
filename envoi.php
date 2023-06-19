<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $numero = $_POST['numero'];
  $email = $_POST['email'];
  $motivation = $_POST['motivation'];
  $attentes = $_POST['attentes'];

  $to = 'gamescraftacademy@gmail.com';
  $subject = 'Nouvelle inscription à la Games Craft Academy';
  $message = "Nom: $nom\n\nPrénom: $prenom\n\nNuméro de téléphone: $numero\n\nEmail: $email\n\nMotivation: $motivation\n\nAttentes de la formation: $attentes";

  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  if (mail($to, $subject, $message, $headers)) {
    echo "<h2>Votre inscription a été envoyée avec succès !</h2>";
  } else {
    echo "<h2>Une erreur s'est produite lors de l'envoi de l'inscription. Veuillez réessayer.</h2>";
  }
}
?>
