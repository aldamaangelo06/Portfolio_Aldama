<?php
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $mail = new PHPMailer(true);

    try {
      // SMTP setup
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'aldamaangelo0106@gmail.com'; // ✅ your Gmail
      $mail->Password = 'xkjb hijs gmls fjlr';         // ✅ Gmail App Password
      $mail->SMTPSecure = 'tls';
      $mail->Port = 587;

      // Email settings
      $mail->setFrom('aldamaangelo0106@gmail.com', 'Portfolio Contact Form');
      $mail->addAddress('aldamaangelo0106@gmail.com');
      $mail->addReplyTo($email, $name);

      $mail->isHTML(false);
      $mail->Subject = 'New Message from Your Portfolio';
      $mail->Body    = "You received a message:\n\nName: $name\nEmail: $email\n\nMessage:\n$message";

      $mail->send();
      $success = "✅ Thank you, $name! Your message was sent.";
    } catch (Exception $e) {
      $success = "❌ Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
  } else {
    $success = "⚠️ Please fill in all fields correctly.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Me</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #b2f4f4, #e0f7fa);
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      padding: 2rem;
    }

    .contact-box {
      background: #ffffff;
      padding: 2.5rem 2rem;
      border-radius: 16px;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 480px;
    }

    h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      font-size: 2rem;
      color: #1f2937;
    }

    input, textarea {
      width: 100%;
      padding: 12px 14px;
      margin-bottom: 1.2rem;
      border: 1px solid #d1d5db;
      border-radius: 10px;
      font-size: 1rem;
      transition: border-color 0.3s;
    }

    input:focus, textarea:focus {
      border-color: #4f46e5;
      outline: none;
    }

    button {
      width: 100%;
      padding: 12px;
      margin-top: 0.5rem;
      font-size: 1rem;
      border: none;
      border-radius: 10px;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button[type="submit"] {
      background-color: #4f46e5;
      color: #fff;
    }

    button[type="submit"]:hover {
      background-color: #4338ca;
    }

    .btn-secondary {
      background-color: #6b7280;
      color: white;
    }

    .btn-secondary:hover {
      background-color: #4b5563;
    }

    .feedback {
      margin-bottom: 1rem;
      text-align: center;
      padding: 10px;
      border-radius: 8px;
      font-weight: bold;
      font-size: 0.95rem;
    }

    .success {
      background-color: #d1fae5;
      color: #065f46;
      border: 1px solid #10b981;
    }

    .error {
      background-color: #fee2e2;
      color: #991b1b;
      border: 1px solid #ef4444;
    }
  </style>
</head>
<body>

  <div class="contact-box">
    <h2>📬 Contact Me</h2>

    <?php if (!empty($success)): ?>
      <div class="feedback <?= strpos($success, '✅') === 0 ? 'success' : 'error' ?>">
        <?= $success ?>
      </div>
    <?php endif; ?>

    <form method="POST" action="">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
      <button type="submit">Send Message</button>
    </form>

    <a href="index.php">
      <button type="button" class="btn-secondary">Go to Home</button>
    </a>
  </div>

</body>
</html>
