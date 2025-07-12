<?php
// filepath: c:\Users\Gabe\Desktop\BIGTHEWINNERSITE2\process_contato.php

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    // Check for empty fields
    if (empty($name) || empty($email) || empty($message)) {
        echo "<p style='color: red;'>Por favor, preencha todos os campos.</p>";
        exit;
    }

    // Email configuration
    $to = "your-email@example.com"; // Replace with your email address
    $subject = "Novo contato de $name";
    $body = "Nome: $name\nEmail: $email\n\nMensagem:\n$message";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "<p style='color: green;'>Mensagem enviada com sucesso! Entraremos em contato em breve.</p>";
    } else {
        echo "<p style='color: red;'>Ocorreu um erro ao enviar a mensagem. Tente novamente mais tarde.</p>";
    }
} else {
    echo "<p style='color: red;'>Método de requisição inválido.</p>";
}
?>