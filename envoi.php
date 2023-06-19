<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'https://github.com/PHPMailer/PHPMailer/Exception.php';
require 'https://github.com/PHPMailer/PHPMailer/PHPMailer.php';
require 'https://github.com/PHPMailer/PHPMailer/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $numero = $_POST['numero'];
  $email = $_POST['email'];
  $motivation = $_POST['motivation'];
  $attentes = $_POST['attentes'];

  $mail = new PHPMailer(true);
  
  try {
    // Paramètres du serveur SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'gamescraftacademy@gmail.com'; // Remplacez par votre adresse e-mail Gmail
    $mail->Password = 'logiciele'; // Remplacez par votre mot de passe Gmail
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Destinataire et contenu de l'e-mail
    $mail->setFrom($email);
    $mail->addAddress('gamescraftacademy@gmail.com');
    $mail->Subject = 'Nouvelle inscription à la Games Craft Academy';
    $mail->Body = "Nom: $nom\n\nPrénom: $prenom\n\nNuméro de téléphone: $numero\n\nEmail: $email\n\nMotivation: $motivation\n\nAttentes de la formation: $attentes";

    // Envoyer l'e-mail
    $mail->send();
    echo "<h2>Votre inscription a été envoyée avec succès !</h2>";
  } catch (Exception $e) {
    echo "<h2>Une erreur s'est produite lors de l'envoi de l'inscription. Veuillez réessayer.</h2>";
  }
}
?>
