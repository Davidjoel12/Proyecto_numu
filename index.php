<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divice-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <div class="container">
        <div class="container-form">
            <form class="sign-in" action="consultas/signIn.php" method="POST">
                <h2>Iniciar Sesion</h2>
                <div class="social-networks">
                    <ion-icon name="logo-instagram"></ion-icon>
                    <ion-icon name="logo-tiktok"></ion-icon>
                    <ion-icon name="logo-xing"></ion-icon>
                </div>
                <span>Use su usuario/correo y contraseña</span>
                <div class="container-input">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" name="usuario" id="email" placeholder="Usuario o Email">
                </div>
                <div class="container-input">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="contraseña" id="password" placeholder="Contraseña">
                </div>
                <a href="#">Olvidaste tu contraseña?</a>
                <button class="button">Iniciar Sesión</button>
            </form>
        </div>
        <div class="container-form">
            <form class="sign-up">
                <h2>Registrarse</h2>
                <div class="social-networks">
                    <ion-icon name="logo-instagram"></ion-icon>
                    <ion-icon name="logo-tiktok"></ion-icon>
                    <ion-icon name="logo-xing"></ion-icon>
                </div>
                <span>Use su correo electrónico para registrarse</span>
                <div class="container-input">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" placeholder="Nombre">
                </div>
                <div class="container-input">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" placeholder="Email">
                </div>
                <div class="container-input">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" placeholder="Contraseña">
                </div>
                <button class="button">Registrarse</button>
            </form>
        </div>

        <div class="container-welcome">
            <div class="welcome-sign-up welcome">
                <h3>Bienvennido!</h3>
                <p>Ingrese sus datos personales para usar todas las funciones del sitio</p>
                <button class="button" id="btn-sign-up">Registrese</button>
            </div>
            <div class="welcome-sign-in welcome">
                <h3>Hola!</h3>
                <p>Regístrese con sus datos personales para usar las funciones del sitio</p>
                <button class="button" id="btn-sign-in">Iniciar Sesión</button>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>