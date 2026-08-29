<?php
// Mostrar HTML en el navegador
echo "<!DOCTYPE html>";
echo "<html>";
echo "<head><title>Gracias</title></head>";
echo "<body>";
echo "<h1>✅ Registro exitoso</h1>";
echo "<p>Gracias por registrarte en Matrix</p>";
echo "</body>";
echo "</html>";
$email = isset($_POST['email']) ? $_POST['email'] : 'No email';
?>
